<?php
	class HelpCenterAction extends Action {
		//支付问题
		public function index() {
			//表名映射
			$ques = array(
				'zhifupro' => array('zfques', '支付问题'),		
				'dingzhipro' => array('custom', '定制问题'),		
				'fapiaopro' => array('billques', '发票问题'),		
				'zhhupro' => array('zhques', '账户问题'),		
			);

			$tableKey =  $this->_get('ques') ? $this->_get('ques') : 'zhifupro';
			$keys = array_keys($ques);

			if(!in_array($tableKey, $keys)) {
				$tableKey = 'zhifupro';
			}

			$tableName = $ques[$tableKey][0];

			$model = M($tableName); 		
			$article = $model->field('question')->where('status="2"')->find();
			
			$this->assign('subtitle', $ques[$tableKey][1]);
			$this->assign('article', strip_tags(htmlspecialchars_decode($article['question'])));
			$this->display();
		}

	}
