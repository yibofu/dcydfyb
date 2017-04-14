<?php
class MyCartAction extends Action {
	public function __construct() {
		parent::__construct();	//继承父类构造方法
		
		if(!isset($_SESSION['admins']['id'])) {
			$this->redirect('Login/loginPage');
		}
	}
	public function index() {
		$uid = $_SESSION['admins']['id'];
		
		$model = M('cart');
		$where = 'dcyd_cart.uid=' .$uid. ' and dcyd_cart.type="1"';

		$total =  $model->where($where)->count();
		//截取要显示的
		import('ORG.Util.Page');
		$page = new Page($total, 6);
		$page->setConfig('theme', '%upPage%%linkPage%%downPage%');

		//查询视频类课程
		$data = $model->field('dcyd_cart.isevaluate isevaluate, dcyd_cart.id id,dcyd_view.name teacher,dcyd_view.url url,dcyd_view.title title, dcyd_view.money money, dcyd_cart.status status, dcyd_cart.addtime addtime')
					  ->join('dcyd_view on dcyd_cart.courseid=dcyd_view.id')
					 ->where($where)
					 ->limit($page->firstRow, $page->listRows)
					 ->order('dcyd_cart.addtime asc')
					 ->select();

		//处理课程信息
		foreach($data as $key => $value) {
			switch($value['status']) {
				case '1':
					$data[$key]['dstatus'] = '未付款';
					break;

				case '2':
					$data[$key]['dstatus'] = '已付款';
					break;
			}

			$data[$key]['addtime'] = date('Y-m-d H:i:s', $value['addtime']);
		}

		//数据为空显示的
		$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

		$this->assign('empty', $empty);
		$this->assign('list', $data);
		$this->assign('page', $page->show());
		$this->display();
	}

	//删除商品
	public function delGoods() {
		$uid = $_SESSION['admins']['id'];		
		
		$orderId = intval($this->_get('oid'));
		$where = 'uid=' .$uid. ' and id=' . $orderId;
		$where = 'id=' .$orderId. ' and uid=' . $uid;
		$model = M('cart');

		if($model->where($where)->delete()) {
			$this->redirect('MyCart/index');
		} else {
			$this->redirect('MyCart/index');
		}
	}

	//评价
	public function evaluate() {
		$uid = $_SESSION['admins']['id'];	
		$cid = intval($this->_get('cid'));

		$model = M('cart');
		$find = $model->field('courseid,addtime')
			->where('id='.$cid. ' and isevaluate="0" and uid=' . $uid)
			->find();

		if(!$find) {
			$this->redirect('MyCart/index');
		}
		
		$courseModel = M('view');
		$view = $courseModel->field('title')->where('id='.$find['courseid'])->find();

		$data['time'] = date('Y-m-d', $find['addtime']);
		$data['title'] = $view['title'];
		$data['sid'] = $cid;
		
		$this->assign('data',$data);
		$this->display();
	}

	//写评论
	public function makeEvaluate() {
		$uid = $_SESSION['admins']['id'];
		$post = $this->_post();
		$sid = intval($this->_post('sid'));

		$msg = '';
		$data['uid'] = $uid;
		$data['content'] = $post['con'];
		$data['starts'] = $post['star'];
		$data['addtime'] = time();

		$smodel = M('cart');
		$find = $smodel->field('id, courseid')->where('uid='.$uid.' and id='.$sid.' and isevaluate="0"')->find();

		if(!$find['id']) {
			$this->ajaxReturn('您没看过或者已评价过该课，不能再次评价了');
		}

		$data['viewid'] = $find['courseid'];
		
		$rules = array(
			array('viewid', 'number', '您没有享受过这项服务，不能评价', 1),		
			array('content', 'require', '评论内容不能为空', 1),		
			array('starts', array(1,2,3,4,5), '请选正确星级', 1, 'in'),		
		);

		$model = M('vevaluate');
		$data = $model->validate($rules)->create($data);

		if($model->add($data)) {
			$updata = array('isevaluate'=>'1');
			$smodel->where('id='.$sid)->save($updata);
			$msg = 1;
		} else {
			$msg = $model->getError();
		}

		$this->ajaxReturn($msg);
	}


}
