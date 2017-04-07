<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>登录</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
</head>
<body>
<div id="login_bg"></div>
    <div class="personal">
        <div class="personal-login" id="login_content_log_02">
            <form name="form">
                <div class="login-heah" id="login_input1">
                    <img src="/Public/app/img/login-heah.png" class="img1 fl"/>
                    <input id="login_input11" class="login-heah-a fl" type="text" name="Phone" value="" placeholder="昵称/手机号" >
                </div>
                <div class="login-heah" id="login_input2">
                    <img src="/Public/app/img/login-password.png" class="img1 fl"/>
                    <input id="login_input12" class="login-heah-a fl" type="password" name="password" value="" placeholder="密码">
                    <a href="<?php echo U('Personal/forget');?>" class="heah-slip sizea colod">忘记密码</a>
                </div>
                <p id="login_tip"></p>
                <div class="login-keep sizea coloa" id="login_input3">
                    <input class="img1" type="checkbox" value="3" name="remeber" checked="checked">
                    记住密码
                    <div class="fr">
                        还没有账户？
                        <a class="fr colob" href="<?php echo U('Personal/rigister');?>">立即注册</a>
                    </div>
                </div>
                <div class="login coloc" id="login_input4">进入扁鹊财学院<input type="button" value=""></div>
            </form>
        </div>

    </div>

</body>
<script type="text/javascript" src="/Public/app/js/personal.js"></script>
<script>
    $(function(){
        $("input[name='name']").focus(function(){
            $("input[name='name']").attr("placeholder","请输入昵称/手机号");
        }).blur(function(){
            ob=$(this);
            var s = ob.val();
            if(s == ""){
                $("input[name='name']").attr("placeholder","请输入昵称/手机号");
                return false;
            }
        })
//
        $("input[name='password']").focus(function(){
            $("input[name='password']").attr("placeholder","请输入密码");
        }).blur(function(){
            //密码
            pw = $(this);
            var p = pw.val();
            if( p == ""){
                $("input[name='password']").attr("placeholder","请输入密码");
                return false;
            }
        })
//        $.ajax({
//            type:"post",
//            url:"<?php echo U('Personal/check');?>",
//            data:{''}
//        })
    })
    $("#login_input4").bind('click',function(){
        var Phone = $("input[name='Phone']").val();
        var pwd = $("input[name='password']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Personal/login');?>",
            data:{'Phone':Phone,'password':pwd},
            success:function(data){
                row = eval('('+data+')');
                if(row){
                    window.location.href = "<?php echo U('Personal/personal');?>";
                }
            }
        })
    })
</script>
</html>