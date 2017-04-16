<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
	<title>扁鹊财院-开通会员</title>
	<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
	<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
	<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
	<link rel="stylesheet" href="/Public/app/css/official.css">
	<link rel="stylesheet" href="/Public/app/css/open_vip.css" />
	<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
	<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>

</head>
<body style="background-color:white ;">
<!--头部 c02003-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>导航</title>
		<link rel="stylesheet" href="/Public/app/css/head.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/js/head.js" ></script>
	</head>
	<body>
		
		<div class="headAll">

			<!--头部栏-->
			<div class="headTop">
				<div class="headTopCenter">
				<?php if($_SESSION['admins']['id'] == '' && $_SESSION['rigister']['id'] == ''): ?><ul>
						<li class="welHead"><a href="#">欢迎访问扁鹊财院</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">登录</a></li>
						<li class="ahref"><a href="<?php echo U('Register/doorway');?>">注册</a></li>
						<li class="ahref"><a href="#">消息</a></li>
						<li class="ahref"><a href="<?php echo U('Index/user');?>">用户中心</a></li>
					</ul>
				<?php else: ?>
					<ul>
						<li class="welHead">您好，欢迎<a href="<?php echo U('MyCenter/index');?>" style="color:#ff5918;"><?php echo ($_SESSION['admins']['Phone']); ?></a>访问扁鹊财院</li>
						<li class="ahref"><a href="<?php echo U('Index/loginout');?>" style="color:#ff5918;">[退出]</a></li>
						<li class="ahref"><a href="#">消息</a></li>
						<li class="ahref"><a href="<?php echo U('MyCenter/index');?>">用户中心</a></li>
					</ul><?php endif; ?>
				</div> 
			</div>
			<!--中间栏目-->
			<div class="serchTop">
				<div class="serchTopCenter">
					<!--左边logo图标-->
					<a href="<?php echo U('Index/index');?>"><img class="LOGOAll" src="/Public/app/img/LOGOAll.png" /></a>
					<!--搜索框-->
					<div class="serchInput">
						<div class="InputAll">
							<form action="<?php echo U('Search/search');?>">
								<select  name="drop2">
									<option  value="article">搜文章</option>
									<option value="video">搜视频</option>
								</select>
								<input type="search" name="keywords" placeholder="请输入关键词"/>
								<button type="submit">搜索</button>
							</form>
						</div>
						
					</div>
					<!--右边服务图标和文字-->
					<div class="phoneSever">
						<img src="/Public/app/img/severlogo.png" />
						<div class="severImgText">
							<p>24小时服务热线</p>
							<p>010-5945-8017</p>
						</div>
					</div>
				</div>
			</div>
			<div class="navBar">
				<div class="navBarTitle">
					<ul>
						<a href="<?php echo U('Index/index');?>" class="liOutA">首页</a>
						<a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>" class="liOutA">财税问诊</a>
						<a href="<?php echo U('Index/kce');?>" class="liOutA">课程中心</a>
						<a href="<?php echo U('Article/message');?>" class="liOutA">新政速递</a>
						<a href="<?php echo U('AskAnswer/Asks');?>" class="liOutA">百问百答</a>
						<a href="<?php echo U('Vip/openVip');?>" class="liOutA">会员专享</a>
						<a href="<?php echo U('Teacher/teacherList');?>" class="liOutA">专家团队</a>
						<a href="<?php echo U('Index/about');?>" class="liOutA">关于扁鹊</a>
					</ul>
				</div>
			</div>
		</div>
		
	</body>
</html>

<div class="vip_all">

	<!--banner图片-->
	<div class="open_vip_banner">
		<img src="/Public/app/img/open_vip_banner.png" />
	</div>
	<!--开通会员的内容-->
	<div class="open_vip_main">
		<div class="vip_title">
			<em>VIP</em>
			<p>会员规则</p>
		</div>
		<div class="vip_text">
			<!--初级会员-->
			<div class="vip_primary">
				<img src="/Public/app/img/vip_num1.png" />
				<hr />
				<p>初级会员</p>
				<div style="clear: both;"></div>
				<ul>
					<li><p>凡在扁鹊财院注册帐号后，即成为初级会员。</p></li>
					<li><p>初级会员可以免费浏览网站内分享的文章资讯及一些免费视频课程。</p></li>
				</ul>
			</div>
			<!--开通会员-->
			<!--<div class="open_vip_btn_box">-->
				<!--<button class="open_vip_btn">开通会员</button>-->
			<!--</div>-->

			<!--金鹊会员-->
			<div class="vip_jinque">
				<img src="/Public/app/img/vip_num2.png" />
				<hr />
				<p>金鹊会员</p>
				<div style="clear: both;"></div>
				<ul>
					<li><p>服务费用更优惠</p></li>
					<li><p>金牌顾问全程跟踪</p></li>
					<li><p>极速连线</p></li>
				</ul>
			</div>
		</div>


	</div>
	<!--步骤1.2.3-->
	<div class="vip_steps">
		<!--第一步-->
		<div class="vip_step_1">
			<p>1.VIP会员可免费观看扁鹊财院资深讲师分享的直播课程，每周一期，全年免费。</p>
			<img src="/Public/app/img/vip_step1.png" />
		</div>
		<!--第二步-->
		<div class="vip_step_2">
			<p>2.VIP会员有机会参加扁鹊财院组织的线下沙龙分享。</p>
			<img src="/Public/app/img/vip_step2.png" />
		</div>
		<!--第三步-->
		<div class="vip_step_3">
			<p>3.VIP会员有机会与资深财务专家同台直播。</p>
			<img src="/Public/app/img/vip_step3.png" />
		</div>
	</div>
	<!--按钮-->
	<div class="promptly_open">
		<a href="<?php echo U('Vip/member');?>"><button >升级金鹊会员？立即开通</button></a>
	</div>
	<!--友情链接-->

</div>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>尾部</title>
		<link rel="stylesheet" href="/Public/app/css/firendlyLink.css" />
		<link rel="stylesheet" href="/Public/app/css/footer.css" />
	</head>
	<body>
	<div class="friendly_link">
			<p class="link_title">友情链接</p>
			<ul>
				<li><a href="www.changcaizixun.com">天津长财咨询</a></li>
				<li><a href="www.changcaizixun.com">长财咨询</a></li>
				<li><a href="www.changcaizixun.com">北京长财咨询</a></li>
				<li><a href="www.changcaizixun.com">太原长财咨询</a></li>
				<li><a href="www.changcaizixun.com">广州长财咨询</a></li>
				<li><a href="www.changcaizixun.com">成都长财咨询</a></li>
				<li><a href="www.changcaizixun.com">长沙长财咨询</a></li>
				<li><a href="www.changcaizixun.com">金华长财咨询</a></li>
				<li><a href="www.changcaizixun.com">四度信息</a></li>
			</ul>
		</div>
		<div class="footerAll">
			<div class="footerAllCenter"> 
				<div class="footCenterFirst">
					<img src="/Public/app/img/logoxia.png" />
				</div>
				<div class="footHelpCenter">
					<h5>帮助中心</h5>
					<p><a href="#">购物帮助</a></p>
					<p><a href="#">支付方式</a></p>
					<p><a href="#">选定课程</a></p>
				</div>
				<div class="footerAboutUs">
					<h5>关于我们</h5>
					<p><a href="#">了解我们</a></p>
					<p><a href="#">关注我们</a></p>
					<p><a href="#">加入我们</a></p>
				</div>
				<div class="footerContactUs">
					<h5>联系我们</h5>
					<p><a href="#">公司地址：北京市朝阳区旺座大厦东塔</a></p>
					<p><a href="#">客户服务：18310618231</a></p>
					<p><a href="#">版权所有：www.bianquecxy.com</a></p>
				</div>
				<div class="footerOrder">
					<div class="footPhoneHot">
						<h5>订购热线</h5>
						<p>010-594-58017</p>
						<p>© 2016 大财有道科技</p>
						<p>京ICP备16057406号</p>
					</div>
					<div class="footCode">
						<img src="/Public/app/img/er.png" />
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

</body>
</html>