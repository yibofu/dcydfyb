<?php
	class VipAction extends Action {
		public function openVip() {
			$this->display();
		}
		public function member(){
			if(empty($_SESSION['admins']['id'])){
				header("Location:/index.php/Login/loginPage");
			}
			$this->display();
		}
	}

