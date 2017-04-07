<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/13
 * Time: 19:09
 */
class ReplyAction extends Action{
    public function index(){
        $this->display();
    }

    public function one(){
        $this->display();
    }

    public function ones(){
        $lyk = M('lyk');

        $data = $lyk->create();
        $data['name'] = $this->_post('name');
        $data['phone'] = $this->_post('phone');
        $data['ques'] = $this->_post('ques');
        $data['desc'] = $this->_post('desc');
        $data['time'] = time();
        $list = $lyk->field("phone")->where("phone = ".$data['phone'])->select();
        if(!empty($list)){
            echo 1;
        }else{
            $result = $lyk->add($data);
            echo json_encode($result);
        }
    }
}