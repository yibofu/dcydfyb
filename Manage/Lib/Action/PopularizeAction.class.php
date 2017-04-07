<?php
class PopularizeAction extends Action{
    public function index(){
        $this->display();
    }

    //免费提问的
    public function freelist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['namefree'] != "") $map['namefree'] = array('like','%'.$_POST['namefree'].'%');
        if ($_POST['phonefree'] != "") $map['phonefree'] = array('like','%'.$_POST['phonefree'].'%');

        $popufree = M("popufree");
        $list = $popufree->field("id,phonefree,namefree,sexfree,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $popufree->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

   public function show(){
       $id = $this->_post("id");
       $popufree = M("popufree");
       $ret['status'] = 2;
       $result = $popufree->where("id = ".$id)->save($ret);
       echo json_encode($result);
   }

    public function shows(){
        $id = $this->_post("id");
        $popuques = M("popuques");
        $ret['status'] = 2;
        $result = $popuques->where("id = ".$id)->save($ret);
        echo json_encode($result);
    }

    //问题
    public function questionlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');

        $popuques = M("popuques");
        $list = $popuques->field("id,phone,name,sex,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $popuques->where($map)->count();
        foreach($list as &$val){
            $val['time'] = date('Y-m-d H:i:m',$val['time']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function popufreedel(){
        $id = $this->_post('id');
        if(!empty($id)){
            $popufree = M("popufree");
            $result = $popufree->where("id = " .$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$popufree->getError()
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


    public function popuquesdel(){
        $id = $this->_post('id');
        if(!empty($id)){
            $popuques = M("popuques");
            $result = $popuques->where("id = " .$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$popuques->getError()
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
?>