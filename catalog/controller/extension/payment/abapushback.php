<?php
class ControllerExtensionPaymentAbapushback extends Controller {
	public function index() {
		
		$log = new Log('ABApushback.log');
	$log->write("ABA Push notification  Log");
		
		$this->load->language('extension/payment/globalpay');

		$this->load->model('checkout/order');
//echo "hi";
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json,true);

//$log->write($json);
$log->write($data);

$order_id=$data['tran_id'];
$status=$data['status'];

$log->write($data['status']);
$log->write($data['tran_id']);
	
	$this->load->model('extension/payment/globalpay');
		$order_info = $this->model_checkout_order->getOrder(order_id);
		
			
		
		if ($status=="1")
		{
			$log->write("in if ");
			$log->write("Order id : ".$order_id);
			$log->write("Status : ".$status);
		//	$globalpay_order_id = $this->model_extension_payment_globalpay->addOrder($order_info, $this->request->post['PASREF'], $this->request->post['AUTHCODE'], $this->request->post['ACCOUNT'], $this->request->post['ORDER_ID']);
		 $this->model_checkout_order->addOrderHistory($order_id, '1', $this->language->get('text_success'), false);
		}
	}

	
}