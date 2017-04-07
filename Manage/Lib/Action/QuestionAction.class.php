<?php
class QuestionAction extends Action{
    public function cwzd(){
        $this->display();
    }
    public function cwzdlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);
        if(!empty($_POST['time'])){
            $time = strtotime($_POST['time']);

            $map["time"] = $time;
        }
        if ($_POST['time'] != "") $map['time'] = $_POST['time'];

        $cwzd = M("cwzd");
        $list = $cwzd->field("id,name,phone,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $cwzd->where($map)->count();
        foreach($list as &$val){
            $val['time']= date('Y-m-d H:i:s',$val['time']);
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
        $cwzd = M("cwzd");
        $ret['status'] = 2;
        $result = $cwzd->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function show1(){
        $id = $this->_post("id");
        $cwzd = M("cwzd");
        $ret['status'] = 1;
        $result = $cwzd->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function mianshilist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);
        if(!empty($_POST['time'])){
            $time = strtotime($_POST['time']);

            $map["time"] = $time;
        }
        if ($_POST['time'] != "") $map['time'] = $_POST['time'];

        $mianshi = M("mianshi");
        $list = $mianshi->field("id,name,phone,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $mianshi->where($map)->count();
        foreach($list as &$val){
            $val['time']= date('Y-m-d H:i:s',$val['time']);
        }

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function mianshishow(){
        $id = $this->_post("id");
        $mianshi = M("mianshi");
        $ret['status'] = 2;
        $result = $mianshi->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function mianshishow1(){
        $id = $this->_post("id");
        $mianshi = M("mianshi");
        $ret['status'] = 1;
        $result = $mianshi->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function shtlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);
        if(!empty($_POST['time'])){
            $time = strtotime($_POST['time']);

            $map["time"] = $time;
        }
        if ($_POST['time'] != "") $map['time'] = $_POST['time'];

        $sht = M("sht");
        $list = $sht->field("id,name,phone,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $sht->where($map)->count();
        foreach($list as &$val){
            $val['time']= date('Y-m-d H:i:s',$val['time']);
        }

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function shtshow(){
        $id = $this->_post("id");
        $sht = M("sht");
        $ret['status'] = 2;
        $result = $sht->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function shtshow1(){
        $id = $this->_post("id");
        $sht = M("sht");
        $ret['status'] = 1;
        $result = $sht->where("id=".$id)->save($ret);
        echo json_encode($result);
    }





    public function sbblist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['name'] != "") $map['name'] = array('like','%'.$_POST['name'].'%');
        if ($_POST['phone'] != "") $map['phone'] = array('like','%'.$_POST['phone'].'%');
        if($_POST['status'] != '') $map['status'] = array('eq',$_POST['status']);
        if(!empty($_POST['time'])){
            $time = strtotime($_POST['time']);

            $map["time"] = $time;
        }
        if ($_POST['time'] != "") $map['time'] = $_POST['time'];

        $sbb = M("sbb");
        $list = $sbb->field("id,name,phone,time,status")->where($map)->page($page.','.$rows)->select();
        $total = $sbb->where($map)->count();
        foreach($list as &$val){
            $val['time']= date('Y-m-d H:i:s',$val['time']);
        }

        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function sbbshow(){
        $id = $this->_post("id");
        $sbb = M("sbb");
        $ret['status'] = 2;
        $result = $sbb->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function sbbshow1(){
        $id = $this->_post("id");
        $sbb = M("sbb");
        $ret['status'] = 1;
        $result = $sbb->where("id=".$id)->save($ret);
        echo json_encode($result);
    }

    public function mianshi(){
        $this->display();
    }

    public function sbb(){
        $this->display();
    }

    public function sht(){
        $this->display();
    }
}

?>