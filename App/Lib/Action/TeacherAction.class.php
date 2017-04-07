<?php
	class TeacherAction extends Action {
		public function teacherList() {
			$this->display();
		}
		
		public function teacherIntroduce() {
			$id = $_GET["id"];
			$teacher = M("teacher");
			$tea = $teacher->field('id,name,timg,explain')->where('id = '.$id)->find();
			$tea['explain'] = htmlspecialchars_decode($tea['explain']);
			$this->assign("tea",$tea);
			$this->display();
		}
	}
