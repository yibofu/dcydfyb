<?php
class QuestionAction extends Action{

    public function index(){
        $this->display();
    }

    public function make(){
        $this->display();
    }

    public function cwzd(){
        $hid = $this->_post("hid");

        if($hid == "cwzd"){
            $cwzd = M("cwzd");
            $data = $cwzd->create();
            $data['name'] = $this->_post("user");
            $data['phone'] = $this->_post("phone");
            $data['time'] = strtotime($this->_post("test"));
            $list = $cwzd->field("phone")->where("phone = ".$data['phone'])->select();
            if(!empty($list)){
                echo 1;
            }else{
                $result = $cwzd->add($data);
                echo json_encode($result);
            }
        }

        if($hid == "sht"){
            $sht = M("sht");
            $data = $sht->create();
            $data['name'] = $this->_post("user");
            $data['phone'] = $this->_post("phone");
            $data['time'] = strtotime($this->_post("test"));
            $list = $sht->field("phone")->where("phone = ".$data['phone'])->select();
            if(!empty($list)){
                echo 1;
            }else{
                $result = $sht->add($data);
                echo json_encode($result);
            }
        }

        if($hid == "sbb"){
            $sbb = M("sbb");
            $data = $sbb->create();
            $data['name'] = $this->_post("user");
            $data['phone'] = $this->_post("phone");
            $data['time'] = strtotime($this->_post("test"));
            $list = $sbb->field("phone")->where("phone = ".$data['phone'])->select();
            if(!empty($list)){
                echo 1;
            }else{
                $result = $sbb->add($data);
                echo json_encode($result);
            }
        }

        if($hid == "mianshi"){
            $mianshi = M("mianshi");
            $data = $mianshi->create();
            $data['name'] = $this->_post("user");
            $data['phone'] = $this->_post("phone");
            $data['time'] = strtotime($this->_post("test"));
            $list = $mianshi->field("phone")->where("phone = ".$data['phone'])->select();
            if(!empty($list)){
                echo 1;
            }else{
                $result = $mianshi->add($data);
                echo json_encode($result);
            }
        }
    }
}
?>