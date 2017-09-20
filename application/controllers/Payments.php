<?php

class Payments extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('string');
		$this->load->model("campaign_model","camp");
		$this->load->model("auth_model","auth");
		//$this->_url = "https://www.paypal.com/cgi-bin/webscr";
		$this->_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
	}

	public function paypal($order_id){

		$token = $this->camp->getToken($order_id);
		$data = $this->camp->getOrder($order_id);
		$order = $data['order'];
		$items = $data['items'];

		$config['production'] = FALSE;

		$config['business'] 			= 'info@thairaiser.com';
		//$config['business']				=
		$config['cpp_header_image'] 	= ''; //Image header url [750 pixels wide by 90 pixels high]
		$config['return'] 				=  site_url("payments/notify_payment/".$token);
		$config['cancel_return'] 		= site_url("payments/cancel_paypal/".$token);
		$config['notify_url'] 			= site_url("payments/ipn/".$token);
		$config['production'] 			= FALSE; //Its false by default and will use sandbox
		$config["invoice"]				= "order".sprintf("%05d",$order_id); //The invoice id
		$config["currency_code"]		= "THB";
		$config['landing_page'] = "billing";
		$this->load->library('paypal',$config);

		#$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);

		foreach($items as $item){
			$this->paypal->add("Campaign #".sprintf("%05d",$order->campaign_id)." Size ".$item->size_name,$order->price,$item->amount);
			//$this->paypal->add("Campaign #".sprintf("%05d",$order->campaign_id)." Size ".$item->size_name,1,$item->amount);
		}

		if($order->donate2>0){
			$this->paypal->add("Donate",$order->donate2);
		}

		//print_r($order);
		//exit();

		//$this->paypal->add('T-shirt',2.99,6); //First item
		//$this->paypal->add('Pants',40); 	  //Second item
		//this->paypal->add('Blowse',10,10,'B-199-26'); //Third item with code

		$this->paypal->pay(); //Proccess the payment

	}

	public function paysbuy($order_id){

		$data_order = $this->camp->getOrder($order_id);
		$order = $data_order['order'];
		$items = $data_order['items'];
		$total = 0;
		if(count($items)>0){
			$i=1;
			$total = 0;
			foreach($items as $item){
				$val = $item->amount * $order->price;
				$total+=$val;
			}
		}
		$total = $total + $order->donate2;

		require_once APPPATH.'libraries/paysbuy/nusoap.php';

		$url = "http://www.paysbuy.com/api_paynow/api_paynow.asmx?wsdl";

		//http://demo.paysbuy.com/api_paynow/api_paynow.asmx
		$client = new nusoap_client($url, true);

		//$psbID = "1026012866";
		$psbID = "7634087250"; //PSB ID7634087250
		$username = "info@thairaiser.com";
		$secureCode = "89B7FEE5AB243BCB21B9311C8AC2F86E";
		//$secureCode = "89B7FEE5AB243BCB21B9311C8AC2F86E";
		$inv = "INV".sprintf("%010d",$order_id);
		$itm = "Thairaiser.com";
		$amt = $total;
		//$amt = 1;
		$paypal_amt = "";
		$curr_type = "TH";
		$com = "";
		$method = "1"; // 6 for Counter Service
		$language = "T";

		//Change to your URL
		$resp_front_url = site_url("payments/do_paysbuy");
		$resp_back_url = site_url("payments/do_reqpaysbuy");

		//Optional data
		$opt_fix_redirect = "1"; //autu-redirect to Merchant
		$opt_fix_method = "0"; // Show only CS
		$opt_name = "";
		$opt_email = "";
		$opt_mobile = "";
		$opt_address = "";
		$opt_detail = "";

		$result = "";

		//1. Step 1 call method api_paynow_authentication
		$params = array("psbID"=>$psbID, "username"=>$username, "secureCode"=>$secureCode, "inv"=>$inv, "itm"=>$itm, "amt"=>$amt, "paypal_amt"=>$paypal_amt, "curr_type"=>$curr_type, "com"=>$com, "method"=>$method, "language"=>$language, "resp_front_url"=>$resp_front_url, "resp_back_url"=>$resp_back_url, "opt_fix_redirect"=>$opt_fix_redirect, "opt_fix_method"=>$opt_fix_method, "opt_name"=>$opt_name, "opt_email"=>$opt_email, "opt_mobile"=>$opt_mobile, "opt_address"=>$opt_address, "opt_detail"=>$opt_detail);

		$result = $client->call('api_paynow_authentication_new', array('parameters' => $params), 'http://tempuri.org/', 'http://tempuri.org/api_paynow_authentication_new', false, true);

		if ($client->getError()) {
		    echo "<h2>Constructor error</h2><pre>" . $client->getError() . "</pre>";
		} else {
		    $result = $result["api_paynow_authentication_newResult"];
		}
		//echo "<br>result ->".$result;

		$approveCode = substr($result,0,2);

		//echo "<br>approveCode->".$approveCode;

		$intLen = strlen($result);
		$strRef = substr($result,2, $intLen-2);

		//2. If authentication is successful, then the server responds 00, The process continues redirect to PAYSBUY API Page.
		if($approveCode=="00") {
		    echo "<meta http-equiv='refresh'
		content='0;url=https://www.paysbuy.com/paynow.aspx?refid=".$strRef."'>";
		} else {
		    echo "<br>Can't login to paysbuy server";
		}
	}

	public function notify_payment($token){

		//$received_data = print_r($this->input->post(),TRUE);

		//echo "<pre>".$received_data."</pre>";

		$rs = $this->camp->checkToken($token);

		if($rs){
			$tx = $this->input->get("tx");
			$this->db->where("order_id",$rs->order_id)->update("order",array("tx"=>$tx,"pay"=>"1"));

			//send to confirm buy
			$data_order = $this->camp->getOrder($rs->order_id);
			$html = $this->load->view("email/order",$data_order,TRUE);
			$this->auth->sendEmailOrder($rs->order_id,$html);
			/*
			$data_order = $this->camp->getOrder($rs->order_id);
			$data_order['type'] = "Paypal";
			$html = $this->load->view("email/paycomplete",$data_order,TRUE);
			$this->auth->sendEmailOrderPayComplete("paypal",$rs->order_id,$html);
			*/

			$this->session->set_userdata("order",$rs->order_id);


			//$html = $this->load->view("email/do_purchase",$data_order,TRUE);
			//$this->auth->sendEmailPurchasePackage($rs->order_id,$html);

		}

		redirect("thankyou");

	}

	public function cancel_paypal($token){
		$rs = $this->camp->checkToken($token);

		if($rs){
			//$this->db->where("order_id",$rs->order_id)->update("order",array("pay"=>"2"));
		}
		redirect("");
	}

	public function ok($token=""){

		$this->db->insert("payments",array(
			"message"=>$this->input->post()
		));
	}
	public function notify(){

		$postFields = 'cmd=_notify-validate';

		foreach($_REQUEST as $key=>$val){
			$postFields.="&$key=".urlencode($value);
		}



		$ch = curl_init();

		curl_setopt_array($ch,array(
			CURLOPT_URL=>$this->_url,
			CURLTOP_RETURNTRANSFER=>true,
			CURLOPT_SSL_VERIFYPEER=>false,
			CURLOPT_POST=>true,
			CURLOPT_POSTFIELDS=>$postFields
		));
		$result = curl_exec($ch);echo curl_error($ch);
		curl_close($ch);

		echo $result;

		$this->db->insert("payments",array("message"=>$postFields));

	}

	public function notify_bank(){

	}

	public function confirmorder(){
		$this->load->view("campaign/buy/confirmorder");
	}

	public function payorder(){
		$id = $this->input->post("pr_id");
		$ex = explode("PR",$id);

		$config['upload_path'] = 'slipt';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$config['file_name'] = $id;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('slipt')){
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else{
			$data = $this->upload->data();
			//print_r($data);
			if(count($ex)>1){
				$order_id = $ex[1];
				$this->db->where("order_id",$order_id)->update("order",array("confirmorder"=>1));
				$rs = $this->db->where("order_id",$order_id)->get("order");
				$over_pay = 0;
				if($rs->num_rows()>0){
					$campaign = $this->db->where("campaign_id",$rs->row()->campaign_id)->get('campaign')->row();
					if(strtotime(date("Y-m-d")) > strtotime($campaign->close_date)){
						$over_pay = 1;
					}
					if($rs->row()->pay==0){
						$bank_to_pay = $this->input->post("bank_to_pay");
						$pay_money = $this->input->post("pay_money");
						$pay_date = $this->input->post("pay_date");
						$pay_time = $this->input->post("pay_time");

						$this->db->set("on_pay_date","NOW()",false)->where("order_id",$order_id)->update("order",array(
							"bank_to_pay"=>$bank_to_pay,
							"pay_money"=>$pay_money,
							"pay_date"=>$pay_date,
							"pay_time"=>$pay_time,
							"slipt"=>$data['file_name'],
							"over_pay"=>$over_pay
						));
					}else{
						$bank_to_pay = $this->input->post("bank_to_pay");
						$pay_money = $this->input->post("pay_money");
						$pay_date = $this->input->post("pay_date");
						$pay_time = $this->input->post("pay_time");

						$this->db->set("on_pay_date","NOW()",false)->where("order_id",$order_id)->update("order",array(
							"bank_to_pay"=>$bank_to_pay,
							"pay_money"=>$pay_money,
							"pay_date"=>$pay_date,
							"pay_time"=>$pay_time,
							"slipt"=>$data['file_name'],
							"over_pay"=>$over_pay
						));
					}
				}
			}
			redirect("confirmthankyou");
		}
	}

	public function do_paysbuy(){
		$ar = $this->input->post();
		$chk = substr($ar['result'],0,2);

		if($chk=="00"){
			$order_id = substr($ar['result'],5,10);
			$order_id = (int)$order_id;
			$tx = $ar['apCode'];
			$this->db->where("order_id",$order_id)->update("order",array("tx"=>$tx,"pay"=>"1"));

			$rs = $this->db->where("order_id",$order_id)->get("order");

			if($rs->row()->send_email=="0"){
				$this->db->where("order_id",$order_id)->update("order",array(
					"send_email"=>1
				));
				$data_order = $this->camp->getOrder($order_id);
				$html = $this->load->view("email/order",$data_order,TRUE);
				$this->auth->sendEmailOrder($order_id,$html);
			}

			$this->session->set_userdata("order",$order_id);

		}else{
		}


		redirect("thankyou");
		//print_r($ar);

	}

	public function do_reqpaysbuy(){
		$ar = $this->input->post();
		//$this->db->insert("payments",array("message"=>$this->input->post()));

		$chk = substr($ar['result'],0,2);
		if($chk=="00"){

			$order_id = substr($ar['result'],5,10);
			$tx = $ar['apCode'];
			$this->db->where("order_id",$order_id)->update("order",array("tx"=>$tx,"pay"=>"1"));

			//send to confirm buy
			if($ar['method']!="01"){

				$rs = $this->db->where("order_id",$order_id)->get("order");

				if($rs->row()->send_email=="0"){
					$this->db->where("order_id",$order_id)->update("order",array(
						"send_email"=>1
					));

					$order_id = (int)$order_id;
					$data_order = $this->camp->getOrder($order_id);
					$html = $this->load->view("email/order",$data_order,TRUE);
					$this->auth->sendEmailOrder($order_id,$html);

				}


			}


			$this->session->set_userdata("order",$order_id);

		}else{
		}
		//print_r($ar);
	}

	public function pays(){

		require_once APPPATH.'libraries/paysbuy/nusoap.php';

		$url = "http://www.paysbuy.com/api_paynow/api_paynow.asmx?wsdl";

		//http://demo.paysbuy.com/api_paynow/api_paynow.asmx
		$client = new nusoap_client($url, true);

		//$psbID = "1026012866";
		//$username = "sinewyz@hotmail.com";
		//$secureCode = "BA9419B7874A8CEC9D0E07093BA73BFA";

		$psbID = "7634087250"; //PSB ID7634087250
		$username = "info@thairaiser.com";
		$secureCode = "89B7FEE5AB243BCB21B9311C8AC2F86E";

		$inv = "xx-11111";
		$itm = "Description of product";
		$amt = 1;
		$paypal_amt = "";
		$curr_type = "TH";
		$com = "";
		$method = "1"; // 6 for Counter Service
		$language = "T";

		//Change to your URL
		$resp_front_url = "URL of frontend process";
		$resp_back_url = "URL of backend process";

		//Optional data
		$opt_fix_redirect = "1"; //autu-redirect to Merchant
		$opt_fix_method = "1"; // Show only CS
		$opt_name = "";
		$opt_email = "";
		$opt_mobile = "";
		$opt_address = "";
		$opt_detail = "";

		$result = "";

		//1. Step 1 call method api_paynow_authentication
		$params = array("psbID"=>$psbID, "username"=>$username, "secureCode"=>$secureCode, "inv"=>$inv, "itm"=>$itm, "amt"=>$amt, "paypal_amt"=>$paypal_amt, "curr_type"=>$curr_type, "com"=>$com, "method"=>$method, "language"=>$language, "resp_front_url"=>$resp_front_url, "resp_back_url"=>$resp_back_url, "opt_fix_redirect"=>$opt_fix_redirect, "opt_fix_method"=>$opt_fix_method, "opt_name"=>$opt_name, "opt_email"=>$opt_email, "opt_mobile"=>$opt_mobile, "opt_address"=>$opt_address, "opt_detail"=>$opt_detail);

		$result = $client->call('api_paynow_authentication_new', array('parameters' => $params), 'http://tempuri.org/', 'http://tempuri.org/api_paynow_authentication_new', false, true);

		if ($client->getError()) {
		    echo "<h2>Constructor error</h2><pre>" . $client->getError() . "</pre>";
		} else {
		    $result = $result["api_paynow_authentication_newResult"];
		}
		echo "<br>result ->".$result;

		$approveCode = substr($result,0,2);

		echo "<br>approveCode->".$approveCode;

		$intLen = strlen($result);
		$strRef = substr($result,2, $intLen-2);

		//2. If authentication is successful, then the server responds 00, The process continues redirect to PAYSBUY API Page.
		if($approveCode=="00") {
		    echo "<meta http-equiv='refresh'
		content='0;url=https://www.paysbuy.com/paynow.aspx?refid=".$strRef."'>";
		} else {
		    echo "<br>Can't login to paysbuy server";
		}
	}

	public function ipn($token)
	{
		$postFields = "cmd=_notify-validate";
		$post = $this->input->post();

		foreach($post as $key =>$value){
			$postFields.="&$key=".urlencode($value);
		}
		$url = "https://www.paypal.com/cgi-bin/websrc";
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL=>$url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER =>false,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $postFields
		));
		$result = curl_exec($ch);
		curl_close($ch);
			//invoice , txn_id payment_status
		if($result=="VERIFIED"){

			$rs = $this->camp->checkToken($token);

			$order_id = $rs->order_id;
			$tx = $this->input->post("txn_id");
			$this->db->set("ondate","NOW()",false)->insert("payments",array(
				"message"=>$postFields,
				"order_id"=>$order_id,
				"tx"=>$tx
				));
			$this->db->where("order_id",$rs->order_id)->update("order",array("tx"=>$tx,"pay"=>"1"));

		}

		echo $result;

	}
}
