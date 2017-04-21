<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-财税问诊</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<link rel="stylesheet" href="/Public/app/fonts/font/iconfont.css" />
		<link rel="stylesheet" href="/Public/app/css/Video_diagnostic.css" />
		<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
		<script type="text/javascript" src="/Public/app/fonts/font/iconfont.js" ></script>
		<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
		<style>
			.active{
				background: rgba(0,0,0,0.1);
			}
			.confirmText{
				width: 625px;
				height: 275px;
				z-index: 101;
				display: none;
			}
			.confirmTextMain{
				overflow: hidden;
				width: 500px;
				margin: 0 auto;
			}
			.confirmTextImg{
				border-radius: 50%;
				width: 68px;
				height: 68px;
				border: 3px #55bdcf solid;
				overflow: hidden;
				float: left;
				margin-top: 60px;
			}
			.confirmTextText{
				margin-top: 30px;
				width: 350px;
				margin-left:20px;
				float: left;
				padding-top: 30px;
			}
			.confirmTextText p{
				line-height: 25px;
			}
			.confirmTextText p a{
				font-size: 12px;
				color: #F55E5E;
				margin: 0px 10px 0 10px;
			}
			.confirmTextText{
				text-align: center;
			}
			.confirmTextImg img{
				margin-left: 5px;
			}
			.confirmTextText :nth-child(1){
				color: #189dbb;
				font-size: 30px;
				width: 100%;
				margin: 0 auto;
				line-height: 40px;
			}
			.confirmTextText :nth-child(2){
				color: #666666;
				font-size: 12px;
				width: 70%;
				margin:0 auto ;
			}
			.img_num1{
				float: left;
				z-index:-9999;
			}
			.video_show_part i{
				float: left;
				opacity:0;
				margin-top: -80px;
				height: 50px;
				width: 50px;
				margin-left: 50px;
				bottom: auto;
				background: url(/Public/app/img/play.png) center center no-repeat scroll;
				background-size: 50px 50px;
				z-index: 9999;
				-webkit-transition: opacity .4s ease-in;
				-moz-transition: opacity .4s ease-in;
				-ms-transition: opacity .4s ease-in;
				transition: opacity .4s ease-in;
			}

		</style>
	</head>
	<body style="background: white;">
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
				<?php if($_SESSION['admins']['id'] == ''): ?><ul>
						<li class="welHead"><a href="#">欢迎访问扁鹊财院</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">登录</a></li>
						<li class="ahref"><a href="<?php echo U('Register/doorway');?>">注册</a></li>
						<li class="ahref"><a href="#">消息</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">用户中心</a></li>
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

	<!--选择卡-->
	
		<div class="consult_all">
			<!--banner头部图片-->
			
			<div class="consult_banner">
				<img src="/Public/app/img/Video_diagnostic/Video_diagnostic_banner.png" />
			</div>		
			<div class="consult_main" style="margin-top: 60px;">
				<!--内容左边的部分-->
				<div class="consult_left">
					<!--选项卡部分-->
					<div class="TAB_all">
						<!--选项卡-->
						<div class="diagnostic_TAB">
						<!--远程视频诊断-->
						<div class="TAB_num">
							<div><i class="iconfont icon-shipin"></i></div>
							<p>远程视频诊断</p>
						</div>
						<!--面对面咨询-->
						<div class="TAB_num">
							<div><i class="iconfont icon-mianshi"></i></div>
							<p>面对面咨询</p>
						</div>
						<!--我要审核合同-->
						<div class="TAB_num">
							<div><i class="iconfont icon-wodeshenhe"></i></div>
							<p>我要审合同</p>
						</div>
						<!--我要审报表-->
						<div class="TAB_num">
							<div><i class="iconfont icon-04"></i></div>
							<p>我要审报表</p>
						</div>
						<!--财务分析-->
						<div class="TAB_num">
							<div><i class="iconfont icon-tc-hunter"></i></div>
							<p>财务分析</p>
						</div>
					</div>
						<!--选项卡的内容-->
						<div class="TAB_main">
						<!--第一部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_1.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>远程视频诊断</span></p>
								<div class="part_num_text">
									<p>1、预约申请远程视频诊断  【预约申请】</p>
									<p>2、24小时内客服会与您取得联系约定好诊断的时间</p>
									<p>3、财务专家如约与您视频连线，进行财务诊断</p>
									<p>4、诊断完成，请对本次视频诊断做出评价及建议</p>
								</div>
                                <!--确定预约按钮-->
								<div class="confirm_button">
									<button attr="远程视频诊断" name="make">确定预约</button>
								</div>
							</div>
						</div>
						<!--第二部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_2.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>面对面咨询</span></p>
								<div class="part_num_text">
									<p>1、预约申请面对面咨询</p>
									<p>2、24小时内客服会与您取得联系约定好咨询的时间</p>
									<p>3、财务专家如约与您视频连线，进行面对面咨询</p>
									<p>4、诊断完成，请对本次咨询做出评价及建议</p>
								</div>
                                <!--确定预约按钮-->
                                <div class="confirm_button">
                                    <button attr="面对面咨询" name="make">确定预约</button>
                                </div>
							</div>
						</div>
						<!--第三部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_3.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>我要审合同</span></p>
								<div class="part_num_text">
									<p>1、在线提交合同</p>
									<p>2、24小时内专家会与您连线详谈合同事项</p>
									<p>3、详谈完毕，合同进入审改期</p>
									<p>4、合同审改完毕，请点击下载审改后的完整合同</p>
									<p>5、下载合同完毕，请对本次审改做出评价及建议</p>
								</div>
                                <!--确定预约按钮-->
                                <div class="confirm_button">
                                    <button attr="我要审合同" name="make">确定预约</button>
                                </div>
							</div>
						</div>
						<!--第四部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_4.png" style="width: 80%;"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>我要审报表</span></p>
								<div class="part_num_text">
									<p>1、在线提交报表</p>
									<p>2、24小时内专家会与您连线详谈报表事项</p>
									<p>3、详谈完毕，报表进入审改期</p>
									<p>4、报表审改完毕，请点击下载审改后的完整报表</p>
									<p>5、下载报表完毕，请对本次审改做出评价及建议</p>
								</div>
                                <!--确定预约按钮-->
                                <div class="confirm_button">
                                    <button attr="我要审报表" name="make">确定预约</button>
                                </div>
							</div>
						</div>
						<!--第五部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_5.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>财务分析</span></p>
								<div class="part_num_text">
									<p>1、在线填写财务分析需求</p>
									<p>2、扁鹊客服需求进行需求匹配</p>
									<p>3、财务专家进行第二轮把关匹配</p>
									<p>4、发起分析</p>
									<p>5、分析完成后，请对本次分析进行评价</p>
								</div>
                                <!--确定预约按钮-->
                                <div class="confirm_button">
                                    <button attr="财务分析"  name="make">确定预约</button>
                                </div>
							</div>

						</div>
							<div class="confirmText">
								<div class="confirmTextMain">
									<div class="confirmTextImg">
										<img src="/Public/app/img/Video_diagnostic/submitSuccess.png" />
									</div>
									<div class="confirmTextText">
										<p></p >
										<p>请保持电话畅通，客服会在24小时内与您取得
											联系。请在个人中心查看您的服务。</p >
										<p>
											<a href=" " style="color: #F55E5E;font-size: 12px;margin-right: 10px;">返回视频诊断</a><span>|</span><a href="<?php echo U('MyCenter/index');?>">进入个人中心</a>
									    </p >
								    </div>
							    </div>
					    	</div>

                        </div>

					</div>
					<!--扁鹊服务部分-->
					<div class="bianque_service">
						<div><p class="service_title"><img src="/Public/app/img/Video_diagnostic/service_img.png" />扁鹊服务</p><span></span><span>最具专业价值的企业财务问题诊断</span></div>
						<p class="service_text">
							如因特殊原因（包括但不限于恶劣天气、航班延误、授课教师身体不适等情况）造成的培训无法
							按期举办或有所变更，我们会及时通知说明，并安排您改期参加或根据您的情况更改相应培训课程，
							您的参课计划如果有所变更，请务必于培训课程开始前一周通知我们，以便我们安排工作。谢谢！如
							因特殊原因（包括但不限于恶劣天气、航班延误、授课教师身体不适等情况）造成的培训无法按期举
							办或有所变更。
						</p>
					</div>
					<!--课程推荐-->
					<div class="classes_recommend">
						<div><p class="classes_recommend_title"><img src="/Public/app/img/Video_diagnostic/recommend_img.png" />课程推荐</p></div>
						
						<div class="video_show">
						<!--块级-->
							<?php if(is_array($recommendList)): $i = 0; $__LIST__ = $recommendList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="video_show_part">
									<img class="img_num1"  src="<?php echo ($vo["img"]); ?>" />
									<i></i>
									<div class="first_model">
										<p><span>视频</span></p>
										<span style="margin-top:5px;"><?php echo ($vo["title"]); ?></span>
									</div>
									<div class="second_model">
										<img src="/Public/app/img/Video_diagnostic/person.png" />
										<span style="font-size: 10px;">讲师  <?php echo ($vo["name"]); ?></span>
										<img class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div>
				<!--内容右边的部分-->
				<div class="consult_right">
					<!--菜单部分-->
					<div class="main-fr">
		                <div class="main-fr-t">
		                    <ul class="main-fr-t-a">
		                        <li id="swphoto">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-01.png" style="display: none"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-1.png"/>
		                        </li>
		                        <li id="swphota">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-02.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-2.png" style="display: none"/>
		                        </li>
		                        <li id="swphotb">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-03.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-3.png" style="display: none"/>
		                        </li>
		                        <li id="swphotc">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-04.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-4.png" style="display: none"/>
		                        </li>
		                        <li id="swphotd">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-05.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-5.png" style="display: none"/>
		                        </li>
		                        <li><img src="/Public/app/img/menu_img/main-fr-06.jpg"/></li>
		                    </ul>
		                </div>
		                
		            </div>
		            <div class="clear"></div>
					<!--轮播图-->
					<div class="carousel">
						<div class="carousel_title">授课展示图</div>
						<div class="carousel_img">
							<img src="/Public/app/img/carousel_1.png" id="pic" />
						</div>
					</div>
					<!--广告位-->
					<div class="our_achievement">
						<img src="/Public/app/img/our_achievement.png" />
					</div>		
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

		</div>

	</body>
	<script src="/Public/app/js/jquery.min.js"></script>
	<script>

	$(function(){
		//选项卡
		$(".TAB_num i").css("color","#7FCBD9");
		$(".TAB_num p").css("color","#0098b3");
		$(".TAB_num i").eq(0).css("color","white");
		$(".TAB_num").eq(0).css({"background":"#0098b3"});
		$(".TAB_num p").eq(0).css({"color":"white"});
		$(".part_number").eq(0).css("display","block");
		$(".TAB_num div").eq(0).css({"border":"2px #7fcbd9 solid"});
		$(".TAB_num").mouseover(function(){

			$(".confirmText").css({"display":"none"});
			$(".TAB_num").css({"background":"white"});
			$(".TAB_num").eq($(this).index()).css({"background":"#0098b3"});
			$(".TAB_num div").css({"border":"2px #7fcbd9 solid"});
			$(".TAB_num div").eq($(this).index()).css({"border":"2px white solid"});
			$(".TAB_num i").css({"color":"#7fcbd9"});
			$(".TAB_num i").eq($(this).index()).css({"color":"white"});
			$(".TAB_num p").css({"color":"#0098b3"});
			$(".TAB_num p").eq($(this).index()).css({"color":"white"});
			$(".part_number").css("display","none");
			$(".part_number").eq($(this).index()).css("display","block");

			var attr = $(this).children('p').html();
			$('button[name=make]').attr('attr', attr);
		});
		//视频显示效果
//		$(".video_show_part").mouseover(function(){
//			$(this).find(".img_num1").attr("src","/Public/app/img/Video_diagnostic/Video_play.png");
//			$(this).find(".img_num1").addClass("active");
//
//		});
//		$(".video_show_part").mouseleave(function(){
//			<!--<volist name="recommendList" id="vo">-->
//			$(this).find(".img_num1").attr("src","");
////			$(this).find(".img_num1").addClass("active");
//
//		});
		$(".video_show_part").hover(function () {
//			$(this).find("i").css("display","block");
			$(this).find("i").css("opacity",1);
		});
		$(".video_show_part").mouseleave(function () {
//			$(this).find("i").css("display","none");
//
			$(this).find("i").css("opacity",0);
		});
		//收藏星星
		$(".star_collect").click(function(){

			$(".star_collect").eq($(this).parent().parent().index()).attr("src","/Public/app/img/Video_diagnostic/collect_check.png");
		});
	});
	
	
	
	//轮播
		window.onload=function(){
			var OImg=document.getElementById("pic");
			var timer=setInterval(go,1000);
			var index=0;
			function go(){
				index++;
				if (index==5) {
					index=1;
				}
				OImg.src="/Public/app/img/carousel_"+index+".png";
			}
			
		}
	//鼠标指上去会有提示
		$(function(){
			//鼠标移上去有提示性的文字
//				定义了x y的坐标初始值
				var x=10;
				var y=20;
				$("a.tooltip").mouseover(function(e){
//					e表示的一个事件对象在这里表示的是鼠标移上去的事件对象----鼠标指针的位置
					var tooltip="<div id='tooltip'>"+this.title+"</div>";
					$("body").append(tooltip);
					//pageX,pageY鼠标指针位置，相对于文本的左边缘
					$("#tooltip").css({"position":"relative","top":(e.pageY+y)+"px","left":(e.pageX+x)+"px","height":"20px","width":"50px","line-height":"20px"}).show("fast");
					//这里必须写相对定位或者绝对定位，要不然Top和Left都不能实现作用
				}).mouseout(function(){
					$("#tooltip").remove();
				});
			//最底下按钮和内容的切换
				$(".leaveword_btn").find("button").eq(0).css({"background-color":"#47b8cc","color":"white"});
				$(".part_num").css("display","none");
				$(".part_num").eq(0).css("display","");
				$(".leaveword_btn").find("button").click(function(){
					$(this).css({"background-color":"#47b8cc","color":"white"}).siblings().css({"background-color":"","color":""});
					$(".part_num").css("display","none");
					$(".part_num").eq($(this).index()).css("display","");
				});
			//查询的内容(文本框)
				$(".part_num textarea").click(function(){
					$(this).css("border","1px #888888 solid");
				});
		});
	</script>
	
	<script>
//		分页
		$(function(){
	    	var i=0;
	    	$(".page_num").eq(i).css({"background":"#5fc8da","color":"white"});
	    	$(".page_num").click(function(){
	    		$(".page_num").css({"background":"","color":""});
	    		$(this).css({"background":"#5fc8da","color":"white"});
	    	});
	    })
		$("#swphoto").click(function(){
        $("#swphoto .img1").css('display','block');
        $("#swphoto .img2").css('display','none');
        $("#swphota .img2").css('display','none');
        $("#swphotb .img2").css('display','none');
        $("#swphotc .img2").css('display','none');
        $("#swphotd .img2").css('display','none');
        $("#swphota .img1").css('display','block');
        $("#swphotb .img1").css('display','block');
        $("#swphotc .img1").css('display','block');
        $("#swphotd .img1").css('display','block');
    });
    $("#swphota").click(function(){

        $("#swphota .img1").css('display','none');
        $("#swphota .img2").css('display','block');

        $("#swphoto .img1").css('display','none');
        $("#swphotb .img2").css('display','none');
        $("#swphotc .img2").css('display','none');
        $("#swphotd .img2").css('display','none');
        $("#swphoto .img2").css('display','block');
        $("#swphotb .img1").css('display','block');
        $("#swphotc .img1").css('display','block');
        $("#swphotd .img1").css('display','block');
    });
    $("#swphotb").click(function(){
        $("#swphotb>img").toggle();
        $("#swphoto .img1").css('display','none');
        $("#swphota .img2").css('display','none');
        $("#swphotc .img2").css('display','none');
        $("#swphotd .img2").css('display','none');
        $("#swphoto .img2").css('display','block');
        $("#swphota .img1").css('display','block');
        $("#swphotc .img1").css('display','block');
        $("#swphotd .img1").css('display','block');
    });
    $("#swphotc").click(function(){
        $("#swphotc .img1").css('display','none');
        $("#swphotc .img2").css('display','block');

        $("#swphoto .img1").css('display','none');
        $("#swphota .img2").css('display','none');
        $("#swphotb .img2").css('display','none');
        $("#swphotd .img2").css('display','none');
        $("#swphoto .img2").css('display','block');
        $("#swphota .img1").css('display','block');
        $("#swphotb .img1").css('display','block');
        $("#swphotd .img1").css('display','block');

    });
    $("#swphotd").click(function(){
        $("#swphotd>img").toggle();

        $("#swphoto .img1").css('display','none');
        $("#swphota .img2").css('display','none');
        $("#swphotb .img2").css('display','none');
        $("#swphotc .img2").css('display','none');
        $("#swphoto .img2").css('display','block');
        $("#swphota .img1").css('display','block');
        $("#swphotb .img1").css('display','block');
        $("#swphotc .img1").css('display','block');
    });
$('button[name=make]').click(function() {
	var apply = $('button[name=make]').attr('attr');

	$.post(
			'<?php echo U("MyService/makeDiagnose");?>',
			{'apply': apply},

			function(res) {
				if(res == 0) {
//					if(confirm('请先登陆')) {
						location.href = '<?php echo U("Login/loginPage");?>';
						return;
//					} else {
//						$('.confirmTextText').children('p').eq(0).html('对不起，登陆后才能预约');
//						$(".confirmText").css({"display":"block"});
//						$(".part_number").css("display","none");
//					}
				} else {
					$('.confirmTextText').children('p').eq(0).html(res);
					$(".confirmText").css({"display":"block"});
					$(".part_number").css("display","none");

				}
			}
	);
});

	</script>
</html>