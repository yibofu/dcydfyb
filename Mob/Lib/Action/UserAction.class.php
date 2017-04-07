<?php
class UserAction extends CommonAction{
	//设置列表
	public function index(){
		$userinfo = $_SESSION['user'];
		$id = $userinfo['id'];
		$card_check = M("card_check");
		$status = $card_check->where('uid='.$id)->getField("card_status");
		$this->assign('id',$userinfo['id']);
		$this->assign('status',$status);
		$this->display();
	}
	
	//修改密码页面显示
	public function change_pass(){
		$id = $_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	//验证密码页面
	public function check_pass(){
		$pwd = $this->_post('pwd');
		$pwd = 'dd'.$pwd.'kd';
		$pwd = md5($pwd);
		$pwd = substr($pwd,5,30);
		$user = M("user");
		$id = $this->_post("id");
		$pwd_db = $user->where('id='.$id)->getField("pwd");
		if($pwd == $pwd_db){
			$results = array(
				'error'=>true,
				'message'=>'密码正确',
			);
		}else{
			$results = array(
				'error'=>false,
				'message'=>'密码不正确,请重新填写',
			);
		}
		echo json_encode($results);
	}
	//更改密码
	public function update_pass(){
		$user = M("user");
		$data = $this->_post();
		$data['pwd'] = 'dd'.$data['pwd'].'kd';
		$data['pwd'] = md5($data['pwd']);
		$data['pwd'] = substr($data['pwd'],5,30);
		$id = $_GET['id'];
		$result = $user->where('id='.$id)->save($data);
		if($result != false){
			$results = array(
				'error'=>true,
				'message'=>'密码修改成功',
			);
		}else{
			$results = array(
				'error'=>false,
				'message'=>'密码修改失败，请返回重试',
			);
		}
		echo json_encode($results);
	}
	//更换手机号页面
	public function change_tel(){
		$id = $this->_get("id");
		$user = M("user");
		$phone = $user->where('id='.$id)->getField("phone");
		$this->assign('id',$id);
		$this->assign('phone',$phone);
		$this->display();
	}
	//更换手机提交
	public function check_code(){
		$phone = $this->_post('phone');
		$mess = $this->_post('mess');
		$pwd = $this->_post('pwd');
		$sess_mess = $_COOKIE['change_tel'.$phone];
		if($mess != $sess_mess){
			$result = array(
				'error'=>2,
				'message'=>'验证码错误',
			);
			echo json_encode($result);
			die;
		}
		$id = $this->_get("id");
		$user = M("user");
		$res_pwd = $user->where('id='.$id)->getField('pwd');
		$pwd = 'dd'.$pwd.'kd';
		$pwd = md5($pwd);
		$pwd = substr($pwd,5,30);
		if($res_pwd != $pwd){
			$result = array(
				'error'=>4,
				'message'=>'密码填写错误',
			);
			echo json_encode($result);
			die;
		}
		$data['phone'] = $phone;
		$data['id'] = $id;
		$status = $user->save($data);
		if($status != false){
			$result = array(
				'error'=>1,
				'message'=>'修改手机成功',
			);
		}else{
			$result = array(
				'error'=>3,
				'message'=>'修改手机失败！请返回重试',
			);
		}
		echo json_encode($result);
	}
	//工作信息查看
	public function work(){
		$id = $this->_get('id');
		$detail = M("userdetail");
		$result = $detail->field("job,com_phone,company,job_province,job_city,job_zone,job_detail")->where("uid=".$id)->find();
		$result['address'] = $result['job_province'].$result['job_city'].$result['job_zone'].$result['job_detail'];
		$this->assign('result',$result);
		$this->assign('id',$id);
		$this->display();
	}
	//填写工作信息页面
	public function work_update(){
		$id = $this->_get('id');
		$detail = M("userdetail");
		$result = $detail->field("job,com_phone,company,job_province,job_city,job_zone,job_detail")->where("uid=".$id)->find();
		$this->assign('id',$id);
		$this->assign('result',$result);
		$this->display();
	}
	//添加工作信息页面
	public function add_work(){
		$id = $this->_get('id');
		$detail = M("userdetail");
		$data = $this->_post();
		$result = $detail->where('uid='.$id)->save($data);
		if($result != false){
			echo '<script>window.location.href="/Mob/index.php/User/work/id/'.$id.'"</script>';
		}
	}
	//联系人信息
	public function link(){
		$id = $this->_get("id");
		$user = M("user");
		$linkman = M("linkman");
		$map['uid'] = array('eq',$id);
		$map['is_del'] = array('eq',1);
		$result = $linkman->field("id,name,phone,relation")->where($map)->select();
		$count = count($result);
		if($count > 7){
			$status = 1;
		}else{
			$status = 2;
		}
		$this->assign('status',$status);
		$this->assign('result',$result);
		$this->assign('id',$id);
		$this->display();
	}
	//联系人信息更改页面显示
	public function link_update(){
		$id = $this->_get('id');
		$this->assign('id',$id);
		$this->display();
	}
	//更改联系人信息
	public function add_link(){
		$uid = $this->_get('id');
		$linkman = M("linkman");
		$data = $this->_post();
		$data['uid'] = $uid;
		$data['createtime'] = time();
		$data['is_del'] = 1;
		$linkman->create($data);
		$id = $linkman->add();
		if($id){
			echo '<script>window.location.href="/Mob/index.php/User/link/id/'.$uid.'"</script>';
		}
	}
	//删除联系人
	public function link_del(){
		$id = $this->_post('id');
		$link = M('linkman');
		$data['is_del'] = 0;
		$data['id'] = $id;
		$result = $link->save($data);
		$uid = $link->where('id='.$id)->getField('uid');
		if($result != false){
			$res = array(
				'error'=>true,
				'msg'=>"/Mob/index.php/User/link/id/{$uid}",
			);
		}else{
			$res = array(
				'error'=>false,
				'msg'=>"删除失败",
			);
		}
		echo json_encode($res);
	}
	//银行卡信息查看
	public function card(){
		$id = $this->_get("id");
		$detail = M("userdetail");
		$user = M("user");
		$user_data = $user->where('id='.$id)->field("name,card_no")->find();
		$result = $detail->field("bank_no,bank_local,bank")->where("uid=".$id)->find();
		$result['name'] = $user_data['name'];
		$result['card_no'] = $user_data['card_no'];
		$this->assign("result",$result);
		$this->assign("id",$id);
		$this->display();
	}
	//更改银行卡信息页面展示
	public function card_update(){
		$id = $this->_get("id");
		$user = M("user");
		$result = $user->field("name,card_no")->where("id=".$id)->find();
		$detail = M('userdetail');
		$detail_data = $detail->field("bank,bank_local,bank_no")->where('uid='.$id)->find();
		$result['bank_no'] = $detail_data['bank_no'];
		$result['bank_local'] = $detail_data['bank_local'];
		$result['bank'] = $detail_data['bank'];
		$this->assign("result",$result);
		$this->assign('id',$id);
		$this->display();
	}
	//更改银行卡信息
	public function update_card(){
		$detail_data['bank_no'] = $this->_post("bank_no");
		$detail_data['bank'] = $this->_post("bank");
		$detail_data['bank_local'] = $this->_post("bank_local");
		if($detail_data['bank'] == 'other'){
			$detail_data['bank'] = $this->_post('bank_name');
		}
		$id = $this->_get('id');
		$detail = M("userdetail");
		$result = $detail->where("uid=".$id)->save($detail_data);
		echo '<script>window.location.href="/Mob/index.php/User/card/id/'.$id.'"</script>';
	}
	//附件增加显示
	public function annex(){
		$id = $this->_get('id');
		$annex = M('annex');
		$map['title'] = '';
		$map['url_ske'] = '';
		$annex->where($map)->delete();
		$this->assign('id',$id);
		$this->display();
	}
	//附件增加
	public function annex_add(){
		$uid = $this->_get('id');
		$data['uid'] = $uid;
		$data['is_recover'] = 2;
		$data['is_agree'] = 3;
		$data['reason'] = '新上传';
		$data['createtime'] = time();
		$data['from'] = 1;
		$annex = M('annex');
		$annex->create($data);
		$id = $annex->add();
		if(!empty($id) && isset($id)){
			$result = array(
			'error'=>true,
			'id'=>$id,
			);
		}else{
			$result = array(
			'error'=>false,
			'id'=>$id,
			);
		}
		echo json_encode($result);
	}
	//附件更新
	public function annex_update(){
		$id = $this->_post('aid');
		$data['title'] = $this->_post("title");
		$data['url_ske'] = $this->_post("url_ske");
		$annex = M("annex");
		$annex->where('id='.$id)->save($data);
		$uid = $this->_get('id');
		echo '<script>window.location.href="/Mob/index.php/User/annex_list/id/'.$uid.'"</script>';
	}
	//附件列表显示
	public function annex_list(){
		$id = $this->_get('id');
		$annex = M("annex");
		$map['title'] = array('neq','');
		$map['uid'] = array('eq',$id);
		$result = $annex->field("id,is_agree,title")->where($map)->order('createtime asc')->select();
		$this->assign('id',$id);
		$this->assign('result',$result);
		$this->display();
	}
	public function annex_show(){
		$id = $this->_get("id");
		$uid = $this->_get("uid");
		$annex = M("annex");
		$result = $annex->field("title,url_ske,is_agree,reason")->where("id=".$id)->find();
		$this->assign('uid',$uid);
		$this->assign('result',$result);
		$this->display();
	}
	//手持身份证信息页展示
	public function card_hand(){
		$id = $this->_get('id');
		$card_check = M("card_check");
		$result = $card_check->field("card_front_ske,card_back_ske,card_hand_ske,card_status,card_reason")->where('uid='.$id)->find();
		//   1通过    2全部退回    3持证退回   4身份证退回   5 新上传
		if(2 < $result['card_status'] && $result['card_status'] < 8){
			$result['card_status'] = 3;
		}else if(7 < $result['card_status'] && $result['card_status'] < 14){
			$result['card_status'] = 4;
		}else if($result['card_status'] == 14){
			$result['card_status'] = 5;
		}
		$this->assign('id',$id);
		$this->assign('result',$result);
		$this->display();
	}
	//身份证信息页面展示
	public function card_mess(){
		$id = $this->_get("id");
		$user = M("user");
		$result = $user->field('name,card_no')->where('id='.$id)->find();
		$card_check = M("card_check");
		$status = $card_check->where('uid='.$id)->getField("card_status");
		//   1通过    2全部退回    3持证退回   4身份证退回   5 新上传
		if(2 < $status && $status < 8){
			$status = 3;
		}else if(7 < $status && $status < 14){
			$status = 4;
		}else if($status == 14){
			$status = 5;
		}
		$this->assign('result',$result);
		$this->assign('status',$status);
		$this->assign('id',$id);
		$this->display();
	}
	//身份信息修改页面
	public function card_mess_update(){
		$id = $this->_get("id");
		$user = M("user");
		$data = $this->_post();
		$user->where('id='.$userinfo['id'])->save($data);
		echo '<script>window.location.href="/Mob/index.php/User/card_mess/id/'.$id.'"</script>';
	}
}
?>