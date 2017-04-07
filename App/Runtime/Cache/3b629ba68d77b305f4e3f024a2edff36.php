<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-财税问诊</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
		<link rel="stylesheet" href="/Public/app/css/official.css">
		<link rel="stylesheet" href="/Public/app/fonts/font/iconfont.css" />
		<link rel="stylesheet" href="/Public/app/css/Video_diagnostic.css" />
		<link rel="stylesheet" href="/Public/app/css/introduce_all.css" />

		<script type="text/javascript" src="/Public/app/fonts/font/iconfont.js" ></script>
		<style>
			.active{
				background: rgba(0,0,0,0.1);
			}
		</style>
	</head>
	<body style="background: white;">
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
		<div class="consult_all">
			<!--banner头部图片-->
			
			<div class="consult_banner">
				<img src="/Public/app/img/Video_diagnostic/Video_diagnostic_banner.png" />
			</div>		
			<div class="consult_main" style="margin-top: 60px;">
				<!--内容左边的部分-->
				<div class="consult_left">
					<!--选项卡部分-->
					<div class="TAB_all">
						<!--选项卡-->
						<div class="diagnostic_TAB">
						<!--远程视频诊断-->
						<div class="TAB_num">
							<div><i class="iconfont icon-shipin"></i></div>
							<p>远程视频诊断</p>
						</div>
						<!--面试财务经理-->
						<div class="TAB_num">
							<div><i class="iconfont icon-mianshi"></i></div>
							<p>面试财务经理</p>
						</div>
						<!--我要审核合同-->
						<div class="TAB_num">
							<div><i class="iconfont icon-wodeshenhe"></i></div>
							<p>我要审核合同</p>
						</div>
						<!--我要审报表-->
						<div class="TAB_num">
							<div><i class="iconfont icon-04"></i></div>
							<p>我要审报表</p>
						</div>
						<!--财务猎头-->
						<div class="TAB_num">
							<div><i class="iconfont icon-tc-hunter"></i></div>
							<p>财务猎头</p>
						</div>
					</div>
						<!--选项卡的内容-->
						<div class="TAB_main">
						<!--第一部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_1.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>远程视频诊断</span></p>
								<div class="part_num_text">
									<p>1、预约申请远程视频诊断  【预约申请】</p>
									<p>2、24小时内客服会与您取得联系约定好诊断的时间</p>
									<p>3、财务专家如约与您视频连线，进行财务诊断</p>
									<p>4、诊断完成，请对本次视频诊断做出评价及建议</p>
								</div>
							</div>
						</div>
						<!--第二部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_2.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>面试财务经理</span></p>
								<div class="part_num_text">
									<p>1、预约申请财务经理面试</p>
									<p>2、24小时内客服会与您取得联系约定好面试的时间</p>
									<p>3、财务专家如约与您视频连线，进行财务经理面试</p>
									<p>4、诊断完成，请对本次视频面试做出评价及建议</p>
								</div>
							</div>
						</div>
						<!--第三部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_3.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>我要审核合同</span></p>
								<div class="part_num_text">
									<p>1、在线提交合同</p>
									<p>2、24小时内专家会与您连线详谈合同事项</p>
									<p>3、详谈完毕，合同进入审改期</p>
									<p>4、合同审改完毕，请点击下载审改后的完整合同</p>
									<p>5、下载合同完毕，请对本次审改做出评价及建议</p>
								</div>
							</div>
						</div>
						<!--第四部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_4.png" style="width: 80%;"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>我要申报表</span></p>
								<div class="part_num_text">
									<p>1、在线提交报表</p>
									<p>2、24小时内专家会与您连线详谈报表事项</p>
									<p>3、详谈完毕，报表进入审改期</p>
									<p>4、报表审改完毕，请点击下载审改后的完整报表</p>
									<p>5、下载报表完毕，请对本次审改做出评价及建议</p>
								</div>
							</div>
						</div>
						<!--第五部分-->
						<div class="part_number">
							<div class="part_number_left">
								<img src="/Public/app/img/Video_diagnostic/picture_5.png"/>
							</div>
							<div class="part_number_right">
								<p class="part_num_title">您即将预约的是<span>财务猎头</span></p>
								<div class="part_num_text">
									<p>1、在线填写财务人员需求</p>
									<p>2、扁鹊客服需求进行简历匹配</p>
									<p>3、财务专家进行第二轮把关匹配</p>
									<p>4、发起面试</p>
									<p>5、面试完成后，请对推荐的财务人员进行评价</p>
								</div>
							</div>
						</div>
						
					</div>
						<!--确定预约按钮-->
						<div class="confirm_button">
							<button>确定预约</button>
						</div>
					</div>
					<!--扁鹊服务部分-->
					<div class="bianque_service">
						<div><p class="service_title"><img src="/Public/app/img/Video_diagnostic/service_img.png" />扁鹊服务</p><span></span><span>最具专业价值的企业财务问题诊断</span></div>
						<p class="service_text">
							如因特殊原因（包括但不限于恶劣天气、航班延误、授课教师身体不适等情况）造成的培训无法
							按期举办或有所变更，我们会及时通知说明，并安排您改期参加或根据您的情况更改相应培训课程，
							您的参课计划如果有所变更，请务必于培训课程开始前一周通知我们，以便我们安排工作。谢谢！如
							因特殊原因（包括但不限于恶劣天气、航班延误、授课教师身体不适等情况）造成的培训无法按期举
							办或有所变更。
						</p>
					</div>
					<!--课程推荐-->
					<div class="classes_recommend">
						<div><p class="classes_recommend_title"><img src="/Public/app/img/Video_diagnostic/recommend_img.png" />课程推荐</p></div>
						
						<div class="video_show">
						<!--块级-->
							<div class="video_show_part">
								<img class="img_num1"  src="/Public/app/img/Video_diagnostic/video_img.png" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span>餐饮企业营改增应对餐饮企业</span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/Video_diagnostic/person.png" />
									<span style="font-size: 10px;">讲师  刘国东</span>
									<img class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
								</div>
							</div>
							<div class="video_show_part">
								<img class="img_num1"  src="/Public/app/img/Video_diagnostic/video_img.png" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span>餐饮企业营改增应对餐饮企业</span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/Video_diagnostic/person.png" />
									<span style="font-size: 10px;">讲师  刘国东</span>
									<img class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
								</div>
							</div>
							<div class="video_show_part">
								<img class="img_num1"  src="/Public/app/img/Video_diagnostic/video_img.png" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span>餐饮企业营改增应对餐饮企业</span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/Video_diagnostic/person.png" />
									<span style="font-size: 10px;">讲师  刘国东</span>
									<img class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
								</div>
							</div>
							<div class="video_show_part">
								<img class="img_num1"  src="/Public/app/img/Video_diagnostic/video_img.png" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span>餐饮企业营改增应对餐饮企业</span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/Video_diagnostic/person.png" />
									<span style="font-size: 10px;">讲师  刘国东</span>
									<img  class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
								</div>
							</div>
							<div class="video_show_part">
								<img  class="img_num1" src="/Public/app/img/Video_diagnostic/video_img.png" />
								<div class="first_model">
									<p><span>视频</span></p>
									<span>餐饮企业营改增应对餐饮企业</span>
								</div>
								<div class="second_model">
									<img src="/Public/app/img/Video_diagnostic/person.png" />
									<span style="font-size: 10px;">讲师  刘国东</span>
									<img class="star_collect" src="/Public/app/img/Video_diagnostic/collect.png" />
								</div>
							</div>
						</div>
						
					</div>
					
					
				</div>
				<!--内容右边的部分-->
				<div class="consult_right">
					<!--菜单部分-->
					<div class="main-fr">
		                <div class="main-fr-t">
		                    <ul class="main-fr-t-a">
		                        <li id="swphoto">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-01.png" style="display: none"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-1.png"/>
		                        </li>
		                        <li id="swphota">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-02.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-2.png" style="display: none"/>
		                        </li>
		                        <li id="swphotb">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-03.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-3.png" style="display: none"/>
		                        </li>
		                        <li id="swphotc">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-04.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-4.png" style="display: none"/>
		                        </li>
		                        <li id="swphotd">
		                            <img class="img1" src="/Public/app/img/menu_img/main-fr-05.png"/>
		                            <img class="img2" src="/Public/app/img/menu_img/main-fr-5.png" style="display: none"/>
		                        </li>
		                        <li><img src="/Public/app/img/menu_img/main-fr-06.jpg"/></li>
		                    </ul>
		                </div>
		                
		            </div>
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
				</div>
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
		</div>

	</body>
	<script src="/Public/app/js/jquery.min.js"></script>
	<script>
	
	$(function(){
		//选项卡
		$(".TAB_num i").css("color","#7FCBD9");
		$(".TAB_num p").css("color","#0098b3");
		$(".TAB_num i").eq(0).css("color","white");
		$(".TAB_num").eq(0).css({"background":"#0098b3"});
		$(".TAB_num p").eq(0).css({"color":"white"});
		$(".part_number").eq(0).css("display","block");
		$(".TAB_num div").eq(0).css({"border":"2px #7fcbd9 solid"});
		$(".TAB_num").mouseover(function(){
//			alert($(this).index());
			$(".TAB_num").css({"background":"white"});
			$(".TAB_num").eq($(this).index()).css({"background":"#0098b3"});
			$(".TAB_num div").css({"border":"2px #7fcbd9 solid"});
			$(".TAB_num div").eq($(this).index()).css({"border":"2px white solid"});
			$(".TAB_num i").css({"color":"#7fcbd9"});
			$(".TAB_num i").eq($(this).index()).css({"color":"white"});
			$(".TAB_num p").css({"color":"#0098b3"});
			$(".TAB_num p").eq($(this).index()).css({"color":"white"});
			$(".part_number").css("display","none");
			$(".part_number").eq($(this).index()).css("display","block");
		});
		//视频显示效果
		$(".video_show_part").mouseover(function(){
			$(this).find(".img_num1").attr("src","/Public/app/img/Video_diagnostic/未标题-1.png");
			$(this).find(".img_num1").addClass("active");
			
		});
		$(".video_show_part").mouseleave(function(){
			$(this).find(".img_num1").attr("src","/Public/app/img/Video_diagnostic/video_img.png");
//			$(this).find(".img_num1").addClass("active");
			
		});
		//收藏星星
		$(".star_collect").click(function(){
//			alert($(this).parent().parent().index());
			$(".star_collect").attr("src","/Public/app/img/Video_diagnostic/collect.png");
			$(".star_collect").eq($(this).parent().parent().index()).attr("src","/Public/app/img/Video_diagnostic/collect_check.png");
		});
	});
	
	
	
	//轮播
		window.onload=function(){
			var OImg=document.getElementById("pic");
			var timer=setInterval(go,1000);
			var index=0;
			function go(){
				index++;
				if (index==5) {
					index=1;
				}
				OImg.src="/Public/app/img/carousel_"+index+".png";
			}
			
		}
	//鼠标指上去会有提示
		$(function(){
			//鼠标移上去有提示性的文字
//				定义了x y的坐标初始值
				var x=10;
				var y=20;
				$("a.tooltip").mouseover(function(e){
//					alert(typeof(e));
//					e表示的一个事件对象在这里表示的是鼠标移上去的事件对象----鼠标指针的位置
					var tooltip="<div id='tooltip'>"+this.title+"</div>";
					$("body").append(tooltip);
					//pageX,pageY鼠标指针位置，相对于文本的左边缘
					$("#tooltip").css({"position":"relative","top":(e.pageY+y)+"px","left":(e.pageX+x)+"px","height":"20px","width":"50px","line-height":"20px"}).show("fast");
					//这里必须写相对定位或者绝对定位，要不然Top和Left都不能实现作用
					//alert(e.pageY+y);
				}).mouseout(function(){
					$("#tooltip").remove();
				});
			//最底下按钮和内容的切换
				$(".leaveword_btn").find("button").eq(0).css({"background-color":"#47b8cc","color":"white"});
				$(".part_num").css("display","none");
				$(".part_num").eq(0).css("display","");
				$(".leaveword_btn").find("button").click(function(){
					$(this).css({"background-color":"#47b8cc","color":"white"}).siblings().css({"background-color":"","color":""});
//					alert($(this).index());
					$(".part_num").css("display","none");
					$(".part_num").eq($(this).index()).css("display","");
				});
			//查询的内容(文本框)
				$(".part_num textarea").click(function(){
					$(this).css("border","1px #888888 solid");
				});
		});
	</script>
	
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