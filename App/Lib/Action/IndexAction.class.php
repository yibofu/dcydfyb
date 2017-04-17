<?php
	class IndexAction extends Action {
		public function index(){
			$article = M("article");
			$resul = $article->where("lanmu=1 && status=2")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->select();
			$this->assign("resul",$resul);
			$resu = $article->where("lanmu=2 && status=2")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->select();
			$this->assign("resu",$resu);
			$res = $article->where("lanmu=3 && status=2")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->select();
			$this->assign("res",$res);
			$re = $article->where("lanmu=4 && status=2")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->select();
			$this->assign("re",$re);

			//选课中心的信息显示
			$view = M("view");
			$arr = $view->field('id,kname,name,url,title,money,introduce,chapternum,kctitle,img')
				->group('kctitle')->where("kname = '系列专题'")
				->limit(3)
				->select();
			$this->assign("arr",$arr);
			$arra = $view->field('id,kname,name,url,title,money,introduce,chapternum,kctitle,img')
				->group('kctitle')->where("kname = '专家精选'")
				->limit(3)
				->select();
			$this->assign("arra",$arra);
			$oct = M("open_course_type");
			$rea = $oct->field('id,tname,cost,days,img')
				->select();
			$this->assign("rea",$rea);
			$teacher = M("teacher");
			$aa = $teacher->field('id,name,timg,explain')->select();
			$aa = array_chunk($aa, 4,true);
			foreach($aa as $k => $value){
				foreach($value as $key => $v){
					$explain = htmlspecialchars_decode($v['explain']);
					$aa[$k][$key]['explain'] = $explain;
				}
			}
			$this->assign("aa",$aa);

			//查询提问类别
			$qtype = M('questionType');
			$qtypeList = $qtype->field('id, name')->select(); 
			$this->assign("qtypeList",$qtypeList);
			$this->display();
		}

		public function loginout(){
			if(isset($_SESSION['admins']['id'])){
				unset($_SESSION['admins']);
				session_destroy();
				setcookie('PHPSESSID','',-3600,' /');
				$this->redirect('/Index/index');
			}
		}

		public function essay(){
			$id = $_GET["id"];
			$article = M("article");
			$result = $article->where("id=$id")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->find();
			$result['content'] = htmlspecialchars_decode($result['content']);
			$result['time'] = date('Y-m-d H:i:s',$result['time']);
			$this->assign("result",$result);
			$this->display();
		}

		//文章列表页的消息展示
		public function message(){
			$lanmu = isset($_GET["lanmu"]) && !empty($_GET["lanmu"]) ? $_GET["lanmu"] : 1;
			$article = M("article");
			$count      = $article->where("lanmu=$lanmu and status = 2")->count();
			import('ORG.Util.Page');
			$Page       = new Page($count,8);
			$show       = $Page->show();
			$result = $article->where("lanmu=$lanmu and status = 2")
				->field('id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status')
				->limit($Page->firstRow.','.$Page->listRows)
				->select();
			foreach($result as &$val){
				$val['time'] = date('Y-m-d H:i:s',$val['time']);
			}
			foreach($result as &$list){
				if($list["lanmu"] == "1"){
					$list["lanmu"] = "案例";
				}else if($list["lanmu"] == "2"){
					$list["lanmu"] = "法规";
				}else if($list["lanmu"] == "3"){
					$list["lanmu"] = "干货";
				}else if($list["lanmu"] == "4"){
					$list["lanmu"] = "动态";
				}
			}

			$this->assign('page',$show);
			$this->assign("result",$result);
			// 赋值分页输出
			$this->display();
		}

		public function mes(){
			$lanmu = isset($_GET["lanmu"]) && !empty($_GET["lanmu"]) ? $_GET["lanmu"] : 1;
			$article = M("article");
			$resu = $article->where("lanmu=$lanmu")
				->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")
				->select();
			$this->assign("resu",$resu);
			$this->display("index");
		}


		//课程页的信息
		public function kce(){
			$view = M("view");
			$name = $_GET["name"];
			$result = $view->field('id,kname,zname,name,title,img,kctitle')->where(" chapternum = 1 ")
				->select();
			$this->assign("result",$result);
			$viewkind = M("viewkinds");
			$rea = $viewkind->field('id,kind')->select();
			$this->assign('rea',$rea);
			$viewclass = M("viewclass");
			$resultt = $viewclass->distinct(true)->field('id,fname,zname')->where("fname = '系列专题'")
				->group("zname")->select();
			$this->assign("resultt",$resultt);
			$teacher = M("teacher");
			$resultt1 = $teacher->distinct(true)->field('id,name')->select();
			$this->assign("resultt1",$resultt1);
			$arr1 = $view->field('id,kname,name,zname,url,title,money,introduce,chapternum,kctitle,img')
				->where("kname = '{$name}' and chapternum = 1 ")
				->select();
//			var_dump($arr1);die;
//			echo $view->getLastsql();die;
			$this->assign("arr1",$arr1);
//			$arr11 = $view->field('id,kname,name,zname,url,title,money,introduce,chapternum,kctitle,img')
//				->where("kname = '{$name}' and chapternum = 1 ")
//				->select();
//			$this->assign("arr11",$arr11);
			$this->display();
		}

		//系列专题子项
		public function vielist(){
			$name = $_GET["name"];
			$view = M("view");
			$result = $view->field('id,kname,zname,name,title,img,kctitle')->where(" chapternum = 1 ")
				->select();
			$this->assign("result",$result);
			$viewkind = M("viewkinds");
			$rea = $viewkind->field('id,kind')->select();
			$this->assign('rea',$rea);
			$viewclass = M("viewclass");
			$resultt = $viewclass->distinct(true)->field('id,fname,zname')->where("fname = '系列专题'")
				->group("zname")->select();
			$this->assign("resultt",$resultt);
			$teacher = M("teacher");
			$resultt1 = $teacher->distinct(true)->field('id,name')->select();
			$this->assign("resultt1",$resultt1);
			$arrr = $view->field('id,kname,name,zname,url,title,money,introduce,chapternum,kctitle,img')
				->where("zname='{$name}' and chapternum = 1")
				->select();
			$this->assign("arrr",$arrr);
			$this->display();

		}


		//视频页的信息
		public function visual(){
			$id = $_GET["id"];
			$kname = $_GET["kname"];
			$name = $_GET["name"];
			$kctitle = $_GET["kctitle"];
			$title = $_GET["title"];

			$view = M("view");
			$result1 = $view->field('id,kname,name,url,title,money,introduce,chapternum,kctitle,img')
				->where(' name = "'.$name.' " and'.' kname = "'.$kname .'" and' .' id =  '.$id)
				->find();

			$data[] = $result1;
			$ress = $view->field('id,kname,name,url,title,money,introduce,chapternum,kctitle,img')
				->where("name='".$name."' and kname='".$kname."' and kctitle='".$kctitle."'")
				->select();
			$arr = $view->field('name')->where("id = ".$id)->find();
			$namee = $arr["name"];

			$teacher = M("teacher");
			$arra = $teacher->field("name,timg,explain")->where("name='".$namee."'")->find();
			$arra['explain'] = htmlspecialchars_decode($arra['explain']);

			//获取评论
			$commentModel = M('vevaluate');

			//分页
			import ('ORG.Util.Page');
			$total = $commentModel->where('dcyd_vevaluate.viewid='.$id)->count();
			$page = new Page($total, 4);
			$page->setConfig('theme', '%upPage%%linkPage%%downPage%');

			//评论列表
			$commentList = $commentModel->field('dcyd_vevaluate.content content, dcyd_vevaluate.addtime addtime, dcyd_user.nickname name, dcyd_user.img img')
				->join('inner join dcyd_user on dcyd_vevaluate.uid=dcyd_user.id')
				->where('dcyd_vevaluate.viewid='.$id)
				->order('addtime desc')
				->limit($page->firstRow . ',' . $page->listRows)
				->select();

			foreach($commentList as $cok => $cov) {
				$commentList[$cok]['addtime'] = date('Y-m-d H:i', $cov['addtime']);
			}

			$this->assign("commentList",$commentList);
			$this->assign("page",$page->show());
			$this->assign("data",$data);
			$this->assign("ress",$ress);
			$this->assign("arra",$arra);
			$this->display();
		}


		public function kcjs(){
			$id = $_GET['id'];
			$video = M("video");
			$resul = $video->field("chapternum,title,introduce")->where("id = ".$id)->select();
			$this->assign("resul",$resul);
			$this->display();
		}

		public function zjjj(){
			$id = $_SESSION['zjjj']['id'];
			$teacher = M("teacher");
			$res = $teacher->field('vid,name,timg,explain')->where("vid = ".$id)->find();
			$this->assign("res",$res);
			$this->display();
		}

		public function xxdk(){
			$id = $_GET['id'];
			$oct = M("open_course_type");
			$rea = $oct->field('id,tname,cost,days,img')
				->where("id = ".$id)
				->find();

			$this->assign("rea",$rea);
			$this->display();
		}

		public function xxdks(){
			$id = $this->_post("id");
			$xxkc = M("xxkc");
			$ad = $xxkc->field('id,title,keywords,laiyuan,content,auth,describe,time,status,img')
				->where("id = ".$id)
				->find();
			if($ad != false){
				$result = array(
					'success'=>true,
					'msg'=>'成功'
				);
			}
			echo json_encode($result);
		}

//		个人中心
		public function user(){
			if(empty($_SESSION['admins']['id'])){
				header("Location:/index.php/Index/index.html");
			}else{
				$id = $_GET["id"];
				$user = M("user");
				$result = $user->field('id,Phone,nickname,sex,firmname,position,industry,address')
					->where("id = ".$id)
					->find();
				$this->assign("result",$result);
				$this->display();
			}

		}

	//老师详情页
	public function teacher(){
		$id = $_GET["id"];
		$teacher = M("teacher");
		$tea = $teacher->field('id,name,timg,explain')->where("id = ".$id)->find();
		$tea['explain'] = htmlspecialchars_decode($tea['explain']);
		$this->assign("tea",$tea);
		$this->display();
	}

	//首页列表提交信息
	public function yyzj(){

		$id = $this->_post("id");
		$teacher = M("teacher");
		$ra = $teacher->field('name')->where("id = ".$id)->find();
		$tea = $ra["name"];
		$sybdtj = M("sybdtj");
		$data = $sybdtj->create();

		$data["name"] = $this->_post("name");
		$data["phone"] = $this->_post("phone");
		$data["position"] = $this->_post("position");
		$data["teacher"] = $tea;
		$result = $sybdtj -> add($data);
		if($result != null){
			$result = array(
				'success'=>true,
				'msg'=>'新增成功',
			);
		}else{
			$result = array(
				'success'=>false,
				'msg'=>$sybdtj->getError()
			);
		}
		echo json_encode($result);
	}

	//验证手机号是否已经注册
	public function check_phone(){
		$phone = $this->_get("phones");
		$user = M("user");
		$id = $user->where("phone=".$phone)->getField("id");
		if(empty($id)){
			$result = array(
				'error'=>true,
				'msg'=>"号码还没有被使用"
			);
		}else{
			$result = array(
				'error'=>false,
				'msg'=>'号码已经被注册过'
			);
		}
		echo json_encode($result);
	}

	//注册信息
	public function check(){
		$phone = $this->_post("Phone");
		$yanzheng = $this->_post("yanzheng");
		$code = $_SESSION['forget'.$phone];
		if($yanzheng != $code){
			$result = array(
				'error' => 2,
				'msg' => '验证码填写有误'
			);
		}else{
			$user = M("user");
			$data = $user->create();
			$data["Phone"] = $this->_post("Phone");
			$data["password"] = $this->_post("password");
			$data["password"] = 'dc'.$data["password"].'yd';
			$data["password"] = md5($data["password"]);
			$data["password"] = substr($data["password"],5,30);
			$data["ctime"] = time();
			$data["ltime"] = time();
			$data["IPadd"] = get_client_ip();
			$result = $user->add($data);
			if($result){
				$result = array(
					'error' => true,
					'msg' => '注册成功,您可以去个人中心完善个人信息'
				);
				$rows = $user->field("id")->where("Phone=".$data["Phone"])->find();
				$id = $rows["id"];
				$_SESSION['rigister']['id'] = $rows['id'];
			}else{
				$result = array(
					'error' => false,
					'msg' => '注册失败'
				);
			}
		}
		echo json_encode($result);
	}

	public function member(){
		$this->display();
	}

	public function login(){
		$user = M("user");
		$Phone = $_POST["Phone"];
		$pwd = $_POST['password'];
		$pwd = 'dc' . $pwd . 'yd';
		$pwd = md5($pwd);
		$pwd = substr($pwd, 5, 30);
		$map['Phone'] = array('eq', $Phone);
		$map['pwd'] = array('eq', $pwd);
		$row = $user->field("id,Phone,password")->where($map)->find();
		$_SESSION['admins']['id'] = $row['id'];
		$_SESSION['admins']['Phone'] = $row['Phone'];
		$_SESSION['admins']['password'] = $row['pwd'];
		if ($row) {
			$data['ltimes'] = time();
			$data['IPadd'] = get_client_ip();
			$data['id'] = $row['id'];
			$save = $user->save($data);
			if ($save) {
				$result = array(
					'error' => true,
					'msg' => '登录成功',
				);
			} else {
				$result = array(
					'error' => false,
					'msg' => '登录失败，请重新登陆'
				);
			}
		}
		echo json_encode($result);
	}

	public function useradd(){
		$id = $_SESSION['admins']['id'];
		$user = M("user");
		$data = $user->create();
		$data["nickname"] = $this->_post("nickname");
		$data["sex"] = $this->_post("sex");
		$data["firmname"] = $this->_post("firmname");
		$data["position"] = $this->_post("position");
		$data["industry"] = $this->_post("industry");
		$data["address"] = $this->_post("address");

		$result = $user->where("id = ".$id)->save($data);
		if($result != null){
			$result = array(
				'success'=>true,
				'msg'=>'成功'
			);
		}else{
			$result = array(
				'success'=>false,
				'msg'=>$user->getError()
			);
		}
		echo json_encode($result);
	}




	//视频页学院评论
	public function viewComment(){
		$data['uid'] = $_SESSION['admins']['id'];

		if(!$data['uid']) {
			$this->ajaxReturn(0);
		}

		$data['viewid'] = intval($this->_post('vid'));
		$data['content'] = trim($this->_post('content'));
		$data['addtime'] = time();
		$data['starts']  = 5;

		$rules = array(
			array('viewid', 'number', '此视频不存在', 1),		
			array('content', 'require', '请输入评论内容', 1),		
		);

		$model = M('vevaluate');

		$res = $model->validate($rules)->create($data);

		if($res) {
			if($model->add($data)) {
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn($model->getError());
			}
		}
	}


	//检查用户是否登陆
	public function isLogin() {
		if(!$_SESSION['admins']['id']) {
			$this->ajaxReturn(0);
		} else {
			$this->ajaxReturn(1);
		}
	}
}
?>
