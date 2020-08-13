
<?php
header('Content-type: application/json; charset=utf-8');
try{
$servername = "127.0.0.1";
$username = "opencartuser";
$password = "password";
$url_components = parse_url($_SERVER['REQUEST_URI']); 
parse_str($url_components['query'], $params); 
$startDate=$params['startDate'];
$endDate=$params['endDate'];
$orderAmount=$params['orderAmount'];
// Create connection
$conn = new mysqli($servername, $username, $password,'opencart');
$conn->query("SET CHARACTER SET utf8");
$queryt="select customer_id,firstname,lastname,order_id from oc_order where date_added > date('$startDate') and date_modified< date('$endDate') and (order_status_id=5 or order_status_id=17) and total>$orderAmount";
$dbdata = [];
$first=true;
    echo '[';
if ($result=mysqli_query($conn,$queryt)) {
  while ($row = $result->fetch_assoc())  {
          if($first) {
                      $first = false;
          } else {
            if(json_encode($row)!=''){
            echo ',';
}
           }
         // echo(json_encode($row));
        echo('{' . '"' . customer_id . '"'. ':' . $row['customer_id'] . ',' . '"' . firstname .'"' .':'. '"' .$row['firstname'] . '"'. ',' .'"' .lastname .'"' . ':' . '"' .$row['lastname'] . '"'. ',' . '"' . 'order_id' . '"'. ':'.$row['order_id'].'}'); 


	  }
echo ']';

}
mysqli_close($con);
}catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
