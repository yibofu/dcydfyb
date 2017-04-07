<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>忘记密码</title>
    <meta name="keywords" content="滴滴快贷，忘记密码">
    <meta name="description" content="滴滴快贷忘记密码。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
	<style>
        .dd_yzm_again
        {
            color: #ffffff;
            background: #929292;
        }
        .dd_yzm_again i{
            font-style: normal;
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">忘记密码<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>
<section class="dd_index">
    <form action="#"method="post">
        <input type="text" name="tel" placeholder="请输入手机号"/>
        <div class="dd_yzm" onclick="get_code(this)"><a href="javascript:;">获取短信验证码</a></div>
			 <div class="dd_yzm dd_yzm_again" style="display:none;" id="got_code"><a href="javascript:;"><i id="second">60</i>s后重新获取验证码</a></div>
        <input type="text" name="mess" placeholder="请输入短信验证码"/>
        <p class="point_text"><strong>如果身份证已经过验证，请输入身份证</strong></p>
        <input type="text" name="shenfen" placeholder="请输入身份证号码"/>
        <div class="fir_pwd">
            <input type="password" name="pwd1"  class="pwd" placeholder="请输入密码"/>
            <!--<span class="pwd_xx"></span>-->
        </div>
        <div class="fir_pwd">
            <input type="password" name="pwd2"  class="pwd" placeholder="请再次输入密码"/>
            <!--<span class="pwd_xx"></span>-->
        </div>

    </form>
    <div class="dd_yzm dd-zc" onclick="sub()"><a href="javascript:;">重置密码</a></div>
	<input type="hidden" name="is_code" id="is_code" value="2" />
</section>

</body>
<script>
	function get_code(dom){
		var mobile = $("[name=tel]").val();
		var re = /^1\d{10}$/;
		if(mobile == '' || !re.test(mobile)){
			alert("请输入正确格式手机号");
			$("[name=tel]").val('');
			$("[name=tel]").focus();
			return;
		}
		var new_time = 60;
		$.ajax({ 
				type: "POST", 
				url: "/Mob/index.php/Sendmessage/forgot_code/mobile/"+mobile,
				success:function(data){
					$("#got_code").show();
					$(dom).hide();
				}
		});
		var a = setInterval(function(){
					new_time = new_time - 1;
					if(new_time == 0){
						new_time = 0;
						clearInterval(a);
						$("#got_code").hide();
						$(dom).show();
					}
					$("#second").html(new_time);
				},1000);
	}
	$("[name=pwd2]").bind('blur',function(){
		var pwd1 = $("[name=pwd1]").val();
		if($(this).val() == ''){
			$(this).focus();
		}else{
			if($(this).val() != pwd1){
				alert('两次输入密码不一致');
				$(this).val("");
				$(this).focus();
			}
		}
	});
	//检查验证码
	$("[name=mess]").bind('blur',function(){
		var code = $(this).val();
		var mob = $("[name=tel]").val();
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Index/check_for_code');?>",
				data:{'code':code,'mobile':mob},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 2){
						alert(data.message);
						$("#is_code").val(2);
					}else if(data.error == 1){
						$("#is_code").val(1);
					}
				}
		});
	});
	function sub(){
		var mob = $("[name=tel]").val();
		var pwd1 = $("[name=pwd1]").val();
		var pwd2 = $("[name=pwd2]").val();
		var card = $("[name=shenfen]").val();
		var is_code = $("#is_code").val();
		if(is_code == 2){
			alert("验证码验证未通过！请返回重试");
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "/Mob/index.php/Index/fot_sub",
				data:{'phone':mob,'pwd1':pwd1,'pwd2':pwd2,'card':card},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 3){
						alert(data.message);
						window.location.href = "<?php echo U('Index/login');?>";
					}else if(data.error == 4){
						alert(data.message);
						window.location.href = "<?php echo U('Index/forgot');?>";
					}
				}
		});
	}
</script>
</html>