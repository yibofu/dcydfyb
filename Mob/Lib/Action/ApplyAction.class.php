<?php
class ApplyAction extends CommonAction{
	
	public function index(){
		$userinfo = $_SESSION['user'];
		$id = $userinfo['id'];
		$user = M('user');
		$card_no = $user->where('id='.$id)->getField("card_no");
		if(!empty($card_no) && isset($card_no)){
			$status = 1;
		}else{
			$status = 2;
		}
		$user_mess = M('user_mess');
		$mess_map['uid'] = $id;
		$mess_map['is_read'] = 2;
		$count = $user_mess->where($mess_map)->count('id');
		$mess_title = $user_mess->field('title')->where($mess_map)->order('ctime desc')->find();
		if($count > 0){
			$is_read = 1;
		}else{
			$is_read = 2;
		}
		$this->assign('title',$mess_title['title']);
		$this->assign('is_read',$is_read);
		$this->assign('status',$status);
		$this->assign("id",$id);
		$this->display();
	}
	public function loan_manage(){
		$id = $this->_get('id');
		$loan_data = $this->_post();
		//session('loan_data'.$id,$loan_data);
		//开启redis 记录借款信息
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$user = M('user');
		$dark = $user->where('id='.$id)->getField("dark_status");
		//检查用户是否有相关信息  位置 、通讯录 。通话记录
		//位置信息
		$today = strtotime(date('Y-m-d',time()));
		$add_map['createtime'] = array('gt',$today);
		$add_map['uid'] = $id;
		$address = M("address");
		$add_count = $address->where($add_map)->count();
		//通讯录
		$communication = M("communication");
		$com_map['uid'] = array('eq',$id);
		$com_count = $communication->where($com_map)->count();
		//通话记录
		$call_log = M("call_log");
		$call_map['uid'] = array('eq',$id);
		$call_count = $call_log->where($call_map)->count();
		//检查用户是否已被拉黑
		if($dark == 2){
			//检查用户是否存在借款
			$loan = M("loan");
			$loan_map['uid'] = array('eq',$id);
			$loan_count = $loan->where($loan_map)->count();
			if($loan_count > 0){
				//判断用户是否存在未完成借款
				$loaning_map['uid'] = array('eq',$id);
				$loaning_map['is_over'] = array('eq',2);
				$loaning_count = $loan->where($loaning_map)->count();
				if($loaning_count > 0){
					//存在未完成借款
					$result = array(
						'error'=>10022,
						'message'=>"同时仅能进行一笔借款，您还有未完成的借款",
					);
				}else{
					//判断用户是否还清所有借款
					$repay = M("repay");
					$repay_map['uid'] = array('eq',$id);
					$repay_map['status'] = array('eq',1);
					$repay_map['is_use'] = array('eq',1);
					$repay_count = $repay->where($repay_map)->count();
					if($repay_count > 0){
						$result = array(
							'error'=>10012,
							'message'=>'您还存在未还完款项，请还清后重试!',
						);
					}else{
						if($add_count>0 && $com_count > 0 && $call_count > 0){
							$result = array(
										'error'=>10018,
										'message'=>'用户可借款',
									);
							$redis->hset('loan_data'.$id,'money',$loan_data['money']);	
							$redis->hset('loan_data'.$id,'month',$loan_data['month']);	
						}else{
								//分离出三项信息 目的 防止前台安卓进行多线程操作
								if($add_count <= 0){
									$result = array(
										'error'=>11000,
										'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
									);
								}else if($com_count <= 0){
									$result = array(
										'error'=>12000,
										'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
									);
								}else if($call_count <= 0){
									$result = array(
										'error'=>13000,
										'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
									);
								}
						}
					}
				}	
			}else{
				//判断用户是否填写完全信息
				$user_detail = M("userdetail");
				$user_detail = $user->table("dd_user as u")->join("dd_userdetail as d on u.id=d.uid")->join("dd_card_check as c on u.id=c.uid")->field("u.name,d.home_detail,d.company,d.bank_no,c.card_front_ske,c.card_back_ske,c.card_hand_ske")->where("u.id=".$id)->find();
				if(empty($user_detail['name']) || empty($user_detail['company'])){
					$result = array(
						'error'=>10001,
						'message'=>"用户信息未填写完整",
					);
				}else if(empty($user_detail['home_detail'])){
					$result = array(
						'error'=>10002,
						'message'=>"用户详情未填写完整",
					);
				}else if(empty($user_detail['bank_no'])){
					$result = array(
						'error'=>10003,
						'message'=>"银行卡信息未填写完整",
					);
				}else if(empty($user_detail['card_front_ske']) || empty($user_detail['card_back_ske']) || empty($user_detail['card_hand_ske'])){
					$result = array(
						'error'=>10004,
						'message'=>"用户身份证信息未完整",
					);
				}else{
					if($add_count>0 && $com_count > 0 && $call_count > 0){
						$result = array(
							'error'=>10018,
							'message'=>"信息完整可以借款",
						);
						$redis->hset('loan_data'.$id,'money',$loan_data['money']);	
						$redis->hset('loan_data'.$id,'month',$loan_data['month']);
					}else{
						//分离出三项信息 目的 防止前台安卓进行多线程操作
						if($add_count <= 0){
							$result = array(
								'error'=>11000,
								'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
							);
						}else if($com_count <= 0){
							$result = array(
								'error'=>12000,
								'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
							);
						}else if($call_count <= 0){
							$result = array(
								'error'=>13000,
								'message'=>'请在系统设置或手机安全中心授权滴滴快贷的访问权限',
							);
						}
					}	
				}	
			}
		}else{
			$result = array(
					'error'=>10010,
					'message'=>'用户账户异常，请联系客服',
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	public function userinfo(){
		$id = $this->_get('id');
		$this->assign('id',$id);
		$this->display();
	}
	public function useradd(){
		$data = $this->_post();
		$id = $this->_get('id');
		//user表信息录入
		$user_data['name'] = $this->_post('name');
		$user_data['card_no'] = $this->_post('card_no');
		$user_data['id'] = $id;
		$user = M("user");
		$user->save($user_data);
		//userdetail表录入
		$detail_data['job'] = $this->_post('job');
		$detail_data['company'] = $this->_post('company');
		$detail_data['job_province'] = $this->_post('job_province');
		$detail_data['job_city'] = $this->_post('job_city');
		$detail_data['job_zone'] = $this->_post('job_zone');
		$detail_data['job_detail'] = $this->_post('job_detail');
		$detail_data['com_phone'] = $this->_post('com_phone');
		$detail_data['job_contact'] = $this->_post('contact_front').':00-'.$this->_post('contact_later').':00';
		$detail = M('userdetail');
		$detail_id = $detail->where('uid='.$id)->getField('id');
		if(!empty($detail_id) && isset($detail_id)){
			$detail_data['id'] = $detail_id;
			$detail->save($detail_data);
		}else{
			$detail_data['uid'] = $id;
			$detail->create($detail_data);
			$detail->add();
		}
		echo "<script>window.location.href='/Mob/index.php/Apply/userdetail/id/{$id}'</script>";
	}
	public function userdetail(){
		$id = $this->_get("id");
		$this->assign('id',$id);
		$this->display();
	}
	public function detailadd(){
		$id = $this->_get('id');
		//用户详情表
		$detail = M('userdetail');
		$detail_data['home_province'] = $this->_post('home_province');
		$detail_data['home_city'] = $this->_post('home_city');
		$detail_data['home_zone'] = $this->_post('home_zone');
		$detail_data['home_detail'] = $this->_post('home_detail');
		$detail_data['home_contact'] = $this->_post('contact_front').':00-'.$this->_post('contact_later').':00';
		$detail_data['marry'] = $this->_post('marry');
		$detail_data['son'] = $this->_post('son');
		$detail->where('uid='.$id)->save($detail_data);
		//联系人表
		$link = M('linkman');
		$link_data["phone"] = $this->_post("phone");
		$link_data["name"] = $this->_post("name");
		$link_data["relation"] = $this->_post("relation");
		$link_data["uid"] = $id;
		$link_data["createtime"] = time();
		$link_data["is_del"] = 1;
		$map['phone'] = $link_data["phone"];
		$map['name'] = $link_data["name"];
		$id = $link->where($map)->getField('id');
		if(empty($id) && !isset($id) && $link_data["phone"] != '' && $link_data["name"] != ''){
			$link->create($link_data);
			$link->add();
		}
		echo "<script>window.location.href='/Mob/index.php/Apply/bankinfo/id/{$id}'</script>";
	}
	//银行信息
	public function bankinfo(){
		$id = $this->_get("id");
		$this->assign('id',$id);
		$this->display();
	}
	//银行信息增加
	public function bankadd(){
		$detail = M("userdetail");
		$detail_data['bank_no'] = $this->_post("bank_no");
		$detail_data['bank'] = $this->_post("bank");
		$detail_data['bank_local'] = $this->_post("province").$this->_post("city").$this->_post("zone");
		$id = $this->_get('id');
		$result = $detail->where('uid='.$id)->save($detail_data);
		echo "<script>window.location.href='/Mob/index.php/Apply/cardload/id/{$id}'</script>";
	}
	public function cardload(){
		$id = $this->_get("id");
		$card_check = M("card_check");
		//$result = $card_check->field("card_front_ske,card_back_ske,card_hand_ske")->where('uid='.$id)->find();
		
		//$this->assign('result',$result);
		$this->assign('id',$id);
		$this->display();
	}
	public function example(){
		$this->display();
	}
	public function apply(){
		$id = $this->_get("id");
		//开启redis 查询借款信息
		 $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$loan_data['money'] = $redis->hget('loan_data'.$id,'money');	
		$loan_data['month'] = $redis->hget('loan_data'.$id,'month');
		$user = M("user");
		$detail = M("userdetail");
		$detail_data = $detail->field("bank_no,bank_local")->where("uid=".$id)->find();
		$user_data = $user->field("name,card_no")->where('id='.$id)->find();
		$user_data['bank_no'] = $detail_data['bank_no'];
		$user_data['bank_local'] = $detail_data['bank_local'];
		$loan_data['manage_price'] = $loan_data['money'] * 0.1;
		$loan_data['month_manage'] = '40.00/月';
		$loan_data['real_money'] = $loan_data['money'] - $loan_data['manage_price'];
		//计算还款价格 分子运算
		$member = $loan_data['money'] * (0.02 * pow(1.02,$loan_data['month']));
		//分母运算
		$mole = pow(1.02,$loan_data['month']) - 1;
		$refund = $member / $mole;
		$refund = ceil($refund) + 40;
		$capt = array('一','二','三','四','五','六');
		$now = time();
		for($i=0;$i<$loan_data['month'];$i++){
			$arr['month'] = '第'.$capt[$i].'期';
			$arr['total'] = $refund;
			$temp = $i + 1;
			$time_temp = $now + 86400 * 7;;
			//$time_temp = $data['creatime'] + 86400 * 7;
			$str_time_temp = date('Y-m-d',$time_temp);
			$arr['repay'] = $this->getNextDate($str_time_temp,$temp);
			$arr['repay'] = date("Y-m-d",$arr['repay']);
			$new_arr[] = $arr;
		}
		$this->assign('user',$user_data);
		$this->assign('loan_data',$loan_data);
		$this->assign('new_arr',$new_arr);
		$this->assign('id',$id);
		$this->display();
	}
	public function deal(){
		$id = $this->_get("id");
		//$loan_data = session('loan_data'.$id);
		//开启redis 查询借款信息
	    $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$loan_data['money'] = $redis->hget('loan_data'.$id,'money');	
		$loan_data['month'] = $redis->hget('loan_data'.$id,'month');
		$user = M('user');
		$user_data = $user->where('id='.$id)->field("card_no,name")->find();
		$data['uid'] = 	$id;
		$data['creatime'] = time();
		$data['loan_money'] = $loan_data['money'];
		$data['time_limit'] = $loan_data['month'];
		$creatime = $data['creatime'];
		$time_temp = $creatime + 86400 * 7;;
		$str_time_temp = date('Y-m-d',$time_temp);
		$data['over_time'] =$this->getNextDate($str_time_temp,$loan_data['month']);
		$data['creatime'] = date('Y-m-d',$data['creatime']);
		$data['over_time'] = date('Y-m-d',$data['over_time']);
		$data['give'] = $data['loan_money'] * 0.1;
		//计算还款价格 分子运算
		$member = $loan_data['money'] * (0.02 * pow(1.02,$loan_data['month']));
		//分母运算
		$mole = pow(1.02,$loan_data['month']) - 1;
		$refund = $member / $mole;
		$refund = ceil($refund) + 40;
		for($i=0;$i<$loan_data['month'];$i++){
			$installments = $i+1;
			$arr['installments'] = $installments;
			//$time_temp = $data['creatime'] + 86400 * 7;
			$arr['repay_time'] = $this->getNextDate($str_time_temp,$installments);
			$arr['repay_time'] = date('Y-m-d',$arr['repay_time']);
			$arr['should_money'] = $refund;
			$new_arr[] = $arr;
		}
		$this->assign('loan',$data);
		$this->assign('id',$id);
		$this->assign('new_arr',$new_arr);
		$this->assign('user_data',$user_data);
		$this->display();
	}
	public function loan(){
		//借款单生成
		$info = $this->_post("info");
		$id = $this->_get("id");
		$info_arr = explode('&amp;',$info);
		$user = M("user");
		$loan = M("loan");
		$is_map['uid'] = array('eq',$id);
		$is_map['is_over'] = array('eq','2');	
		$is_ok = $loan->where($is_map)->count();
		if(!empty($is_ok) && $is_ok > 0){
			$results = array(
				'error'=>true,
				'message'=>'借款单已存在',
			);
		echo json_encode($results);
			die;
		}
		//用户信息
		$user_data['phone_brand'] = $info_arr[0];		
		$user_data['app_version'] = $info_arr[1];
		$user_data['id'] = $id;
		$user->save($user_data);
		//借款表信息录入
		//$loan_data = session('loan_data'.$id);
		//开启redis 查询借款信息
	    $redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$loan_data['money'] = $redis->hget('loan_data'.$id,'money');	
		$loan_data['month'] = $redis->hget('loan_data'.$id,'month');
		$redis->hdel('loan_data'.$id,'money');
		$redis->hdel('loan_data'.$id,'month');
		$data['loan_num'] = date('YmHdis',time()).rand(999,10000);
		$data['uid'] = 	$id;
		$data['creatime'] = time();
		$data['loan_money'] = $loan_data['money'];
		$data['time_limit'] = $loan_data['month'];
		//查找数据库是否有已结款并状态为退回重新申请状态
		//只取一条数据
		$temp_data = $loan->field('id,plan,next_plan,check_id,check_name,loan_status,send_time')->where('uid='.$id)->order('creatime desc')->find();
		if(!empty($temp_data['id']) && isset($temp_data['id']) && $temp_data['loan_status'] == '5'){
			$data['plan'] = $temp_data['plan'];
			$data['next_plan'] = $temp_data['next_plan'];
			$data['check_id'] = $temp_data['check_id'];
			$data['check_name'] = $temp_data['check_name'];
			if($data['plan'] == 7){
					$data['deal_num'] = date('YmdHs',time());
					$data['send_time'] = $temp_data['send_time'];
			}else if($data['plan'] == 8){
				$data['send_address'] = $temp_data['send_address'];
			}
		}else{
			$data['plan'] = 0;
			$data['next_plan'] = 1;
		}
		/*//生成借款单之前进行借款过滤
		$is_communication = $this->filtrate_com($id);
		if(!$is_communication){
			$results = array(
				'error'=>false,
				'message'=>'您好，经过系统综合评定，您的本次申请未通过。建议您选用其他渠道缓解经济状况。感谢您对滴滴快贷的支持，祝您工作生活愉快!',
			);
			echo json_encode($results);
			die;
		}
		*/
		$loan->create($data);
		$lid = $loan->add();
		//若存在退回重新申请状态则审核详情录入
		if(!empty($temp_data['id']) && isset($temp_data['id']) && $temp_data['loan_status'] == '5'){
			$loan_check = M('loan_check');
			$check_temp = $loan_check->where('lid='.$temp_data['id'])->field('card_reason,card_check,data_reason,data_check,fis_tel_reason,fis_tel_check,income_reason,income_check,sec_tel_reason,sec_tel_check,wait_exp_reason,wait_exp_check,express_reason,express_check,fin_tel_reason,fin_tel_check,annex_reason,annex_check,fin_reason,fin_check')->find();
			$str = '【自动带入】';
			if(!empty($check_temp['card_reason']) && !strpos($check_temp['card_reason'],$str)){
				$check_temp['card_reason'] = '【自动带入】'.$check_temp['card_reason'];
			}
			if(!empty($check_temp['data_reason']) && !strpos($check_temp['data_reason'],$str)){
				$check_temp['data_reason'] = '【自动带入】'.$check_temp['data_reason'];
			}
			if(!empty($check_temp['fis_tel_reason']) && !strpos($check_temp['fis_tel_reason'],$str)){
				$check_temp['fis_tel_reason'] = '【自动带入】'.$check_temp['fis_tel_reason'];
			}
			if(!empty($check_temp['income_reason']) && !strpos($check_temp['income_reason'],$str)){
				$check_temp['income_reason'] = '【自动带入】'.$check_temp['income_reason'];
			}
			if(!empty($check_temp['sec_tel_reason']) && !strpos($check_temp['sec_tel_reason'],$str)){
				$check_temp['sec_tel_reason'] = '【自动带入】'.$check_temp['sec_tel_reason'];
			}
			if(!empty($check_temp['wait_exp_reason']) && !strpos($check_temp['wait_exp_reason'],$str)){
				$check_temp['wait_exp_reason'] = '【自动带入】'.$check_temp['wait_exp_reason'];
			}
			if(!empty($check_temp['express_reason']) && !strpos($check_temp['express_reason'],$str)){
				$check_temp['express_reason'] = '【自动带入】'.$check_temp['express_reason'];
			}
			if(!empty($check_temp['fin_tel_reason']) && !strpos($check_temp['fin_tel_reason'],$str)){
				$check_temp['fin_tel_reason'] = '【自动带入】'.$check_temp['fin_tel_reason'];
			}
			if(!empty($check_temp['annex_reason']) && !strpos($check_temp['annex_reason'],$str)){
				$check_temp['annex_reason'] = '【自动带入】'.$check_temp['annex_reason'];
			}
			if(!empty($check_temp['fin_reason']) && !strpos($check_temp['fin_reason'],$str)){
				$check_temp['fin_reason'] = '【自动带入】'.$check_temp['fin_reason'];
			}
			$check_temp['lid'] = $lid;
			$loan_check->create($check_temp);
			$loan_check->add();
		}
		//利率表生成
		$rate_data['loan_id'] = $lid;
		$rate_data['year_rate'] = 24;
		$rate_data['manage_prize'] =10; 
		$rate_data['serve_prize'] = 40;
		$rate_data['overdue_fine'] = 0.5;
		$rate_data['dedit'] = 10;
		$rate_data['limit'] = 5000;
		$rate_data['number'] = 6;
		$rate = M("rate");
		$rate->create($rate_data);
		$rate->add($rate_data);
		//还款单生成 
		$member = $loan_data['money'] * (0.02 * pow(1.02,$loan_data['month']));
		//分母运算
		$mole = pow(1.02,$loan_data['month']) - 1;
		$refund = $member / $mole;
		$refund = ceil($refund) + 40;
		$time_temp = $data['creatime'] + 86400 * 7;
		$str_time_temp = date('Y-m-d',$time_temp);
		for($i=0;$i<$loan_data['month'];$i++){
			$installments = $i+1;
			$arr['uid'] = $id;
			$arr['lid'] = $lid;
			$arr['bianhao'] = $data['loan_num'];
			$arr['installments'] = $installments;
			$arr['time_limit'] = $loan_data['month'];
			$arr['repay_time'] = $this->getNextDate($str_time_temp,$installments);
			$arr['total'] = $refund * $loan_data['month'];
			$arr['corpus'] = $loan_data['money'];
			$arr['should_money'] = $refund;
			$arr['is_use'] = 2;
			$new_arr[] = $arr;
		}
		$repay = M("repay");
		$repay->addAll($new_arr);
		$results = array(
				'error'=>true,
				'message'=>'借款申请已提交',
		);
		echo json_encode($results);
	}
	//取消借款
	public function give_up(){
		$id = $this->_get("id");
		$data['is_over'] = 3;
		$data['id'] = $id;
		$loan = M("loan");
		$result = $loan->save($data);
		if($result != false){
			$res = array('error'=>true,'msg'=>'借款取消成功');
		}else{
			$res = array('error'=>false,'msg'=>'借款取消失败');
		}
		echo json_encode($res);
	}
	//获取下个月的当前日期
	public function getNextDate($date,$num){
			$now = strtotime($date);
			$time=getdate($now);
			$new_mon = $time['mon'] + $num;
			if($time['mon'] > 12){
				$new_mon = 1;
				$new_year = $time['year'] + 1;
			}else{
				$new_year = $time['year'];
			}
			$str_next_date = $new_year.'-'.$new_mon.'-01';
			$str_last_day = date("Y-m-d",strtotime("$str_next_date +1 month -1 day"));
			$last_day = strtotime($str_last_day);
			$next_time = getdate($last_day);
			if($time['mday'] > $next_time['mday']){
				$str = $new_year.'-'.$new_mon.'-'.$next_time['mday'];
			}else{
				$str = $new_year.'-'.$new_mon.'-'.$time['mday'];
			}
			$int_time = strtotime($str);
			return $int_time;
	}
	//判断是否存在当天位置信息
	public function is_address(){
		$id = $this->_get('id');
		$address = M("address");
		$today = strtotime(date('Y-m-d',time()));
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$addkey = "address|".$id;
		$num = $redis->hIncrBy($addkey,'num',1);
		$map['createtime'] = array('gt',$today);
		$map['uid'] = array('eq',$id);
		$count = $address->where($map)->count();
		if($count < 0 || empty($count)){
			if($num < 2){
				$result = array(
					'error'=>true,
					'msg'=>'需要获得数据',
				);	
				 $timestamp = 86400;
				$redis->expireAt($addkey,$timestamp);
			}else{
				$result = array(
					'error'=>false,
					'msg'=>'不需要获得信息',
				);	
			}
			$result = array(
					'error'=>true,
					'msg'=>'需要获得数据',
			);	
		}else{
			$result = array(
				'error'=>false,
				'msg'=>'不存在位置信息',
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	//判断是否能够获取到通讯录
	public function is_com(){
		$id = $this->_get('id');
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$txlkey = "txl|".$id;
		$num = $redis->hIncrBy($txlkey,'num',1);
        $time = strtotime(date('Y-m-d',time()));
		$communication = M("communication");
		$map['uid'] = array('eq',$id);
		$count = $communication->where($map)->count();
		if($count < 0 || empty($count)){
			if($num < 2){
				$result = array(
					'error'=>true,
					'msg'=>'需要获得',
				);
				$timestamp = 86400;
				$redis->expireAt($callkey,$timestamp);		
			}else{
				$result = array(
					'error'=>false,
					'msg'=>'不需要获得',
				);	
			}
			$result = array(
					'error'=>true,
					'msg'=>'需要获得',
				);
		}else{
			$result = array(
				'error'=>false,
				'msg'=>'不需要获得',
			);
		}
        $redis->close();
		echo json_encode($result);
	}
	//判断是否能够获取到通话记录
	public function is_cal(){
		$id = $this->_get('id');
		$call_log = M("call_log");
		$today = strtotime(date('Y-m-d',time()));
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$callkey = "call_log|".$id;
		$num = $redis->hIncrBy($callkey,'num',1);
		$map['uid'] = array('eq',$id);
		$count = $call_log->where($map)->count();
		if($count < 0 || empty($count)){
			if($num < 2){
				$result = array(
					'error'=>true,
					'msg'=>'需要获得',
				);	
				$timestamp = 86400;
				$redis->expireAt($callkey,$timestamp);
			}else{
				$result = array(
					'error'=>false,
					'msg'=>'不需要获得',
				);	
			}
			$result = array(
					'error'=>true,
					'msg'=>'需要获得',
			);
		}else{
			$result = array(
				'error'=>false,
				'msg'=>'不需要获得',
			);
		}
		$redis->close();
		echo json_encode($result);
	}
	//过滤通讯录
	public function filtrate_com($uid){
		//通讯录数据取出
		$communication = M("communication");
		$result = $communication->field("name")->where('uid='.$uid)->select();
		$num = count($result);
		if($num < 50){
			$str = false;
			return $str;
		}
		//敏感词汇查询
		$word = M('word');
		$list = $word->field("content")->where('status=1')->select();
		foreach($list as $val){
			$word_temp .= $val['content'] . ','; 
		}
		$word_temp = trim($word_temp,',');
		$word_arr = explode(',',$temp);
		$i = 0;
		foreach($result as $val){
			//自定义函数查找敏感词汇
			$boll = array_walk($arr,filtrate,$val['name']);
			if($boll){
				$i = $i + 1;
			}else{
				continue;
			}
		}
		if($i > 5){
			$str = false;
		}else{
			$str = false;
		}
		return $str;
	}
}
?>