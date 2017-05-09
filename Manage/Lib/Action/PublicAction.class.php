<?php
class PublicAction extends Action
{  

	public function login(){
	   $this->display(); 
	}


	public function logout(){
		if (isset($_SESSION['admin']['id'])) {
			unset($_SESSION['admin']);
			session_destroy();
			//删除保存在本地的session_id;
			setcookie('PHPSESSID','',-3600,'/');
			$this->redirect(__APP__ .'/Index/index');
			
		}
			
		 
	}
	
	public function checklogin(){
	
		$Admin = M('Admin');
		if($this->isPost()){
			 $map['username'] = $this->_post('username');
			 $map['password']=set_password($this->_post('password'),C('TAIL_STR'));
		     $res = $Admin->field('id,rid,username')->where($map)->find();
			if(!empty($res)){
				$_SESSION['admin'] = $res;
				$_SESSION['admin']['logintime'] = time();
				$Role = M('Role');
				$powers = $Role->field('powers')->where('id='.$res['rid'])->find();
				$_SESSION['admin']['powers'] = $powers['powers'];
				$Node = M('Node');
				$list = $Node->field('name')->where('pid>0')->select();
				$_SESSION['admin']['nodes'] = $list;

				//修改登录时间以及ip
				$data['last_time']=time();
				$data['last_ip']=$_SERVER['REMOTE_ADDR'];
				$Admin->where("id=".$res['id'])->save($data);

				$this->redirect(__APP__ .'/Index/index');
			}else{
			    $this->redirect(__APP__ .'/Public/login');
			}
		}
	}
	
	
	public function checkphone(){
		if($this->isPost()){
			$User = M('User');
		
				$map['phone'] = $_POST['phone'];
				$res = $User->where($map)->find();
			if(!empty($res)){
				$mesg = '这个电话已经被注册了!!';
				$errno = 3;
			}else{
				$mesg = '可以使用!!';
				$errno = 0;
			}
				$result = array(
					'errno'=>$errno,
					'mesg'=>$mesg
				);
				echo json_encode($result);
		}
	}
	
	
	public function register(){
	    $User = M('User');
		if($this->isPost()){
			if(empty($_POST['phone'])){
				$mesg = '电话号码不能为空!!!';
				$errno = 1;
				$result = array(
					'errno'=>$errno,
					'mesg'=>$mesg
				);
				echo json_encode($result);
				exit();
			}
			
			if($_POST['rpassword']!=$_POST['password']){
				$mesg = '两次输入的密码不一致!!';
				$errno = 2;
				$result = array(
					'errno'=>$errno,
					'mesg'=>$mesg
				);
				echo json_encode($result);
				exit();
			}
			
			$map['phone'] = $_POST['phone'];
			$res = $User->where($map)->find();
			
			if(!empty($res)){
				$mesg = '这个电话已经被注册了!!';
				$errno = 3;
				$result = array(
					'errno'=>$errno,
					'mesg'=>$mesg
				);
				echo json_encode($result);
				exit();
			}else{	
				$_SESSION[$_POST['phone']]['verify'] = md5(1243);
				if($_SESSION[$_POST['phone']]['verify'] == md5($_POST['code'])){
						$data['phone'] = $_POST['phone'];
						$data['password'] = md5($_POST['password']);
						$data['ctime'] = time();
						$data['nickname'] = substr($_POST['phone'],0,7).'****';
						$User->create($data);
						$res = $User->add();
						if(!empty($res)){
							$_SESSION['user'] = $res;
							$mesg = '注册成功!';
							$errno = 0;
							$result = array(
								'errno'=>$errno,
								'mesg'=>$mesg,
								'url'=>__APP__ .'/User'
							);
							echo json_encode($result);
						}
				}else{
					$mesg = '手机验证码输入有误!';
					$errno = 4;
					$result = array(
						'errno'=>$errno,
						'mesg'=>$mesg
					);
					echo json_encode($result);
					exit();
				}
				
			}

		}
	
	}
	public function checktest(){
		$this->check();
	}
	
	private function check(){
		$Action = ACTION_NAME;
		$Model = MODULE_NAME;
		$caction = '__APP__/'.$Action.'/'.$Model;
		$powers = json_decode($_SESSION['admin']['powers'],1);
		foreach($powers as $value){
			foreach($value['childrens'] as $val){
				if($caction==$val){
					echo '你有这个权限';
					return true;
				}else{
					echo '你没有这个权限';
					return false;
				}
			}
		}
		exit;
		if($Action!='index'){
				$str = 'm='.$Model.'&a='.$Action;
			}else{
				$str = 'm='.$Model;
			}
			$powers = json_decode($_SESSION['admin']['power']);
			if($Model!=='Index'){
				if(!in_array($str,$powers)){
					$result = array(
						'errno'=>1,
						'mesg'=>'无此权限'
					);
					echo json_encode($result);
					exit;
				}
		}
	
	}
	
}
?>