<?php
	class RateAction extends CommonAction{
		public function index(){
			$this->display();
		}
		public function ratelist(){
			$page = isset($_POST['page'])?intval($_POST['page']):1;
			$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
			$Rate=M("rate");
			$list=$Rate->field("id,rate")->where('id=1')->page($page.','.$rows)->select();
			$count=$Rate->where('id=1')->count();
			if(empty($list)){
				$list=array();
			}
			$result=array(
				'total'=>$count,
				'rows'=>$list,
			);
			if(!empty($result)){
				echo json_encode($result);
			}else{
				echo json_encode($list);
			}
		}
		public function edit(){
			$rate=M("rate");
			$id=$_POST['id'];
			$list=$rate->field("id,rate")->where("id=$id")->find();
			echo json_encode($list);
		}
		public function update(){
			$id=$_GET['id'];
			$rate=M("rate");
			$data=$rate->create();
			$data['rate']=$this->_POST("tx_rate");
			$result=$rate->where('id='.$_GET['id'])->save($data);
			if ($result!==false) {
				$results=array(
					'success'=>true,
					'msg'=>'修改成功！'
				);
			}else{
				$results=array(
					'success'=>false,
					'msg'=>"修改失败"
				);
			}
			echo json_encode($results);
		}
		//系统消息
		public function message(){
			$this->display();
		}
		public function meslist(){
			$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
			if($_POST['accept_name']!='') $map['accept_name'] = array('like','%'.$_POST['accept_name'].'%');
			if($_POST['accept_id']!='') $map['accept_id'] = array('like','%'.$_POST['accept_id'].'%');
			if(!empty($_POST['start'])){
				$start = strtotime($_POST['start']);
				$end = empty($_POST['end'])? $end = $start+86400 : strtotime($_POST['end']);
				$map["send_time"] = array(array('gt',$start),array('lt',$end));
			}
			$message_gm = M('message_gm');
			$list = $message_gm->field("id,accept,send_time,content")->where($map)->page($page.','.$rows)->select();
			$total = $message_gm->where($map)->count();
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
		//发布消息
		public function add(){
			$message_gm = M('message_gm');
			$data = $this->_post();
			$data['send_time'] = time();
			$message_gm->create($data);
			$result = $message_gm->add();
			if ($result!==false) {
				$message = M('message');
				$user = M('user');
				if($data['accept'] == 'ALL'){   //全体发送
					$user_result = $user->field("id,nickname")->select();
				}else{
					if($data['type'] == 1){ //id发送
						$map['id'] = array('in',$data['accept']);
						$user_result = $user->field("id,nickname")->where($map)->select();
					}else{					//昵称发送
						$accept = explode(',',$data['accept']);
						foreach($accept as $val){
							$temp_list = $user->field("id,nickname")->where('nickname='.$val)->find();
							$user_result[] = $tmep_list;
						}
					}
				}
				$chat = M('chat');
				foreach($user_result as $val){
					$chat_data = array();
					$chat_data['chat_id'] = '297&'.$val['id'];
					$chat_data['message'] = $data['content'];
					$chat_data['mtime'] = $data['send_time'];
					$chat_data['has_new'] = 1;
					$chat_data['is_admin'] = 1;
					$cid = $chat->add($chat_data);
					$message_data = array();
					$message_data['chat_id'] = $cid;
					$message_data['send_id'] = '297';
					$message_data['accept_id'] = $val['id'];
					$message_data['send_time'] = $data['send_time'];
					$message_data['content'] = $data['content'];
					$message->add($message_data);
				}
				$results=array(
					'success'=>true,
					'msg'=>'发布成功'
				);
			}else{
				$results=array(
					'success'=>false,
					'msg'=>"发布失败"
				);
			}
			echo json_encode($results);
		}
	/* 	//删除消息
		public function del(){
			$id = $this->_post('id');
			if(!empty($id) && isset($id)){
				$message_gm = M('message_gm');
				$message = M('message');
				$result = $message_gm->where('id='.$id)->delete();
				if ($result!==false) {
					$map['send_id'] = $id;
					$map['is_admin'] = 1;
					$message->where($map)->delete();
					$results=array(
						'success'=>true,
						'msg'=>'修改成功！'
					);
				}else{
					$results=array(
						'success'=>false,
						'msg'=>"修改失败"
					);
				}
				echo json_encode($results);
			}
		}
		public function show_edit(){
			$id = $this->_post('id');
			if(!empty($id) && isset($id)){
				$message_gm = M('message_gm');
				$result = $message_gm->field("id,accept,send_time,content,type")->where("id=".$id)->find();
				echo json_encode($result);
			}
		}
		public function save(){
			$message_gm = M('message_gm');
			$message_gm->create();
			$result = $message_gm->save();
			if($result != false){
				$message = M('message');
				$map['send_id'] = $_POST['id'];
				$map['is_admin'] = 1;
				$data['content'] = $_POST['content'];
				$message->where($map)->save($data);
				$results=array(
						'success'=>true,
						'msg'=>'修改成功！'
				);
			}else{
				$results=array(
						'success'=>false,
						'msg'=>"修改失败"
				);
			}
			echo json_encode($results);
		} */
	}
	
	
?>