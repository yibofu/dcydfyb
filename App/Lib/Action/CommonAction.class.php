<?php

	class CommonAction extends Action {
		public function _initialize(){
			header("Content-Type:text/html; charset=utf-8");
			if (empty($_SESSION['userinfo']['uid'])) {
				header("Location:/index.php/Index/index");
			}
		}
	}
?>