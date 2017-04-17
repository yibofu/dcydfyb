<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-专家介绍</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
		<link rel="stylesheet" href="/Public/app/css/teachers_introduce.css" />
		<link rel="stylesheet" href="/Public/app/css/boss_finance.css" />
		<link rel="icon" href="http://www.bianquecxy.com/Public/app/img/logo.ico" type="image/x-icon">
	    <link href="/Public/app/css/JS5.css" rel="stylesheet" type="text/css">
	    <div id="LRdiv0" style="display: block;">
	    <div id="LRfloater0" style="z-index: 2147483647; right: 15px; top: 150px; position: fixed !important;"><div id="swtColse" style="width:20px; height:15px; top:0px; right:0px; position:absolute;background-image: url(http://pct.zoosnet.net/LR/closeimg/7.gif);background-repeat: no-repeat;background-position: right top;cursor:pointer;" onclick="LR_Hidemobileinvite(0);onlinerIcon0.hidden();"></div><img title="没有客服人员在线,请点击此处留言!我们会尽快答复;" alt="没有客服人员在线,请点击此处留言!我们会尽快答复;" src="/Public/app/img/offlineimgsrc_cn.jpg" style="cursor:pointer" onclick="openZoosUrl(&#39;chatwin&#39;);"></div></div><div id="LRdiv1" style="display:none;"></div><div id="LRdiv2" style="display:none;"></div><div id="LRdiv3" style="display:none;"></div>
	    <script type="text/javascript" src="/Public/app/js/L_slide.js"></script>
	     <style>
	     
	     .main{
	     	margin-top: 25px;
	     }
        .main-fl-t .top-a{
            border: 1px solid #0098b3;
            width: 156px;
            height: 192px;
            margin-left: -80px;
        }
        .main-fl-t .top-a p{
            font-size: 16px;
            line-height: 24px;
            height: 24px;
            width: 156px;
            background: #0098b3;
            color: #ffffff;
            text-align: center;
            margin-top: -28px;
            position: absolute;
            z-index: 2;
        }
        /*照片下的按钮*/
        .main-fl-t .top-a button{
        	width:75px ;
        	height: 27px;
        	line-height: 27px;
        	border-radius: 3px;
        	overflow: hidden;
        	float: left;
        	padding: 0;
        	margin-right: 3px;
        	margin-top: 15px;
        }
        .main-fl-t .top-a button span{
        	line-height: 27px;
        }
        .listen_classes{
        	background: #869ce0;
        	box-shadow: 1px 1px 1px #455173;
        }
        .live_classes{
        	background: #ff934c;
        	box-shadow: 1px 1px 1px #ae6535;
        }
         .main-fl-t .top-a  button img{
			float: left;
			margin-top: 7px;
			margin-left: 3px;
         }
         .main-fl-t .top-a  button span{
         	color: white;
         	font-size: 12px;
         }
         /*约见按钮*/
        .meet_btn{
        	background: #47b8cc;
        	width: 102px;
        	height: 33px;
        	line-height: 33px;
        	overflow: hidden;
        	border-radius: 5px;
        	box-shadow: 1px 1px 2px #215159;
        	float: right;
		}
        .meet_btn img{
        	float: left;
        	margin-top: 8px;
        	margin-left: 10px;
        }
        .meet_btn span{
         	color: white;
         	font-size: 14px;
        }
        table select {
            border: 0;
            width: 70px;
            margin-left: 0px;
            line-height: 31px;
            height: 31px;
            margin-top: -3px;
            border-right: 1px solid #e5e5e5;
            color: #666666;
            font-size: 12px;
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
				<?php if($_SESSION['admins']['id'] == '' && $_SESSION['rigister']['id'] == ''): ?><ul>
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
			<div class="banner">
		        <img src="/Public/app/img/pic-d.png">
		    </div>
					
			<div class="consult_main" style="margin-top: -4px;">
				<!--内容左边的部分-->
				<div class="consult_left">
					 <div class="main">
				        <div class="main-fl">
				            <div class="main-fl-t">
				                <div class="main-top1">
				                    <h3>专家介绍</h3>
				                </div>
				                <div class="newAdd" style="width: 528px;margin-left: 87px;margin-top: 37px;">
				                    <div class="top-a fl" style="margin-bottom: 40px;">
				                        <img src="<?php echo ($tea['timg']); ?>" style="width: 156px;height: 192px;">
				                        <p>讲师：<?php echo ($tea['name']); ?></p>
				                        <button class="listen_classes"><img src="/Public/app/img/listen_icon.png"><span>听Ta的课</span></button>
				                        <button class="live_classes"><img src="/Public/app/img/live_icon.png"><span>看Ta直播</span></button>
				                    </div>
				                    <div style="width:324px; margin-left: 78px;" class="fl">
				                        <h3 class="height-a title-c">讲师简介</h3>
				                        <p style="text-align: right" class="height-e title-e wia">—企业财务管理顶尖实战专家</p>
				                        <div class="height-j title-d">
				                        	<?php echo ($tea['explain']); ?>
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <button name="sub" attr="<?php echo ($tea['id']); ?>" class="meet_btn"><img src="/Public/app/img/meet_icon.png"><span>约见专家</span></button>
				                	<div style="clear: both;"></div>

				                 </div>
								<div class="confirmText">
									<img src="/Public/app/img/crossTeacher.png">
									<div class="confirmTextMain">
										<div class="confirmTextImg">
											<img src="/Public/app/img/Video_diagnostic/submitSuccess.png" />
										</div>
										<div class="confirmTextText">
											<p>恭喜您！预约已成功！</p >
											<p>请保持电话畅通，客服会在24小时内与您取得
												联系。请在个人中心查看您的服务。</p >
											<p>
												<a href=" " style="color: #F55E5E;font-size: 12px;margin-right: 10px;">返回专家列表</a><span>|</span><a href="#">进入个人中心</a>
											</p >
										</div>
									</div>
								</div>
				                 <div class="main-top1">
				                    <h3>操盘案例</h3>
				                </div>
				                <p class="title-d height-a texta" style="width: 400px;  margin-top: 20px; margin-left: 28px;margin-bottom: 20px; float: left;"><?php echo ($tea['traders']); ?></p>
				                <img src="/Public/app/img/eg_img.png" style="float: right;margin-top: 20px;">
				                <div style="clear: both;"></div>
				                <div class="main-top1">
				                    <h3>专家甄选</h3>
				                </div>
				                <p class="title-d height-a texta" style="margin-top: 20px; margin-left: 28px;">加入扁鹊财院的专家团队，是必须经过多轮严格的甄选。我们不考虑只有理论基础，没有
				                    实践经验的专家讲师，也不考虑只有实践经验，而无法将经验升华为理论和知识的专家讲师。
				                    理论水平和实践经验兼备，但对培训没有热情，或者无法习得优秀授课技巧的人，也不是这个
				                    团队的人选。不认同“正直、以客户为中心、专业、追求”的长财咨价值观，我们更会敬而远
				                    之。所以，扁鹊财院讲师团队中的每一位成员，都是百里挑一的财务培训专家。</p>
				                <img src="/Public/app/img/for.png" style="margin-top: 26px; margin-left: 45px; margin-bottom: 60px;">
				                <div class="main-top1">
				                    <h3>团队优势</h3>
				                </div>
				                <div style="margin-left: 27px; margin-top: 33px;" class="title-d height-a">
				                    <p class="texta">各有所长的扁鹊财院讲师聚在一起，形成了一个高绩效团队。</p>
				                    <p class="texta">由于技能互补，所以我们能够快速解决客户提出的疑难问题；</p>
				                    <p class="texta">由于信奉持续改善的工作方式，所以能不断改进培训方法、开发新课、积累行业解决方案和专业知识；</p>
				                    <p class="texta">由于对培训充满热情，所以我们愿意为学员水平的提高付出额外的努力；</p>
				                    <p class="texta">由于胜任力处在同一水平，所以我们能够为客户实施长期、复杂的培训任务、企业内训、管理咨询；</p>
				                    <p class="texta">所以这些团队特点，都是为了一个目的—为客户创造价值。</p>
				                </div>
				                <img src="/Public/app/img/for01.png" style="margin-top: 50px;margin-left: 27px; ">
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
		$(".newAdd").css("display","block");
		$(".meet_btn").on("click",function(){
			$(".newAdd").css("display","none");
			$(".confirmText").css({"display":"block"});
		});
		$(".confirmText>img").click(function(){
			$(".newAdd").css("display","block");
			$(".confirmText").css({"display":"none"});
		})
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

	$('button[name=sub]').click( function()	{
		var tid = $(this).attr('attr');		

		$.post(
			'<?php echo U("MyService/makeMeet");?>',
			{'tid':tid},
			function(res) {
				if(res == 0) {
					location.href = '<?php echo U("Login/loginPage");?>';
				}	
			
//				alert(res);
			}
		); 
	});
	
    
	</script>
</html>