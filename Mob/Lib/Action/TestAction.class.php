<?php
class TestAction extends Action{
	public function index(){
		$time = time();
		$week = date('w',$time);
		echo $week;
	}
		public function new_loan(){
		   /*  $id = 4288;
			$loan = M("loan");
			$is_map['uid'] = array('eq',$id);
			$is_map['is_over'] = array('eq','2');	
			$is_ok = $loan->where($is_map)->count();
			if(!empty($is_ok) && $is_ok > 0){
				$results = array(
					'error'=>true,
					'message'=>'借款单已存在',
				);
				echo json_encode($results);
				die;
			}
			//借款表信息录入
			$loan_data['money'] = 2000;	
			$loan_data['month'] = 3;
			$data['loan_num'] = date('YmHdis',time()).rand(999,10000);
			$data['uid'] = 	$id;
			$data['creatime'] = time();
			$data['loan_money'] = $loan_data['money'];
			$data['time_limit'] = $loan_data['month'];
			//查找数据库是否有已结款并状态为退回重新申请状态
			//只取一条数据
			$temp_data = $loan->field('id,plan,next_plan,check_id,check_name,loan_status,send_time')->where('uid='.$id)->order('creatime desc')->find();
			if(!empty($temp_data['id']) && isset($temp_data['id']) && $temp_data['loan_status'] == '5'){
				$data['plan'] = $temp_data['plan'];
				$data['next_plan'] = $temp_data['next_plan'];
				$data['check_id'] = $temp_data['check_id'];
				$data['check_name'] = $temp_data['check_name'];
				if($data['plan'] == 7){
					$data['deal_num'] = date('YmdHs',time());
					$data['send_time'] = $temp_data['send_time'];
				}else if($data['plan'] == 8){
					$data['send_address'] = $temp_data['send_address'];
				}
			}else{
				$data['plan'] = 0;
				$data['next_plan'] = 1;
			}
			$loan->create($data);
			$lid = $loan->add();
			//若存在退回重新申请状态则审核详情录入
			if(!empty($temp_data['id']) && isset($temp_data['id']) && $temp_data['loan_status'] == '5'){
				$loan_check = M('loan_check');
				$check_temp = $loan_check->where('lid='.$temp_data['id'])->field('card_reason,card_check,data_reason,data_check,fis_tel_reason,fis_tel_check,income_reason,income_check,sec_tel_reason,sec_tel_check,wait_exp_reason,wait_exp_check,express_reason,express_check,fin_tel_reason,fin_tel_check,annex_reason,annex_check,fin_reason,fin_check')->find();
				$str = '【自动带入】';
				if(!empty($check_temp['card_reason']) && !strpos($check_temp['card_reason'],$str)){
					$check_temp['card_reason'] = '【自动带入】'.$check_temp['card_reason'];
				}
				if(!empty($check_temp['data_reason']) && !strpos($check_temp['data_reason'],$str)){
					$check_temp['data_reason'] = '【自动带入】'.$check_temp['data_reason'];
				}
				if(!empty($check_temp['fis_tel_reason']) && !strpos($check_temp['fis_tel_reason'],$str)){
					$check_temp['fis_tel_reason'] = '【自动带入】'.$check_temp['fis_tel_reason'];
				}
				if(!empty($check_temp['income_reason']) && !strpos($check_temp['income_reason'],$str)){
					$check_temp['income_reason'] = '【自动带入】'.$check_temp['income_reason'];
				}
				if(!empty($check_temp['sec_tel_reason']) && !strpos($check_temp['sec_tel_reason'],$str)){
					$check_temp['sec_tel_reason'] = '【自动带入】'.$check_temp['sec_tel_reason'];
				}
				if(!empty($check_temp['wait_exp_reason']) && !strpos($check_temp['wait_exp_reason'],$str)){
					$check_temp['wait_exp_reason'] = '【自动带入】'.$check_temp['wait_exp_reason'];
				}
				if(!empty($check_temp['express_reason']) && !strpos($check_temp['express_reason'],$str)){
					$check_temp['express_reason'] = '【自动带入】'.$check_temp['express_reason'];
				}
				if(!empty($check_temp['fin_tel_reason']) && !strpos($check_temp['fin_tel_reason'],$str)){
					$check_temp['fin_tel_reason'] = '【自动带入】'.$check_temp['fin_tel_reason'];
				}
				if(!empty($check_temp['annex_reason']) && !strpos($check_temp['annex_reason'],$str)){
					$check_temp['annex_reason'] = '【自动带入】'.$check_temp['annex_reason'];
				}
				if(!empty($check_temp['fin_reason']) && !strpos($check_temp['fin_reason'],$str)){
					$check_temp['fin_reason'] = '【自动带入】'.$check_temp['fin_reason'];
				}
				$check_temp['lid'] = $lid;
				$loan_check->create($check_temp);
				$loan_check->add();
			}
			//利率表生成
			$rate_data['loan_id'] = $lid;
			$rate_data['year_rate'] = 24;
			$rate_data['manage_prize'] =10; 
			$rate_data['serve_prize'] = 40;
			$rate_data['overdue_fine'] = 0.5;
			$rate_data['dedit'] = 10;
			$rate_data['limit'] = 5000;
			$rate_data['number'] = 6;
			$rate = M("rate");
			$rate->create($rate_data);
			$rate->add($rate_data);
			//还款单生成 
			$member = $loan_data['money'] * (0.02 * pow(1.02,$loan_data['month']));
			//分母运算
			$mole = pow(1.02,$loan_data['month']) - 1;
			$refund = $member / $mole;
			$refund = ceil($refund) + 40;
			$time_temp = $data['creatime'] + 86400 * 7;
			$str_time_temp = date('Y-m-d',$time_temp);
			for($i=0;$i<$loan_data['month'];$i++){
				$installments = $i+1;
				$arr['uid'] = $id;
				$arr['lid'] = $lid;
				$arr['bianhao'] = $data['loan_num'];
				$arr['installments'] = $installments;
				$arr['time_limit'] = $loan_data['month'];
				$arr['repay_time'] = $this->getNextDate($str_time_temp,$installments);
				$arr['total'] = $refund * $loan_data['month'];
				$arr['corpus'] = $loan_data['money'];
				$arr['should_money'] = $refund;
				$arr['is_use'] = 2;
				$new_arr[] = $arr;
			}
			$repay = M("repay");
			$repay->addAll($new_arr);
			$results = array(
					'error'=>true,
					'message'=>'借款申请已提交',
			);
			echo json_encode($results); */
			$arr = array('hah'=>123,'xixi'=>123);
			$arr = serialize($arr);
			echo $arr;
		}
		//处理二维数组
		public function deal_arr($arr){
			foreach($arr as $key=>$val){
					$arr[$key] = json_encode($val);
			}
			return $arr;
		}
		private function getNextDate($date,$num){
			$now = strtotime($date);
			$time=getdate($now);
			$new_mon = $time['mon'] + $num;
			if($time['mon'] > 12){
				$new_mon = 1;
				$new_year = $time['year'] + 1;
			}else{
				$new_year = $time['year'];
			}
			$str_next_date = $new_year.'-'.$new_mon.'-01';
			$str_last_day = date("Y-m-d",strtotime("$str_next_date +1 month -1 day"));
			$last_day = strtotime($str_last_day);
			$next_time = getdate($last_day);
			if($time['mday'] > $next_time['mday']){
				$str = $new_year.'-'.$new_mon.'-'.$next_time['mday'];
			}else{
				$str = $new_year.'-'.$new_mon.'-'.$time['mday'];
			}
			$int_time = strtotime($str);
			return $int_time;
	}
		public function test(){
			$user = M('user');
			$data = $user->field('id,phone')->select();
			//获取手机号归属地
			$sql = "UPDATE dd_user SET phone_local = CASE id ";
			foreach($data as $val){
				$phone_local = $this->checkMobilePlace($val['phone']);
				$sql .= " WHEN {$val['id']} THEN '{$phone_local}' ";
				$id[] = $val['id'];
			}
			$id_str = '('.implode(',',$id).')';
			$sql .= ' END ';
			$sql .= " WHERE id IN ".$id_str;
			echo $sql;
		}
		//获取手机号归属地
	private function checkMobilePlace($mobilephone){
		$url = "http://27.50.130.146/api3/getprovince.php?mobile={$mobilephone}";
		$content = file_get_contents($url);
		$arr_content = json_decode($content,true);
		if($arr_content['oper'] == '1'){
			$str = $arr_content['area'].'移动';
		}else if($arr_content['oper'] == '2'){
			$str = $arr_content['area'].'联通';
		}else{
			$str = $arr_content['area'].'电信';
		}
		return $str;
    }
}


?>