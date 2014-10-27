<?php

class GCM {
    function __construct() {

    }
    public function send_notification1($registatoin_ids, $message) {

        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';

		$msg = array('price'=> $message);
        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $msg
        );
//$apikey = "AIzaSyBwCslXXgFOdzjd8peJrWxaeR4mvEQyvsI";
        $headers = array(
            'Authorization:key=AIzaSyAOBmgqpdfDzKo7dMa_bTZ18aQLr7UHGPg',
            'Content-Type:application/json'
        );
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
//echo json_encode($fields);die;
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);
        echo $result;
    }
	/**
     * Sending Push Notification
     */
    public function send_notification($registatoin_ids, $message) {
        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';

        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $message,
        );

        $headers = array(
            'Authorization: key=AIzaSyBv2tr5XvVPVm3_Oxh-BcxcOH_MxUAUebE',
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		//echo json_encode($fields);die;
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);
        echo $result;
    }

}


$message = array("price" => "shirt");
$aditya = new GCM();
$registatoin_ids = array('APA91bHg5zuDFHUsr7JEPMICkjVHPRdR2GbTktIA6oQ56SYcHR8nyYrgZ_t6xtMKdaAqdqL9fvxU9uhuTk1VIVefAc4TLQUzg_NUAUtXPlGuDAjYRvE0TsTAs6MqyMUNFGwiIuQZ76L8uycNug6Vk9zmxc2hxIcXjE_J05W5S4G8XdSBKx6gGZM','APA91bEUObLxKSrKz9O29-WqlwBqm8iM3fjS-aRSSg85myJ9CdyS46hNQOOm-bM4odZIzHpPwXJTUji15XI6nNlzjwaJaShzsc7W3di8bDuFq9mdUMQ-W4IyB1x2lviX-aK2nqKP11fwYTCWK2MteY-OCttzPRRHss5EWKK_JOLAwRoOFsfxrbY');
$aditya->send_notification($registatoin_ids, $message);
?>