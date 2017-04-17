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
			$this->assign("tea",$tea);
			$this->display();
		}
	}
