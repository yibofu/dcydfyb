<?php
	class AskAnswerAction extends Action {
		public function Asks() {
			$model = M('questionType');
			$type = $model->field('id,name')->select();

			$questionModel = M('question');

			//获取最新问题列表
			$newQuestion = $questionModel->field('dcyd_question.question question, dcyd_question.addtime addtime, dcyd_user.Phone phone')
										->join('inner join dcyd_user on dcyd_question.userid=dcyd_user.id')
										->order('dcyd_question.addtime desc')
										->limit('0, 7')
										->select();

			foreach($newQuestion as $nk => $nv) {
				$newQuestion[$nk]['addtime'] = date('Y-m.d', $nv['addtime']);
				$phone = strrev($nv['phone']);
				$phone = chunk_split($phone, 4, ' ');
				$phone = explode(' ', $phone);
				$phone[1] = '****';
				$phone = implode('', $phone);
				$phone = strrev($phone);
				$newQuestion[$nk]['phone'] = $phone;
			}

			//获取已回答问题列表
			$question = $questionModel->field('dcyd_question.type type,dcyd_question.question question, dcyd_question.id id, dcyd_answer.id aid, dcyd_answer.answer answer, dcyd_answer.teacherid teacherid, dcyd_answer.upvote upvote,  dcyd_user.img img, dcyd_user.nickname nickname ')
									->join('inner join dcyd_answer on dcyd_question.id = dcyd_answer.qid')
									->join('inner join dcyd_user on dcyd_question.userid = dcyd_user.id')
									->order('dcyd_question.addtime desc')
									->limit('0, 7')
									->select();

			//查询老师信息
			$tmodel = M('teacher');
			foreach($question as $k => $v) {
				$tmp = $tmodel->field('name')->where('id=' . $v['teacherid'])->find();
				$question[$k]['teacher'] = $tmp['name'];
			}

			//问题分类
			$questionList = array();
			foreach($question as $qk => $question) {
				if(is_array($questionList[$question['type']])) {
					array_push($questionList[$question['type']], $question);
				} else {
					$questionList[$question['type']] = array();
					array_push($questionList[$question['type']], $question);
				}
			}

			$finalQuestionList = array();
			foreach($type as $tk => $tv) {
				$finalQuestionList[$tv['id']]	= $questionList[$tv['id']];
			}
			$this->assign('question', $finalQuestionList);
			$this->assign('newQuestion', $newQuestion);
			$this->assign('types', $type);
			$this->display();
		}

		//对答案点赞
		public function upvote() {
			$aid = intval($this->_post('aid'));

			$model = M('answer');		
			$upnum = $model->field('id, upvote')->where('id=' . $aid)->find();

			if($upnum['id']) {
				$upNum = $upnum['upvote'] + 1;
				$savearr = array('upvote' => $upNum);
			} else {
				$this->ajaxReturn(0);
			}

			if($model->where('id=' . $aid)->save($savearr)) { 
				$this->ajaxReturn(1);		
			}
		}

	}

