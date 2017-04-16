<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>线下课程</title>
		<link rel="stylesheet" href="/Public/app/css/Offline-Courses.css" />
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<link rel="stylesheet" href="/Public/app/css/fenye.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/app/js/fenye.js" ></script>
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
				<div class="main_person_text" style="width: 780px;">
					<p class="person_title"><span>线下课程</span></p>
					<div class="deleteDay7">
						<p>七天内未付款的课程将自动删除</p>
					</div>
					<div class="coursesTitle">
						<p>购课信息</p>
						<p>状态</p>
						<p>操作</p>
					</div>
					<div class="coursesText">
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$course): $mod = ($i % 2 );++$i;?><div class="textSpecific">
							<img src="/Public/app/img/课程图片.png"/>
							<p class="imgText">
								<span><?php echo ($course["courseName"]); ?></span>
								<span>开课时间&nbsp;|<span><?php echo ($course["date"]); ?></span></span>
								<span>
									<?php if($course['paytype'] == 1): ?><img src="/Public/app/img/offline-pay.png">
									<?php elseif($course['paytype'] == 2): ?>
									<img src="/Public/app/img/online-pay.png"><?php endif; ?>
									<a href="#" style="color: #0098B3;"><?php echo ($course["dpaytype"]); ?></a>
								</span>
							</p>
							<p class="status"><?php echo ($course["dstatus"]); ?></p>
							<?php if($course["status"] == 1): ?><div>
								<!--
								<a href="#">立即付款</a>
								-->
								<a href="<?php echo U('MyOpenCourse/cancelSign');?>?courid=<?php echo ($course["id"]); ?>">取消报名</a>
								<p><a href="<?php echo U('MyOpenCourse/delSign');?>?courid=<?php echo ($course["id"]); ?>">删除记录</a></p>
							</div>
							<?php elseif($course["status"] == 2 && $course["isevaluate"] == 0): ?>
							<div>
								<a href="<?php echo U('MyOpenCourse/evaluate');?>?cid=<?php echo ($course["id"]); ?>">评价课程</a>
								<p><a href="<?php echo U('MyOpenCourse/delSign');?>?courid=<?php echo ($course["id"]); ?>">删除记录</a></p>
							</div>
							<?php elseif($course["status"] == 2 && $course["isevaluate"] == 1): ?>
							<div>
								<p>已评价</p>
								<p><a href="<?php echo U('MyOpenCourse/delSign');?>?courid=<?php echo ($course["id"]); ?>">删除记录</a></p>
							</div>
							<?php elseif($course["status"] == 3): ?>
							<div>
								<p><a href="<?php echo U('MyOpenCourse/delSign');?>?courid=<?php echo ($course["id"]); ?>">删除记录</a></p>
							</div><?php endif; ?>
						</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
					</div>
						<!--页数-->
					<div class="page">
						<?php echo ($page); ?>
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


		</div>
	</body>
	<script>
			$(function(){
				$(".bac-e a").eq(10).css("color","#55BDCF");
			});
		</script>
</html>