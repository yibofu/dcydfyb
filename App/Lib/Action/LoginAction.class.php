<?php
class LoginAction extends Action{
    public function loginPage(){
        $this->display();
    }
    public function findpassword(){
        $this->display();
    }
    public function login(){
        $user = M("user");
        $Phone = $_POST["Phone"];
        $pwd = $_POST["password"];
        $pwd = 'dc' . $pwd . 'yd';
        $pwd = md5($pwd);
        $pwd = substr($pwd, 5, 30);
        $map['Phone'] = array('eq', $Phone);
        $map['password'] = array('eq', $pwd);
        $row = $user->field("id,Phone,password,nickname")->where($map)->find();
        $_SESSION['admins']['id'] = $row['id'];
        $_SESSION['admins']['Phone'] = $row['Phone'];
        $_SESSION['admins']['nickname'] = $row['nickname'];
        if ($row) {
            $data['ltimes'] = time();
            $data['IPadd'] = get_client_ip();
            $data['id'] = $row['id'];
            $save = $user->save($data);
            if ($save) {
                $result = array(
                    'error' => true,
                    'msg' => '登录成功',
                );
            } else {
                $result = array(
                    'error' => false,
                    'msg' => '登录失败，请重新登陆'
                );
            }
        }
        echo json_encode($result);
    }
}
?>