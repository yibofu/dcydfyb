<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>财务诊断</title>
    <link rel="stylesheet" href="/Public/app/css/public.css">
    <script type="text/javascript" src="/Public/app/js/jquery-3.1.0.min.js"></script>
    <style>
        .head .img1{ width: 100%; height: 10.7rem;}
        .head p{ line-height:.86rem; height: 2.6rem; width: 84%; margin: .68rem auto .53rem auto;  }
        .content h4{ line-height: 1.6rem; padding-left:7%;}
        .content .nav{ width: 89%; height: 5.5rem; margin:0 auto;}
        .content .nav .nav-a{ width: 25%; height: 5.5rem;}
        .content .nav .nav-a .na{ height: 2.1rem; width: 100%;}
        .content .nav .nav-a .na .img1{ height: 1.8rem; width: 60%; margin: 0 auto 0 auto; padding-top: 1.4rem }
        .content .nav .nav-a .na .img2{ height: 2.1rem; width: 51%; margin: 0 auto 0 auto; padding-top: 1rem }
        .content .nav .nav-a .na .img3{ height: 2.3rem; width: 35%; margin: 0 auto 0 auto; padding-top: 1rem }
        .content .nav .nav-a .na .img4{ height: 1.7rem; width: 39%; margin: 0 auto 0 auto; padding-top: 1.4rem }
        .content .nav .nav-a p{ width: 100%; text-align: center; display: inline-block; margin-top: 1.8rem;}
        .content .nav-b{ height: 18rem; background: #eeeeee;}
        .content .nav-b .imga{ height: 15rem; width: 65%; margin: 0 auto; padding: 1.25rem 0 1.25rem 0;}
        .content .pa{ line-height: 2rem; text-align: center;}
        .content .pb{ margin: 1rem 0 4rem 3%; position: relative;}
        .content .pb .ma{ position: absolute; right: 20%; bottom:0; height: 1.5rem; width: 18%; background: #3588e7; border: .04rem solid #1e6fcd; border-radius: .2rem; text-align: center; line-height: 1.5rem;}
        .content .bottom{ width: 100%; height: 2.6rem; position: fixed; left: 0;bottom: 0;}
        .content .bottom .nina{ width: 89%; height: 2.2rem; margin: .2rem auto; text-align: center; display: block; background: #00a0e9; color: #ffffff; line-height: 2.2rem; border-radius: .3rem;}
        /*文字*/
        .foa{ font-size:.64rem;}/*18px*/
        .fob{ font-size:.86rem;}/*24px*/
        .foc{ font-size:.71rem;}/*20px*/

        .cbo{ color: #b1b1b1;}
        .cda{ color: #143452;}

        .dis{display: block;}
        .bor{border-top: .04rem solid #CCCCCC;border-bottom: .04rem solid #CCCCCC;}
        .bac{ background: #eeeeee}
    </style>
</head>
<body>
    <div class="all">
        <div class="head">
            <img src="/Public/app/img/print-a.png" class="img1"/>
            <p class="foa">财税问诊是扁鹊财学院最高效、最专业、最具价值的企业财务咨询服务，您有任何关于企业的财税问题，都可以来到扁鹊财学院进行远程视频诊断。</p>
        </div>
        <div class="content">
            <h4 class="fob">四大核心诊断</h4>
            <div class="nav bor">
                <a class="nav-a fl dis">
                    <div class="na"><img src="/Public/app/img/nav-b.png" class="dis img2"/></div>
                    <p class="fob">财务诊断</p>
                </a>
                <a class="nav-a fl dis">
                    <div class="na"><img src="/Public/app/img/nav-c.png" class="dis img3"/></div>
                    <p class="fob">审合同</p>
                </a>
                <a class="nav-a fl dis">
                    <div class="na"><img src="/Public/app/img/nav-d.png" class="dis img4"/></div>
                    <p class="fob">审报表</p>
                </a>
                <a class="nav-a fl dis">
                    <div class="na"><img src="/Public/app/img/nav-a.png" class="dis img1"/></div>
                    <p class="fob">面试财务经理</p>
                </a>
            </div>
            <h4 class="fob">扁鹊告诉您怎么做...</h4>
            <div class="nav-b bor">
                <img src="/Public/app/img/nav-f.png" class="imga dis"/>
            </div>
            <h4 class="fob">您将获得...</h4>
            <p class="bor cbo foa pa">最具专业价值的企业财务问题诊断、合同及报表审改、财务经理面试</p>
            <p class="cbo foa pb">
                诊断方式：在线预约、远程视频诊断<br/>
                诊断费用：会员首次免费体验<br/>
                专家团队：国内顶级财务咨询师
                <a href="http://www.bianquecxy.com/kjia/" class="ma foa cda">专家团队</a>
            </p>
            <div class="bottom">
                <a href="<?php echo U('Question/make');?>" class="nina">立即预约，财税问诊</a>
            </div>
        </div>
    </div>
</body>
<script>

</script>
</html>