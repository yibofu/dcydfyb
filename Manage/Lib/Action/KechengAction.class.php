<?php
class KechengAction extends Action{
    //税务稽查与应对策略
    public function arrangelist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;

        if ($_POST['id'] != "") $map['id'] = $_POST['id'];
        if ($_POST['tid'] != "") $map['tid'] = array('like','%'.$_POST['tid'].'%');
        if ($_POST['address'] != "") $map['address'] = array('like','%'.$_POST['address'].'%');
        if ($_POST['time'] != "") $map['time'] = array('like','%'.$_POST['time'].'%');
        if ($_POST['price'] != "") $map['price'] = array('like','%'.$_POST['price'].'%');
        $oc = M("open_course");
        $list = $oc->table("dcyd_open_course as a")
            ->join("dcyd_open_course_type as b on a.type=b.id")->join("dcyd_teacher as t on a.teacherid=t.id")
            ->field("a.id,a.address,a.startday,a.endday,a.type,a.teacherid,b.tname,b.cost,b.days,t.name")
            ->where($map)->page($page.','.$rows)->select();
        $total = $oc->table("dcyd_open_course as a")
            ->join("dcyd_open_course_type as b on a.type=b.id")->join("dcyd_teacher as t on a.teacherid=t.id")
            ->where($map)->count();
        foreach($list as &$val){
            $val['startday'] = date('Y-m-d',$val['startday']);
            $val['endday'] = date('Y-m-d',$val['endday']);
        }
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function arrange(){
        $teacher = M("teacher");
        $result = $teacher->field('id,name')->select();
        $oct = M("open_course_type");
        $re = $oct->field('id,tname,cost,days')->select();
        $this->assign("result",$result);
        $this->assign("re",$re);
        $this->display();
    }
    //税务稽查与应对策略添加
    public function arrangeadd(){
        $oc = M("open_course");
        $data = $oc->create();
        $data['address'] = $this->_post("address");
        $data['startday'] = $this->_post("startday");
        $data['startday'] = strtotime($data['startday']);
        $data['endday'] = $this->_post("endday");
        $data['endday'] = strtotime($data['endday']);
        $data['cost'] = $this->_post("cost");
        $data['teacherid'] = $this->_post("teacherid");
        $data['type'] = $this->_post("type");
        $ress = $oc->field('cost,days')->where("id = ".$data['type'])->find();
        $data['cost'] = $ress["cost"];
        $data['days'] = $ress["days"];
        $arr = $oc->add($data);
        if($arr != null){
            $arr = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $arr = array(
                'success'=>false,
                'msg'=>$oc->getError()
            );
        }
        echo json_encode($arr);
    }
    //税务稽查与应对策略消息删除
    public function arrangedel(){
        $id = $this->_post("id");
        if(!empty($id)){
            $oc = M("open_course");
            $result = $oc->where("id = ".$id)->delete();
            if($result !== false){
                $result = array(
                    'success'=>true,
                    'msg'=>'删除成功'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>'id为空'
                );
            }
            echo json_encode($result);
        }
    }


    //税务稽查与应对策略信息修改
    public function arrangeedit(){
        $id = $this->_post("id");
        if(!empty($id) && isset($id)){
            $oc = M("open_course");
            $res = $oc->field('id,type,teacherid,address,startday,endday')->where("id = ".$id)->find();
            $res['startday'] = date('Y-m-d',$res['startday']);
            $res['endday'] = date('Y-m-d',$res['endday']);
            echo json_encode($res);
        }
    }
    public function arrangesave(){
        $oc = M("open_course");
        $data = $oc->create();
        $data['address'] = $this->_post("address");
        $data['startday'] = $this->_post("startday");
        $data['endday'] = $this->_post("endday");
        $data['cost'] = $this->_post("cost");
        $data['teacherid'] = $this->_post("teacherid");
        $result = $oc->where("id = ".$_GET['id'])->save($data);
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
}
?>