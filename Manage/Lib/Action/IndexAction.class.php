<?php
class IndexAction extends CommonAction {
	//初始化侧边栏。
	public function index(){
		$powers = json_decode($_SESSION['admin']['powers'],1);
		$this->assign('powers',$powers);
		$this->display();
	}
	
}