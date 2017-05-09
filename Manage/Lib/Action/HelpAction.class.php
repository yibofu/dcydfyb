<?php
class HelpAction extends Action{
    //支付问题
    public function payqueslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;
        $zfques = M("zfques");
        $list = $zfques->field("id,question,status")->page($page.','.$rows)->select();
        $total = $zfques->count();
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function payquesadd(){
        $zfques = M("zfques");
        $data = $zfques->create();
        $data['question'] = $this->_post("question");
        $result = $zfques -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$zfques->getError()
            );
        }
        echo json_encode($result);
    }

    public function payquesshow(){
        $id = $this->_post("id");
        $zfques = M("zfques");
        $ret['status'] = '2';
        $result = $zfques->where("id=".$id)->save($ret);
        echo json_encode($result);
    }
    public function zfquesedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $zfques = M("zfques");
            $res = $zfques->field('id,question')->where("id=".$id)->find();
            $res['question'] = htmlspecialchars_decode($res['question']);
            echo json_encode($res);
        }
    }
    public function zfquessave(){
        $zfques = M("zfques");
        $data = $zfques->create();
        $data['question'] = $this->_post("question");
        $result = $zfques->where('id = '.$_GET['id'])->save($data);
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

    //发票问题
    public function billqueslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;
        $billques = M("billques");
        $list = $billques->field("id,question,status")->page($page.','.$rows)->select();
        $total = $billques->count();
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function billquesadd(){
        $billques = M("billques");
        $data = $billques->create();
        $data['question'] = $this->_post("question");
        $result = $billques -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$billques->getError()
            );
        }
        echo json_encode($result);
    }

    public function billquesshow(){
        $id = $this->_post("id");
        $billques = M("billques");
        $ret['status'] = '2';
        $result = $billques->where("id=".$id)->save($ret);
        echo json_encode($result);
    }
    public function billquesedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $billques = M("billques");
            $res = $billques->field('id,question')->where("id=".$id)->find();
            $res['question'] = htmlspecialchars_decode($res['question']);
            echo json_encode($res);
        }
    }
    public function billquessave(){
        $billques = M("billques");
        $data = $billques->create();
        $data['question'] = $this->_post("question");
        $result = $billques->where('id = '.$_GET['id'])->save($data);
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

    //账户问题
    public function zhqueslist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;
        $zhques = M("zhques");
        $list = $zhques->field("id,question,status")->page($page.','.$rows)->select();
        $total = $zhques->count();
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function zhquesadd(){
        $zhques = M("zhques");
        $data = $zhques->create();
        $data['question'] = $this->_post("question");
        $result = $zhques -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$zhques->getError()
            );
        }
        echo json_encode($result);
    }
    public function zhquesshow(){
        $id = $this->_post("id");
        $zhques = M("zhques");
        $ret['status'] = '2';
        $result = $zhques->where("id=".$id)->save($ret);
        echo json_encode($result);
    }
    public function zhquesedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $zhques = M("zhques");
            $res = $zhques->field('id,question')->where("id=".$id)->find();
            $res['question'] = htmlspecialchars_decode($res['question']);
            echo json_encode($res);
        }
    }
    public function zhquessave(){
        $zhques = M("zhques");
        $data = $zhques->create();
        $data['question'] = $this->_post("question");
        $result = $zhques->where('id = '.$_GET['id'])->save($data);
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
    //定制服务
    public function customlist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) == 0 ? 20 : intval($_POST['rows']) : 20;
        $custom = M("custom");
        $list = $custom->field("id,question,status")->page($page.','.$rows)->select();
        $total = $custom->count();
        $result = array(
            'total' => $total,
            'rows' =>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }
    public function customadd(){
        $custom = M("custom");
        $data = $custom->create();
        $data['question'] = $this->_post("question");
        $result = $custom -> add($data);
        if($result != null){
            $result = array(
                'success'=>true,
                'msg'=>'新增成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$custom->getError()
            );
        }
        echo json_encode($result);
    }
    public function customshow(){
        $id = $this->_post("id");
        $custom = M("custom");
        $ret['status'] = '2';
        $result = $custom->where("id=".$id)->save($ret);
        echo json_encode($result);
    }
    public function customedit(){
        $id = $this->_post('id');
        if(!empty($id) && isset($id)){
            $custom = M("custom");
            $res = $custom->field('id,question')->where("id=".$id)->find();
            $res['question'] = htmlspecialchars_decode($res['question']);
            echo json_encode($res);
        }
    }
    public function customsave(){
        $custom = M("custom");
        $data = $custom->create();
        $data['question'] = $this->_post("question");
        $result = $custom->where('id = '.$_GET['id'])->save($data);
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