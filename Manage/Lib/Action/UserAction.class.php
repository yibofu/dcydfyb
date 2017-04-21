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

	public function userlist(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;

		if ($_POST['id'] != "") $map['id'] = $_POST['id'];
		if ($_POST['nickname'] != "") $map['nickname'] = array('like','%'.$_POST['nickname'].'%');
		if ($_POST['Phone'] != "") $map['Phone'] = array('like','%'.$_POST['Phone'].'%');
		if ($_POST['is_vip'] != "") $map['is_vip'] = array('eq',$_POST['is_vip']);
		if(!empty($_POST['regstart'])){
			$start=$_POST['regstart'];
			$map['ctime']=array('egt',strtotime($start));
		}
		if(!empty($_POST['regend'])){
			$end=$_POST['regend'];
			$map['ctime']=array('elt',strtotime($end));
		}
		if ($_POST['regstart'] && $_POST['regend']) {
			$map['ctime'] = array('between',array(strtotime($start),strtotime($end)));
		}
		$user = M("user");
		$list = $user->field("id,nickname,Phone,ctime,is_vip")->where($map)->page($page.','.$rows)->select();
		$total = $user->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:m',$val['ctime']);
		}
		$result = array(
			'total' => $total,
			'rows' =>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}

	}

	public function billlist(){
		$page = isset($_POST['page'])? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		if ($_POST['id'] != "") $map['id'] = $_POST['id'];
		if ($_POST['nickname'] != "") $map['nickname'] = array('like','%'.$_POST['nickname'].'%');
		if ($_POST['Phone'] != "") $map['Phone'] = array('like','%'.$_POST['Phone'].'%');
		if ($_POST['is_open'] != "") $map['is_open'] = array('eq',$_POST['is_open']);
		if(!empty($_POST['regstart'])){
			$start=$_POST['regstart'];
			$map['addtime']=array('egt',strtotime($start));
		}
		if(!empty($_POST['regend'])){
			$end=$_POST['regend'];
			$map['addtime']=array('elt',strtotime($end));
		}
		if ($_POST['regstart'] && $_POST['regend']) {
			$map['addtime'] = array('between',array(strtotime($start),strtotime($end)));
		}
		$billcompany = M('billcompany');
		$list = $billcompany->table("dcyd_billcompany as u")->join("dcyd_user as c on c.id = u.uid")
			->field('u.id,u.company,u.addtime,u.is_open,c.Phone,c.nickname')->where($map)->page($page.','.$rows)->select();
		$total = $billcompany->table("dcyd_billcompany as u")->join("dcyd_user as c on c.id = u.uid")
			->where($map)->count();
		foreach ($list as &$val){
			$val['addtime'] = date('Y-m-d H:i:s',$val['addtime']);
		}
		$result = array(
			'total' => $total,
			'rows' =>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}

	}

	public function del_mes(){
		$id = $this->_post("id");
		if(!empty($id)){
			$billcompany = M('billcompany');
			$result = $billcompany->where("id = ".$id)->delete();
			if($result !== false){
				$result = array(
					'success'=>true,
					'msg'=>'删除成功'
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$billcompany->getError()
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

	public function queren(){
		$id = $this->_post("id");
		$billcompany = M('billcompany');
		$ret['is_open'] = 2;
		$result = $billcompany->where("id = ".$id)->save($ret);
		echo json_encode($result);
	}

	public function companyedit(){
		$id = $this->_post("id");
		$billcompany = M('billcompany');
		$result = $billcompany->field('id,company')->where("id = ".$id)->find();
		echo json_encode($result);
	}

	//修改发票抬头信息
	public function companysave(){
		$id = $this->_get("id");
		$billcompany = M('billcompany');
		$data = $billcompany->create();
		$data['company'] = $this->_post('company');
		$result = $billcompany->where("id = ".$id)->save($data);
		if($result != null){
			$result = array(
				'success'=>true,
				'msg'=>'修改成功'
			);
		}else{
			$result = array(
				'success'=>false,
				'msg'=>'修改失败'
			);
		}
		echo json_encode($result);
	}

	//用户评论
	public function commentslist(){
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

		if ($_POST['nickname'] != "") $map['nickname'] = array('like','%'.$_POST['nickname'].'%');
		if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
		if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');
		if ($_POST['status'] != "") $map['status'] = array('like','%'.$_POST['status'].'%');
		$veva = M("vevaluate");
		$list = $veva->table("dcyd_vevaluate as a")
			->join("dcyd_user as b on a.uid=b.id")->join("dcyd_view as c on a.viewid=c.id")
			->field("a.id,a.uid,a.viewid,a.content,a.addtime,a.status,b.nickname,b.Phone,c.title")
			->where($map)->page($page.','.$rows)->select();
		$total = $veva->table("dcyd_vevaluate as a")
			->field("a.id,a.uid,a.viewid,a.content,a.addtime,b.nickname,b.Phone,c.title")
			->where($map)->count();
		foreach($list as &$val){
			$val['addtime'] = date('Y-m-d H:i:s',$val['addtime']);
		}
		$result = array(
			'total' => $total,
			'rows' =>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}

	//是否显示评论
	public function surecomments(){
		$id = $this->_post("id");
		$veva = M("vevaluate");
		$ret['status'] = '2';
		$result = $veva->where("id = ".$id)->save($ret);
		echo json_encode($result);
	}

	//删除评论
	public function delcomments(){
		$id = $this->_post("id");
		if(!empty($id)){
			$veva = M("vevaluate");
			$result = $veva->where("id = ".$id)->delete();
			if($result !== false){
				$result = array(
					'success'=>true,
					'msg'=>'删除成功'
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$veva->getError()
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

	public function collectionlist(){
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

		if ($_POST['nickname'] != "") $map['nickname'] = array('like','%'.$_POST['nickname'].'%');
		if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
		if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');
		$collection = M("collection");
		$list = $collection->table("dcyd_collection as a")
			->join("dcyd_user as b on a.uid=b.id")->join("dcyd_view as c on a.courseid=c.id")
			->field("a.id,a.uid,a.courseid,a.addtime,b.nickname,c.title")
			->where($map)->page($page.','.$rows)->select();
		$total = $collection->table("dcyd_collection as a")
			->field("a.id,a.uid,a.courseid,c.content,a.addtime,b.nickname,c.title")
			->where($map)->count();
		foreach($list as &$val){
			$val['addtime'] = date('Y-m-d H:i:s',$val['addtime']);
		}
		$result = array(
			'total' => $total,
			'rows' =>$list,
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}


//	//展示个人信息项
//	public function show_detail(){
//		$id = $this->_post("id");
//		$detail = M("user_detail");
//		$result = $detail->field("uid,nickname,city,show,school,job,constellation,bank,bank_no,bank_name")->where('uid='.$id)->find();
//		echo json_encode($result);
//	}
	
}