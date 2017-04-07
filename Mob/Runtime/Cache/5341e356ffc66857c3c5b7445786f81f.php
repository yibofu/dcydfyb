<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改登录密码</title>
    <meta name="keywords" content="滴滴快贷，修改登录密码">
    <meta name="description" content="滴滴快贷修改登录密码。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
</head>
<body class="mhome">
<header class="dd_header">修改登录密码<span class="fa fa-chevron-left dd_return" onclick="history.go(-1);"></span></header>
<section class="dd_index dd_index2">
    <form action="#"method="post">
        <div class="input_box">
            <span class="input_text">原始密码</span><input type="password" name="initpwd" maxlength="15" placeholder="请输入初始密码" id="old_pass" name="old_pass"/>
        </div>
        <div class="input_box">
            <span class="input_text">新&nbsp;密&nbsp;码</span><input type="password" name="newpwd" maxlength="15" placeholder="请输入新密码" id="new_pass1" name="new_pass1"/>
        </div>
        <div class="input_box">
            <span class="input_text">确认密码</span><input type="password" placeholder="请确认新密码" id="new_pass2" name="new_pass2"/>
        </div>

    </form>
    <div class="dd_yzm " onclick="sub()"><a href="javascript:;">确认</a></div>
</section>

</body>
<script>
	$("#old_pass").bind('blur',function(){
		var pass = $(this).val();
		var id = <?php echo ($id); ?>;
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/check_pass');?>",
				data:{'pwd':pass,'id':id},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error != 1){
						alert(data.message);
						$(this).val('');
					}
				}
		});
	});
	function sub(){
		var pwd1 = $("#new_pass1").val();
		var pwd2 = $("#new_pass2").val();
		var id = <?php echo ($id); ?>;
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/update_pass',array('id'=>$id));?>",
				data:{'pwd_nomd5':pwd1,'pwd':pwd2},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 1){
						alert(data.message);
						window.location.href = "<?php echo U('Index/login');?>";
					}else{
						alert(data.message);
						window.location.href= "<?php echo U('User/change_pass');?>";
					}
				}
		});
	}
	function return_page(){
		window.location.href = "<?php echo U('User/index');?>";
	}
</script>
</html>