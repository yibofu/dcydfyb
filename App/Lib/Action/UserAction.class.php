<?php
class UserAction extends CommonAction{
	public function userdetail(){
		$uid = $_SESSION['userinfo']['uid'];
		$nickname = $_SESSION['userinfo']['nickname'];
		$sex = $_SESSION['userinfo']['sex'];
		$women_id = $this->_get('temp');
		$detail = M("user_detail");
		$result = $detail->table("oo_user as u")->join('oo_user_detail as d on u.id=d.uid')->where('u.userid='.$women_id)->field("u.id,u.userid,u.img_url,u.img_status,d.nickname,d.city,d.show,d.school,d.job,d.constellation")->find();
		//判断用户是否被收藏
		$collect = M("collect");
		$collect_map['uid'] = $uid;
		$collect_map['collect_id'] = $result['id'];
		$collect_id = $collect->where($collect_map)->getField('id');
		if(!empty($collect_id)){
			$add_class = 'dsIconed';
		}else{
			$add_class = '';
		}
		//判断该用户对于该mm是否已支付过
		$consume_map['uid'] = $uid;
		$consume_map['receive_id'] = $result['id'];
		$consume = M('consume');
		$consume_id = $consume->where($consume_map)->getField("id");
		if(!empty($consume_id)){
			$is_consume = 1;
		}else{
			$is_consume = 2;
		}
		//查看是否存在聊天
		$chat = M('chat');
		$chat_map['chat_id'] = $uid.'&'.$result['id'];
		$chat_id = $chat->where($chat_map)->getField('id');
		$chat_id = empty($chat_id) ? 0 : $chat_id;
		//查找男性用户的头像
		$user = M('user');
		$img_url = $user->where('id='.$uid)->getField('img_url');
		$this->assign('img_url',$img_url);
		$this->assign('chat_id',$chat_id);
		$this->assign('add_class',$add_class);
		$this->assign('is_consume',$is_consume);
		$this->assign('result',$result);
		$this->assign('nickname',$nickname);
		$this->assign('sex',$sex);
		$this->display();
	}
	//模拟计费
	public function pay_temp(){
		$data['uid'] = $_SESSION['userinfo']['uid'];
		$data['nickname'] = $_SESSION['userinfo']['nickname'];
		$data['money'] = $this->_post('total_prince');
		$user = M('user');
		$data['receive_id'] = $_POST['uid'];
		$data['gift_name'] = '红包';
		$data['receive_name'] = M('user')->where('id='.$data['receive_id'])->getField("nickname");
		$data['status'] = 1;
		$data['ctime'] = time();
		$consume = M("consume");
		$consume->create($data);
		$consume->add();
		$accout = M('accout');
		$receive_result = $accout->field("balance,receiving")->where('uid='.$data['receive_id'])->find();
		$receive_data['balance'] = $receive_result['balance'] + $data['money'];
		$receive_data['receiving'] = $receive_result['receiving'] + $data['money'];
		$accout->where('uid='.$data['receive_id'])->save($receive_data);
		$send = $accout->where('uid='.$data['uid'])->getField('send');
		$send_data['send'] = $send + $data['money'];
		$accout->where('uid='.$data['uid'])->save($send_data);
		echo 1;
	}
	//收藏用户
	public function collect(){
		$data['collect_id'] = $this->_get('id');
		$data['uid'] = $_SESSION['userinfo']['uid'];
		$data['name'] = $_SESSION['userinfo']['nickname'];
		$data['collect_name'] = M('user')->where('id='.$data['collect_id'])->getField("nickname");
		$data['collect_time'] = time();
		$collect = M("collect");
		$map['uid'] = $data['uid'];
		$map['collect_id'] = $data['collect_id'];
		$id = $collect->where($map)->getField('id');
		if(empty($id)){
			$collect->create($data);
			$res = $collect->add();
			if($res){
				$result = array('error'=>true,'msg'=>'收藏成功');
			}else{
				$result = array('error'=>false,'msg'=>'收藏失败');
			}
		}else{
			$result = array('error'=>false,'msg'=>'您已收藏过');
		}
		echo json_encode($result);
	}
	//取消收藏
	public function un_collect(){
		$map['uid'] = $_SESSION['userinfo']['uid'];
		$map['collect_id'] = $this->_get('id');
		$collect = M("collect");
		$res = $collect->where($map)->delete();
		if($res != false){
			$result = array('error'=>true,'msg'=>'取消成功');	
		}else{
			$result = array('error'=>true,'msg'=>'取消失败');
		}
		echo json_encode($result);
	}
	//聊聊
	public function talk(){
		$data = $this->_post();
		$uid = $_SESSION['userinfo']['uid'];
		$chat = M('chat');
		if($data['chat_id'] == 0){
			$chat_data['chat_id'] = $uid.'&'.$data['receive_id'];
			$chat_data['message'] = $data['content'];
			$chat_data['mtime'] = time();
			$chat_data['has_new'] = 1;
			$chat_data['is_admin'] = 2;
			$chat->create($chat_data);
			$data['chat_id'] = $chat->add();
		}else{
			$chat_data['id'] = $data['chat_id'];
			$chat_data['message'] = $data['content'];
			$chat_data['mtime'] = time();
			$chat_data['has_new'] = 1;
			$chat->save($chat_data);
		}
		$message_data['chat_id'] = $data['chat_id'];
		$message_data['send_id'] = $uid;
		$message_data['accept_id'] = $data['receive_id'];
		$message_data['send_time'] = time();
		$message_data['content'] = $data['content'];
		$message = M('message');
		$message->create($message_data);
		$message->add();
		echo 1;
	}
	//个人中心 男
	public function man(){
		$uid = $_SESSION['userinfo']['uid'];
		$detail = M("user_detail");
		$user_detail = $detail->table("oo_user as u")->join("oo_user_detail as d on u.id=d.uid")->field("d.id,u.userid,u.img_url,u.img_status,u.sex,d.uid,d.nickname,d.city,d.show,d.school,d.job,d.constellation")->where('u.id='.$uid)->find();
		$this->assign('userinfo',$user_detail);
		//我的收藏
		$collect = M("collect");
		$collect_reuslt = $collect->table("oo_collect as c")->join("oo_user as u on c.collect_id=u.id")->field("u.userid,c.collect_name,u.img_url")->where('c.uid='.$uid)->limit(0,12)->select();
		$collect_count = $collect->table("oo_collect as c")->join("oo_user as u on c.collect_id=u.id")->where('c.uid='.$uid)->count();
		$collect_pagenum = ceil($collect_count / 12);
		$this->assign('sex',$sex);
		$this->assign('collect_reuslt',$collect_reuslt);
		$this->assign('collect_pagenum',$collect_pagenum);
		//送礼记录
		$consume = M("consume");
		$consume_result = $consume->field('gift_name,money,receive_name,ctime')->where('uid='.$uid)->order('ctime')->limit(0,12)->order('ctime desc')->select();
		foreach($consume_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
		}
		$consume_count = $consume->where("uid=".$uid)->count();
		$consume_pagenum = ceil($consume_count / 12);
		$this->assign('consume_result',$consume_result);
		$this->assign('consume_pagenum',$consume_pagenum);
		//消息记录
		$chat = M("chat");
		$map['chat_id'] = array('like','%'.$uid.'%');
		$chat_result = $chat->field("id,chat_id,message,mtime,has_new,is_admin")->where($map)->order('mtime desc')->limit(0,12)->select();
		$chat_count = $chat->where($map)->count();
		$chat_list = array();
		$user = M('user');
		$has_new = 2;
		foreach($chat_result as &$val){
			$temp = explode('&',$val['chat_id']);
			if($temp[0] == $uid){
				$chat_user_map['id'] = $temp[1];
			}else{
				$chat_user_map['id'] = $temp[0];
			}
			$temp_user_result = $user->field("nickname,img_url,img_status")->where($chat_user_map)->find();
			$val['nickname'] =$temp_user_result['nickname'];
			if($val['is_admin'] == 2){
				$val['img_url'] =$temp_user_result['img_url'];
				$val['img_status'] =$temp_user_result['img_status'];	
			}else{
				$val['img_url'] = '/Public/app/img/zsjj.jpeg';
				$val['img_status'] = 1;
			}
			$val['mtime'] = date('Y-m-d H:i:s',$val['mtime']);
			if($val['has_new'] == 1){
				$has_new = 1;
			}
		}
		$chat_pagenum = ceil($chat_count / 12);
		$this->assign('chat_count',$chat_count);
		$this->assign('chat_result',$chat_result);
		$this->assign('chat_pagenum',$chat_pagenum);
		$this->assign('has_new',$has_new);
		$this->display();
	}
	public function women(){
		$uid = $_SESSION['userinfo']['uid'];
		$detail = M("user_detail");
		$user_detail = $detail->table("oo_user as u")->join("oo_user_detail as d on u.id=d.uid")->field("u.id,u.userid,u.img_url,u.img_status,u.sex,d.uid,d.nickname,d.city,d.show,d.school,d.job,d.constellation")->where('u.id='.$uid)->find();
		$this->assign('userinfo',$user_detail);
		//提现账号
		$bank_result = $detail->field("uid,bank,bank_no,bank_name")->where('uid='.$uid)->find();
		switch($bank_result['bank']){
			case '中国银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank0.jpg';
			break;
			case '中国建设银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank1.jpg';
			break;
			case '中国农业银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank2.jpg';
			break;
			case '中国工商银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank3.jpg';
			break;
			case '中国邮政储蓄银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank4.jpg';
			break;
			case '招商银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank5.jpg';
			break;
			case '中国光大银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank6.jpg';
			break;
			case '浦发银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank7.jpg';
			break;
			case '中信银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank8.jpg';
			break;	
			case '北京银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank9.jpg';
			break;
			case '交通银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank10.jpg';
			break;
			case '中国民生银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank11.jpg';
			break;
			case '平安银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank12.jpg';
			break;
			case '兴业银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank13.jpg';
			break;
			case '广发银行':
				$bank_result['bank_url'] = '/Public/app/img/banks/bank14.jpg';
			break;
			default:
				$bank_result['bank_url'] = '/Public/app/img/banks/bank15.png';
			break;	
		}
		$this->assign('bank_result',$bank_result);
		//账户余额
		$accout = M('accout');
		$accout_result = $accout->table("oo_accout as a")->join("oo_user_detail as d on a.uid=d.uid ")->field("a.balance,a.extract,d.bank,d.bank_no")->where('a.uid='.$uid)->find();
		$accout_result['bank_no'] = substr($accout_result['bank_no'],-4);
		$this->assign('accout',$accout_result);
		//收礼记录
		$consume = M("consume");
		$consume_result = $consume->field('gift_name,money,nickname,ctime')->where('receive_id='.$uid)->order('ctime')->limit(0,12)->order('ctime desc')->select();
		foreach($consume_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
		}
		$consume_count = $consume->where("receive_id=".$uid)->count();
		$consume_pagenum = ceil($consume_count / 12);
		if($consume_count > 0){
			$consume_has = 1;
		}else{
			$consume_has = 2;
		}
		$this->assign('consume_has',$consume_has);
		$this->assign('consume_result',$consume_result);
		$this->assign('consume_pagenum',$consume_pagenum);
		//消息记录
		$chat = M("chat");
		$map['chat_id'] = array('like','%'.$uid.'%');
		$chat_result = $chat->field("id,chat_id,message,mtime,has_new,is_admin")->where($map)->order('mtime desc')->limit(0,12)->select();
		$chat_count = $chat->where($map)->count();
		$chat_list = array();
		$user = M('user');
		$has_new = 2;
		foreach($chat_result as &$val){
			$temp = explode('&',$val['chat_id']);
			if($temp[0] == $uid){
				$chat_user_map['id'] = $temp[1];
			}else{
				$chat_user_map['id'] = $temp[0];
			}
			$temp_user_result = $user->field("nickname,img_url,img_status")->where($chat_user_map)->find();
			$val['nickname'] =$temp_user_result['nickname'];
			if($val['is_admin'] == 2){
				$val['img_url'] =$temp_user_result['img_url'];
				$val['img_status'] =$temp_user_result['img_status'];	
			}else{
				$val['img_url'] = '/Public/app/img/zsjj.jpeg';
				$val['img_status'] = 1;
			}
			$val['mtime'] = date('Y-m-d H:i:s',$val['mtime']);
			if($val['has_new'] == 1){
				$has_new = 1;
			}
		}
		$chat_pagenum = ceil($chat_count / 12);
		$this->assign('chat_result',$chat_result);
		$this->assign('chat_pagenum',$chat_pagenum);
		//提现记录
		$record = M('record');
		$record_map['uid'] = $uid;
		$record_result = $record->field("name,extract,ctime,status")->where($record_map)->limit(0,12)->order('ctime desc')->select();
		foreach($record_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			if($val['status'] == 1){
				$val['status'] = '已提现';
			}else{
				$val['status'] = '审核中';
			}
		}
		$record_count = $record->where($map)->count();
		$record_pagenum = ceil($record_count / 12);
		$this->assign('record_result',$record_result);
		$this->assign('record_pagenum',$record_pagenum);
		$this->assign('has_new',$has_new);
		$this->display();
	}
	//更改银行账号
	public function edit_bank(){
		$data = $this->_post();
		$detail =  M("user_detail");
		$uid = $_SESSION['userinfo']['uid'];
		$res = $detail->where('uid='.$uid)->save($data);
		if($res != false){
			$result = array('error'=>true,'result'=>'修改成功');
		}else{
			$result = array('error'=>false,'result'=>'修改失败');
		}
		echo json_encode($result);
	}
	
	//提现
	public function get_money(){
		$uid = $_SESSION['userinfo']['uid'];
		$money = $this->_post('money');
		$accout = M('accout');
		$accout_result = $accout->field("extract,balance")->where('uid='.$uid)->find();
		$money = (int)$money;
		$accout_result['balance'] = (int)$accout_result['balance'];
		$balance = $accout_result['balance'] - $money;
		if($balance >= 0){
			$data['balance'] = $accout_result['balance'] - $money;
			$data['extract'] = $accout_result['extract'] + $money;
			$res = $accout->where('uid='.$uid)->save($data);	
			if($res != false){
				$record = M("record");
				$rate_table = M('rate');
				$rate = $rate_table->where('id=1')->getField('rate');
				$rate = $rate / 100;
				$user_detail = M("user_detail");
				$userinfo = $user_detail->field("nickname,bank,bank_no,bank_name")->where('uid='.$uid)->find();
				$record_data['order_num'] = 'TX'.date('YmdHis',time());
				$record_data['uid'] = $uid;
				$record_data['name'] = $userinfo['nickname'];
				$record_data['surplus'] = $data['balance'];
				$record_data['extract'] = $money;
				$record_data['procedure'] = $money * $rate;
				$record_data['real'] = $money - $record_data['procedure'];
				$record_data['bank'] = $userinfo['bank'];
				$record_data['bank_no'] = $userinfo['bank_no'];
				$record_data['bank_name'] = $userinfo['bank_name'];
				$record_data['ctime'] = time();
				$record->create($record_data);
				$record->add();
				$result = array('error'=>true,'msg'=>'提现申请提交成功','balance'=>$data['balance']);
			}else{
				$result = array('error'=>false,'msg'=>'提现失败','balance'=>$accout_result['balance']);
			}
		}else{
			$result = array('error'=>false,'msg'=>'余额不够','balance'=>$accout_result['balance']);
		}
		echo json_encode($result);
	}
	//修改信息
	public function edit_detail(){
		$temp = $this->_post();
		$data['city'] = $temp['city'];
		$data['job'] = $temp['profession'];
		$data['constellation'] = $temp['constellation'];
		$data['show'] = $temp['sign'];
		$data['school'] = $temp['school'];
		$detail = M("user_detail");
		$res = $detail->where('uid='.$temp['id'])->save($data);
		if($res != false){
			$result = array('error'=>true,'msg'=>'修改成功');
		}else{
			$result = array('error'=>false,'msg'=>'修改失败');
		}
		echo json_encode($result);
	}
	//我的收藏
	public function ajax_collect(){
		import("ORG.Util.Page");
		$collect = M("collect");
		$uid = $_SESSION['userinfo']['uid'];
		$collect = M("collect");
	    $count = $collect->table("oo_collect as c")->join("oo_user as u on c.collect_id=u.id")->where('c.uid='.$uid)->count();
	    $Page = New Page($count,12);
		$collect_reuslt = $collect->table("oo_collect as c")->join("oo_user as u on c.collect_id=u.id")->field("u.userid,c.collect_name,u.img_url")->where('c.uid='.$uid)->limit($Page->firstRow.','.$Page->listRows)->select();
        echo json_encode($collect_reuslt);		
	}
	//送礼记录
	public function ajax_consume(){
		$uid = $_SESSION['userinfo']['uid'];
		$consume = M("consume");
		import("ORG.Util.Page");
	    $count = $consume->where("uid=".$uid)->count();
	    $Page = New Page($count,12);
		$consume_result = $consume->field('gift_name,money,receive_name,ctime')->where('uid='.$uid)->limit($Page->firstRow.','.$Page->listRows)->order('ctime desc')->select();
		foreach($consume_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			if($val['status'] == 1){
				$val['status'] = '已提现';
			}else{
				$val['status'] = '审核中';
			}
		}
        echo json_encode($consume_result);	
	}
	//提现记录
	public function ajax_record(){
		$uid = $_SESSION['userinfo']['uid'];
		$record = M('record');
		$record_map['uid'] = $uid;
		import("ORG.Util.Page");
	    $count = $record->where($record_map)->count();
	    $Page = New Page($count,12);
		$record_result = $record->field("name,extract,ctime,status")->where($record_map)->order('ctime desc')->select();
		foreach($record_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			if($val['status'] == 1){
				$val['status'] = '已提现';
			}else{
				$val['status'] = '审核中';
			}
		}
        echo json_encode($record_result);	
	}
	//收礼记录
	public function ajax_women_consume(){
		$uid = $_SESSION['userinfo']['uid'];
		$consume = M("consume");
		import("ORG.Util.Page");
	    $count = $consume->where("receive_id=".$uid)->count();
	    $Page = New Page($count,12);
		$consume_result = $consume->field('gift_name,money,nickname,ctime')->where('receive_id='.$uid)->limit($Page->firstRow.','.$Page->listRows)->order('ctime desc')->select();
		foreach($consume_result as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
		}
        echo json_encode($consume_result);	
	}
	//消息记录
	public function ajax_message(){
		$uid = $_SESSION['userinfo']['uid'];
		import("ORG.Util.Page");
		$chat = M("chat");
		$map['chat_id'] = array('like','%'.$uid.'%');
		$chat_count = $chat->where($map)->count();
		$Page = New Page($chat_count,12);
		$chat_result = $chat->field("id,chat_id,message,mtime,has_new,is_admin")->where($map)->limit($Page->firstRow.','.$Page->listRows)->order("mtime desc")->select();
		$chat_list = array();
		$user = M('user');
		foreach($chat_result as &$val){
			$temp = explode('&',$val['chat_id']);
			if($temp[0] == $uid){
				$chat_user_map['id'] = $temp[1];
			}else{
				$chat_user_map['id'] = $temp[0];
			}
			$temp_user_result = $user->field("nickname,img_url,img_status")->where($chat_user_map)->find();
			if($val['is_admin'] == 2){
				$val['nickname'] =$temp_user_result['nickname'];
				if($val['img_status'] == 1){
					$val['img_url'] =$temp_user_result['img_url'];
				}else{
				$val['img_url'] = '/Public/app/img/zsjj.jpeg';	
				}	
			}else{
				$val['img_url'] = '/Public/app/img/zsjj.jpeg';
				$val['nickname'] = '管理员';
			}
		}
		echo json_encode($message_result);	
	}
	//查找聊天明细
	public function query_chat(){
		$uid = $_SESSION['userinfo']['uid'];
		$map['chat_id'] = $this->_post('chat_id');
		$message = M('message');
		$result = $message->field("send_id,accept_id,send_time,content")->where($map)->order("send_time asc")->select();
		$chat = M('chat');
		$chat_id_str = $chat->where('id='.$map['chat_id'])->getField("chat_id");
		$arr_chat = explode('&',$chat_id_str);
		if($arr_chat[0] != $uid){
			$another_id = $arr_chat[0];
		}else{
			$another_id = $arr_chat[1];
		}
		$user = M("user");
		foreach($result as &$val){
			$val['send_time'] = date('Y-m-d H:i:s',$val['send_time']);
			if($val['send_id'] == $uid){
				$val['sclass'] = 'male';
				$val['img_url'] = $user->where('id='.$val['send_id'])->getField("img_url");
			}else{
				$val['sclass'] = 'female';
				$val['img_url'] = $user->where('id='.$another_id)->getField("img_url");
			}
		}
		$data['has_new'] = 2;
		$data['id'] = $map['chat_id'];
		$chat->save($data);
		echo json_encode($result);
	}
	//消息新增
	public function add_chat(){
		$uid = $_SESSION['userinfo']['uid'];
		$data = $this->_post();
		$data['send_time'] = time();
		$data['send_id'] = $uid;
		$map['id'] = $data['chat_id'];
		$chat = M('chat');
		$chat_id = $chat->where($map)->getField("chat_id");
		$arr_chat = explode('&',$chat_id);
		if($uid == $arr_chat[0]){
			$data['accept_id'] = $arr_chat[1];
		}else{
			$data['accept_id'] = $arr_chat[0];
		}
		$chat_data['mtime'] = $data['send_time'];
		$chat_data['has_new'] = 1;
		$chat_data['message'] = $data['content'];
		$chat_data['id'] = $data['chat_id'];
		$chat->save($chat_data);
		$message = M('message');
		$message->create($data);
		$message->add();
	}
	//头像上传
	public function upload(){
		$app_img = $_FILES['files'];		
		$wide_height = getimagesize($app_img);
		$IMG_DIR='./Public/upload';//图片上传位置  ../Public/upload  ../Public/upload/apps
		$path = 'head';
		$savepath=$IMG_DIR.'/'.$path.'/';	//图片保存位置
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();									// 实例化上传类
		$upload->maxSize  = 3145728 ;								// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');	// 设置附件上传类型
		$upload->savePath =  $savepath; 				// 设置附件上传目录
		$upload->saveRule = uniqid;		// 上传文件命名规则
		$upload->uploadReplace = true;	// 存在同名是否覆盖
		$upload->autoSub = true;	// 启用子目录保存文件
		$upload->subType = date;	// 子目录创建方式 可以使用hash date custom
		$upload->dateFormat = 'Ym';
		if(!$upload->upload())
		{									// 上传错误提示错误信息
			$mesg = $upload->getErrorMsg();
			$error = 1;
		}
		else
		{														// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$filename =$info[0]['savename']; 
			$fujianurl = substr($info[0]['savepath'].$filename,1);
			$error = 0;
			
		}
		$uid = $_SESSION['userinfo']['uid'];
		$user = M("user");	
		$data['img_url'] = $fujianurl;
		$data['img_time'] = time();
		$data['img_status'] = 3;
		$data['id'] = $uid;
		$user->save($data);
		$result = array(
			'error'=>$error,
			'fujianurl'=>$fujianurl,
			'mesg'=>$mesg,
		);
		
		echo  json_encode($result);
	}
}

?>