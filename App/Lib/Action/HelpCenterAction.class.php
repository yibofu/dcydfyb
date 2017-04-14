<?php
	class HelpCenterAction extends Action {
		public function __construct() {
			parent::__construct();	//继承父类构造方法
			
			if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
			}
		}
		//支付问题
		public function payProblem() {
			$this->display();
		}

		//发票问题
		public function billProblem() {
			$this->display();	
		}

		//账户问题
		public function accountProblem() {
			$this->display();	
		}

		//定制问题
		public function makeselfProblem() {
			$this->display();	
		}
	}
