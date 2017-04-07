<?php
class AdminAction extends CommonAction {
	
	
	public function index(){
		$rolerows=M("role")->select();
		$this->assign("rolerows",$rolerows);
        $this->display();
	}
	
	public function adminlist(){

	  $page = isset($_POST['page'])? intval($_POST['page']) : 1;	
	  $rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;	
	  $Admin = D('admin');
	  
	  $list=$Admin->page($page.','.$rows)->select();  
	  $total=$Admin->count();
	  
      $rolerows=M("role")->field('id,name')->select();
      foreach($rolerows as $key=>$val){
      	 $field=$val['id'];
         $role[$field]=$val['name'];
      }
      
      
      foreach($list as &$val){
         $val['roles']=$role[$val['rid']];
         $val['ctime']=date('y-m-d h:i:s',$val['ctime']);
         $val['last_time']=date('y-m-d h:i:s',$val['last_time']);
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
		

	    echo json_encode($result);

	}
	
	
	/*
	 * 查看当前编辑管理员的信息
	 * @id  管理员id
	 */
	public function select_admininfo(){
		$id=$_POST['id'];
		$Admin=M("admin");
		$rows=$Admin->where("id=".$id)->find();
		echo json_encode($rows);		
	}
	
	
	public function add(){
	  	$Admin=M("admin");
	    $data=$Admin->create();
		
	    $data['username'] = $this->_post("username");
	    $pwd=$_POST['passwd'];
	    $data['passwd'] = $pwd;	  
	    $data['password']=substr(md5($pwd.'lypt'),8,20);
	    $data['realname'] = $this->_post("realname");
	    $data['qq'] = $this->_post("qq");
	    $data['rid'] = $this->_post("roles");
        $data['ctime']=time();
        $data['status'] = $this->_post("status");
	   // $data['last_ip']=$_SERVER["REMOTE_ADDR"];
		$result = $Admin->add($data);
		if($result!==false){
					$result = array(
						'success'=>true,
						'msg'=>'新增成功!',
					);   
				}else{
					$result = array(
						'success'=>false,
						'msg'=>$Admin->getError()
				);   
		}
		echo json_encode($result);
	}
	
	
	public function update(){
	    $id=$_GET['id'];
	    $Admin=M("admin");
	    $data=$Admin->create();
	    if(!empty($_POST['new_passwd'])){
  	        $pwd=$_POST['new_passwd'];	
	        $data['passwd']=$_POST['new_passwd'];       
	        $data['password']=substr(md5($pwd.'lypt'),8,20);
	    }
	    $data['realname'] = $this->_post("realname");
	    $data['qq'] = $this->_post("qq");
	    $data['rid'] = $this->_post("rid");
        $data['status'] = $this->_post("status");
	    
		$result = $Admin->where('id='.$_GET['id'])->save($data);
		 if($result!==false){
					$result = array(
						'success'=>true,
						'msg'=>'修改成功!',
					);   
				}else{
					$result = array(
						'success'=>false,
						'msg'=>$Admin->getError()
				);   
		}
		echo json_encode($result);
	}	
	
	public function remove(){
	    $Admin=M("admin");
	    $result = $Admin->where('id='.$_POST['id'])->save(array("status"=>0));
		 if($result!==false){
					$result = array(
						'success'=>true,
						'msg'=>'禁用成功!',
					);   
				}else{
					$result = array(
						'success'=>false,
						'msg'=>$Admin->getError()
				);   
		}
		echo json_encode($result);
	}
}