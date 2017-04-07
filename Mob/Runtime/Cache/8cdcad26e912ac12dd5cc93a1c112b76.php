<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更换手机号码</title>
    <meta name="keywords" content="滴滴快贷，更换手机号">
    <meta name="description" content="滴滴快贷更换手机号。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
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
<header class="dd_header">更换手机号码<span class="fa fa-chevron-left dd_return" onclick="return_page()"></span></header>
    <section class="dd_index dd_index2">
        <form action="#"method="post">
            <div class="input_box">
                <span class="input_text">原手机号</span><input type="text" readonly value="<?php echo ($phone); ?>" id="tel" name="tel"  />
            </div>
            <div class="input_box">
                <span class="input_text">登录密码</span><input type="text" placeholder="请输入密码" id="pwd" name="pwd" />
				<input type="hidden" id="is_pass" value="2"/>
            </div>
            <div class="input_box">
                <span class="input_text">新手机号</span><input type="text" placeholder="请输入新手机号" id="new_tel" name="new_tel"/>
				<input type="hidden" id="is_res" value="2" />
            </div>
            <div class="dd_yzm" onclick="get_code(this)"><a href="javascript:;">获取短信验证码</a></div>
			<div class="dd_yzm dd_yzm_again" style="display:none;" id="got_code"><a href="javascript:;"><i id="second">60</i>s后重新获取验证码</a></div>
            <input type="text" name="mess" id="mess" placeholder="请输入短信验证码" style="width:60%; padding-left: 20px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;"/>
        </form>
        <div class="dd_yzm dd-zc" onclick="sub()"><a href="javascript:;">确定</a></div>
    </section>

</body>
<script>
	$("#pwd").bind('blur',function(){
		var pwd = $("#pwd").val();
		if(pwd == ''){
			alert('密码不能为空');
			$('#pwd').focus();
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/check',array('id'=>$id));?>",
				data:{'tel':tel,'pwd':pwd},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error != 1){
						alert(data.message);
						$(this).val('');
						$(this).focus();
						$("#is_pass").val(data.error);
					}else{
						alert(data.message);
						$("#is_pass").val(data.error);
					}
				}
		});
	});
	$("#new_tel").bind('blur',function(){
		var new_tel = $(this).val();
		var re = /^1\d{10}$/;
		if(new_tel == '' || !re.test(new_tel)){
			alert("请输入正确格式手机号");
			$("#new_tel").val('');
			$("#new_tel").focus();
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/check_mobile');?>",
				data:{'mobile':new_tel},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error != 1){
						alert(data.message);
						$(this).val('');
						$(this).focus();
						$("#is_res").val(data.error);
					}else{
						alert(data.message);
						$("#is_res").val(data.error);
					}
				},
		});
	});
	
	function get_code(dom){
		var is_res = $("#is_res").val();
		var new_tel = $("#new_tel").val();
		if(is_res == 2){
			alert("请重新填写手机号");
			$("#new_tel").focus();
			return;
		}
		var new_time = 60;
		$("#got_code").show();
	    $(dom).hide();
		$.ajax({ 
				type: "POST", 
				url: "/Mob/index.php/Sendmessage/change_tel/mobile/"+new_tel,
				success:function(data){}
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
	function sub(){
		var mess = $("#mess").val();
		var phone = $("#new_tel").val();
		var is_pass = $("#is_pass").val();
		var is_res = $("#is_res").val();
		if(is_pass == 2){
			alert('请重新填写密码');
			$("#pwd").val('');
			$("#pwd").focus();
			return;
		}
		if(is_res == 2){
			alert("请重新填写手机号");
			$("#new_tel").val('');
			$("#new_tel").focus();
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/check_code',array('id'=>$id));?>",
				data:{'mess':mess,'phone':phone},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 1){
						alert(data.message);
						window.location.href = "<?php echo U('Index/login');?>";
					}else if(data.error == 2){
						alert(data.message);
						$("#mess").val('');
						$("#mess").focus();
					}else{
						alert(data.message);
						window.location.href = "<?php echo U('User/change_tel',array('id'=>$id));?>";
					}
				}
		});
	}
	function return_page(){
		window.location.href = "<?php echo U('User/index');?>";
	}
</script>
</html>