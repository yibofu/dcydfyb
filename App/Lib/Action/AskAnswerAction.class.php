<?php
	class AskAnswerAction extends Action {
		public function Asks() {
			$model = M('questionType');
			$type = $model->field('id,name')->select();

			$this->assign('types', $type);
			$this->display();
		}

	}

