<?php
class WebMessageAction extends Action {
	public function __construct() {
		parent::__construct();	//继承父类构造方法

		if(!isset($_SESSION['admins']['id'])) {
			$this->redirect('Login/loginPage');
		}
	}

	public function index() {
		$uid = $_SESSION['admins']['id'];
		
		$model = M('WebMessage');

		//分页
		$total = $model->where('reciveuser='.$uid)->count();
		import('ORG.Util.Page');
		$page = new Page($total, 6);
		$page->setConfig('header','');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('theme','%upPage%%linkPage%%downPage%');

		//查询每页的列表
		$list = $model->field('id,title,isread,send_time')
					->where('reciveuser=' . $uid)
					->order('send_time desc')
					->limit($page->firstRow.','.$page->listRows)
					->select();

		foreach($list as $key => $message) {
			$list[$key]['send_time'] = date('Y-m-d', $message['send_time']);
		}

		//数据为空显示的
		$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';
		$nowPage = $page->firstRow/$page->listRows+1;

		$this->assign('empty', $empty);
		$this->assign('data', $list);
		$this->assign('page', $page->show());
		$this->assign('nowPage', $nowPage);
		$this->display();
	}

	//标记为已读
	public function signReaded() {
		$messageId = $this->_post('mid');
		$messageId = trim($messageId ,' ');
		$messageId = explode(' ', $messageId);
		$messageId = implode(',', $messageId);


		//拼接条件语句
		$where = 'id in (' . $messageId . ')';	
		$data = array('isread' => '1');
		$model = M('webMessage');
		$result = $model->where($where)->save($data) ? 'true' : 'false';
		$this->ajaxReturn($result);
	}

	//删除消息
	public function deleteMessage() {
		$uid = $_SESSION['admins']['id'];
		$messageId = $this->_post('mid');
		$messageId = trim($messageId ,' ');
		if(empty($messageId)) {
			$msg = array('code'=>0,'msg'=>'您没选择数据');
			$this->ajaxReturn($msg);
		}
		$messageId = explode(' ', $messageId);
		$messageId = array_map('intval', $messageId);
		$total = count($messageId);
		$messageId = implode(',', $messageId);
		$page = intval($this->_post('page'));
		$start = ($page-1)*6+(6-$total);

		//拼接条件语句
		$where = 'reciveuser= '.$uid.' and id in (' . $messageId . ')';	
		$model = M('webMessage');
		$result = $model->where($where)->delete() ? 'true' : 'false';

		if($result) {
			//根据删除的重新查数据
			$list = $model->field('id,title,isread,send_time')
						->where('reciveuser=' . $uid)
						->order('send_time desc,id desc')
						->limit($start.','.$total)
						->select();
			$return = '';
			foreach($list as $key => $value) {
				$value['send_time'] = date('Y-m-d', $value['send_time']);
				$value['isread'] = $value['isread'] == 0 ? '未读' : '已读';
				$str = <<<h
						<p>
							<input type="checkbox" name="mid" value="{$value['id']}"/>
							<span >{$value['title']}</span>
							<span>【{$value['send_time']}】</span>
							<a href="#">{$value['isread']}</a>
						</p>
h;
			
			
				$return .= $str;

			} 
			
			$res = array('code'=>1, 'msg'=>$return);
			$this->ajaxReturn($res);
		}
	
	}

}
