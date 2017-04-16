<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>个人中心</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <!--<script type="text/javascript" src="/Public/app/js/hdw.js"></script>-->

    <style type="text/css">
        .login-heah span{
            position: absolute;
            top: 50%;
            transform: translate(0,-50%);
            right: 0;
        }
    </style>
</head>
<body>
    <div class="personal-login">
        <form name="form">
            <div class="login-heah">
                <img src="/Public/app/img/login-heah.png" class="img1 fl"/>
                <input id="Phone" class="login-heah-a fl" type="text" name="Phone" value="" placeholder="请填写手机号">
            </div>
            <div class="login-heah">
                <img src="/Public/app/img/login-password.png" class="img1 fl"/>
                <input id="password" type="password" name="password" class="login-heah-a fl" placeholder="请输入密码" >
            </div>
            <div class="login-heah">
                <img src="/Public/app/img/login-key.png" class="img1 fl"/>
                <input class="login-heah-a fl" type="text" name="yanzheng" value="" placeholder="请输入验证码">
                <a class="heah-slip sizea colod" onclick="get_fcode(this)" style="display: block;" id="fbtn">发送验证码</a>
                <a class="heah-slip sizea colod" style="display: none;" id="fgot_code"><i id="fsecond">60</i>秒</a>
            </div>
            <div class="login-keep sizea coloa" id="">
                注册即视为已阅读并同意<a href="<?php echo U('Personal/yueding');?>" style="color : #00A0E9">《注册协议》</a>
            </div>
            <!--<div><input type="hidden" name="id" value=""></div>-->
            <div class="login coloc" id="send">立即注册<input type="button" value=""></div>
        </form>
        <div class="makega" style="display: none">
            <div class="makeg-aa">
                <img id="uinc" src="/Public/app/img/x.png" class="imgsa"/>
                <img src="/Public/app/img/shape.png" class="imgta"/>
                <a href="<?php echo U('Personal/index');?>" class="foa kia coloc">立即登录</a>
            </div>
        </div>

    </div>
</body>
<script>
    $('#uinc').click(function(){
        $('.makega').fadeOut(200);
        $('.makega').slideUp(300);
    })

    $(function(){
        $("input[name='Phone']").focus(function(){
            $(this).next("span").remove();
            $("input[name='Phone']").attr("placeholder","请输入手机号");
        }).blur(function(){
            ab = $(this);
            var s = ab.val();
            if(s == ""){
                $("input[name='Phone']").attr("placeholder","请输入手机号");
                return false;
            }else if(s.match(/^1[0-9]{10}$/) == null){
                $("input[name='Phone']").val("").attr("placeholder","请输入11位手机号");
                return false;
            }else{
                $.get("<?php echo U('Personal/check_phone');?>",{Phone:s},function(data){
                    var data = eval("("+data+")");
                    if(data.error == false){
                        ab.next("span").remove();
//                        $("input[name='Phone']").val("").attr("placeholder","手机号已注册过");
                        alert(data.msg);
                        return false;
                    }else{
                        ab.next("span").remove();
                        $("<span>√</span>").css("color","#00A0E9").insertAfter(ab);
                        return true;
//                        $("<span>√</span>").css("color","#00A0E9").insertAfter(ab);
                    }
                },"html")
            }
        })

        $("input[name='password']").focus(function(){
            $("input[name='password']").attr("placeholder","请输6-16位由数字,字母,和特殊字符($,#,@,^,&,_)组成的密码");
        }).blur(function(){
            pw = $(this);
            var p = pw.val();
            if(p == ""){
                $("input[name ='password']").attr("placeholder","请输6-16位由数字,字母,和特殊字符($,#,@,^,&,_)组成的密码");
                return false;
            }else if(p.match(/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z$#@^&_]{6,21}$/) == null){
                $("input[name = 'password']").val("").attr("placeholder","请输6-16位由数字,字母,和特殊字符($,#,@,^,&,_)组成的密码");
                return false;
            }else{
                pw.next("span").remove();
                $("<span>√</span>").css("color","#00A0E9").insertAfter(pw);
                return true;
            }
        })
    })

    //    $("input[name='yanzheng']").bind('click',function(){
    //        var yanzheng = $(this).val();
    //        var Phone = $("input[name='Phone']").val();
    //        $.ajax({
    //            type:"post",
    //            url:"<?php echo U('Personal/check_msg');?>",
    //            data:{"yanzheng":yanzheng,"Phone":Phone},
    //            success:function(data){
    //                var data = eval("("+data+")");
    //                if(!data.error){
    //                    alert(data.msg);
    //                }
    //            }
    //        })
    //    })

//    var new_time = 60;
//    function get_fcode(dom){
//        var Phone = $("#Phone").val();
//        var re = "/^1\d{10}$/";
//        if(Phone == '' || !Phone.match(re) == null){
//            $("#Phone").val("").attr("placeholder","请填写手机号");
//            return false;
//        }

//        $.ajax({
//            type:"post",
//            url:'<?php echo U("Code/fpwd");?>',
//            data:{"Phone":Phone},
//            success:function(data){
//                alert(data);
//                console.log(data);
//                var data = eval("("+data+")");
//                if(data.error == false){
//                    alert(data.msg);
//                    return false;
//                }else{
//                    var a = setInterval(function(){
//                        new_time = new_time - 1;
//                        if(new_time == 0){
//                            window.clearInterval(a);
//                            new_time = 60;
//                            $("#fgot_code").hide();
//                            $("#fbtn").show();
//                        }
//                        $("#fsecond").html(new_time);
//                    },1000);
//                    $("#fgot_code").show();
//                    $("#fbtn").hide();
//                }
//            }
//        })
//    }

    var new_time = 60;
    function dingshiqi(new_time){
        var a = setInterval(function(){
            new_time = new_time - 1;
            if(new_time == 0){
                window.clearInterval(a);
                new_time = 60;
                $("#fgot_code").hide();
                $("#fbtn").show();
            }
            $("#fsecond").html(new_time);
        },1000);
    }
//
    function get_fcode(dom){
        var Phone = $("#Phone").val();
        var re = "/^1\d{10}$/";
        if(Phone == '' || !Phone.match(re) == null){
            $("#Phone").val("").attr("placeholder","请填写手机号");
            return false;
        }
        $.ajax({
            type:"post",
            url:'<?php echo U("Code/fpwd");?>',
            data:{"Phone":Phone},
            success:function(data){
                var data = eval("("+data+")");
                if(data.error == false){
                    alert(data.msg);
                    return false;
                }else{
                    dingshiqi(new_time);
                    $("#fgot_code").show();
                    $("#fbtn").hide();
                }
            }
        })
    }

    $("#send").bind('click',function(){
        var Phone = $("input[name='Phone']").val();
        var password = $("input[name='password']").val();
        var yanzheng = $("input[name='yanzheng']").val();
        if(Phone == '' && password == '' && yanzheng == ''){
            alert("信息不能为空");
            return false;
        }
        $.ajax({
            type:"post",
            url:"<?php echo U('Personal/check');?>",
            data:{'Phone':Phone,'password':password,'yanzheng':yanzheng},
            success:function(data){
                var data = eval("("+data+")");
                if(data.error == 2){
                    alert(data.msg);
                    return false;
                }
                if(!(data.error == 2)){
                    alert("注册成功,您可以去个人中心完善个人信息");
                    window.location.href = "<?php echo U('Personal/center');?>";
                }
            }
        })
    })
</script>
</html>