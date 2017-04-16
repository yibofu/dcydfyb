<?php
class VipAction extends Action{
    public function vip(){
        $this->display();
    }
    public function viplist(){
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows'])? intval($_POST['rows'])==0 ? 20 : intval($_POST['rows']) : 20;
        $vip = M('vip');
        $list = $vip->field("id,price,znum,snum")->page($page.','.$rows)->select();
        $total = $vip->count();
        if(empty($list)){
            $list = array();
        }
        $result = array(
            'total'=>$total,
            'rows'=>$list,
        );
        if(!empty($result)){
            echo json_encode($result);
        }
    }

    public function vipadd(){
        $vip = M("vip");
        $data = $vip->create();
        $data['price'] = $this->_post("price");
        $data['znum'] = $this->_post("znum");
        $data['snum'] = $this->_post("snum");
        $result = $vip->add($data);
        if($result){
            $result = array(
                'success'=>true,
                'msg'=>'添加成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>$vip->getError()
            );
        }
        echo json_encode($result);
    }
    public function vipedit(){
        $id = $this->_post("id");
        if(!empty($id) && isset($id)){
            $vip = M("vip");
            $res = $vip->field('id,price,znum,snum')->where("id = ".$id)->find();
            echo json_encode($res);
        }
    }


    public function vipsave(){
        $vip = M("vip");
        $data = $vip->create();
        $data['price'] = $this->_post("price");
        $data['znum'] = $this->_post("znum");
        $data['snum'] = $this->_post("snum");
        $result = $vip->where("id = ".$_GET['id'])->save($data);

            if($result){
                $result = array(
                    'success'=>true,
                    'msg'=>'修改成功！'
                );
            }else{
                $result = array(
                    'success'=>false,
                    'msg'=>$vip->getError()
                );
            }
        echo json_encode($result);
        }



    public function vipdel(){
        $vip = M("vip");
        if($vip->delete($_POST['id'])){
            $result = array(
                'success'=>true,
                'msg'=>'删除成功',
            );
        }else{
            $result = array(
                'success'=>false,
                'msg'=>'删除失败',
            );
        }
        echo json_encode($result);
    }
}
?>