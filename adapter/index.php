<?php 
class Paypal{
	public function __construct(){}
	public function payAmount($amount){
		print("Paying via PayPal: " . $amount."\n");
		
	}
}

interface paymentAdapter{
	public function pay($amount);
}

class paypalAdapter implements paymentAdapter{
	private $paypal;

	public function  __construct(Paypal $paypal){
		$this->paypal = $paypal;
	}

	public function pay($amount){
		$this->paypal->payAmount($amount);
	}
}


class Visa{
	function __construct(){}

	function doPayment($amount){
		printf("Paying via Visa : " . $amount);
		
	}
}

class visaAdapter implements paymentAdapter{
	private $visa;

	public function __construct(Visa $visa){
		$this->visa = $visa;
	}

	public function pay($amount){
		$this->visa->doPayment($amount);
	}
}


// Client Code
$paypel = new paypalAdapter(new Paypal());
$paypel->pay('25000');

$visa = new visaAdapter(new Visa());
$visa->pay('55000');
