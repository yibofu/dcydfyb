<?php
	class MyCenterAction extends Action {
		public function __construct() {
			parent::__construct();	//继承父类构造方法
			if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
			}
		}

		public function index() {
			$uid = $_SESSION['admins']['id'];
			//获取个人信息
			$userInfo = self::userInfo($uid);
			switch($userInfo['is_vip']) {
				case '1':
					$userInfo['vipType'] = '金鹊会员';
					break;

				case '2':
					$userInfo['vipType'] = '普通会员';
					break;

			}
			
			//获取订单
			$orderInfo = self::orders($uid);
			foreach($orderInfo as $key => $order) {
				switch($order['status']) {
					case '1':
						$orderInfo[$key]['chstatus'] = '未付款';
						break;

					case '3':
					case '2':
						$orderInfo[$key]['chstatus'] = '已付款';
						break;
				}

				$orderInfo[$key]['day'] = date('Y-m-d', $order['addtime']);
				$orderInfo[$key]['hour'] = date('H:i:s', $order['addtime']);
			}


			//获取收藏
			$collectionInfo = self::collects($uid);
			
			//获取浏览
			$browserInfo = self::browser($uid);

			//获取未付款个数
			$noPaynumber = self::noPay($uid);

			//获取待解答个数
			$noAnswer = self::noAnswerQuestion($uid);

			//获取报名个数
			$signUp = self::signUp($uid);

			//获取约见个数
			$yjtNumber = self::yjt($uid);

			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

			$this->assign('userInfo', $userInfo);
			$this->assign('orderInfo', $orderInfo);
			$this->assign('collectionInfo', $collectionInfo);
			$this->assign('browserInfo', $browserInfo);
			$this->assign('noPaynumber', $noPaynumber);
			$this->assign('noAnswer', $noAnswer);
			$this->assign('signUp', $signUp);
			$this->assign('yjtNumber', $yjtNumber);
			$this->assign('empty', $empty);

			$this->display();
		}

		//个人信息
		public function personInfo() {
			$uid = $_SESSION['admins']['id'];
			
			$data = array();
			$model = M('user');
			$where = 'id=' . $uid;
			$person = $model->where($where)->find();

			//查询用户爱好
			$personHobbyModel = M('hobu');
			$personhobby = $personHobbyModel->where('uid=' . $uid)->select();
			$personhid = array();
			foreach($personhobby as $v) {
				array_push($personhid, $v['hobid']);
			}

			//查询爱好列表
			$hobbyModel = M('hobby');
			$hobbylist = $hobbyModel->select();
			
			$hobbydata = array();

			//看爱好是否被选中
			foreach($hobbylist as $key => $hobby) {
				if(in_array($hobby['id'], $personhid)) {
					$hobbydata[$key]['check'] = 1;
				} else {
					$hobbydata[$key]['check'] = 0;
				}
				$hobbydata[$key]['name'] = $hobby['name'];
				$hobbydata[$key]['v'] = 'hobby_'.$hobby['id'];
				$hobbydata[$key]['pysx'] = $hobby['pysx'];
			}

			$person['birth'] = explode(',', $person['birth']);

			$this->assign('hobbylist', $hobbydata);
			$this->assign('person', $person);
			$this->display();
		}

		//更新用户信息
		public function updateInfo() {
			$uid = $_SESSION['admins']['id'];
			
			$where = 'id=' . $uid;
			$model = M('user');
			$data = array();

			//查询之前当前头像
			$picture = $model->field('img')->where('id=' . $uid)->find();

			//上传头像
			if($_FILES['file']['size'] != 0) {
				import('ORG.Net.UploadFile');
				
				$upload = new UploadFile();
				$upload->maxSize = 1024*1024*2;
				$upload->allowExts = array('jpg', 'jpeg', 'png', 'gif');
				$savepath = './Public/upload/image/';
				$upload ->saveRule = uniqid;
				$upload ->uploadReplace = true;
				$upload ->autoSub = true;
				$upload ->subType = date;
				$upload ->dataFormat = "Ym";

				if(!is_dir($savepath)) {
					$r = mkdir($savepath, 0777, true);
				}

				$upload->savePath = $savepath;
				if($upload->upload()) {
					$upinfo = $upload->getUploadFileInfo();
					$path = $upinfo[0]['savepath'].$upinfo[0]['savename'];
					$data['img'] = substr($path, 1);
					unlink($picture['img']);
				} else {
					$data['img'] = $picture['img'];
				}
			}

			$rules = array(
				array('nickname', 'require', '昵称必须'),
				array('sex', array(1,2), '性别选择不正确', 1, 'in'),
				array('birth', 'require', '请选择生日', 2),
				array('firmname', 'require', '请填写公司', 2),
				array('position', 'require', '请填写职位', 2),
				array('industry', 'require', '请填写行业', 2),
				array('mail', 'email', '邮箱有误', 1),
				array('truename', 'require', '请填写姓名', 1),

			);

			$data['nickname'] = $this->_post('sname');
			$data['sex'] = $this->_post('sex');
			$data['birth'] = $this->_post('year') .','. $this->_post('month') .','. $this->_post('day');
			$data['firmname'] = $this->_post('company');
			$data['position'] = $this->_post('position');
			$data['industry'] = $this->_post('trade');
			$data['mail'] = $this->_post('mail');
			$data['truename'] = $this->_post('relname');

			//处理爱好
			if(isset($_POST['hobs'])) {
				$hobbys = $this->_post('hobs');
				$hmodel = M('hobu');
				foreach($hobbys as $v) {
					$idata['uid'] = $uid;
					$idata['hobid'] = array_pop(explode('_', $v));
					$hmodel->where('uid=' . $uid);
					$hmodel->add($idata);
				}
			}
			$res = $model->validate($rules)->create($data);
			$model->where('id='.$uid)->save($data); 

			$this->redirect('MyCenter/index');
		}

		//发票
		public function bill() {
			$uid = $_SESSION['admins']['id'];

			//判断用户是否合法
			if(!$uid) {
				$this->redirect('Login/loginPage');
			}
			//判断用户合不合法
			$userModel = M('user');
			$userFind = $userModel->field('id')->where('id=' . $uid)->find();

			if(!$userFind['id']) {
				$this->redirect('Login/loginPage');
			}

			//普通发票
			$ptModel = M('ptbill');
			$headList = $ptModel->field('id, head, isdefault')->where('uid=' . $uid)->select();

			//增值税发票
			$zzModel = M('zzbill');
			$zzList = $zzModel->field('id, method, company, personcode, regaddress, regphone, bank, bankaccount')
							->where('uid=' .$uid)
							->find();

			$this->assign('ptbill', $headList);
			$this->assign('zzbill', $zzList);
			$this->display();
		}

		//普通发票
		public function ptbill() {
			$post = $this->_post();
			$post = $post['data'];
			$data['uid'] = $_SESSION['admins']['id'];
			$data['head'] = $post['ptbill'];
			$data['addtime'] = time();

			if(!$data['uid']) {
				$this->ajaxReturn(0);
			}

			//判断用户合不合法
			$userModel = M('user');
			$userFind = $userModel->field('id')->where('id=' . $data['uid'])->find();

			if(!$userFind['id']) {
				$this->ajaxReturn(0);
			}

			//判断是否已经有５个了
			$model = M('ptbill');
			$total = $model->where('uid=' . $data['uid'])->count();

			if($total >= 5) {
				$this->ajaxReturn('你最多只能添加５个发票抬头');
			} else if($total == 0) {
				$data['isdefault'] = '1';
			}


			$rules = array(
				array('head', 'require', '发票抬头不能为空', 1),		
			);


			$res = $model->validate($rules)->create($data);
			if(!$res) {
				$this->ajaxReturn($model->getError());
			}

			if($lastId = $model->add($data)) {
				$arr = array('a'=>$lastId);
				$this->ajaxReturn($arr);
			}

		}

		//删除普通发票抬头
		public function delptbill() {
			$uid = $_SESSION['admins']['id'];
			$pid = intval($this->_post('pid'));

			//判断用户是否合法
			if(!$uid) {
				$this->redirect('Login/loginPage');
			}
			//判断用户合不合法
			$userModel = M('user');
			$userFind = $userModel->field('id')->where('id=' . $uid)->find();

			if(!$userFind['id']) {
				$this->redirect('Login/loginPage');
			}

			//删除
			$model = M('ptbill');
			
			$res = $model->where('id=' .$pid. ' and uid=' . $uid)->delete();

			if($res) {
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn(0);
			}
		}

		//设为默认发票抬头
		public function setdefaultbill() {
			$uid = $_SESSION['admins']['id'];
			$pid = intval($this->_post('pid'));

			//判断用户是否合法
			if(!$uid) {
				$this->redirect('Login/loginPage');
			}
			//判断用户合不合法
			$userModel = M('user');
			$userFind = $userModel->field('id')->where('id=' . $uid)->find();

			if(!$userFind['id']) {
				$this->redirect('Login/loginPage');
			}

			//删除
			$model = M('ptbill');

			$data = array('isdefault'=>'1');
			$cdata = array('isdefault'=>'0');

			$billfind = $model->field('id')->where('id=' .$pid. ' and uid=' . $uid)->find();
			if(!$billfind['id']) {
				$this->redirect('Login/loginPage');
			}
			
			$res = $model->where('uid=' . $uid)->save($cdata);
			$res = $model->where('id=' .$pid. ' and uid=' . $uid)->save($data);

			if($res) {
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn(0);
			}
		}


		//增值税发票
		public function zzbill() {
			$post = $this->_post();
			$post = $post['data'];
			$data['uid'] = $_SESSION['admins']['id'];
			$pid = $post['billid'];

			//判断用户是否合法
			if(!$data['uid']) {
				$this->redirect('Login/loginPage');
			}
			//判断用户合不合法
			$userModel = M('user');
			$userFind = $userModel->field('id')->where('id=' . $data['uid'])->find();

			if(!$userFind['id']) {
				$this->redirect('Login/loginPage');
			}

			//更新
			$data['addtime'] = time();
			$data['company'] = $post['company'];
			$data['personcode'] = $post['pcode'];
			$data['regaddress'] = $post['address'];
			$data['regphone'] = $post['phone'];
			$data['bank'] = $post['openbank'];
			$data['bankaccount'] = $post['openaccount'];

			$rules = array(
				array('company', 'require', '请填写公司', 1),		
				array('personcode', 'require', '请填写纳税人识别码', 1),		
				array('regaddress', 'require', '请填写注册地址', 1),		
				array('regphone', '/\d{11}/', '请填写正确手机号码', 1),		
				array('bank', 'require', '请填写银行', 1),		
				array('bankaccount', 'require', '请填写正确银行账户', 1),		
			);

			$model = M('zzbill');
			$res = $model->validate($rules)->create($data);

			if(!$res) {
				$this->ajaxReturn($model->getError());
			}

			//查看用户是否已添加，有就修改，没有就添加
			$find = $model->where('uid=' . $data['uid'])->find();
			if($find['id']) {
				$res = $model->where('id=' . $find['id'])->save($data);
			} else {
				$res = $model->add($data);
			}

			if($res) {
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn('er');
			} 
		}

		//修改密码
		public function accountSecurity() {
			$this->display();
		}

		public function changePassword() {
			$post = $this->_post();
			$post = $post['data'];
			$uid = $_SESSION['admins']['id'];
			$msg = '';

			//验证码核查
			 if($post['vcode'] != $_SESSION['chvcode']) {
				$this->ajaxReturn('验证码不正确');
			 }

			//验证原密码是否正确
			$oldpass = 'dc'.$post["oldpasswd"].'yd';
			$oldpass = md5($oldpass);
			$oldpass = substr($oldpass,5,30);

			$model = M('user');
			$mdpass = $model->field('password')->where('id=' . $uid)->find();
			$mdpass = $mdpass['password'];

			if($oldpass != $mdpass) {
				$msg = '原密码不正确';
				$this->ajaxReturn($msg);
			}

			//符合条件修改密码
			$post['newpasswd'] = trim($post["newpasswd"]);
			if(empty($post["newpasswd"])) {
				$this->ajaxReturn('密码不能为空');
			}

			$datas['password'] = 'dc'.$post["newpasswd"].'yd';
			$datas['password'] = md5($datas["password"]);
			$datas['password'] = substr($datas["password"],5,30);
	
			if($model->where('id=' . $uid)->save($datas)) {
				//修改成功，退出登陆，返回登陆页面
				unset($_SESSION['admins']);
				session_destroy();
				setcookie('PHPSESSID','',-3600,' /');

				$msg = 1;
			} else {
				$msg = '修改失败';
			} 

			$this->ajaxReturn($msg);
		}

		//获取个人信息
		private function userInfo($uid) {
			$userModel = M('user');
			$userInfo = $userModel->field('password,nickname,is_vip,img')
						->where('id=' . $uid)
						->find();

			return $userInfo;	
		}

		//获取三条订单
		private function orders($uid) {
			$orderModel = M('cart');
			$orderInfo = $orderModel->field('dcyd_view.img img, dcyd_view.title title, dcyd_view.money money, dcyd_cart.status status, dcyd_cart.addtime addtime')
						->join('inner join dcyd_view on dcyd_cart.courseid=dcyd_view.id')
						->where('dcyd_cart.uid=' .$uid)
						->order('addtime desc')
						->limit('0,3')
						->select();

			return $orderInfo;
		
		}

		//获取我的收藏四条
		private function collects($uid) {
			$collectModel = M('collection');
			$collectInfo = $collectModel->field('dcyd_view.img img, dcyd_view.title title')
							->join('inner join dcyd_view on dcyd_collection.courseid=dcyd_view.id')
							->where('uid=' . $uid)
							->order('addtime desc')
							->limit('0,4')
							->select();
			
			return $collectInfo;
		}

		//获取浏览过的课程
		private function browser($uid) {
			$browserModel = M('browse');
			$browserInfo = $browserModel->field('dcyd_view.img img, dcyd_view.title title, dcyd_view.name teacher, dcyd_view.money money, dcyd_browse.courseid courseid')
							->join('inner join dcyd_view on dcyd_browse.courseid=dcyd_view.id')
							->where('uid=' . $uid)
							->order('addtime desc')
							->limit('0,8')
							->select();
			
			//获取每门课程被收藏的次数
			$colModel = M('Collection');
			foreach($browserInfo as $key => $video) {
				$browserInfo[$key]['collNum'] = $colModel->where('courseid=' . $video['courseid'])->count();
			}

			return $browserInfo;
		}

		//获取待回答问题个数
		private function noAnswerQuestion($uid) {
			$questionModel = M('question');
			$questionNumber = $questionModel->where('userid=' .$uid. ' and status="0"')->count();

			return $questionNumber;
		}

		
		//获取待付款个数
		private function noPay($uid) {
			$cartModel = M('cart');
			$noPayNumber = $cartModel->where('uid=' .$uid. ' and status="1"')->count();

			return $noPayNumber;
		}

		//获取已报名个数
		private function signUp($uid) {
			$cartModel = M('mycourse');
			$signUpNumber = $cartModel->where('uid=' .$uid. ' and status="1"')->count();

			return $signUpNumber;
		}

		//获取约见个数
		private function yjt($uid) {
			$yjtModel = M('yjt');
			$yjtNumber = $yjtModel->where('uid=' .$uid. ' and status="1" and iscancel="1"')->count();

			return $yjtNumber;
		}

		//查看用户是否合法
		private function checkUser() {
			$uid = $_SESSION['admins']['id'];
			if(!$uid) {
				return false;
			}

			$userModel = M('user');
			$user = $userModel->where('id=' . $uid)->find();

			if(!$user) {
				return false;
			} else {
				return $uid;
			}

		}


	
	}
