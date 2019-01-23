<?php

header("Access-Control-Allow-Origin: *");


$headers = array();
$headers[] = 'Content-Type: application/json; charset=UTF-8';

$post_data = '';

foreach ($_REQUEST as $key => $value) {
    ($post_data == '') ? $post_data =  '?' . $key . '=' . $value : $post_data = $post_data . '&'. $key . '=' . $value;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . $post_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$responseFromApi  = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

( curl_errno( $ch ) ) ? $retVal = array("result"=>false) : $retVal = $responseFromApi;

curl_close($ch);

echo $retVal;

exit();