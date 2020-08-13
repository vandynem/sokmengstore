<?php 

$orderid = $_GET['orderID'];
header("Location: https://konfulononline.com/index.php?route=extension/payment/globalpay/notify_mobile&orderID=".$orderid);
exit();

?>