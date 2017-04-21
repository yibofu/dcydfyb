<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>问题详情</title>
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<link rel="stylesheet" href="/Public/app/css/problem-details.css" />
		<link rel="stylesheet" href="/Public/app/css/iconfont.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/iconfont.js"></script>
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
				<div class="main_person_text" style="width: 700px;">
					<p class="person_title"><span>问题详情</span></p>
					<div class="firstTr">
						<p></p>
						<p>问题</p>
						<p><?php echo ($question["addtime"]); ?></p>
					</div>
					<div class="score">
						<div class="scoreProblem">
							<p>
							<?php echo ($question["question"]); ?>
							</p>
						</div>
						<div class="scoreContent">
							<p>答案：</p>
							<p><?php echo ($answer["answer"]); ?></p>
						</div>
					</div>
					<div class="solveProblem">
						<div class="solveProblemLeft">
							<p>本次答案是否解决了您的问题？</p>
							<button type="button" attr="2" name="solve" class="settleBtn">
								<p><i class="iconfont" style="color: #F55E5E;line-height: 18px;">&#xe61d;</i><span>已解决</span></p>
								<img class="settle" style="top: -21px;" src="/Public/app/img/gou.png"/>
							</button>
							<button attr="3" type="button" name="solve" class="unsettleBtn">
								<p><i class="iconfont" style="color: #3cf497;">&#xe60d;</i><span >未解决</span></p>
								<img class="unsettle" style="top: -21px;" src="/Public/app/img/gou.png"/>
							</button>
						</div>
						<div class="solveProblemRight">
							<a href="<?php echo U('MyService/evaluate');?>?sid=tw_<?php echo ($question["id"]); ?>">评价</a>
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
//				$(".bac-e a").eq(1).css("color","#55BDCF");
				$(".settleBtn").css("border","2px #55bdcf solid");
				$(".settleBtn").find("img").css("display","block");
				$(".unsettleBtn").css("border","2px #cccccc solid");;
				$(".unsettleBtn").find("img").css("display","none");
				$(".solveProblemLeft>button").click(function(){
					$(this).css("border","2px #55bdcf solid");
					$(this).find("img").css("display","block");
					$(this).siblings("button").css("border","2px #cccccc solid");
					$(this).siblings("button").find("img").css("display","none");
				});
				
				$("button[name=solve]").click(function() {
					var qid = <?php echo ($question["id"]); ?>;
					var scode = $(this).attr('attr');

					$.post(
						"<?php echo U('MyService/solved');?>",
						{'qid':qid, 'scode':scode},
						function(res) {
							alert(res);
						}
					);
				})
			});
		</script>
</html>