<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请借款 - 滴滴块贷</title>
    <meta name="keywords" content="滴滴快贷，申请借款，借款">
    <meta name="description" content="滴滴快贷申请借款。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/20151123New.css"/>
    <script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
</head>
<body class="mhome">
<!-- <header class="dd_header">申请借款</header> -->
    <section class="dd_index">
        <div class="dd_container">
            <h1>您计划借多少钱？</h1>
            <div class="dd_jk">
                <span class="fa fa-minus" id="money_minus"></span>
                <span class="show_money" id="show_money"><strong>500</strong><i>元</i></span>
                <span class="fa fa-plus" id="money_plus" style="color: #ff4201;"></span>
            </div>
            <div class="dd_rang" >
                <!--<span class="dd_duan dd_d1"></span>-->
                <!--<span class="dd_duan dd_d2"></span>-->
                <!--<span class="dd_duan dd_d3"></span>-->
                <span class="dd_moved" id="money_moved"></span>
                <span class="dd_move" id="money_move"></span>
            </div>
        </div>

    </section>
    <script>
        var range_width=parseInt($(".dd_rang").width());  //滑动条的长度
        var bili=Math.round(range_width/45);
        //var bili=accDiv(range_width-15,45);   //每100元滑动的长度
        var newWith=bili*45;
        $(".dd_rang").css({width:newWith});
    </script>

    <section class="dd_index">
            <div class="dd_container">
                <h1 style="padding-top: 10px;">您计划借多久？</h1>
                <div class="dd_jk">
                    <span class="fa fa-minus" id="month_minus"></span>
                    <span class="show_money" id="show_month"><strong>1</strong><i>个月</i></span>
                    <span class="fa fa-plus" id="month_plus" style="color: #ff4201;"></span>
                </div>
                <div class="dd_rang" style="margin-bottom: 20px">
                    <!--<span class="dd_duan dd_d1"></span>-->
                    <!--<span class="dd_duan dd_d2"></span>-->
                    <!--<span class="dd_duan dd_d3"></span>-->
                    <span class="dd_moved" id="month_moved"></span>
                    <span class="dd_move" id="month_move"></span>
                </div>
             </div>
    </section>
    <section class="dd_index">
            <p class="dd_text">
                从您借款到账日开始计算，30天后开始还款，每期（月）还款<i id="money_num">550</i>元，共 <i id="month_num">1</i>期
            </p>
    </section>
<div class="bb_next"><a href="/Mob/index.php/Index/login">下一步</a></div>

<script src="/Public/Mob/js/toucher.js"></script>
<script src="/Public/Mob/js/dd_index.js"></script>
<script src="/Public/Mob/js/yunsuan.js"></script>
</body>
</html>