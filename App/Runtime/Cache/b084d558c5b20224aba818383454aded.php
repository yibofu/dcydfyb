<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>个人信息</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>

</head>
<body>
<div class="personal">
    <div id="login_content_log_03">
        <div class="personal-centre">
            <div class="centre-heah">
                <div class="heah">
                    <div class="heah-cap">
                        <img src="/Public/app/img/cap.jpg" class="imga"/>
                    </div>
                    <h4 class="heah-name coloc sizeb">name</h4>
                </div>
                    <a href="<?php echo U('Personal/true');?>" class="heah-fonts sizec coloc">请尽快完善您的个人信息 方便我们更好的为您服务<img src="/Public/app/img/heah-fonts.png" class="img1"/></a>
            </div>
            <div class="centre-content">
                <div class="content-heah">
                    <div class="heah-left fl">
                        <div id="triangle-right"></div>
                            <div class="left-a">
                                <img src="/Public/app/img/left-a.png" class="img1"/>
                                <span>1</span>
                            </div>
                    </div>
                        <a href="<?php echo U('Personal/news');?>" class="heah-right sizeb fl">
                            我的消息（<span>1</span>）
                        </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        <div class="centre-select">
            <a href="<?php echo U('Personal/personal');?>" class="select-a fl wire-b">
                <img src="/Public/app/img/select-a.png" class="img1"/>
                <p class="article sizea">个人信息</p>
            </a>
            <a href="<?php echo U('Personal/collect');?>" class="select-a fl wire-a">
                <img src="/Public/app/img/select-b.png" class="img2"/>
                <p class="article sizea">我的收藏（<span>1</span>）</p>
            </a>
            <a href="<?php echo U('Personal/medical');?>" class="select-a fl wire-b">
                <img src="/Public/app/img/select-c.png" class="img3"/>
                <p class="article sizea">我的诊断（<span>1</span>）</p>
            </a>
            <a href="<?php echo U('Personal/quiz');?>" class="select-a fl wire-a">
                <img src="/Public/app/img/select-d.png" class="img4"/>
                <p class="article sizea">我的提问（<span>1</span>）</p>
            </a>
            <a class="select-a fl wire-b">
                <img src="/Public/app/img/select-e.png" class="img5"/>
                <p class="article sizea">我的财务顾问（<span>1</span>）</p>
            </a>
            <a class="select-a fl wire-a">
                <img src="/Public/app/img/select-f.png" class="img6"/>
                <p class="article sizea">升级金鹊会员</p>
            </a>
                <img src="/Public/app/img/select-vip.png" class="imgvip"/>
        </div>
        <p class="select sizea">© 北京大财有道科技有限公司版权所有</p>
        </div>
    </div>
</div>
</body>
</html>