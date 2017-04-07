<?php
class PersonalAction extends Action{
    public function index(){
        $this->display();
    }
    public function collect(){
        $this->display();
    }
    public function forget(){
        $this->display();
    }
    public function medical(){
        $this->display();
    }
    public function news(){
        $this->display();
    }
    public function quiz(){
        $this->display();
    }
    public function rigister(){
        $this->display();
    }
    public function true(){
        $id = $_SESSION['rigister']['id'];
        $user = M('user');
        $res = $user->field("Phone")->where("id = ".$id)->find();
        $Phone = $res["Phone"];
        $this->assign("Phone",$Phone);
        $this->display();
    }
    public function personal(){
        $id = $_SESSION['admin']['id'];
        $user = M('user');
        $res = $user->field("name,firmname,position,industry,address,Phone,wechat")->where("id = ".$id)->find();
        $name = $res["name"];
        $firmname = $res["firmname"];
        $position = $res["position"];
        $industry = $res["industry"];
        $address = $res["address"];
        $Phone = $res["Phone"];
        $wechat = $res["wechat"];
        $this->assign("name",$name);
        $this->assign("firmname",$firmname);
        $this->assign("position",$position);
        $this->assign("industry",$industry);
        $this->assign("address",$address);
        $this->assign("Phone",$Phone);
        $this->assign("wechat",$wechat);
        $this->display();
    }
    public function yueding(){
        $this->display();
    }
    public function center(){
        $this->display();
    }

//    public function check_msg(){
//        $phone = $this->_post("Phone");
//        $yanzheng = $this->_post("yanzheng");
//        $code = $_SESSION['forget'.$phone];
//        if($yanzheng != $code){
//            $result = array('error'=>false,'msg'=>'验证码不正确');
//        }else{
//            $result = array('error'=>true,'msg'=>'验证码正确');
//        }
//        echo json_encode($result);
//    }

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

    //验证手机号是否已经注册
    public function check_phone(){
        $phone = $this->_get("Phone");
        $user = M("user");
        $id = $user->where("Phone=".$phone)->getField("id");
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
    
    
    public function login(){
        $user = M("user");
        $Phone = $_POST["Phone"];
        $pwd = $_POST['password'];
        $pwd = 'dc'.$pwd.'yd';
        $pwd = md5($pwd);
        $pwd = substr($pwd,5,30);
        $map['Phone'] = array('eq',$Phone);
        $map['pwd'] = array('eq',$pwd);
        $row = $user->field("id,Phone,password")->where($map)->find();
        $_SESSION['admin']['id'] = $row['id'];
        $_SESSION['admin']['Phone'] = $row['Phone'];
        $_SESSION['admin']['password'] = $row['pwd'];
        if($row){
            $data['ltimes'] = time();
            $data['IPadd'] = get_client_ip();
            $data['id'] = $row['id'];
            $save = $user->save($data);
            if($save){
                $result = array(
                    'error' => true,
                    'msg' => '登录成功',
                );
            }else{
                $result = array(
                    'error' => false,
                    'msg' => '登录失败，请重新登陆'
                );
            }
        }
        echo json_encode($result);
    }

    public function sub(){
        $id = $_SESSION['rigister']['id'];
        $user = M("user");
        $data = $user->create();
        $data['name'] = $this->_post('name');
        $data['firmname'] = $this->_post('firmname');
        $data['position'] = $this->_post('position');
        $data['industry'] = $this->_post('industry');
        $data['address'] = $this->_post('address');
        $data['Phone'] = $this->_post('Phone');
        $data['wechat'] = $this->_post('wechat');

        $result = $user->where("id = ".$id)->save($data);
        if($result != null){
            $result = array(
                'success' => true,
                'msg' => '信息保存成功',
            );
        }else{
            $result = array(
                'success' => false,
                'msg' => $user->getError()
            );
        }
        echo json_encode($result);
    }
}
?>