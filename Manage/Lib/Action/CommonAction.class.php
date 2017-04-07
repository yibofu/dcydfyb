<?php
class CommonAction extends Action{
	function _initialize() {
		header("Content-Type:text/html; charset=utf-8");
		if (empty($_SESSION['admin']['id'])) {
			header("Location:/Manerger/index.php/Public/login.html");
		}else{
			$this->check();
			$ntime = time();
			$time = $ntime-$_SESSION['admin']['logintime'];
			if($time>500&&$time<7200){
				$res = $this->getuserinfo($_SESSION['admin']['id']);
				$_SESSION['admin'] = $res;
				$_SESSION['admin']['logintime'] = time();
				$Role = M('Role');
				$powers = $Role->field('powers')->where('id='.$_SESSION['admin']['rid'])->find();
				$_SESSION['admin']['powers'] = $powers['powers'];
				
				$Node = M('Node');
				$list = $Node->field('name')->where('pid>0')->select();
				$_SESSION['admin']['nodes'] = $list;
			}elseif($time>7200){
				session_destroy();
				setcookie('PHPSESSID','',-3600,'/');
				header("Location:/Manerger/index.php/Public/login.html");
			}
		}
	}
	
	
	function getuserinfo($userid){
		$Admin = M('Admin');
		$map['id'] = $userid;
		$res = $Admin->field('id,rid,username')->where($map)->find();
		return $res;
	}
	
	public function check(){
		$Action =  ACTION_NAME;
		$Model  =  MODULE_NAME;
		$caction = '__APP__/'.$Model.'/'.$Action;
		$powers = json_decode($_SESSION['admin']['powers'],1);
		
		$list = $_SESSION['admin']['nodes'];
		foreach($list as $value){
			$base[] = $value['name'];
		}
		foreach($powers as $value){
			foreach($value['childrens'] as $val){
				$tmp[] = $val['name'];
			}
		}
		
		$jinzhi = array_diff($base,$tmp);
		if($Model!="Public"){
			if(in_array($caction,$jinzhi)){
				header("Location:/Manerger/index.php/Public/nopower.html");
			}else{
				return true;
			}
		}	
	}
	
}
?>