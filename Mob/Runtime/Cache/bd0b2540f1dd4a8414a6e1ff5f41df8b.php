<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>补充附件</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，补充附件">
    <meta name="description" content="滴滴快贷补充附件。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
    <link rel="stylesheet" href="/Public/Mob/css/footer.css"/>
    <script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
	 <link rel="stylesheet" href="/Public/Mob/css/progress_style.css"/>
</head>
<body class="mhome">
<header class="dd_header">浏览附件<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>
<section class="dd_index">
        <div class="dd_buchong">
            <span class="buchong_title">标题</span><input type="text" id="fj_title" placeholder="请输入标题" name="title" value="<?php echo ($result["title"]); ?>"/>
        </div>
        <div style="width:56%;margin: 0 auto;border:1px solid #cccccc;" id="show_img">
           <img src="<?php echo ($result["url_ske"]); ?>" alt="附件" style="max-width:100%;height:auto;"/>
        </div>
		<br />
		<br />
		<div class="fail_text">
		<?php if($result["is_agree"] == 1): ?><span class="fa fa-check-circle-o"></span>审核通过
		<?php elseif($status == 14): ?>
		<span class="fa fa-times-circle-o"></span><font color="red">待审核</font>
		<p><?php echo ($result["reason"]); ?></p>
		<?php else: ?>
		<span class="fa fa-times-circle-o"></span><font color="red">审核未通过</font>
		<p><?php echo ($result["reason"]); ?></p><?php endif; ?>
		</div>
</section>
<footer class="web_footer">
    <ul>
		
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
		MODEL_NAME
    </ul>
</footer>
</body>
</html>