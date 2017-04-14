<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>欢迎登录</title>
		<link rel="stylesheet" href="/Public/app/css/doorway-pages.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/js/doorway-pages.js" ></script>
	</head>
	<body>
		<!--导航条-->
		<div></div>
		<!--logo-->
		<div class="welcomeBannerAll">
			<!--始终在中间的部分-->
			<div class="welcomeBanner">
				<img src="/Public/app/img/welcomeLogo.png" width="160px" height="60px"/>
				<a href="<?php echo U(Login/loginPage);?>"><p class="welcomeText">欢迎登录</p></a>
			</div>
		</div>
		<!--内容部分-->
		<div class="welcomeMainALL">
			<!--始终在中间的内容-->
			<div class="welcomeMain">
				<div class="welcomeMainInclude">
					<img class="welcome-identity" src="/Public/app/img/welcome-identity.png"/>
					<div class="welcomeThreeImg">
						<div class="welcomeBoss">
							<img src="/Public/app/img/welcomeBoss.png" />
							<p>
								<img src="/Public/app/img/welcomeChecked.png" />
							</p>
						</div>
						<div class="welcomeManager">
							<img src="/Public/app/img/welcomeManager.png" />
							<p>
								<img src="/Public/app/img/welcomeChecked.png" />
							</p>
						</div>
						<div class="welcomeBookkeeper">
							<img src="/Public/app/img/welcomeBookkeeper.png" />
							<p>
								<img src="/Public/app/img/welcomeChecked.png" />
							</p>
						</div>
					</div>
					<div class="LoginWords">
						<p><span>已有账号</span><a href="<?php echo U('Login/loginPage');?>">立即登录</a></p>
						<p><a href="<?php echo U('Register/welcomeTwo');?>">跳过</a></p>
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
</html>