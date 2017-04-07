<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请中</title>
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
	 <script src="/Public/Mob/yh/js/jquery-1.11.3.min.js"></script>
    <style>

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
<section class="dd_borrow_box">
    <nav>
        <ul >
            <li class="active" onclick="apply()" style="cursor:pointer">申请中</li>
            <li onclick="should()" style="cursor:pointer">应还款</li>
            <li onclick="end()" style="cursor:pointer">已还款</li>
        </ul>
    </nav>
    <!--申请信息-->
	<?php if($status != 1): ?><section class="apply_detail" onclick="detail()">
        <div class="total">
            <div class="total_m fl"><?php echo ($applying_datalist["loan_money"]); ?>元</div>
            <div class="total_m fr"><?php echo ($applying_datalist["time_limit"]); ?>个月</div>
        </div>
        <p style="font-size: 14px; color: #999999;">申请于<?php echo (date("Y-m-d H:i:s",$applying_datalist["creatime"])); ?></p>
		
        <div class="apply_process" id="apply_process">
			<?php if($applying_datalist["plan"] == 11): ?><img src="/Public/Mob/yh/img/img_apply_process4.png"/>
			<?php elseif($applying_datalist["plan"] == 12): ?>
			<img src="/Public/Mob/yh/img/img_apply_process5.png"/>
			<?php elseif($applying_datalist["plan"] == 1): ?>
			<img src="/Public/Mob/yh/img/img_apply_process2.png"/>
			<?php elseif($applying_datalist["plan"] == 0): ?>
			<img src="/Public/Mob/yh/img/img_apply_process1.png" alt=""/>
			<?php else: ?>
			<img src="/Public/Mob/yh/img/img_apply_process3.png" alt=""/><?php endif; ?>
		</div>
        <p class="apply_text" id="apply_text">
				<?php if($applying_datalist["plan"] == 11): ?>审核通过，汇款处理中
				<?php elseif($applying_datalist["plan"] == 12): ?>
				审核通过，汇款处理中
				<?php elseif($applying_datalist["plan"] == 1): ?>
				已提交，等待审核
				<?php elseif($applying_datalist["plan"] == 0): ?>
				已提交，等待审核
				<?php else: ?>
				系统复核中<?php endif; ?>
		</p>
        <p  class="apply_detail_text">
            详情
        </p>
    </section>
    <div class="re_apply" id="give_up"><a href="javascript:;">取消申请</a></div>
</section>
<div class="show_his">+查看历史申请记录</div><?php endif; ?>
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
</body>
<script>
	var create_time = <?php echo ($applying_datalist["creatime"]); ?>;
	create_time = create_time * 1000;
	var now = Date.parse(new Date());
	var t = (now - create_time) / 1000;
	if(t < 3600){
		var time = 3600 - t;
		var a = setInterval(function(){
							time = time - 1;
							if(new_time == 0){
								new_time = 0;
								clearInterval(a);
								$('#give_up').css('display','none');
							}
						},1000);
	}else{
		$('#give_up').css('display','none');
	}
	function apply(){
		window.location.href = "<?php echo U('Repay/index');?>";
	}
	function should(){
		window.location.href = "<?php echo U('Repay/shouldpay');?>";
	}
	function end(){
		window.location.href = "<?php echo U('Repay/end');?>";
	}
	function detail(){
		window.location.href = "<?php echo U('Repay/detail',array('id'=>$applying_datalist['id']));?>";
	}
//显示历史记录。
$('.show_his').click(function(){
	window.location.href="<?php echo U('Repay/history',array('id'=>$id));?>";
});

</script>
</html>