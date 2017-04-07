<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>银行卡信息</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，银行卡信息">
    <meta name="description" content="滴滴快贷银行卡信息。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
</head>
<body class="mhome">
<header class="dd_header">银行卡信息<span class="fa fa-chevron-left dd_return" onclick="history.go(-1);"></span></header>
<section class="dd_index">
    <div style="width: 90.5%; margin: 0 auto;">
    <form action="<?php echo U('User/update_card',array('id'=>$id));?>" id="bank_form" method="post" ></form>
        <ul class="worker_info" >
            <li><span class="worker_l">真实姓名：</span> <span class="worker_r"><?php echo ($result["name"]); ?></span></li>
            <li><span class="worker_l">身份证号：</span><span class="worker_r"><?php echo ($result["card_no"]); ?></span></li>
            <li><span class="worker_l">银行卡号：</span><span class="worker_r"><input type="text" form="bank_form" name='bank_no' maxlength="19" value="<?php echo ($result["bank_no"]); ?>"/></span></li>
             <li><span class="worker_l">所属银行：</span>
                 <span class="worker_r">
                    <select name="bank" id="bank" style="width: 100%;" >
                        <option value="工商银行" <?php if($result["bank"] == '工商银行'): ?>selected<?php endif; ?>>工商银行</option>
                        <option value="农业银行" <?php if($result["bank"] == '农业银行'): ?>selected<?php endif; ?>>农业银行</option>
                        <option value="中国银行" <?php if($result["bank"] == '中国银行'): ?>selected<?php endif; ?>>中国银行</option>
                        <option value="招商银行" <?php if($result["bank"] == '招商银行'): ?>selected<?php endif; ?>>招商银行</option>
                        <option value="建设银行" <?php if($result["bank"] == '建设银行'): ?>selected<?php endif; ?>>建设银行</option>
                        <option value="交通银行" <?php if($result["bank"] == '交通银行'): ?>selected<?php endif; ?>>交通银行</option>
                        <option value="邮政储蓄" <?php if($result["bank"] == '邮政储蓄'): ?>selected<?php endif; ?>>邮政储蓄</option>
                        <option value="民生银行" <?php if($result["bank"] == '民生银行'): ?>selected<?php endif; ?>>民生银行</option>
                        <option value="光大银行" <?php if($result["bank"] == '光大银行'): ?>selected<?php endif; ?>>光大银行</option>
                        <option value="兴业银行" <?php if($result["bank"] == '兴业银行'): ?>selected<?php endif; ?>>兴业银行</option>
                    </select>
                </span>
        </li>
        <li><span class="worker_l">开户城市：</span>
			<span class="worker_r"><input type="text" name="bank_local" value="<?php echo ($result["bank_local"]); ?>"/></span></li>
    </ul>
    </div>
</section>
<div class="dd_yzm" onclick="sub()"><a href="javascript:;">更换银行卡</a></div>
</body>
<script>
	function sub(){
		$("#bank_form").submit();
	}
	function return_page(){
		window.location.href = "<?php echo U('User/card');?>";
	}
</script>
</html>