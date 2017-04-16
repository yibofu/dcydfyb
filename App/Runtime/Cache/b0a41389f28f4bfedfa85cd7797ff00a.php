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
    <script type="text/javascript" src="/Public/app/js/qrcode.js"></script>
    <script type="text/javascript" src="/Public/app/js/Base.js"></script>
    <script type="text/javascript" src="/Public/app/js/prototype.js"></script>
    <script type="text/javascript" src="/Public/app/js/mootools.js"></script>
    <script type="text/javascript" src="/Public/app/js/Ajax/ThinkAjax.js"></script>
    <script language="JavaScript">
        function Check()
        {
            var out_trade_no = "<?php echo $out_trade_no; ?>";
            ThinkAjax.send('__URL__/orderQuery','ajax=1&out_trade_no='+out_trade_no,goto);
        }
        function goto(data,status){
            if (status==1)
            {
                alert("支付成功！");//弹出信息
                window.location.href='Index';//跳转地址
            }
        }
        window.setInterval("Check()",3000);
    </script>
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
        .ooi{width: 504px; height: 249px; margin:30px 0 0 100px;display: block
        ;}
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

<div class="user-three one">
    <div class="three-b">
        <!--扁鹊会员-->
        <div id="bianque" style="margin-left: 8px;">
            <div id="zero">
                <img src="/Public/app/img/user-a.png" style="width: 100%;"/>
                <div style="margin: 14px 0 14px 11px; border-left: 2px solid #00a0e9; font-size: 14px;">&nbsp;&nbsp;开通VIP</div>
            </div>
            <div id="three" style="display: block">
                <div style="width: 220px; line-height: 34px; font-size: 16px; margin:50px 0 0 210px;" class="fl">
                    <div align="center" id="qrcode">
                    </div>
                    <div align="center">
                        <p>订单号：<?php echo $out_trade_no; ?></p>
                    </div>
                    <!--<p>订单编号:43546456</p>-->
                    <!--<p>购买订单：2017-2-12</p>-->
                    <p style="margin-left:65px;">价格：<strong style="color:red;"><?php echo ($res['price']); ?></strong>元</p>
                    <!--<div class="ooy" style="margin:30px 0 0 25px;"><img src="/Public/app/img/erty.png"/></div>-->

                </div>
                <div style="width: 300px;line-height: 34px; font-size: 16px; margin:50px 0 0 104px; " class="fl">
                    <p>商品名称：扁鹊财院年费会员</p>
                    <p>商家名称：北京大财有道科技有限公司</p>
                    <div class="oou" style="margin: 35px 0 0 20px;"><img src="/Public/app/img/user-o.png"/></div>
                </div>
            </div>
            <div id="six">
                <div style="width: 220px; line-height: 34px; font-size: 16px; margin:50px 0 0 104px;" class="fl">
                    <p>订单编号:43546456</p>
                    <p>交易时间：2017-2-12</p>
                </div>
                <div style="width: 300px;line-height: 34px; font-size: 16px; margin:50px 0 0 104px; " class="fl">
                    <p>商品名称：扁鹊财院年费会员</p>
                    <p>商家名称：北京大财有道科技有限公司</p>
                </div>
                <div class="clearfix"></div>
                <div class="ooi">
                    <img src="/Public/app/img/cg.png"/>
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

</body>
<script>

    if(<?php echo $unifiedOrderResult["code_url"] != NULL;?>)
    {
        var url = "<?php echo $code_url;?>";
//            参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
        var qr = qrcode(10, 'H');
        qr.addData(url);
        qr.make();
        var wording=document.createElement('p');
        wording.innerHTML = "大财有道扁鹊财院";
        var code=document.createElement('DIV');
        code.innerHTML = qr.createImgTag();
        var element=document.getElementById("qrcode");
        element.appendChild(wording);
        element.appendChild(code);
    }
</script>
</html>