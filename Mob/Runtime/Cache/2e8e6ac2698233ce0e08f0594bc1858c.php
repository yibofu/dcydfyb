<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加联系人信息</title>
    <meta name="keywords" content="滴滴快贷，添加联系人信息">
    <meta name="description" content="滴滴快贷添加联系人信息。">
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
<header class="dd_header">添加联系人信息<span class="fa fa-chevron-left dd_return"></span></header>
<section class="dd_index dd_index2">
    <form action="<?php echo U('User/add_link',array('id'=>$id));?>"method="post" id="myform">
        <div class="input_box contact_box" onclick="show()">
            <span class="input_text">联系人的电话</span><input id="show_tel" disabled type="tel" placeholder="请输入联系人的电话"/>
			<input type="hidden"name="phone" id="phone" />
        </div>
        <div class="input_box contact_box">
            <span class="input_text">与联系人的关系</span><input type="text" placeholder="请输入与联系人的关系" name="name" id="name"/>
        </div>
        <div class="input_box contact_box">
            <span class="input_text">联系人的姓名</span><input type="text" placeholder="请输入联系人的姓名"id="relation" name="relation" />
        </div>

    </form>
</section>
<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提交</a></div>
</body>
<script>
	function show(){
		window.didikd.choosePerson('<?php echo ($id); ?>');
	}
	function showlink(tel,name){
		$("#phone").val(tel);
		$("#show_tel").val(tel);
		$("#name").val(name);
	}
	function sub(){
		var phone = $("#phone").val();
		var name = $("#name").val();
		var relation = $("#relation").val();
		
		if(phone == '' || name == '' || relation == ''){
			alert('请填写完成信息后在提交');
			return;
		}
		$("#myform").submit();
	}
	function return_page(){
		window.location.href = "<?php echo U('User/link',array('id'=>$id));?>";
	}
</script>
</html>