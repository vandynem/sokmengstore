<?php 

$transactionId=$_GET["order_id"];
$amount=$_GET["amount"];
$currency=$_GET["currency"];
$merchant_id=$_GET["merchant_id"];
$api_key=$_GET["api_key"];

$timestamp = strftime("%Y%m%d%H%M%S");

//function gethash()
//{
//$tmp = $timestamp . '.' . $merchant_id . '.' . $transactionId . '.' . $amount . '.' . $currency;
$hash = base64_encode(hash_hmac('sha512', 'konfulon' . $transactionId . $amount,'ba089bcd3bafd8323c2013d3e0342672', true));
$myObj->hash =strtr($hash, '+/=', '._-');
echo json_encode($myObj);
//}

?>