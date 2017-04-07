<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财院---课程中心</title>
    <link rel="stylesheet" href="/Public/app/css/official.css">
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
            background: #ffffff;border: 1px solid #dddddd;
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

    </style>
</head>
<body>
<!--头部 c02003-->
<!--头部 c02003-->
<div class="official-head">

    <div class="head-two">
        <div class="one">
            <a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/logo-a.png" class="img1 fl"/></a>
            <div class="seek-a fl">
                <div class="seek bor-a">
					<form action="<?php echo U('Search/search');?>" method="get">
						<table class="fl">
							<tr>
								<td>
									<select name="drop2" class="ui-select fl">
										<option value="article">搜文章</option>
										<option value="video">搜视频</option>
									</select>
								</td>
							</tr>
						</table>
						<input class="fl title-a" type="text" name="keywords" value="请输入关键词" onfocus="if (value =='请输入关键词'){value =''}"onblur="if (value ==''){value='请输入关键词'}">
						<button class="fl" type="submit">搜索</button>
					</form>
                </div>
                <div class="trade fl">
                    <p class="title-a fl wid color-a">热门搜索：</p>
                    <div class="box title-a fl color-b wid"></div>
                    <a class="change title-a fl color-a"><img src="/Public/app/img/hh.png" class="img3"/>换一换</a>
                </div>
            </div>
            <div class="hours fl">
                <img src="/Public/app/img/logo-b.png" class="img4 fl"/>
                <p class="title-a">24小时服务热线</p>
                <p class="title-a color-c">010-59458017</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--选择卡-->
<div class="head-three">
    <ul class="three one">
        <li class="boe"><a class="aoe bor-c" style="padding: 0 82px;border-left: 1px solid #ffffff;" href="<?php echo U('Index/index');?>">首页</a></li>
        <li class="boa"><a href="<?php echo U('Index/kce');?>" class="aoa bor-c" target="_blank">课程中心</a></li>
        <li class="bob"><a href="<?php echo U('Article/message');?>" class="aob bor-c" target="_blank">政策速递</a></li>
        <li class="boc"><a href="<?php echo U('Vip/openVip');?>" class="aoc bor-c" target="_blank">会员专享</a></li>
        <li class="bod"><a href="<?php echo U('Index/about');?>" class="aod bor-c" target="_blank">关于扁鹊</a></li>
        <div class="clearfix"></div>
    </ul>
</div>

    <div class="banner">
        <img src="/Public/app/img/pic-d.png"/>
    </div>
<div class="main">
    <div class="inner">
        <div class="kce-one">
            <div id="ck" class="tab-nav hl_main5_content">
                <div class="fl kce-oneone">
                    <a href="<?php echo U(Index/kce);?>"><img src="/Public/app/img/officialkce-xin.png" style="margin: 2px 0 0 1px;"/></a>
                </div>
                <div class="fl h1_main5_title">
                    <div class="title-f fl h1_main5_title-one" onclick="xilie()"><a class="color-k">系列专题 ></a></div>

                    <ul class="h1_main5_title-two">
                        <?php if(is_array($resultt)): $i = 0; $__LIST__ = $resultt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vov): $mod = ($i % 2 );++$i;?><li class="title-e fl"><a onclick="zname(this)" name="zna"><?php echo ($vov["zname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="hl_main5_content1-one title-f" onclick="zhuanjia()"><a class="color-k">专家精选 ></a></div>
                    <div class="hl_main5_content1">

                        <ul class="hl_main5_content1-two">
                            <?php if(is_array($resultt1)): $i = 0; $__LIST__ = $resultt1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvoo): $mod = ($i % 2 );++$i;?><li class="title-e fl content1-two"><a onclick="namee(this)"><?php echo ($vvoo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="hl_scrool_leftbtn cursor" style="font-size: 18px;">
                        <
                    </div>
                    <div class="hl_scrool_rightbtn cursor" style="font-size: 18px;">
                        >
                    </div>
                </div>
            </div>
            <div id="title">
                <span class="fl">全部视频<i style="margin-left: 5px;">></i></span>
                <span class="fl" style="font-size: 14px; margin: 2px 0 0 5px;">专家精选<i style="margin-left: 5px;">></i></span>
                <span class="fl" style="font-size: 14px; margin: 2px 0 0 5px;">刘国东</span>
            </div>
        </div>
        <div id="video">
            <ul class="ck-video basia tab-content newslist" id="all" style="display: block;">
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fl">
                    <a href="<?php echo U('Index/visual');?>?id=<?php echo ($vo["id"]); ?>&kname=<?php echo ($vo["kname"]); ?>&name=<?php echo ($vo["name"]); ?>&kctitle=<?php echo ($vo["kctitle"]); ?>&title=<?php echo ($vo["title"]); ?>" class="avio">
                        <img src="<?php echo ($vo["img"]); ?>">
                        <i></i>
                    </a>
                    <div class="cursor" style="margin-top: 230px;">
                        <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vo["id"]); ?>&kname=<?php echo ($vo["kname"]); ?>&name=<?php echo ($vo["name"]); ?>&kctitle=<?php echo ($vo["kctitle"]); ?>&title=<?php echo ($vo["title"]); ?>"><?php echo ($vo["kctitle"]); ?></a></span>
                        <p>讲师:&nbsp<?php echo ($vo["name"]); ?></p>
                        <div class="fr avio-one"><img src="/Public/app/img/offcial-collectb.png" class="img1" title="收藏"/></div>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

            <ul class="ck-video basia tab-content newslist" id="xlzt" style="display: none;">
                <?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($voo["id"]); ?>&kname=<?php echo ($voo["kname"]); ?>&name=<?php echo ($voo["name"]); ?>&kctitle=<?php echo ($voo["kctitle"]); ?>&title=<?php echo ($voo["title"]); ?>" class="avio">
                            <img src="<?php echo ($voo["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($voo["id"]); ?>&kname=<?php echo ($voo["kname"]); ?>&name=<?php echo ($voo["name"]); ?>&kctitle=<?php echo ($voo["kctitle"]); ?>&title=<?php echo ($voo["title"]); ?>"><?php echo ($voo["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($voo["name"]); ?></p>
                            <div class="fr avio-one"><img src="/Public/app/img/offcial-collectb.png" class="img1" title="收藏"/></div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

            <ul class="ck-video basia tab-content newslist" id="zjjx" style="display: none;">
                <?php if(is_array($arr11)): $i = 0; $__LIST__ = $arr11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vov): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($vov["id"]); ?>&kname=<?php echo ($vov["kname"]); ?>&name=<?php echo ($vov["name"]); ?>&kctitle=<?php echo ($vov["kctitle"]); ?>&title=<?php echo ($vov["title"]); ?>" class="avio">
                            <img src="<?php echo ($vov["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vov["id"]); ?>&kname=<?php echo ($vov["kname"]); ?>&name=<?php echo ($vov["name"]); ?>&kctitle=<?php echo ($vov["kctitle"]); ?>&title=<?php echo ($vov["title"]); ?>"><?php echo ($vov["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($vov["name"]); ?></p>
                            <div class="fr avio-one"><img src="/Public/app/img/offcial-collectb.png" class="img1" title="收藏"/></div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!--系列专题的子项-->
            <ul class="ck-video basia tab-content newslist" id="xlztz" style="display: none;">
                <?php if(is_array($arrr)): $i = 0; $__LIST__ = $arrr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vovo): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($vovo["id"]); ?>&kname=<?php echo ($vovo["kname"]); ?>&name=<?php echo ($vovo["name"]); ?>&kctitle=<?php echo ($vovo["kctitle"]); ?>&title=<?php echo ($vovo["title"]); ?>" class="avio">
                            <img src="<?php echo ($vovo["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vovo["id"]); ?>&kname=<?php echo ($vovo["kname"]); ?>&name=<?php echo ($vovo["name"]); ?>&kctitle=<?php echo ($vovo["kctitle"]); ?>&title=<?php echo ($vovo["title"]); ?>"><?php echo ($vovo["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($vovo["name"]); ?></p>
                            <div class="fr avio-one"><img src="/Public/app/img/offcial-collectb.png" class="img1" title="收藏"/></div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <!--专家精选的子项-->
            <ul class="ck-video basia tab-content newslist" id="zjjxz" style="display: none;">
                <?php if(is_array($arr11)): $i = 0; $__LIST__ = $arr11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vov): $mod = ($i % 2 );++$i;?><li class="fl">
                        <a href="<?php echo U('Index/visual');?>?id=<?php echo ($vov["id"]); ?>&kname=<?php echo ($vov["kname"]); ?>&name=<?php echo ($vov["name"]); ?>&kctitle=<?php echo ($vov["kctitle"]); ?>&title=<?php echo ($vov["title"]); ?>" class="avio">
                            <img src="<?php echo ($vov["img"]); ?>">
                            <i></i>
                        </a>
                        <div class="cursor" style="margin-top: 230px;">
                            <span><a href="<?php echo U('Index/visual');?>?id=<?php echo ($vov["id"]); ?>&kname=<?php echo ($vov["kname"]); ?>&name=<?php echo ($vov["name"]); ?>&kctitle=<?php echo ($vov["kctitle"]); ?>&title=<?php echo ($vov["title"]); ?>"><?php echo ($vov["kctitle"]); ?></a></span>
                            <p>讲师:&nbsp<?php echo ($vov["name"]); ?></p>
                            <div class="fr avio-one"><img src="/Public/app/img/offcial-collectb.png" class="img1" title="收藏"/></div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class='clearfix'></div>
    </div>
    <!--友情链接 c02003-->
<div class="official-eight one" >
    <h3 class="title-b color-b wid min-h">友情链接</h3>
    <ul>
        <li><a href="http://www.changcaizixun.com/">天津长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">北京长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">太原长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">广州长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">成都长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">长沙长财咨询</a></li>
        <li><a href="http://www.changcaizixun.com/">金华长财咨询</a></li>
        <li><a>四度信息</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
<!--底部 c02003-->
<div class="official-bottom">
    <div class="one min-l">
        <div class="bottom-one fl bor-y"><img src="/Public/app/img/logoxia.png"/></div>
        <div class="bottom-two fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">帮助中心</li>
                <li class="height-a color-v title-a">购物帮助</li>
                <li class="height-a color-v title-a">支付方式</li>
                <li class="height-a color-v title-a">选定课程</li>
            </ul>
        </div>
        <div class="bottom-two fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">关于我们</li>
                <li class="height-a color-v title-a">了解我们</li>
                <li class="height-a color-v title-a">关注我们</li>
                <li class="height-a color-v title-a">加入我们</li>
            </ul>
        </div>
        <div class="bottom-four fl bor-y bor-v">
            <ul>
                <li class="height-s color-s title-d wid">联系我们</li>
                <li class="height-a color-v title-a">公司地址：北京市朝阳区旺座大厦东塔1920室 </li>
                <li class="height-a color-v title-a">客服服务：18310618231</li>
                <li class="height-a color-v title-a">版权所有：WWW.bianquecxy.con</li>
            </ul>
        </div>
        <div class="bottom-five fl">
            <ul class="fl">
                <li class="color-s height-s title-d">服务热线</li>
                <li class="height-a title-e color-d">010-59458017</li>
                <li class="height-a title-d color-d">© 2016 大财有道科技<br/> 京ICP备16057406号</li>
            </ul>
            <img src="/Public/app/img/er.png" class="fl"/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
</body>
<script src="/Public/app/js/rollSlide.js"></script>
<script>
    //导航栏 c02003
    $(function(){
        $(".boe").hover(function(){
            $(".aoe").css('border','0');
        })
        $(".aoe").hover(function(){
            $(".aoe").css('border','0');
        })
        $(".boe").mouseout(function(){
            $(".aoe").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })
        $(".boa").hover(function(){
            $(".aoa").css('border','0');
            $(".aoe").css('border-right','0px');
        })
        $(".aoa").hover(function(){
            $(".aoa").css('border','0');
            $(".aoe").css('border-right','0');
        })
        $(".boa").mouseout(function(){
            $(".aoa").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })


        $(".bob").hover(function(){
            $(".aoa").css('border','0');
            $(".aob").css('border','0');
        })
        $(".aob").hover(function(){
            $(".aoa").css('border','0');
            $(".aob").css('border','0');
        })
        $(".bob").mouseout(function(){
            $(".aoa").css('border-right','2px solid #ffffff');
            $(".aob").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })

        $(".boc").hover(function(){
            $(".aob").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".aoc").hover(function(){
            $(".aob").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".boc").mouseout(function(){
            $(".aob").css('border-right','2px solid #ffffff');
            $(".aoc").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })

        $(".bod").hover(function(){
            $(".aod").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".aod").hover(function(){
            $(".aod").css('border','0');
            $(".aoc").css('border','0');
        })
        $(".bod").mouseout(function(){
            $(".aod").css('border-right','2px solid #ffffff');
            $(".aoc").css('border-right','2px solid #ffffff');
            $(".aoe").css('border-left','1px solid #ffffff');
        })
    })
    $('.newslist').kkPages({
        PagesClass:'li', //需要分页的元素
        PagesMth:8, //每页显示个数
        PagesNavMth:5 //显示导航个数
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

    $(".avio-one .img1").click(function(){
        $(this).attr('src','/Public/app/img/offcial-collecta.png');
    });
    $(function(){
        var oUl=document.getElementsByClassName('about')[0];
        var aBtn=oUl.getElementsByTagName("li");
        var aBox=document.getElementsByClassName('main_a');
        //找到对应的div
        for(var i=0;i<aBtn.length;i++){
            //为每个标签标记编号
            aBtn[i].index=i;
            aBtn[i].onclick=function(){
                for(var j=0;j<aBtn.length;j++){
                    aBtn[j].className='';	//将全部标签去掉class
                }
                for(var j=0;j<aBox.length;j++){
                    aBox[j].style.display="none";//把所有div隐藏
                }
                this.className='ac uiny';//当前点击的标签增加class=ac
                aBox[this.index].style.display="block";//让当前标签对应的div显示
            };
        }
    })

    function xilie(){
        $('#xlztz').text(" ");
        $("#xlzt").css("display","block");
        $("#all").css("display","none");
    }

    function zhuanjia(){
        $('#xlztz').text(" ");
        $("#all").css("display","none");
        $("#xlzt").css("display","none");
        $("#zjjx").css("display","block");
    }

    //系列专题
    function zname(obj){
        var names = $(obj).html();
        url = "<?php echo U('Index/xl');?>?name="+names;
        $.ajax({
            type:"post",
            dataType:"html",
            url:url,
            data:{"zname":names},
            success:function(data){
                $('#xlztz').text(" ");
                $("#xlztz").html(data);
                $("#all").css("display","none");
                $("#xlzt").css("display","none");
                $("#zjjx").css("display","none");
                $("#xlztz").css("display","block");
                $("#zjjxz").css("display","none");
                $(".avio-one .img1").click(function(){
                    $(this).attr('src','/Public/app/img/offcial-collecta.png');
                });
            }
        })
    }

    //专家精选
    function namee(obj){
        var name = $(obj).html();
        url = "<?php echo U('Index/zj');?>?name="+name;
        $.ajax({
            type:"post",
            dataType:"html",
            url:url,
            data:{"name":name},
            success:function(data){
                $('#zjjxz').text(" ");
                $("#zjjxz").html(data);
                $("#all").css("display","none");
                $("#xlzt").css("display","none");
                $("#zjjx").css("display","none");
                $("#xlztz").css("display","none");
                $("#zjjxz").css("display","block");
                $(".avio-one .img1").click(function(){
                    $(this).attr('src','/Public/app/img/offcial-collecta.png');
                });
            }
        })
    }

</script>
</html>