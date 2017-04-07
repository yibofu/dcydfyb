<?php

	class TestAction extends Action {
		public function index(){
			/* $jiaoyou = M('jiaoyou');
			import("ORG.Util.Page");
			$count = $jiaoyou->where($map)->count();
			$Page = New Page($count,2);
			$result = $jiaoyou->field("nickname,city,zhiwei,userpic,xingzuo")->limit($Page->firstRow.','.$Page->listRows)->select();
			$user = M('user');
			$user_detail = M('user_detail');
			$accout = M("accout");
			foreach($result as $val){
				$data['img_url'] = '';
				$data['img_url'] = $this->photoDownload($val['userpic']);
				sleep(1);
				$data['sex'] = 2;
				$data['nickname'] = $val['nickname'];
				$data['img_time'] = time();
				$data['img_status'] = 1;
				$data['status'] = 1;
				$data['ctime'] = time();
				$data['ltime'] = time();
				$uid = $user->add($data);
				$detail_data['uid'] = $uid;
				$detail_data['nickname'] = $val['nickname'];
				$detail_data['city'] = $val['city'];
				$detail_data['job'] = $val['zhiwei'];
				$detail_data['constellation'] = $val['xingzuo'];
				$user_detail->add($detail_data);
				$accout_data['uid'] = $uid;
				$accout->add($accout_data);
			}  */
			$str = $this->make_num();
			echo $str;
		}
		public function make_num(){
			$str = mt_rand(999,9999);
			$user = M('user');
			if(substr($str,-1) == 3 || substr($str,-1) == 6 || substr($str,-1) == 9){
				$this->make_num();
			}else{
				$is_has = $user->where('userid='.$str)->getField('id');
				if(empty($is_has)){
					return $str;
				}else{
					$this->make_num();
				}	
			}
		}
		public function photoDownload($url){ 
			$temp_filename = '';
			$savefile = '/data/www/ooxx/Web/Public/upload/head/temp/';
            $imgArr = array('gif','bmp','png','ico','jpg','jepg');    
            if(!$url){return false;}    
		    $url_arr = explode('.',$url);  
		    $url_ext = array_pop($url_arr);  
		    $ext=strtolower($url_ext);       
		   if(!in_array($ext,$imgArr)){return false;}    
		   $filename=date("dMYHis").'.'.$ext;  
			$temp_filename = $filename;
            if(!is_dir($savefile)){mkdir($savefile, 0777);}    
            if(!is_readable($savefile)){ chmod($savefile, 0777);}    
            $filename = $savefile.$filename;    
            ob_start();       
            readfile($url);       
            $img = ob_get_contents();       
            ob_end_clean();       
            $size = strlen($img);       
            $fp2=@fopen($filename, "a");       
            fwrite($fp2,$img);       
            fclose($fp2);  
            //$tmp = '..';  
            /* $filename_arr = explode('/',$filename);  
            $new_filename_arr = array($tmp,$tmp,$filename_arr[6],$filename_arr[7],$filename_arr[8]);  
            $filename = implode('/',$new_filename_arr); */  
			$new_filename = '/Public/upload/head/temp/'.$temp_filename;
            return $new_filename;       
         }  
	}
?>