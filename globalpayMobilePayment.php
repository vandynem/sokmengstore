
<html>
<head>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<!--   Make a copy this javaScript to paste into your site -->
		<!--   Note: these javaScript files are using for only integration testing -->
		<link rel="stylesheet" href="https://payway.ababank.com/checkout-popup.html?file=css"/>
		<script src="https://payway.ababank.com/checkout-popup.html?file=js"></script>

		<!--   These javaScript files are using for only production -->
		<!--<link rel="stylesheet" href="https://payway.ababank.com/checkout-popup.html?file=css"/>
		<script src="https://payway.ababank.com/checkout-popup.html?file=js"></script> -->





<?php 
$transactionId=$_GET["tran_id"];
$amount=$_GET["amount"];
$firstname=$_GET["firstname"];
$lastname=$_GET["lastname"];
$phone=$_GET["phone"];
$email=$_GET["email"];
$return_url=$_GET["return_url"];
$continue_success_url=$_GET["continue_success_url"];
$hash=strtr($_GET["hash"],'._-','+/=');

?>


</head>
<body>
<form action="https://payway.ababank.com/api/pwkonfulonk/" method="POST" target="aba_webservice" class="form-horizontal" id="aba_merchant_request" name="aba_merchant_request">
  	<input type="hidden" name="hash" value="<?php echo $hash ?>" id="hash"/>
						<input type="hidden" name="tran_id" value="<?php echo $transactionId ?>" id="tran_id"/>
						<input type="hidden" name="amount" value="<?php echo $amount ?>" id="amount"/>
						<input type="hidden" name="firstname" value="<?php echo $firstname ?>"/>
						<input type="hidden" name="lastname" value="<?php echo $lastname ?>"/>
						<input type="hidden" name="phone" value="<?php echo $phone ?>"/>
						<input type="hidden" name="email" value="<?php echo $email ?>"/>
						<input type="hidden" name="return_url" value="<?php echo $return_url ?>"/>
						<input type="hidden" name="continue_success_url" value="<?php echo $continue_success_url ?>"/>
						<input type="hidden" name="return_params" value="json"/>
</form>

<script>
window.onload = function(){
  document.forms['aba_merchant_request'].submit();
}
</script>

</body>
</html>
