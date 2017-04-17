<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-欢迎登陆</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>

		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
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
				<a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/welcomeLogo.png" width="160px" height="60px"/></a>
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