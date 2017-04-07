<?php
class  YuejtAction extends Action{
    public function one(){
        $this->display();
    }

    public function onelist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if ($_POST['city'] != "") $map['city'] = array('like','%'.$_POST['city'].'%');
        if ($_POST['desc'] != "") $map['desc'] = array('like','%'.$_POST['desc'].'%');
        if ($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);

        $yjt = M("yjt");
        $list = $yjt->field("id,name,phone,city,desc,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $yjt->where($map)->count();
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
        $yjt = M("yjt");
        $ret['status'] = 2;
        $result = $yjt->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function quxiao(){
        $id = $this->_post("id");
        $yjt = M("yjt");
        $ret['status'] = 1;
        $result = $yjt->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function look(){
        $id = $this->_post("id");
        if(!empty($id) && isset($id)){
            $yjt = M("yjt");
            $res = $yjt->field("desc")->where("id=".$id)->find();
            echo json_encode($res);
        }
    }
}
?>