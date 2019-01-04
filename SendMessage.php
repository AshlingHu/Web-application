<?php
include('SendM.php');
$phone=trim($_POST['phone']);
$code=trim($_POST['code']);
set_time_limit(0);
header('Content-Type: text/plain; charset=utf-8');
$response = SmsDemo::sendSms($phone,$code);
$json_arr = array("phone"=>$phone,"code"=>(string)$code);
header('Content-Type:text/json');
$json_obj = json_encode($json_arr);
echo $json_obj;
?>