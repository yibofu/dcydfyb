<?php
class RegisterAction extends Action{
    public function doorway(){
        $this->display();
    }
    public function welcomeTwo(){
        $this->display();
    }
    public function vipRegister(){
        $this->display();
    }

    //验证手机号是否已经注册
    public function check_phone(){
        $phone = $this->_get("phones");
        $user = M("user");
        $id = $user->where("phone=".$phone)->getField("id");
        if(empty($id)){
            $result = array(
                'error'=>true,
                'msg'=>"号码还没有被使用"
            );
        }else{
            $result = array(
                'error'=>false,
                'msg'=>'号码已经被注册过'
            );
        }
        echo json_encode($result);
    }

    //注册信息
    public function check(){
        $phone = $this->_post("Phone");
        $yanzheng = $this->_post("yanzheng");
        $code = $_SESSION['forget'.$phone];
        if($yanzheng != $code){
            $result = array(
                'error' => 2,
                'msg' => '验证码填写有误'
            );
        }else{
            $user = M("user");
            $data = $user->create();
            $data["Phone"] = $this->_post("Phone");
            $data["password"] = $this->_post("password");
            $data["password"] = 'dc'.$data["password"].'yd';
            $data["password"] = md5($data["password"]);
            $data["password"] = substr($data["password"],5,30);
            $data["ctime"] = time();
            $data["ltime"] = time();
            $data["IPadd"] = get_client_ip();
            $result = $user->add($data);
            if($result){
                $result = array(
                    'error' => true,
                    'msg' => '注册成功,您可以去个人中心完善个人信息'
                );
                $rows = $user->field("id")->where("Phone=".$data["Phone"])->find();
                $id = $rows["id"];
                $_SESSION['rigister']['id'] = $rows['id'];
            }else{
                $result = array(
                    'error' => false,
                    'msg' => '注册失败'
                );
            }
        }
        echo json_encode($result);
    }


}
?>