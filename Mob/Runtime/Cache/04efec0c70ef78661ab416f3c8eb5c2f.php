<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <meta name="keywords" content="滴滴快贷，注册">
    <meta name="description" content="滴滴快贷注册。">
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
	</style>
</head>
<body class="mhome" style="background: #ffffff;">
<!--<header class="dd_header">注册新用户<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>-->
	<div class="logo_container">
		<div class="logo">
			<img src="/Public/Mob/img/LoginLogo.png" alt="logo"  style="max-width: 100%"/>
		</div>
	</div>
	<section class="dd_index">
		<div class="dd_container1">
			<form method="post">
				<div class="fir_pwd">
					<span class=" icon icon1"></span>
					<input type="text" class="InputBox" style="padding-right: 5rem;" name="tel" placeholder="请输入手机号" id="tel"/>
					<div class="yzmNew">
						<div class="dd_yzmm" onclick="get_code(this)" style="display: block;"><a href="javascript:;">获取短信验证码</a></div>
						<div class="dd_yzmm dd_yzm_again" style="display:none;" id="got_code"><a href="javascript:;"><i id="second">60</i>s后重新获取验证码</a></div>
					</div>
				</div>
				<!-- <div class="dd_yzm" onclick="get_code(this)" style="display: none;"><a href="javascript:;">获取短信验证码</a></div>
				 <div class="dd_yzm dd_yzm_again" style="display:block;" id="got_code"><a href="javascript:;"><i id="second">60</i>s后重新获取验证码</a></div>-->
				<div class="fir_pwd">
					<span class="icon icon3"></span>
					<input type="text" class="InputBox" name="mess" placeholder="请输入短信验证码"/>
				</div>
				<div class="fir_pwd">
					<span class=" icon icon2"></span>
					<input type="password" name="pwd1"  id="pwd1" class="InputBox pwd" placeholder="请输入密码"/>
					<!--<span class="pwd_xx"></span>-->
				</div>
				<input type="hidden" name="token" id="token" />
				<input type="hidden" name="imei" id="imei" />
				<input type="hidden" name="is_code" id="is_code" value="2" />
				<div class="fir_pwd">
					<span class=" icon icon2"></span>
					<input type="password" name="pwd2"  id="pwd2" class="InputBox pwd" placeholder="请再次输入密码"/>
					<!--<span class="pwd_xx"></span>-->
				</div>

			</form>
			<div class="dd_yzm dd-zc dd-zc-new">
				<a href="javascript:;" id="sub">注册</a>
				<p class="dd_re"><a href="/Mob/index.php/Index/login">已有账号？立即登录</a></p>
			</div>
		</div>
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
		var imei = window.didikd.getImei();
		$("#imei").val(imei);
	}); 
	var shadow=document.getElementsByClassName("shadowBox")[0];
	var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
	for(var i=0;i<btns.length;i++){
			btns[i].onclick=function(){
				shadow.style.display="none";
				flag=true;
			};
	}
	$("[name=pwd2]").bind('blur',function(){
		var pwd1 = $("[name=pwd1]").val();
		if($(this).val() == ''){
			$(this).focus();
		}else{
			if($(this).val() != pwd1){
				$("#word").html('两次输入密码不一致!');
				shadow.style.display="block";
				$(this).val("");
			}
		}
	});
	function get_code(dom){
		
		var mobile = $("#tel").val();
		imei = $("#imei").val();
		var new_time = 60;
		var re = /^1\d{10}$/;
		if(mobile == '' || !re.test(mobile)){
			$("#word").html('请填写手机号!');
			shadow.style.display="block";
			$("[name=tel]").val('');
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: '<?php echo U("Index/send_message");?>',
				data:{'mobile':mobile,'imei':imei},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						$("#word").html(data.message);
						shadow.style.display="block";
						$("#got_code").show();
						$(dom).hide();
						var a = setInterval(function(){
							new_time = new_time - 1;
							if(new_time == 0){
								new_time = 0;
								clearInterval(a);
								new_time = 60;
								$("#got_code").hide();
								$(dom).show();
							}
							$("#second").html(new_time);
						},1000);
					}else{
						$("#word").html(data.message);
						shadow.style.display="block";
						$("[name=tel]").val('');
						return;
					}
				}
		});			
	}			
	//检查验证码
	$("[name=mess]").bind('blur',function(){
		var code = $(this).val();
		var mob = $("[name=tel]").val();
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Index/check_reg_code');?>",
				data:{'code':code,'mobile':mob},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						$("#is_code").val(1);
					}else if(data.error){
						$("#is_code").val(2);
						$("#word").html(data.message);
						shadow.style.display="block";
					}
				}
		});
	});
	$("#sub").bind('click',function(){
		var tel = $("#tel").val();
		var pwd1 = $("#pwd1").val();
		var pwd2 = $("#pwd2").val();
		var is_code = $("#is_code").val();
		var token = $("#token").val();
		var imei = $("#imei").val();
		if(tel == '' | pwd1 == '' | pwd2 == '' ){
			$("#word").html('电话或密码不能为空');
			shadow.style.display="block";
			return;
		}
		if(is_code == 2){
			$("#word").html('验证码不正确');
			shadow.style.display="block";
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Index/reg_sub');?>",
				data:{'phone':tel,'pwd':pwd1,'pwd_nomd5':pwd2,'token':token,'imei':imei},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						window.didikd.bandToken(data.uid);
						window.didikd.getApp(data.uid);
						window.location.href = "<?php echo U('Apply/index');?>";
					}else{
						$("#word").html(data.msg);
						shadow.style.display="block";
					}
				}
		});
	});
</script>
</html>