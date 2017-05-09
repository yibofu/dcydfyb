<?php
class YuejtAction extends Action{
	
    public function index(){
        $this->display();
    }
    public function one(){
        $this->display();
    }

    public function add(){
        $yjt = M("yjt");
        $data = $yjt->create();
        $data['name'] = $this->_post("name");
        $data['phone'] = $this->_post("phone");
        $data['city'] = $this->_post("city");
        $data['desc'] = $this->_post("desc");
        $data['time'] = time();
        $list = $yjt->field("phone")->where("phone = ".$data['phone'])->select();
        if(!empty($list)){
            echo 1;
        }else{
            $result = $yjt->add($data);
            echo json_encode($result);
        }
    }
}
?>