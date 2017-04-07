<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>扁鹊财学院</title>
    <link rel="stylesheet" href="/Public/app/css/product.css">
    <style>
        .man{ background: url("/Public/app/img/man.png") no-repeat; width: 99.5%; height:100%;background-size: 100% 100%;position:absolute;}
        .man .logo{ width: 44%; margin: 0 auto;}
        .man .logo .img1{ width: 100%; margin: 3.1rem 0 1rem 0;}
        .man .nav{ width: 80%; margin: 2.2rem 0 0 15%;}
        .man .nav .gia{ width: 30%; color: #131313; font-size: 1.5rem;line-height: 8rem;font-weight: 600;}
        .man .nav .gie{ width: 60%;}
        .man .nav .gie li{margin-bottom: 1rem;  }
        .man .nav .gie li a{ border: .1rem solid #666666; border-radius: .5rem; color: #131313; padding: .15rem 10%; font-size: 1rem;}
    </style>
</head>
<body>
    <div class="man">
        <div class="logo">
            <img src="/Public/app/img/logo.png" class="img1"/>
        </div>
        <div class="nav">
            <div class="fl gia">培训</div>
            <ul class="fl gie">
                <li><a href="<?php echo U('Product/eight');?>">老板财务通</a></li>
                <li><a href="<?php echo U('Product/five');?>">管理层财务思维</a></li>
                <li><a href="<?php echo U('Product/nine');?>">企业陪伴计划</a></li>
                <li><a href="<?php echo U('Product/one');?>">财务系统班</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="nav gie">
            <div class="fl gia">咨询</div>
            <ul class="fl gie">
                <li><a href="<?php echo U('Product/seven');?>">老板财务智囊</a></li>
                <li><a href="<?php echo U('Product/six');?>">企业并购</a></li>
                <li><a href="<?php echo U('Product/three');?>">新三板上市服务</a></li>
                <li><a href="<?php echo U('Product/two');?>">预算系统建设</a></li>
                <li><a href="<?php echo U('Product/styli');?>">账钱税系统建设</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</body>
</html>