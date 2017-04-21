<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院--老师介绍页</title>
		<meta name="title" content="扁鹊财院---财税资讯">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<link rel="stylesheet" href="/Public/app/css/teachers_introduce.css" />
		<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
		<link rel="stylesheet" href="/Public/app/css/caption.css">
		<link rel="stylesheet" href="/Public/app/css/fenye.css">
		<link rel="stylesheet" href="/Public/app/css/fenye.js">
		<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
		<style>
			.teachers_specific_bottomText p{
				line-height: 20px;
				word-wrap: break-word;
				overflow: hidden;
				height:80px;
			}
			.teachers_specific_bottomText p :nth-child(2){
				line-height: 20px;
				height:40px;
				overflow: hidden;
				display: block;
				color: #0098b3;
				font-size: 14px;
				font-width:600;

			}
			.teachers_specific_bottomText p a{
				display: block;
				float:right;
			}

			.leftText_textNew{
				overflow : hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 4; /*这里规定在第几行开始变省略号*/
				-webkit-box-orient: vertical;
			}

		</style>
	</head>
	<body style="background: white;">
		<div class="consult_all">
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

			
			<!--banner头部图片-->
			<div class="consult_banner">
				<img src="/Public/app/img/teachers_img/teachers_banner.png" />
			</div>
			<div class="consult_main">
				<!--内容左边的部分-->
				<div class="consult_left">
					<!--团队优势-->
					<div class="team_advantage">
						<p class="team_advantage_title"><img src="/Public/app/img/teachers_img/team_img.png"><span>团队优势</span></p>
						<!--团队优势的内容-->
						<div class="team_advantage_text">
							<div class="text_left">
								<p>各有所长的讲师聚在一起,形成了一个高绩效团队。 客服系统,扁鹊平台能随时随地,帮助您匹配专属的财务咨询师。第一时间解答您有关培训、咨询（财务、税务）、资本、资产
									等财务方面的相关问题。各有所长的讲师聚在一起，形成了一
									个高绩效团队。客服系统，扁鹊平台能。
								</p>
							</div>
							<div class="text_right">
								<img  src="/Public/app/img/teachers_img/we_team.png"/>
							</div>
						</div>
					</div>
					<!--团队理念-->
					<div class="team_idea">
							<p class="team_idea_title"><img src="/Public/app/img/teachers_img/team_idea.png"><span>团队理念</span></p>
							<!--团队理念的内容-->
							<div class="team_idea_text">
								<div class="text_left">
									<img  src="/Public/app/img/teachers_img/team_idea_img.png"/>
								</div>
								<div class="text_right">
									<p>各有所长的讲师聚在一起,形成了一个高绩效团队。 客服系统,扁鹊平台能随时随地,帮助您匹配专属的财务咨询师。第一时间解答您有关培训、咨询（财务、税务）、资本、资产
										等财务方面的相关问题。各有所长的讲师聚在一起，形成了一
										个高绩效团队。客服系统，扁鹊平台能。
									</p>
								</div>
							</div>
						</div>
					<!--专家甄选-->
					<div class="team_expert">
						<p class="team_expert_title"><img src="/Public/app/img/teachers_img/expert_img.png"><span>专家甄选</span></p>
						<!--团队优势的内容-->
						<div class="team_expert_text">
							<div class="text_left">
								<p>各有所长的讲师聚在一起,形成了一个高绩效团队。 客服系统,扁鹊平台能随时随地,帮助您匹配专属的财务咨询师。第一时间解答您有关培训、咨询（财务、税务）、资本、资产
									等财务方面的相关问题。各有所长的讲师聚在一起，形成了一
									个高绩效团队。客服系统，扁鹊平台能。
								</p>
							</div>
							<div class="text_right">
								<img  src="/Public/app/img/teachers_img/expert.png"/>
							</div>
						</div>
					</div>
					<!--扁鹊专家介绍-->
					<div class="expert_introduce">
						<p class="expert_introduce_title">扁鹊专家介绍</p>
						<div class="weekend_teacher">
							<!--照片-->
							<div class="teacher_img">
								<img src="/Public/app/img/teachers_img/weekend_teacher.png"  width="168px" height="220px"/>
								<p>本周讲师</p>
							</div>
							<!--专家介绍-->
							<div class="teacher_text_introduce">
								<p class="teacher_text_introduce_title">首席财务咨询专家</p>
								<p class="teacher_name">刘国东  老师</p>
								<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖实战专家</p>
								<a class="teacher_button" href="#">更多</a>
							</div>
							<!--操盘案例-->
							<div class="eg_traders">
								<p class="teacher_text_introduce_title eg_traders_text">操盘案例：</p>
								<p class="teacher_text">企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖</p>
								<p class="teacher_text">企业财务管理顶尖</p>
							</div>
						</div>
						<div class="teachers_introduce">
							<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="teachers_specific">
									<!--照片-->
									<div class="teachers_specific_img">
										<img src="<?php echo ($vo["limg"]); ?>" />
									</div>
									<!--右边文字-->
									<div class="teachers_specific_leftText">
										<p class="leftText_title"><span><?php echo ($vo["name"]); ?></span>财务健康顾问</p>
										<div class="leftText_textNew"><?php echo ($vo["explain"]); ?></div>

									</div>
									<div style="clear: both;"></div>
									<!--下边文字-->
									<div class="teachers_specific_bottomText">
										<p><span>操盘案例：</span>
											<span><?php echo ($vo["traders"]); ?></span>
											<a href="<?php echo U('Teacher/teacherIntroduce');?>?id=<?php echo ($vo["id"]); ?>">[更多]</a>
										</p>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!--页数-->
						<div class="page">
							<!--<ul>-->
								<!--<li class="page_left">上一页</li>-->
								<!--<li class="page_num">1</li>-->
								<!--<li class="page_num">2</li>-->
								<!--<li class="page_num">3</li>-->
								<!--<li class="page_num">4</li>-->
								<!--<li class="page_num">5</li>-->
								<!--<li class="page_num">...</li>-->
								<!--<li class="page_right">下一页</li>-->
							<!--</ul>-->
							<?php echo ($page); ?>
						</div>
						<!--专家现场授课-->
						<div class="expert_teach">
							<p class="expert_teach_title">专家授课现场</p>
							<div class="expert_teach_text">
								<img src="/Public/app/img/teachers_img/teach_img1.png"/>
								<img src="/Public/app/img/teachers_img/teach_img2.png"/>
								<img src="/Public/app/img/teachers_img/teach_img3.png"/>
								<img src="/Public/app/img/teachers_img/teach_img4.png"/>
								<img src="/Public/app/img/teachers_img/teach_img5.png"/>
								<img src="/Public/app/img/teachers_img/teach_img6.png"/>
							</div>
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
					<!--广告位-->
					<div class="right-bottom">
						<img src="/Public/app/img/riht_bottom_img.png" />
					</div>
				</div>
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

		</div>
	</body>
	<script>
	//轮播
		window.onload=function(){
			var OImg=document.getElementById("pic");
			var timer=setInterval(go,1600);
			var index=0;
			function go(){
				index++;
				if (index==5) {
					index=1;
				}
				OImg.src="/Public/app/img/carousel_"+index+".png";
			}
			
		}
	</script>
	<script src="/Public/app/js/jquery.min.js"></script>
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
    
	</script>
</html>