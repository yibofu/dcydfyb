<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>欢迎登录</title>
		<link rel="stylesheet" href="/Public/app/css/welcomeTwo.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/js/welcomeTwo.js" ></script>
		<script>
		function go(){
			$(".welcomeSroll").animate({"height":"321px"},1000);
		}
		$(function(){
			var timer=setInterval("go()",500);
		});
		</script>
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
				<div class="welcomeMainInclude">
					<img class="welcome-identity" src="/Public/app/img/welcome-identity2.png"/>
					<div class="welcomeFourImg">
						<div class="welcomePerson">
							<img src="/Public/app/img/welcomePerson1.png" />
						</div>
						<div class="welcomeScrollAll">
							<div class="welcomeSroll">
								<div class="welcomeSrollText">
									<p>企业税务筹划</p>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
								</div>
								
							</div>
							<div class="welcomeSroll">
								<div class="welcomeSrollText">
									<p>营改增</p>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
								</div>
								
							</div>
							<div class="welcomeSroll">
								<div class="welcomeSrollText">
									<p>融资并购</p>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
									<div class="cheText">
										<input type="checkbox" id="chekOne"/>
										<label for="chekOne">新三板</label>
										<p>
											<img src="/Public/app/img/xiulian.png" />
										</p>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				<div class="welcomeGo">
					<p><a href="<?php echo U('Register/doorway');?>">返回</a></p>
					<p><a href="<?php echo U('Register/vipRegister');?>">进入</a></p>
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