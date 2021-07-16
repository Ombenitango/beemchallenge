<?php
$phonenumber="";
$message="";
if(isset($_POST['name'])){
    $phonenumber=$_POST['name'];
    $message=$_POST['message'];
}
$api_key='cde13a33df7541ca';
$secret_key = 'YzM1ZDU0M2MwODJkYzhlYzcyZTc5OTdiY2I4OWEwY2Q5OTEyMTM2ZGFjOTU0NjZlMjE0ZDY5NjU0NTUxYjNiNA==';

$postData = array(
    'source_addr' => 'INFO',
    'encoding'=>0,
    'schedule_time' => '',
    'message' =>  $message,
    'recipients' => [array('recipient_id' => '1','dest_addr'=>'255700000001'),array('recipient_id' => '2','dest_addr'=>$phonenumber)]
);

$Url ='https://apisms.beem.africa/v1/send';
$ch = curl_init($Url);
error_reporting(E_ALL);
ini_set('display_errors', 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);

if($response === FALSE){
        
  echo $response;

    die(curl_error($ch));
}else {
    echo "error";
}
var_dump($response);