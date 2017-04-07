<?php
class ContentAction extends CommonAction{

    /*
    boss听
    */
    public function boss(){
        $this->display();
    }

    //boss听的数据显示
    public function bosslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');
        if ($_POST['img'] != "") $map['img'] = $_POST['img'];
        
        $boss = M("boss");
        $list = $boss->field("id,title,content,img,url,view")->where($map)->page($page.','.$rows)->select();
        $total = $boss->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

//    图片
    public function upimg(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $boss = M('boss');
            $res = $boss->field("id,img")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }

    public function imgsave(){
        $boss = M("boss");
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
//        $IMG_DIR = "../Public/upload";    //图片上传位置
//        $path = "image";
//        $savepath = $IMG_DIR.'/'.$path.'/';      //图片保存位置

        $savepath='../Public/upload/image/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();                 //实例化上传类
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
        $upload ->savePath = $savepath;             // 设置附件上传目录
        $upload ->saveRule = uniqid;                // 上传文件命名规则
        $upload ->uploadReplace = true;// 存在同名是否覆盖
        $upload ->autoSub = true;// 启用子目录保存文件
        $upload ->subType = date;// 子目录创建方式 可以使用hash date custom
        $upload ->dataFormat = "Ym";

        $infos = $upload->upload();
//        var_dump($infos);die;

        $info=$upload->getUploadFileInfo();
        $fileossname=$savepath.$info[0]['savename'];//获取oss的保存路径

        if(!$infos){
            $mesg = $upload->getErrorMsg();
            $error = 2;
        }else{
            vendor('Alioss.autoload');
            $accessKeyId = "LTAI1MFNp22bfnNS";
            $accessKeySecret = "3VT0MCIDYZezG7ZlTRrPHv6kK0IfKI";
            $endpoint = "http://oss-cn-shanghai.aliyuncs.com";
//            $endpoint = "vpc100-oss-cn-hangzhou.aliyuncs.com";
            $bucket = "dcyd";
            $ossClient = new \OSS\OssClient($accessKeyId,$accessKeySecret,$endpoint);
            $object = date('Y-m-d').'/'.$infos[0]['savename'];
            $ossClient->uploadFile($bucket, $fileossname,$fileossname );//上传到OSS
//            $ossClient->uploadFile($bucket, $object,$savepath );
//            $info = $upload -> getUploadFileInfo();// 上传成功 获取上传文件信息
//            var_dump($info);die;
            $filename = $info[0]['savename'];
//            $names = explode('/',$filename );
//            $object = $names[1];
//            $ossClient->uploadFile($bucket, $savepath,$savepath );
            $fujianurl = substr($info[0]['savepath'].$filename,2 );

            $data['img'] = $fujianurl;
        }
        $result = $boss->where('id='.$_GET['id'])->save($data);

        if($result !== false){
            $result = array(
                'success' =>true,
                'msg' =>'已保存图片',
            );
        }else{
            $result = array(
                'success' =>false,
                'msg' =>'保存失败'
            );
        }
        echo json_encode($result);
    }






    //    视频
    public function upview(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $boss = M('boss');
            $res = $boss->field("id,view")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }

    public function viewsave(){
        $boss = M("boss");
        $app_view = $_FILES['view'];
        $wide_height = getimagesize($app_view);
        $IMG_DIR = "../Public/upload";
        $path = "view";
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('avi','mpg','wmv','mp3','mp4','AVI','MPG','WMV','MP3','MP4');
        $upload ->savePath = $savepath;
        $upload ->saveRule = uniqid;
        $upload ->uploadReplace = true;
        $upload ->autoSub = true;
        $upload ->subType = date;
        $upload ->dataFormat = "Ym";

        if(!$upload->upload()){
            $mesg = $upload->getErrorMsg();
            $error = 2;
        }else{
            $info = $upload -> getUploadFileInfo();
            $filename = $info[0]['savename'];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['view'] = $fujianurl;
        }
        $result = $boss->where('id='.$_GET['id'])->save($data);

        if($result !== false){
            $result = array(
                'success' =>true,
                'msg' =>'已保存视频',
            );
        }else{
            $result = array(
                'success' =>false,
                'msg' =>'保存失败'
            );
        }
        echo json_encode($result);
    }



    //boss听增加
    public function bossadd(){
        $boss = M("boss");

        $data = $boss->create();
        $data['title'] = $this->_post("title");
        $data['content'] = $this->_post("content");
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

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;
        }

        $result = $boss->add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success' =>false,
                'msg'=>$boss->getError()
            );
        }
        echo json_encode($result);
    }

    //boss听的修改显示数据
    public function bossedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $boss = M('boss');
            $res = $boss->field("id,title,content,url,img")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }

    //boss听的修改
    public function bosssave(){
        $boss = M("boss");
        $data['title'] = $this->_post('title');
        $data['content'] = $this->_post('content');
        $data['url'] = $this->_post('url');
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = '../Public/upload';
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
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

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;

        }
        $result = $boss->where('id='.$_GET['id'])->save($data);

        if($result !==false){
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

    //boss听的删除
    public function bossdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $boss = M("boss");
            $rest =$boss->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$boss->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    public function bwbd(){
        $this->display();
    }

    //百问百答
    public function bwbdlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');
        if ($_POST['img'] != "") $map['img'] = $_POST['img'];

        $boss = M("bwbd");
        $list = $boss->field("id,title,content,img,url")->where($map)->page($page.','.$rows)->select();
        $total = $boss->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    //百问百答添加
    public function bwbdadd(){
        $bwbd = M("bwbd");
        $data = $bwbd->create();
        $data['title'] = $this->_post('title');
        $data['content'] = $this->_post('content');
        $data['url'] = $this->_post('url');
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = "image";
        $save_path = $IMG_DIR.'/'.$path.'/';

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize = 8145728;
        $upload->allowExts = array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF','avi','mpg','wmv','mp3','mp4','AVI','MPG','WMV','MP3','MP4');
        $upload->savePath = $save_path;
        $upload->saveRule = uniqid;
        $upload->uploadReplace = true;
        $upload->autoSub = true;
        $upload->subType = date;
        $upload->dataFormat = 'Ym';
        if(!$upload->upload()){
            $mesg = $upload->getMessage();
            $error = 2;
        }else{
            $info = $upload -> getUploadFileInfo();
            $filename = $info[0]['savename'];
            $fujianurl = substr($info[0]['savepath'].$filename,2);
            $data['img'] = $fujianurl;

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;
        }
        $result = $bwbd->add($data);
        if($result != null){
            $result = array(
                'success' => true,
                'msg' => '增加成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg' => $bwbd->getError()
            );
        }
        echo json_encode($result);
    }

    //百问百答的修改显示数据
    public function bwbdedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $bwbd = M('bwbd');
            $res = $bwbd->field("id,title,content,url,img")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }

    //百问百答的修改
    public function bwbdsave(){
        $bwbd = M("bwbd");
        $data['title'] = $this->_post('title');
        $data['content'] = $this->_post('content');
        $data['url'] = $this->_post('url');
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = '../Public/upload';
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
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

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;

        }
        $result = $bwbd->where('id='.$_GET['id'])->save($data);

        if($result !==false){
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


    //百问百答的删除
    public function bwbddel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $bwbd = M("bwbd");
            $rest =$bwbd->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$bwbd->getError()
                );
            }
        }else{
            $rest = array(
                'success'=>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    /**
     * V课
     */
    public function vk(){
        $this->display();
    }

    public  function vklist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 :intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');

        $vk = M('vk');
        $list = $vk->field("id,title,content,img,url")->where($map)->page($page.','.$rows)->select();
        $total = $vk->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function vkadd(){
        $vk = M("vk");
        $data = $vk->create();
        $data['title'] = $this->_post('title');
        $data['content'] = $this->_post('content');
        $data['url'] = $this->_post('url');

        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = "image";
        $save_path = $IMG_DIR.'/'.$path.'/';

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->maxSize = 8145728;
        $upload->allowExts = array('jpg','png','jpeg','gif','JPG','PNG','JPEG','GIF','avi','mpg','wmv','mp3','mp4','AVI','MPG','WMV','MP3','MP4');
        $upload->savePath = $save_path;
        $upload->saveRule = uniqid;
        $upload->uploadReplace = true;
        $upload->autoSub = true;
        $upload->subType = date;
        $upload->dataFormat = 'Ym';
        if(!$upload->upload()){
            $mesg = $upload->getMessage();
            $error = 2;
        }else{
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]['savename'];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['img'] = $fujianurl;

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;
        }
        $result = $vk->add($data);
        if($result != null){
            $result = array(
                'success' => true,
                'msg' => '增加成功',
            );
        }else{
            $result = array(
                'success' => false,
                'msg' => $vk->getError()
            );
        }
        echo json_encode($result);
    }

    public function vkedit(){
        $id = $this->_post("id");
        if(!empty($id) && isset($id)){
            $vk = M('vk');
            $res = $vk->field("id,title,content,url,img")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }

    public function vksave(){
        $vk = M("vk");
        $data['title'] = $this->_post('title');
        $data['content'] = $this->_post('content');
        $data['url'] = $this->_post('url');

        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = '../Public/upload';
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
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

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['view'] = $fujianurl1;

        }
        $result = $vk->where('id='.$_GET['id'])->save($data);

        if($result !==false){
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

    public function vkdel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $vk = M("vk");
            $rest = $vk->where("id=".$id)->delete();
            if($rest !== false){
                $rest = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $rest = array(
                    'success'=>false,
                    'msg'=>$vk->getError()
                );
            }
        }else{
            $rest = array(
                'success' =>false,
                'msg'=>'id为空'
            );
        }
        echo json_encode($rest);
    }

    /*
     * 实例化阿里云OSS
     */
//    function new_oss(){
//        import('Vendor.Alioss.autoload');
//        $config = C('ALIOSS_CONFIG');
//        $oss = new \OSS\OssClient($config['KEY_ID'],$config['KEY_SECRET'] ,$config['END_POINT'] );
//        return $oss;
//    }

    /**
     * 上传文件到OSS并删除本地文件
     */
//    function oss_upload($path){
//        $bucket = C('ALIOSS_CONFIG.BUCKET');
//        $oss_path = ltrim($path,'./');
//        $path = './'.$oss_path;
//        if(file_exists($path)){
//            $oss = new_oss();
//            $oss->uploadFile($bucket,$oss_path,$path);
//            return true;
//        }
//        return false;
//    }
}
?>