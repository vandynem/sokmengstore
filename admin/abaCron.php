<?php 
$transactionId='11337';
 $trx_hash= base64_encode(hash_hmac('sha512', 'konfulon' .transactionId, 'ba089bcd3bafd8323c2013d3e0342672', true));
 $order_status = getOrderStatus($transactionId,$trx_hash);
echo($order_status);
function getOrderStatus($orderid,$hash) {
            $post_data = array(
                'tran_id'                       => $orderid,
                'hash'                  => $hash

            );
            $this->log->write("ABA model ");
            $this->log->write($orderid);
            $this->log->write("hash to check:".$hash);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLINFO_HEADER_OUT, true);
            curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, 'https://payway.ababank.com/api/pwkonfulonk/check/transaction/');
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));

            $response = curl_exec($curl);
          //  $this->log->write($curl);

            if (curl_errno($curl)) {
                $curl_error = 'SmsAlert cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
            } else {
                $curl_error = '';
            }

            if ($curl_error) {
                $this->log->write($curl_error);
            }
			
			   if ($this->config->get('smsalert_debug')) {
                $this->log->write($response);
            }

            curl_close($curl);
            //$this->log->write(print_r($response));
            return json_decode($response, true);

}

?>
