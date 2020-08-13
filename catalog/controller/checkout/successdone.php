<?php
class ControllerCheckoutSuccessdone extends Controller {
	public function index() {
		$this->load->language('checkout/success');

	//	if (isset($this->session->data['order_id'])) {
			
			 $this->load->model('checkout/order'); 
			 $order_info = $this->model_checkout_order->getOrder('2233'); 
	
			/*$curl = curl_init();
        
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'OpenCart Two Factor Authentication');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, 'https://47.74.221.54/index.php?route=mail/order&add');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($order_info));
        
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $curl_error = 'Sucess cURL Error ' . curl_errno($curl) . ': ' . curl_error($curl);
        } else {
            $curl_error = '';
        }
        
        if ($curl_error) {
            $this->log->write($curl_error);
        }
        
       
        
        curl_close($curl);*/
			
			
		
	//}
}
	
	 public function sucess()
 {
	    $this->log->write("test"); 
 }
}