<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>百问百答</title>
    <link rel="stylesheet" href="/Public/app/css/introduce_all.css" />
    <link rel="stylesheet" href="/Public/app/css/ask_answer.css" />
    <script src="/Public/app/js/jquery.min.js"></script>
    <script src="/Public/app/js/ask_answer.js"></script>
</head>
<body style="background: white;">
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

<!--选择卡-->

<div class="consult_all">
    <!--banner头部图片-->
    <div class="consult_banner">
        <img src="/Public/app/img/ask_answer_banner.png" />
    </div>
    <div class="consult_main">
        <!--内容左边的部分-->
        <div class="consult_left">
            <!--选项卡标题-->

            <div class="TAB_title">
				<?php if(is_array($types)): $i = 0; $__LIST__ = array_slice($types,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><p attr="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
				<p attr="<?php echo ($types[3]['id']); ?>"style="margin-right:0px;"><?php echo ($types[3]['name']); ?></p>
            </div>
			<?php if(is_array($question)): $i = 0; $__LIST__ = $question;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ques): $mod = ($i % 2 );++$i;?><div class="left_part1">
                <div class="TAB_text">
                    <p class="TAB_text_title">
                        <img src="/Public/app/img/newicon.png">
                        <span>看别人的问题 说你的观点</span>
                    </p>
                    <!--循环遍历的开始-->
					<?php if(is_array($ques)): $i = 0; $__LIST__ = $ques;if( count($__LIST__)==0 ) : echo "该分类下还没有问题" ;else: foreach($__LIST__ as $key=>$qu): $mod = ($i % 2 );++$i;?><div class="TAB_text_text">
                        <div class="TAB_text_img">
                            <div class="personImg"></div>
                            <p><span>*</span><?php echo ($qu["nickname"]); ?></p>
                        </div>
                        <div class="TAB_text_textRight">
                            <div class="text_question">
                                <p><img src="/Public/app/img/Q.png"/><span class="questionText"><?php echo ($qu["question"]); ?></span></p>
                                <p><img src="/Public/app/img/A.png"/><span class="answerText"><?php echo ($qu["answer"]); ?></span></p>
                                <div class="textQuestionPerson">
                                    <img src="/Public/app/img/expect_contact.png"><span class="adminName"><a href="<?php echo U('Teacher/teacherIntroduce');?>?id=<?php echo ($qu["teacherid"]); ?>" style="color:#f55e5e;"><?php echo ($qu["teacher"]); ?></a></span>
                                    <img class="collectImg tooltip" name="upvote" attr="<?php echo ($qu["aid"]); ?>" title="点赞" src="/Public/app/img/support.png"><span class="collectNum"><?php echo ($qu["upvote"]); ?></span>
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div><?php endforeach; endif; else: echo "该分类下还没有问题" ;endif; ?>

            <!--页数-->
            <div class="page">
				<?php echo ($page); ?>
            </div>
            <div class="left_part2">
                <div class="ask_title">
                    <button>我要提问</button>
                    <img src="/Public/app/img/horn.png" />
                    <p>
                        <span></span>
                    </p>
                </div>
                <div class="ask_text">
                    <textarea name="textarea"></textarea>
                    <div class="number_limit">
                        <p>限45个字符 已输入<span>0</span>个字符</p>
                        <button name="sub">提交问题</button>
						<input type="hidden" name="tid" value="<?php echo ($types[0]['id']); ?>">
                    </div>
                </div>
            </div>
        </div>
        <!--内容右边的部分-->
        <div class="consult_right">
            <!--菜单部分-->
            <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>菜单栏</title>
    <link rel="stylesheet" href="/Public/app/fontM/iconfont.css" />
    <link rel="stylesheet" href="/Public/app/css/menuother.css" />
    <script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
    <script type="text/javascript" src="/Public/app/fontM/iconfont.js" ></script>
</head>
<body>
<div class="menuRightcho">
    <div class="menuRightchol">
        <a href="#" class="underlineNeg">
            <i class="icon iconfont icon-xiaofeizhe"></i>
            <p>我要学习</p>
        </a>
        <a href="#"  class="underlineNeg">
            <i class="icon iconfont icon-zaixianwenzhen"></i>
            <p>观看直播</p>
        </a>
        <a href="#"  class="underlineNeg">
            <i class="icon iconfont icon-hetongshenhe"></i>
            <p>我要提问</p>
        </a>
        <a href="#"  class="underlineNeg">
            <i class="icon iconfont icon-lesson"></i>
            <p>预约专家</p>
        </a>
    </div>
    <div class="menuRightchor">
        <p>扁鹊财院核心服务</p>
    </div>
</div>
</body>
<script>
    $(function(){
        $(".underlineNeg").hover(function(){
            $(this).css({"background-color":"#0098b3"}).siblings(".underlineNeg").css("background","white");
            $(this).find("i,p").css("color","white");
            $(this).siblings(".underlineNeg").find("i,p").css("color","#0098b3");
        });
        $(".underlineNeg").mouseleave(function(){
            $(this).css({"background":""});
            $(this).find("i,p").css("color","#0098b3");
        });
    });
</script>
</html>

            <div class="clear"></div>
            <!--轮播图-->
            <div class="carousel">
                <div class="carousel_title">授课展示图</div>
                <div class="carousel_img">
                    <img src="/Public/app/img/carousel_1.png" id="pic" />
                </div>
            </div>
            <!--参与讨论-->
            <div class="join_discuss">
                <!--开始部分-->
                <div class="discuss_part1">
                    <!--参与讨论的标题-->
                    <div class="discuss_title">
                        <img src="/Public/app/img/wenhao.png" />
                        <p>最新问题</p>
                    </div>
                    <!--参与讨论的内容(开始循环遍历的块)-->
                    <div class="qlist">
					<?php if(is_array($newQuestion)): $i = 0; $__LIST__ = $newQuestion;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nquestion): $mod = ($i % 2 );++$i;?><div class="discuss_text">
                        <div class="question">
                            <img src="/Public/app/img/Q.png" />
                            <div>
                                <p class="questionFirP"><?php echo ($nquestion["question"]); ?></p>
                                <p class="questionSecP">提问时间：<span><?php echo ($nquestion["addtime"]); ?></span><span class="phoneNumber"><?php echo ($nquestion["phone"]); ?></span></p>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

            </div>

        </div>


    </div>


</div>
<!--二维码-->
<div style="width: 600px;margin: 0 auto;">
    <div class="QR_code">
        <img class="crossIcon" src="/Public/app/img/cross.png">
        <img src="/Public/app/img/QR_code.png" />
        <p>扫码参与讨论</p>
    </div>
</div>
<!--友情链接-->
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
    //鼠标移上去二维码出来
    $(".QR_code").css("display","none");
    $(".joinBtn").click(function(){
//        alert(123)
        var Oindex=$(this).parents(".TAB_text_text").index();
        var indexEp=Oindex-1;
        //alert(indexEp);
        //alert("-1150+Oindex*50+'px'");
        if (navigator.userAgent.indexOf('Firefox') >= 0){
            $(".QR_code").css({"display":"block","position":"relative","top":-1020+indexEp*150+'px',"left":"340px"});
        }
        if (navigator.userAgent.indexOf('Chrome') >= 0){
            $(".QR_code").css({"display":"block","position":"relative","top":-880+indexEp*150+'px',"left":"340px"});
        }


    });
    $(".crossIcon").click(function(){
        $(this).parent().css("display","none");
    });
</script>
<script>
    //		分页
    $(function(){
//
        var i=0;
        $(".page_num").eq(i).css({"background":"#5fc8da","color":"white"});
        $(".page_num").click(function(){
            $(".page_num").css({"background":"","color":""});
            $(this).css({"background":"#5fc8da","color":"white"});
        });

    })


	$(".TAB_title").children().mouseover(function(){
		$('input[name=tid]').val($(this).attr('attr'));
	})

    $('button[name=sub]').click(function() {
        var tid = $('input[name=tid]').val();
        var content = $('textarea[name=textarea]').val();
        $.post(
                '<?php echo U("MyService/makeQuestion");?>',
                {'tid':tid,'content':content},
                function(res) {
                    if(res == 0) {
                        location.href = '<?php echo U("Login/loginPage");?>';
                    } else if(res == 1) {
                        var childrens = $('.qlist').children('.discuss_text');

                        //判断是否有７个以上的问题，如果多余７个则删除最后一个
                        if(childrens.length >= 7) {
                            childrens.last().remove();
                        }

                        //获取问题列表
                        var dateobj = new Date();
                        var nowyear = dateobj.getFullYear();
                        var nowmonth = dateobj.getMonth();
                        var nowday = dateobj.getDate();

                        //拼接列表字符串
                        var html = '<div class="discuss_text">';
                        html += '<div class="question">';
                        html += '<img src="/Public/app/img/Q.png" />';
                        html += '<div>';
                        html += '<p class="questionFirP">';
                        html += content;
                        html += '</p>';
                        html += '<p class="questionSecP">提问时间：';
                        html += '<span>';
                        html += nowyear;
                        html += '-';
                        html += nowmonth;
                        html += '.';
                        html += nowday;
                        html += '</span>'
                        html += '<span class="phoneNumber">151****8888</span>'
                        html += '</p> </div> </div></div>';

                        $('.qlist').prepend(html);

                        $('textarea[name=textarea]').val('');
                        html = '';
                    }
                }
        );
    });

//点赞
    $("img[name=upvote]").click(function(){
		var aid = $(this).attr('attr');
		var that = $(this);

		$.post(
			'<?php echo U("AskAnswer/upvote");?>',		
			{'aid':aid},
			function(res) {
				if(res == 1) {
					var upnumnode = that.siblings(".collectNum");
					var upnum = parseInt(upnumnode.html()) + 1;
					that.attr("src","/Public/app/img/ask_answer/support_check.png");
					that.siblings(".collectNum").html(upnum);
					that.siblings(".collectNum").css({"color":"#ff5918","font-weight":"700"});
					that.unbind('click');
				}
			
			}
		);
	});
</script>
</html>