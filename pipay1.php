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
<form action="https://onlinepayment-test.pipay.com/starttransaction" method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
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
<input type="hidden" name="digest"  id="digest" value="<?php echo $a;?>"/>
<input type="hidden" name="cancelTimer" value="300" />
<input type="hidden" name="description" value="Extra information"/>
<input type="hidden" name="successScreenDelay" value="0" />
<input type="image" name="submit" src="" alt="Pi Pay - The safer, easier way to pay online" />
</form>
<!--END OF PAYMENT FORM-->

<form method="post">
            
             <input type="submit" id="submit" name="submit" value="click">
         </form>
<?php 
if(isset($_POST['submit'])){
    

    
$post_data = array(
    'mid'			=> "100660",
    'lang'			=> "en",
    'orderid'              => "20181403",
    'orderDesc'              => "Order.20181403",
    //'destination'		=> substr($receiver, -10),
    'orderAmount'		=> "1",
    'currency'		=> "USD",
    'sid'			=>"1474",
    'did'		=> "1915",
    'orderDate'		=> "2018-0314T11:21:28.717+0700",
    'payMethod'			=>"wallet",
    'trType'			=>"1",
    'confirmURL'		=> "https://konfulononline.com/",
    'cancelURL'		=> "https://konfulononline.com/admin/",
    'description'			=>"Extra information",
    'digest'			=>"3418b5dd87fcc5b966451699e37ea1da",
    'cancelTimer'		=> "300",
    'successScreenDelay'			=>"0"
    
);

echo "<script>alert(".var_dump($post_data).")</script>";
$curl = curl_init();

curl_setopt($curl, CURLOPT_HEADER, 'application/x-www-form-urlencoded');
curl_setopt($curl, CURLINFO_HEADER_OUT, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, "https://onlinepayment-test.pipay.com/starttransaction");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

$response = curl_exec($curl);

//if ($response === false)
    //$response = curl_error($curl);
if (curl_errno($curl))
{
  
    echo "<script>alert(".  curl_errno($curl).")</script>";
}
   

    echo "<script>alert(".curl_error($curl).")</script>";
echo "<script>console.log(".json_decode($response, true).")</script>";
echo $response;
//curl_close($curl);
echo stripslashes($response);

curl_close($curl);
return json_decode($response, true);


}

?>
</body>
</html>