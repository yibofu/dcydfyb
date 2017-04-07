<?php
/*
*本类于用权限管理中，权限的curd操作。
*/
class PowerAction extends CommonAction {

	/*
	*权限列表
	* @param 
	* return json
	*/
	public function powerlist(){

		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		
		$Node = M('Node');
		
		$pid = isset($_POST['id']) ? intval($_POST['id']) : 0;
		
		$map['pid'] = $pid;
		
		$list = $Node->field('id,pid,name,title,status,path,ctime')->where($map)->page($page.','.
		$rows)->select();
		
		$total = $Node->where($map)->count();
		
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
	*查询是否有子级别权限
	*/
	private function has_child($id){
		$Node = M('Node');
		$map['pid'] = $id;
		$res = $Node->where($map)->count();
		return $res > 0 ? true : false;
	}
	
	/*
	*插入数据
	*/
	public function add(){
		$Node = M('Node');
		$data['title'] = $this->_post('title');
		$data['name'] = trim($this->_post('name'));
		$data['status'] = 1;
		$data['ctime'] = time();
		if(isset($_GET['pid'])&&$_GET['pid']!=''){
			$data['pid'] = $this->_get('pid');
		}else{
			$data['pid'] = 0;
		}
		$map['id'] = $this->_get('pid');

		if($data['pid']!=0){
			$path = $Node->field('path')->where($map)->find();
			$data['path'] = $path['path'].'_'.$this->_get('pid');
		}else{
			$data['path'] = 0;
		}
		
		if($Node->create($data)){
			$res = $Node->add();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'添加成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$Node->getError()
				);
			}
		}
		
		echo json_encode($result);
	}
	
	/*
	*编辑数据
	*/
	public function edit(){
	
		$Node = M('Node');
		$data['title'] = $this->_post('title');
		$data['name'] = $this->_post('name');
		$data['id'] = $this->_get('id');
		if($Node->create($data)){
			$res = $Node->save();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$Node->getError()
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
		$Node = M('Node');
		if($Node->delete($_POST['id'])){
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

			$Node = M('Node');
			$result = $Node->field('id,title as text,pid')->where('pid='.$id)->select();

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