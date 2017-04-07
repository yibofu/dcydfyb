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
        <li class="boc"><a href="<?php echo U('Index/member');?>" class="aoc bor-c" target="_blank">会员专享</a></li>
        <li class="bod"><a href="<?php echo U('Index/about');?>" class="aod bor-c" target="_blank">关于扁鹊</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
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
                                    <div><img src="/Public/app/img/user-b.png" class="fl" style="margin-top: 5px; margin-left: 99px;"/><p class="height-a title-j color-b fl">&nbsp;&nbsp;365元</p><div class="clearfix"></div></div>
                                </div>
                                <div class="title-d" style="width: 100%; margin-top: 148px; line-height: 36px; margin-left: 66px;">
                                    <div class="fl">VIP限量8888名</div>
                                    <div style="margin-left: 10px" class="fl color-c">只剩301名</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div style=" margin: 16px 0 0 77px;">
                                    <div style="line-height: 36px; font-size: 16px;" class="fl">支付方式：</div>
                                    <div style="width: 118px;height: 30px; padding:3px 0 0 16px;" class="fl bor-l"><img src="/Public/app/img/wxzf.png"/></div>
                                </div>
                                <input id="one-a" style="margin: 54px 0 0 96px;" class="btn btn-primary title-c" type="submit" name="submit" value="立 即 开 通" />
                            </div>
                            <div class="fr" style="width: 240px;font-size: 16px; margin:35px 70px 0 0; line-height: 30px;">
                                <p>1.VIP会员可免费观看扁鹊财院资深讲师分享的直播课程，每周一期，全年免费。</p>
                                <p>2.VIP会员有机会参加扁鹊财院组织的线下沙龙分享。</p>
                                <p>3.VIP会员有机会与资深财务专家同台直播。</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="two" style="margin:65px 0 0 310px; display: none">
                        <h3 style="line-height: 30px;font-size: 24px;">您即将购买的是扁鹊财院年费会员</h3>
                        <p style="font-size: 18px; line-height: 54px;">价格：365元</p>
                        <div style=" margin-top: 28px;">
                            <div style="line-height: 38px; margin-right: 10px; font-size: 18px;" class="fl">支付方式：</div>
                            <img src="/Public/app/img/wxzf.png" class="fl"/>
                            <div class="clearfix"></div>
                        </div>
                        <input style="margin: 62px 0 0 30px;" id="two-a" class="btn btn-primary title-c" type="submit" name="submit" value="立 即 支 付" />
                    </div>
                    <div id="three" style="display: none">
                        <div style="width: 220px; line-height: 34px; font-size: 16px; margin:50px 0 0 210px;" class="fl">
                            <p>订单编号:43546456</p>
                            <p>购买订单：2017-2-12</p>
                            <p>价格：365元</p>
                            <div class="ooy" style="margin:30px 0 0 25px;"><img src="/Public/app/img/erty.png"/></div>
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
</body>
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
    $('#one-a').click(function () {
        $('#one').slideUp(200);
        $('#two').slideDown(200);
    })
    $('#two-a').click(function () {
        $('#two').slideUp(200);
        $('#three').slideDown(200);
    })
    $('#nine').click(function () {
        $('.three-six').slideUp(200);
        $('#zero').slideDown(200);
        $('#one').slideDown(200);
    })
    $('.i').click(function () {
        $('#zero').slideUp(200);
        $('#two').slideUp(200);
        $('#three').slideUp(200);
        $('#six').slideUp(200);
    })

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