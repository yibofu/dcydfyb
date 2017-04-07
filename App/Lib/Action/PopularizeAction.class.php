<?php
class PopularizeAction extends Action{
    public function popularize(){
        $this->display();
    }

    public function check_phone(){
        $phonefree = $this->_get("phonefree");
        $popufree = M("popufree");
        $id = $popufree->where("phonefree=".$phonefree)->getField("id");
        if(!empty($id)){
            $result = array(
                'error'=>false,
                'msg' =>"您输入的号码已经被使用过"
            );
        }else{
            $result = array(
                'error'=>true,
                'msg' =>"可以使用"
            );
        }
        echo json_encode($result);
    }

    public function check_phones(){
        $phone = $this->_get("phone");
        $popuques = M("popuques");
        $id = $popuques->where("phone=".$phone)->getField("id");
        if(!empty($id)){
            $result = array(
                'error'=>false,
                'msg' =>"您输入的号码已经被使用过"
            );
        }else{
            $result = array(
                'error'=>true,
                'msg' =>"可以使用"
            );
        }
        echo json_encode($result);
    }

    public function freesend(){
        $popufree = M("popufree");
        $data = $popufree->create();
        $data['phonefree'] = $this->_post('phonefree');
        $data['namefree'] = $this->_post('namefree');
        $data['sexfree'] = $this->_post('sexfree');
        $data["time"] = time();
        $result = $popufree->add($data);
        if($result){
            $result = array(
                'success' => true,
                'msg' => "提交成功"
            );
        }
        echo json_encode($result);
    }

    public function subques(){
        $popuques = M("popuques");
        $data = $popuques->create();
        $data['question'] = $this->_post("question");
        $data['phone'] = $this->_post('phone');
        $data['name'] = $this->_post('name');
        $data['sex'] = $this->_post('sex');
        $data["time"] = time();
        $result = $popuques->add($data);
        if($result){
            $result = array(
                'success' => true,
                'msg' => "提交成功"
            );
        }
        echo json_encode($result);
    }
}
?>