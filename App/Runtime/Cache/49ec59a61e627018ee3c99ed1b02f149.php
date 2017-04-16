<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>个人信息</title>
		<link rel="stylesheet" href="/Public/app/css/person_page.css" />
		<link rel="stylesheet" type="text/css" href="/Public/app/css/commonality.css"/>
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/person_page.js"></script>
		<script type="text/javascript" src="/Public/app/js/birthday.js"></script>
	</head>
	<body>
		<div class="page_all">
			<!--banner部分-->
			<div class="banner">
	<div class="banner_range">
		<div class="range_left">
			<a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/logo.png" /></a>
			<p>企业财务健康顾问</p>
		</div>
		<div class="range_right">
			<p>用户中心</p>
			<button>用户中心</button>
		</div>
	</div>
</div>

			<!--内容部分-->
			<div class="text_all">
				<!--左侧菜单栏-->
				<div class="menu_list">
	<ul class="three-a fl title-a text tab-nav">
		<li class="bac-a color-d" id="min-a" name="basia">账户信息</li>
		<li class="bac-e color-v" name="basib"><a href="<?php echo U('MyCenter/index');?>">我的首页</a></li>
		<li class="bac-e color-v" name="basib"><a href="<?php echo U('MyCenter/personInfo');?>">个人信息</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('MyCenter/bill');?>">我的发票</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('MyCenter/accountSecurity');?>">账户安全</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('ReciveAddress/index');?>">收货地址</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('WebMessage/index');?>">我的消息</a></li>
		<li class="bac-a color-d">我的服务</li>
		<li class="bac-e color-v" name="basid"><a href="<?php echo U('MyService/diagnoseList');?>">我的诊断</a></li>
		<li class="i bac-e color-v" name="basie"><a href="<?php echo U('MyService/apporintmentList');?>">我的约见</a></li>
		<li class="i bac-e color-v" name="basie"><a href="<?php echo U('MyService/questionList');?>">我的提问</a></li>
		<li class="bac-a color-d">课程中心</li>
		<li class="i bac-e color-v" name="basif"><a href="<?php echo U('MyCart/index');?>">线上课程</a></li>
		<li class="i bac-e color-v" name="basio"><a href="<?php echo U('MyOpenCourse/index');?>">线下课程</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('MyCollect/index');?>">收藏课程</a></li>
		 <li class="bac-a color-d">帮助中心</li>
		<li class="i bac-e color-v" name="basif"><a href="<?php echo U('HelpCenter/payProblem');?>">支付问题</a></li>
		<li class="i bac-e color-v" name="basio"><a href="<?php echo U('HelpCenter/billProblem');?>">发票问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/accountProblem');?>">账户问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/makeselfProblem');?>">定制服务</a></li>
	</ul>
</div>


				<!--个人信息-->
				<form id="datas" action="<?php echo U('MyCenter/updateInfo');?>" method="post" enctype="multipart/form-data">
				<div class="main_person_text">
					<p class="person_title"><span>个人信息</span></p>
					<!--个人信息头像-->
					<div class="person_information">
						<!--
						<div class="person_information_left">
							<input type="file" name="photo">
						</div>
							-->
						<div class="my_photo div1">
						<img src="<?php echo ($person["img"]); ?>" class="person_information_img">
							<div class="div2">上传图片</div>
							<input value=" 上传头像" type="file" name="file" class="inputstyle" />
						</div>
						<div class="person_information_right">
							<p>用户名：<span><?php echo ($person["nickname"]); ?></span></p>
							<p>会员类型：
								<?php if($person["is_vip"] == 2): ?><span>普通会员</span>
								<?php elseif($person["is_vip"] == 1): ?>
								<span>金鹊会员</span><?php endif; ?>
							</p>
							<?php if($person["is_vip"] == 2): ?><a href="#">升级金鹊会员</a><?php endif; ?>
						</div>
					</div>
					<!--个人信息-->
					<div class="person_information_form">
						<div class="nickname">
							<p><span>*</span>昵称：<input type="text" name="sname" value="<?php echo ($person["nickname"]); ?>" required="required"/></p>
						</div>
						<div class="sex">
							<p><span>*</span>性别：
							<input type="radio" value="1" name="sex" <?php if($person["sex"] == 1): ?>checked="checked"<?php endif; ?>><label>男</label>
							<input type="radio" value="0" name="sex" <?php if($person["sex"] == 2): ?>checked="checked"<?php endif; ?>><label>女</label></p>
						</div>
						<div class="birthday">
							<p>
								<span>*</span>生日：
								<select class="sel_year" name='year' rel="<?php echo ($person["birth"]["0"]); ?>"></select><span>年</span>
								<select class="sel_month"  name='month' rel="<?php echo ($person["birth"]["1"]); ?>"></select><span>月</span>
								<select class="sel_day" name='day' rel="<?php echo ($person["birth"]["2"]); ?>"></select><span>日</span>
							</p>
						</div>
						<div class="company">
							<p><span>*</span>公司：<input type="text" required="required" value="<?php echo ($person["firmname"]); ?>" placeholder="大财有道" name="company"/></p>
						</div>
						<div class="job">
							<p><span>*</span>职位：<input type="text" required="required"  value="<?php echo ($person["position"]); ?>" placeholder="产品经理" name="position"/></p>
						</div>
						<div class="business">
							<p><span>*</span>行业：<input type="text" required="required"  value="<?php echo ($person["industry"]); ?>" placeholder="互联网" name="trade" /></p>
						</div>
						<div class="interests">
							<p><span>*</span>兴趣爱好：请选择您感兴趣的分类，给您最精准的推荐 </p>
							<div>
									<?php if(is_array($hobbylist)): $i = 0; $__LIST__ = $hobbylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hobby): $mod = ($i % 2 );++$i;?><input type="checkbox" name="hobs[]" style="display:none" value="<?php echo ($hobby["v"]); ?>" <?php if($hobby["check"] == 1): ?>checked="checked"<?php endif; ?> id="<?php echo ($hobby["pysx"]); ?>"/>
									<label for="<?php echo ($hobby["pysx"]); ?>" class="onelabel" <?php if($hobby["check"] == 1): ?>style="border:3px #55bdcf solid"<?php endif; ?>><?php echo ($hobby["name"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
						<div class="company">
							<p>邮箱：<span><input type="text" required="required" value="<?php echo ($person["mail"]); ?>"  placeholder="邮箱" name="mail" /></span></p>
						</div>
						<div class="trueName">
							<p><span>*</span>真实姓名：<input class="trueNameInput"  value="<?php echo ($person["truename"]); ?>" name="relname" type="text" placeholder="董丽丽" required="required"/><span class="hint"></span></p>
						</div>
						
						<div class="btn">
							<button class="asubmitBtn" name="sub" type="submit">提交</button>
						</div>
						</form>
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


		</div>
	</body>

	<script>  
		$(function () {
			$.ms_DatePicker({
				YearSelector: ".sel_year",
				MonthSelector: ".sel_month",
				DaySelector: ".sel_day"
			});
		});
	</script>
</html>