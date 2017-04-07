<?php
class ReplyAction extends Action{
    public function one(){
        $this->display();
    }

    public function onelist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if ($_POST['ques'] != "") $map['ques'] = array('like','%'.$_POST['ques'].'%');
        if ($_POST['desc'] != "") $map['desc'] = array('like','%'.$_POST['desc'].'%');
        if($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);

        $lyk = M("lyk");
        $list = $lyk->field("id,name,phone,ques,desc,status,time")->where($map)->page($page.','.$rows)->select();
        $total = $lyk->where($map)->count();
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

    public function queren(){
        $id = $this->_post("id");
        $lyk = M("lyk");
        $ret['status'] = 2;
        $result = $lyk->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function quxiao(){
        $id = $this->_post("id");
        $lyk = M("lyk");
        $ret['status'] = 1;
        $result = $lyk->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function look(){
        $id = $this->_post("id");
        if(!empty($id) && isset($id)){
            $lyk = M("lyk");
            $res = $lyk->field("desc")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }
}
?>