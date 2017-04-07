<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>身份证信息</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，身份证信息">
    <meta name="description" content="滴滴快贷身份证信息。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
    <style>
        .fail_text,.fail_text1{
            width: 70%;
            margin: 20px auto;
            text-align: center;
            color: #68c983;
            font-size: 20px;
        }
        .fail_text1{
            color: #ff0000;
        }
        .fail_text .fa-check-circle-o,.fail_text1 .fa-times-circle-o{
            display: inline-block;
            font-size: 24px;
            padding-right: 5px;
            vertical-align: middle;
            margin-top: -3px;
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">身份证信息<span class="fa fa-chevron-left dd_return" onclick="history.go(-1)"></span></header>
<section class="dd_index">
	<form action="<?php echo U('User/card_mess_update',array('id'=>$id));?>" method="post" id="myform">
    <ul>
        <li>
            <div style="overflow: hidden; padding-bottom: 10px; border-bottom: 1px solid #dddddd;">
				<?php if($status == 1): ?><span class="worker_l">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span> <span class="worker_r"><?php echo ($result["name"]); ?></span>
				<?php else: ?>
				<div class="input_box contact_box">
					<span class="input_text">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span><input type="text" placeholder="请输入姓名"name="name" id="name" value="<?php echo ($result["name"]); ?>"/>
				</div><?php endif; ?>
            </div>
            <div style="padding-top: 10px;">
				<?php if($status == 1): ?><span class="worker_l">身份证号：</span> <span class="worker_r"><?php echo ($result["card_no"]); ?></span>
				<?php else: ?>
				<div class="input_box contact_box">
					<span class="input_text">身份证号：</span><input type="text" placeholder="请输入身份证号"name="card_no" value="<?php echo ($result["card_no"]); ?>" id="card_no" />
				</div><?php endif; ?>
			</div>
        </li>
    </ul>
	</form>
</section>
<!-- <?php if($status == 1): ?><div class="fail_text"><span class="fa fa-check-circle-o"></span>审核通过</div>
<elseif condition="$status eq 14">
<div class="fail_text"><span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-question fa-stack-1x"></i></span>待审核</div>
<?php else: ?>
<div class="fail_text1"><span class="fa fa-times-circle-o"></span>审核失败</div>
<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提交</a></div><?php endif; ?> -->
		<?php if($status == 1): ?><div class="fail_text" style="color:green"><span class="fa fa-check-circle-o"></span>通过审核</div>
			<!--<div class="error_info">
				<p><?php echo ($result["card_reason"]); ?></p>
			</div>--><?php endif; ?>	
		<?php if($status == 2): ?><div class="fail_text"><span class="fa fa-times-circle-o"></span>审核被拒绝</div>
			<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提交</a></div>
			<!--<div class="error_info">
				<p><?php echo ($result["card_reason"]); ?></p>
			</div>--><?php endif; ?>	
		<?php if($status == 3): ?><div class="fail_text"><span class="fa fa-times-circle-o"></span>审核被拒绝</div>
			<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提交</a></div>
			<!--<div class="error_info">
				<p><?php echo ($result["card_reason"]); ?></p>
			</div>--><?php endif; ?>	
		<?php if($status == 4): ?><div class="fail_text"><span class="fa fa-times-circle-o"></span>审核被拒绝</div>
			<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提交</a></div>
			<!--<div class="error_info">
				<p><?php echo ($result["card_reason"]); ?></p>
			</div>--><?php endif; ?>	
		<?php if($status == 5): ?><div class="fail_text"><span class="fa-stack fa-lg">
				  	<i class="fa fa-circle-o fa-stack-2x"></i>
				  	<i class="fa fa-question fa-stack-1x"></i>
				</span>待审核</div>
			<!--<div class="error_info">
				<p><?php echo ($result["card_reason"]); ?></p>
			</div>--><?php endif; ?>
</body>
<script>
	function sub(){
		var name = $("#name").val();
		var card_no = $("#card_no").val();
		if(name == '' && card_no == ''){
			alert("信息不能为空");
			return;
		}
		$("#myform").submit();
	}
	function return_list(){
		window.location.href = "<?php echo U('User/index');?>";
	}
</script>
</html>