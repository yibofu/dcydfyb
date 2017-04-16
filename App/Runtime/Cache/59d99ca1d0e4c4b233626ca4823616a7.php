<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> <html>
	<head>
		<meta charset="utf-8">
		<title>个人中心主页</title>
		<link rel="stylesheet" href="/Public/app/css/person_homepage.css" />
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/person_homepage.js"></script>
		<style type="text/css">
			.MinHeight{
				min-height: 200px;
				text-align:center;
				line-height: 200px;
				border:1px solid #cccccc;
				margin-bottom: 20px;
			}
			.MinHeight p{
				color: #cccccc;
				font-size: 14px;
			}
			.my_order>p span a {
				text-decoration:none;
				color: #0098b3;
			}		
			.my_order>p span a:hover {
				text-decoration:underline;
			}		
		</style>
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


				<!--左侧内容部分-->
				<div class="main_left">
					<!--个人信息-->
					<div class="person_information">
						<!--头像-->
						<div class="my_photo">
							<img src="<?php echo ($userInfo["img"]); ?>"  class="person_information_img">
						</div>
						<!--名字以及信息-->
						<div class="name_information">
							<p class="name"><?php echo ($userInfo["nickname"]); ?></p>
							<p class="vip_mold">会员类型：<span><?php echo ($userInfo["vipType"]); ?></span></p>
							<div class="SAM">
								<p>账户安全：</p>
								<div>
									<p></p>
									<p></p>
									<p></p>
								</div>
								<p class="SAM_last_p">较高</p>
							</div>
						</div>
						<!--待付款-->
						<div class="name_icon">
							<div>
								<img src="/Public/app/img/obligation.png" />
								<p>待付款<span><?php echo ($noPaynumber); ?></span></p>
							</div>
							<div>
								<img src="/Public/app/img/answer.png" />
								<p>待回答<span><?php echo ($noAnswer); ?></span></p>
							</div>
							<div>
								<img src="/Public/app/img/sign_up.png" />
								<p>已报名<span><?php echo ($signUp); ?></span></p>
							</div>
							<div>
								<img src="/Public/app/img/meet.png" />
								<p>待约见<span><?php echo ($yjtNumber); ?></span></p>
							</div>
						</div>
					</div>
					<!--我的订单-->
					<div class="my_order">
						<p>我的订单<span><a href="<?php echo U('MyCart/index');?>">查看全部订单</a></span></p>
						<!--我的订单开始遍历-->
						<?php if(is_array($orderInfo)): $i = 0; $__LIST__ = $orderInfo;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><div class="my_order_text">
							<img src="<?php echo ($order["img"]); ?>" style="width:122px;" />
							<div class="my_order_text_text">
								<div><p><?php echo ($order["title"]); ?></p></div>
								<div><p>￥<?php echo ($order["money"]); ?></p><p>在线支付</p></div>
							<div><p><?php echo ($order["day"]); ?></p><p><?php echo ($order["hour"]); ?></p></div>
							<div>
								<p style=<?php if($order["status"] == 1): ?>"color: #F55E5E;"<?php endif; ?>><?php echo ($order["chstatus"]); ?></p>
								<?php if($order["status"] == 2): ?><p style="color: #F55E5E;">评价课程</p>
								<?php elseif($order["status"] == 3): ?>
								<p>已评价</p><?php endif; ?>
								
							</div>
							</div>
						</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
					</div>
					<!--最近浏览-->
					<div class="recent">
						<p class="recent_title">最新浏览</p>
						<div class="video_show">
						<!--块级-->
						<?php if(is_array($browserInfo)): $i = 0; $__LIST__ = $browserInfo;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><div class="video_show_part">
								<img class="img_num1"  src="<?php echo ($video["img"]); ?>" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span><?php echo ($video["title"]); ?></span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/person.png" />
									<span style="font-size: 10px;"><?php echo ($video["teacher"]); ?></span>
									<span style="font-size: 10px;" class="price">￥<?php echo ($video["money"]); ?></span>
									<span  style="font-size: 10px;"class="VIP_free">VIP免费</span>
									<img class="star_collect" src="/Public/app/img/collect.png" />
									<span class="star_number" style="font-size: 10px;"><?php echo ($video["collNum"]); ?></span>
								</div>
							</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
						</div>
					</div>
				</div>
				<!--右侧会员推荐-->
				<div class="main_right">
					<!--会员推荐-->
					<div class="vip_introduce">
						<p class="vip_recommend">会员推荐</p>
						<a><img src="/Public/app/img/jinque_vip.png" /></a>
						<div class="boss_thought">
							<div class="boss_thought_model">
								<p class="boss_thought_title">老板财务思维</p>
								<img src="/Public/app/img/video_img.png" width="80%"/>
							</div>
						</div>
					</div>
					
					<!--我的收藏-->
					<div>
						<p class="my_collect_title">我的收藏</p>
						<div class="my_collect">
							<?php if(is_array($collectionInfo)): $i = 0; $__LIST__ = $collectionInfo;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$collect): $mod = ($i % 2 );++$i;?><div class="my_collect_model">
								<img src="<?php echo ($collect["img"]); ?>" style="width:105px;" />
								<p><a href="#"><?php echo ($collect["title"]); ?></a></p>
							</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
			$(function(){
				$(".bac-e a").eq(0).css("color","#55BDCF");
			});
		</script>
</html>