<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
	<title>扁鹊财院-开通会员</title>
	<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
	<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
	<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
	<link rel="stylesheet" href="/Public/app/css/official.css">
	<link rel="stylesheet" href="/Public/app/css/open_vip.css" />
	<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
	<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>

</head>
<body style="background-color:white ;">
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
<div class="vip_all">

	<!--banner图片-->
	<div class="open_vip_banner">
		<img src="/Public/app/img/open_vip_banner.png" />
	</div>
	<!--开通会员的内容-->
	<div class="open_vip_main">
		<div class="vip_title">
			<em>VIP</em>
			<p>会员规则</p>
		</div>
		<div class="vip_text">
			<!--初级会员-->
			<div class="vip_primary">
				<img src="/Public/app/img/vip_num1.png" />
				<hr />
				<p>初级会员</p>
				<div style="clear: both;"></div>
				<ul>
					<li><p>凡在扁鹊财院注册帐号后，即成为初级会员。</p></li>
					<li><p>初级会员可以免费浏览网站内分享的文章资讯及一些免费视频课程。</p></li>
				</ul>
			</div>
			<!--开通会员-->
			<div class="open_vip_btn_box">
				<button class="open_vip_btn">开通会员</button>
			</div>

			<!--金鹊会员-->
			<div class="vip_jinque">
				<img src="/Public/app/img/vip_num2.png" />
				<hr />
				<p>金鹊会员</p>
				<div style="clear: both;"></div>
				<ul>
					<li><p>服务费用更优惠</p></li>
					<li><p>金牌顾问全程跟踪</p></li>
					<li><p>极速连线</p></li>
				</ul>
			</div>
		</div>


	</div>
	<!--步骤1.2.3-->
	<div class="vip_steps">
		<!--第一步-->
		<div class="vip_step_1">
			<p>1.VIP会员可免费观看扁鹊财院资深讲师分享的直播课程，每周一期，全年免费。</p>
			<img src="/Public/app/img/vip_step1.png" />
		</div>
		<!--第二步-->
		<div class="vip_step_2">
			<p>2.VIP会员有机会参加扁鹊财院组织的线下沙龙分享。</p>
			<img src="/Public/app/img/vip_step2.png" />
		</div>
		<!--第三步-->
		<div class="vip_step_3">
			<p>3.VIP会员有机会与资深财务专家同台直播。</p>
			<img src="/Public/app/img/vip_step3.png" />
		</div>
	</div>
	<!--按钮-->
	<div class="promptly_open">
		<button >升级金鹊会员？立即开通</button>
	</div>
	<!--友情链接-->

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
</html>