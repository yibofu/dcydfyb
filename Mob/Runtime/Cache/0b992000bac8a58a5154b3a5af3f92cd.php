<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，设置">
    <meta name="description" content="滴滴快贷设置。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/footer.css"/>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">设置 </header>
<section class="dd_index">
    <div class="dd_set_container">
        <ul class="dd_set">
            <li><a href="<?php echo U('User/change_pass',array('id'=>$id));?>">修改登录密码<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('User/change_tel',array('id'=>$id));?>">更换手机号码<span class="fa fa-chevron-right chevron_right"></span></a></li>
        </ul>
    </div>
</section>
<section class="dd_index">
    <div class="dd_set_container">
        <ul class="dd_set">
            <li>
				<a href="<?php echo U('User/card_mess',array('id'=>$id));?>">身份证信息
				<?php if($status == '1'): ?><span class="fa fa-check-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php elseif($status == '14'): ?>
				<span class="fa fa-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php else: ?>
				<span class="fa fa-times-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span><?php endif; ?>
				</a>
			</li>
            <li>
				<a href="<?php echo U('User/card_hand',array('id'=>$id));?>">持身份证拍照信息
				<?php if($status == '1'): ?><span class="fa fa-check-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php elseif($status == '14'): ?>
				<span class="fa fa-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php else: ?>
				<span class="fa fa-times-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span><?php endif; ?>
				</a>
			</li>
            <li>
				<a href="<?php echo U('User/card',array('id'=>$id));?>">银行卡信息
				<!-- <?php if($status == 1): ?><span class="fa fa-check-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php elseif($status == 14): ?>
				<span class="fa fa-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span>
				<?php else: ?>
				<span class="fa fa-times-circle-o dd_circle"></span>
				<span class="fa fa-chevron-right chevron_right"></span><?php endif; ?> -->
				<span class="fa fa-chevron-right chevron_right"></span>
				</a>
			</li>
        </ul>
    </div>
</section>
<section class="dd_index" >
    <div class="dd_set_container">
        <ul class="dd_set">
            <li><a href="<?php echo U('User/annex_list',array('id'=>$id));?>">补充附件<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('User/work',array('id'=>$id));?>">工作信息<span class="fa fa-chevron-right chevron_right"></span></a></li>
            <li><a href="<?php echo U('User/link',array('id'=>$id));?>">联系人信息<span class="fa fa-chevron-right chevron_right"></span></a></li>
        </ul>
    </div>
</section>
<div class="dd_yzm" onclick="out()" style="margin-bottom: 120px;"><a href="javascript:;" >退出</a></div>
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
<script>
	function out(){
		window.location.href = "<?php echo U('Index/login_out');?>";
	}
</script>
</html>