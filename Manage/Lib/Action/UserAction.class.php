<?php
class UserAction extends CommonAction {
	//用户管理女
	public function women(){
		$this->display();
	}
	//用户管理男
	public function man(){
		$this->display();
	}
	public function datalist(){
		$sex = $this->_get('sex');
		$map['u.sex'] = $sex;
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		if($_POST['userid']!='') $map['u.userid'] = $_POST['userid'];
		if($_POST['nickname']!='') $map['u.nickname'] = array('like','%'.$_POST['nickname'].'%');
		if($_POST['status']!='') $map['u.status'] = $_POST['status'];
		if(!empty($_POST['cstart'])){
		    $start = strtotime($_POST['cstart']);
			$end = empty($_POST['cend'])? $end = $start+86400 : strtotime($_POST['cend']);
			$map["u.ctime"] = array(array('gt',$start),array('lt',$end));
		}
		if(!empty($_POST['lstart'])){
		    $start = strtotime($_POST['lstart']);
			$end = empty($_POST['lend'])? $end = $start+86400 : strtotime($_POST['lend']);
			$map["u.ltime"] = array(array('gt',$start),array('lt',$end));
		}
		$user = M('user');
		$list = $user->table("oo_user as u")->join("oo_accout as c on u.id=c.uid")->field('u.id,u.userid,u.nickname,u.status,u.ctime,u.ltime,c.balance,c.extract,c.receiving,c.send')->where($map)->page($page.','.$rows)->select();
		$total = $user->table("oo_user as u")->join("oo_accout as c on u.id=c.uid")->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			$val['ltime'] = date('Y-m-d H:i:s',$val['ltime']);
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//展示修改项
	public function show_edit(){
		$id = $this->_post("id");
		$user = M("user");
		$result = $user->field("id,userid,username,nickname,pw,status")->where('id='.$id)->find();
		echo json_encode($result);
	}
	//提交修改项
	public function save_edit(){
		$_POST['password']=substr(md5($_POST['pw'].'oxox'),8,20);
		$user = M('user');
		$user->create();
		$res = $user->save();
		if($res !== false){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);   
		}else{
				$result = array(
					'success'=>false,
					'msg'=>$user->getError()
				);   
		}
		echo json_encode($result);
	}
	//展示个人信息项
	public function show_detail(){
		$id = $this->_post("id");
		$detail = M("user_detail");
		$result = $detail->field("uid,nickname,city,show,school,job,constellation,bank,bank_no,bank_name")->where('uid='.$id)->find();
		echo json_encode($result);
	}
	//提交个人信息项
	public function save_detail(){
		$data = $_POST;
		$uid = $data['uid'];
		unset($data['uid']);
		$detail = M('user_detail');
		$detail->create($data);
		$res = $detail->where('uid='.$uid)->save();
		if($res !== false){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);   
		}else{
				$result = array(
					'success'=>false,
					'msg'=>$detail->getError()
				);   
		}
		echo json_encode($result);
	}
	//展示收礼记录
	public function receive(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;	
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$id = $this->_get("uid");
		$consume = M("consume");
		$map['receive_id'] = $id;
		$map['status'] = 1;
		$list = $consume->field("receive_id,receive_name,ctime,money,uid,nickname")->where($map)->page($page.','.$rows)->select();
		$total = $consume->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//展示提现记录
	public function record(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;	
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$id = $this->_get("uid");
		$record = M("record");
		$map['uid'] = $id;
		$list = $record->field("uid,name,surplus,ctime,extract,bank,bank_no,bank_name,status")->where($map)->page($page.','.$rows)->select();
		$total = $record->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			if($val['status'] == 1){
				$val['status'] = '<font color="green">已处理</font>';
			}else{
				$val['status'] = '<font color="red">未处理</font>';
			}
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//送礼记录展示
	public function give(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;	
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$id = $this->_get("uid");
		$consume = M("consume");
		$map['uid'] = $id;
		$map['status'] = 1;
		$list = $consume->field("receive_id,receive_name,ctime,money,uid,nickname,gift_name,bank,bank_no,bank_name")->where($map)->page($page.','.$rows)->select();
		$total = $consume->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//收藏记录展示
	public function collect(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;	
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$id = $this->_get("uid");
		$collect = M("collect");
		$list = $collect->field("uid,name,collect_id,collect_name,collect_time")->where('uid='.$id)->select();
		$total = $collect->where('uid='.$id)->count();
		foreach($list as &$val){
			$val['collect_time'] = date('Y-m-d H:i:s',$val['collect_time']);
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//消息管理
	public function mesage(){
		$this->display();
	}
	public function messlist(){
		$is_admin = $this->_get('is_admin');
		$map['is_admin'] = $is_admin;
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		if($_POST['accept_id']!='') $map['accept_id'] = $_POST['accept_id'];
		if($_POST['content']!='') $map['content'] = array('like','%'.$_POST['content'].'%');
		if($_POST['send_id']!='') $map['send_id'] = $_POST['send_id'];
		if(!empty($_POST['start'])){
		    $start = strtotime($_POST['start']);
			$end = empty($_POST['end'])? $end = $start+86400 : strtotime($_POST['end']);
			$map["send_time"] = array(array('gt',$start),array('lt',$end));
		}
		$message = M('message');
		$list = $message->field("id,send_id,accept_id,send_time,content")->where($map)->page($page.','.$rows)->select();
		$total = $message->where($map)->count();
		foreach($list as &$val){
			$val['send_time'] = date('Y-m-d H:i:s',$val['send_time']);
		}
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//删除信息
	public function del_mes(){
		$id = $this->_post('id');
		if(!empty($id) && isset($id)){
			$message = M('message');
			$res = $message->where('id='.$id)->delete();
			if($res !== false){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);   
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$detail->getError()
				);   
			}
		}else{
			$result = array(
				'success'=>false,
				'msg'=>'id为空'
			);
		}
		echo json_encode($result);
	}
	//头像管理
	public function image(){
		$uid = $_POST['uid'];
		$nickname = $_POST['nickname'];
		$status = $_POST['status'];
		$img_status = $_POST['img_status'];
		if($uid!='') $map['id'] = $uid;
		if($nickname!='') $map['nickname'] = array('like','%'.$nickname.'%');
		if($status!='') $map['status'] = $status;
		if($img_status!='') $map['img_status'] = $img_status;
		$user = M("user");
		import("ORG.Util.Page");
		$count =$user->where($map)->count();
		$pagenum=ceil($count/36);
		$Page = New Page($count,36);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('theme','%upPage%  %linkPage%   %downPage% <li><a>共%totalPage%页</a></li>');
		$rows = $user->field("id,nickname,img_url,img_time,img_status,status")->where($map)->order("img_status DESC,img_time DESC")->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($rows as &$val){
			if(!empty($val['img_time'])){
				$val['img_time'] = date('Y/m/d H:i:s',$val['img_time']);
			}else{
				$val['img_time'] = '';
			}
			if($val['img_status'] == 1){
				$val['img_status'] = '<font color="green">通过审核</font>';
			}elseif($val['img_status'] == 2){
				$val['img_status'] = '<font color="red">未通过</font>';
			}else{
				$val['img_status'] = '<font color="red">未处理</font>';
			}
			if($val['status'] == 2){
				$val['id'] = '<font color="red">'.$val['id'].'</font>';
				$val['nickname'] = '<font color="red">'.$val['nickname'].'</font>';
			}
		}
		$show = $Page->show();
		$this->assign("rows",$rows);
		$this->assign("page",$show);
		$this->assign("pagenum",$pagenum);
		$this->assign('uid',$uid);
		$this->assign('nickname',$nickname);
		$this->assign('status',$status);
		$this->assign('img_status',$img_status);
		$this->display();
	}
	//头像审核通过
	public function head_check(){
		$id = $_POST['id'];
		$id = rtrim($id,',');
		$map['id'] = array('in',$id);
		$user = M('user');
		$data['img_status'] = 1;
		$data['img_time'] = time();
		$user->where($map)->save($data);
		echo "<script>window.location.href='/Manerger/index.php/User/image'</script>";
	}
	//头像审核未通过
	public function head_cancle(){
		$id = $_POST['id'];
		$id = rtrim($id,',');
		$map['id'] = array('in',$id);
		$user = M('user');
		$data['img_status'] = 2;
		$data['img_time'] = time();
		$user->where($map)->save($data);
		echo "<script>window.location.href='/Manerger/index.php/User/image'</script>";
	}
	//查看大图
	public function show_big(){
		$id = $this->_post('id');
		$user = M('user');
		$img_url = $user->where('id='.$id)->getField("img_url");
		$result = array('error'=>true,'img_url'=>$img_url);
		echo json_encode($result);
	}
}