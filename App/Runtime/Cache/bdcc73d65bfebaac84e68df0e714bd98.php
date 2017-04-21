<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>欢迎登录</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/Public/app/css/registerSuccess.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
	</head>
	<body>
		<!--导航条-->
		<div></div>
		<!--logo-->
		<div class="welcomeBannerAll">
			<!--始终在中间的部分-->
			<div class="welcomeBanner">
				<a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/welcomeLogo.png" width="160px" height="60px"/></a>
				<p class="welcomeText">欢迎登录</p>
			</div>
		</div>
		<!--内容部分-->
		<div class="welcomeMainALL">
			<!--始终在中间的内容-->
			<div class="welcomeMain">
				<div class="FinanceConsultantImg">
					<img src="/Public/app/img/welcomeFinanceConsultant.png">
				</div>
				
				<div class="loginPageAll">
					<div class="postPersonImg">
						<img src="/Public/app/img/submitSuccess.png" />
					</div>
					<div class="registerSuccess">
						<p>恭喜您</p>
						<p>注册成功了</p>
					</div>
					<div class="skip">
						<a href="<?php echo U('Index/index');?>">返回首页</a><span>|</span><a href="<?php echo U('MyCenter/index');?>">进入个人中心</a>
					</div>
					
				</div>
			</div>
		</div>
		<!--友情链接-->
		<div class="friendly_link">
			<div class="link_title">友情链接</div>
			<ul>
				<li><a href="#">天津长财咨询</a></li>
				<li><a href="#">长财咨询</a></li>
				<li><a href="#">北京长财咨询</a></li>
				<li><a href="#">太原长财咨询</a></li>
				<li><a href="#">广州长财咨询</a></li>
				<li><a href="#">成都长财咨询</a></li>
				<li><a href="#">长沙长财咨询</a></li>
				<li><a href="#">金华长财咨询</a></li>
				<li><a href="#">四度信息</a></li>
			</ul>
		</div>
	</body>
	<!--<script>
		$("html,body").css("font-zize",parseInt($(window).width() / 1000 / 100) + "px" );
	</script>-->
</html>