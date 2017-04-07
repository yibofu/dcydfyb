<?php
//Common
class RepayAction extends Action{
	public function index(){
		$info = $this->huikuanhuizong();
		$id = $_SESSION['user']['id'];
		$user = M("user");
		$name = $user->where('id='.$id)->getField("name");
		if(empty($info['loan_money'])){
			$info['loan_money'] = 0;
		}
		if(empty($info['money'])){
			$info['money'] = 0;
		}
		$info['name'] = $name;
		$this->assign('info',$info);
		$map['uid'] = $id;
		$Loan = M('Loan');
		$applying_datalist = $Loan->field('id,loan_money,time_limit,creatime,loan_status,plan,is_over')->where($map)->order('creatime desc')->find();
		$temp_map['is_over'] = array('neq',2); 
		$temp_map['uid'] = array('eq',$id); 
		$list = $Loan->field("id,loan_money,is_over,creatime")->where($temp_map)->order('creatime desc')->select();
		if($list[0]['id'] == $applying_datalist['id']){
			array_shift($list);	
		}
		foreach($list as &$val){
			$val['creatime'] = date('Y-m-d H:i:s',$val['creatime']);
			if($val['is_over'] == 1){
				$val['is_over'] = '已结束';
			}else if($val['is_over'] == 3){
				$val['is_over'] = '取消申请';
			}
		}
		//若无借款 则不显示
		if(empty($applying_datalist['id'])){
			$status = 1;
			$applying_datalist['creatime'] = 0;
		}
		/* $is_address = $this->get_address($id);
		$this->assign('address',$is_address); */
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
		$this->assign('list',$list);
		$this->assign('status',$status);
		$this->assign('applying_datalist',$applying_datalist);
		$this->assign('id',$id);
		$this->display();
	}
	public function end(){
		$Repay = M('Repay');
		$map['uid'] = $_SESSION['user']['id'];
		$map['status'] = 2;
		$info = $this->huikuanhuizong();
		$id = $_SESSION['user']['id'];
		$user = M("user");
		$name = $user->where('id='.$id)->getField("name");
		if(empty($info['loan_money'])){
			$info['loan_money'] = 0;
		}
		if(empty($info['money'])){
			$info['money'] = 0;
		}
		$info['name'] = $name;
		$this->assign('info',$info);
			
		$list = $Repay->field('lid,installments,repay_time,real_repay_time,real_money,')->where($map)->select();
		foreach($list as $val){
			if($val['repay_time'] < $val['real_repay_time']){
				$val['word'] = '已还款 （逾期）';
			}else{
				$val['word'] = '已还款';
			}
			$val['repay_time'] = date('Y-m-d',$val['repay_time']);
			$val['real_repay_time'] = date('Y-m-d',$val['real_repay_time']);
		}
		$empty = '<section class="nullstate"><div style=""><img src="/Public/Mob/yh/img/nullstate.png" alt="状态为空，没有申请" style="width: 100%;"/></div><p style="">暂时没有该款项的消息</p></section>';
		$this->assign('empty',$empty);
		$this->assign('list',$list);
		$this->display();
	}
	
	public function pay(){
		$id = $this->_get('id');
		$repay = M("repay");
		$should_money = $repay->where("id=".$id)->getField("should_money");
		$this->assign('money',$should_money);
		$this->assign('id',$id);
		$this->display();
	}	
	
	//应还款列表。
	public function shouldpay(){
		$info = $this->huikuanhuizong();
		$id = $_SESSION['user']['id'];
		$user = M("user");
		$name = $user->where('id='.$id)->getField("name");
		if(empty($info['loan_money'])){
			$info['loan_money'] = 0;
		}
		if(empty($info['money'])){
			$info['money'] = 0;
		}
		$info['name'] = $name;
		$this->assign('info',$info);
		$repay = M('repay');
		$map['r.uid'] = $_SESSION['user']['id'];
		$map['r.is_check'] = array('neq',1);;
		$map['r.is_use'] = 1;
		$list = $repay->table('dd_repay as r')->join("dd_loan as l on r.lid=l.id")->field("r.id,l.deal_num,r.should_money,r.installments,r.repay_time,r.status")->where($map)->order('r.repay_time asc')->select();
		$now = time();
		foreach($list as &$val){
			$temp = $val['repay_time'] - $now;
			if($temp <= 0){
				$val['red'] = 1;
			}else{
				$val['red'] = 2;
			}
			$val['repay_time'] = date('Y-m-d',$val['repay_time']);
		}
		$empty = '<section class="nullstate"><div style=""><img src="/Public/Mob/yh/img/nullstate.png" alt="状态为空，没有申请" style="width: 100%;"/></div><p style="">暂时没有该款项的消息</p></section>';
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
		$this->assign('list',$list);
		$this->assign('empty',$empty);
		$this->assign('id',$id);
		$this->display();
	}
	
	//应还款列表明细
	public function pay_detail(){
		$id = $this->_get('id');
		//还款列表。
		$repay = M("repay");
		$list = $repay->field("id,lid,installments,should_money,repay_time")->order("installments asc")->where('id='.$id)->find();
		$loan = M('loan');
		$loan_data = $loan->field("id,uid,loan_money,time_limit,plan,loan_status")->where("id=".$list['lid'])->find();
		$user = M("user");
		$user_data = $user->field("name,card_no")->where("id=".$loan_data['uid'])->find();
		$detail = M("userdetail");
		$detail_data = $detail->field("bank,bank_no")->where('uid='.$loan_data['uid'])->find();
		$rate = M("rate");
		$rate_data = $rate->field("manage_prize,serve_prize")->where("loan_id=".$list['lid'])->find();
		$info['manage_prize'] = $loan_data['loan_money'] * ($rate_data['manage_prize'] / 100);
		$info['serve_prize'] = $rate_data['serve_prize'];
		$info['money'] = $loan_data['loan_money'] - $info['manage_prize'];
		$info['bank'] = $detail_data['bank'];
		$info['bank_no'] = $detail_data['bank_no'];
		$info['name'] = $user_data['name'];
		$info['card_no'] = $user_data['card_no'];
		$info['loan_money'] = $loan_data['loan_money'];
		$info['time_limit'] = $loan_data['time_limit'];
		$list['repay_time'] = date('Y-m-d',$list['repay_time']);
		$list['installments'] = '第'.$list['installments'].'期';
		$this->assign('list',$list);
		$this->assign('info',$info);
		$this->display();
	}
	public function huikuanhuizong(){
		$Repay = M('Repay');
		//目前应还款
		$mapone['uid'] = $maptwo['uid'] = $_SESSION['user']['id'];
		$mapone['status'] = 1; //未到账
		$mapone['is_use'] = 1; 
		$info = $Repay->field('sum(should_money) as money')->where($mapone)->find();
		//共借款期数。
		$Loan = M('Loan');
		$maptwo['loan_status'] = 1; //审核通过 已经打款。
		$maptwo['plan'] = 12;
		$info2 = $Loan->field('sum(loan_money) loan_money,count(id) nums')->where($maptwo)->find();
		$result = array_merge($info,$info2);
		return $result;
	}
	
	
	public function detail(){
		$id = $this->_get('id');
		$loan = M('loan');
		$loan_data = $loan->field("id,uid,loan_money,time_limit,plan,loan_status")->where("id=".$id)->find();
		$user = M("user");
		$user_data = $user->field("name,card_no")->where("id=".$loan_data['uid'])->find();
		$detail = M("userdetail");
		$detail_data = $detail->field("bank,bank_no")->where('uid='.$loan_data['uid'])->find();
		$rate = M("rate");
		$rate_data = $rate->field("manage_prize,serve_prize")->where("loan_id=".$id)->find();
		$info['manage_prize'] = $loan_data['loan_money'] * ($rate_data['manage_prize'] / 100);
		$info['serve_prize'] = $rate_data['serve_prize'];
		$info['money'] = $loan_data['loan_money'] - $info['manage_prize'];
		$info['bank'] = $detail_data['bank'];
		$info['bank_no'] = $detail_data['bank_no'];
		$info['name'] = $user_data['name'];
		$info['card_no'] = $user_data['card_no'];
		$info['loan_money'] = $loan_data['loan_money'];
		$info['time_limit'] = $loan_data['time_limit'];
		//还款列表。
		$repay = M("repay");
		$list = $repay->field("installments,should_money,repay_time")->order("installments asc")->where('lid='.$id)->select();
		foreach($list as &$val){
			$val['repay_time'] = date('Y-m-d',$val['repay_time']);
			$val['installments'] = '第'.$val['installments'].'期';
		}
		$this->assign('list',$list);
		$this->assign('info',$info);
		$this->display();
	}
	
	public function history(){
		
		 $Loan = M('Loan');
		
		//$map['uid'] = $_SESSION['user']['id'];
		$map['uid'] = $this->_get('id');
		$map['is_over'] = array('neq','2');
		$list = $Loan->field('id,loan_money,creatime,loan_status,is_over')->where($map)->select();
		foreach($list as &$val){
			$val['creatime'] = date('Y-m-d',$val['creatime']);
			if($val['loan_status'] == 2){
				$val['reason'] = '审核未通过';
			}
			if($val['is_over'] == 1){
				$val['reason'] = '借款单已结束';
			}else if($val['is_over'] == 2){
				$val['reason'] = '借款已完成';	
			}else{
				$val['reason'] = '取消申请';
			}
		}
		$this->assign('list',$list);
		
		$this->display();
	}
	public function history_detail(){
		 $id = $this->_get('id');
		$loan = M('loan');
		$loan_data = $loan->field("id,uid,loan_money,time_limit,plan,loan_status")->where("id=".$id)->find();
		$user = M("user");
		$user_data = $user->field("name,card_no")->where("id=".$loan_data['uid'])->find();
		$detail = M("userdetail");
		$detail_data = $detail->field("bank,bank_no")->where('uid='.$loan_data['uid'])->find();
		$rate = M("rate");
		$rate_data = $rate->field("manage_prize,serve_prize")->where("loan_id=".$id)->find();
		$info['manage_prize'] = $loan_data['loan_money'] * ($rate_data['manage_prize'] / 100);
		$info['serve_prize'] = $rate_data['serve_prize'];
		$info['money'] = $loan_data['loan_money'] - $info['manage_prize'];
		$info['bank'] = $detail_data['bank'];
		$info['bank_no'] = $detail_data['bank_no'];
		$info['name'] = $user_data['name'];
		$info['card_no'] = $user_data['card_no'];
		$info['loan_money'] = $loan_data['loan_money'];
		$info['time_limit'] = $loan_data['time_limit'];
		if($loan_data['plan'] == 11){
			if($loan_data['loan_status'] == 1){
				$reason = '审核通过，等待放贷';
			}else if($loan_data['loan_status'] == 3){
				$reason = '等待复核';
			}else{
				$reason = '审核未通过';
			}
		}else if($loan_data['plan'] == 12){
			if($loan_data['loan_status'] == 1){
				$reason = '放贷成功';
				$status = 1;
			}else if($loan_data['loan_status'] == 3){
				$reason = '等待放贷';
			}else{
				$reason = '放贷失败';
			}
		}else{	
			if($loan_data['loan_status'] == 1){
				$reason = '审核中';
			}else if($loan_data['loan_status'] == 3){
				$reason = '等待审核';
			}else{
				$reason = '审核未通过';
			}
		}
		//还款列表。
		$repay = M("repay");
		$list = $repay->field("installments,should_money,repay_time")->order("installments asc")->where('lid='.$id)->select();
		foreach($repay_data as &$val){
			$val['repay_time'] = date('Y-m-d',$val['repay_time']);
			$val['installments'] = '第'.$val['installments'].'期';
		}
		$this->assign('status',$status);
		$this->assign('reason',$reason);
		$this->assign('list',$list);
		$this->assign('info',$info);
		$this->display();
	}
	//查询当天的位置信息是否存在
	public function get_address($id){
		//链接redis判断当天位置信息是否取过
		$redis = new Redis();
		$redis->connect(C('RedisIp'),6379);
		$redis->auth(C('Auth'));
		$redis->select(C('DBselect'));
		$today = strtotime(date('Y-m-d',time()));
		$addkey = "address|".$id;
		$is_has = $redis->get($addkey);
		if(empty($is_has) && !isset($is_has)){
			//redis中记录为空 即当天位置信息未获取过
			$address = M("address");
			$map['createtime'] = array('gt',$today);
			$map['uid'] = array('eq',$id);
			$count = $address->where($map)->count('id');
			if($count > 0){
				//数据库中存在当天位置信息
				$val = 1;
				$redis->set($addkey,$val);
				$timestamp = 86400;
				$redis->expireAt($addkey,$timestamp);
				$is_address = 111;
			}else{
				$is_address = 110;
			}
		}else{
			$is_address = 111;
		}
		return $is_address;	
	}
	//用户还款  支付宝&银行转账
	public function do_check(){
		$id = $this->_get('id');
		$repay = M('repay');
		$data['status'] = 2;
		$data['pay_way'] = $this->_post('way');
		$data['real_repay_time'] = time();
		$data['id'] = $id;
		$repay->save($data);
		echo 1001;
	}
}
?>