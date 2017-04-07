<?php
require_once("../loader.php");

$data = array();
$appSecret = APP_SECRET;
$data["app_id"] = APP_ID;
$data["timestamp"] = time() * 1000;
$data["app_sign"] = md5($data["app_id"] . $data["timestamp"] . $appSecret);
//total_fee(int 类型) 单位分
$data["total_fee"] = 1;
$data["bill_no"] = "bcdemo" . $data["timestamp"];
//title UTF8编码格式，32个字节内，最长支持16个汉字
$data["title"] = 'PHP '.$_GET['type'].'支付测试';
//渠道类型:ALI_WEB 或 ALI_QRCODE 或 UN_WEB或JD_WAP或JD_WEB时为必填
$data["return_url"] = "https://beecloud.cn";
//选填 optional
$data["optional"] = (object)array("tag"=>"msgtoreturn");
//选填 订单失效时间bill_timeout
//必须为非零正整数，单位为秒，建议最短失效时间间隔必须大于360秒
//京东(JD*)不支持该参数。
//$data["bill_timeout"] = 360;
$data["channel"] = "BC_GATEWAY";
$data["bank"] = 'BOC';

$title = "银联网页";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BeeCloud<?php echo $title;?>支付示例</title>
</head>
<body>
<?php
try {
    if(in_array($type, array('PAYPAL_PAYPAL', 'PAYPAL_CREDITCARD', 'PAYPAL_SAVED_CREDITCARD'))){
        $result =  $international->bill($data);
    }else{
        $result =  $api->bill($data);
    }
    if ($result->result_code != 0) {
        print_r($result);
        exit();
    }
    if(isset($result->url)){
        header("Location:$result->url");
    }else if(isset($result->html)) {
        echo $result->html;
    }else if(isset($result->credit_card_id)){
        echo '信用卡id(PAYPAL_CREDITCARD): '.$result->credit_card_id;
    }else if(isset($result->id)){
        echo $type.'支付成功: '.$result->id;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
</body>
</html>
