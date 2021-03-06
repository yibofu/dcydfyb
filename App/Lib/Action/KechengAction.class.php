<?php
class KechengAction extends Action{
    public function boss(){
		$courseTypeId = intval($this->_get('ctid'));

		//查询课程信息
		$model = M('openCourseType');
		$courseInfo = $model->field('days, cost')->where('id='.$courseTypeId)->find();
		$nowTime = time();
		$time = date('Y-m-d', $nowTime);

		//获取即将开课的课程信息
		$courseModel = M('openCourse');
		$nowCourse = $courseModel->field('id, address, startday, endday')
					->where('type=' . $courseTypeId . ' and startday>'.$nowTime)
					->order('startday asc')
					->limit('0,4')
					->select();

		foreach($nowCourse as $key => $course) {
			$startDay = date('Y m d', $course['startday']);
			$startDayArr = explode(' ', $startDay);

			$endDay = date('Y m d', $course['endday']);
			$endDayArr = explode(' ', $endDay);

			if($startDayArr[0] != $endDayArr[0]) {
				$nowCourse[$key]['date'] = $startDayArr[0] .'--'. $startDayArr[1] .'.'. $startDayArr[2] .'-'. $endDayArr[0] .'--'. $endDayArr[1] .'.'. $endDayArr[2]; 
			} else if(($startDayArr[0] == $endDayArr[0]) && ($startDayArr[1] != $endDayArr[1])) {
				$nowCourse[$key]['date'] = $startDayArr[0] .'--'. $startDayArr[1] .'.'. $startDayArr[2] .'-'. $endDayArr[1] .'.'. $endDayArr[2]; 
			} else {
				$nowCourse[$key]['date'] = $startDayArr[0] .'--'. $startDayArr[1] .'.'. $startDayArr[2] .'-'. $endDayArr[2]; 
			}
		}

		//获取有下角课程信息
		$allCourseType = $model->field('id,tname')->select();	//获取所有课程类别
		
		//获取每个分类下四条最近的开课
		foreach($allCourseType as $k => $value) {
			$courses = $courseModel->field('dcyd_open_course.id id, dcyd_open_course.address address, dcyd_open_course.startday startday, dcyd_open_course.endday endday, dcyd_teacher.name teacher')  	
						->join('inner join dcyd_teacher on dcyd_open_course.teacherid=dcyd_teacher.id')
						->where('type=' . $value['id'])
						->order('startday asc')
						->limit('0,4')
						->select();

			foreach($courses as $key => $course) {
				$startDay = date('Y m d', $course['startday']);
				$startDayArr = explode(' ', $startDay);

				$endDay = date('Y m d', $course['endday']);
				$endDayArr = explode(' ', $endDay);

				if($startDayArr[0] != $endDayArr[0]) {
					$courses[$key]['date'] = $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[0] .'年'. $endDayArr[1] .'月'. $endDayArr[2]; 
				} else if(($startDayArr[0] == $endDayArr[0]) && ($startDayArr[1] != $endDayArr[1])) {
					$courses[$key]['date'] = $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[1] .'月'. $endDayArr[2]; 
				} else {
					$courses[$key]['date'] = $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[2]; 
				}
			}

			$allCourseType[$k]['courses'] = $courses;
		}

		$courseInfo['cid'] = $courseTypeId;
		$this->assign('courseInfo', $courseInfo);
		$this->assign('nowCourse', $nowCourse);
		$this->assign('allCourseType', $allCourseType);
        $this->display();
    }

    public function finance(){
		
        $this->display();
    }

//报名界面
public function signUp() {
	/*
		if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
		}
	*/
$_SESSION['admins']['id'] = 25;
		$courseid = $this->_get('courid');
		$model = M('openCourse');
		$courseInfo = $model->field('dcyd_open_course_type.tname title, dcyd_open_course_type.cost cost, dcyd_open_course.id id, dcyd_open_course.address address, dcyd_open_course.startday startday, dcyd_open_course.endday endday')
							->join('inner join dcyd_open_course_type on dcyd_open_course.type=dcyd_open_course_type.id')
							->where('dcyd_open_course.id=' . $courseid)
							->find();

		//处理日期
		$courseInfo['info'] = $courseInfo['address'];

		$startDay = date('Y m d', $courseInfo['startday']);
		$startDayArr = explode(' ', $startDay);

		$endDay = date('Y m d', $courseInfo['endday']);
		$endDayArr = explode(' ', $endDay);

		if($startDayArr[0] != $endDayArr[0]) {
			$courseInfo['info'] .= $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[0] .'年'. $endDayArr[1] .'月'. $endDayArr[2] .'日'; 
		} else if(($startDayArr[0] == $endDayArr[0]) && ($startDayArr[1] != $endDayArr[1])) {
			$courseInfo['info'] .= $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[1] .'月'. $endDayArr[2] .'日'; 
		} else {
			$courseInfo['info'] .= $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-'. $endDayArr[2] .'日'; 
		}

		$this->assign('courseInfo', $courseInfo);
		$this->display();
	}

	//确认信息
	public function confirmation() {
		/*
		if(!isset($_SESSION['admins']['id'])) {
			$this->redirect('Login/loginPage');
		}
		*/

$_SESSION['admins']['id'] = 25;
		$data = $this->_post();
		$data['uid'] = $_SESSION['admins']['id'];
		$datas = json_encode($data);

		$data['adminsname'] =  $_SESSION['admins']['name'];
		
		$courseModel = M('openCourse');
		$type = $courseModel->field('address,startday,endday,type')->where('id=' . $data['cour'])->find();

		$startDay = date('Y m d', $type['startday']);
		$startDayArr = explode(' ', $startDay);

		$endDay = date('Y m d', $type['endday']);
		$endDayArr = explode(' ', $endDay);

		$date = $type['address'] .' '. $startDayArr[0] .'年'. $startDayArr[1] .'月'. $startDayArr[2] .'-';

		if($startDayArr[0] != $endDayArr[0]) {
			$date .= $endDayArr[0] .'年'. $endDayArr[1] .'月'. $endDayArr[2] . '日'; 
		} else if(($startDayArr[0] == $endDayArr[0]) && ($startDayArr[1] != $endDayArr[1])) {
			$date .= $endDayArr[1] .'月'. $endDayArr[2] . '日'; 
		} else {
			$date .= $endDayArr[2] . '日'; 
		}

		$courseTypeModel = M('openCourseType');
		$course = $courseTypeModel->field('tname, cost')->where('id='. $type['type'])->find(); 
		$course['date'] = $date;

		$data['course'] = $course;
		$this->assign('data', $data);
		$this->assign('datas', $datas);
		$this->display();
	}

	//我要报名
	public function goSign() {
		if(!$this->isAjax()) {
			die('非法请求');
		}
		/*
		if(!isset($_SESSION['admins']['id'])) {
			$this->ajaxReturn(3);
		}
		*/

$_SESSION['admins']['id'] = 25;
		$postdata = $this->_post();
		$postdata = $postdata['datas'];
		$data = array();
		$data['uid'] = isset($_SESSION['admins']['id']) ? $_SESSION['admins']['id'] : 'ls' . time();
		$data['courseid'] = intval($postdata['cour']);
		$data['addtime'] = time();
		$data['username'] = $postdata['uname'];
		$data['upostion'] = $postdata['postion'];
		$data['uapart'] = $postdata['apart'];
		$data['uemail'] = $postdata['mail'];
		$data['ucompany'] = $postdata['company'];
		$data['uphone'] = $postdata['phone'];
		$data['other'] = $postdata['others'];

		$rules = array(
			array('courseid', 'number', '本课程不存在', 1),		
			array('username', 'require', '请填写参课人员名称', 1),		
			array('upostion', 'require', '请填写参课人员职位', 1),		
			array('uapart', 'require', '请填写参课人员部门', 1),		
			array('uemail', 'email', '请填写正确的邮箱', 1),		
			array('ucompany', 'require', '请填写公司名称', 1),		
			array('uphone', '/\d{11}/', '请填写正确手机号', 1),		
		);
		
		$model = M('signcourse');
		$res = $model->validate($rules)->create($data);
		if($res) {
			if($model->add($data)) {
				//加入个人中心
				if($_SESSION['admins']['id']) {
					$myCourseModel = M('mycourse');
					$mydata = array();
					$mydata['uid'] = $data['uid'];
					$mydata['courseid'] = $data['courseid'];
					$mydata['addtime'] = $data['addtime'];
					$mydata['status'] = '1';
					$myCourseModel->add($mydata);
				}

				$this->ajaxReturn(1);
			}		
		} else {
			$this->ajaxReturn($model->getError());
		}

	}

	//提交咨询信息
	public function consult() {
		if(!$this->isAjax()) {
			exit('非法请求');
		}

		$uid = intval($_SESSION['admins']['id']);
		if(!$uid) {
			$this->ajaxReturn(0);
		}

		$post = $this->_post();
		$post = $post['data'];


		//判断用户是否存在
		$userModel = M('user');
		$userFind = $userModel->field('id')->where('id=' . $uid)->find();
		if(!$userFind['id']) {
			$this->ajaxReturn(0);
		}
		

		$model = M('consult');

		//查看用户是否已经提交过咨询
		$find = $model->field('id')
					->where('uid=' .$uid. ' and type="' .$post['want']. '" and ishandled="0"')
					->find();

		if($find['id']) {
			$this->ajaxReturn('您已提交过该请求，请耐心等待客服与您联系');
		}

		$data['uid'] = intval($uid);
		$data['uname'] = $post['uname'];
		$data['uposition'] = $post['position'];
		$data['uphone'] = $post['phone'];
		$data['ucompany'] = $post['company'];
		$data['ucontent'] = $post['content'];
		$data['type'] = $post['want'];
		$data['addtime'] = time();

		$rules = array(
			array('uname', 'require', '请填写姓名', 1),
			array('uposition', 'require', '请填写职位', 1),
			array('uphone', '/\d{11}/', '手机有误', 1),
			array('ucompany', 'require', '请填写公司', 1),
			array('type', array('1','2','3'), '类别有误', 1, 'in')
		);

		$res = $model->validate($rules)->create($data);

		if(!$res) {
			$this->ajaxReturn($model->getError());
		}

		if($model->add($data)) {
			$this->ajaxReturn('提交成功，请耐心等待客服人员与您联系');
		} else {
			$this->ajaxReturn('提交失败，请稍后提交');
		}
	}
}
