<?php
class CodeAction extends Action{
    //主账号
    private $accountSid = '8aaf070859203efa01592a52bc1306e1';
    //主账号token
    private $accountToken = '5d6ce3f8ddb14c748c88d48a2e8517ea';
    //应用id
    private $appId='8a216da8594f29f8015952d9bc4d0133';
    //请求地址，格式如下，不需要写https://
    private $serverIP='app.cloopen.com';
    //请求端口
    private $serverPort='8883';
    //REST版本号
    private $softVersion='2013-12-26';
    //短信模板id
    //private $temp;
    //实例化发送短信类
    public function _initialize(){
        vendor('Sendmessage.CCPRestSDK');
    }
    // 发送验证码
    public function sendsms(){
        $mobile=$_POST['mobile'];
        $code = rand(10000,99999);
        session('register'.$mobile,$code,300);
        $time = 5;
        $arr = array($code,$time);
        $temp = '67083';
        $this->sendTemplateSMS($tel,$arr,$temp);
        $temp = '82912';
        $this->sendTemplateSMS($mobile,$arr,$temp);
        echo 1;
    }
    public function fpwd(){
         $mobile=$_POST['Phone'];
        $user = M("user");
        $id = $user->where("Phone=".$mobile)->getField("id");
        if($id){
            $result = array(
                'error'=>false,
                'msg'=>"号码已经被注册过",
            );
            echo json_encode($result);
        }else{
            $code = rand(100000,999999);
            session('forget'.$mobile,$code,60);
            session('forget'.$mobile);
            $tim = 60;
            $time = $tim ."秒";
            $arr = array($code,$time);
            $temp = '148264';
             $this->sendTemplateSMS($mobile,$arr,$temp);
                $result = array(
                    'error'=>true,
                    'msg'=>"短信发送成功",
                );
                echo json_encode($result);
            }
    }
//    public function fpwd(){
//        $mobile=$_POST['Phone'];
//        $user = M("user");
//        $id = $user->where("Phone=".$mobile)->getField("id");
//        if($id){
//            $result = array(
//                'error'=>false,
//                'msg'=>"号码已经被注册过",
//            );
//            echo json_encode($result);
//        }else{
//            $code = rand(100000,999999);
//            session('forget'.$mobile,$code,60);
//            session('forget'.$mobile);
//            $tim = 60;
//            $time = $tim ."秒";
//            $arr = array($code,$time);
//            $temp = '148264';
//            $obj=$this->sendTemplateSMS($mobile,$arr,$temp);
//            //解析 $obj 判断返回的状态 此处返回的状态需要根据文档解析
//            if($obj->success){
//                $result = array(
//                    'error'=>true,
//                    'msg'=>"短信发送成功",
//                );
//            }else{
//                $result = array(
//                    'error'=>false,
//                    'msg'=>"短信发送失败",
//                );
//            }
//            echo json_encode($result);
//        }
//
//    }

    private function sendTemplateSMS($to,$datas,$tempId){
        // 初始化REST SDK
        //global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
        $rest = new REST($this->serverIP,$this->serverPort,$this->softVersion);
        $rest->setAccount($this->accountSid,$this->accountToken);
        $rest->setAppId($this->appId);
        $result = $rest->sendTemplateSMS($to,$datas,$tempId);

         if($result == NULL ) {
            return "result error!";
        }
        if($result->statusCode!=0) {
            // echo "error code :" . $result->statusCode . "<br>";
            // echo "error msg :" . $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            // echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
             // $smsmessage = $result->TemplateSMS;
            // echo "dateCreated:".$smsmessage->dateCreated."<br/>";
            // echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
            //TODO 添加成功处理逻辑
        }
    }

}


?>