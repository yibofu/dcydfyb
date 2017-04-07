<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="keywords" content="滴滴快贷，登录">
    <meta name="description" content="滴滴快贷登录。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123New.css"/>
	<link rel="stylesheet" href="/Public/Mob/css/20151222style.css"/>
	<script src="/Public/Mob/js/MyRespond.js"></script>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
	<style>
		.dd-zc{
			border:1px solid #999999;
			background: #ffffff;
		}
		.dd-zc a{
			color:#999999;
		}
		 /*浮层样式*/
        .shadowBox{
            width: 100%;
            height: 100%;
            max-width: 640px;
            margin: 0 auto;
            overflow: hidden;
            position: fixed;
            /*left: 0;*/
            top: 0;
            z-index: 50;
            background: rgba(0, 0, 0, 0.8);
			display:none;
        }
        .wrapBox{
            width: 80%;
            /*height: 40%;*/
            position: absolute;
            top: 20%;
            left: 50%;
            margin-left: -40%;
            -webkit-box-shadow: 0 0 4px #000000;
            -moz-box-shadow: 0 0 4px #000000;
            box-shadow: 0 0 4px #000000;
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .wrapBox p{
            padding: 10px;
        }
        .wrapBox p:last-of-type{
            margin-bottom: 40px;
        }
        .wrapBox .shadowBtn {
            position: relative;
            width: 100%;
        }
        .wrapBox .shadowBtn .Btn_container{
            width: 80%;
            padding-bottom: 30px;
            margin: 0 auto;

        }
        .wrapBox .shadowBtn .Btn_container:after{
            content: '';
            display: block;
            height: 0;
            clear: both;
        }
        .wrapBox .shadowBtn span{
            display: block;
            width: 45%;
            background: #ee3200;
            margin-right: 5%;
            text-align: center;
            float: left;
            line-height: 2.2;
            color: #ffffff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        /*浮层样式*/
		 .Upload{
            position: absolute;
            left: 50%;
            top: 35%;
            height: 50px;
            width: 50px;
            margin-top: -25px;
            margin-left: -25px;
            -moz-border-radius: 50% 50% 50% 50%;
            -webkit-border-radius: 50% 50% 50% 50%;
            border-radius: 50% 50% 50% 50%;
            text-align: center;
            line-height: 150px;

        }
       .Up_shadow{
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.5);
            z-index: 122;
        }
        .Uptext{
            color: #ffffff;
            position: absolute;
            left: 50%;
            top: 40%;
            height: 30px;
            width: 150px;
            margin-left: -70px;
            line-height: 30px;
            text-align: center;
        }
	</style>
</head>
<body class="mhome" style="background: #ffffff;">
<!--<header class="dd_header">登录</header>-->
<div class="logo_container">
	<div class="logo">
		<img src="/Public/Mob/img/LoginLogo.png" alt="logo"  style="max-width: 100%"/>
	</div>
</div>

<section class="dd_index">
	<div class="dd_container1">
		<form action="#"method="post">
			<div class="fir_pwd">
				<span class=" icon icon1"></span>
				<input type="text"  class="InputBox" name="tel" placeholder="请输入手机号" id="tel"/>
			</div>
			<div class="fir_pwd">
				<span class="icon icon2"></span>
				<input type="password"  class="InputBox" name="pwd1"  class="pwd" placeholder="请输入密码" id="pwd"/><span></span>
				<!--<span class="pwd_xx"></span>-->
			</div>
		</form>
	</div>
	<input type="hidden" name="token" id="token" />
    <div class="dd_yzm" ><a href="javascript:;" id="login">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</a></div>
	<div class="dd_yzm dd-zc" style="margin-bottom: 5px;"><a href="javascript:;" onclick="register()">注册新用户</a></div>
    <section class="userd">
        <!--<span class="fl" style="text-align: left;cursor:pointer;" onclick="register()">注册新用户</span>-->
        <span class="fr" style="text-align: right;cursor:pointer; font-size: 0.55rem;" onclick="forgot()">忘记密码？</span>
    </section>
	<section style="height: 5.75rem;"></section>
   <!-- <p class="small_point">
        手机借钱当天到账，手机还钱轻松快捷！
    </p>-->
</section>
<div class="shadowBox">
    <section class="wrapBox">
        <p>&nbsp;</p>
        <p id="word" style="text-align:center;">浮层内容</p>
        <p>&nbsp;</p>
        <div class="shadowBtn">
            <div class="Btn_container">
                <span>确定</span>
                <span>取消</span>
            </div>
        </div>
    </section>
</div>
<div class="Up_shadow" style="display:none;" id="load">
    <img  class="Upload" src="/Public/Mob/yh/img/loading.gif" alt="loading.gif"/>
    <p class="Uptext">正在登陆……</p>
</div>
</body>
<script>
	/*$(function(){
		var clientWidth=document.body.clientWidth;
		var bili=clientWidth/640;
		var top=parseInt($(".icon").css("top"))*bili-2;
		console.log(top);
		$(".icon").css({
			"-webkit-transform": "scale("+bili+")",
			"transform": "scale("+bili+")",
			top:top
		})
		$(window).resize(function(){
			$(".icon").css({
				"-webkit-transform": "scale("+bili+")",
				"transform": "scale("+bili+")",
				top:top
			})
		})
	})*/
	$(document).ready(function() { 
		var token = window.didikd.upPushId();
		$("#token").val(token);
	}); 
	function register(){
		var imei = window.didikd.getImei();
		var imsi = window.didikd.getImsi();
		var channel = window.didikd.getChannel();
		var mode = window.didikd.getModel();
		var behavior = '1002';
		$.ajax({ 
				type: "GET", 
				url: "http://27.50.130.152/api/ddkdtongji.php",
				async:true,
				data:{'imei':imei,'imsi':imsi,'channel':channel,'behavior':behavior,'mode':mode},
				success:function(data){}
		});		
		//window.location.href="/Mob/index.php/Index/register";
	}
	function forgot(){
		window.location.href="/Mob/index.php/Index/forgot";
	}
	$("#login").bind('click',function(){
		var tel = $("#tel").val();
		var pwd = $("#pwd").val();
		token = $("#token").val();
		var shadow=document.getElementsByClassName("shadowBox")[0];
        var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
		for(var i=0;i<btns.length;i++){
				btns[i].onclick=function(){
					shadow.style.display="none";
                    flag=true;
				};
        }
		if(tel == ''){
			$("#word").html('请填写手机号!');
			shadow.style.display="block";
			return;
		}
		if(pwd == ''){
			$("#word").html('请输入密码!');
			shadow.style.display="block";
			return;
		}
		$("#load").css('display','block');
		var imei = window.didikd.getImei();
		var mode = window.didikd.getModel();
		$.ajax({ 
				type: "POST", 
				url: "/Mob/index.php/Index/check_login",
				data:{'phone':tel,'pwd':pwd,'token':token,'imei':imei,'mode':mode},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 1){
						window.didikd.bandToken(data.uid);
						window.didikd.getApp(data.uid);
						window.location.href="<?php echo U('Apply/index');?>";
					}else if(data.error == 3){
						window.didikd.bandToken(data.uid);
						//window.didikd.saveId(data.sign);
						window.didikd.getApp(data.uid);
						window.location.href="<?php echo U('Repay/index');?>";
					}else{
						$("#load").css('display','none');
						$("#word").html('账号或密码有误!');
						shadow.style.display="block";
						//window.didikd.saveId(data.sign);
						return;
					}
				}
		});
	});
</script>
</html>