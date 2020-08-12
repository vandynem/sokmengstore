<?php
if(isset($_POST['response'])){
 $myfile = fopen("trxdata.txt", "w");
fwrite($myfile, $_POST['response'] );
fclose($myfile);
$handle = curl_init();
$url = "https://konfulononline.com/index.php?route=extension/payment/abapushback";
curl_setopt_array($handle,
  array(
     CURLOPT_URL => $url,
     // Enable the post response.
    CURLOPT_POST       => true,
    // The data to transfer with the response.
    CURLOPT_POSTFIELDS => $_POST['response'],
    CURLOPT_RETURNTRANSFER     => true,
  )
);

$data = curl_exec($handle);
curl_close($handle);

  print_r($_POST['response']);
}else{
  $content = file_get_contents("php://input");
  $myfile = fopen("trxdata.txt", "w");
fwrite($myfile, $content );
fclose($myfile);
  $pushBack = json_decode($content, true);
  
  echo $tran_id = $pushBack['tran_id'];
}
?>