<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>个人信息</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>

</head>
<body>
<div class="personal">
    <div class="personal-centre">
        <div class="centre-heah">
            <div class="heah">
                <div class="heah-cap">
                    <img src="/Public/app/img/cap.jpg" class="imga"/>
                </div>
            </div>
        </div>
    </div>
    <form name="form">
        <div class="personal-true foa">&nbsp;姓<span class="texta">名：<input type="text" readonly="true" value="<?php echo ($name); ?>" name="name"></span></div>
        <div class="personal-truea foa">
            <div class="true-a wire-a yinc">&nbsp;公司名称：<input type="text" value="<?php echo ($firmname); ?>" name="firmname"></div>
            <div class="true-a wire-a">&nbsp;职<span class="texta">位：<input type="text" readonly="true" value="<?php echo ($position); ?>" name="position"></span></div>
            <div class="true-a wire-a">&nbsp;所属行业：<input type="text" readonly="true" value="<?php echo ($industry); ?>" name="industry"></div>
            <div class="true-a">&nbsp;所在地：<input type="text" readonly="true" value="<?php echo ($address); ?>" name="address"></div>
        </div>
        <div class="personal-trueb foa">
            <div class="true-a wire-a">&nbsp;手机号码：<input type="text" value="<?php echo ($Phone); ?>" readonly="true" name="phone"></div>
            <div class="true-a">&nbsp;微信号码：<input type="text" readonly="true" value="<?php echo ($wechat); ?>" name="wechat "></div>
        </div>
        <div class="logina coloc fr" id="send">
            <a href="<?php echo U('Personal/forget');?>" class="login-a coloc sizec fl">修改密码</a>
            <input type="button" value="安全退出" class="login-b coloc sizec fr fom-jia">
        </div>
    </form>
</div>
</body>
</html>