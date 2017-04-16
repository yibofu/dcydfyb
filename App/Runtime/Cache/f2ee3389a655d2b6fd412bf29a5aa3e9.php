<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>老板财务通</title>
		<meta name="title" content="扁鹊财院---财税资讯">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/boss_finance.css" />
		<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<link rel="stylesheet" href="/Public/app/css/caption.css">
		<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>

	</head>
	<body style="background: white;">
		<div class="consult_all">
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

			<!--选择卡-->
			
			<!--banner头部图片-->
			
			<div class="consult_banner">
				<img src="/Public/app/img/introduce/introduce_banner.png" />
				<div style="height: 0px;">
					<div class="apply"><img src="/Public/app/img/introduce/apply.png"/><a href="<?php echo U('Kecheng/signUp');?>">预约报名</a></div>
					<div class="audition"><img src="/Public/app/img/introduce/audition.png"/><a href="#consult">免费试听</a></div>
				</div>
				<div style="clear: both;"></div>
			</div>	
			<div class="consult_main" style="margin-top: -4px;">
				<!--内容左边的部分-->
				<div class="consult_left">
					<!--左边内容导航栏-->
					<div class="main_btn">
						<a href="#introduce">课程介绍</a>
						<a href="#outline">课程大纲</a>
						<a href="#feedback">学员反馈</a>
						<a href="#consult">课程咨询</a>
					</div>
					<!--左边内容具体情况、-->
					<div class="main_specific">
						<!--课程信息-->
						<div class="class_information">
							<p class="information_title">课程信息</p>
							<div class="class_text">
								<!--课程信息左边的内容-->
								<div class="class_text_left">
									<p><img src="/Public/app/img/introduce/days.png">课程天数：<span class="text_days"><?php echo ($courseInfo["days"]); ?>天</span></p>
									<p><img src="/Public/app/img/introduce/price.png">课程价格：<span class="text_price"><?php echo ($courseInfo["cost"]); ?>元</span></p>
									<p><img src="/Public/app/img/introduce/private.png">其他说明：<span class="text_private">可定制为企业内训</span></p>
									<p><img src="/Public/app/img/introduce/phone.png"><span class="text_phone">010-59458017（咨询电话）</span></p>
									<p><span class="text_phone24h">18310618231（24小时服务）</span></p>
									<p><span class="text_phonefree">400-810-9017（免费咨询）</span></p>
								</div>
								<!--课程信息右边的内容-->
								<div class="class_text_right">
									<p class="class_text_right_title">即将开课</p>
									<ul>
										<?php if(is_array($nowCourse)): $i = 0; $__LIST__ = $nowCourse;if( count($__LIST__)==0 ) : echo "暂时没有安排，请期待" ;else: foreach($__LIST__ as $key=>$course): $mod = ($i % 2 );++$i;?><li><span><?php echo ($course["address"]); ?></span><span><?php echo ($course["date"]); ?></span><a href="<?php echo U('Kecheng/signUp');?>?courid=<?php echo ($course["id"]); ?>">预约报名</a></li><?php endforeach; endif; else: echo "暂时没有安排，请期待" ;endif; ?>
									</ul>
								</div>
							</div>
						</div>
						<!--课程介绍-->
						<a name="introduce"></a>
						<div class="class_introduce">
							<p class="introduce_title">课程介绍</p>
							<p class="class_introduce_text">《老板财务通》，是老板必修的一门财务课程。专门针对企业老板或股东成员，帮助老板构建财务管理能力，驾驭财务经理，看懂财务报表、并利用财务手
									段，节税避税、控制成本、倍增利润、降低风险，从而达到保证财富安全，
									盈利能力不断增长。
							</p>
							<div class="class_introduce_main">
								<!--学习收益-->
								<div class="earnings">
									<div class="earnings_img">
										<img src="/Public/app/img/introduce/earnings.png" />
										<p>学习收益</p>
									</div>
									<p class="earnings_text">完善财务支撑体系，创造财务利润；运用财务手段，实现
										  企业稳步增长；数字化掌控企业，不再为财务问题烦恼； 现金为王，成本领先，纳税有方，控制有度；系统导入、
										方案落地。
									</p>
								</div>
								<!--参训人群-->
								<div class="person">
									<div class="person_img">
										<img src="/Public/app/img/introduce/person.png" />
										<p>参训人群</p>
									</div>
									<p class="person_text">企业老板财务总监（财务负责人）二人同时参训。
									</p>
								</div>
								<!--课程特色-->
								<div class="classes">
									<div class="classes_img">
										<img src="/Public/app/img/introduce/class.png" />
										<p>课程特色</p>
									</div>
									<p class="classes_text">
										学习形式：方案制定咨询式上课，专家+咨询团队+现场分析+制度+方案形成
										成果展示：收获原理、工具、标准制度
										方案形成：咨询团队辅导企业在 1-3 个月内完成五套系统方案
									</p>
								</div>
								
							</div>
						</div>
						<!--课程大纲-->
						<a name="outline"></a>
						<div class="class_outline" >
							<!--标题-->
							<div class="outline_div">
								<p class="outline_title">课程大纲</p>
								<div class="out_titleBtn">
									<div class="outline_listen"><img src="/Public/app/img/introduce/outline_listen.png"/><a href="#consult">免费试听申请</a></div>
									<div class="outline_get"><img src="/Public/app/img/introduce/outline_get.png"/><a href="#consult">索取课程大纲</a></div>
								</div>
							</div>
							<!--内容-->
							<div class="outline_model">
								<!--接下来是块级内容的循环-->
								<div class="outline_model_title">
									<div class="box_shadow">
										<img src="/Public/app/img/introduce/outline_num1.png" />
										<p class="model_titleName">第一模块：财富管控</p>
										<div style="clear: both;"></div>
										<div class="outline_model_text">
											<li>项目内容</li>
											<p class="model_text">个人财产、家族财富与公司财富 财富转移与安全保障</p>
											<li>落地实操工具</li>
											<p class="model_text">企业的股权架构资产转移模式财富形态分布图</p>
										</div>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num2.png" />
									<p class="model_titleName">第二模块：投融资管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">资本运作与投融资项目分析股权、私募与并购重组；老板如何进行财务投资</p>
										<li>落地实操工具</li>
										<p class="model_text">内部融资模式设计给自己公司进行估值</p>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num3.png" />
									<p class="model_titleName">第三模块：税务风险管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">企业税务风险策略从偷税、避税到节税、负税设计与纳税管理</p>
										<li>落地实操工具</li>
										<p class="model_text">税务风险自测工具、负税设计与管理工具</p>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num4.png" />
									<p class="model_titleName">第四模块：利润管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">如何让收入成倍增长，成本费用的管控手段企业盈利能力设计</p>
										<li>落地实操工具</li>
										<p class="model_text">目标收入分解与预测成本管控18个工具</p>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num5.png" />
									<p class="model_titleName">第五模块：投融资管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">现金为王与现金流的奥秘，企业资金管理资金流分析与现金预测</p>
										<li>落地实操工具</li>
										<p class="model_text">现金流管控工具资金预测表</p>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num6.png" />
									<p class="model_titleName">第六模块：运营管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">销售、采购中的财务管控运营过程中的管控要点盈利、效率、风险、质量、价值</p>
										<li>落地实操工具</li>
										<p class="model_text">老板必懂的几个关键财务指标业绩指标分析工具、设计本企业的驾驶舱</p>
									</div>
								</div>
								<div class="outline_model_title">
									<img src="/Public/app/img/introduce/outline_num7.png" />
									<p class="model_titleName">第七模块：财务人员管控</p>
									<div style="clear: both;"></div>
									<div class="outline_model_text">
										<li>项目内容</li>
										<p class="model_text">财务团队建设、授权与安全财务人员如何招聘与考核财务人员与总经理的关系梳理</p>
										<li>落地实操工具</li>
										<p class="model_text">财务人员的胜任力测试财务人员的绩效考核财务签字审批流程、制度</p>
									</div>
								</div>
								<div class="outline_model_title_last">
									<img src="/Public/app/img/introduce/outline_seventh.png" />
								</div>
								<!--块级内容到此结束-->
							</div>
							<a name="feedback"></a>
							<!--学员反馈-->
							<div class="back_information">
								<p class="back_information_title">学员反馈</p>
								<div class="back_information_text">
									<p class="back_text_title">河南金凯元理财有限公司--董事长  卞艺燃</p>
									<p class="back_text_text">刘老师讲得非常好，是我一生最敬佩的老师。这次听课，我被他征服了，成了他的粉丝。在财务系统课程里，
										民营企业所困惑的财务战略、税务管理、资金信控、财务核算与分析报告管理、风控管理、成本管控、预算
										管理等都涉及到了。这次学到很多知识，特别是在资金运作方面，民营企业家是用一生来赚钱，而要是上升
										到民营资本家那就是用一夜来赚钱。这些对我的触动都很大。
									</p>
									<p class="back_text_title">浙江君诚工贸有限公司</p>
									<p class="back_text_text">大家好，浙江君诚工贸有限公司今天来到长财财务系统班，经过六天五夜刘老师的培训，感到获益匪浅，相
										当的不错，在这次主要是非常感谢刘老师，讲的一些课程是非常的生动，同时也发现刘老师知识确实很渊博，
										不仅是财务知识，还包括其他国学、其他知识，特别是财务专业是一门很深奥的学科，刘老师能用通俗的语
										言把课程讲的非常的生动，而且像我们这些老板这些不懂财务的人都可以听的明白清楚，所以在这代表老板
										感谢刘老师！
									</p>
									<p class="back_text_title">杭州雷霆电力物资有限公司--董事长  田忠良</p>
									<p class="back_text_text">大家好，我是杭州雷霆电力超市的田忠良，企业里面是做电力工程。像是变压机配电房、制作工程和配套材
										料的；还有民用的是电线、开关、配电箱这是我们公司都有的，我们公司做的都是名牌的，中高档的产品，
										这次我进入长财财务系统班培训。以前感觉做的还可以，现在一学的话，什么都不是了，但是通过这次学习
										呢，本来对我的产品都很有信心的，我最怕的就是税务，通过这次学习，以后如何对付税务官，对财务流程
										的掌控稍微有点头绪，非常值得，非常好，祝长财财务系统班越来越好。
									</p>
								</div>
							</div>
						</div>
					</div>
					<a name="consult"></a>
					<!--留言部分   课程咨询-->
					<div class="leaveword">
						<div class="leaveword_btn">
							<button>课程咨询</button>/
							<button>课程试听</button>/
							<button>索取大纲</button>
							<p>400-810-9017</p>
						</div>
						<div class="leaveword_message">
							<div class="message_information">
								<p><span>*</span>称呼：<input type="text" required="required" value=""></p>
								<p><span>*</span>职位：<input type="text" required="required"	value=""></p>
								<p><span>*</span>手机：<input type="text" required="required"	value=""></p>
								<p><span>*</span>公司：<input type="text" required="required"	value=""></p>
							</div>
							<!--课程咨询-->
							<div class="meassage_consult_text part_num">
								<p class="num_title">您要咨询的内容是：</p>
								<textarea></textarea>
								<button class="first_btn">提交</button>
							</div>
							<!--课程试听-->
							<div class="meassage_listen_text part_num">
								<p class="num_title">试听注意事项:</p>
								<p class="second_text">请填写您的真实信息，安越工作人员将尽快以
									电话形式与您确认试听需求，并确保您的资料
									不被泄露。
								</p>
								<button class="second_btn">提交</button>
							</div>
							<div class="meassage_outline_text part_num">
								<p class="num_title">试听注意事项:</p>
								<p class="thrid_text">为保护安越课程知识版权，我们将尽快核实您的信息，并发送该课程相关资料。</p>
								<p class="thrid_text">您也可致电010-59458017，向课程顾问索取课程大纲，或咨询各类课程相关的问题。</p>
								<button class="thrid_btn">提交</button>
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
					<!--近期课程安排-->
					<div class="classes_plan">
						<img src="/Public/app/img/introduce/class_plan.png" />
						<?php if(is_array($allCourseType)): $i = 0; $__LIST__ = $allCourseType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$courseType): $mod = ($i % 2 );++$i;?><div>
							<p><?php echo ($courseType["name"]); ?><span>点击日期可预约报名</span></p>
							<table>
								<tr class="first_title_text">
									<td><a href="#" class="tooltip" title="可点击报名">地点</a></td>
									<td><a href="#" class="tooltip" title="可点击报名">课程时间</a></td>
									<td><a href="#" class="tooltip" title="可点击报名">授课讲师</a></td>
								</tr>
								<?php if(is_array($courseType["courses"])): $i = 0; $__LIST__ = $courseType["courses"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cour): $mod = ($i % 2 );++$i;?><tr>
									<td><a href="#" class="tooltip" title="可点击报名"><?php echo ($cour["address"]); ?>站</a></td>
									<td><a href="<?php echo U('Kecheng/signUp');?>?courid=<?php echo ($cour["id"]); ?>" class="tooltip" title="可点击报名"><?php echo ($cour["date"]); ?></a></td>
									<td><a href="#" class="tooltip" title="可点击报名">【<?php echo ($cour["teacher"]); ?>】</a></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</table>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
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

			<!--联系咨询-->   
			
		</div>
	</body>
	<script src="/Public/app/js/jquery.min.js"></script>
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
	//鼠标指上去会有提示
		$(function(){
			//鼠标移上去有提示性的文字
//				定义了x y的坐标初始值
				var x=10;
				var y=20;
				$("a.tooltip").mouseover(function(e){
//					alert(typeof(e));
//					e表示的一个事件对象在这里表示的是鼠标移上去的事件对象----鼠标指针的位置
					var tooltip="<div id='tooltip'>"+this.title+"</div>";
					$("body").append(tooltip);
					//pageX,pageY鼠标指针位置，相对于文本的左边缘
					$("#tooltip").css({"position":"relative","top":(e.pageY+y)+"px","left":(e.pageX+x)+"px","height":"20px","width":"50px","line-height":"20px"}).show("fast");
					//这里必须写相对定位或者绝对定位，要不然Top和Left都不能实现作用
					//alert(e.pageY+y);
				}).mouseout(function(){
					$("#tooltip").remove();
				});
			//最底下按钮和内容的切换
				$(".leaveword_btn").find("button").eq(0).css({"background-color":"#47b8cc","color":"white"});
				$(".part_num").css("display","none");
				$(".part_num").eq(0).css("display","");
				$(".leaveword_btn").find("button").click(function(){
					$(this).css({"background-color":"#47b8cc","color":"white"}).siblings().css({"background-color":"","color":""});
//					alert($(this).index());
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
    
	</script>
</html>