<?php
    class HelpAction extends CommonAction{
        //帮助列表
        public function helpList(){
			$id = $_SESSION['user']['id'];
			$user_mess = M('user_mess');
			$map['uid'] = $id;
			$map['is_read'] = 2;
			$count = $user_mess->where($map)->count();
			if($count > 0){
				$is_new = 1;
			}else{
				$is_new = 2;
			}
			$this->assign('is_new',$is_new);
			$this->assign('id',$id);
            $this->display();
        }
        public function about(){
            $this->display();
         }
         public function borrow(){
            $this->display();
         }
         public function repay(){
            $this->display();
         }
         public function examine(){
             $this->display();
         }
         public function secret(){
            $this->display();
         }
         public function messages(){
			$id = $this->_get('id');
			$user_mess = M('user_mess');
			$result = $user_mess->field("id,title,is_read,ctime")->where('uid='.$id)->select();
			foreach($result as &$val){
				$val['ctime'] = date('Y-m-d H:i:s',$val['ctime']);
				if($val['is_read'] == 2){
					$val['is_read'] = '<i class="iconfont icon-icon01"></i>';
				}else{
					$val['is_read'] = '';
				}
			}
			$empty = '<section class="nullstate"><div style=""><img src="/Public/Mob/yh/img/nullstate.png" alt="无信息" style="width: 100%;"/></div><p style="">暂时没有消息</p></section>';
			$this->assign('result',$result);
			$this->assign('id',$id);
			$this->assign('empty',$empty);
            $this->display();
         }
        public function message_detail(){
			$id = $this->_get('id');
			$user_mess = M('user_mess');
			$is_read = $user_mess->where('id='.$id)->getField('is_read');
			if($is_read == 2){
				$data['is_read'] = 1;
				$data['id'] = $id;
				$user_mess->save($data);
			}
			$result = $user_mess->field("title,ctime,desc")->where('id='.$id)->find();
			$result['ctime'] = date('Y-m-d H:i:s',$result['ctime']);
			$this->assign('result',$result);
            $this->display();
        }

    }
?>