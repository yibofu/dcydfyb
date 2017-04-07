<?php
class GiftAction extends CommonAction {
	public function giftlist(){
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$gift = M('gift');
		$pid = isset($_POST['id']) ? intval($_POST['id']) : 0;
		$map['pid'] = $pid;
		$list = $gift->field('id,pid,name,money,path,ctime')->where($map)->page($page.','.
		$rows)->select();
		$total = $gift->where($map)->count();
		foreach($list as &$val){
			$val['state']= $this->has_child($val['id']) ? 'closed' : 'open';
			$val['ctime']= date('Y-m-d H:i',$val['ctime']);
		}
		if(empty($list)){
			$list = array();
		}
		if(!$pid){
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);
		}else{
			$result = $list;
		}
		if(!empty($result)){
				echo json_encode($result);
		}
	}
	/*
	*
	*查询是否有子种类
	*/
	private function has_child($id){
		$gift = M('gift');
		$map['pid'] = $id;
		$res = $gift->where($map)->count();
		return $res > 0 ? true : false;
	}
	
	/*
	*插入数据
	*/
	public function add(){
		$gift = M('gift');
		$data['name'] = $this->_post('name');
		$data['money'] = trim($this->_post('money'));
		$data['ctime'] = time();
		if(isset($_GET['pid'])&&$_GET['pid']!=''){
			$data['pid'] = $this->_get('pid');
		}else{
			$data['pid'] = 0;
		}
		$map['id'] = $this->_get('pid');

		if($data['pid']!=0){
			$path = $gift->field('path')->where($map)->find();
			$data['path'] = $path['path'].'_'.$this->_get('pid');
		}else{
			$data['path'] = 0;
		}
		
		if($gift->create($data)){
			$res = $gift->add();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'添加成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$gift->getError()
				);
			}
		}
		
		echo json_encode($result);
	}
	
	/*
	*编辑数据
	*/
	public function edit(){
	
		$gift = M('gift');
		$data['name'] = $this->_post('name');
		$data['money'] = $this->_post('money');
		$data['id'] = $this->_get('id');
		if($gift->create($data)){
			$res = $gift->save();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$gift->getError()
				);
			}
		}
		
		echo json_encode($result);
	
	
	}
	
	
	/**
	*删除节点
	*
	*/
	
	public function remove(){
		$gift = M('gift');
		if($gift->delete($_POST['id'])){
			$result = array(
				'success'=>true,
				'msg'=>'删除成功!',
			);
		}else{
			$result = array(
				'success'=>false,
				'msg'=>'删除失败',
			);
		}
		
		echo json_encode($result);
	}

	
	private function get_array($id=0){

			$gift = M('gift');
			$result = $gift->field('id,name as text,pid')->where('pid='.$id)->select();

			$arr = array(); 
			if($result){//如果有子类 
				foreach($result as $rows){ //循环记录集 
					$rows['children'] = $this->get_array($rows['id']);//调用函数，传入参数，继续查询下级 
					$rows['state']= empty($rows['children']) ? 'open' : 'closed';
					$rows["checked"] =true;
					$arr[] = $rows; //组合数组 
				} 
				return $arr; 
			} 
	}
	

	public function powertree(){
		$list = $this->get_array(0);
		
		$str = json_encode($list);
		
		echo $str;
	}
	
}