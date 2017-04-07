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
    <style>.dd_circle{ font-size:14px; top:12px;right:37px;color: #FFBABA;}  .dd_set {  border: 1px solid #ECECEC;  box-shadow: 0px 0px 2px #ECECEC; }  .dd_set li+li{border-top: 1px solid #ECECEC;  -webkit-box-shadow: 1px 0px 2px #ECECEC;  -moz-box-shadow: 1px 0px 2px #ECECEC;  box-shadow: 1px 0px 2px #ECECEC;}
    </style>
</head>
<body class="mhome">
<header class="dd_header">补充附件<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>
<section class="dd_index">
    <ul class="dd_set">
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["title"]); ?>
            <span class="fa-stack fa-lg dd_circle">
				<?php if($vo["is_agree"] == 1): ?><span class="fa fa-check-circle-o dd_circle"></span><span class="fa fa-chevron-right chevron_right"></span>
				<else if condition="$vo.is_agree eq 2"/>
					<span class="fa fa-times-circle-o dd_circle"></span><span class="fa fa-chevron-right chevron_right"></span>
				<?php else: ?>
					 <i class="fa fa-circle-o fa-stack-2x"></i>
					<i class="fa fa-question fa-stack-1x"></i><?php endif; ?>
				</span>
            <span class="fa fa-chevron-right chevron_right"></span>
        </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</section>
<div class="dd_yzm dd-zc" style="margin-top:10px;" onclick="add()"><a href="javascript:;">添加附件</a></div>

<footer class="web_footer">
    <ul>
		
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
		MODEL_NAME
    </ul>
</footer>
<script>
    $(function () {
        var screen_height=$(window).height();
        $(".show_img").css({
            height:screen_height/3
        });
        $(".show_img").css({
            height: $(".show_img").find("img").height()
        });

    })
	function add(){
		window.location.href="/Mob/index.php/User/annex";
	}
</script>
</body>
</html>