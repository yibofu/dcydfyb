<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财院--领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。</title>
    <meta name="title" content="扁鹊财学院---财税资讯">
    <meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
    <meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
    <link rel="stylesheet" href="/Public/app/css/consult.css" />
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
        <img src="/Public/app/img/consult_banner.png" />
    </div>
    <div class="consult_main">
        <!--内容左边的部分-->
        <div class="consult_left">
            <!--财税案例-->
            <div class="main_one">
                <p class="one_title"><a href="<?php echo U('Article/articlelist');?>">财税案例</a> <a href="<?php echo U('Article/articlelist');?>">更多</a></p>
                <div class="one_text">
                    <div class="one_text_img">
                        <img src="/Public/app/img/carousel/one_text_img.png"/>
                    </div>
                    <div class="one_text_text">
                        <ul>
                            <?php if(is_array($result)): foreach($result as $k=>$vo): ?><li><a href="<?php echo U('Article/article');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--财政法规-->
            <div class="main_two">
                <p class="two_title"><a href="<?php echo U('Article/articlelist');?>?lanmu=2">财政法规</a><a href="<?php echo U('Article/articlelist');?>?lanmu=2">更多</a></p>
                <div class="two_text">
                    <div class="two_text_img">
                        <img src="/Public/app/img/carousel/two_text_img.png"/>
                    </div>
                    <div class="two_text_text">
                        <ul>
                            <?php if(is_array($resul)): foreach($resul as $k=>$vo): ?><li><a href="<?php echo U('Article/article');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--扁鹊干货-->
            <div class="main_three">
                <p class="three_title"><a href="<?php echo U('Article/articlelist');?>?lanmu=3">扁鹊干货</a><a href="<?php echo U('Article/articlelist');?>?lanmu=3">更多</a></p>
                <div class="three_text">
                    <div class="three_text_img">
                        <img src="/Public/app/img/carousel/three_text_img.png"/>
                    </div>
                    <div class="three_text_text">
                        <ul>
                            <?php if(is_array($resu)): foreach($resu as $k=>$vo): ?><li><a href="<?php echo U('Article/article');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--新闻动态-->
            <div class="main_four">
                <p class="four_title"><a href="<?php echo U('Article/articlelist');?>?lanmu=4">新闻动态</a><a href="<?php echo U('Article/articlelist');?>?lanmu=4">更多</a></p>
                <div class="four_text">
                    <div class="four_text_img">
                        <img src="/Public/app/img/carousel/four_text_img.png"/>
                    </div>
                    <div class="four_text_text">
                        <ul>
                            <?php if(is_array($res)): foreach($res as $k=>$vo): ?><li><a href="<?php echo U('Article/article');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
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