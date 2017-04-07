<?php

	class ShowAction extends CommonAction {
		public function index(){
			$phone_id = $this->_post('phone_id');
			if(!empty($phone_id) && isset($phone_id)){
				$g = "/^1[34578]\d{9}$/";
				$res = preg_match($g,$phone_id);
				if($res){
					$map['username'] = $phone_id;
				}else{
					$map['nickname'] = $phone_id;
				}
			}
			$nickname = $_SESSION['userinfo']['nickname'];
			$sex = $_SESSION['userinfo']['sex'];
			$user = M('user');
			$map['img_status'] = 1;
			$map['sex'] = 2;
			$result = $user->field("id,userid,img_url,nickname")->where($map)->limit(0,20)->order('ctime asc')->select();
			$count = $user->where($map)->count();
			$page = ceil($count / 20);
			$this->assign('page',$page);
			$this->assign('result',$result);
			$this->assign('nickname',$nickname);
			$this->assign('sex',$sex);
			$this->assign('phone_id',$phone_id);
			$this->display();
		}
		public function ajax_photo(){
			$phone_id = $this->_post('phone_id');
			if(!empty($phone_id) && isset($phone_id)){
				$g = "/^1[34578]\d{9}$/";
				$res = preg_match($g,$phone_id);
				if($res){
					$map['username'] = $phone_id;
				}else{
					$map['id'] = $phone_id;
				}
			}
			import("ORG.Util.Page");
			$user = M('user');
			$map['img_status'] = 1;
			$map['sex'] = 2;
			$count = $user->where($map)->count();
			$Page = New Page($count,20);
			$result = $user->field("id,userid,img_url,nickname")->where($map)->limit($Page->firstRow.','.$Page->listRows)->order('ctime asc')->select();
			 echo json_encode($result);
		}
	}
?>