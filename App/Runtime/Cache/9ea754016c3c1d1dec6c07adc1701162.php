<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财院---会员专享</title>
    <meta name="title" content="扁鹊财院---会员专享">
    <meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
    <meta name="description" content="扁鹊财学院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
    <link rel="stylesheet" href="/Public/app/css/official.css">
    <link rel="stylesheet" href="/Public/app/css/caption.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/jquery.kkPages.js"></script>
    <script type="text/javascript" src="/Public/app/js/address.js"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
    <style>
        .iny{
            background: url("/Public/app/img/user-c.png") no-repeat 345px 123px;
        }
        .box{
            background: #ffffff;
        }

        .user .user-two{
            height: 104px;
        }
        .user .user-two .two-a img{
            margin-top: 11px;
        }
        .user .user-two .two-b{
            width: 130px;
            height: 32px;
            margin-top: 36px;
        }
        .user .user-two .two-b img{
            margin-right: 7px;
        }

        .user .user-three .three-a li{
            height: 40px;
            line-height: 40px;
            margin-top: 5px;
            cursor:pointer;
        }
        .user-three .three-b .three-eight .eight .eight-three li{
            height: 46px;
            line-height: 46px;
            margin-left: 13px;
            cursor:pointer;
        }
        .user-three .three-b .three-six .six-two p{
            line-height: 26px;
            margin-right: 10px;
        }
        .user-three .three-b .three-five .five-one .imgc span{
            border-left: 3px solid #0098b3;
        }
        .user-three .three-b .three-five .five-one .imgd .two img{
            width: 224px;
            height: 191px;
        }
        .user-three .three-b .three-five .five-one .imgd p{
            height: 30px;
            line-height: 30px;
        }
        .ooy img{width: 174px; height: 174px;}
        .oou img{width: 190px; height: 233px;}
        .ooi{width: 504px; height: 249px; margin:30px 0 0 100px;display: none;}
        .user-three .three-b .three-eight .imgc span{
            border-left: 3px solid #0098b3;
            line-height: 34px;
        }
        #login-io p{ margin-top: 10px; padding: 0 20px; line-height: 28px; font-size: 16px;text-align: left;}
        #six{ margin-left: 145px;display: none;}
    </style>
</head>
<body class="box">
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

<div class="user-three one">
    <div class="three-b">
        <!--扁鹊会员-->
        <div id="bianque" style="margin-left: 8px;">
            <div id="zero">
                <img src="/Public/app/img/user-a.png" style="width: 100%;"/>
                <div style="margin: 14px 0 14px 11px; border-left: 2px solid #00a0e9; font-size: 14px;">&nbsp;&nbsp;开通VIP</div>
                <div id="one">
                    <div class="fl uij" style="width: 458px; margin-left: 50px;">
                        <div class="iny" style="width: 369px; height: 144px; border: 2px solid #0098b3; margin-left: 62px; position: absolute;">
                            <img src="/Public/app/img/user-d.png" style="position: relative; top: 20px; right:-72px;"/>
                            <div class="fl height-w title-k color-b" style="margin-left: 108px;">金鹊<p class="fr wia height-w title-e color-q">&nbsp;&nbsp;&nbsp;VIP会员 > ></p><div class="clearfix"></div></div>
                            <div><img src="/Public/app/img/user-b.png" class="fl" style="margin-top: 5px; margin-left: 99px;"/><p class="height-a title-j color-b fl">&nbsp;&nbsp;<?php echo ($res['price']); ?>元</p><div class="clearfix"></div></div>
                        </div>
                        <div class="title-d" style="width: 100%; margin-top: 148px; line-height: 36px; margin-left: 66px;">
                            <div class="fl">VIP限量<?php echo ($res['znum']); ?>名</div>
                            <div style="margin-left: 10px" class="fl color-c">只剩<?php echo ($res['snum']); ?>名</div>
                            <div class="clearfix"></div>
                        </div>
                        <div style=" margin: 16px 0 0 77px;">-*
                            ++++
                            <div style="line-height: 36px; font-size: 16px;" class="fl">支付方式：</div>
                            <div style="width: 118px;height: 30px; padding:3px 0 0 16px;" class="fl bor-l"><img src="/Public/app/img/wxzf.png"/></div>
                        </div>
                        <a href="<?php echo U('Vip/member1');?>"><input id="one-a" style="margin: 54px 0 0 96px;" class="btn btn-primary title-c" type="button" name="kaitong" value="立 即 开 通" /></a>
                    </div>
                    <div class="fr" style="width: 240px;font-size: 16px; margin:35px 70px 0 0; line-height: 30px;">
                        <p>1.VIP会员可免费观看扁鹊财院资深讲师分享的直播课程，每周一期，全年免费。</p>
                        <p>2.VIP会员有机会参加扁鹊财院组织的线下沙龙分享。</p>
                        <p>3.VIP会员有机会与资深财务专家同台直播。</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
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

</body>
<script>



    jQuery(document).ready(function($) {
        $('#mima').click(function () {
            $('.theme-popover').slideDown(200);
            $('.theme-popover-mask').slideDown(200);
        })
        $('.close').click(function () {
            $('.theme-popover').slideUp(200);
            $('.theme-popover-mask').slideUp(200);
        })
    })

</script>
</html>