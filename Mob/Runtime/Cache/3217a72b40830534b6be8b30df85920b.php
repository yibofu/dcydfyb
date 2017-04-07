<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>工作信息</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，设置">
    <meta name="description" content="滴滴快贷设置。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
</head>
<body class="mhome">
<header class="dd_header">工作信息<span class="fa fa-chevron-left dd_return" onclick="return_page()"></span></header>
<section class="dd_index">
    <ul class="worker_info" >
        <li><span class="worker_l">我现在是：</span> <span class="worker_r"><?php echo ($result["job"]); ?></span></li>
        <li><span class="worker_l">单位名称：</span><span class="worker_r"><?php echo ($result["com_name"]); ?></span></li>
        <li><span class="worker_l">单位地址：</span><span class="worker_r"><?php echo ($result["address"]); ?></span></li>
        <li><span class="worker_l">单位电话：</span><span class="worker_r"><?php echo ($result["com_phone"]); ?></span></li>

    </ul>
</section>
<div class="dd_yzm" onclick="sub()"><a href="javascript:;">重新填写</a></div>
</body>
<script>
	function sub(){
		window.location.href="<?php echo U('User/work_update',array('id'=>$id));?>";
	}
	function return_page(){
		window.location.href = "<?php echo U('User/index');?>";
	}
</script>
</html>