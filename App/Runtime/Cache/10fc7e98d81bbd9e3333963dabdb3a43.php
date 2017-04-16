<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>我的提问</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
</head>
<body>
<div class="main-title">
    <ul class="tab-nav">
        <li class="current sizec lin-b" name="basic"><a class="lin-b">已回答的问题</a></li>
        <li class="sizec lin-b" name="content"><a class="lin-b">待回答的问题</a></li>
    </ul>
    <div class="tab-content basic">
        <div class="tab-content-all piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
            <p class="colod yinc">答案：和规范化个环节已经好久发货的孤独感和体会突然。</p>
        </div>
        <div class="tab-content-all piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
            <p class="colod yinc">答案：和规范化个环节已经好久发货的孤独感和体会突然。</p>
        </div>
        <div class="tab-content-all piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
            <p class="colod yinc">答案：和规范化个环节已经好久发货的孤独感和体会突然。</p>
        </div>
        <!--弹窗-->
        <div id="traina" class="consult-a">
            <div class="trainaa">
                <img src="/Public/app/img/x.png" class="fr" id="x"/>
                <div class="clearfix"></div>
                <p>问题：企业并购重组应该注意什么？</p>
                <p class="colod">答案：和规范化个环节已经好久发货的孤独感和体会突然。</p>
                <p class="coloa traina-g">提问时间：2015-9-15  13：00</p>
            </div>
        </div>
    </div>
    <div class="tab-content content" style="display:none">
        <div class="tab-content-alla piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
        </div>
        <div class="tab-content-alla piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
        </div>
        <div class="tab-content-alla piou">
            <p>问题：企业并购重组应该注意什么？</p>
            <p class="coloa">提问时间：2015-9-15  13：00</p>
        </div>
    </div>
</div>
</body>
<script>
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
    $('.tab-content-all').click(function(){
        $('#traina').slideDown(300);
    })
    $('#x').click(function(){
        $('#traina').fadeOut(200);
        $('#traina').slideUp(300);
    })
</script>
</html>