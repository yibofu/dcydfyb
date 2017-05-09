<?php
	class TeacherAction extends Action {
		public function teacherList() {
			$teacher = M("teacher");
			import('ORG.Util.Page');
			$count = $teacher->where()->count();
			$page = new Page($count,4);
			$page->setConfig('theme','%upPage%%linkPage%%downPage%' );
			$result = $teacher->field('id,name,explain,limg,traders')
                ->limit($page->firstRow.','.$page->listRows)
                ->select();
			foreach($result as &$list){
				$list['explain'] = htmlspecialchars_decode($list['explain']);
			}

			$nowPage = $page->firstRow/$page->listRows+1;
			$this->assign('nowPage', $nowPage);

			$this->assign("result",$result);
			$this->assign("page",$page->show());
			$this->display();
		}
		
		public function teacherIntroduce() {
			$id = $_GET["id"];
			$teacher = M("teacher");
			$tea = $teacher->field('id,name,timg,explain,traders')
                ->where('id = '.$id)
                ->find();
			$tea['explain'] = htmlspecialchars_decode($tea['explain']);


			/*********课程安排列表**********/

			$model = M('openCourseType');
			$courseModel = M('openCourse');
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

			
			$this->assign("tea",$tea);
			$this->assign('allCourseType', $allCourseType);
			$this->display();
		}
	}
