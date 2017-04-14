<?php
class CoursebmAction extends Action {
	public function index() {
		$this->display();
	}

	//报名表
	public function signUp() {
		$model = M('sj');
		$data = $model->create();
		$data['username'] = $this->_post('uname');
		$data['phone'] = $this->_post('uphone');
		
		foreach($data as $v) {
			if(empty($v)) {
				$this->error('姓名或手机不能为空');
			}
		}
		$data['addtime'] = time();

		$str = $model->add($data);
		echo json_encode($str);

	}

}
