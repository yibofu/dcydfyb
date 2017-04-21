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
				<?php if($_SESSION['admins']['id'] == ''): ?><ul>
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
                                    <img src="/Public/app/img/expect_contact.png"><span class="adminName"><?php echo ($qu["teacher"]); ?></span>
                                    <img class="collectImg tooltip" title="点赞" src="/Public/app/img/support.png"><span class="collectNum">9</span>
                                    <button class="joinBtn">参与讨论</button>
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
<!--二维码-->
<div class="QR_code">
    <img class="crossIcon" src="/Public/app/img/cross.png">
    <img src="/Public/app/img/QR_code.png" />

    <p>扫码参与讨论</p>
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
</script>
<script src="js/jquery.min.js"></script>
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
					var childrens = $('.discuss_text').children('.question');

					//判断是否有７个以上的问题，如果多余７个则删除最后一个
					if(childrens.length >= 7) { 
						childrens.last().remove();
					}

					//获取问题列表
					var htmls = $('.discuss_text').html();

					var dateobj = new Date();
					var nowyear = dateobj.getFullYear();
					var nowmonth = dateobj.getMonth();
					var nowday = dateobj.getDate();

					//拼接列表字符串
					var html = '<div class="question">'; 
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
						html += '</p> </div> </div>';

						htmls = html + htmls;
						$('.discuss_text').html('');
						$('.discuss_text').html(htmls);

						$('textarea[name=textarea]').val('');
				}
			}
		);
	});

</script>
</html>