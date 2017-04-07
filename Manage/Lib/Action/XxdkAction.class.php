<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 17:44
 */
class XxdkAction extends Action{
    public function index(){
        $this->display();
    }

    public function xxdklist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['tname'] != "") $map['tname'] = array('like','%'.$_POST['tname'].'%');
        if ($_POST['cost'] != "") $map['cost'] = array('like','%'.$_POST['cost'].'%');
        if ($_POST['days'] != "") $map['days'] = array('like','%'.$_POST['days'].'%');
        if ($_POST['img'] != "") $map['img'] = array('like','%'.$_POST['img'].'%');

        $oct = M("open_course_type");
        $list = $oct->field("id,tname,cost,days,img")->where($map)->page($page.','.$rows)->select();
        $total = $oct->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function xxdkadd(){
        $oct = M("open_course_type");
        $data = $oct->create();
        $data['tname'] = $this->_post("tname");
        $data['cost'] = $this->_post("cost");
        $data['days'] = $this->_post("days");
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = '../Public/upload';
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8888145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG','avi','mpg','wmv','mp3','mp4','AVI','MPG','WMV','MP3','MP4');
        $upload ->savePath = $savepath;
        $upload ->saveRule = uniqid;
        $upload ->uploadReplace = true;
        $upload ->autoSub = true;
        $upload ->subType = date;
        $upload ->dataFormat = "Ym";
        if(!$upload->upload()){
            $mesg = $upload ->getErrorMsg();
            $error = 2;
        }else{
            $info = $upload -> getUploadFileInfo();
            $filename = $info[0]['savename'];
            $fujianurl = substr($info[0]['savepath'].$filename,2);
            $data['img'] = $fujianurl;
        }
        $result = $oct -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$oct->getError()
            );
        }
        echo json_encode($result);
    }


    public function xxdkedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $oct = M("open_course_type");
            $res = $oct->field("id,tname,cost,days,img")->where("id=".$id)->find();
            $res['content'] = htmlspecialchars_decode($res['content']);
            echo json_encode($res);
        }
    }

    public function xxdksave(){
        $oct = M("open_course_type");
        $data = $oct->create();
        $data['tname'] = $this->_post("tname");
        $data['cost'] = $this->_post("cost");
        $data['days'] = $this->_post("days");
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = '../Public/upload';
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8888145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
        $upload ->savePath = $savepath;
        $upload ->saveRule = uniqid;
        $upload ->uploadReplace = true;
        $upload ->autoSub = true;
        $upload ->subType = date;
        $upload ->dataFormat = "Ym";
        if(!$upload->upload()){
            $mesg = $upload ->getErrorMsg();
            $error = 2;
        }else{
            $info = $upload -> getUploadFileInfo();
            $filename = $info[0]['savename'];
            $fujianurl = substr($info[0]['savepath'].$filename,2);
            $data['img'] = $fujianurl;
        }
        $result = $oct->where('id = '.$_GET['id'])->save($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function xxdkdel(){
        $id = $this->_post('id');
        if(!empty($id)){
            $oct = M("open_course_type");
            $result = $oct->where("id = " .$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$oct->getError()
                );
            }
        }else{
            $result = array(
                'success'=>false,
                'msg'>'id为空'
            );
        }
        echo json_encode($result);
    }
}