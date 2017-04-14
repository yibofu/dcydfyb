<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
    <title>扁鹊财院-领先的财务解决方案供应商；防控财务亚健康，安全创造新财富</title>
    <meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
    <meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
    <meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>
    <link rel="stylesheet" href="/Public/app/css/official.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/L_slide.js"></script>
    <script language="javascript" src="http://pct.zoosnet.net/JS/LsJS.aspx?siteid=PCT10814050&float=1&lng=cn"></script>
    <style>

    #login-i{
        background: url("/Public/app/img/official-cg.png") no-repeat center;
        width: 324px;
        height: 329px;
    }
    #closea{
        float: right;
        color: #999;
        padding: 10px;
        margin: -2px -5px -5px;
        font: bold 14px/14px simsun;
        text-shadow: 0 1px 0 #ddd;
    }
    .official-ya{position: relative;top: 37px;}
    .official-yb{position: relative;top: -196px; display: none;}
    .official-yc{position: relative;top: -18px;}
    .official-yd{position: relative;top: 36px; display: none;}
    .official-yo:hover{ font-weight: bold;}

    table select{
        border:0;
        width: 72px;
        margin-left: -2px;
        line-height: 31px;
        height: 31px;
        margin-top: -3px;
        border-right: 1px solid #e5e5e5;
        color: #666666;
        font-size: 12px;
    }

    .official-head .head-two .seek-a{width: 348px; height: 58px; margin: 25px 0 0 47px;}
    .official-head .head-two .seek{ width: 348px; height: 31px;}
    /*.official-head .head-two .seek .img2{ margin: 4px 20px 0 9px; }*/

    .official-head .head-two .seek input{ width: 215px; height: 31px;}
    .official-head .head-two .seek input[value="请输入关键词"]{ color: #CCCCCC;}
    .official-head .head-two .seek button{ width: 57px; height: 31px; background: #0098b3; color: #ffffff; }
    .official-head .head-two .trade{ width: 348px; line-height: 26px;}
    .one-ab a:hover{color: #00A0E9;}

    .newClass{
        float: right;
        margin-top: -25px;
        padding-left: -30px;
        width:70px;
        text-align: center;
    }
    #cricle{
        width: 100px;
        overflow: hidden;
        position:relative;
        top: -30px;
        margin: 0 auto;
    }
    #cricle li{
        float: left;
        list-style: none;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 10px 0 10px;
        cursor: pointer;
        background: white;
    }
    .lunbo{
        display:block;
    }
</style>
</head>

<body>
    <div class="official">
        <div class="official-head">
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
						<li class="ahref"><a href="<?php echo U('Index/user');?>">用户中心</a></li>
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

        </div>
        <div class="official-number wrap af4">
            <a class="lunbo" href="<?php echo U('Kecheng/boss');?>" ><img src="/Public/app/img/banner0.png" id="Oimg"></a>
            <ul  class="slidebox" id="cricle">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!--内容区 c02003-->
        <div class="one">
            <!--远程财税问诊-->
            <div class="official-one bac-b bor-e">
                <div class="one-yi bor-d">
                    <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><h3 class="title-b color-b wid fl one-yih">财税问诊</h3></a>
                    <div class="clearfix"></div>
                </div>
                <div class="one-er">
                    <ul class="er tabbtn title-a" id="fadetab">
                       <li class="current" id="pna" style="background-color: rgb(201, 234, 240);"><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><p class="a bor-f">远程视频诊断</p></a></li>
                        <li id="pnb"><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><p class="b bor-f">面试财务经理</p></a></li>
                        <li id="pnc"><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><p class="c bor-f">我要审核合同</p></a></li>
                        <li id="pnd"><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><p class="d bor-f">我要审报表</p></a></li>
                        <li id="pne"><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><p class="e">财务猎头</p></a></li>
                        <div class="clearfix"></div>
                    </ul>
                    <div></div>
                    <div class="tabcon" id="fadecon">
                        <!--1-->
                        <div class="sublist" style="display: block;">
                            <div class="one-aa bor-a fl">
                                <img src="/Public/app/img/rw_03.png"/>
                                <div class="one-ab color-d title-a">远程视频诊断</div>
                            </div>
                            <div class="one-bb fl bor-j">
                                <div class="one-bb-a fl">
                                    <h3 class="title-c wid height-b">最具专业价值的企业财务问题诊断</h3>
                                    <p class="title-d height-c">1、预约申请远程视频诊断  <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><span id="one" class="color-c cursor">【预约申请】</span></a></p>
                                    <p class="title-d height-c">2、24小时内客服会与您取得联系约定好远程视频诊断的时间</p>
                                    <p class="title-d height-c">3、财务专家如约与您视频连线，进行财务诊断</p>
                                    <p class="title-d height-c">4、诊断完成，请对本次视频诊断做出评价及建议</p>
                                </div>
                                <div class="fl">
                                    <img src="/Public/app/img/jianb_03.png"/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--2-->
                        <div class="sublist">
                            <div class="one-aa bor-a fl">
                                <img src="/Public/app/img/z01_03.png"/>
                                <div class="one-ab color-d title-a">面试财务经理</div>
                            </div>
                            <div class="one-bb fl bor-j">
                                <div class="one-bb-a fl">
                                    <h3 class="title-c wid height-b">最具专业价值的企业财务问题诊断</h3>
                                    <p class="title-d height-c">1、预约申请财务经理面试  <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><span id="two" class="color-c cursor">【预约申请】</span></a></p>
                                    <p class="title-d height-c">2、24小时内客服会与您取得联系约定好远程面试的时间</p>
                                    <p class="title-d height-c">3、财务专家如约与您视频连线，进行财务经理面试</p>
                                    <p class="title-d height-c">4、面试完成，请对本次视频面试做出评价及建议</p>
                                </div>
                                <div class="fl min-a">
                                    <img src="/Public/app/img/you-9.png"/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--3-->
                        <div class="sublist">
                            <div class="one-aa bor-a fl">
                                <img src="/Public/app/img/z02_03.png"/>
                                <div class="one-ab color-d title-a">我要审核合同</div>
                            </div>
                            <div class="one-bb fl bor-j">
                                <div class="one-bb-a fl">
                                    <h3 class="title-c wid height-b">财务专家最专业最具价值经验的合同审改</h3>
                                    <p class="title-d height-c">1、在线预约  <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><span id="three" class="color-c cursor">【预约申请】</span></a></p>
                                    <p class="title-d height-c">2、24小时内专家会与您连线详谈合同事项</p>
                                    <p class="title-d height-c">3、详谈完毕，合同进入审改期</p>
                                    <p class="title-d height-c">4、审改完毕，联系客服下载完整合同</p>
                                </div>
                                <div class="fl min-a minu">
                                    <img src="/Public/app/img/you-8.png" class="minu"/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--4-->
                        <div class="sublist">
                            <div class="one-aa bor-a fl">
                                <img src="/Public/app/img/z03_03.png"/>
                                <div class="one-ab color-d title-a">我要审报表</div>
                            </div>
                            <div class="one-bb fl bor-j">
                                <div class="one-bb-a fl">
                                    <h3 class="title-c wid height-b">财务专家最专业的报表审改</h3>
                                    <p class="title-d height-c">1、在线预约  <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><span id="four" class="color-c cursor">【预约申请】</span></a></p>
                                    <p class="title-d height-c">2、24小时内专家会与您连线详谈报表事项</p>
                                    <p class="title-d height-c">3、详谈完毕，报表进入审改期</p>
                                    <p class="title-d height-c">4、审改完毕。联系客服下载批改报表。</p>
                                </div>
                                <div class="fl min-a minu">
                                    <img src="/Public/app/img/you-7_06.png" class="minu"/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--5-->
                        <div class="sublist">
                            <div class="one-aa bor-a fl">
                                <img src="/Public/app/img/z05_03.png"/>
                                <div class="one-ab color-d title-a">财务猎头</div>
                            </div>
                            <div class="one-bb fl bor-j">
                                <div class="one-bb-a fl">
                                    <h3 class="title-c wid height-b">帮助优秀的企业找到财务精英</h3>
                                    <p class="title-d height-c">1、在线预约  <a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><span id="five" class="color-c cursor">【预约申请】</span></a></p>
                                    <p class="title-d height-c">2、扁鹊客服进行简历匹配</p>
                                    <p class="title-d height-c">3、财务专家进行第二轮把关</p>
                                    <p class="title-d height-c">4、客服与您联系，推荐优秀财务精英。 </p>
                                </div>
                                <div class="fl min-a minu">
                                    <img src="/Public/app/img/z05_06.png" class="minu"/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
	    <!--选课中心-->
            <div class="official-four bac-b bor-e">
                <a href="<?php echo U('Index/kce');?>"><img src="/Public/app/img/kc.png" class="mioj"/></a>
                <div class="one-yi bor-i min-k">
                    <a class="title-b color-b wid fl one-yih min-i" style="cursor: pointer;">系列专题</a>
                    <p class="color-b title-e fl height-j">为我的企业定制专题课</p>
                    <div class="clearfix"></div>
                </div>
                <div class="four-one">
                    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa): $mod = ($i % 2 );++$i;?><a class="four-one-a fl" href="<?php echo U('Index/visual');?>?id=<?php echo ($voa["id"]); ?>&kname=<?php echo ($voa["kname"]); ?>&name=<?php echo ($voa["name"]); ?>&kctitle=<?php echo ($voa["kctitle"]); ?>&title=<?php echo ($voa["title"]); ?>">
                            <img src="<?php echo ($voa["img"]); ?>"/>
                            <div class="four-one-aa bac-aa">
                                <div class="four-one-ab">
                                    <h3 class="title-c color-d text"><?php echo ($voa["name"]); ?>老师分享：</h3>
                                    <p class="title-d color-d text"><?php echo ($voa["kctitle"]); ?></p>
                                </div>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="clearfix"></div>
                </div>
                <div class="one-yi bor-i min-k">
                    <a class="title-b color-b wid fl one-yih min-i" style="cursor: pointer;">专家精选</a>
                    <p class="color-b title-e fl height-j">听财务专家分享他们的财务管理精髓</p>

                    <div class="clearfix"></div>
                </div>
                <div class="four-one">
                    <?php if(is_array($arra)): $i = 0; $__LIST__ = $arra;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voaa): $mod = ($i % 2 );++$i;?><a class="four-one-a fl" href="<?php echo U('Index/visual');?>?id=<?php echo ($voaa["id"]); ?>&kname=<?php echo ($voaa["kname"]); ?>&name=<?php echo ($voaa["name"]); ?>&kctitle=<?php echo ($voaa["kctitle"]); ?>&title=<?php echo ($voaa["title"]); ?>">
                        <img src="<?php echo ($voaa["img"]); ?>"/>
                        <div class="four-one-aa bac-aa">
                            <div class="four-one-ab">
                                <h3 class="title-c color-d text"><?php echo ($voaa["name"]); ?>老师分享：</h3>
                                <p class="title-d color-d text"><?php echo ($voaa["kctitle"]); ?></p>
                            </div>
                        </div>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
	      <!--线下大课-->
            <div class="official-six bac-b bor-e">
                <div class="one-yi bor-i">
                    <h3 class="title-b color-b wid fl one-yih min-i">线下课程</h3>

                    <div class="clearfix"></div>
                </div>
                <div class="six-one">
                    <div class="six-one-a fl" >
                        <div id="xxdk1">
                         <a href="<?php echo U('Kecheng/boss');?>?ctid=<?php echo ($rea[0]['id']); ?>"> <img src="<?php echo ($rea[0]['img']); ?>"/></a>
                        
                        </div>

                    </div>
                    <div class="six-one-a fl min-s">
                        <div id="xxdk2">
                            <a href="<?php echo U('Kecheng/boss');?>?ctid=<?php echo ($rea[1]['id']); ?>"><img src="<?php echo ($rea[1]['img']); ?>?ctid=<?php echo ($rea[1]['id']); ?>"/></a>
                       
                        </div>
                    </div>
                    <div class="six-one-a fl min-s">
                        <div id="xxdk3">
                            <a href="<?php echo U('Kecheng/boss');?>?ctid=<?php echo ($rea[2]['id']); ?>"><img src="<?php echo ($rea[2]['img']); ?>?ctid=<?php echo ($rea[2]['id']); ?>"/></a>
                       
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
	 <!--问答解决方案-->
            <div class="official-three bac-b bor-e">
                <div class="one-yi bor-d">
                    <a href="<?php echo U('AskAnswer/Asks');?>"><h3 class="title-b color-e wid fl one-san one-yic">百问百答</h3></a>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="three">
                    <img src="/Public/app/img/three-a_03.png" class="fl"/>
                    <div class="three-a fl">
                        <div class="abouta bac-d fl">
                            <ul class="about color-d">
                                <p class="title-j">2017</p>
                                <h3 class="title-j">您所关注的财税问题都在这里</h3>
                                <a href="<?php echo U('AskAnswer/Asks');?>"><li class="ac uiny">钱帐税</li></a>
                                    <a href="<?php echo U('AskAnswer/Asks');?>"><li>股权设立</li></a>
                                    <a href="<?php echo U('AskAnswer/Asks');?>"><li>收购并购</li></a>
                                    <a href="<?php echo U('AskAnswer/Asks');?>"><li>新三板</li></a>
                            </ul>
                        </div>

                        <!--钱帐税-->
                        <div class="main_a ac fr">
                            <div class="main_aa bor-p">
                                <h4 class="color-e title-d height-d">税已经抄报了，15号之前要扣税款，账上没有钱，怎么办啊？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>如果你处于这样的困境，那么你会面临两个问题。首先，你得找出给国税局(IRS)付税的方法。其次，你要搞清你的生意出了什么问题，特别在资金流动方面，然后作出改进。也许最要记住的事是你即使付不起税也要报税。</a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                            <div class="main_aa min-j">
                                <h4 class="color-e title-d height-d">入公司账户的钱要扣哪些税？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>只有做为收入进入公司帐户的款顶才有交税的可能，其他往来款项是没有税的。</a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                        </div>
                        <!--股权设立-->
                        <div class="main_a fr">
                            <div class="main_aa bor-p">
                                <h4 class="color-e title-d height-d">合伙开公司股权比例如何分配？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>这个问题由股东协商对公司进行估值，比如估值100万，出10万就占10%，如果估值50万出资10万就占20%；</a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                            <div class="main_aa min-j">
                                <h4 class="color-e title-d height-d">请问几个人合伙开公司怎么分股？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>你们可以在一起好好商量商量！技术员懂技术，一切由他管理，可以分2股；投资最多的人只投钱什么都不管，可以分3股；其余的人都参与，平均分5股！！！ </a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                        </div>
                        <!--收购并购-->
                        <div class="main_a fr">
                            <div class="main_aa bor-p">
                                <h4 class="color-e title-d height-d">公司收购需要注意的风险有哪些？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>一、资本、资产方面的风险：注册资本问题。 二、财务会计制度方面的风险 三、税务方面的风险 </a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                            <div class="main_aa min-j">
                                <h4 class="color-e title-d height-d">非上市企业如何进行估值_非上市企业的估值怎么做？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>相对估值法、收益估值法、资产基础法、期权定价法</a> 
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                           
                        </div>
                        <!--新三板-->
                        <div class="main_a fr">
                            <div class="main_aa bor-p">
                                <h4 class="color-e title-d height-d">新三板挂牌企业要注意的财务问题是什么？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>一、会计政策适用问题。二、会计基础重视问题。三、内部控制提升问题。四、企业盈利规划问题五、资本负债结构问题。六、税收方案筹划问题。七、关联交易处理问题。</a>
                                <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                            <div class="main_aa min-j">
                                <h4 class="color-e title-d height-d">新三板挂牌对公司财务有什么要求？</h4>
                                <a class="linp title-a height-j"><span class="bac-c fl"></span>新三板对准备挂牌上市的企业，在准入条件上是不设财务门槛的，只要企业股权结构清晰、经营合法规范、公司治理健全、业务明确并履行信息披露义务、就算公司还未盈利，都可以申请在新三板挂牌上市。</a>
                                 <a href="<?php echo U('AskAnswer/Asks');?>" style="display:block;float:right; width:50px;color:white;background:#0098b3;text-align:center;border-radius:3px;">更多</a>
                            </div>
                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--热点问题-->
                <div class="threea">
                    <div class="one-yi bor-d">
                        <a href="<?php echo U('AskAnswer/Asks');?>"><h3 class="title-b color-e wid fl one-san one-yic">热点问题</h3></a>
                        <img src="/Public/app/img/laba.png" class="img1 fl"/>
                        <div id="ctn">
                            <p><div class="con fl"><div class="fk bac-c fl"></div>企业经营分析与问题解决</div></p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="area">
                        <div class="inua bac-d color-d">我要提问</div>
                        <form action="">
                            <textarea name="text" id="textArea" maxlength="140" onkeyUp="textLimitCheck(this, 30);"></textarea>
                            <font class="uij" color=#666666>限 30 个字符  已输入 <font color="#CC0000"><span id="messageCount">0</span></font> 个字</font>
                            <a><input class="wid" type="button" value="提交问题" id="submit"></a>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--约见专家-->
             <div class="official-two bac-b bor-e">
                <div class="one-yi bor-d">
                    <a href="<?php echo U('Teacher/teacherList');?>"><h3 class="title-b color-b wid fl one-san one-yih">约见专家</h3></a>
                    <div class="clearfix"></div>
                </div>
                <div class="two-yi scroll">
                    <ul class="yi-ain">
                        <?php if(is_array($aa)): $i = 0; $__LIST__ = $aa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa): $mod = ($i % 2 );++$i;?><li>
                            <?php if(is_array($voa)): $i = 0; $__LIST__ = $voa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><div class="ain-a bor-k fl min-d">
                                    <div class="ain-yi fl">
                                        <a href="<?php echo U('Teacher/teacherIntroduce');?>?id=<?php echo ($vv["id"]); ?>"><img  style="whdth:100%;height:100%;" src="<?php echo ($vv["timg"]); ?>" class="img1"/></a>
                                        <!--<div class="img2 title-d color-d">相信我，会给你不一样的财务服务体验！</div>-->
                                    </div>
                                    <a href="<?php echo U('Teacher/teacherIntroduce');?>?id=<?php echo ($vv["id"]); ?>" class="ain-er fl title-a height-e color-a">
                                        <h3 class="color-b title-e height-d">扁鹊首席财务健康顾问：<?php echo ($vv["name"]); ?></h3>
                                        <?php echo ($vv["explain"]); ?>
                                    </a>
                                    <!--<button class="bac-c color-d title-a sevenabv"  type="button" style="margin-left: 185px; border-radius: 5px; margin-top: 15px">预约专家</button>-->
                                    <input type="hidden" name="hid" value="<?php echo ($voa["id"]); ?>">
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?> 
                        
                    </ul>
                    
                </div>
                     <a class="prev"><img src="/Public/app/img/zdian.png" border="0"></a>
                     <a class="next"><img src="/Public/app/img/ydian.png" border="0"></a>
            </div>
          	
            <!--财税咨询-->
            <div class="official-five bac-b bor-e">
                <div class="one-yi bor-i">
                    <a href="<?php echo U('Article/message');?>"><h3 class="title-b color-b wid fl one-yih min-i">新政速递</h3></a>
                    <div class="clearfix"></div>
                </div>
                <div class="five-one">
                    <div class="five-one-a">
                        <div class="one-a fl">
                            <div class="one-aa fl">
                                <img src="/Public/app/img/one-aa_03.png"/>
                            </div>
                            <div class="one-ab fl min-o">
                                <div class="min-n"><div class="fl title-d wid"><a id="kina" class="color-q">动态</a><a id="cina" class="color-n bor-b">法规</a></div><img src="/Public/app/img/one-ab.png" class="fr"/></div>
                                <div class="clearfix"></div>
                                <div id="kin">
                                    <?php if(is_array($re)): foreach($re as $key=>$vo): ?><div class="one-ab-a height-e"><span class="fl yiunp"></span><p class="fl title-a"><a class="color-a" href="<?php echo U('Article/article');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></p></div>
                                        <div class="clearfix"></div><?php endforeach; endif; ?>
                                </div>
                                <!--<a class="official-ya fr cursor official-yo title-d">更多></a>-->
                                <div id="cin" class="hei">
                                    <?php if(is_array($resu)): foreach($resu as $key=>$vo1): ?><div class="one-ab-a height-e"><span class="fl yiunp"></span><p class="fl title-a"><a class="color-a" href="<?php echo U('Article/article');?>?id=<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["title"]); ?></a></p></div>
                                        <div class="clearfix"></div><?php endforeach; endif; ?>
                                </div>
                                <!--<a class="official-yb fr cursor official-yo title-d">更多></a>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="one-b">
                            <div class="one-ac fl">
                                <h4 class="height-j title-d">热点点评</h4>
                                <a href="http://mp.weixin.qq.com/s?__biz=MzI2OTQ5MzcwOQ==&mid=2247483815&idx=1&sn=3fccac490c66c3e91e2baab9dddc1812&chksm=eade3505dda9bc136f5238eafb820397d0849c129730ad2c0fec7d647d4c47cddea15cb13c43&scene=4#wechat_redirect" class="title-a color-a height-j"><p class="fl">【精选】BOSS听：工资结算全面银行化又是什么鬼?</p><img src="/Public/app/img/one-ac.png" style="margin-top: 6px;"/></a>
                                <a href="http://mp.weixin.qq.com/s?__biz=MzI2OTQ5MzcwOQ==&mid=2247483800&idx=1&sn=aee3dbb15158437cb4a0d521d896aa0c&chksm=eade353adda9bc2c472848b859a168d88f5a8a54ece4a12fdbc96e403c6274508dcea01a0c5d&scene=4#wechat_redirec" class="title-a color-a height-j"><p class="fl">【精选】BOSS听：税收居民证明有啥用?朱宝珠</p><img src="/Public/app/img/one-ac.png" style="margin-top: 7px;"/></a>
                                <a href="http://mp.weixin.qq.com/s/2seYvgm_CUjxWJim0AheSw" class="title-a color-a height-j"><p class="fl">【原创】只收15%企业所得税，这些最新优惠政策你知道吗？</p><img src="/Public/app/img/one-ac.png" style="margin-top: 8px;"/></a>
                                <a href="http://mp.weixin.qq.com/s?__biz=MzI2OTQ5MzcwOQ==&mid=2247483771&idx=2&sn=b38a3bd4806083a96462afb2532121c5&chksm=eade35d9dda9bccfc15bb9165680e4d61e6d3962052c398d6c9823b50700cf2d5ad42d001471&scene=4#wechat_redirect" class="title-a color-a height-j"><p class="fl">【精选】BOSS听：女助理侵吞8000万，漏洞在这</p><img src="/Public/app/img/one-ac.png" style="margin-top: 9px;"/></a>
                                <!--<a class="title-a fr aar">查看更多</a>-->
                            </div>
                            <div class="one-ab fl min-o">
                                <div class="min-n"><div class="fl title-d wid"><a id="kna" class="color-q">案例</a><a id="cna" class="color-n bor-b">干货</a></div><img src="/Public/app/img/one-abc.png" class="fr"/></div>
                                <div class="clearfix"></div>
                                <div id="kins">
                                    <?php if(is_array($resul)): foreach($resul as $key=>$vo2): ?><div class="one-ab-a height-e"><span class="fl yiunp"></span><p class="fl title-a"><a class="color-a" href="<?php echo U('Article/article');?>?id=<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["title"]); ?></a></p></div>
                                        <div class="clearfix"></div><?php endforeach; endif; ?>
                                </div>
                                <!--<a class="official-yc fr cursor official-yo title-d">更多></a>-->
                                <div id="cins" class="hei">
                                    <?php if(is_array($res)): foreach($res as $key=>$vo3): ?><div class="one-ab-a height-e"><span class="fl yiunp"></span><p class="fl title-a"><a class="color-a" href="<?php echo U('Article/article');?>?id=<?php echo ($vo3["id"]); ?>"><?php echo ($vo3["title"]); ?></a></p></div>
                                        <div class="clearfix"></div><?php endforeach; endif; ?>
                                </div>
                                <!--<a class="official-yd fr cursor official-yo title-d">更多></a>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="five-one-c fr">
                        <div class="one-c-a bac-a color-d title-a">享受扁鹊服务</div>
                        <div class="one-c-b">
                            <p style="font-size: 12px;">请选择以下服务类型</p>
                            <div class="one-c-b-a one-aj fl" id="a"><img src="/Public/app/img/one-c-b-a.png" class="fl"/><a href="<?php echo U('Index/kce');?>"><div class="fl title-a color-a newClass">我要学</div></a></div>
                            <div class="one-c-b-a one-bj fl" id="b"><img src="/Public/app/img/one-c-b-a.png" class="fl"/><a href="<?php echo U('AskAnswer/Asks');?>"><div class="fl title-a color-a newClass">我要问</div></a></div>
                            <div class="one-c-b-a one-cj fl" id="c"><img src="/Public/app/img/one-c-b-a.png" class="fl"/><a href="<?php echo U('Videodiagnostic/Video_diagnostic');?>"><div class="fl title-a color-a newClass">我要诊</div></a></div>
                            <div class="one-c-b-a one-dj fl" id="d"><img src="/Public/app/img/one-c-b-a.png" class="fl"/><a href="<?php echo U('Teacher/teacherList');?>"><div class="fl title-a color-a newClass">我要约</div></a></div>
                            
                        </div>
                        <img src="/Public/app/img/iunj_03.png" style="margin-top: 5px;"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
          
        </div>
        <!--合作企业 c02003-->
        <div class="official-seven bac-b bor-e">
            <img src="/Public/app/img/hz.png" class="mioj"/>
            <ul class="one bor-m">
                <li class="bor-m fl"><img src="/Public/app/img/logo01.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo02.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo03.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo04.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo05.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo06.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo07.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo08.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo09.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo10.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo11.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo12.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo13.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo14.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo15.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo16.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo17.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo18.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo19.png"/></li>
                <li class="bor-m fl"><img src="/Public/app/img/logo20.png"/></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!--底部 c02003-->
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

    </div>
</body>
<script>


        var w=967;
        var l=0;
        var timer=null;
        var len=$(".yi-ain li").length*2;
        $(".yi-ain").append($(".yi-ain").html()).css({'width':len*w, 'left': -len*w/2});
        function init(){
            $(".scroll .next").trigger('click');
        }
        $(".yi-ain li").hover(function(){
            clearInterval(timer);
        },function(){
            timer=setInterval(init,8000);
        });
        $(".prev").click(function(){
            l=parseInt($(".yi-ain").css("left"))+w;
            showCurrent(l);
        });
        $(".next").click(function(){
            l=parseInt($(".yi-ain").css("left"))-w;
            showCurrent(l);
        });
        function showCurrent(l){
            if($(".yi-ain").is(':animated')){
                return;
            }
            $(".yi-ain").animate({"left":l},500,function(){
                if(l==0){
                    $(".yi-ain").css("left",-len*w/2);
                }else if(l==(1-len)*w){
                    $(".yi-ain").css('left',(1-len/2)*w);
                }
            });
        };

//        白问百答
            $(".abouta ul a").eq(0).find("li").css({"color":"#666666","background-color":"white"})
            $(".abouta ul a li").hover(function () {
                var Oindex=$(this).parent().index();
                $(".abouta ul a li").css({"color":"#666666","background":""});
                $(this).css({"color":"black","background":"white"});

                $(".main_a").css("display","none");
                $(".main_a").eq(Oindex-2).css("display","block");

            });
//

//
    $("#kina").click(function () {
        $('#kina').css('color','#000000');
        $("#kin").css('display','block');
        $('#cin').css('display','none');
        $('#cina').css('color','#cccccc');
        $('.official-ya').css('display','block');
        $('.official-yb').css('display','none');
    });
    $("#cina").click(function () {
        $('#cina').css('color','#000000');
        $("#cin").css('display','block');
        $('#kin').css('display','none');
        $('#kina').css('color','#cccccc');
        $('.official-ya').css('display','none');
        $('.official-yb').css('display','block');
    });
        $("#kna").click(function () {
        $('#kna').css('color','#000000');
        $("#kins").css('display','block');
        $('#cins').css('display','none');
        $('#cna').css('color','#cccccc');
        $('.official-yc').css('display','block');
        $('.official-yd').css('display','none');
    });
    $("#cna").click(function () {
        $('#cna').css('color','#000000');
        $("#cins").css('display','block');
        $('#kins').css('display','none');
        $('#kna').css('color','#cccccc');
        $('.official-yc').css('display','none');
        $('.official-yd').css('display','block');
    });
//





    $(function () {
        $tds = $(".next");
        $tds.mouseenter(function () {
            //说明:
            $("img", $(this)).attr("src", "/Public/app/img/zdiana.png");
            $("img", $(this).siblings("td")).attr("src", "/Public/app/img/zdiana.png");
        });
            });
    $(function () {
        $tds = $(".next");
        $tds.mouseleave(function () {
            //说明:
            $("img", $(this)).attr("src", "/Public/app/img/ydian.png");
            $("img", $(this).siblings("td")).attr("src", "/Public/app/img/ydian.png");
        });
            });
    $(function () {
        $tds = $(".prev");
        $tds.mouseenter(function () {
            //说明:
            $("img", $(this)).attr("src", "/Public/app/img/zdianb.png");
            $("img", $(this).siblings("td")).attr("src", "/Public/app/img/zdianb.png");
        });
            });
    $(function () {
        $tds = $(".prev");
        $tds.mouseleave(function () {
            //说明:
            //$("img", $(this))表示当前td下的img元素
            //$("img", $(this).siblings("td")) 表示当前td的所有兄弟元素(并且要求是td)下的img元素
            $("img", $(this)).attr("src", "/Public/app/img/zdian.png");
            $("img", $(this).siblings("td")).attr("src", "/Public/app/img/zdian.png");
        });
    });


    window.onload=function(){
        var Oimg=document.getElementById("Oimg");
        var Ocricle=document.getElementById("cricle").getElementsByTagName("li");
        var timer=setInterval(start,2000);
        Ocricle[0].style.background="#f63";
        var index=0;
        function start(){
            index++;
            if (index==3) {
                index=0;

            }
            Oimg.src="/Public/app/img/banner"+index+".png";

            if(index==1){
                Oimg.src="/Public/app/img/banner"+1+".png";
                Oimg.parentNode.href="<?php echo U('Kecheng/finance');?>";
            }
            if(index==2){
                Oimg.src="/Public/app/img/banner"+2+".png";
                Oimg.parentNode.href="<?php echo U('Kecheng/finance');?>";
            }
            Ocricle.background="white";
            resetLiBg();
            Ocricle[index].style.background="#f63";
        }
        function resetLiBg(){
            for (var i=0;i<Ocricle.length;i++) {
                Ocricle[i].style.background="white";
            }
        }
    };
    //导航栏 c02003

//        $(".sublist").eq(0).css("display","block");
//        $("#fadetab li").eq(0).css({"background-color":"rgb(201, 234, 240)"});
        $("#fadetab li").hover(function () {
            $(this).css({"background-color":"rgb(201, 234, 240)"});
            $(this).siblings().css({"background":""});

            // alert($(this).index());
            $(".sublist").eq($(this).index()).css("display","block").siblings().css("display","none");
        })
    //轮播图1.0 c02003
    $(".af4").slide({
        affect:1,
        time:3000,
        speed:400,
        dot_text:false
    });
    //选择卡1.0 c02003
    $("#fadetab").tabso({

        cntSelect:"#fadecon",

        tabEvent:"mouseover",

        tabStyle:"fade"

    });
    //点击1.0 c02003
        var oUl=document.getElementsByClassName('about')[0];
        var aBtn=oUl.getElementsByTagName("li");
        var aBox=document.getElementsByClassName('main_a');
        //找到对应的div
        for(var i=0;i<aBtn.length;i++){
            //为每个标签标记编号
            aBtn[i].index=i;
            aBtn[i].onmouseover=function(){
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
    //问题 c02003
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
                var $con = $('<div class="con fl win"><div class="fk bac-c fl"></div>' + $val + '</div>');
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
                date.setTime(key.substring(4)-0);
                var $con = $('<div class="con fl"><div class="fk bac-c fl"></div>' +$coo[key] + '</div>');
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
    });
    //换 c02003
    $('#textArea').click(function () {
        $('#submit').css("background","#8c97cb")
    });
    var $imgs;
    var $tds;

    //字限制 c02003
    function textLimitCheck(thisArea, maxLength){
        if (thisArea.value.length > maxLength){
            alert(maxLength + ' 个字限制. \r超出的将自动去除.');
            thisArea.value = thisArea.value.substring(0, 30);
            thisArea.focus();    }    /*回写span的值，当前填写文字的数量*/
        messageCount.innerText = thisArea.value.length;
    }
    //点击 c02003


    //登录 注册 密码找回 c02003
    jQuery(document).ready(function($) {
        $('#theme-a').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('#login-a').slideDown(200);
        });
        $('#theme-b').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('#login-b').slideDown(200);
        });
        $('#theme-a1').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('#login-a').slideDown(200);
        });
        $('#theme-b1').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('#login-b').slideDown(200);
        });
        $('#theme-c').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('#login-c').slideDown(200);
            $('#login-a').slideUp(200);
        });
        $(".sevenabv").click(function () {
            var id = $(this).siblings('input').val();
            $("input[name='hidd']").val(id);
            $("#login-f").slideDown(200);
            $('.theme-popover-mask').fadeIn(100);
        });
        $('.theme-popover .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('#login-a').slideUp(200);
            $('#login-b').slideUp(200);
            $('#login-c').slideUp(200);
            $('#login-d').slideUp(200);
            $('#login-e').slideUp(200);
            $('#login-f').slideUp(200);
            $('#login-p').slideUp(200);
            $('#login-i').slideUp(200);
        })
    });
    $("#one").click(function () {
        $("#one-a").text("远程视频诊断");
        $("#login-d").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $("#two").click(function () {
        $("#one-a").text("面试财务经理");
        $("#login-d").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $("#three").click(function () {
        $("#one-a").text("我要审核合同");
        $("#login-d").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $("#four").click(function () {
        $("#one-a").text("我要审核合同");
        $("#login-d").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $("#five").click(function () {
        $("#one-a").text("财务猎头");
        $("#login-d").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $(".six").click(function () {
        $("#login-e").slideDown(200);
        $('.theme-popover-mask').fadeIn(100);
    });
    $(".one-aj").click(function () {
        $("#a").css('background','#0098b3');
        $("#b").css('background','#eeeeee');
        $("#c").css('background','#eeeeee');
        $("#d").css('background','#eeeeee');
        $("#a div").css('color','#ffffff');
        $("#b div").css('color','#999999');
        $("#c div").css('color','#999999');
        $("#d div").css('color','#999999');
        $(".one-ej").click(function () {
            $("#one-a").text("房地产");
            $("#login-d").slideDown(200);
            $('.theme-popover-mask').fadeIn(100);
        })
    });
    $(".one-bj").click(function () {
        $("#a").css('background','#eeeeee');
        $("#b").css('background','#0098b3');
        $("#c").css('background','#eeeeee');
        $("#d").css('background','#eeeeee');
        $("#a div").css('color','#999999');
        $("#b div").css('color','#ffffff');
        $("#c div").css('color','#999999');
        $("#d div").css('color','#999999');
        $(".one-ej").click(function () {
            $("#one-a").text("医疗卫生");
            $("#login-d").slideDown(200);
            $('.theme-popover-mask').fadeIn(100);
        });
    });
    $(".one-cj").click(function () {
        $("#a").css('background','#eeeeee');
        $("#b").css('background','#eeeeee');
        $("#c").css('background','#0098b3');
        $("#d").css('background','#eeeeee');
        $("#a div").css('color','#999999');
        $("#b div").css('color','#999999');
        $("#c div").css('color','#ffffff');
        $("#d div").css('color','#999999');
        $(".one-ej").click(function () {
            $("#one-a").text("营改增");
            $("#login-d").slideDown(200);
            $('.theme-popover-mask').fadeIn(100);
        })
    });
    $(".one-dj").click(function () {
        $("#a").css('background','#eeeeee');
        $("#b").css('background','#eeeeee');
        $("#c").css('background','#eeeeee');
        $("#d").css('background','#0098b3');
        $("#a div").css('color','#999999');
        $("#b div").css('color','#999999');
        $("#c div").css('color','#999999');
        $("#d div").css('color','#ffffff');
        $(".one-ej").click(function () {
            $("#one-a").text("财务管理");
            $("#login-d").slideDown(200);
            $('.theme-popover-mask').fadeIn(100);
        })
    });

    $("#xxdk1").bind('click',function(){
        var id = $("input[name='id']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/xxdks');?>",
            data:{'id':id},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    window.location.href="<?php echo U('Kecheng/boss');?>?ctid=<?php echo ($rea[0]['id']); ?>";
                }
            }
        })
    })

    $("#xxdk2").bind('click',function(){
        var id = $("input[name='id1']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/xxdks');?>",
            data:{'id':id},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    window.location.href="<?php echo U('Kecheng/finance');?>?ctid=<?php echo ($rea[1]['id']); ?>";
                }
            }
        })
    })

    $("#xxdk3").bind('click',function(){
        var id = $("input[name='id2']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/xxdks');?>",
            data:{'id':id},
            success:function(data){
                var row = eval("("+data+")");
                if(row){
                    window.location.href="<?php echo U('Kecheng/finance');?>?id="+id;
                }
            }
        })
    })

    $("#min-f").bind('click',function(){
        var id = $("input[name='hidd']").val();
        var name = $("input[name='name']").val();
        var phone = $("input[name='phone']").val();
        var position = $("input[name='position']").val();
        $.ajax({
            type:"post",
            url:"<?php echo U('Index/yyzj');?>",
            data:{'id':id,'name':name,'phone':phone,'position':position},
            success:function (data) {
                var row = eval("("+data+")");
                if(row){
                    $("#login-f").css("display","none");
                    $(".theme-popover-mask").css("display","none");
                }
            }
        })
    })



//     $(function(){
//         $("input[name='Phone']").focus(function(){
//             $(this).next("span").remove();
//             $("input[name='Phone']").attr("placeholder","请输入手机号");
//         }).blur(function(){
//             ab = $(this);
//             var s = ab.val();
//             if(s == ""){
//                 $("input[name='Phone']").attr("placeholder","手机号不能为空");
//                 return false;
//             }else if(s.match(/^1[0-9]{10}$/) == null){
//                 $("input[name='Phone']").val("").attr("placeholder","请填写合法的手机号码");
//                 return false;
//             }else{
//                 $.get("<?php echo U('Index/check_phone');?>",{Phone:s},function(data){
//                     var data = eval("("+data+")");
//                     if(data.error == false){
//                         ab.next("span").remove();
//                         $("input[name='Phone']").val("").attr("placeholder","手机号已注册过");
//                         alert(data.msg);
//                         return false;
//                     }else{
//                         ab.next("span").remove();
//                         $("<span>√</span>").css("color","#00A0E9").insertAfter(ab);
//                         return true;
// //                        $("<span>√</span>").css("color","#00A0E9").insertAfter(ab);
//                     }
//                 },"html")
//             }
//         })
//     })



    //短信验证定时器
//     var new_time = 60;
//     function dingshiqi(new_time){
//         var a = setInterval(function(){
//             new_time = new_time -1;
//             if(new_time == 0){
//                 window.clearInterval(a);
//                 new_time = 60;
//                 $("#fgot_code").hide();
//                 $("#fbtn").show();
//             }
//             $("#fsecond").html(new_time);
//         },1000);
//     }
//     function get_fcode(dom) {
//         var Phone = $("input[name='Phone']").val();
//         if (Phone == '' || Phone.match(/^1[0-9]{10}$/) == null) {
//             $("input[name='Phone']").val("").attr("placeholder", "请输入合法的手机号码");
//             return false;
//         }
//         $.ajax({
//             type:"post",
//             url:"<?php echo U('Code/fpwd');?>",
//             data:{"Phone":Phone},
//             success:function(data){
//                 var data = eval("("+data+")");
//                 if(data.error==false){
//                     return false;
//                 }else{
//                     dingshiqi(new_time);
//                     $("#fgot_code").show();
//                     $("#fbtn").hide();
//                 }
//             }
//         })
//     }
//     $("input[name='regis']").bind('click',function(){
//         var Phone = $("input[name='Phone']").val();
//         var yanzheng = $("input[name='yanzheng']").val();
//         var password = $("input[name='password']").val();
//         if(Phone == '' && yanzheng == '' && password == ''){
//             $("input[name='Phone']").val("").attr("placeholder", "手机号不能为空");
//             $("input[name='yanzheng']").val("").attr("placeholder", "验证码不能为空");
//             $("input[name='password']").val("").attr("placeholder", "密码不能为空");
//             return false;
//         }
//         $.ajax({
//             type:"post",
//             url:"<?php echo U('Index/check');?>",
//             data:{'Phone':Phone,'yanzheng':yanzheng,'password':password},
//             success:function(data){
//                 var data = eval("("+data+")");
//                 if(data.error == 2){
// //                    window.location.href = "<?php echo U('Index/index');?>";
//                     alert(data.msg);
//                     return false;
//                 }
//                 if(!(data.error == 2)){
//                     alert("注册成功，您可以去个人中心完善个人信息");
//                     window.location.href="<?php echo U('Index/index');?>";
//                 }
//             }
//         })
//     })

//     $(".searchsub").bind('click',function(){
//         var name = $("input[name='names']").val();
//         var pwd = $("input[name='pwds']").val();

//         if(name == '' || pwd == ''){
//             $("input[name='names']").attr("placeholder","请输入账号");
//             $("input[name='pwds']").attr("placeholder","请输入密码");
//             return false;
//         }
// //        $("#form1").submit(function(){
// //            return false;
// //        })
//         $.ajax({
//             type:"post",
//             dataType:'json',
//             url:"<?php echo U('Index/login');?>",
//             data:{'Phone':name,'password':pwd},
//             success:function(data){
//                 var row = eval(data);
//                 if(row){
//                     window.location.href = "<?php echo U('Index/index');?>";
//                     alert("登录成功");
//                 }
//             }
//         });
//     })
	
	


</script>
</html>