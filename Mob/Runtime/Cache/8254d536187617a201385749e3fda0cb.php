<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>应还款</title>
    <meta name="keywords" content="滴滴快贷，申请借款确认">
    <meta name="description" content="滴滴快贷申请借款确认。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/account.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/footer.css"/>
    <style>
        .dd_borrow_box{ background:transparent;margin-top: 0;padding-top:0; }
        .yhk{  border-top: none;  background: #ffffff;margin-top:15px;margin-bottom:15px;}
        @media screen and (max-width: 370px){
            .yhk_e1{  width: 52%;  }
            .yhk_e1 li{  font-size: 13px;  }
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">历史申请记录<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>

<section class="dd_borrow_box" style="margin-bottom: 90px;">
    <!--还款信息-->
<?php if(is_array($list)): foreach($list as $key=>$info): ?><section class="yhk">
        <div class="yhk_e">
            <span><?php echo ($info["loan_money"]); ?></span>
        </div>
        <div class="yhk_e1 ">
                <li class="dd_cancelled"><?php echo ($info["reason"]); ?></li>
                <li>申请时间：<em><?php echo ($info["creatime"]); ?></em></li>
        </div>
        <div class="yhk_detail"><a href="<?php echo U('Repay/detail',array('id'=>$info['id']));?>">详情<span class="fa fa-chevron-right" style="vertical-align: middle; padding-left: 2px;margin-top: -1px;"></span></a></div>
    </section><?php endforeach; endif; ?>	
</section>

</body>
</html>