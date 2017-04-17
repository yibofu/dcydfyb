<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>视频中心</title>
    <link rel="stylesheet" type="text/css" href="/Public/app/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/app/css/official.css">
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
	<link rel="stylesheet" href="/Public/app/css/fenye.css" />
    <script src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script src="/Public/app/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
	<script type="text/javascript" src="/Public/app/js/fenye.js" ></script>
    <style>

        /*********** 文字 ************/
        .sizea{ font-size: 1.6rem;}/*18*/
        .sizec{ font-size: 1.6rem;}/*18*/
        .fom-jia{ font-weight: bold;}
        .texta{text-indent:2em;}
        .yinc{text-overflow : ellipsis;
            white-space : nowrap;
            overflow : hidden;
        }
        .lin-a{ line-height: 1.8rem}
        .lin-b{ line-height: 3rem}
        .fona-w{font-family: 'Georgia', Times, Times New Roman, serif;color: #999999; font-size: 1.8rem;}
        .fona-r{font-family: 'Georgia', Times, Times New Roman, serif;color: #000000; font-size: 1.4rem;}
        .lin-d{ line-height: 60px;}
        .sizeq{ font-size: 12px;}/*12*/
        .sizeo{ font-size: 16px;}/*16*/


        /*********** 文字颜色 ************/
        .coloa{ color: #b3b3b3;}
        .colob{ color: #cc0000;}
        .coloc{ color: #ffffff;}
        .colod{ color: #00a0e9;}

        .videoa{ margin-top: 3rem; background: #ffffff; padding-bottom: 1rem; border-bottom: .08rem solid #dddddd;padding-top: 1rem;}

        .videoa .videoa-heah{
            line-height: 1.8rem;
            margin: 0 4%;
        }
        .videoa .videoa-heah .videoa-heah-aa{
            width: 100%;
            display: inline-block;
            margin: 0rem;
            line-height: 3.4rem;
        }
        .videoa .videoa-nav{
            width: 80%;
            line-height: 2.2rem;
            margin-left: 4%;

        }
        .videoa .videoa-nav .videoa-nav-aa{
            width: 120%;

        }
        .videoa .videoa-nav .videoa-nav-aa .nav-aa-a{
            width: 35%;
            display: inline-block;
        }
        .videoa .videoa-nav .videoa-nav-aa .nav-aa-b{
            width: 30%;
            display: inline-block;
        }
        .videoa .videoa-nav .videoa-nav-aa .nav-aa-c{
            width: 30%;
            display: inline-block;
        }


        /*******选项卡******/
        .ting{
            margin-left: 6%;
        }
        .main-title{
            margin-top: 3rem;
            width:100%;

        }
        .tab-nav{
            margin:0;
            height:3rem;
            padding:0;
            background: #ffffff;
        }
        .tab-nav li{
            margin:0;
            padding:0;
            width:33.3%;
            height:3rem;
            line-height: 2rem;
            float:left;
            text-align:center;
        }
        .current{
            border-bottom: .1rem solid #00a0e9;
        }
        .tab-content{
            width: 716px;
            padding-bottom: 4rem;
            background: #ffffff;
        }
        .tab-content .content-ion{
            background: #ffffff;
            font-size: 1.8rem;
            line-height: 2.6rem;
            padding-left: 4%;
        }
        .tab-content .content-iun{
            width: 93%;
            margin-left: 4%;
        }
        .tab-content .inu{
            margin-left: 80px;
        }
        .tab-content .content-iun a img{
            width: 46%;
        }
        .content .content-o{
            width: 554px;
            height: 217px;
            background: #d7f8ff;
            border: 1px solid #7ecef4;
            margin-left: 62px;

        }
        .content .content-o .content-o-a{
            width: 167px;
            height: 217px;
            display: inline-block;
        }
        .content .content-o .content-o-a img{
            width: 167px;
            height: 215px;
        }
        .content .content-o .content-o-b{
            width: 320px;
            display: inline-block;
            margin-left: 63px;
            margin-top: 10px;
        }
        .content .content-i{
            line-height: 2.6rem;
            padding-left: 4%;
            background: #ffffff;
        }
        /*******评论******/
        #ctn {
            width: 716px;
        }
        #ctn p {
            font-size: 1.2rem;
            text-align: center;
        }
        #area {
            width: 716px;
            height: 6rem;
            left: -286px;
            bottom: 0;
            right: 0;
            margin-top: 50px;
            background:white;
            z-index: 19;
        }
        .uij{
            position: absolute;
            left: 3%;
            bottom:.6rem;
        }
        #area textarea{ position: absolute;z-index: 9;}
        #textArea {
            display: block;
            width:100%;
            height:80px;
            /*padding: .4rem;*/
            border-radius: 3px;
            resize: none;
            font-size: 1.6rem;
            border: .1rem solid #CCCCCC;
            /*height: 3.2rem;*/
        }
        #textArea:focus {
            outline: none;
        }
        #submit {
            width: 20%;
            border: none;
            background: #38f;
            color: #fff;
            border-radius: 3px;
            position: absolute;
            bottom: 5px;
            right: 5px;
            height: 2rem;
        }
        .con{
            width: 100%;
            line-height: 2rem;
            height: 7rem;
            padding: .8rem 5% 1.6rem 19%;
            border-bottom: 1px solid #cccccc;
            display: inline-block;
            word-wrap: break-word;
            position: relative;
        }
        .con span {
            position: absolute;
            display: block;
            color: #fff;
            cursor: pointer;
            left: 10px;
            top: 5px;
            width: 3.2rem;
            height: 2.7rem;
        }
        .con span img{
            width: 3.2rem;
            height: 2.7rem;
        }
        .con i {
            display: block;
            font-size: 12px;
            font-style: normal;
            position: absolute;
            right: 9%;
            bottom: 0;
        }
        .opi{margin-right: 4%;}
        .web-yin{ width:1.4rem; height: 1.4rem; margin-right: 3%; margin-bottom: .6rem;}
        .web-ya{ width:2.3rem; height: 1.4rem;margin-left: 8%;margin-bottom: .6rem;}
        .iond{ position: absolute; top: 3.6rem; left: 2%; width: 4rem; height: 2rem;}

        #preview1{color: #00a0e9;width: 520px;}
        .none1{display: block;}
        .none2{display: none;}
        .none3{display: none;}
        .none4{display: none;}
        .fl{float: left;_display: inline;}
        .fr{float: right;_display: inline;}

        #container{ width: 500px; float: left; height: 435px;}
        .box{ width: 1000px; margin: 0 auto;}
        .clearfix:after{content: '';display: block;height: 0;clear: both;font-size: 0;*zoom:1;}
        .bac{line-height: 60px;}
        .containera{ margin-top: 30px;}
        .container-a{ width: 475px; margin-left: 25px; float: left;}
        .fona-a{ font-size: 18px;}
        .liny-a{ line-height: 30px;}
        .container-b{ width: 458px; height: 36px; border: 2px solid #eeeeee; line-height: 36px; padding-left: 13px; font-size: 12px; position: absolute; color: #949494;}
        .conner-b{ position: relative; top: -47px; left: 6px; width: 71px; height: 18px; line-height: 18px; font-size: 14px; background: #f5f5f5;text-align: center;}
        .ciner-c{ width: 121px; height: 38px; line-height: 38px; text-align: center; border: 1px solid #0098b3; margin-top: 70px; color: #0098b3;}
        .ciner-c a{color: #0098b3;}
        .basic-a{ width: 605px; height: 40px; line-height: 40px; color: #ffffff;}
        .basic-a .basica{background: #666666;width: 72px; display: block; text-align: center;}
        .basic-a .basicb{background: #eeeeee;width: 516px; display: block;padding-left: 16px}
        .flo-a{ margin-left: 30px;}
        .official-head .head-two .trade{ display: none;}
        .basic-a .basicb:hover{ cursor:pointer;font-weight: bold;}
        .head-three .three li {
            float: left;
            line-height: 17px;
            text-align: center;
            font-size: 16px;
            padding-top: 13px;
            height: 42px;
            cursor: pointer;
        }
        /*.head-three .three li a {*/
            /*!*color: #ffffff;*!*/
            /*!*padding: 0 67px;*!*/
            /*!*border: 1px red solid;*!*/
        /*}*/

        .fl input{
            width: 210px!important;;
        }
        .fl button{
            float: right;
        }
        .seek{
            overflow: hidden;
        }
    </style>
    <script src="/Public/app/js/willesPlay.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var publicIndex = 0;
        $(function(){
            $(".playContent > .videoitem").hide();
            $(".playContent > .videoitem").eq(0).show();
            $.each($(".sizea > a"),function(index,item){
                (function(index){
                    $(item).click(function(){
                        $('.playContent').click();
                        publicIndex = index;
                        $(".playContent > .videoitem").hide();
                        $(".playContent > .videoitem").eq(index).show();
                        $('.playContent').click();
                        return false;
                    });
                })(index);
            });
        });
    </script>
</head>
<body>
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

<div class="box">
    <p class="bac">全部课程 > 行业主题 > 主讲老师</p>
    <div class="container" id="container">
        <div class="row">
            <div class="vilo">
                <div id="willesPlay">
                    <div class="playHeader">
                        <div class="videoName"><?php echo ($data[0]["title"]); ?></div>
                    </div>
                    <div class="playContent">
                        <div class="videoitem" >
                            <video width="100%" height="100%;" src="<?php echo ($data[0]['url']); ?>" controls="true" loop></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="containera">
            <img src="/Public/app/img/banner.png"/>
        </div>
    </div>
    <div class="container-a">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><h6 class="fona-a liny-a"><?php echo ($vo1["kctitle"]); ?></h6><?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="color: #d4d3d6;line-height: 35px;">
            <p class="fl">购买人数:</p>
            <p class="fl">150</p>
            <p class="fl" style="margin-left: 5px;">好评度:</p>
            <p class="fl">100%</p>
            <div class="clearfix"></div>
        </div>
        <div class="container-b">
            阅读量：123 课时总数：50课时
            <div class="conner-b">开课时间</div>
        </div>
        <div style="width: 463px; background: #eeeeee; line-height: 32px; padding-left: 12px; font-size: 14px;color: #e74b00; margin-top: 70px;">
            欢迎进入扁鹊财院
        </div>
        <div class="ciner-c">
            <a href="http://pct.zoosnet.net/LR/Chatpre.aspx?id=PCT10814050&lng=cn">在线客服</a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div style="background: #EEEEEE; width: 100%; margin-top: 20px;">
    <div style="width: 1000px; margin: 0 auto;">
        <div class="videob fl" style="width: 716px;">
            <div class="main-title">
                <ul class="tab-nav">
                    <li class="current sizec lin-b" name="basic"><a id="kcjs" class="lin-b">课程介绍</a></li>
                    <li class="sizec lin-b" name="content"><a id="zjjj" class="lin-b">专家讲师</a></li>
                    <li class="sizec lin-b" name="user"><a id="xypl" class="lin-b">学员评论</a></li>
                </ul>
                <div class="tab-content basic">
                    <?php if(is_array($ress)): $i = 0; $__LIST__ = $ress;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="basic-a flo-a" style="padding-top: 21px;"><span class="fl basica">第<?php echo ($vo1["chapternum"]); ?>章</span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vo1["id"]); ?>&kname=<?php echo ($vo1["kname"]); ?>&name=<?php echo ($vo1["name"]); ?>&kctitle=<?php echo ($vo1["kctitle"]); ?>&title=<?php echo ($vo1["title"]); ?>"><p class="fl basicb"><?php echo ($vo1["title"]); ?></p></a></div>
                        <div class="clearfix"></div>
                        <div id="preview1" class="sizea height-c inu"><?php echo ($vo1["introduce"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="tab-content content" style="display:none">
                        <div class="content-o">
                            <div class="content-o-a fl"><img src="<?php echo ($arra['timg']); ?>"/></div>
                            <div class="content-o-b fl">
                                <h2 class="sizeo colod">扁鹊财学院创始人：<?php echo ($arra['name']); ?></h2>
                                <p class="opi sizeq">
                                    <?php echo ($arra['explain']); ?>
                                </p>
                            </div>
                        </div>
                    <!--<h2 class="content-ion fona-r fom-jia">你喜欢的课程</h2>-->
                    <!--<div class="content-iun">-->
                        <!--<a><img src="/Public/app/img/video-heah-img.png"/></a>-->
                        <!--<a><img src="/Public/app/img/video-heah-img.png" class="ting"/></a>-->
                    <!--</div>-->
                </div>
                <div class="tab-content user" style="display:none; position: absolute; background:#eeeeee;">
                    <div id="ctn" style="background: white;margin-top: 10px;">
                        <!--<p>暂无评论</p>-->
						<?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "暂无评论" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><div class="con">
								<?php echo ($comment["content"]); ?>
								<p class="iond yinc"><?php echo ($comment["name"]); ?></p>
								<span><img src="<?php echo ($comment["img"]); ?>"></span>
								<i><?php echo ($comment["addtime"]); ?></i>
								<div class="clearfix"></div>
							</div><?php endforeach; endif; else: echo "暂无评论" ;endif; ?>
                        <div class="clearfix"></div>
						<div class="page">
						<?php echo ($page); ?>
						</div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="area">
                        <form action="">
                            <textarea name="text" id="textArea" maxlength="140" onkeyUp="textLimitCheck(this, 30);"></textarea>
                            <font class="uij" color=#666666>限 30 个字符  已输入 <font color="#CC0000"><span id="messageCount">0</span></font> 个字</font>
                            <a href="#"><input type="button" value="评论" id="submit"></a>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="fl" style="width: 274px; margin-left: 9px; background: #ffffff; margin-top: 36px; padding-bottom: 85px;">
            <img src="/Public/app/img/zhuaaa.png" style="margin-left: 27px; margin-top: 35px;"/>
            <div style="margin-left: 20px; margin-top: 22px">
                <div class="fl" style="margin: 0 18px;">
                    <p>好评度</p>
                    <p>100%</p>
                </div>
                <div class="fl" style="margin: 0 18px;">
                    <p>好评度</p>
                    <p>100%</p>
                </div>
                <div class="fl" style="margin: 0 18px;">
                    <p>好评度</p>
                    <p>100%</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div style="margin-left: 30px; margin-top: 35px;">
                <p style="width: 197px; text-align: center;font-size: 12px; line-height: 16px;">领先的财务解决方案供应商</p>
                <p style="width: 197px; text-align: center;font-size: 12px; line-height: 16px;">防控财务亚健康  安全创造新财富</p>
            </div>
            <div style="margin-top: 50px; margin-left: 42px;">
                <img src="/Public/app/img/ewma.png"/>
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
<script type="text/javascript">
    //导航栏 c02003
//    $(function(){
//        $(".boe").hover(function(){
//            $(".aoe").css('border','0');
//        })
//        $(".aoe").hover(function(){
//            $(".aoe").css('border','0');
//        })
//        $(".boe").mouseout(function(){
//            $(".aoe").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-left','1px solid #ffffff');
//        })
//        $(".boa").hover(function(){
//            $(".aoa").css('border','0');
//            $(".aoe").css('border-right','0px');
//        })
//        $(".aoa").hover(function(){
//            $(".aoa").css('border','0');
//            $(".aoe").css('border-right','0');
//        })
//        $(".boa").mouseout(function(){
//            $(".aoa").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-left','1px solid #ffffff');
//        })
//
//
//        $(".bob").hover(function(){
//            $(".aoa").css('border','0');
//            $(".aob").css('border','0');
//        })
//        $(".aob").hover(function(){
//            $(".aoa").css('border','0');
//            $(".aob").css('border','0');
//        })
//        $(".bob").mouseout(function(){
//            $(".aoa").css('border-right','2px solid #ffffff');
//            $(".aob").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-left','1px solid #ffffff');
//        })
//
//        $(".boc").hover(function(){
//            $(".aob").css('border','0');
//            $(".aoc").css('border','0');
//        })
//        $(".aoc").hover(function(){
//            $(".aob").css('border','0');
//            $(".aoc").css('border','0');
//        })
//        $(".boc").mouseout(function(){
//            $(".aob").css('border-right','2px solid #ffffff');
//            $(".aoc").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-left','1px solid #ffffff');
//        })
//
//        $(".bod").hover(function(){
//            $(".aod").css('border','0');
//            $(".aoc").css('border','0');
//        })
//        $(".aod").hover(function(){
//            $(".aod").css('border','0');
//            $(".aoc").css('border','0');
//        })
//        $(".bod").mouseout(function(){
//            $(".aod").css('border-right','2px solid #ffffff');
//            $(".aoc").css('border-right','2px solid #ffffff');
//            $(".aoe").css('border-left','1px solid #ffffff');
//        })
//    })
    $('#kcjs').bind('click',function(){
//        alert(1);
        $(".basic").css("display","block");
        $(".content").css("display","none");
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/visual');?>",
        })
    })

    $('#zjjj').bind('click',function(){
        $(".basic").css("display","none");
        $(".content").css("display","block");
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/visual');?>",
        })
    })

    $('#xypl').bind('click',function(){
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/kcjs');?>",
        })
    })
    $(function () {
        $("#btn").click(function () {
            $.tipsBox({
                obj: $(this),
                str: "+1",
                callback: function () {
                }
            });
            niceIn($(this));
        });
    });
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
    $(document).ready(function () {
        var $btn = $('#submit');
        var $area = $('#textArea');
        var $ctn = $('#ctn');
        //添加评论
        $btn.click(function () {
            $val = $area.val();
            var date = new Date();
            if ($val != '') {
                $ctn.children('p').hide();
                var $con = $('<div class="con">' + $val + ' <p class="iond yinc">你好啊！ssssssssssssssssss</p><span><img src="/Public/app/img/txi.png"/></span><i>' + date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' +  date.getHours() + '：' + date.getMinutes() + '' + '</i><div class="clearfix"></div></div>');
                $con.data('cooName', 'name' + (date - 0));
                $ctn.prepend($con);
                $.cookie('name' + (date - 0), $val, {
                    expires: 1
                });
                $('.con').children('span').click(function () {
                    $.cookie($(this).parent().data('cooName'), '', {
                        expires: -1
                    });
                    $(this).parent().remove();
                    if ($ctn.children('div').size() == 0) {
                        $ctn.children('p').show();
                    }
                });
                $area.val('')
            } else {
                alert('内容不能为空!')
            }
        });
        //获取评论
        if (document.cookie) {
            $ctn.children('p').hide();
            var $coo = $.cookie();
            for (var key in $coo) {
                var date = new Date();
                date.setTime(key.substring(4)-0)
                var $con = $('<div class="con" style="background-color:"white"";>' +$coo[key] + '<p class="iond yinc">你好啊！ssssssssssssssssssssss</p><span><img src="/Public/app/img/txi.png"/></span><i>' + date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' +  date.getHours() + '：' + date.getMinutes() + ' ' + '</i><div class="clearfix"></div></div>');
                $con.data('cooName', key);
                $ctn.prepend($con);
                $('.con').children('span').click(function () {
                    $.cookie($(this).parent().data('cooName'), '', {
                        expires: -1
                    });
                    $(this).parent().remove();
                    if ($ctn.children('div').size() == 0) {
                        $ctn.children('p').show();
                    }
                })
            }
        }
    })
    function textLimitCheck(thisArea, maxLength){
        if (thisArea.value.length > maxLength){
            alert(maxLength + ' 个字限制. \r超出的将自动去除.');
            thisArea.value = thisArea.value.substring(0, 30);
            thisArea.focus();    }    /*回写span的值，当前填写文字的数量*/
        messageCount.innerText = thisArea.value.length;
    }
     $("#preview1").on("touchstart",function(){
     $('.none1').css("display","block");
     $('.none2').css("display","none");
     $('.none3').css("display","none");
     $('.none4').css("display","none");
      $("#preview1").css("color","#00a0e9");
     $("#preview2").css("color","#000");
     $("#preview3").css("color","#000");
     $("#preview4").css("color","#000");
     });
      $("#preview2").on("touchstart",function(){
      $('.none1').css("display","none");
       $('.none2').css("display","block");
       $('.none3').css("display","none");
       $('.none4').css("display","none");
       $("#preview2").css("color","#00a0e9");
        $("#preview1").css("color","#000");
        $("#preview3").css("color","#000");
        $("#preview4").css("color","#000");
      });
     $("#preview3").on("touchstart",function(){
      $('.none1').css("display","none");
      $('.none2').css("display","none");
      $('.none3').css("display","block");
      $('.none4').css("display","none");
      $("#preview3").css("color","#00a0e9");
      $("#preview1").css("color","#000");
      $("#preview2").css("color","#000");
      $("#preview4").css("color","#000");
    });
    $("#preview4").on("touchstart",function(){
      $('.none1').css("display","none");
      $('.none2').css("display","none");
      $('.none3').css("display","none");
      $('.none4').css("display","block");
      $("#preview4").css("color","#00a0e9");
      $("#preview1").css("color","#000");
      $("#preview3").css("color","#000");
      $("#preview2").css("color","#000");
    });

	$('#submit').click(function() {
		var vid = <?php echo ($data[0]['id']); ?>;	
		var content = $('#textArea').val();

		$.post(
			'<?php echo U("Index/viewComment");?>',
			{'vid':vid, 'content':content},
			function(res) {
				if(res == 0) {
					location.href = '<?php echo U("Login/loginPage");?>';
					return;
				}else if(res == 1){
                    $('#textArea').val('');
                }else{

                }

			}
				
		);
			
	});

//sanfenzhong
		var flag = false;
		var video = document.getElementsByTagName('video')[0];
		video.addEventListener('timeupdate', function() {
			var t = parseInt(video.currentTime);
			if(t >= 180 && !flag) {
				$.post(
					'<?php echo U("Index/isLogin");?>',{},
					function(res) {
						if(res ==  0) {
							video.pause();
							if(confirm('请登陆继续观看')) {
								location.href = '<?php echo U("Login/loginPage");?>';
								return;
							} 						
						} else {
							flag = true;
						}

					}
				);
			}
		});
</script>
</html>