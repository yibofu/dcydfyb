<?php
class UpAction extends Action{
    public function index(){
        $this->display();
    }

    public function detail(){
        $this->display();
    }

//    修改直播图片
    public function upimg(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $video = M("video");
            $result = $video->field("id,img")->where('id = '.$id)->find();
            echo json_encode($result);
        }
    }

//    保存修改的直播图片
    public function imgsave(){
        $video = M("video");
        $data = $video->create();
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['img'] = $fujianurl;
        }
        $result = $video->where('id = '.$_GET['id'])->save($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

//    老师图片修改
    public function upimgt(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $video = M("video");
            $result = $video->field("id,teacherimg")->where('id = '.$id)->find();
            echo json_encode($result);
        }
    }
    public function saveimgt(){
        $video = M("video");
        $data = $video->create();
        $app_img = $_FILES['teacherimg'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['teacherimg'] = $fujianurl;
        }
        $result = $video->where('id = '.$_GET['id'])->save($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function uploads(){
        $view = M("view");
        $data = $view->create();
        $data['url'] = $this->_post("src");
        $data['title'] = $this->_post("title");

        $result = $view->add($data);
        if($result){
            $result = array(
                'success' => true,
                'msg' => "获取成功"
            );
        }
        echo json_encode($result);
    }

    public function details(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['ytime'] != "") $map['ytime'] = array('like','%'.$_POST['ytime'].'%');

        $video = M("video");
        $list = $video->field("id,url,title,name,money,introduce,explain,comment,chapter,img,ytime,chapternum,teacherimg,kind")->where($map)->page($page.','.$rows)->select();
        $total = $video->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function detailedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $video = M("video");
            $result = $video->field("id,url,title,name,money,introduce,explain,comment,chapter,img,ytime,chapternum,teacherimg,kind")->where("id = ".$id)->find();
            echo json_encode($result);
        }
    }

    public function detailsave(){
        $video = M("video");
        $data = $video->create();
        $data["url"] = $this->_post("url");
        $data["title"] = $this->_post("title");
        $data["name"] = $this->_post("name");
        $data["money"] = $this->_post("money");
        $data["introduce"] = $this->_post("introduce");
        $data["explain"] = $this->_post("explain");
        $data["comment"] = $this->_post("comment");
        $data["chapter"] = $this->_post("chapter");
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['img'] = $fujianurl;

            $filename1 = $info[1]['savename'];
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['teacherimg'] = $fujianurl1;
        }
        $data["kind"] = $this->_post("kind");
        $data["chapternum"] = $this->_post("chapternum");
        $data["ytime"] = $this->_post("ytime");
        $result = $video->where('id = '.$_GET['id'])->save($data);

        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function kind(){
        $this->display();
    }

    public function kindls(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['ytime'] != "") $map['ytime'] = array('like','%'.$_POST['ytime'].'%');

        $video = M("viewkinds");
        $list = $video->field("id,kind")->where($map)->page($page.','.$rows)->select();
        $total = $video->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

//    视频种类添加
    public function kindadd(){
        $kind = M("viewkinds");
        $data = $kind->create();
        $data['kind'] = $this->_post("kind");
        $result = $kind->add($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '增加成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'增加失败'
            );
        }
        echo json_encode($result);

    }

    public function kindedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $kind = M("viewkinds");
            $result = $kind->field("id,kind")->where("id = ".$id)->find();
            echo json_encode($result);
        }
    }

    public function kindsave(){
        $kind = M("viewkinds");
        $data = $kind->create();
        $data["kind"] = $this->_post("kind");
        $app_img = $_FILES['kimg'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['kimg'] = $fujianurl;
        }
//        $data["name"] = $this->_post("name");
        $result = $kind->where('id = '.$_GET['id'])->save($data);

        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function vede(){
        $kind = M("viewkinds");

        $teacher = M("teacher");

        $viewclass = M("viewclass");

        $re = $kind->distinct(true)->field('id,kind')->select();

        $ree = $teacher->distinct(true)->field('id,name')->select();

        $ras = $viewclass->distinct(true)->field('id,zname')->select();

        $this->assign("re",$re);

        $this->assign("ree",$ree);
        
        $this->assign("ras",$ras);
        
        $this->display();
    }

    public function vedels(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['ytime'] != "") $map['ytime'] = array('like','%'.$_POST['ytime'].'%');

        $view = M("view");
        $list = $view->field("id,kid,zid,kname,zname,name,url,title,money,introduce,chapternum,kctitle,img,isrecommend")->where($map)->page($page.','.$rows)->select();
        $total = $view->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function shows(){
        $id = $this->_post("id");
        $view = M("view");
        $ret['isrecommend'] = '1';
        $result = $view->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function deshow(){
        $id = $this->_post("id");
        $view = M("view");
        $ret['isrecommend'] = '0';
        $result = $view->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function vedeedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $view = M("view");
            $result = $view->field("id,kid,kname,zname,name,url,title,money,introduce,chapternum,kctitle,img")->where("id = ".$id)->find();
            echo json_encode($result);
        }
    }

    public function vedesave(){
        $view = M("view");
        $data = $view->create();
        $data["kid"] = $this->_post("kname");
        $viewkinds = M("viewkinds");
        $res = $viewkinds->field('kind')->where("id = ".$data["kid"])->find();
        $data["kname"] = $res["kind"];
        $data["name"] = $this->_post("name");

        $viewclass = M("viewclass");
        $data["zid"] = $this->_post("zname");
        $ressa = $viewclass->field('zname')->where("id = ".$data["zid"])->find();
        $data["zname"] = $ressa["zname"];
//        $data["name"] = $this->_post("name");

        $teacher = M("teacher");
        $ress = $teacher->field('name')->where("id = ".$data["name"])->find();
        $data["name"] = $ress["name"];
        $data["title"] = $this->_post("title");
        $data["money"] = $this->_post("money");
        $data["introduce"] = $this->_post("introduce");
        $data["chapternum"] = $this->_post("chapternum");
        $data["kctitle"] = $this->_post("kctitle");
        $app_img = $_FILES['img'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $data['img'] = $fujianurl;
        }
        $result = $view->where('id = '.$_GET['id'])->save($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function teacher(){
        $kind = M("viewkinds");
        $ree = $kind->distinct(true)->field('id,name')->select();
        $this->assign("ree",$ree);
        $this->display();
    }

    public function teacherls(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['ytime'] != "") $map['ytime'] = array('like','%'.$_POST['ytime'].'%');

        $teacher = M("teacher");
        $list = $teacher->field("id,name,timg,explain,traders,limg")->where($map)->page($page.','.$rows)->select();
        $total = $teacher->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function teacheradd(){
        $teacher = M("teacher");
        $data = $teacher->create();
        $data["name"] = $this->_post("name");
        $data['explain'] = $this->_post("explain");
        $data['traders'] = $this->_post("traders");

        $app_img = $_FILES['timg'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $filename1 = $info[1]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['timg'] = $fujianurl;
            $data['limg'] = $fujianurl1;
        }
        $result = $teacher->add($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '增加成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'增加失败'
            );
        }
        echo json_encode($result);
    }

    public function teacheredit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $teacher = M("teacher");
            $result = $teacher->field('id,name,explain,traders,timg,limg')->where("id = ".$id)->find();
            $result['explain'] = htmlspecialchars_decode($result['explain']);
            echo json_encode($result);
        }
    }

    public function teachersave(){
        $teacher = M("teacher");
        $data = $teacher->create();
        $data["name"] = $this->_post("name");
        $data["explain"] = $this->_post("explain");
        $data['traders'] = $this->_post("traders");
        $app_img = $_FILES['timg'];
        $wide_height = getimagesize($app_img);
        $IMG_DIR = "../Public/upload";
        $path = 'image';
        $savepath = $IMG_DIR.'/'.$path.'/';
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload ->maxSize = 8145728;
        $upload ->allowExts = array('jpg','gif','png','jpeg','JPG','GIF','PNG','JPEG');
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
            $info = $upload->getUploadFileInfo();
            $filename = $info[0]["savename"];
            $filename1 = $info[1]["savename"];
            $fujianurl = substr($info[0]['savepath'].$filename,2 );
            $fujianurl1 = substr($info[1]['savepath'].$filename1,2);
            $data['timg'] = $fujianurl;
            $data['limg'] = $fujianurl1;
        }

        $result = $teacher->where('id = '.$_GET['id'])->save($data);

        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }

    public function viewclass(){
        $kind = M("viewkinds");
        $result = $kind->distinct(true)->field('id,kind')->select();

        $viewclass = M("viewclass");
        $resul = $viewclass->distinct(true)->field('id,zname')->select();
        $this->assign("result",$result);
        $this->assign("resul",$resul);
        $this->display();
    }

    public function viewclassls(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['fname'] != "") $map['fname'] = array('like','%'.$_POST['fname'].'%');
        if ($_POST['zname'] != "") $map['zname'] = array('like','%'.$_POST['zname'].'%');
        $viewclass = M("viewclass");
        $list = $viewclass->field("id,vid,fname,zname")->where($map)->page($page.','.$rows)->select();
        $total = $viewclass->where($map)->count();

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function viewclassadd(){
        $viewclass = M("viewclass");
        $data = $viewclass->create();
        $data['fname'] = $this->_post("fname");
        $id = $data["fname"];
        $view = M("viewkinds");
        $resu = $view->distinct(true)->field('id,kind')->where("id = ".$id)->find();
        $data['fname'] = $resu["kind"];
        $data['vid'] = $resu["id"];
        $data['zname'] = $this->_post("zname");
        $res = $viewclass->add($data);
        if($res !== false){
            $res = array(
                'success'=>true,
                'msg'=> '增加成功'
            );
        }else{
            $res = array(
                'success'=>false,
                'msg'=>'增加失败'
            );
        }
        echo json_encode($res);
    }

    public function viewclassedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $viewclass = M("viewclass");
            $result = $viewclass->field("id,fname,zname")->where("id = ".$id)->find();
            echo json_encode($result);
        }
    }

    public function viewclasssave(){
        $viewclass = M("viewclass");
        $data = $viewclass->create();
        $data['fname'] = $this->_post("fname");
        $id = $data["fname"];
        $view = M("viewkinds");
        $resu = $view->distinct(true)->field('id,kind')->where("id = ".$id)->find();
        $data['fname'] = $resu["kind"];
        $data['vid'] = $resu["id"];
        $data["zname"] = $this->_post("zname");
        $result = $viewclass->where('id = '.$_GET['id'])->save($data);
        if($result !== false){
            $result = array(
                'success'=>true,
                'msg'=> '修改成功'
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'修改失败'
            );
        }
        echo json_encode($result);
    }
}
?>