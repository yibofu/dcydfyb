<?php
class SendmessageAction extends Action{
	//主账号
	private $accountSid = 'aaf98f894f4fbec2014f6d5a2f38143b';
	//主账号token
	private $accountToken = 'c103ab262d1b4fdcb0d46a7ee39b22b7';
	//应用id
	private $appId='8a48b55151eb7d520151ed18901c059c';
	//请求地址，格式如下，不需要写https://
	private $serverIP='sandboxapp.cloopen.com';
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
	//注册验证码
	public function register_code($mobile){
		$code = rand(10000,99999);
		cookie('register'.$mobile,$code,300);
		$time = 5;
		$arr = array($code,$time);
		$temp = '59372';
		$this->sendTemplateSMS($mobile,$arr,$temp);
	}
	//重置密码验证码
	public function forgot_code($mobile){
	    //$mobile = $this->_get("mobile");
		$code = rand(10000,99999);
		cookie('forgot'.$mobile,$code,300);
		$time = 5;
		$temp = '59371';
		$arr = array($code,$time);
		$this->sendTemplateSMS($mobile,$arr,$temp);
	}
	//更改手机验证码
	public function change_tel($mobile){
		//$mobile = $this->_get("mobile");
		$code = rand(10000,99999);
		cookie('change_tel'.$mobile,$code,300);
		$time = 5;
		$arr = array($code,$time);
		$temp = '59372';
		$this->sendTemplateSMS($mobile,$arr,$temp);
	}
	private function sendTemplateSMS($to,$datas,$tempId){
		 // 初始化REST SDK
		 //global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
		 $rest = new REST($this->serverIP,$this->serverPort,$this->softVersion);
		 $rest->setAccount($this->accountSid,$this->accountToken);
		 $rest->setAppId($this->appId);
		 $result = $rest->sendTemplateSMS($to,$datas,$tempId);
		 /*
		  if($result == NULL ) {
			 return "result error!";
			 break;
		 }
		 if($result->statusCode!=0) {
			 echo "error code :" . $result->statusCode . "<br>";
			 echo "error msg :" . $result->statusMsg . "<br>";
			 //TODO 添加错误处理逻辑
		 }else{
			 echo "Sendind TemplateSMS success!<br/>";
			 // 获取返回信息
			  $smsmessage = $result->TemplateSMS;
			 echo "dateCreated:".$smsmessage->dateCreated."<br/>";
			 echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
			 //TODO 添加成功处理逻辑
		 } 
		 */
	}
}
?>