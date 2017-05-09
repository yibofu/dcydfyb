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

			.teachers_specific_leftText a{
				display: block;
				float:right;
                color: #F55E5E;
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
			﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>导航</title>
		<link rel="stylesheet" href="/Public/app/css/head.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/js/head.js" ></script>
        <style>
            .liOutA{
                padding: 0 8px;
            }
            .QR_code{
                height: 120px;
                width: 100px;
                border: 1px #cdcdcd solid;
                background: #ffffff no-repeat;
                position: relative;
                left:895px;
            }
            .QR_code p{
                font-size: 12px;
                color: #497fcf;
                padding:0 0 0 8px;
            }
        </style>
	</head>
	<body>
		
		<div class="headAll" style="margin-top:-20px;">

			<!--头部栏-->
			<div class="headTop">
				<div class="headTopCenter">
				<?php if($_SESSION['admins']['id'] == ''): ?><ul>
						<li class="welHead"><a href="#">欢迎访问扁鹊财院</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">登录</a></li>
						<li class="ahref"><a href="<?php echo U('Register/doorway');?>">注册</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">消息</a></li>
						<li class="ahref"><a href="<?php echo U('Login/loginPage');?>">用户中心</a></li>
						<li class="ahref"><a href="#">关注公众号</a></li>
					</ul>
				<?php else: ?>
					<ul>

						<li class="welHead">您好<a href="<?php echo U('MyCenter/index');?>" style="color:#ff5918;"> 
							<?php if($_SESSION['admins']['nickname'] != null): echo ($_SESSION['admins']['nickname']); ?>
								<?php else: ?>
									<?php echo ($_SESSION['admins']['Phone']); endif; ?> 
						</a>，欢迎访问扁鹊财院</li>
						<li class="ahref"><a href="<?php echo U('Index/loginout');?>" style="color:#ff5918;">[退出]</a></li>
						<li class="ahref"><a href="<?php echo U('WebMessage/index');?>">消息</a></li>
						<li class="ahref"><a href="<?php echo U('MyCenter/index');?>">用户中心</a></li>
						<li class="ahref"><a href="#">关注公众号</a></li>
					</ul><?php endif; ?>
				</div>
                <div style="width: 1000px;margin: 0 auto;overflow: hidden;height: 150px;">
                    <div class="QR_code">
                        <img src="/Public/app/img/QRgongzhong.jpg" width="100px;" height="100px;" />
                        <p>扫码关注公众号</p>
                    </div>
                    <div style="clear: both;"></div>
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
						<!--<a href="<?php echo U('AskAnswer/Asks');?>" class="liOutA">百问百答</a>-->
						<a href="<?php echo U('Vip/openVip');?>" class="liOutA">会员专享</a>
						<a href="<?php echo U('Teacher/teacherList');?>" class="liOutA">专家团队</a>
                        <a href="<?php echo U('Article/message');?>" class="liOutA">新政速递</a>
						<a href="<?php echo U('Index/about');?>" class="liOutA">了解扁鹊</a>
					</ul>
				</div>
			</div>
		</div>
		
	</body>
<script>
    $(".QR_code").css("display","none");
    $(".ahref:last").hover(function(){
        $(".QR_code").css("display","block");
    });
    $(".ahref:last").mouseleave(function(){
        $(".QR_code").css("display","none");
    });
</script>
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
						<!--<div class="weekend_teacher">-->
							<!--&lt;!&ndash;照片&ndash;&gt;-->
							<!--<div class="teacher_img">-->
								<!--<img src="/Public/app/img/teachers_img/weekend_teacher.png"  width="168px" height="220px"/>-->
								<!--<p>本周讲师</p>-->
							<!--</div>-->
							<!--&lt;!&ndash;专家介绍&ndash;&gt;-->
							<!--<div class="teacher_text_introduce">-->
								<!--<p class="teacher_text_introduce_title">首席财务咨询专家</p>-->
								<!--<p class="teacher_name">刘国东  老师</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖实战专家企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖实战专家</p>-->
								<!--<a class="teacher_button" href="#">更多</a>-->
							<!--</div>-->
							<!--&lt;!&ndash;操盘案例&ndash;&gt;-->
							<!--<div class="eg_traders">-->
								<!--<p class="teacher_text_introduce_title eg_traders_text">操盘案例：</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖</p>-->
								<!--<p class="teacher_text">企业财务管理顶尖</p>-->
							<!--</div>-->
						<!--</div>-->
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
                                        <a href="<?php echo U('Teacher/teacherIntroduce');?>?id=<?php echo ($vo["id"]); ?>">[更多]</a>
									</div>
									<div style="clear: both;"></div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!--页数-->
						<div class="page">
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
					﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>菜单栏</title>
    <link rel="stylesheet" href="/Public/app/fontM/iconfont.css"/>
    <link rel="stylesheet" href="/Public/app/css/menu.css"/>
    <script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
    <script type="text/javascript" src="/Public/app/fontM/iconfont.js"></script>
</head>
<body>
    <div class="menuRightcho">
        <a href="<?php echo U('Article/message');?>" class="underlineNeg">
            <i class="icon iconfont icon-xiaofeizhe"></i>
            <p>财税资讯</p>
        </a>
        <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"  class="underlineNeg">
            <i class="icon iconfont icon-zaixianwenzhen"></i>
            <p>财税问诊</p>
        </a>
        <a href="<?php echo U('Index/kce');?>" class="underlineNeg">
            <i class="icon iconfont icon-anpaimianshi"></i>
            <p>课程中心</p>
        </a>
        <a href="<?php echo U('Kecheng/boss');?>"  class="underlineNeg">
            <i class="icon iconfont icon-hetongshenhe"></i>
            <p>课程报名</p>
        </a>
        <a href="<?php echo U('AskAnswer/Asks');?>"  class="underlineNeg">
            <i class="icon iconfont icon-lesson"></i>
            <p>财税问题</p>
        </a>
        <a href="<?php echo U('Vip/openVip');?>"  class="underlineNegUN">
            <p>VIP会员</p>
            <p>核心服务</p>
        </a>
    </div>
</body>
<script>
    $(function(){
        $(".underlineNeg").hover(function(){
            $(this).css({"background-color":"#0098b3"}).siblings(".underlineNeg").css("background","white");
            $(this).find("i,p").css("color","white");
            $(this).siblings(".underlineNeg").find("i,p").css("color","#0098b3");
        });
        $(".underlineNeg").mouseleave(function(){
            $(this).css({"background":""});
            $(this).find("i,p").css("color","#0098b3");
        });
    });
</script>
</html>
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
		if (navigator.userAgent.indexOf('Firefox') >= 0){
			$("body").css("margin-top","4px");
		}
		if (navigator.userAgent.indexOf('Chrome') >= 0){
			$("body").css("margin-top","0px");
		}

        //分页样式
        var page = <?php echo ($nowPage); ?>;
        $('.page').children('li').eq(page-1).css({'background':'#55bdcf'}).find('a').css('color','#FFFFFF');

    
	</script>
</html>