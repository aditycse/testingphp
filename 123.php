<?php
$var = "";
if(!empty($var)) {
	echo $var." i m done";
} else {
	var_dump($var);
	echo "i m fail";
}
die("jjjj");
echo date('Y-m-d',strtotime("2014-5-15"));
echo "ddd";
echo date('Y-m-d',strtotime("15:05:2015"));
$postData = json_decode(file_get_contents("php://input", true), true);
print_r($postData);die;


$fh = @fopen('/var/www/dev_fmsproddev.sh', 'r');
//echo filesize('/var/www/dev_fmsproddev.sh');die;
while($dta = @fread($fh, '100')) {
	print_r($dta);
}
die;
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($fruit);
print_r($stack);die;
?>
<?php

$arr = file('http://in2.php.net/manual/en/function.file.php');
print_r($arr);die;


$array['aditya'] = "kllll";
$array['bunty'] = array();
echo"ddd";
$str= '{
  "grouped":{
    "Cid":{
      "matches":20,
      "ngroups":2,
      "doclist":{"numFound":20,"start":0,"docs":[
          {
            "Cid":472197,
            "CName":"Giordano",
            "L3Catid":580},
          {
            "Cid":481042,
            "CName":"Test Company",
            "L3Catid":6}]
      }}}}';
echo json_decode($str);die;



$str = "I m done\n";
die($str);
?>
<?php
$str = "12345";
static $i = 0;
static $val = 0;
while ($i >= 0) {
	if ($str[$i] != "") {
		$val +=$str[$i];
		$i++;
	} else {
		$i = -1;
	}
}
$str = "1234567";
$j = $val1 = 0;
while ($str[$j]) {
	$val1 +=$str[$j];
	$j++;
}
echo $val1;
print_r($val);
die;




echo date('Y-m-d H:i:s', strtotime('+1 day', time()));
die;
$arr1 = array(1, 2, "jjjjj");
$arr2 = array("adutya", "ankesh");
$arr3 = array();
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
die("jkjjj");
?>





<?php
$str = '<!doctype html><html lang="en"><head><meta charset="UTF-8"><title></title><link rel="stylesheet" type="text/css" href="../css/timeline.css"><body><div><ol type="a" style="margin:0;"><li style="margin: 0px; padding: 0px;">All Deals on FINDIT MALAYSIA&nbsp;are not exchangeable for cash and/or other goods and services.</li><li style="margin: 0px; padding: 0px;">Deals are valid on the date and location stated&nbsp;</li><li style="margin: 0px; padding: 0px;">Deals cannot be combined with any other offer/promotion unless stated otherwise.</li><li style="margin: 0px; padding: 0px;">No replacement or extension will be given for any expired Deals.</li><li style="margin: 0px; padding: 0px;">Customer is required to flash the Deal&nbsp;when redeeming offer.</li><li style="margin: 0px; padding: 0px;">Unless otherwise stated at the time a Deal is redeemed, the prices of services / products do&nbsp;not include service charges, value added or taxes, which may be charged to the customer separately by the retailer at the time the Deal&nbsp;is redeemed.</li></ol></div></body></html>';
echo htmlentities($str);
?>	
<?php

interface a {

	public function foo();
}

interface b extends a {

	public function baz(Baz $baz);
}

// This will work
class c implements b {

	public function foo() {
		
	}

	public function baz(Baz $baz) {
		print_r($baz);
	}

}

class Baz {
	
}

$c = new c();
print_r($c);
$c->baz(new baz());
die("sdfg");

echo urldecode("https://getittransnational.atlassian.net/issues/?filter=10400&jql=status%20%3D%20Open%20AND%20%22Resource%20for%20task%20assignment%22%20%3D%20%22Aditya%20Mehrotra%22%20ORDER%20BY%20createdDate%20DESC");
die;
echo html_entity_decode("<html?bhjhjhjhjhjjh dshhjdfj jjj");
die;

function test() {
	echo 123;
}

die;

class aditya {

	public function test() {
		return 123;
	}

}

$adi = new aditya();
return $i = $adi->test();







die;
$array = array(1 => 2, 2 => 3, 3 => 4);
echo count($array);
echo sizeof($array);
die;
urlencode($str);
?>
<?php
try {
	$data = 100 / 0;
} catch (Exception $e) {
	var_dump($e);
	die;
}
echo $data;
die;
?>

<?php
$str = "RM0. FINDIT MALAYSIA - Thanks for downloading the app. For a chance to win an iPhone 5S, sign in with yr Maxis/Hotlink number through the app now.";
echo urlencode($str);
die;

$str = "http://203.115.222.57/restapi/callSmsApi.xml?msisdn=60173000855&message=RM0. FINDIT MALAYSIA - Thanks for downloading the app. For a chance to win an iPhone 5S, sign in with yr Maxis/Hotlink number through the app now.&mode=esms&price=0&language_code=en&plateform=wap";
echo urlencode($str);
die;


echo "Initial: " . memory_get_usage() . " bytes \n";
/* prints
  Initial: 361400 bytes
 */

// let's use up some memory
for ($i = 0; $i < 100000; $i++) {
	$array [] = md5($i);
}

// let's remove half of the array
for ($i = 0; $i < 100000; $i++) {
	unset($array[$i]);
}

echo "Final: " . memory_get_usage() . " bytes \n";
/* prints
  Final: 885912 bytes
 */

echo "Peak: " . memory_get_peak_usage() . " bytes \n";
/* prints
  Peak: 13687072 bytes
 */
die;




$files = glob('/var/www/webservice/trunk/app/Controller/*.*');
print_r($files);
die;
$imagedata = file_get_contents("http://localhost/newfms/trunk/app/webroot/files/classified/aditya");
$base64 = base64_encode($imagedata);
echo base64_encode($imagedata);
$encode = '<img src="data:image/jpg/png/gif;base64,' . $base64 . '" >';
echo $encode;
//$path="http://localhost/newfms/trunk/app/webroot/files/classified/aditya";
//$data = file_get_contents($path);
//$base64 = 'data:image/png;base64,' . base64_encode($data);
//echo"<p>". $base64."</p>";
die;

$data = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&sensor=true");
print_r($data);
die;
$arr = array();
$arr['city'] = array();
$arr['city']['city_id'] = 5;
$arr['city']['city_name'] = "adyui";
$arr['locality'] = array();
$arr['locality'][0]['locality_id'] = 5;
$arr['locality'][0]['locality_name'] = "adyui";
$arr['locality'][1]['locality_id'] = 5;
$arr['locality'][1]['locality_name'] = "adyui";
echo json_encode($arr);
die;
echo time();
die;
$time = 12345;
if ($time <= 24 * 60 * 60) {
	echo "yaaaa";
	die;
}
print_r($_SERVER);
die;
$obj = new stdClass();
$obj->bunty = "bunty";
$obj->bubly = "bubly";
$arr = array("bunty" => 'bunty', 'bunty1' => 'bunty', '0' => 'bunty', '5' => 'bunty');
$arr[] = "sunaina";
print_r($arr);
die;




$str = '999999999';
var_dump(ctype_digit($str));
die;
$chars = " 012%20OR%203456789%20OR%20 ";
echo rtrim(trim($chars), '%20OR%20');
echo "<br/>";

$chars = " 012%20OR%203456789%20OR%20  ";
echo preg_replace('/%20OR%20$/', '', trim($chars));
die;
echo substr(trim($chars), 0, -8);
die;




$accessNumber = substr(str_shuffle($chars), 0, 3);
echo $accessNumber;
die;

if (in_array(95, array('95', '99'))) {
	echo "hi";
	die;
}
?>
<?php
//echo (int)(0.2+0.7);
$var = (0.7 + 0.1) * 10;
$var1 = 8;
echo $var1;

echo (int) $var;
die;
?>
<script language="php">
$i = 1;
if ($i) {
	echo "aditya";
	die;
}
</script>

<?= "vghkjlklk" ?>
<?php
die;

$res = file_get_contents("http://203.115.222.57:9090/solr/en_collection1/select?q=*:*&fq=L3Catid:(373 OR 374 OR 375 OR 376 OR 377 OR 378 OR 379 OR 380 OR 381 OR 382 OR 383 OR 384 OR 385 OR 386 OR 387 OR 388 OR 389 OR 390 OR 392 OR 393 OR 394 OR 395 OR 397 OR 398 OR 399 OR 400 OR 401 OR 402 OR 403 OR 404 OR 405 OR 406 OR 11 OR 7 OR 6 OR 13 OR 14 OR 9 OR 17 OR 10)&fl=Cid,CName,L3Catid,CAddrLc,CAddrB,CAddrStr,CAddrLm,CAddrSblc,BrndName,L3Cat,geodist()&fq=%7B%21geofilt%7D&sfield=XYLocation&pt=28.459497,77.02663799999999&d=50000&sort=geodist()+asc&fq=record_type:COMPANY&wt=json");
print_r($res);
die;
$str = "adfkkll;;";
printf($str);
die;
//$msg="REG";
//$data=explode(" ",$msg);
//print_r($data);die;
//$s = '1_000_IMG.JPG.jpg';
//$pattern = '/([0-9]+\_[0-9]?[_]?)?/i';
//echo str_replace('.JPG','',preg_replace($pattern, '',$s));
//exit;
//$s='_adc.jpg';
//echo str_replace('_','',$s);
//die;
////
exit("vdjjkjkk");
//die("-1");
print_r($_SERVER);
die;
$time = '16-12-2013 10:27:00';
echo strtotime($time);
die;
$str = "Successfull Billing Count :" . '$countSuccessfulBilling' . "<br/>" . "Unsuccessfull Billing Count :" . '$countUnsuccessfulBilling';
echo $str;
die;
$retryTime = date('Y-m-d H:i:s', time() + 60 * 60);
echo $retryTime;
echo date('Y-m-d H:i:s');
die;
$arr = array('0' => '123456', 'aditya' => 'aditya', 'ankesh' => 'ankesh1');
$str = "7564125454aditya" . implode("", $arr);
//$str.=implode("",$arr);
//$str=md5($str);
print_r($str);
die;



$title1 = "sghcdgjhh hghg &^ hgggh)))))hhjjh ;'kj ____";
$title = preg_replace('/[^a-z0-9\-\_\.]/i', '_', $title1);
echo $title;
die;
echo base64_encode('m8oMx1');
die;
$url = "http://192.168.13.3/newfms/trunk/RestApi/getSessionToken?plateform=USSD&session_id=1";
print_r(get_headers($url));
die;
echo base64_decode('VVNTREd3NnAzNw==');
die;
$field['master_value'] = '#Acer#HP#Apple#Dell#Lenovo#Samsung#Sony#Fujitsu#Toshiba#HCL#LG#AMD#Intel#IBM#Compaq#ASUS#Panasonic#Google#Packard Bell#Hitachi#A4Tech';
$values = explode('#', $field['master_value']);
$values = array_diff($values, array(''));
echo "<pre>";
print_r($values);
die;
$str = "1970-01-01T08:03:34Z";
echo date('Y-m-d', strtotime($str));
die;
phpinfo();
echo urldecode("http://192.168.12.35:8983/solr/en_collection1/select?q=*:*&fl=CName,PTCMo,CDidNo,Cid,XY:geodist(XYLocation,37.785834,-122.406417),Exat:geodist(Exatlocation,37.785834,-122.406417)&fq=%7B%21geofilt%7D&sfield=XYLocation&pt=37.785834,-122.406417&d=10000&sort=geodist()+asc&fq=L3Catid:35&fq=:Listing&fq=:Array&fq=record_type:COMPANY&start=0&rows=9&fq=CName:([''%20TO%20*])&fq=PTCMo:([''%20TO%20*])&wt=json");
die;
$data = "Gggg
Ggggg";
echo json_encode($data);
die;
$str = "1970-01-01T00:33:33Z";
echo strtotime('1970-01-01');
die;
$bar = 'daily';
$bar = ucwords($bar);			 // HELLO WORLD!
$bar = ucwords(strtolower($bar));
echo $bar;
die;
echo urldecode("http://192.168.12.35:8983/solr/en_collection1/select?q=*:*&fq=record_type:COMPANY&fq=CName:%28[%27%27%20TO%20*]%29&fq=PTCMo:%28[%27%27%20TO%20*]%29");
die;
$str = "aditya mehrotra";
$search_str = str_replace(' ', '*', $str);
$search_str .="*";
$search_cond = '&fq=CNameEx:' . $search_str;
echo $search_cond;
die;
//echo date('Y-m-d h:i:s');die;
//echo urldecode('http://192.168.12.35:8983/solr/collection2/select?q=*:*&fl=*,XY:geodist%28XYLocation,28.6353,77.225%29,Exat:geodist%28Exatlocation,28.6353,77.225%29&fq={!geofilt}&sfield=XYLocation&pt=28.6353,77.225&d=5000&sort=geodist%28%29+asc&defType=edismax&qf=L3Cat^3.3+L3CatPKw^2.3+CName^1.3+L3CatSKw^1.1&stopwords=true&lowercaseOperators=true&fq=record_type:COMPANY&start=0&rows=10&wt=xml');
//$sms_str='Results for your search:'.PHP_EOL;
//for($i=1;$i<=3;$i++){
//    $sms_str .=" ".$i.") "."result".PHP_EOL."contact_number".PHP_EOL;
//}
//print($sms_str);
//die;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//function tr() {
//    $string = '12#31#2#3#56#7#45';
//    //$keywords = preg_split("/#/", $string); same as explode but slower
//    $keywords= explode('#',$string);
//    $result = array();
//    $j =0;
//    for($i=0;$i<count($keywords);$i++){
////        if($keywords[$i]=='2'){
////
////        } else {
////            $result[$j]=$keywords[$i];
////            $j++;
////        }
//        $key = array_search('2',$keywords);
//    }
//    $key = array_search('2',$keywords);
//    unset($keywords[$key]);
//    print_r($keywords);
//print_r(implode('#',$result));
//}
//tr();
//$imagedata = file_get_contents("http://localhost/newfms/trunk/app/webroot/files/classified/aditya");
//             // alternatively specify an URL, if PHP settings allow
//$base64 = base64_encode($imagedata);
//echo base64_encode($imagedata);
//$encode = '<img src="data:image/jpg/png/gif;base64,' . $base64 .'" >';
//echo $encode;
//$path="http://localhost/newfms/trunk/app/webroot/files/classified/aditya";
////$data = file_get_contents($path);
////$base64 = 'data:image/png;base64,' . base64_encode($data);
////echo"<p>". $base64."</p>";
//
//$data = base64_encode(file_get_contents($path));
//print_r($data);
//$str="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";
//
// $data = base64_decode($str);
//
//$im = imagecreatefromstring($data);
//header('Content-Type: image/png');
//imagepng($im);
//var_dump(getimagesize($im));
//echo "aditya";
$data = 'a';
switch ('b') {

	case 'a':
		echo "aditya";
		continue;

	case 'b':
		echo "ankesh sir";
		continue;
	default :
		echo "arun";
		break;
}
//$token = substr(rand(),0,6);
//$tok=mt_rand();
//print_r($token);
die;
?>
