<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>我的消息</title>
		<link rel="stylesheet" href="/Public/app/css/my-information.css" />
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<link rel="stylesheet" href="/Public/app/css/fenye.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/fenye.js"></script>
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
		<!--
		 <li class="bac-a color-d">帮助中心</li>
		<li class="i bac-e color-v" name="basif"><a href="<?php echo U('HelpCenter/payProblem');?>">支付问题</a></li>
		<li class="i bac-e color-v" name="basio"><a href="<?php echo U('HelpCenter/billProblem');?>">发票问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/accountProblem');?>">账户问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/makeselfProblem');?>">定制服务</a></li>
		-->
	</ul>
</div>


				<!--个人信息-->
				<div class="main_person_text"  style="width: 700px;">
					<p class="person_title"><span>我的消息</span></p>
					<div class="messageBtn">
						<div class="message">
                                <div class="delete">
                                    <div class="deleteAddress" style="background:#55bdcf;"><p style="color: #ffffff;">删除消息</p></div>
                                </div>
                                <div class="read">
                                    <div class="readAddress" style="background:#55bdcf;"><p style="color: #ffffff;">标为已读</p></div>
                                </div>
                                <p class="checkAll"><input type="checkbox" id="check" onclick="ck()"/><label for="check">全选</label></p>
						</div>
						<!--<div class="notice">
							<div class="instationAddress"><p>站内公告</p><img src="img/delivery-address/gou.png"/></div>
						</div>-->
					</div>
					<div class="messageMain">

						<div class="messageMainText">
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><p>
								<input type="checkbox" name="mid" value="<?php echo ($message["id"]); ?>"/>
								<span ><?php echo ($message["title"]); ?></span>
								<span>【<?php echo ($message["send_time"]); ?>】</span>
								<a href="#">
									<?php if($message["isread"] == 0): ?>未读
									<?php else: ?>
									已读<?php endif; ?>
								</a>
							</p><?php endforeach; endif; else: echo "$empty" ;endif; ?>
						</div>
						<!--页数-->
							<div class="page">
								<?php echo ($page); ?>
							</div>
					</div>
					<input type="hidden" value="<?php echo ($nowPage); ?>" name="nowPage">
					
				</div>
				
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
				<li><a href="http://www.changcaizixun.com">天津长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">北京长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">太原长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">广州长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">成都长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">长沙长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">金华长财咨询</a></li>
				<li><a href="http://www.changcaizixun.com">四度信息</a></li>
			</ul>
		</div>
		<div class="footerAll">
			<div class="footerAllCenter"> 
				<div class="footCenterFirst">
					<img src="/Public/app/img/logoxia.png" />
				</div>
				<div class="footHelpCenter">
					<h5>帮助中心</h5>
					<p><a href="<?php echo U('HelpCenter/index');?>?ques=zhifupro">支付问题</a></p>
					<p><a href="<?php echo U('HelpCenter/index');?>?ques=fapiaopro">发票问题</a></p>
					<p><a href="<?php echo U('HelpCenter/index');?>?ques=zhhupro">账户问题</a></p>
					<p><a href="<?php echo U('HelpCenter/index');?>?ques=dingzhipro">定制问题</a></p>
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

		</div>
	</body>
	<script>
			$(function(){
				$(".bac-e a").eq(5).css("color","#55BDCF");
					/*
					$("#check").click(function(){
							if (this.checked) {
									$(".messageMainText p").find("input").each(function () { 
										$(this).attr("checked", true);
									});
							}
							else{
								$(".messageMainText p").find("input").each(function () {
						                $(this).attr("checked", false);
						    	});
							}
							
					});
					*/
					//删除和标为已读切换
//					$(".deleteAddress").css("border","3px #55bdcf solid");
//					$(".deleteAddress").mouseover(function(){
//						$(this).css("border","3px #55bdcf solid");
//						$(".readAddress").css("border","3px #cccccc solid");
//					});
//					$(".readAddress").mouseover(function(){
//						$(this).css("border","3px #55bdcf solid");
//						$(".deleteAddress").css("border","3px #cccccc solid");
//					});
					//删除消息
					$(".deleteAddress").click(function(){
						/*
						if ($(".messageMainText p input[type='checkbox']:checked")) {
							$(".messageMainText p input[type='checkbox']:checked").parent().css("display","none");
						} 
						*/

						//获取消息id
						var ids = '';
						$('input[name=mid]:checked').each(
							function() {
								ids = ids + ' ' + $(this).val();
							}		
								
						);

						var nowPage = $('input[name=nowPage]').val();

						$.post(
							"<?php echo U('WebMessage/deleteMessage');?>", 
							{'mid':ids, 'page':nowPage},

							function(res) {
								$('input[name=mid]:checked').parent().remove();
								if(!res.code) {
									alert(res.msg);
								} else if(res.code == '1') {
									var nodes = res.msg;
									var htmls = $(".messageMainText").html();
									htmls += res.msg;
									$(".messageMainText").html('');
									$(".messageMainText").html(htmls);
								}	
							}
								
						);
					})
					//标记为已读、]
					$(".readAddress").click(function(){
						//获取消息id
						var ids = '';
						$('input[name=mid]:checked').each(
							function() {
								ids = ids + ' ' + $(this).val();
							}		
								
						);

						$.post(
							"<?php echo U('WebMessage/signReaded');?>", 
							{'mid':ids},
							function(res) {
								if(res) {
									$(".messageMainText p input[type='checkbox']:checked").siblings("a").html("已读");
									$(".messageMainText p input[type='checkbox']:checked").siblings("a").css("color","#0098B3");
								}
							}
						);
					})
			});
			//文字
			document.body.innerHTML = document.body.innerHTML.replace(/未读/ig,"<span style='color: #f55e5e;'>$&</span>");


			function ck() {
				var Ock = document.getElementsByName('mid');
				var OckBtn = document.getElementById('check');

				for(var i=0; i < Ock.length; i++) {
					if(OckBtn.checked) {
						Ock[i].checked = true;
					} else {
						Ock[i].checked = false;
					}
				}
			
			}

		//分页样式
		var page = <?php echo ($nowPage); ?>; 
		$('.page').children('li').eq(page-1).css({'background':'#55bdcf'}).find('a').css('color','#FFFFFF');
	</script>
</html>