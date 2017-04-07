<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>忘记密码</title>
    <link rel="stylesheet" href="/Public/app/css/personal.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/app/js/hdw.js"></script>
</head>
<body>
<div class="personal-login">
    <form name="form">
        <div class="login-heah">
            <img src="/Public/app/img/login-heah.png" class="img1 fl"/>
            <input id="tel" class="login-heah-a fl" type="text" name="user" value="请输入手机号" autocomplete="off" onfocus="if (value =='请输入手机号'){value =''}" onblur="if (value ==''){value='请输入手机号'}">
        </div>
        <div class="login-heah">
            <img src="/Public/app/img/login-key.png" class="img1 fl"/>
            <input class="login-heah-a fl" type="text" name="user" value="请输入验证码" autocomplete="off" onfocus="if (value =='请输入验证码'){value =''}" onblur="if (value ==''){value='请输入验证码'}">
            <a class="heah-slip sizea colod">发送验证码</a>
        </div>
        <div class="login-heah">
            <img src="/Public/app/img/login-password.png" class="img1 fl"/>
            <input id="password" type="password" name="pwd" class="login-heah-a fl" placeholder="请输入新密码" autocomplete="off" onfocus="if (value =='请输入密码'){value =''}" onblur="if (value ==''){value='请输入密码'}">
        </div>
        <div class="login-heah">
            <img src="/Public/app/img/login-password.png" class="img1 fl"/>
            <input id="passwords" type="password" name="pwd" class="login-heah-a fl" placeholder="请再次输入新密码" autocomplete="off" onfocus="if (value =='请再次输入密码'){value =''}" onblur="if (value ==''){value='请再次输入密码'}">
        </div>
        <div class="login coloc" id="send">确认重置<input type="button" value=""></div>
    </form>
</div>
</body>
</html>