<?php
class OrdersAction extends Action {
	public function orderConfirm() {
		$uid = $_SESSION['admins']['id'];
		$oid = intval($this->_get('cartid'));

		//判断用户是否合法
		if(!$uid) {
			$this->redirect('Login/loginPage');
		}
		$userModel = M('user');
		$userFind = $userModel->field('id')->where('id=' . $uid)->find();

		if(!$userFind['id']) {
			$this->redirect('Login/loginPage');
		}

		$courseid = intval($this->_get('courid'));

		//判断课程是否合法
		$courseModel = M('view');
		$courseFind = $courseModel->field('id, title, kctitle, name, money')->where('id='.$courseid)->find();
		if(!$courseFind['title']) {
		//	$this->redirect('Login/loginPage');
		}

		$this->assign('course', $courseFind);

		//加到客户订单
		/*
		if(!$this->_get('cid')) {
			$cartModel = M('cart');
			$time = time();
			$addData = array(
				'uid' => $uid,
				'courseid' => $courseid,
				'addtime' => $time
			);
			$cid = $cartModel->add($addData);
		} else {
			$cid = intval($this->_get('cid'));
		}
		$this->assign('cid', $cid);
		*/

		//发票信息
		$ptmodel = M('ptbill');
		$ptbill = $ptmodel->field('id, head')->where('uid=' .$uid. ' and isdefault="1"')->find();
		$this->assign('ptbill', $ptbill);

		$zzmodel = M('zzbill');
		$zzbill = $zzmodel->field('id, company, personcode, regaddress, regphone, bank, bankaccount')->where('uid=' .$uid)->find();
		$this->assign('zzbill', $zzbill);

		//查询默认地址
		$addressModel = M('address');
		$addressFind = $addressModel->field('id, uid, reciver, area, address, phonenumber, isdefault')->where('uid=' .$uid. ' and isdefault="1"')->find();
		
		//处理电话号码
		$phone = $addressFind['phonenumber'];
		$phone = strrev($phone);
		$phone = chunk_split($phone, 4, ' ');
		$phone = explode(' ', $phone);
		$phone[1] = '****';
		$addressFind['phonenumber'] = strrev(implode('', $phone));
		$this->assign('address', $addressFind);

		$this->display();
	}

	//微信支付
	public function _initialize()
	{
		//引入WxPayPubHelper
		Vendor('WxPayPubHelper.WxPayPubHelper');
	}

	public function codePage(){
		$uid = $_SESSION['admins']['id'];

		//判断用户是否合法
		if(!$uid) {
			$this->redirect('Login/loginPage');
		}
		$userModel = M('user');
		$userFind = $userModel->field('id')->where('id=' . $uid)->find();

		if(!$userFind['id']) {
			$this->redirect('Login/loginPage');
		}

		$post = $this->_post();
		$get = $this->_get();

		//查看用户是否已经下过订单
		if($get['oid']) {
			$oid = $get['oid'];
			$orderModel = M('vieworder');
			$orderinfo = $orderModel->field('id, viewid')->where('tradno="' .$oid. '" and uid=' . $uid)->find();

			if(!$orderinfo['viewid']) {
				$this->redirect('Login/loginPage');
			} else {
				$courseid = $orderinfo['viewid'];
				$data['tradno'] = $oid;
			}

		} else if($post['courid']) {
			$courseid = intval($post['courid']);
		} else {
			$this->redirect('Login/loginPage');
		}

		//查询课程信息
		$courseModel = M('view');
		$courseFind = $courseModel->field('id,title,money')->where('id=' . $courseid)->find();
		if(!$courseFind['id']) {
			$this->redirect('Login/loginPage');
		}
		$this->assign('courseinfo', $courseFind);

		//这个if用来将直接购买课程的订单生成新订单
		if($this->_post('courid')) {

			//查询收货地址信息
			$addrid = intval($post['addrid']);
			$addrModel = M('address');
			$addrFind = $addrModel->field('id')->where('id=' .$addrid. ' and uid=' . $uid)->find();
			if(!$addrFind['id']) {
				$this->redirect('Login/loginPage');
			}

			//处理发票
			$bill = (string)$post['billchk'];
			if($bill != '0') {
				$billtype = substr($bill, 0, 2);
				$billid = intval(substr($bill, 3));
			} else {
				$billid = 0;
				$bilcontent = 0;
			}

			if($billtype && $billid) {
				switch($billtype) {
					case 'pt':
						$bilcontent = $post['bilcontet'];
						$ptModel = M('ptbill');
						$billinfo = $ptModel->field('id')->where('id=' .$billid. ' and uid=' . $uid)->find();
						break;

					case 'zz':
						$bilcontent = 0;
						$zzModel = M('zzbill');
						$billinfo = $zzModel->field('id')->where('id=' .$billid. ' and uid=' . $uid)->find();
						break;
				}

				if(!$billinfo['id']) {
					$this->redirect('Login/loginPage');
				}
			}

			$data['uid'] = $uid;
			$data['viewid'] = $courseid;
			$data['bill'] = $bill;
			$data['billcontent'] = (string)$bilcontent;
			$data['addressid'] = $addrid;
			$data['paytype'] = (string)$post['ptype'];
			$data['addtime'] = time();
			$data['status'] = '0';
			$data['tradno'] = 'vp'.C('WxPay.pub.config.APPID'). $data['addtime']; 
			
			$orderModel = M('vieworder');
			$res = $orderModel->create($data);

			if($res) {
				$lastid = $orderModel->add($data);
			}
		}

		//使用统一支付接口
		$unifiedOrder = new \UnifiedOrder_pub();

		//设置统一支付接口参数
		//设置必填参数
		$unifiedOrder->setParameter("body","订单支付");//商品描述
		//自定义订单号，此处仅作举例
		$unifiedOrder->setParameter("out_trade_no",$data['tradno']);//商户订单号
		//$unifiedOrder->setParameter("total_fee",$courseFind['money']*100);//总金额
		$unifiedOrder->setParameter("total_fee",1);//总金额
		$unifiedOrder->setParameter("notify_url", 'http://www.bianquecxy.com/index.php/Orders/notify');//通知地址
		$unifiedOrder->setParameter("trade_type","NATIVE");//交易类型

		//非必填参数，商户可根据实际情况选填
		//$unifiedOrder->setParameter("sub_mch_id","XXXX");//子商户号
		//$unifiedOrder->setParameter("device_info","XXXX");//设备号
		//$unifiedOrder->setParameter("attach","XXXX");//附加数据
		//$unifiedOrder->setParameter("time_start","XXXX");//交易起始时间
		//$unifiedOrder->setParameter("time_expire","XXXX");//交易结束时间
//         $unifiedOrder->setParameter("goods_tag","");//商品标记
//         $unifiedOrder->setParameter("openid","19405");//用户标识
		//$unifiedOrder->setParameter("product_id","XXXX");//商品ID
		//获取统一支付接口结果
		$unifiedOrderResult = $unifiedOrder->getResult();

		//商户根据实际情况设置相应的处理流程
		if ($unifiedOrderResult["return_code"] == "FAIL")
		{
			//商户自行增加处理流程
			echo "通信出错：".$unifiedOrderResult['return_msg']."<br>";
		}
		elseif($unifiedOrderResult["result_code"] == "FAIL")
		{
			//商户自行增加处理流程
			echo "错误代码：".$unifiedOrderResult['err_code']."<br>";
			echo "错误代码描述：".$unifiedOrderResult['err_code_des']."<br>";
		}
		elseif($unifiedOrderResult["code_url"] != NULL)
		{
			//从统一支付接口获取到code_url
			$code_url = $unifiedOrderResult["code_url"];
		}

		$this->assign('out_trade_no',$data['tradno']);
		$this->assign('paydate', date('Y-m-d', $data['addtime']));
		$this->assign('code_url',$code_url);
		//$this->assign('cid',intval($this->_post('cid')));
		$this->assign('unifiedOrderResult',$unifiedOrderResult);
		$this->assign("res",$res);
		$this->display();
	}

	public function notify()
	{
		//使用通用通知接口
		$notify = new \Notify_pub();
		//存储微信的回调
		$xml = $GLOBALS['HTTP_RAW_POST_DATA'];
		$notify->saveData($xml);
//          var_dump($xml);
		//验证签名，并回应微信。
		//对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
		//微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
		//尽可能提高通知的成功率，但微信不保证通知最终能成功。
		if($notify->checkSign() == FALSE){
			$notify->setReturnParameter("return_code","FAIL");//返回状态码
			$notify->setReturnParameter("return_msg","签名失败");//返回信息
		}else{
			$notify->setReturnParameter("return_code","SUCCESS");//设置返回码
		}
		$returnXml = $notify->returnXml();
		echo $returnXml;

		//==商户根据实际情况设置相应的处理流程，此处仅作举例=======

		//以log文件形式记录回调信息
		//         $log_ = new Log_();
		// $log_name= __ROOT__."/Public/notify_url.log";//log文件路径

		// $this->log_result($log_name,"【接收到的notify通知】:\n".$xml."\n");

		if($notify->checkSign() == TRUE)
		{
			if ($notify->data["return_code"] == "FAIL") {
				//此处应该更新一下订单状态，商户自行增删操作
				// log_result($log_name,"【通信出错】:\n".$xml."\n");
				$this->error("1");
			}
			elseif($notify->data["result_code"] == "FAIL"){
				//此处应该更新一下订单状态，商户自行增删操作
				// log_result($log_name,"【业务出错】:\n".$xml."\n");
				$this->error("失败2");
			}
			else{
				//此处应该更新一下订单状态，商户自行增删操作
				// log_result($log_name,"【支付成功】:\n".$xml."\n");
				//;
				$user= M("user");
				$data['is_vip'] =1;
				$where['id']=$_SESSION['admins']['id'];
				$user->where($where)->save($data);
				 // $this->success("支付成功！");

			}
		}
	}

	//查询订单
	public function orderQuery()
	{
//		$this->ajaxReturn('success');die;
		if(!$this->isAjax()) {
			$this->redirect('Login/loginPage');
		}

		//用户是否合法
		$uid = $_SESSION['admins']['id'];
		if(!$uid) {
			$this->redirect('Login/loginPage');
		}

		$userModel = M('user');
		$userFind = $userModel->field('id')->where('id=' . $uid)->find();

		if(!$userFind['id']) {
			$this->redirect('Login/loginPage');
		}

		//判断订单是否合法
		/*
		$cid = intval($this->_post('cid'));
		$cartModel = M('cart');
		$cartFind = $cartModel->field('id, courseid')->where('id=' .$cid. ' and uid=' . $uid)->find();
		*/

		$outTradeNo = $this->_post("out_trade_no");
		$orderModel = M('vieworder');
		$orderFind = $orderModel->field('id,viewid')->where('tradno="' .$outTradeNo. '" and uid=' . $uid)->find();
		
		//if(!$cid || $outTradeNo || !$cartFind['id'] || !$orderFind['id'] || ($cartFind['courseid'] != $orderFind['viewid'])) {
		if(!$outTradeNo || !$orderFind['id']) {
			$this->redirect('Login/loginPage');
			return false;
		}

		//使用订单查询接口
		$orderQuery = new \OrderQuery_pub();
		$orderQuery->setParameter("out_trade_no", $outTradeNo);//商户订单号

		//获取订单查询结果
		$orderQueryResult = $orderQuery->getResult();

		//商户根据实际情况设置相应的处理流程,此处仅作举例
		if ($orderQueryResult["return_code"] == "FAIL") {
			$this->ajaxReturn('支付失败！');
		}
		elseif($orderQueryResult["result_code"] == "FAIL"){
			$this->ajaxReturn('支付失败！');
		}
		else{
			//判断交易状态
			switch ($orderQueryResult["trade_state"])
			{
				case SUCCESS:
					//更新订单状态
					$orderarr = array('status' => '1');
					$orderModel->where('tradeno=' .$outTradeNo. ' and uid=' . $uid)->save($orderarr);

					$this->ajaxReturn("success");
					break;

				case REFUND:
				case NOTPAY:
				case CLOSED:
					$this->ajaxReturn("超时关闭订单：".$i);
					break;

				case PAYERROR:
					$this->ajaxReturn("支付失败".$orderQueryResult["trade_state"]);
					break;

				default:
					$this->ajaxReturn("支付失败".$orderQueryResult["trade_state"]);
					break;
			}
		}
	}
}
