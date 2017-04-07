<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>扁鹊财学院--领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。</title>
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <meta name="title" content="扁鹊财学院---财税资讯">
    <meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
    <meta name="description" content="扁鹊财学院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
    <link rel="stylesheet" href="/Public/app/css/official.css">
    <link rel="stylesheet" href="/Public/app/css/caption.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/L_slide.js"></script>
    <script type="text/javascript" src="/Public/app/js/jquery.js"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>

    <script type="text/javascript">
        //分页 c02003
        $(document).ready(function(){
            //每页显示的数目
            var show_per_page = 32;
            //获取content对象里面，数据的数量
            var number_of_items = $('#content').children().size();
            //计算页面显示的数量
            var number_of_pages = Math.ceil(number_of_items/show_per_page);
            //隐藏域默认值
            $('#current_page').val(0);
            $('#show_per_page').val(show_per_page);
            var navigation_html = '<a class="previous_link" href="javascript:previous();">上一页</a>';
            var current_link = 0;
            while(number_of_pages > current_link){
                navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
                current_link++;
            }
            navigation_html += '<a class="next_link" href="javascript:next();">下一页</a>';
            $('#page_navigation').html(navigation_html);
            //add active_page class to the first page link
            $('#page_navigation .page_link:first').addClass('active_page');
            //隐藏该对象下面的所有子元素
            $('#content').children().css('display', 'none');
            //显示第n（show_per_page）元素
            $('#content').children().slice(0, show_per_page).css('display', 'block');
        });
        //上一页
        function previous(){
            new_page = parseInt($('#current_page').val()) - 1;
            //if there is an item before the current active link run the function
            if($('.active_page').prev('.page_link').length==true){
                go_to_page(new_page);
            }
        }
        //下一页
        function next(){
            new_page = parseInt($('#current_page').val()) + 1;
            //if there is an item after the current active link run the function
            if($('.active_page').next('.page_link').length==true){
                go_to_page(new_page);
            }
        }
        //跳转某一页
        function go_to_page(page_num){
            //get the number of items shown per page
            var show_per_page = parseInt($('#show_per_page').val());
            //get the element number where to start the slice from
            start_from = page_num * show_per_page;
            //get the element number where to end the slice
            end_on = start_from + show_per_page;
            //hide all children elements of content div, get specific items and show them
            $('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
            /*get the page link that has longdesc attribute of the current page and add active_page class to it
             and remove that class from previously active page link*/
            $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
            //update the current page input field
            $('#current_page').val(page_num);
        }



    </script>
    <style>
        #page_navigation{ position: absolute;bottom: -50px; left: 380px; }
        #page_navigation a{

            padding:3px 10px;

            border:1px solid gray;

            margin:2px;

            color:black;

            text-decoration:none

        }

        .active_page{

            background:#0098b3;

            color:white !important;

        }
        .message-san{ width: 700px; margin-left: 96px; margin-top: 60px;}
        .message-san .tab-content{}
        .message-san .content .content-h3{ width: 672px; border-bottom: 1px dashed #787878;}
        .message-san .content .content-h3 h3{ text-align: center; width: 610px;line-height: 40px;}
        .message-san .content .content-p{ width: 370px; color: #aaaaaa;}
    </style>
</head>
<body class="message-nav">
    <div class="message">
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
    <!--图片 c02003-->
    <div class="message-numbera">
        <img src="/Public/app/img/daid.png"/>
    </div>
    <div class="one message-one message-ini min-q bor-e">
        <img src="/Public/app/img/sanyuan.png" class="imgsan"/>
        <div class="message-left fl tab-nav">
            <h3 class="title-u height-r bor-t">财务资讯</h3>
            <ul class="left">
                <li name="basic"><a href="<?php echo U('Index/message');?>?lanmu=1">案例</a></li>
                <li name="content"><a href="<?php echo U('Index/message');?>?lanmu=2">法规</a></li>
                <li name="user"><a href="<?php echo U('Index/message');?>?lanmu=3">干货</a></li>
                <li name="four"><a href="<?php echo U('Index/message');?>?lanmu=4">动态</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="message-san fl">
            <div class="tab-content basic">
                <input type='hidden' id='current_page' />

                <input type='hidden' id='show_per_page' />

                <div class="content">
                    <div class="content-h3 height-c"><h3 class="fl wina"><?php echo ($result['title']); ?></h3><a href="<?php echo U('Index/message');?>" class="fr color-b wid" id="uin">返回列表》</a><div class="clearfix"></div></div>
                    <div class="content-p fr title-d height-c min-t">
                        <p class="fl">作者：</p><p class="fl"><?php echo ($result['auth']); ?></p><p class="fl min-c">上传时间：</p><p class="fl"><?php echo ($result['time']); ?></p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div  id='content' class="height-j ini color-u">
                        <p><?php echo ($result['content']); ?></p>

                    </div>
                </div>
                <div id='page_navigation'></div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!--友情链接 c02003-->
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
<script>
    //选择卡 c02003
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