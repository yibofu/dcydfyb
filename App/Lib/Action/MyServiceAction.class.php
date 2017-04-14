<?php
	class MyServiceAction extends Action {
		public function __construct() {
			parent::__construct();	//继承父类构造方法
			
			if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
			}
		}

		//获取诊断列表
		public function diagnoseList() {
			$uid = $_SESSION['admins']['id'];
			
			$model = M('service');
			$total = $model->where('uid='.uid)->count();

			import('ORG.Util.Page'); 
			$page = new Page($total, 6);
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('theme','%upPage%%linkPage%%downPage%');

			$list = $model->field('dcyd_service.isevaluate isevaluate, dcyd_service.id id, dcyd_service.number number,dcyd_zdtype.name typename,dcyd_service.addtime time,dcyd_service.status,dcyd_service.teachername teacher, dcyd_service.teacherid teacherid')
					->join('inner join dcyd_zdtype on dcyd_service.zdtype=dcyd_zdtype.id')	
					->where('dcyd_service.uid=' . $uid)
					->order('dcyd_service.addtime desc')
					->limit($page->firstRow.','.$page->listRows)
					->select();

			//处理列表
			foreach($list as $key => $item) {
				switch($item['status']) {
					case 1:
						$list[$key]['status'] = '正在进行';
						break;

					case 2:
						$list[$key]['status'] = '已完成';
						break;
				}

				if($item['teacherid'] == 0 && $item['status'] == 1) {
					$list[$key]['note'] = '等待指定老师';
				} else if($item['status'] == 1 && $item['teacherid']) {
					$list[$key]['note'] = '正在与老师沟通';
				} else if($item['status'] == 2 && $item['teacherid'] && $item['isevaluate'] == 0) {
					$list[$key]['note'] = "eva";
				} else if($item['status'] == 2 && $item['teacherid'] && $item['isevaluate'] == 1) {
					$list[$key]['note'] = "已评价";
				}

				$list[$key]['time'] = date('Y-m-d H:i:s', $item['time']);
			}


			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

			$this->assign('empty', $empty);
			$this->assign('list', $list);
			$this->assign('page', $page->show());
			$this->display();
		}

		//获取约见列表
		public function apporintmentList() {
			$uid = $_SESSION['admins']['id'];
			
			$model = M('yjt');
			$total = $model->where('uid='.uid)->count();

			import('ORG.Util.Page'); 
			$page = new Page($total, 6);
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');
			$page->setConfig('theme','%upPage%%linkPage%%downPage%');

			$list = $model->field('id, number,time addtime, status,teachername teacher,isevaluate')
						  ->where('uid=' . $uid)
						  ->order('time desc')
						  ->limit($page->firstRow.','.$page->listRows)
						  ->select();

			//处理列表
			foreach($list as $key => $item) {
				switch($item['status']) {
					case 0:
						$list[$key]['des'] = '等待约见';
						$list[$key]['note'] = '等待约见';
						break;

					case 1:
						$list[$key]['des'] = '正在见面';
						$list[$key]['note'] = '正在约见';
						break;

					case 2:
						$list[$key]['des'] = '已完成';
						if($item['isevaluate'] == 0) {
							$list[$key]['note'] = '评价';
						} else if($item['isevaluate'] == 1) {
							$list[$key]['note'] = '已评价';
						}
						break;

					case 3:
						$list[$key]['des'] = '已取消';
						$list[$key]['note'] = '已取消';
						break;
				}

				$list[$key]['addtime'] = date('Y-m-d H:i:s', $item['time']);
			}

			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

			$this->assign('empty', $empty);
			$this->assign('list', $list);
			$this->assign('page', $page->show());
			$this->display();
		}

		//取消约见
		public function cancelMeet() {
			$appoId = $this->_post('data');
			$data = array('status' => '3');

			$model = M('yjt');
			if($model->where('id='.$appoId)->save($data)) {
				$this->ajaxReturn('1');
			} else {
				$this->ajaxReturn('0');
			}
		}

		//问题列表
		public function questionList() {
			$uid = $_SESSION['admins']['id'];
			

			$model = M('question');
			$total = $model->where('userid='.$uid)->count();

			import('ORG.Util.Page'); 
			$page = new Page($total, 6);
			$page->setConfig('theme','%upPage%%linkPage%%downPage%');
			$page->setConfig('prev','上一页');
			$page->setConfig('next','下一页');

			//查询问题列表
			$list = $model->field('dcyd_question.id id,dcyd_question.number number, dcyd_question.addtime addtime, dcyd_question.question question, dcyd_question.status status, dcyd_question_type.name type, dcyd_answer.teacherid teacher')
					->join('inner join dcyd_question_type on dcyd_question.type=dcyd_question_type.id')
					->join('left join dcyd_answer on dcyd_question.id=dcyd_answer.qid')
					->where('userid='.$uid)
					->order('dcyd_question.addtime desc')
					->limit($page->firstRow.','.$page->listRows)
					->select();

			$teacherModel = M('teacher');

			foreach($list as $key => $item) {
				$teacher = '';
				if($item['teacher'] != 0) {
					$teacher = $teacherModel->field('name')->where('id='.$item['teacher'])->find();
				}
				switch($item['status']) {
					case '0':
						$list[$key]['dstatus'] = '待解答';
						$list[$key]['desc'] = '正在与老师沟通';
						break;
					case '1':
						$list[$key]['dstatus'] = '已解答';
						$list[$key]['desc'] = '回答：' . $teacher['name'];
						break;
					case '2':
						$list[$key]['dstatus'] = '已解决';
						$list[$key]['desc'] = '回答：' . $teacher['name'];
						break;
					case '3':
						$list[$key]['dstatus'] = '未解决';
						$list[$key]['desc'] = '回答：' . $teacher['name'];
						break;
				}

				$list[$key]['addtime'] = date('Y-m-d H:i:s', $item['addtime']);
			}


			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';

			$this->assign('empty', $empty);
			$this->assign('list', $list);
			$this->assign('page', $page->show());
			$this->display();
		}
		
		//查看答案
		public function getAnswer() {
			$qid = $this->_get('qid');
			$uid = $_SESSION['admins']['id'];

			$model = M('question');
			$question = $model->field('question,addtime')->where('id=' .$qid. ' and userid=' . $uid)->find();

			if($question['question']) {
				$answerModel = M('answer'); 
				$answer = $answerModel->field('answer')->where('qid=' .$qid)->find();
			} else {
				$this->ajaxReturn('您没有提问该问题');
			}
			
			$question['id'] = $qid;
			$question['addtime'] = date('Y-m-d', $question['addtime']);
			$this->assign('question', $question);
			$this->assign('answer', $answer);
			$this->display();
		}

		//是否解决
		public function solved() {
			$qid = intval($this->_post('qid'));
			$data['status'] = $this->_post('scode');

			$rules = array(
				array('status', array('2','3'), '反馈失败', 1, 'in')				
			);

			$model = M('question');
			$data = $model->validate($rules)->create($data);

			if($model->where('id='.$qid)->save($data)) {
				$msg = '反馈成功';
			} else {
				$msg = '反馈失败'; 
			}

			$this->ajaxReturn($msg);
		
		}

		//评价
		public function evaluate() {
			$uid = $_SESSION['admins']['id'];
			$sid = $this->_get('sid');
			$sinfo = explode('_',$sid);

			switch($sinfo[0]) {
				case 'zd':
					$smodel = M('service');
					$find = $smodel->field('dcyd_zdtype.name zdtype, dcyd_service.addtime time')
									->join('inner join dcyd_zdtype on (dcyd_service.zdtype =dcyd_zdtype.id)')
									->where('dcyd_service.id='.$sinfo['1'].' and dcyd_service.uid='.$uid. ' and isevaluate="0"')
									->find();
					break;

				case 'yj':
					$smodel = M('yjt');
					$find = $smodel->field('time')->where('id='.$sinfo[1].' and uid='.$uid.' and isevaluate="0"')->find();
					$find['zdtype'] = '约见专家';
					break;

				case 'tw':
					$smodel = M('question');
					$find = $smodel->field('addtime time')->where('userid='.$uid.' and id='.$sinfo[1].' and isevaluate="0"')->find();
					$find['zdtype'] = '提问解答';
					break;
			}

			$find['time'] = date('Y-m-d', $find['time']);
			$find['sid'] = $sid;
			$this->assign('data', $find);
			$this->display();
		}

		public function makeEvaluate() {
			$uid = $_SESSION['admins']['id'];
			$post = $this->_post();
			$msg = '';
			$data['serviceid'] = $post['sid'];
			$data['uid'] = $uid;
			$data['content'] = $post['con'];
			$data['starts'] = $post['star'];
			$data['addtime'] = time();


			$sid = explode('_', $data['serviceid']);
			switch($sid[0]) {
				case 'zd':
					$smodel = M('service');
					$find = $smodel->field('id')->where('uid='.$uid.' and id='.$sid[1].' and isevaluate="0"')->find();
					$data['status'] = 2;
					break;

				case 'yj':
					$smodel = M('yjt');
					$find = $smodel->field('id')->where('uid='.$uid.' and id='.$sid[1].' and isevaluate="0"')->find();
					$data['status'] = 2;
					break;

				case 'tw':
					$smodel = M('question');
					$find = $smodel->field('id')->where('userid='.$uid.' and id='.$sid[1].' and isevaluate="0"')->find();
					break;

			}

			if(!$find['id']) {
				$this->ajaxReturn('您没有享受过这项服务，不能评价');
			}
			
			$rules = array(
				array('serviceid', 'require', '您没有享受过这项服务，不能评价', 1),		
				array('content', 'require', '评论内容不能为空', 1),		
				array('starts', array(1,2,3,4,5), '请选正确星级', 1, 'in'),		
			);

			$model = M('sevaluate');
			$data = $model->validate($rules)->create($data);

			if($model->add($data)) {
				$updata = array('isevaluate'=>'1');
				$smodel->where('id='.$sid[1])->save($updata);
				$msg = 1;
			} else {
				$msg = $model->getError();
			}

			$this->ajaxReturn($msg);
		}


	}
