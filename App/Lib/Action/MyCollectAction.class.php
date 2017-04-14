<?php
	class MyCollectAction extends Action {
		public function __construct() {
			parent::__construct();	//继承父类构造方法
			if(!isset($_SESSION['admins']['id'])) {
				$this->redirect('Login/loginPage');
			}
		}

		//课程收藏列表
		public function index() {
			$uid = $_SESSION['admins']['id'];						
									
			$model = M('collection');
			$total = $model->where('uid='.$uid)->count();
			import('ORG.Util.Page');
			$page = new Page($total, 6);
			$page->setConfig('theme', '%upPage%%linkPage%%downPage%');

			$list = $model->field('dcyd_collection.id id, dcyd_view.title title, dcyd_view.img img, dcyd_view.url url')
						  ->join('inner join dcyd_view on dcyd_collection.courseid=dcyd_view.id')
						  ->where('dcyd_collection.uid=' . $uid)
						  ->limit($page->firstRow, $page->listRows)
						  ->select();
			 
			//数据为空显示的
			$empty = '<div class="MinHeight"> <p>您在此没有留下足迹 </p> </div>';
			$nowPage = $page->firstRow/$page->listRows+1;

			$this->assign('empty', $empty);
			$this->assign('list', $list);
			$this->assign('page', $page->show());
			$this->assign('nowPage', $nowPage);
			$this->display();
		}

		//取消收藏
		public function cancelCollection() {
			$uid = $_SESSION['admins']['id'];
			
			$vid = $this->_post('collid');
			$vid = trim($vid, ' ');
			if(empty($vid)) {
				$msg = array('code'=>0,'msg'=>'您没选择数据');
				$this->ajaxReturn($msg);
			}

			$vid = explode(' ', $vid);
			$vid = array_map('intval', $vid);
			$total = count($vid);
			$page = intval($this->_post('nowPage'));
			$start = ($page-1)*6+(6-$total);

			$vid = implode(',', $vid);
			$where = 'id in (' . $vid . ')';
			$model = M('collection');

			if($model->where($where)->delete()) {
				$list = $model->field('dcyd_collection.id id, dcyd_view.title title, dcyd_view.img img, dcyd_view.url url')
						  ->join('inner join dcyd_view on dcyd_collection.courseid=dcyd_view.id')
						  ->where('dcyd_collection.uid=' . $uid)
						  ->limit($start .','. $total)
						  ->select();

				$return = '';
				foreach($list as $video){
					$str = <<<h
						<li>
							<img src="{$video['img']}" style="width:230px;" />
								<input class="checkLightBot" type="checkbox" name="ck" value="{$video['id']}" />
							<p>{$video['title']}</p>
						</li>
h;
					
					$return .= $str;
				}

			}

			$res = array('code'=>1, 'msg'=>$return);
			$this->ajaxReturn($res);
		}

		//收藏课程
		public function collection() {
			$courseId = $this->_post('couid');
			$uid = $_SESSION['admins']['id'];
			$model = M('collection');
			$data = array(
				'uid' => $uid,		
				'courseid' => $courseId
			);

			if($model->add($data)) {
				$this->ajaxReturn(1);
			} else {
				$this->ajaxReturn(0);
			}
		}
	}
