<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-在线报名</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/sign_up.css" />
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
	</head>
	<body style="background:white;">
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
		<div class="sign_all" style="line-height:50px;">

			<!--在线报名的banner-->
			<div class="confirmation_banner">
				<img src="/Public/app/img/confirmation_banner_img.png" />
			</div>
			
			<div class="part_one">
				<!--申请的课程-->
				<div class="apply_classes">
					<p class="apply_classes_title"><img src="/Public/app/img/apply_classes_img.png"><span>您申请的课程</span></p>
					<p class="apply_classes_text"><span>课程名称：</span><span style="color: #666666;font-weight: 500;"><?php echo ($courseInfo["title"]); ?></span></p>
					<p class="apply_classes_text"><span>时间地点：</span><span><?php echo ($courseInfo["info"]); ?></span></p>
					<p class="apply_classes_text"><span>课程单价：</span><span>￥<?php echo ($courseInfo["cost"]); ?></span><img src="/Public/app/img/book.png"><a style="font-size: 18px;">费用说明</a></p>
				</div>
				<!--培训收益-->
				<div class="training-income">
					<div class="training-income_title"><img src="/Public/app/img/training-income.png"><span>培训收益</span>
						<button><img src="/Public/app/img/training_btn.png" />该课大纲</button>
					</div>
					<textarea rows="3">
						认识——全面预算对企业完成战略目标的重要性
						明确——高效的全面预算管理体系中的关键点  
						理解——构建适合自己企业的预算管理体系思路
					</textarea>
				</div>
			</div>
			<!--联系人基本信息-->
			<form action="<?php echo U('Kecheng/confirmation');?>" method="post">
			<div class="training_person">
				<p class="training_person_title"><img src="/Public/app/img/training_person.png"><span>联系人基本信息</span><span>已有扁鹊帐号？请点击<span style="color: #F55E5E;">【登录】</span>后调后联系人及学员信息</span></p>
				<p class="person_information"><span>*</span>姓名：<input type="text" name="uname"></p>
				<p class="person_information"><span>*</span>部门：<input type="text" name="apart"></p>
				<p class="person_information"><span>*</span>邮件：<input type="text" name="mail"></p>
				<p class="person_information"><span>*</span>职位：<input type="text" name="postion"></p>
				<p class="person_information"><span>*</span>公司：<input type="text" name="company"></p>
				<p class="person_information"><span>*</span>手机：<input type="text" name="phone"></p>
			</div>
			<!--付款方式-->
			<div class="pay_style">
				<p class="pay_style_title"><img src="/Public/app/img/pay_style.png"><span>付款方式</span></p>
				<p class="bank_price"><input type="radio"id="bank_price_input"><label for="bank_price_input">线下付款</label></p>
			</div>
			<!--其他要求-->
			<div class="other_requirements">
				<p class="other_requirements_title"><img src="/Public/app/img/require.png"/><span>您的其它要求及相关说明</span></p>
				<textarea placeholder="在此填写您的其它要求，诸如发票抬头等" name="others"></textarea>
			</div>
			<!--提交信息-->
			<div class="submit_btn">
				<button type="submit">提交信息</button>
			</div>
			<input type="hidden" value="<?php echo ($courseInfo["id"]); ?>" name="cour" />
			</form>
		</div>
		<!--友情链接-->
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