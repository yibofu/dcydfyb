<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>专家介绍---<?php echo ($tea['name']); ?></title>
    <link href="/Public/app/css/official.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
    <script type="text/javascript" src="/Public/app/js/L_slide.js"></script>
    <style>
        .main-fl-t .top-a{
            border: 1px solid #0098b3;
            width: 124px;
            height: 157px;
        }
        .main-fl-t .top-a p{
            font-size: 16px;
            line-height: 24px;
            height: 24px;
            width: 124px;
            background: #0098b3;
            color: #ffffff;
            text-align: center;
            margin-top: -50px;
            position: absolute;
            z-index: 2;
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
<body style="background: #ffffff">
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
<div class="inner">
    <div class="banner">
        <img src="/Public/app/img/pic-d.png"/>
    </div>
    <div class="main">
        <div class="main-fl">
            <div class="main-fl-t">
                <div class="main-top1">
                    <h3>专家介绍</h3>
                </div>
                <div style="width: 528px;margin-left: 87px;margin-top: 37px;">
                    <div class="top-a fl" style="margin-bottom: 40px;">
                        <img src="<?php echo ($tea['timg']); ?>" style="width: 124px;height: 157px;"/>
                        <p>讲师：<?php echo ($tea['name']); ?></p>
                    </div>
                    <div style="width:324px; margin-left: 78px;" class="fl">
                        <h3 class="height-a title-c">讲师简介</h3>
                        <p style="text-align: right" class="height-e title-e wia">—企业财务管理顶尖实战专家</p>
                        <div class="height-j title-d"><?php echo ($tea['explain']); ?></div>
                        <!--<p class="height-j title-d">长财财务系统主讲老师</p>-->
                        <!--<p class="height-j title-d">长财财务系统首席咨询顾问</p>-->
                        <!--<p class="height-j title-d">中国注册会计师</p>-->
                        <!--<p class="height-j title-d">中国注册税务师</p>-->
                        <!--<p class="height-j title-d">中国注册资产评估师</p>-->
                        <!--<p class="height-j title-d">致力于建立企业科学的财务系统管理体系</p>-->
                        <!--<p class="height-j title-d">有效平衡企业利润与财务安全关系</p>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="main-top1">
                    <h3>专家甄选</h3>
                </div>
                <p class="title-d height-a texta" style="margin-top: 20px; margin-left: 28px;">加入扁鹊财院的专家团队，是必须经过多轮严格的甄选。我们不考虑只有理论基础，没有
                    实践经验的专家讲师，也不考虑只有实践经验，而无法将经验升华为理论和知识的专家讲师。
                    理论水平和实践经验兼备，但对培训没有热情，或者无法习得优秀授课技巧的人，也不是这个
                    团队的人选。不认同“正直、以客户为中心、专业、追求”的长财咨价值观，我们更会敬而远
                    之。所以，扁鹊财院讲师团队中的每一位成员，都是百里挑一的财务培训专家。</p>
                <img src="/Public/app/img/for.png" style="margin-top: 26px; margin-left: 45px; margin-bottom: 60px;"/>
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
                <img src="/Public/app/img/for01.png" style="margin-top: 50px;margin-left: 27px; "/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="main-fr">
            <div class="main-fr-t">
                <ul>
                    <li><img src="/Public/app/img/main-fr-01.jpg"></li>
                    <li><img src="/Public/app/img/main-fr-02.jpg"></li>
                    <li><img src="/Public/app/img/main-fr-03.jpg"></li>
                    <li><img src="/Public/app/img/main-fr-04.jpg"></li>
                    <li><img src="/Public/app/img/main-fr-05.jpg"></li>
                    <li><img src="/Public/app/img/main-fr-06.jpg"></li>
                </ul>
            </div>
            <div class="main-fr-m">
                <p>授课展示图</p>
                <img src="/Public/app/img/mian-lr_03.jpg">
            </div>
            <div class="main-fr-b">
                <img src="/Public/app/img/main-fr-b.jpg">
            </div>
            <div class="main-fr-i">
                <img src="/Public/app/img/main-fr-b2.jpg">
            </div>
        </div>
        <div class="clear"></div>
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
</script>
</html>