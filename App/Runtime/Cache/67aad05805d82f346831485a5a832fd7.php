<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>约见谈</title>
    <link rel="stylesheet" href="/Public/app/css/reply.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>
        .head .img1{ width: 100%; height: 10.7rem;}
        .head p{ line-height:.86rem; height: 5.4rem; width: 84%; margin: .68rem auto .53rem auto;}
        .content{ margin-top: 1rem;}
        .content h4{ line-height: 1.6rem; padding-left:7%;}
        .content .nav{ width: 88%; margin: 1.6rem auto;}
        .content .nav .ing1{ width: 100%; height: 11.7rem;}
        .content .pa{ line-height: 2rem; padding-left: 7%;}
        .content .pb{ margin: 1rem 0 4rem 7%; position: relative;}
        .content .pb .ma{ position: absolute; right: 12%; bottom:0; height: 1.5rem; width: 18%; background: #3588e7; border: .04rem solid #1e6fcd; border-radius: .2rem; text-align: center; line-height: 1.5rem;}
        .content .bottom{ width: 100%; height: 2.6rem; position: fixed; left: 0;bottom: 0;}
        .content .bottom .nina{ width: 89%; height: 2.2rem; margin: .2rem auto; text-align: center; display: block; background: #00a0e9; color: #ffffff; line-height: 2.2rem; border-radius: .3rem;}

        /*文字*/
        .foa{ font-size:.64rem;}/*18px*/
        .fob{ font-size:.86rem;}/*24px*/
        .foc{ font-size:.71rem;}/*20px*/

        .cbo{ color: #b1b1b1;}
        .inp{ color: #999999;}
        .cda{ color: #143452;}

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee}
    </style>
</head>
<body>
    <div class="all">
        <div class="head">
            <img src="/Public/app/img/oni.png" class="img1"/>
            <p class="foa lin-a inp">
                你有没有遇到过：<br/>
                财务有问题找不出来？<br/>
                稽查应对手足无措？<br/>
                财务高管面试心里没底？<br/>
                重大合同财务陷阱，法务律师却审不出来？<br/>
                这意味着，你需要一名专属财务专家，<br/>
                为您开启财务领域的通畅大门！
            </p>
        </div>
        <div class="content">
            <h4 class="fob">扁鹊告诉您怎么做...</h4>
            <div class="nav">
                <img src="/Public/app/img/innu.png" class="ing1"/>
            </div>
            <h4 class="fob">您将获得...</h4>
            <p class="bor inp foa pa">与财税专家1对1的见面诊断服务</p>
            <p class="inp foa pb">
                诊断方式：1对1面谈服务<br/>
                诊断费用：根据实际问题及解决方案收费<br/>
                专家团队：国内顶级财务咨询师
                <a href="http://www.bianquecxy.com/kjia/" class="ma foa cda">专家团队</a>
            </p>
            <div class="bottom">
                <a href="<?php echo U('Yuejt/one');?>" class="nina">财税问题   马上提问</a>
            </div>
        </div>
    </div>
</body>
<script>

</script>
</html>