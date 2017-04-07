<?php
class WordAction extends CommonAction {
	public function index(){
		$this->display();
	}
	public function datalist(){
		$word = M("word");
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$map['status'] = array('eq',1);
		$list = $word->field("id,title,ctime,status,desc,content,type")->where($map)->page($page.','.$rows)->select();
		$total = $word->where($map)->count();
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
	//增加
	public function add(){
		$word = M('word');
		$data['title'] = $this->_post('title');
		$data['desc'] = $this->_post('desc');
		$data['status'] = $this->_post('status');
		$data['content'] = $this->_post('content');
		$data['type'] = $this->_post('type');
		$data['ctime'] = time();
		if($word->create($data)){
			$res = $word->add();
			if($res){
				$result = array(
					'error'=>true,
					'msg'=>'添加成功!',
				);
			}else{
				$result = array(
					'error'=>false,
					'msg'=>$subject->getError()
				);
			}
		}
		/* if($result['success'] && $data['type'] == 1){
			//更新redis中敏感词库
			$redis = new Redis();
			$redis->connect(C('RedisIp'),6379);
			$redis->auth(C('Auth'));
			$redis->select(C('DBselect'));
			$list_map['status'] = array('eq',1);
			$list_map['type'] = array('eq',1);
			$list = $word->field("content")->where($list_map)->select();
			foreach($list as $val){
				$temp_str .= $val['content'] . ','; 
			}
			$redis_value = trim($temp_str,',');
			$key = 'sensivity_word';
			$redis->set($key,$redis_value);
			$redis->close();	
		} */
		echo json_encode($result);
	}
	//修改
	public function edit(){
		$word = M('word');
		$data['title'] = $this->_post('title');
		$data['desc'] = $this->_post('desc');
		$data['status'] = $this->_post('status');
		$data['content'] = $this->_post('content');
		$data['id'] = $this->_get('id');
		$data['type'] = $this->_post('type');
		if($word->create($data)){
			$res = $word->save();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$subject->getError()
				);
			}
		}
		/* if($result['success'] && $data['type'] == 1){
			//更新redis中敏感词库
			$redis = new Redis();
			$redis->connect(C('RedisIp'),6379);
			$redis->auth(C('Auth'));
			$redis->select(C('DBselect'));
			$list_map['status'] = array('eq',1);
			$list_map['type'] = array('eq',1);
			$list = $word->field("content")->where($list_map)->select();
			foreach($list as $val){
				$temp_str .= $val['content'] . ','; 
			}
			$redis_value = trim($temp_str,',');
			$key = 'sensivity_word';
			$redis->set($key,$redis_value);
			$redis->close();	
		} */
		echo json_encode($result);
	}
}