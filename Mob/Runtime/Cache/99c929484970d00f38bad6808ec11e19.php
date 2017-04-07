<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>回填码</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，回填码">
    <meta name="description" content="滴滴快贷回填码。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
    <style>
         input{
             height: 30px;
             line-height: 30px;
             padding-left: 10px;
             font-size: 14px;
            display: block;
            margin: 20px auto;
            width: 80%;
             outline: none;
             border: 1px solid #BDBDBD;
        }
        .dd_yz{
            width: 20%;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background: #ffffff;
            border: 1px solid #BDBDBD;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin: 20px auto;
        }
        .dd_yz a{
            display: block;
            width: 100%;
            color: #BDBDBD;
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">回填码<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>
    <form action="#">
        <input type="text" name="huitianma" placeholder="请输入回填码"/>
    </form>
        <div class="dd_yz"><a href="#">验证</a></div>
</body>
</html>