<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财院---课程中心</title>
    <link rel="stylesheet" href="/Public/app/css/official.css">
    <link rel="stylesheet" href="/Public/app/css/choosekc.css">
    <link rel="stylesheet" href="/Public/app/css/caption.css">
    <script type="text/javascript" src="/Public/app/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/app/js/ajaxUtil2.js"></script>
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/jquery.kkPages.js"></script>
    <script type="text/javascript" src="/Public/app/js/L_slide.js"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
    <style>
        #Pagination{
            position: relative;
            left: 190px;
            bottom: 0px;
        }
        .hl_scrool_leftbtn {
            position: relative;
            top: -29px;
            right: -772px;
            width: 7px;
            height: 12px;
        }
        .hl_scrool_rightbtn {
            position: relative;
            top: -29px;
            right: -793px;
            width: 7px;
            height: 12px;
        }
        .h1_main5_title{
            width: 807px;height: 94px;
        }
        .h1_main5_title .h1_main5_title-one{
            text-align: center;
            height: 32px;
            width: 141px;
            margin-top: 6px;
            margin-left: 1px;
            border-right: 1px solid #dddddd;
        }
        .h1_main5_title .h1_main5_title-one a{
            display: inline-block;
            box-shadow: 2px 2px 5px #999999;
            line-height: 41px;width: 133px;
            margin-top: -4px;
        }
        .h1_main5_title .h1_main5_title-one:active a {
            box-shadow: 0px 0px 5px #ccc;
        }
        .h1_main5_title .h1_main5_title-one:hover a {
            color: #0098b3;
        }
        .h1_main5_title .h1_main5_title-one{
            cursor:pointer;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-one:active a {
            box-shadow: 0px 0px 5px #ccc;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-one:hover a {
            color: #0098b3;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-one{
            cursor:pointer;
        }
        .h1_main5_title .h1_main5_title-two{
            border-bottom: 1px solid #dddddd;height: 47px;margin-left: 3px;
        }
        .h1_main5_title .h1_main5_title-two li{
            text-align: center; height: 32px;width: 110px;border-right: 1px solid #dddddd;
            margin: 7px 0 0 4px;
            padding-right: 4px;
        }
        .h1_main5_title .h1_main5_title-two li a{
            box-shadow: 0px 2px 8px #999999;
            width: 110px; line-height: 41px;
            display:block;
            margin-top: -5px;
            font-size: 14px;
        }
        .h1_main5_title .h1_main5_title-two li:active a{
            box-shadow: 0px 0px 5px #ccc;
        }
        .h1_main5_title .h1_main5_title-two li:hover a{
            color: #0098b3;
        }
        .h1_main5_title .h1_main5_title-two li{
            cursor:pointer;
        }
        /*.h1_main5_title .h1_main5_title-two li span{
            border-right: 1px solid #dddddd;position: relative;left: 28px;
        }*/
        .h1_main5_title .hl_main5_content1 {
            overflow: hidden;
            width: 622px;
            height: 47px;
            float: left;
        }
        .h1_main5_title .hl_main5_content1-one {
            text-align: center;
            height: 32px;
            width: 141px;
            margin-top: 6px;
            margin-left: 1px;
            border-right: 1px solid #dddddd;
            float: left;
        }
        .hl_main5_content1-one a {
            display: inline-block;
            box-shadow: 2px 2px 5px #999999;
            line-height: 41px;
            width: 133px;
            margin-top: -5px;
            margin-left: 4px;
            float: left;
            text-align: center;
        }
        /*.h1_main5_title .hl_main5_content1 .hl_main5_content1-one span{
            border-right: 1px solid #dddddd;position: relative;left: 28px;
        }*/
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two {
            width: 99999px;
            height: 47px;
            position: relative;
            top: 0px;
            left: 0px;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two li{
            text-align: center; height: 32px;width: 80px;border-right: 1px solid #dddddd;
            margin: 6px 0 0 4px;
            padding-right: 4px;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two li a{
            box-shadow: 0px 2px 8px #999999;
            width: 80px; line-height: 41px;
            display:block;
            margin-top: -5px;
            color: #333333;
            font-size: 14px;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two li:active a{
            box-shadow: 0px 0px 5px #ccc;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two li:hover a{
            color: #0098b3;
        }
        .h1_main5_title .hl_main5_content1 .hl_main5_content1-two li{
            cursor:pointer;
        }
        /*.h1_main5_title .hl_main5_content1 .hl_main5_content1-two span{
            border-right: 1px solid #dddddd;position: relative;left: 20px;display: inline-block;
        }*/
        .kce-one{
            background: #ffffff;border: 1px solid #ffffff;
        }
        .kce-one .kce-oneone{
            border-right: 1px solid #dddddd; height: 94px;width: 158px;
        }
        .main .inner #video .ck-video li a i {
            opacity: 0;
            position: absolute;
            left: 46%;
            top: 50%;
            margin-top: -26px;
            height: 50px;
            width: 50px;
            margin-left: -26px;
            -webkit-transition: opacity .4s ease-in;
            -moz-transition: opacity .4s ease-in;
            -ms-transition: opacity .4s ease-in;
            transition: opacity .4s ease-in;
            bottom: auto;
            background: url("/Public/app/img/play.png") center center no-repeat scroll;
            background-size: 50px 50px;
            z-index: 9999;
        }
        .main .inner #video .ck-video li a:hover i{
            opacity:1;
        }
        .main .inner #video .ck-video li:hover{
            box-shadow: 0px 0px 10px #999;
        }
        .main .inner #video .ck-video li:hover span a{
            color: #0098b3;
        }
        .avio{
            position: absolute;width: 244px;height: 212px;
        }
        .main .inner #video .ck-video li span {
            margin-top: 15px;
            line-height: 15px;
            margin-left: 15px;
            padding-left: 45px;
            background: url(/Public/app/img/icon_03.png);
            background-repeat: no-repeat;
            background-position: left top;
            display: block;
            color: #666666;
        }
        .main .inner #video .ck-video li span a{
            font-size: 12px;
        }
        .main .inner #video .ck-video li .avio-one{
            width: 15px; height: 15px; margin: -15px 20px 0 0;
        }
        .main .inner #video .ck-video li .avio-one .img1{
            width: 100%;height:100%;
        }
        .main .inner #title span {
            font-size: 16px;
            line-height: 26px;
            height: 26px;
            color: #999999;
            display: inline;
        }

        .Num{
            float: right;
            margin-top:-23px;
            margin-right: 10px;
        }
        .ck-video p{
            width: 130px;
            float: left;
        }
        .avio-one{
            float: left;

        }

    </style>
</head>
<body>
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


<div class="banner">
    <img src="/Public/app/img/kecheng.png"/>
</div>
<div class="main">
    <div class="inner">
        <div class="kce-one">
            <div class="choose-bg">
                <p class="choose-bg-title"><span>所有分类</span>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<span class="span-addHtml"></span></p>
                <div class="choose-bg-text">
                    <p>课程分类：</p>
                    <ul>
                        <?php if(is_array($rea)): $i = 0; $__LIST__ = $rea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/coursedetails');?>?name=<?php echo ($vo["kind"]); ?>"><li class="chooseLi"><?php echo ($vo["kind"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>

            <div id="title">
                <span class="fl">全部视频<i style="margin-left: 5px;">></i></span>
                <span class="fl" style="font-size: 14px; margin: 2px 0 0 5px;">专家精选<i style="margin-left: 5px;">></i></span>
                <span class="fl" style="font-size: 14px; margin: 2px 0 0 5px;">刘国东</span>
            </div>
        </div>
        <div id="video">
            <!--全部的课程-->
            <ul class="ck-video basia tab-content newslist" id="all" style="display: block;">
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($vo["id"]); ?>&kind=<?php echo ($vo["kind"]); ?>&name=<?php echo ($vo["name"]); ?>&kctitle=<?php echo ($vo["kctitle"]); ?>&title=<?php echo ($vo["title"]); ?>" class="avio">
                            <img src="<?php echo ($vo["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vo["id"]); ?>&kind=<?php echo ($vo["kind"]); ?>&name=<?php echo ($vo["name"]); ?>&kctitle=<?php echo ($vo["kctitle"]); ?>&title=<?php echo ($vo["title"]); ?>"><?php echo ($vo["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($vo["name"]); ?></p>
                            <div style="color: #F55E5E;font-size: 14px; float:left;margin-left: -30px; display: inline-block;margin-top: 5px;">￥<?php echo ($vo["money"]); ?></div>
                            <?php if($vo["iscoll"] == 0): ?><div class="fr avio-one"  style="margin-top: -22px;margin-left: 190px;"><img src="/Public/app/img/offcial-collectb.png" class="img1" attr="<?php echo ($vo["id"]); ?>"  name="coll" title="收藏"/></div>
                                <?php else: ?>
                                <div class="fr avio-one"  style="margin-top: -22px;margin-left: 190px;"><img src="/Public/app/img/offcial-collecta.png" class="img1" attr="<?php echo ($vo["id"]); ?>" title="收藏"/></div><?php endif; ?>
                            <div class="Num"><?php echo ($vo["collnum"]); ?></div></div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!--点击系列专题的出来的视频-->
            <ul class="ck-video basia tab-content newslist" id="son" style="display: none;">
                <?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($voo["id"]); ?>&kind=<?php echo ($voo["kind"]); ?>&name=<?php echo ($voo["name"]); ?>&kctitle=<?php echo ($voo["kctitle"]); ?>&title=<?php echo ($voo["title"]); ?>" class="avio">
                            <img src="<?php echo ($voo["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($voo["id"]); ?>&kind=<?php echo ($voo["kind"]); ?>&name=<?php echo ($voo["name"]); ?>&kctitle=<?php echo ($voo["kctitle"]); ?>&title=<?php echo ($voo["title"]); ?>"><?php echo ($voo["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($voo["name"]); ?></p>
                            <div style="color: #F55E5E;font-size: 14px; float:left;margin-left: -15px; display: inline-block;margin-top: 5px;">￥<?php echo ($voo["money"]); ?></div>
                            <?php if($voo["iscoll"] == 0): ?><div class="fr avio-one"  style="margin-top: -22px;margin-left: 190px;"><img src="/Public/app/img/offcial-collectb.png" class="img1" attr="<?php echo ($voo["id"]); ?>"  name="coll" title="收藏"/></div>
                                <?php else: ?>
                                <div class="fr avio-one"  style="margin-top: -22px;margin-left: 190px;"><img src="/Public/app/img/offcial-collecta.png" class="img1" attr="<?php echo ($voo["id"]); ?>" title="收藏"/></div><?php endif; ?>
                            <div class="Num"><?php echo ($voo["collnum"]); ?></div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class='clearfix'></div>
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
<script src="/Public/app/js/rollSlide.js"></script>
<script>
    $("document").ready(function(){
        $(".tab-nav li").each(function(){
            $(this).click(function(){
                if(!$(this).hasClass('current')){
                    $(this).addClass('current').siblings('.current').removeClass('current');
                }else{
                    $(this).siblings('.current').removeClass('current');
                }
                var target = $(this).attr('name');
                $("."+target).show();
                $("."+target).siblings('.tab-content').hide();
            });
        });
    });
    var flag = "left";
    function DY_scroll(wraper,prev,next,img,imga,speed,or){
        var wraper = $(wraper);
        var prev = $(prev);
        var next = $(next);
        var img = $(img).find('ul');
        var imga = $(imga).find('ul li');
        var w = img.find('li').outerWidth(true);
        var s = speed;
        next.click(function(){
            img.animate({'margin-left':-w}/*,1500,'easeOutBounce'*/,function(){
                img.find('li').eq(0).appendTo(img);
                img.css({'margin-left':0});
            });
            flag = "left";
        });
        prev.click(function(){
            img.find('li:last').prependTo(img);
            img.css({'margin-left':-w});
            img.animate({'margin-left':0}/*,1500,'easeOutBounce'*/);
            flag = "right";
        });
        if(imga.length>4){
            if (or == true){
                ad = setInterval(function() { flag == "left" ? next.click() : prev.click()},s*1000);
                wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() {flag == "left" ? next.click() : prev.click()},s*1000);});
            }
        }

    }
    DY_scroll('.hl_main5_content','.hl_scrool_leftbtn','.hl_scrool_rightbtn','.hl_main5_content1','.hl_main5_content1',0,false);// true为自动播放，不加此参数或false就默认不自动



    //获取url的get参数并且解决汉字乱码问题
    $(function(){
        var local_url = document.location.href;
        var url = local_url.split('name=')[1];
        var u = decodeURI(url);
        if(u == "专家精选"){
            $("#all").css("display","none");
            $("#son").css("display","block");
        }
        else if(u == "系列专题"){
            $("#all").css("display","none");
            $("#son").css("display","block");
        }else{
            $("#all").css("display","block");
            $("#son").css("display","none");
        }
    })
    $("#xilie").bind('click',function(){
        $('#xlztz').text(" ");
        $("#xlzt").css("display","block");
        $("#all").css("display","none");
        $("#zjjx").css("display","none");
    })
    $("#zhuanjia").bind('click',function(){
        $('#xlztz').text(" ");
        $("#all").css("display","none");
        $("#xlzt").css("display","none");
        $("#zjjx").css("display","block");
    })

    function xilie(){
        $('#xlztz').text(" ");
        $("#xlzt").css("display","block");
        $("#all").css("display","none");
        $("#zjjx").css("display","none");
    }

    function zhuanjia(){
        $('#xlztz').text(" ");
        $("#all").css("display","none");
        $("#xlzt").css("display","none");
        $("#zjjx").css("display","block");
    }

    $('img[name=coll]').click(function() {
        var courid = $(this).attr('attr');
        var that = $(this);

        $.post(
                '<?php echo U("MyCollect/collection");?>',
                {'couid' : courid},

                function(res) {
                    if(res == 1) {
                        that.attr('src','/Public/app/img/offcial-collecta.png');
                        var numNode = that.parent().siblings(".Num");
                        var num = parseInt(numNode.html());
                        numNode.html(num+1);
                        that.unbind("click");
                    } else if(res == 0) {
                        location.href = "<?php echo U('Login/loginPage');?>";
                    }
                }

        );

    });

    $(function(){
        $(".chooseLi").click(function(){
            $(".span-addHtml").html($(this).html());
            $(this).css("color","#0098b3").siblings().css("color","");
        });

    });

</script>
</html>