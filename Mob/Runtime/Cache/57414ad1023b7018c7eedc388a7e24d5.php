<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>借款详情</title>
    <meta name="keywords" content="滴滴快贷，申请借款确认">
    <meta name="description" content="滴滴快贷申请借款确认。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
</head>
<body class="mhome">
<header class="dd_header">借款详情<span class="fa fa-chevron-left dd_return"></span></header>
    <section class="dd_index" style="margin-bottom: 150px;">
        <section class="dd_par">
            <ul>
                <li><span class="text_jk">真实姓名：</span><span><?php echo ($info["name"]); ?></span></li>
                <li><span class="text_jk">身份证号：</span><span><?php echo ($info["card_no"]); ?></span></li>
                <li><span class="text_jk">银行卡：</span><span><?php echo ($info["bank_no"]); ?></span></li>
                <li><span class="text_jk">开户银行：</span><span><?php echo ($info["bank"]); ?></span></li>
            </ul>
        </section>
        <section class="dd_par" style="margin-top: 10px;">
            <div class="dd_par_text">借款金额及费用说明</div>
            <ul>
                <li><span class="text_jk">借款金额：</span><span><?php echo ($info["loan_money"]); ?>元</span></li>
                <li><span class="text_jk">借款期限：</span><span><?php echo ($info["time_limit"]); ?>个月</span></li>
                <li><span class="text_jk">综合管理费：</span><span><?php echo ($info["manage_prize"]); ?>元</span></li>
                <li><span class="text_jk">月管理费：</span><span><?php echo ($info["serve_prize"]); ?>/月</span></li>
                <li><span class="text_jk">实际到账金额：</span><span><?php echo ($info["money"]); ?>元</span></li>
            </ul>
        </section>
        <section class="dd_par" style="margin-top: 10px;">
            <div class="dd_par_text">还款说明</div>
            <div class="dd_par_text dd_par_m"><span class="fl">还款方式</span><span class="fr" style="padding-right: 10px
            ">等额本息 按期还款</span></div>
            <table class="hk_table" border="1" cellspacing="0">
                <tr>
                    <td>还款期数</td>
                    <td>还款金额</td>
                    <td>到期还款日</td>
                </tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><tr>
				<?php else: ?>
				<tr style="background: #eeeeee;"><?php endif; ?>
                    <td><?php echo ($info["installments"]); ?></td>
                    <td><?php echo ($info["should_money"]); ?></td>
                    <td><?php echo ($info["repay_time"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </section>
        <div class="dd_protocol" style="height: 137px;">
            <div class=" dd_yzm dd_qr">
                <a href="__URL__/pay">在线支付</a>
            </div>
            <div class=" dd_yzm dd_qr" style="background: #68c983;margin-bottom: 15px;">
                <a href="__URL__/pay">银行汇款/支付宝转账</a>
            </div>
        </div>
        
</section>
</body>
</html>