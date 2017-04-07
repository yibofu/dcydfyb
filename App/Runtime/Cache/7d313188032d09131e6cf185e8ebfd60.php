<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>招募合伙人</title>
    <link rel="stylesheet" href="/Public/app/css/cooperation.css">
    <style>
        .nav .coop .img1{ width: 100%; height: 11.5rem;}
        .nav .coop p{ line-height: 1.8rem; width: 86%; margin: 0 auto;}
        .nav .pa{ width: 93%; padding-left: 7%; height: 3rem; line-height: 3rem;}
        .nav .cooa{ width: 89%; margin: 0 auto;}
        .nav .cooa .cooi{ height:7rem; margin: 1rem 0; border-radius: .8rem;}
        .nav .cooa .cooia{ height:7rem;}
        .nav .cooa .cooi .yina{ width: 20%;padding: 1.2rem 0 1rem 5%;}
        .nav .cooa .cooi .yinb{ width: 70%; margin: 1rem 2% 0 3%}
        .nav .cooa .cooi .yinc{ width: 70%; margin: .6rem 2% 0 3%}
        .nav .cooa .cooi .yind{ width: 20%;padding: 1.6rem 0 1rem 5%;}
        .nav .cooa .cooi .yinb .pf{ margin-top: .6rem;}
        .nav .cooa .cooi .yina .img01{ width: 100%; height: 3.6rem; }
        .nav .imgin{
            width: 65%; height: 2.5rem; background: #00a0e9;border-radius: .8rem;
            border-top: .25rem solid #99d9f6;
            border-left:.25rem solid #3ab6ee;
            border-bottom: .25rem solid #00293c;
            border-right: .2rem solid #00293c;
            margin: 0 auto;
        }
        .nav .imgin .imgh{ width: 16%; height: 2rem; margin: .3rem 4% 0 4%;}
        .nav .imgin .imgr{ width:70%;line-height: 2.5rem; color: #ffffff;text-align: center;}
        .nav .coor{ width: 78%; height: 12.1rem; margin:5.5rem auto 0 auto; border-radius: 1rem; position: relative; box-shadow:0px 0px 12px #cbcbcb;}
        .nav .coor .img03{ width: 40%; height: 8.6rem; margin: 2.4rem 0 0 5%;}
        .nav .coor .img04{ width: 50%; margin-top: 4.2rem;}
        .nav .coor .img05{ width: 35%; height: 6.45rem; position: absolute;  top: -4rem; left: 32%;}
        .nav .coor .img06{ width: 50%; margin-top: 1.6rem;}
        .nav .pt{ text-align: center; line-height: 4.5rem;}
        /*文字*/
        .foa{ font-size:.64rem;}/*18px*/
        .fob{ font-size:.86rem;}/*24px*/
        .foc{ font-size:.72rem;}/*20px*/
        .fod{ font-size:.80rem;}

        .cbo{ color: #b1b1b1;}
        .inp{ color: #999999;}
        .cda{ color: #143452;}

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee;}
        .bug{ background: #ffffff;}
        .buo{ background: #f5f5f5;}
    </style>
</head>
<body>
    <div class="nav bac">
        <div class="coop">
            <img src="/Public/app/img/coo.png" class="img1"/>
            <p class="fob">长财咨询、扁鹊财学院发展实在太快，一年多已经开到第8家分子公司；优波基金更加优秀，2016年第一季度收益率高居全国第二。</p>
        </div>
        <p class="fob pa bug bor">我们还要继续扩张，现全球招募合伙人。</p>
        <div class="cooa">
            <a href="<?php echo U('Cooperation/refer');?>"><div class="cooi buo">
                <div class="fl yina"><img src="/Public/app/img/ring_03.png" class="img01"/></div>
                <div class="fl yinb">
                    <p class="fob pb">财务咨询师与研究员</p>
                    <p class="inp fod pf">具有顶级公司和事务所背景的技术大牛们，来吧！</p>
                </div>
            </div></a>
            <a href="<?php echo U('Cooperation/opp');?>"><div class="cooi buo">
                <div class="fl yina"><img src="/Public/app/img/ring_06.png" class="img01"/></div>
                <div class="fl yinb">
                    <p class="fob pb">opp讲师</p>
                    <p class="inp fod pf">需要热爱分享、热心助人的自恋狂们。</p>
                </div>
            </div></a>
            <a href="<?php echo U('Cooperation/counselor');?>"><div class="cooi buo">
                <div class="fl yina"><img src="/Public/app/img/ring_10.png" class="img01"/></div>
                <div class="fl yinb">
                    <p class="fob pb">大客户经理，投资基金顾问</p>
                    <p class="inp fod pf">自我感觉高大上，眼里从来没有陌生人，跟所有人都很熟，感觉上辈子就有共同语言，那你很适合</p>
                </div>
            </div></a>
            <a href="<?php echo U('Cooperation/reserve');?>"><div class="cooia buo cooi">
                <div class="fl yina yind"><img src="/Public/app/img/ring_08.png" class="img01"/></div>
                <div class="fl yinb yinc">
                    <p class="fob pb">分子公司总经理与储备营销干部</p>
                    <p class="inp fod pf">你要是喜欢带团队成交和刷卡的感觉，无论在北京杭州广州成都太原长沙大连深圳，马上跟我联系！</p>
                </div>
            </div></a>
        </div>
        <div class="imgin">
            <img src="/Public/app/img/dian.png" class="fl imgh"/>
            <p class="foc fl imgr">合作热线：18310629197</p>
        </div>
        <div class="coor bug">
            <img src="/Public/app/img/logo.png" class="img05"/>
            <img src="/Public/app/img/kf.png" class="fl img03"/>
            <p class="foa fl img04">
                北京大财有道科技有限公司
            </p>
            <p class="foa fl img06">
                合作微信:bqcc01
            </p>

        </div>
        <p class="foa pt">地址：北京市朝阳区东三环中路旺座中心东塔1920</p>
    </div>
</body>
</html>