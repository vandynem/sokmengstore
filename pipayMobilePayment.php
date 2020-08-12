<html>
<head>
<script>
window.onload = function(){
  document.forms['paymentForm'].submit();
}
</script>
<title>Sample Form Redirect with POST method</title>
<?php
$mid="110247";
$orderAmount=$_GET["orderAmount"];
$orderid=$_GET["orderid"];
$a=MD5($mid.$orderid.$orderAmount) ;
?>
</head>
<body>
<!--BEGINNING OF PAYMENT FORM-->
<form name="paymentForm"  action="https://onlinepayment.pipay.com/starttransaction" method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
<input type="hidden" id="mid" name="mid" value="110247"/>

<input type="hidden" name="lang" id="lang" value="en"/>
<input type="hidden" name="orderid" id="orderid" value="<?php echo$orderid;?>"/>
<input type="hidden" name="orderAmount" id="orderAmount" value="<?php echo $orderAmount;?>"/>
<input type="hidden" name="currency" id="currency" value="USD"/>
<input type="hidden" name="trType" id="trType" value="1"/>
<input type="hidden" name="confirmURL" id="confirmURL" value="https://konfulononline.com/index.php?route=extension/payment/realex/notifymobile"/>
<input type="hidden" name="cancelURL" id="cancelURL" value="https://konfulononline.com/index.php?route=extension/payment/realex/notifymobile"/>

<input type="hidden" name="sid" id="sid" value="239635"/>
<input type="hidden" name="did" id="did" value="240593"/>
<input type="hidden" name="orderDate" id="orderDate" value="2016-1221T11:21:28.717+0700"/>
<input type="hidden" name="payMethod" id="payMethod" value="wallet"/>
<input type="hidden" name="digest"  id="digest" value="<?php echo $a;?>"/>
<input type="hidden" name="cancelTimer" value="300" />
<input type="hidden" name="description" value="Extra information"/>
<input type="hidden" name="successScreenDelay" value="0" />
<input type="image" name="submit" src="" alt="Pi Pay - The safer, easier way to pay online" />
</form>
<!--END OF PAYMENT FORM-->



</body>
</html>