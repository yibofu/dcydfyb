<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <title>OO交友 -- 用户详情</title>
    <link rel="stylesheet" href="/Public/app/css/userdetail.css" media="all"/>
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
                        <span class="userIcon"></span><?php echo ($nickname); ?>，你好!
                    </li>
                    <li class="setting">
                        <a href="<?php echo U('User/man');?>"><img src="/Public/app/img/setting.png" alt="" title="设置"/></a>

                    </li>
                    <li class="message">
                        <a href="<?php echo U('User/man');?>"><img src="/Public/app/img/message.png" alt="" title="消息"/></a>

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
                <span><img src="/Public/app/img/detail.png" alt=""/>用户详情</span>
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
                <div class="fl panelImg">
                    <div class="userImg">
                        <span class="imgbox">
							<?php if($result["img_status"] == 1): ?><img src="<?php echo ($result["img_url"]); ?>" alt=""/>
							<?php else: ?>
							<img src="<?php echo ($result["img_url"]); ?>" alt=""/><?php endif; ?>	
                        </span>
                        <h4><?php echo ($result["nickname"]); ?>~</h4>
                    </div>
                    <div class="ID">
                        <h5>&nbsp;ID:<?php echo ($result["id"]); ?></h5>
                        <p>"<?php echo ($result["show"]); ?>"</p>
                    </div>
                </div>
                <div class="fl panelInfo">
                    <ul>
                        <li>性别 <em>女</em></li>
                        <li>城市<em><?php echo ($result["city"]); ?></em></li>
                        <li>学校<em><?php echo ($result["school"]); ?></em></li>
                        <li>职业<em><?php echo ($result["job"]); ?></em></li>
                        <li>星座<em><?php echo ($result["constellation"]); ?></em></li>
                    </ul>
                </div>
                <div class="fl action">
                    <div class="dashang">
                        <span class="dsIcon"></span>
                        <span class="dstext">打赏</span>
                    </div>
                    <div class="liaoliao">
                        <span class="dsIcon "></span>
                        <span class="dstext">聊聊</span>
                    </div>
                    <div class="collect">
                        <span class="dsIcon <?php echo ($add_class); ?>"></span>
                        <span class="dstext">收藏</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<input type="hidden" name="user_id" id="user_id" value="<?php echo ($result["id"]); ?>" />
	<input type="hidden" name="is_consume" id="is_consume" value="<?php echo ($is_consume); ?>" />
	<input type="hidden" name="chat_id" id="chat_id" value="<?php echo ($chat_id); ?>" />
	<input type="hidden" name="img_url" id="img_url" value="<?php echo ($img_url); ?>" />
</section>
<section class="shadow" id="dsshadow" style="display: none;">
    <div class="dialog">
        <div class="dialog-header">打赏 <span class="dialog-close"><img src="/Public/app/img/close.png" alt=""/></span></div>
        <div class="dialog-body">
            <div class="momey_box">
                <div class="momey">
                    <div class="momey1">
                        <img src="/Public/app/img/ds1.png" alt=""/><br/>
                        <p>￥10</p>
                        <div class="num">
                            <em>0</em>
                            <span class="reduce">-</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
                <div class="momey">
                    <div class="momey1">
                        <img src="/Public/app/img/ds2.png" alt=""/><br/>
                        <p>￥100</p>
                        <div class="num">
                            <em>0</em>
                            <span class="reduce">-</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
                <div class="momey">
                    <div class="momey1">
                        <img src="/Public/app/img/ds3.png" alt=""/><br/>
                        <p>￥1000</p>
                        <div class="num">
                            <em>0</em>
                            <span class="reduce">-</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totall">
                <span><i>￥</i><b>0</b></span>
            </div>
        </div>
        <div class="charge">付款</div>
    </div>
</section>
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
<footer>
    <div class="container">
        客服电话：400-88888888
    </div>
</footer>
<script src="/Public/app/js/jquery-1.11.3.min.js"></script>
<script src="/Public/app/js/detail.js"></script>
</body>
</html>