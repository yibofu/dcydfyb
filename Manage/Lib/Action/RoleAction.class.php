<?php
/*
*本类于用角色管理，curd操作。
*/
class RoleAction extends CommonAction {

	/*
	* 角色列表
	* @param 
	* return json
	*/
	public function rolelist(){

		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		
		$Role = M('Role');

		$list = $Role->field('id,`name`,powername,power,description,ctime')->where($map)->page($page.','.$rows)->select();

		$total = $Role->where($map)->count();
		
		foreach($list as &$val){
			$val['ctime']= date('Y-m-d H:i',$val['ctime']);
		}
		
		$result = array(
			'total'=>$total,
			'rows'=>$list,
		);

		if(!empty($result)){
				echo json_encode($result);
		}

	}

	/*
	*	获到这个角色的权限字段
	*
	*/
	public function edit(){
		$Role = M('Role');
		$info = $Role->field('power')->where('id='.$_GET['id'])->find();
		echo json_encode($info);
	}
	
	/*
	*插入数据
	*/
	public function insert(){
		$Role = M('Role');
		
		$data = array(
			'gid'=>'',
			'name'=>'',
			'power'=>'',
			'powername'=>'',
			'description'=>'',
		);
		
		foreach($data as $key=>$val){
			$data[$key]=$this->_post($key);
		}
		
		$data['ctime'] = time();
		
		
		$powers = $this->get_array($data['power']);
		
		$data['powers'] = json_encode($powers);
		
		if(empty($data['name'])){
			$result = array(
				'success'=>false,
				'msg'=>'角色为必填内容!',
			);
		}elseif($Role->create($data)){
			$res = $Role->add();
			if($res){
				$result = array(
					'success'=>true,
					'msg'=>'添加成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$Role->getError()
				);
			}
		}
		
		echo json_encode($result);
	}
	
	/*
	*更新数据
	*method:post
	*/
	public function update(){
		$Role = M('Role');
		$data['description'] = $this->_post('description');
		$data['name'] = trim($this->_post('name'));
		$data['power'] = trim($this->_post('power'));
		$data['powername'] = trim($this->_post('powername'));
		$data['id'] = $this->_post('id');
		$powers = $this->get_array($data['power']);
		$data['powers'] = json_encode($powers);
		if($Role->create($data)){
			$res = $Role->save();
			if($res!==false){
				$result = array(
					'success'=>true,
					'msg'=>'修改成功!',
				);
			}else{
				$result = array(
					'success'=>false,
					'msg'=>$Role->getError()
				);
			}
		}
		
		echo json_encode($result);
	
	
	}
	
	
	/**
	*删除角色：
	*
	*/
	
	public function remove(){
		$Role = M('Role');
		if($Role->delete($_POST['id'])){
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
	
	public function get_array($ids=null){

			$Node = M('Node');
			if(!empty($ids)){
			   $ids = $this->getids($ids);
			   $map['id'] = array('in',$ids);
			}
			
			$result = $Node->field('name,title,CONCAT_WS("_",path,id) as abspath')->where($map)->order('abspath')->select();
			$i=0;
			foreach($result as $value){
			
				if($value['name']=='/'){
					$data[$i]['power'] = $value;
					$i++;
				}else{
					$data[$i-1]['childrens'][] = $value;
				}

			}
			return $data;

	}
	
	//添加管理员时使用
	public function role(){
		$Role = M('Role');
		
		$list = $Role->field('id,name')->select();
		
		echo json_encode($list);
		
	}

	//获取角色的完整id
	public function getids($ids=null){
			$Node = M('Node');
			if(!empty($ids)){
				$map['id'] = array('in',$ids);
				$result = $Node->field('pid')->where($map)->select();

				foreach($result as $value){
					$tmp[] = $value['pid'];
				}
				
				$arr = explode(',',$ids);
				
				$base = array_unique($tmp);
				$diff = array_diff($base,$arr);
				sort($diff);
				if($diff[0]==0){
					array_shift($diff);
				}
								
				$idsarray = array_merge($diff,$arr);
				return implode(',',$idsarray);
			}
	}
	

	
}