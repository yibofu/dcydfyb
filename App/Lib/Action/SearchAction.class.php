<?php
class SearchAction extends Action {
	public function search() {
		$searchType = $this->_get('drop2') ? $this->_get('drop2') : 'article' ;
		$searchKey = $this->_get('keywords');

		if(empty($searchKey)) {
			$data = array();		
			switch($searchType) {
				case 'video':
					$this->assign('data', $datas);
					$this->display('videoList');
					break;
				
				case 'article':
					$this->assign('data', $datas);
					$this->display('articlelist');
					break;
			}
			
			return;
		}

		$where = 'title like "%'.$searchKey.'%"';
		import('ORG.Util.Page');

		switch($searchType) {
			case 'video':
				$videoModel = M('view');

				//分页
				$total = $videoModel->where($where)->count();
				$page = new Page($total, 8);
				$page->setConfig('theme', "%upPage% %linkPage% %downPage%");

				$datas = $videoModel->field('id,kid,zid,name,url,title,money,introduce,chapternum,kctitle,img')
									->where($where . ' and chapternum=1')
									->order('id desc')
									->limit($page->firstRow, $page->listRows)
									->select();

				$this->assign('data', $datas);
				$this->assign('keywords', $searchKey); 
				$this->assign('page', $page->show()); 
				$this->display('videoList');
				break;
			
			case 'article':
				$articleModel = M('article');
				//分页
				$total = $articleModel->where($where)->count();
				$page = new Page($total, 20);
				$page->setConfig('theme', "%upPage% %linkPage% %downPage%");

				$datas = $articleModel->field('id, title, time')
						->where($where)
						->order('time desc')
						->limit($page->firstRow, $page->listRows)
						->select();

				foreach($datas as $key => $value) {
					$datas[$key]['time'] = date('Y-m-d H:i:s', $value['time']);
				}

				$this->assign('data', $datas);
				$this->assign('keywords', $searchKey); 
				$this->assign('page', $page->show());
				$this->display('articlelist');
				break;
		}

	}
}
	
