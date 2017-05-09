<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
<title>扁鹊财院--领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。</title>
<meta name="title" content="扁鹊财院---财税资讯">
<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
<link rel="stylesheet" href="/Public/app/css/article.css" />
<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
<link rel="stylesheet" href="/Public/app/css/consult.css" />
<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
<link rel="stylesheet" href="/Public/app/css/official.css">
<link rel="stylesheet" href="/Public/app/css/caption.css">
<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
<style>
	.back_link{
 overflow: hidden;
margin:10px 0 20px 0;}

.back_link a:first-of-type{
background: #0098b3;
display: block;
width:100px;height: 30px;line-height: 30px;text-align: center;color:white;float: left;text-decoration: none;
}

.back_link :nth-child(2){
margin-left: 10px;
margin-right: 10px;
}

.back_link span{
display: block;
float: left;font-size:18px;color:rgb(127,127,127);margin-top:3px;
}
.lastA{font-size:16px;color:rgb(127,127,127);
display: block;float:left;margin:5px 0 0 0;}
</style>
</head>
<body style="background: white;margin-top:-11px;">
<div class="consult_all">
    <!--头部 c02003-->
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
							<?php if($_SESSION['admins']['nickname'] != ''): echo ($_SESSION['admins']['nickname']); ?>

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

    <!--选择卡-->
    
    <!--banner头部图片-->
    <div class="consult_banner">
        <img src="/Public/app/img/arctile/article_banner.png" />
    </div>
    <div class="consult_main">
        <!--内容左边的部分-->
        <div class="consult_left">
	    <p class="back_link"><a href="#">新政速递</a><span>&gt;</span><a href="<?php echo U('Article/articlelist');?>" class="lastA">财税案例</a><span>&nbsp;&gt;&nbsp;</span><a href=""  class="lastA">文章详情</a></p>
            <p class="article_title"><?php echo ($arr['title']); ?></p>
            <!--文章-->
            <div class="back_list"><a href="<?php echo U('Article/articlelist');?>?lanmu=<?php echo ($arr['lanmu']); ?>">返回列表&raquo;</a></div>
            <p class="about_writer">
                <span>作者：<?php echo ($arr['auth']); ?></span>
                <span>上传时间：<?php echo ($arr['time']); ?></span>
            </p>
            <!--文章正文部分-->
            <div class="article_text">
                <?php echo ($arr['content']); ?>
            </div>
            <!--页数-->
            <!--<div class="page">
                <ul>
                    <li class="page_left">上一页</li>
                    <li class="page_num">1</li>
                    <li class="page_num">2</li>
                    <li class="page_num">3</li>
                    <li class="page_num">4</li>
                    <li class="page_num">5</li>
                    <li class="page_num">...</li>
                    <li class="page_right">下一页</li>
                </ul>
            </div>-->

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