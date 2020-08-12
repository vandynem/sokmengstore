<html>
<head>
<title>Sample Form Redirect with POST method</title>
<?php
ini_set("display_errors", 1);


$mid="100660";
$orderAmount="1";
$trType=1;
$sid=1474;
$orderid="20181403";
$a=MD5($mid.$orderid.$orderAmount) ;
?>
</head>
<body>
<!--BEGINNING OF PAYMENT FORM-->
<form action="" method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
<input type="hidden" id="mid" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="lang" id="lang" value="en"/>
<input type="hidden" name="orderid" id="orderid" value="<?php echo$orderid;?>"/>

<input type="hidden" name="orderAmount" id="orderAmount" value="<?php echo $orderAmount;?>"/>
<input type="hidden" name="currency" id="currency" value="USD"/>
<input type="hidden" name="trType" id="trType" value="<?php echo $trType;?>"/>
<input type="hidden" name="confirmURL" id="confirmURL" value="https://konfulononline.com/"/>
<input type="hidden" name="cancelURL" id="cancelURL" value="https://konfulononline.com/admin/"/>

<input type="hidden" name="sid" id="sid" value="<?php echo $sid;?>"/>
<input type="hidden" name="did" id="did" value="1915"/>
<input type="hidden" name="orderDate" id="orderDate" value="2016-1221T11:21:28.717+0700"/>
<input type="hidden" name="payMethod" id="payMethod" value="wallet"/>
<input type="hidden" name="digest"  id="digest" value="<?php echo $a?>"/>
<input type="hidden" name="cancelTimer" value="300" />
<input type="hidden" name="description" value="Extra information"/>
<input type="hidden" name="successScreenDelay" value="0" />
<button type="submit" name="basic_search" class="btn btn-success col-xs-12"> Search </button>
</form>
<!--END OF PAYMENT FORM-->

<form method="post">
            
             <input type="submit" id="submit" name="submit" value="click">
         </form>
<?php 
if(isset($_REQUEST['basic_search'])){
    
    $mmid=$_POST['mid'];
    $lang=$_POST['lang'];
    $oorderid=$_POST['orderid'];
    $oorderAmount=$_POST['orderAmount'];
    $currency=$_POST['currency'];
    $trType=$_POST['trType'];
    $confirmURL=$_POST['confirmURL'];
    $cancelURL=$_POST['cancelURL'];
    $ssid=$_POST['sid'];
    $did=$_POST['did'];
    $orderDate=$_POST['orderDate'];
    $payMethod=$_POST['payMethod'];
    $cancelTimer=$_POST['cancelTimer'];
    $description=$_POST['description'];
    $successScreenDelay=$_POST['successScreenDelay'];
    $a1=MD5($mmid.$oorderid.$oorderAmount) ;
    
$post_data = array(
    'mid'			=> $mmid,
    'lang'			=> $lang,
    'orderid'              => $oorderid,
   
    //'destination'		=> substr($receiver, -10),
    'orderAmount'		=> $oorderAmount,
    'currency'		=> $currency,
    'sid'			=>$ssid,
    'did'		=> $did,
    'orderDate'		=> $orderDate,
    'payMethod'			=>$payMethod,
    'trType'			=>$trType,
    'confirmURL'		=> $confirmURL,
    'cancelURL'		=> $cancelURL,
    'description'			=>$description,
    'digest'			=>"6ea26df3cc057a74789c23313ea50e7e",
    'cancelTimer'		=> $cancelTimer,
    'successScreenDelay'			=>$successScreenDelay
    
);

echo var_dump($post_data);
//echo "<script>alert('post')</script>";
//echo "<script>alert(".var_dump($post_data).")</script>";
//$curl = curl_init();

//curl_setopt($curl, CURLOPT_HEADER, 'application/x-www-form-urlencoded');
//curl_setopt($curl, CURLINFO_HEADER_OUT, true);
//curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_URL, "https://onlinepayment-test.pipay.com/starttransaction");
//curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

//$response = curl_exec($curl);

//if ($response === false)
    //$response = curl_error($curl);
//if (curl_errno($curl))
//{
  
  //  echo "<script>alert(".  curl_errno($curl).")</script>";
//}
   

  //  echo "<script>alert(".curl_error($curl).")</script>";
//echo "<script>console.log(".json_decode($response, true).")</script>";
//echo $response;
//curl_close($curl);
//echo stripslashes($response);

//curl_close($curl);
//return json_decode($response, true);

/*$defaults = array(
CURLOPT_POST => 1,
CURLOPT_HEADER => 0,
CURLOPT_URL => "https://onlinepayment-test.pipay.com/starttransaction",
CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
CURLOPT_FRESH_CONNECT => 1,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_FORBID_REUSE => 1,
CURLOPT_TIMEOUT => 500,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_POSTFIELDS => $post_data
);

$ch = curl_init();

curl_setopt_array($ch, $defaults);
//$result = curl_exec($ch);

print_r(curl_getinfo($ch));
if (!$result = curl_exec($ch)) {
    
    echo "<script>console.log(".curl_error($ch).")</script>";
  //  echo var_dump($defaults);
  
}
else {
    echo var_dump($defaults);
    
}*/


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_POST => true,
    CURLOPT_URL => "https://onlinepayment-test.pipay.com/starttransaction",
    CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => false,
    CURLOPT_POSTFIELDS =>  $post_data,
    CURLOPT_SSL_VERIFYPEER =>0,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_HEADER=>false,
    CURLOPT_HTTPHEADER => Array("Content-Type:application/x-www-form-urlencoded"),
    CURLOPT_UNRESTRICTED_AUTH => true
    
   
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

echo $err;
echo $response;
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
//Header("Location: https://onlinepayment-test.pipay.com/starttransaction");
}

?>
</body>
</html>