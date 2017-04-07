<?php
class MoneyAction extends CommonAction {
	//提现
	public function index(){
		$this->display();
	}
	public function reclist(){
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
		$map['status'] = 2;
		if($_POST['order_num']!='') $map['order_num'] = $_POST['order_num'];
		if($_POST['uid']!='') $map['uid'] = $_POST['uid'];
		if($_POST['bank_no']!='') $map['bank_no'] = $_POST['bank_no'];
		if($_POST['bank']!='') $map['bank'] = $_POST['bank'];
		if($_POST['name']!='') $map['name'] = array('like','%'.$_POST['name'].'%');
		if($_POST['bank_name']!='') $map['bank_name'] = array('like','%'.$_POST['bank_name'].'%');
		if($_POST['status']!='') $map['status'] = $_POST['status'];
		if(!empty($_POST['cstart'])){
		    $start = strtotime($_POST['cstart']);
			$end = empty($_POST['cend'])? $end = $start+86400 : strtotime($_POST['cend']);
			$map["ctime"] = array(array('gt',$start),array('lt',$end));
		}
		if(!empty($_POST['mstart'])){
		    $start = strtotime($_POST['mstart']);
			$end = empty($_POST['mend'])? $end = $start+86400 : strtotime($_POST['mend']);
			$map["manage_time"] = array(array('gt',$start),array('lt',$end));
		}
		$record = M('record');
		$list = $record->field("id,order_num,uid,name,surplus,extract,procedure,real,bank,bank_no,bank_name,ctime,status,manage_time")->where($map)->page($page.','.$rows)->select();
		$total = $record->where($map)->count();
		foreach($list as &$val){
			$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
			$val['manage_time'] = date('Y-m-d H:i:s',$val['manage_time']);
			$total_extract = $total_extract + $val['extract'];
			$total_procedure = $total_procedure + $val['procedure'];
			$total_real = $total_real + $val['real'];
		}
		$footers[0] = array('order_num'=>'总计','extract'=>$total_extract,'procedure'=>$total_procedure,'real'=>$total_real);
		if(empty($list)){
			$list = array();
		}
		$result = array(
			'total'=>$total,
			'rows'=>$list,
			'footer'=>$footers
		);
		if(!empty($result)){
			echo json_encode($result);
		}
	}
	//展示
	public function show(){
		$id = $this->_post("id");
		$record = M("record");
		$result = $record->field("id,order_num,uid,name,surplus,extract,procedure,real,bank,bank_no,bank_name,ctime,status,manage_time")->where('id='.$id)->find();
		echo json_encode($result);
	}
	//提交
	public function save(){
		$_POST['manage_time'] = time();
		$record = M('record');
		$record->create();
		$res = $record->save();
		if($res !== false){
				$result = array(
					'success'=>true,
					'msg'=>'处理成功!',
				);   
		}else{
				$result = array(
					'success'=>false,
					'msg'=>$user->getError()
				);   
		}
		echo json_encode($result);
	}
}