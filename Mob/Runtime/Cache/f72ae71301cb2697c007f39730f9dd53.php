<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=Edge,chrome=1" http-equiv="x-ua-compatible"/>
    <title>已还款</title>
    <meta name="keywords" content="滴滴快贷，申请借款确认">
    <meta name="description" content="滴滴快贷申请借款确认。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all"/>
     <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/account.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/footer.css"/>
    <style>
        @media screen and (max-width: 372px){
            .yhk_e{
                width: 25%;
            }
            .yhk_e span{
                font-size: 17px;
            }
            .yhk_e1{
                width:55%;
                font-size : 14px;

            }
        }

    </style>
</head>
<body class="mhome">
<header class="dd_header">账号-<?php echo ($info["name"]); ?></header>
    <section class="dd_account">
        <div class="dd_account_box_left">
            <p class="dd_account_p">目前应还款</p>
            <p class="dd_account_p1"><span class="ac_total"><?php echo ($info["money"]); ?></span>元</p>
        </div>
        <div class="dd_account_box_right">
            <ul>
                <li>共借款：<span><?php echo ($info["nums"]); ?></span>笔</li>
                <li>合计金额：<span><?php echo ($info["loan_money"]); ?></span>元</li>
                <li>信用额度：<span>5000.00</span>元</li>
            </ul>
        </div>
    </section>
<section class="dd_borrow_box" style="margin-bottom: 90px;">
    <nav>
        <ul>
             <li onclick="apply()">申请中</li>
            <li  onclick="should()">应还款</li>
            <li onclick="end()" class="active">已还款</li>
        </ul>
    </nav>
    <!--还款信息-->
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><section class="yhk yhked" onclick="detail(<?php echo ($vo["lid"]); ?>)">
        <div class="yhk_e yhk_gray">
            <span><?php echo ($vo["real_money"]); ?></span>
        </div>
        <div class="yhk_e1 yhk_gray">
                <li>第<?php echo ($vo["installments"]); ?>期：<i><?php echo ($vo["word"]); ?></i></li>
                <li>到期日：<em><?php echo ($vo["repay_time"]); ?></em></li>
                <li>还款日：<em><?php echo ($vo["real_repay_time"]); ?></em></li>
        </div>
        <div class="yhk_detail">
            <a href="javascript:;" class=""> 详情<span class="fa fa-angle-right" style="vertical-align: middle; padding-left: 2px;margin-top: -1px; font-size:16px"></span></a>
        </div>
    </section><?php endforeach; endif; else: echo "" ;endif; ?>
</section>
<footer class="web_footer">
    <ul>
        <!--<li><a href="#"><span class="dd_nav1 "></span>申请</a></li>
        <li><a href="#"><span class="dd_nav2"></span>账户</a></li>
        <li><a href="#" ><span class="dd_nav3"></span>设置</a></li>
        <li><a href="#" style="color: #ff3200;"><span class="dd_nav4x"></span>更多</a></li>-->
        <li><a href="<?php echo U('/Apply/index');?>"<?php if((MODULE_NAME) == "Apply"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Apply'): ?>class="dd_nav1x"<?php else: ?>class="dd_nav1"<?php endif; ?> ></span>申请 </a></li>
        <li><a href="<?php echo U('/Repay/index');?>"<?php if((MODULE_NAME) == "Repay"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Repay'): ?>class="dd_nav2x"<?php else: ?>class="dd_nav2"<?php endif; ?> ></span>账号 </a></li>
        <li><a href="<?php echo U('/User/index');?>"<?php if((MODULE_NAME) == "User"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'User'): ?>class="dd_nav3x"<?php else: ?>class="dd_nav3"<?php endif; ?> ></span>设置 </a></li>
        <li><a href="<?php echo U('/Help/helpList');?>"<?php if((MODULE_NAME) == "Help"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Help'): ?>class="dd_nav4x"<?php else: ?>class="dd_nav4"<?php endif; ?> ></span>更多 </a></li>
		
        <!--<li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
        MODEL_NAME-->
    </ul>
</footer>
<script>
	function apply(){
		window.location.href = "<?php echo U('Repay/index');?>";
	}
	function should(){
		window.location.href = "<?php echo U('Repay/shouldpay');?>";
	}
	function end(){
		window.location.href = "<?php echo U('Repay/end');?>";
	}
	function detail(id){
		window.location.href = "<?php echo U('Repay/detail');?>&id="+id;
	}
</script>
</body>
</html>