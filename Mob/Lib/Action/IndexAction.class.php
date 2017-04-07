<?php
class IndexAction extends Action{
	//首页
	public function index(){
		
		$this->display();
	}
	//登陆页面
	public function login(){
		$this->display();
	}
	//登陆验证
	public function check_login(){
		$data = $this->_post();
		$data['pwd'] = 'dd'.$data['pwd'].'kd';
		$data['pwd'] = md5($data['pwd']);
		$data['pwd'] = substr($data['pwd'],5,30);
		$user = M("user");
		$map['phone'] = array('eq',$data['phone']);
		$map['pwd'] = array('eq',$data['pwd']);
		$result = $user->where($map)->field("id,name")->find();
		if(!empty($result['id']) && isset($result['id'])){
			$users['id'] = $result['id'];
			$users['phone'] = $data['phone'];
			session('user',$users);
			$user_data['token'] = $data['token'];
			$user_data['brand'] = $data['mode'];
			$sus = $user->where('id='.$users['id'])->save($user_data);
			$loan = M("loan");
			$loan_count = $loan->where('uid='.$users['id'])->count();
			$phone_record = M('phone_record');
			$phone_data = $phone_record->field('id,use_num')->where('equipment='.$data['imei'])->find();
			if(!empty($phone_data['id'])){
				$record['id'] = $phone_data['id'];
				$record['last_time'] = time();
				$record['use_num'] = $phone_data['use_num'] + 1;
				$phone_record->save($record);
			}else{
				$record['uid'] = $users['id'];
				$record['phone'] = $data['phone'];
				$record['phone_local'] = $this->checkMobilePlace($data['phone']);
				$record['phone_brand'] = $data['mode'];
				$record['record_time'] = time();
				$record['equipment'] = $data['imei']; 
				$record['use_num'] = 1;
				$record['last_time'] = time();
				$record['is_load'] = 2;
				$phone_record->create($record);
				$phone_record->add();
			}
			//判断用户是否已经借过款
			if(!empty($loan_count) && isset($loan_count) && $loan_count > 0){   //以借过款项  需跳转账户页面
				//判断是否处于正在还款过程中
				$plan_map['uid'] = $result['id'];
				$plan_map['is_over'] = 2;
				$plan = $loan->where($plan_map)->getField('plan');
				if($plan == '12'){
					//正在还款中
					$results = array(
						'error'=>1004,
						'uid'=>$result['id'],
					);
				}else{
					//借款进行中
					$results = array(
						'error'=>1003,
						'uid'=>$result['id'],
					);
				}
			}else{    //未借过款 正常登陆
				$results = array(
				'error'=>1001,
				'uid'=>$result['id'],
				);
			}
		}else{
			$results = array(
				'error'=>1002,
				'uid'=>'',
				);
		}
		echo json_encode($results);
	}
	//注册页面
	public function register(){
		$this->display();
	}
	public function send_message(){
		$mobile = $this->_post('mobile');
		$imei = $this->_post('imei');
		$map['phone'] =  $mobile;
		$user = M('user');
		$id = $user->where($map)->getField("id");
		if(!empty($id) && isset($id)){
			$result = array(
				'error'=>false,
				'message'=>'该手机号已经被注册，请更换其他手机号尝试',
			);
			echo json_encode($result);
			die;
		}
		//开启redis 目的为记录违规用户
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		//获取用户ip
		$ip = $this->getip();
		//首先判断ip是否超限
		 $is_ip = $this->is_ip($ip,$mobile);
		$is_ip = json_decode($is_ip,true);
		if($is_ip['error']){
			//判断用户imei
			$is_imei = $this->is_imei($imei);
			$is_imei = json_decode($is_imei,true);
			if($is_imei['error']){
				//验证手机
				$is_mobile = $this->is_mobile($mobile);
				$is_mobile = json_decode($is_mobile,true);
				if($is_mobile['error']){
					//验证通过 发送短信
					$Sendmessage = A("Sendmessage");
					$Sendmessage->register_code($mobile);
					$result = array(
						'error'=>true,
						'message'=>'已发送短信，请注意查收',
					);
				}else{
					 $redis_name = 'MOBILE|'.$ip.'|'.$mobile.'|'.$imei;
					$redis->hset($redis_name,'ip',$ip);
					$redis->hset($redis_name,'mobile',$mobile);
					$redis->hset($redis_name,'imei',$imei);
					$redis->hset($redis_name,'num',$is_mobile['num']);
					$result = array(
						'error'=>false,
						'message'=>$is_mobile['message'],
					);
				}
			}else{
				$redis_name = 'IMEI|'.$ip.'|'.$mobile.'|'.$imei;
				$redis->hset($redis_name,'ip',$ip);
				$redis->hset($redis_name,'mobile',$mobile);
				$redis->hset($redis_name,'imei',$imei);
				$redis->hset($redis_name,'num',$is_imei['num']);
				$result = array(
				'error'=>false,
				'message'=>$is_imei['message'],
				);
			}
		}else{
		    $redis_name = 'IP|'.$ip.'|'.$mobile.'|'.$imei;
			$redis->hset($redis_name,'ip',$ip);
			$redis->hset($redis_name,'mobile',$mobile);
			$redis->hset($redis_name,'imei',$imei);
			$redis->hset($redis_name,'num',$is_ip['num']);
			$result = array(
				'error'=>false,
				'message'=>$is_ip['message'],
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	//验证注册验证码
	public function check_reg_code(){
		$code  = $this->_post("code");
		$mobile = $this->_post("mobile");
		$see_code = $_COOKIE['register'.$mobile];
		if($code != $see_code && $code != ''){
			$result = array(
				'error'=>false,
				'message'=>'验证码输入不正确',
			);
		}else{
			$result = array(
				'error'=>true,
				'message'=>'验证码输入正确',
			);
		}
		echo json_encode($result);
	}
	//注册提交页面
	public function reg_sub(){
		 $user = M("user");
		$data['phone'] = $this->_post('phone');
		$data['pwd'] = $this->_post('pwd');
		$data['pwd_nomd5'] = $this->_post('pwd_nomd5');
		$data['token'] = $this->_post("token");	
		$data['imei'] = $this->_post("imei");
		$data['pwd'] = 'dd'.$data['pwd'].'kd';
		$data['pwd'] = md5($data['pwd']);
		$data['pwd'] = substr($data['pwd'],5,30);
		$data['create_time'] = time(); 
		//获取手机号归属地
		$data['phone_local'] = $this->checkMobilePlace($data['phone']);
		$user->create($data);
		$id = $user->add();
		$card_check = M("card_check");
		$card_data['uid'] = $id;
		$card_check->create($card_data);
		$card_check->add();
		if(!empty($id) && isset($id)){
			$users['id'] = $id;
			$users['phone'] = $data['phone'];
			session('user',$users);
			$result = array('error'=>true,'msg'=>'注册成功','uid'=>$id);
		}else{
			$result = array('error'=>false,'msg'=>'注册失败,请返回重试','uid'=>'');
		}
		echo json_encode($result);
	}
	//忘记密码
	public function forgot(){
		$this->display();
	}
	//发送验证码
	public function send_message_fogot(){
		$mobile = $this->_post('mobile');
		$imei = $this->_post('imei');
		$user = M('user');
		$id = $user->where('phone='.$mobile)->getField("id");
		if(empty($id) && !isset($id)){
			$result = array(
				'error'=>false,
				'message'=>'该手机号未注册!',
			);
			echo json_encode($result);
			die;
		}
		//开启redis 目的为记录违规用户
		 $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		//获取用户ip
		$ip = $this->getip();
		//首先判断ip是否超限
		 $is_ip = $this->is_ip($ip,$mobile);
		$is_ip = json_decode($is_ip,true);
		if($is_ip['error']){
			//判断用户imei
			$is_imei = $this->is_imei($imei);
			$is_imei = json_decode($is_imei,true);
			if($is_imei['error']){
				//验证手机
				$is_mobile = $this->is_mobile($mobile);
				$is_mobile = json_decode($is_mobile,true);
				if($is_mobile['error']){
					//验证通过 发送短信
					$Sendmessage = A("Sendmessage");
					$Sendmessage->forgot_code($mobile);
					$result = array(
						'error'=>true,
						'message'=>'已发送短信，请注意查收',
					);
				}else{
					 $redis_name = 'MOBILE|'.$ip.'|'.$mobile.'|'.$imei;
					$redis->hset($redis_name,'ip',$ip);
					$redis->hset($redis_name,'mobile',$mobile);
					$redis->hset($redis_name,'imei',$imei);
					$redis->hset($redis_name,'num',$is_mobile['num']);
					$result = array(
						'error'=>false,
						'message'=>$is_mobile['message'],
					);
				}
			}else{
				$redis_name = 'IMEI|'.$ip.'|'.$mobile.'|'.$imei;
				$redis->hset($redis_name,'ip',$ip);
				$redis->hset($redis_name,'mobile',$mobile);
				$redis->hset($redis_name,'imei',$imei);
				$redis->hset($redis_name,'num',$is_imei['num']);
				$result = array(
				'error'=>false,
				'message'=>$is_imei['message'],
				);
			}
		}else{
		    $redis_name = 'IP|'.$ip.'|'.$mobile.'|'.$imei;
			$redis->hset($redis_name,'ip',$ip);
			$redis->hset($redis_name,'mobile',$mobile);
			$redis->hset($redis_name,'imei',$imei);
			$redis->hset($redis_name,'num',$is_ip['num']);
			$result = array(
				'error'=>false,
				'message'=>$is_ip['message'],
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	//验证验证码
	public function check_for_code(){
		$code  = $this->_post("code");
		$mobile = $this->_post("mobile");
		$see_code = $_COOKIE['forgot'.$mobile];
		if($code != $see_code && $code != ''){
			$result = array(
				'error'=>false,
				'message'=>'验证码输入不正确',
			);
		}else{
			$result = array(
				'error'=>true,
				'message'=>'验证码输入正确',
			);
		}
		echo json_encode($result);
	}
	//重置密码提交页面
	public function fot_sub(){
		$data = $this->_post();
		$data['pwd'] = 'dd'.$data['pwd1'].'kd';
		$data['pwd'] = md5($data['pwd']);
		$data['pwd'] = substr($data['pwd'],5,30);
		
		$user = M("user");
		if(!empty($data['card']) && isset($data['card'])){
				$map['card_no'] = $data['card'];
		}
		$map['phone'] = $data['phone'];
		$update_data['pwd'] = $data['pwd'];
		$update_data['pwd_nomd5'] = $data['pwd2'];
		$result = $user->where($map)->save($update_data);
		if($result != false){
			$results = array(
				'error'=>true,
				'message'=>'找回密码成功，请重新登陆',
			);
		}else{
			$results = array(
				'error'=>false,
				'message'=>'找回密码失败，请重新尝试',
			);
		}
		echo json_encode($results);
	}
	//更改手机发送短信
	public function send_message_tel(){
		$mobile = $this->_post('mobile');
		$imei = $this->_post('imei');
		$user = M('user');
		$id = $user->where('phone='.$mobile)->getField("id");
		if(!empty($id) && isset($id)){
			$result = array(
				'error'=>false,
				'message'=>'该手机号已注册!',
			);
			echo json_encode($result);
			die;
		}
		//开启redis 目的为记录违规用户
		 $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		//获取用户ip
		$ip = $this->getip();
		//首先判断ip是否超限
		 $is_ip = $this->is_ip($ip,$mobile);
		$is_ip = json_decode($is_ip,true);
		if($is_ip['error']){
			//判断用户imei
			$is_imei = $this->is_imei($imei);
			$is_imei = json_decode($is_imei,true);
			if($is_imei['error']){
				//验证手机
				$is_mobile = $this->is_mobile($mobile);
				$is_mobile = json_decode($is_mobile,true);
				if($is_mobile['error']){
					//验证通过 发送短信
					$Sendmessage = A("Sendmessage");
					$Sendmessage->change_tel($mobile);
					$result = array(
						'error'=>true,
						'message'=>'已发送短信，请注意查收',
					);
				}else{
					 $redis_name = 'MOBILE|'.$ip.'|'.$mobile.'|'.$imei;
					$redis->hset($redis_name,'ip',$ip);
					$redis->hset($redis_name,'mobile',$mobile);
					$redis->hset($redis_name,'imei',$imei);
					$redis->hset($redis_name,'num',$is_mobile['num']);
					$result = array(
						'error'=>false,
						'message'=>$is_mobile['message'],
					);
				}
			}else{
				$redis_name = 'IMEI|'.$ip.'|'.$mobile.'|'.$imei;
				$redis->hset($redis_name,'ip',$ip);
				$redis->hset($redis_name,'mobile',$mobile);
				$redis->hset($redis_name,'imei',$imei);
				$redis->hset($redis_name,'num',$is_imei['num']);
				$result = array(
				'error'=>false,
				'message'=>$is_imei['message'],
				);
			}
		}else{
		    $redis_name = 'IP|'.$ip.'|'.$mobile.'|'.$imei;
			$redis->hset($redis_name,'ip',$ip);
			$redis->hset($redis_name,'mobile',$mobile);
			$redis->hset($redis_name,'imei',$imei);
			$redis->hset($redis_name,'num',$is_ip['num']);
			$result = array(
				'error'=>false,
				'message'=>$is_ip['message'],
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	
	//退出登陆
	public function login_out(){
		session_destroy();
		header("Location:/Mob/index.php/Index/login");
	}
	//验证手机号是否超限 上限4次
	 private function is_mobile($mobile){
        $mobileKey = "mobile|".$mobile;
        $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect')); 
        $num = $redis->hIncrBy($mobileKey,'num',1);
        $time = time();
        $timestamp = $time+10800;
        $redis->expireAt($mobileKey,$timestamp);
        $redis->close();
        if($num>3){
			$result = array(
				'error'=>false,
				'message'=>'手机号获取次数已达上限',
			);	
        }else{
			$result = array(
				'error'=>true,
				'message'=>'手机号获取次数未达上限',
			);	
		}
		$result = json_encode($result);
		return $result;
    }
	//验证imei号是否超限  上限10次
	private function is_imei($imei){
        $imeiKey = "imei|".$imei;
        $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect')); 
        $num = $redis->hIncrBy($imeiKey,'num',1);
        $time = time();
        $timestamp = $time+10800;
        $redis->expireAt($imeiKey,$timestamp);
        $redis->close();
        if($num>10){
			$result = array(
				'error'=>false,
				'message'=>'手机获取次数已达上限',
			);	
        }else{
			$result = array(
				'error'=>true,
				'message'=>'手机获取次数未达上限',
			);	
		}
		$result = json_encode($result);
		return $result;
    }
	//验证ip是否超过上限  上限20次
	private function is_ip($ip,$mobile){
		$ipKey = "ip|".$ip.'|'.$mobile;
        $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect')); 
        $num = $redis->hIncrBy($ipKey,'num',1);
        $time = time();
        $timestamp = $time+10800;
        $redis->expireAt($ipKey,$timestamp);
        $redis->close();
        if($num>10){
			$result = array(
				'error'=>false,
				'message'=>'ip获取次数已达上限',
			);	
        }else{
			$result = array(
				'error'=>true,
				'message'=>'ip获取次数未达上限',
			);	
		}
		$result = json_encode($result);
		return $result;
	}
	//获取用户真实ip
	private function getip() { 
		$unknown = 'unknown'; 
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)) { 
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
		} 
		elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)) { 
			$ip = $_SERVER['REMOTE_ADDR']; 
		} 
		if (false !== strpos($ip, ',')) $ip = reset(explode(',', $ip)); 
		return $ip; 
	} 
	//获取手机号归属地
	public function checkMobilePlace($mobile){
		$url = "http://27.50.130.146/api3/getprovince.php?mobile={$mobile}";
		$content = file_get_contents($url);
		$arr_content = json_decode($content,true);
		if($arr_content['oper'] == '1'){
			$str = $arr_content['area'].'移动';
		}else if($arr_content['oper'] == '2'){
			$str = $arr_content['area'].'联通';
		}else{
			$str = $arr_content['area'].'电信';
		}
		return $str;
    }
	//重写session
	public function re_login(){
		$id = $this->post('id');
		$user = M('user');
		$phone = $user->where('id='.$id)->getField("phone");
		$users['id'] = $id;
		$users['phone'] = $phone;
		session('user',$users);
	}
}
?>