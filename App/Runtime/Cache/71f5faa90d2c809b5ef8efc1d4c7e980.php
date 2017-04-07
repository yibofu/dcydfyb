<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <title>OO交友 -- 用户中心</title>
    <link rel="stylesheet" href="/Public/app/css/userdetail.css" media="all"/>
    <link rel="stylesheet" href="/Public/app/css/usercenter_tmp.css" media="all"/>
    <link rel="stylesheet" href="/Public/app/css/jquery.fileupload.css"/>
    <!--[if lt IE9>
    <script src="./js/html5.js"></script>
    <![end if]-->
</head>
<body>
<header id="pageHeader">
    <section class="container" >
        <nav class="oonav">
            <ul>
                <li class="home">
                    <a href="#"><span class="homeIcon"></span>首页</a>
                </li>
                <li class="user">
                    <span class="userIcon"></span><?php echo ($userinfo["nickname"]); ?>，你好!
                </li>
                <li class="setting">
                    <a href="#"><img src="/Public/app/img/setting.png" alt="" title="设置"/></a>

                </li>
                <li class="message">
                    <a href="#"><em class="newmess"></em><img src="/Public/app/img/message.png" alt="" title="消息"/></a>

                </li>
                <li class="quit">
                    <a href="#"><img src="/Public/app/img/quit.png" alt="" title="退出"/></a>
                </li>
            </ul>
        </nav>
    </section>
</header>
<section class="main">
    <div class="container" style="background: #ffffff;">
        <div class="header">
            <div class="fl detailBox">
                <span><img src="/Public/app/img/user.png" alt=""/>个人中心</span>
            </div>
            <div class="fr searchBox">
                <form action="#">
                    <input  class="searchInput" type="search" placeholder="请输入手机号或用户ID"/>
                    <span class="searchbtn"><i></i></span>
                </form>
            </div>
        </div>
        <div class="body">
            <div class="panel">
                <div class="fl panelImg" id="userlist">
                    <ul>
                        <li class="active"><a href="javascript:;">我的资料</a></li>
                        <li><a href="javascript:;">我的收藏</a></li>
                        <li><a href="javascript:;">送礼记录</a></li>
                        <li><a href="javascript:;">我的消息</a></li>
                    </ul>
                </div>
                <section class="part1" style="display: block;">
                    <div class="fl panelInfo">
						<input type="hidden" value="<?php echo ($userinfo["id"]); ?>" id="uid" />
                        <form action="#">
                            <ul>
                                <li><label>昵称</label><span><?php echo ($userinfo["nickname"]); ?></span></li>
                                <li><label>ID号</label><span><?php echo ($userinfo["uid"]); ?></span></li>
                                <li><label>性别</label><span>男</span></li>
                                <li><label>城市</label><span id="userCity"><?php echo ($userinfo["city"]); ?></span>
								<input type="hidden" id="hidden_city" value="<?php echo ($userinfo["city"]); ?>" />
                                    <select id="selProvince" onChange = "getCity(this.options[this.selectedIndex].value)" style="display: none;">
                                        <option value="">-请选择-</option>
                                        <option value="北京市">北京市</option>
                                        <option value="上海市">上海市</option>
                                        <option value="天津市">天津市</option>
                                        <option value="重庆市">重庆市</option>
                                        <option value="河北省">河北省</option>
                                        <option value="山西省">山西省</option>
                                        <option value="内蒙古自治区">内蒙古自治区</option>
                                        <option value="辽宁省">辽宁省</option>
                                        <option value="吉林省">吉林省</option>
                                        <option value="黑龙江省">黑龙江省</option>
                                        <option value="江苏省">江苏省</option>
                                        <option value="浙江省">浙江省</option>
                                        <option value="安徽省">安徽省</option>
                                        <option value="福建省">福建省</option>
                                        <option value="江西省">江西省</option>
                                        <option value="山东省">山东省</option>
                                        <option value="河南省">河南省</option>
                                        <option value="湖北省">湖北省</option>
                                        <option value="湖南省">湖南省</option>
                                        <option value="广东省">广东省</option>
                                        <option value="广西壮族自治区">广西壮族自治区</option>
                                        <option value="海南省">海南省</option>
                                        <option value="四川省">四川省</option>
                                        <option value="贵州省">贵州省</option>
                                        <option value="云南省">云南省</option>
                                        <option value="西藏自治区">西藏自治区</option>
                                        <option value="陕西省">陕西省</option>
                                        <option value="甘肃省">甘肃省</option>
                                        <option value="宁夏回族自治区">宁夏回族自治区</option>
                                        <option value="青海省">青海省</option>
                                        <option value="新疆维吾尔族自治区">新疆维吾尔族自治区</option>
                                        <option value="香港特别行政区">香港特别行政区</option>
                                        <option value="澳门特别行政区">澳门特别行政区</option>
                                        <option value="台湾省">台湾省</option>
                                        <option value="其它">其它</option>
                                    </select>
                                    <select id="selCity"  style="display: none;"><option value="0">-城市-</option></select>
                                </li>
                                <li><label>签名</label>
                                    <input type="text" name="sign" id="sign" value="<?php echo ($userinfo["show"]); ?>" readonly/>
                                </li>
                                <li>
                                    <label>学校</label>
                                    <input type="text" id="school" name="school" value="<?php echo ($userinfo["school"]); ?>" readonly/>
                                </li>
                                <li>
                                    <label>职业</label>
                                    <span id="uprofession" style="margin-left: 10px;"><?php echo ($userinfo["job"]); ?></span>
                                    <select name="profession" id="profession" style="width: 230px; display: none;">
                                        <option value="管理人员" <?php if($userinfo["job"] == 管理人员): ?>selected<?php endif; ?>>管理人员</option>
                                        <option value="一般人员" <?php if($userinfo["job"] == 一般人员): ?>selected<?php endif; ?>>一般人员</option>
                                        <option value="内勤" <?php if($userinfo["job"] == 内勤): ?>selected<?php endif; ?>>内勤</option>
                                        <option value="后勤" <?php if($userinfo["job"] == 后勤): ?>selected<?php endif; ?>>后勤</option>
                                        <option value="工人" <?php if($userinfo["job"] == 工人): ?>selected<?php endif; ?>>工人</option>
                                        <option value="销售/中介/业务代表" <?php if($userinfo["job"] == 销售/中介/业务代表): ?>selected<?php endif; ?>>销售/中介/业务代表</option>
                                        <option value="营业/服务员" <?php if($userinfo["job"] == 营业/服务员): ?>selected<?php endif; ?>>营业/服务员</option>
                                        <option value="个体商户" <?php if($userinfo["job"] == 个体商户): ?>selected<?php endif; ?>>个体商户</option>
                                        <option value="学生" <?php if($userinfo["job"] == 学生): ?>selected<?php endif; ?>>学生</option>
                                        <option value="其他" <?php if($userinfo["job"] == 其他): ?>selected<?php endif; ?>>其他</option>
                                    </select>
                                </li>
                                <li>
                                    <label>星座</label><span id="starzuo"><?php echo ($userinfo["constellation"]); ?></span>
                                    <select name="constellation" id="constellation" style="display: none;">
                                        <option value="白羊座" <?php if($userinfo["constellation"] == 白羊座): ?>selected<?php endif; ?>>白羊座</option>
                                        <option value="金牛座" <?php if($userinfo["constellation"] == 金牛座): ?>selected<?php endif; ?>>金牛座</option>
                                        <option value="双子座" <?php if($userinfo["constellation"] == 双子座): ?>selected<?php endif; ?>>双子座</option>
                                        <option value="巨蟹座" <?php if($userinfo["constellation"] == 巨蟹座): ?>selected<?php endif; ?>>巨蟹座</option>
                                        <option value="狮子座" <?php if($userinfo["constellation"] == 狮子座): ?>selected<?php endif; ?>>狮子座</option>
                                        <option value="处女座" <?php if($userinfo["constellation"] == 处女座): ?>selected<?php endif; ?>>处女座</option>
                                        <option value="天秤座" <?php if($userinfo["constellation"] == 天秤座): ?>selected<?php endif; ?>>天枰座</option>
                                        <option value="天蝎座" <?php if($userinfo["constellation"] == 天蝎座): ?>selected<?php endif; ?>>天蝎座</option>
                                        <option value="射手座" <?php if($userinfo["constellation"] == 射手座): ?>selected<?php endif; ?>>射手座</option>
                                        <option value="摩羯座" <?php if($userinfo["constellation"] == 魔蝎座): ?>selected<?php endif; ?>>魔蝎座</option>
                                        <option value="水瓶座" <?php if($userinfo["constellation"] == 水瓶座): ?>selected<?php endif; ?>>水瓶座</option>
                                        <option value="双鱼座" <?php if($userinfo["constellation"] == 双鱼座): ?>selected<?php endif; ?>>双鱼座</option>
                                    </select>
                                </li>
                            </ul>
                        </form>
                        <div class="editInfo">编辑</div>
                    </div>
                    <div class="fl action">
                        <div class="userimg">
                            <?php if($userinfo["img_status"] == 1): ?><img src="<?php echo ($userinfo["img_url"]); ?>" alt="用户头像" id="hidden_img"/>
							<?php else: ?>
                            <img src="/Public/app/img/zsjj.jpeg" alt="用户头像" id="hidden_img"/><?php endif; ?>
                        </div>
                        <p id="editHeadImg">修改头像</p>
                    </div>
                </section>
                <section class="part2" style="display: none;">
                    <div class="mycollect">我的收藏</div>
                    <div class="collectList" id="collectList">
                        <ul id="collect_content">
							<?php if(is_array($collect_reuslt)): $i = 0; $__LIST__ = $collect_reuslt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="#">
                                    <div class="showprotrait">
                                        <div class="protraitbox">
                                            <img src="<?php echo ($vo["img_url"]); ?>" alt=""/>
                                        </div>
                                        <h4><?php echo ($vo["collect_name"]); ?></h4>
                                    </div>
                                    <div class="imgaction">
                                        <span style="text-align: left; float:left;">打赏</span>
                                        <span style="text-align: right;float: right;">聊聊</span>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
							<input type="hidden" id="collect_pagenum" value="1" />
							<input type="hidden" id="max_collect_pagenum" value="<?php echo ($collect_pagenum); ?>" />
                        </ul>
                    </div>
                    <div id="collectBtn">加载更多</div>
                </section>
                <section class="part3" style="display: none;">
                    <ul class="liwuhistory" id="lwhistory">
						<?php if(is_array($consume_result)): $i = 0; $__LIST__ = $consume_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <p>您给<b><?php echo ($vo["receive_name"]); ?></b>一个<b>￥<?php echo ($vo["money"]); ?></b><?php echo ($vo["gift_name"]); ?><span class="NewImg"><img src="/Public/app/img/New.png" alt=""/></span></p>
                            <span><?php echo ($vo["ctime"]); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
						<input type="hidden" id="consume_pagenum" value="1" />
						<input type="hidden" id="max_consume_pagenum" value="<?php echo ($consume_pagenum); ?>" />
                    </ul>
                    <div class="moreHistory">加载更多</div>
                </section>
                <section class="part4" style="display: none;">
                    <ul  class="messbox" id="talkbox">
						<?php if(is_array($chat_result)): $i = 0; $__LIST__ = $chat_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li onclick="do_talk(<?php echo ($vo["id"]); ?>)">
                            <div class="portrait">
								<?php if($vo["img_status"] == 1): ?><img src="<?php echo ($vo["img_url"]); ?>" alt=""/>
								<?php else: ?>
								<img src="/Public/app/img/zsjj.jpeg" alt=""/><?php endif; ?>
							</div>
                            <div class="messageboard">
                                <h2><?php if($vo["is_admin"] == 1): ?>管理员<?php else: echo ($vo["nickname"]); endif; ?> <?php if($vo["has_new"] == 1): ?><span class="newContent" id="new_content<?php echo ($vo["id"]); ?>">1</span><?php endif; ?></h2>
                                <p class="newtalk"><?php echo ($vo["message"]); ?></p>
                                <p><?php echo ($vo["mtime"]); ?></p>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
							<input type="hidden" id="message_pagenum" value="1" />
						<input type="hidden" id="max_message_pagenum" value="<?php echo ($message_pagenum); ?>" />
                    </ul>
                    <div class="talk" id="moretalk">加载更多</div>
                </section>
            </div>
        </div>
    </div>
</section>
<!--弹出层-->
<section class="shadow" id="uploadshadow" style="display: none;">
    <div class="dialog">
        <div class="dialog-header">上传头像 <span class="dialog-close"><img src="/Public/app/img/close.png" alt=""/></span></div>
        <div class="dialog-body">
           <div class="previewImg"><img src="/Public/app/img/zsj.jpg" alt=""/></div>
            <!--<span class="uploadBtn">本地上传<input type="file" value="本地上传"></span>-->
             <span class="btn fileinput-button uploadBtn">
                 <span>本地上传</span>
				 <form id='formFile' name='formFile' method="post" action="/index.php/User/upload" target='frameFile'
    enctype="multipart/form-data">
                 <input type="file" name="files[]" id="uploadimg">
				 </form>
             </span>
            <p class="imgSize">(仅支持jpg、gif、png格式，文件小于5M)</p>
            <div class="updateText">头像上传请勿上传淫秽、低俗内容、广告内容、政治、伟人、传销等违法、敏感图片作为头像。</div>
        </div>
        <div class="uploaded">完成</div>
    </div>
	 <iframe id='frameFile' name='frameFile' style='display: none;'></iframe>
</section>
<!--留言板-->
<section class="shadow" id="llshadow" style="display: none;">
    <div class="dialog ">
        <div class="dialog-header"> <span class="dialog-close"><img src="/Public/app/img/close.png" alt=""/></span></div>
        <div class="dialog-body" id="msg">
            <div class="date"></div>
            
            
        </div>
        <div class="dialog-footer">
            <form action="#">
                <input type="text" id="sendingtext" name="liaoliao" value="请输入文字"/>
				<input type="hidden" id="hidden_chat_id" />
                <span class="dialog-btn" id="sending">发送</span>
            </form>
        </div>
    </div>
</section>
<!--留言板-->
<script src="/Public/app/js/jquery-1.11.3.min.js"></script>

<script src="/Public/app/js/userCenter.js"></script>
<script src="/Public/app/js/citySelect.js"></script>
<script src="/Public/app/js/moreloading.js"></script>
</body>
</html>