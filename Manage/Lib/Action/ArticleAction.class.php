<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 17:44
 */
class ArticleAction extends Action{
    public function index(){
        $this->display();
    }
    public function articlelist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['title'] != "") $map['title'] = array('like','%'.$_POST['title'].'%');
        if ($_POST['content'] != "") $map['content'] = array('like','%'.$_POST['content'].'%');
        if ($_POST['describe'] != "") $map['describe'] = array('like','%'.$_POST['describe'].'%');
        if ($_POST['keywords'] != "") $map['keywords'] = array('like','%'.$_POST['keywords'].'%');
        if ($_POST['auth'] != "") $map['auth'] = array('like','%'.$_POST['auth'].'%');
        if ($_POST['status'] != "") $map['status'] = array('eq',$_POST['status']);
        if ($_POST['lanmu'] != "") $map['lanmu'] = array('eq',$_POST['lanmu']);

        $article = M("article");
        $list = $article->field("id,title,keywords,lanmu,laiyuan,content,auth,describe,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $article->where($map)->count();

        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:s',$val['time']);
        }
        
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function articleadd(){
        $article = M("article");
        $data = $article->create();
        $data['title'] = $this->_post("title");
        $data['keywords'] = $this->_post("keywords");
        $data['lanmu'] = $this->_post("lanmu");
        $data['laiyuan'] = $this->_post("laiyuan");
        $data['content'] = $this->_post("content");
        $data['auth'] = $this->_post("auth");
        $data['describe'] = $this->_post("describe");
        $data['time'] = time();
        $result = $article -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$article->getError()
            );
        }
        echo json_encode($result);
    }

    public function show(){
        $id = $this->_post("id");
        $article = M("article");
        $ret['status'] = 2;
        $result = $article->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function articleedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $article = M('article');
            $res = $article->field("id,title,keywords,lanmu,laiyuan,describe,auth,content")->where("id=".$id)->find();
            $res['content'] = htmlspecialchars_decode($res['content']);
            echo json_encode($res);
        }
    }

    public function articlesave(){
        $article = M("article");
        $data = $article->create();
        $data['title'] = $this->_post("title");
        $data['keywords'] = $this->_post("keywords");
        $data['lanmu'] = $this->_post("lanmu");
        $data['laiyuan'] = $this->_post("laiyuan");
        $data['content'] = $this->_post("content");
        $data['auth'] = $this->_post("auth");
        $data['describe'] = $this->_post("describe");

        $result = $article->where('id = '.$_GET['id'])->save($data);
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

    public function articledel(){
        $id = $this->_post('id');
        if(!empty($id)){
            $article = M("article");
            $result = $article->where("id = " .$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$article->getError()
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