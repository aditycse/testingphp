<?php

function update() {
	$address = $_GET['add'];
	$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	curl_close($ch);
	$response_a = json_decode($response);
	$array = array();
	$array['latitude'] = $lat = $response_a->results[0]->geometry->location->lat;
	$array['longitude'] = $long = $response_a->results[0]->geometry->location->lng;
	$sql = "update details set longitude='$long', latitude='$lat' where present_address='$address'";
	mysql_query($sql);
	return $array;
}
$array = update();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0 }
			#map-canvas { height: 100% }
		</style>
		<script type="text/javascript"
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMzUFrfeCz06UXeJ0vNqUhClor6NHuL78&sensor=true">
		</script>
		<script type="text/javascript">
			function initialize() {
				var lat = <?php echo $array['latitude']; ?>;
				var long = <?php echo $array['longitude']; ?>;
				var myLatlng = new google.maps.LatLng(lat, long);
				var mapOptions = {
					zoom: 10,
					center: myLatlng
				}
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

				// To add the marker to the map, use the 'map' property
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: "Welcome!"
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div id="map-canvas"></div>
	</body>
</html>