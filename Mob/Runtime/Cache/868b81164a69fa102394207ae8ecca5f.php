<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更多</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，更多">
    <meta name="description" content="滴滴快贷更多。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/footer.css"/>
    <style>
        .dd_massage{
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            right: 20px;
            top: 5px;
            font-size: 24px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
        }
        .tishi{
            display: block;
            position: absolute;
            width: 18px;
            height: 18px;
            right: 15px;
            top: 7px;
            background: #ff0000;
            line-height: 18px;
            font-size: 12px;
            border:1px solid #ff0000;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }
    </style>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">更多<!-- <span class="fa fa-envelope dd_massage" onclick="location.href='<?php echo U('/Help/messages');?>';"></span> <span class="tishi">2</span> --></header>
<section class="dd_index">
    <div class="dd_set_container">
        <ul class="dd_set">
            <li><a href="<?php echo U('Help/about');?>">关于滴滴快贷<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('Help/borrow');?>">关于借款<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('Help/repay');?>">关于还款<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('Help/examine');?>">审核速度与成本<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('Help/secret');?>">隐私保障与法律法规<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('Help/contact');?>">联系我们<span class="fa fa-chevron-right chevron_right"></span></a></li>
        </ul>
    </div>
</section>
<footer class="web_footer">
    <ul>
        <!--<li><a href="#"><span class="dd_nav1 "></span>申请</a></li>
        <li><a href="#"><span class="dd_nav2"></span>账户</a></li>
        <li><a href="#" ><span class="dd_nav3"></span>设置</a></li>
        <li><a href="#" style="color: #ff3200;"><span class="dd_nav4x"></span>更多</a></li>-->
        <li><a href="<?php echo U('/Apply/index');?>"<?php if((MODULE_NAME) == "Apply"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Apply'): ?>class="dd_nav1x"<?php else: ?>class="dd_nav1"<?php endif; ?> ></span>申请 </a></li>
        <li><a href="<?php echo U('/Repay/index');?>"<?php if((MODULE_NAME) == "Repay"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Repay'): ?>class="dd_nav2x"<?php else: ?>class="dd_nav2"<?php endif; ?> ></span>账号 </a></li>
        <li><a href="<?php echo U('/User/index');?>"<?php if((MODULE_NAME) == "User"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'User'): ?>class="dd_nav3x"<?php else: ?>class="dd_nav3"<?php endif; ?> ></span>设置 </a></li>
        <li><a href="<?php echo U('/Help/helpList');?>"<?php if((MODULE_NAME) == "Help"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Help'): ?>class="dd_nav4x"<?php else: ?>class="dd_nav4"<?php endif; ?> ></span>更多 </a></li>
		
        <!--<li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
        MODEL_NAME-->
    </ul>
</footer>
</body>
</html>