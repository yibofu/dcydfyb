<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-在线报名</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/sign_up.css" />
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
	</head>
	<body style="background:white;">
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

	
		<div class="sign_all" style="line-height:50px;">

			<!--在线报名的banner-->
			<div class="confirmation_banner">
				<img src="/Public/app/img/confirmation_banner_img.png" />
			</div>
			
			<div class="part_one">
				<!--申请的课程-->
				<div class="apply_classes">
					<p class="apply_classes_title"><img src="/Public/app/img/apply_classes_img.png"><span>您申请的课程</span></p>
					<p class="apply_classes_text"><span>课程名称：</span><span style="color: #666666;font-weight: 500;"><?php echo ($courseInfo["title"]); ?></span></p>
					<p class="apply_classes_text"><span>时间地点：</span><span><?php echo ($courseInfo["info"]); ?></span></p>
					<p class="apply_classes_text"><span>课程单价：</span><span>￥<?php echo ($courseInfo["cost"]); ?></span><img src="/Public/app/img/book.png"><a style="font-size: 18px;">费用说明</a></p>
				</div>
				<!--培训收益-->
				<div class="training-income">
					<div class="training-income_title"><img src="/Public/app/img/training-income.png"><span>培训收益</span>
						<button><img src="/Public/app/img/training_btn.png" />该课大纲</button>
					</div>
					<textarea rows="3">
						认识——全面预算对企业完成战略目标的重要性
						明确——高效的全面预算管理体系中的关键点  
						理解——构建适合自己企业的预算管理体系思路
					</textarea>
				</div>
			</div>
			<!--联系人基本信息-->
			<form action="<?php echo U('Kecheng/confirmation');?>" method="post">
			<div class="training_person">
				<p class="training_person_title"><img src="/Public/app/img/training_person.png"><span>联系人基本信息</span><span>已有扁鹊帐号？请点击<span style="color: #F55E5E;">【登录】</span>后调后联系人及学员信息</span></p>
				<p class="person_information"><span>*</span>姓名：<input type="text" name="uname"></p>
				<p class="person_information"><span>*</span>部门：<input type="text" name="apart"></p>
				<p class="person_information"><span>*</span>邮件：<input type="text" name="mail"></p>
				<p class="person_information"><span>*</span>职位：<input type="text" name="postion"></p>
				<p class="person_information"><span>*</span>公司：<input type="text" name="company"></p>
				<p class="person_information"><span>*</span>手机：<input type="text" name="phone"></p>
			</div>
			<!--付款方式-->
			<div class="pay_style">
				<p class="pay_style_title"><img src="/Public/app/img/pay_style.png"><span>付款方式</span></p>
				<p class="bank_price"><input type="radio"id="bank_price_input"><label for="bank_price_input">线下付款</label></p>
			</div>
			<!--其他要求-->
			<div class="other_requirements">
				<p class="other_requirements_title"><img src="/Public/app/img/require.png"/><span>您的其它要求及相关说明</span></p>
				<textarea placeholder="在此填写您的其它要求，诸如发票抬头等" name="others"></textarea>
			</div>
			<!--提交信息-->
			<div class="submit_btn">
				<button type="submit">提交信息</button>
			</div>
			<input type="hidden" value="<?php echo ($courseInfo["id"]); ?>" name="cour" />
			</form>
		</div>
		<!--友情链接-->
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