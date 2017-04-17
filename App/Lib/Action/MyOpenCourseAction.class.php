<?php
	class MyOpenCourseAction extends Action {
		public function __construct() {
			parent::__construct();	//继承父类构造方法
			if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
			}
		}

		public function index() {
			$uid = $_SESSION['admins']['id'];
			
			$model = M('mycourse');
			$total = $model->where('uid=' . $uid)->count();

			import('ORG.Util.Page');
			$page = new Page($total, 4);
			$page->setConfig('theme', '%upPage%%linkPage%%downPage%');

			$list = $model->field('dcyd_mycourse.isevaluate isevaluate, dcyd_mycourse.id id, dcyd_open_course.id courseid, dcyd_open_course.type type, dcyd_mycourse.status status, dcyd_open_course.paytype paytype, dcyd_open_course.startday startday, dcyd_open_course.endday endday')
							->join('inner join dcyd_open_course on dcyd_mycourse.courseid=dcyd_open_course.id')
							->where('uid=' . $uid)
							->order('dcyd_mycourse.addtime desc')
							->limit($page->firstRow, $page->listRows)
							->select();
			$typeModel = M('openCourseType');
			foreach($list as $key => $course) {
				//查询课程名
				$courseName = $typeModel->field('tname')->where('id=' . $course['type'])->find();
				$list[$key]['courseName'] = $courseName['tname'];

				//格式化
				$startDay = date('Y m d', $course['startday']);
				$startDayArr = explode(' ', $startDay);

				$endDay = date('Y m d', $course['endday']);
				$endDayArr = explode(' ', $endDay);
				$date = $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] . '日至';

				if($startDayArr[0] != $endDayArr[0]) {
					$list[$key]['date'] =  $date . $endDayArr[0] .'年'. $endDayArr[1] .'月'. $endDayArr[2] . '日结束'; 
				} else if(($startDayArr[0] == $endDayArr[0]) && ($startDayArr[1] != $endDayArr[1])) {
					$list[$key]['date'] = $date . $endDayArr[1] .'月'. $endDayArr[2] . '日结束'; 
				} else {
					$list[$key]['date'] = $date . $endDayArr[2] . '日结束'; 
				}

				//付款状态
				switch($course['paytype']) {
					case 1: 
						$list[$key]['dpaytype'] = '线下付款';
						break;

					case 2: 
						$list[$key]['dpaytype'] = '线上付款';
						break;
				}

				//是否付款
				switch($course['status']) {
					case '1':
						$list[$key]['dstatus'] = '未付款';
						break;

					case '2':
						$list[$key]['dstatus'] = '报名成功';
						break;

					case '3':
						$list[$key]['dstatus'] = '已取消';
						break;
				
				}

			}


			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

			$this->assign('empty', $empty);
			$this->assign('list', $list);
			$this->assign('page', $page->show());
			$this->display();
		}
	
		//取消报名
		public function cancelSign() {
			$courseid = $this->_get('courid');	
			$uid = $_SESSION['admins']['id'];
			

			$model = M('mycourse');
			$cmodel = M('signcourse');
			$data = array('status' => '3');
			$where = 'id=' . $courseid. ' and uid=' . $uid;

			if($model->where($where)->save($data)) {
				$cmodel->where($where)->delete();
				$this->redirect('MyOpenCourse/index');
			} else {
				$this->redirect('MyOpenCourse/index');
			}
		}

		//删除记录
		public function delSign() {
			$courseid = $this->_get('courid');	
			$uid = $_SESSION['admins']['id'];
			
			$model = M('mycourse');
			$where = 'id=' . $courseid. ' and uid=' . $uid;

			if($model->where($where)->delete()) {
				$this->redirect('MyOpenCourse/index');
			} else {
				$this->redirect('MyOpenCourse/index');
			}
		}

		//评价课程
		public function evaluate() {
			$uid = $_SESSION['admins']['id'];	
			$cid = intval($this->_get('cid'));

			$model = M('mycourse');
			$find = $model->field('courseid,addtime')
				->where('id='.$cid. ' and isevaluate="0" and uid=' . $uid)
				->find();

			if(!$find) {
				$this->redirect('MyOpenCourse/index');
			}
			
			$data['time'] = date('Y-m-d', $find['addtime']);
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

			$smodel = M('mycourse');
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

			$model = M('cevaluate');
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
