<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .consult{ width: 90%; height: 12rem;background: #b8bcbd; position: relative;top: -26rem; left: 0; display: none; border-radius: .8rem; border: .1rem solid #55afc1; margin: 0 auto;}
        .consult .img{ width: 65%; margin:.6rem auto;}
        .consult .img .x{ width: 6%; height: .8rem; position: relative; top: 0; left:112%;}
        .consult .img .img02{ margin-top: 0.5rem;}
        .consult .img input{ border: .1rem solid #000; padding: .2rem 2%;}
        .consult .img .img03{ width: 30%; margin: 1rem auto;}
        .consult .img .img03 input{ width: 100%; color: #000000;}

    </style>
</head>
<body>
<div id="train" class="consult">
    <div class="img">
        <img id="x" src="/Public/app/img/x.png" class="x"/>
        <div class="img01">姓名：<input type="text" name="name" value="请输入姓名" autocomplete="off" onfocus="if (value =='请输入姓名'){value =''}" onblur="if (value ==''){value='请输入姓名'}"></div>
        <div class="img02">手机：<input type="text" name="phone" value="请输入手机号" autocomplete="off" onfocus="if (value =='请输入手机号'){value =''}" onblur="if (value ==''){value='请输入手机号'}"></div>
        <div class="img03"><input class="jia" type="button" value="提交"></div>
    </div>
</div>
</body>
</html>