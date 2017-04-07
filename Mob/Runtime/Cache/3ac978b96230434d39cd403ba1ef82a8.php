<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请填写工作信息</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，请填写工作信息">
    <meta name="description" content="滴滴快贷请填写工作信息。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
    <script src="/Public/Mob/js/jsAddress.js"></script>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
    <style>
        .worker_info li .worker_l{  margin-top: 10px;}
        #Select1,#Select2,#Select3{width:30%; font-size:14px;  padding: 10px 0;}
        @media screen and (max-width: 330px){
            #Select1,#Select2,#Select3{width:30%; font-size:12px;  padding: 10px 0;}
        }
        .worker_detail{
            width: 100%!important;
            margin-top: 20px;
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">请填写工作信息<span class="fa fa-chevron-left dd_return" onclick="return_page()"></span></header>
<section class="dd_index">
    <form action="<?php echo U('User/add_work',array('id'=>$id));?>" id="bank_form" method="post" >
    <ul class="worker_info" >
        <li>
            <span class="worker_l">我现在是</span>
            <span class="worker_r">
                <select name="job" id="job" style="width: 100%;">
                    <option value="管理人员" <?php if($result["job"] == '管理人员'): ?>selected<?php endif; ?>>管理人员</option>
                        <option value="一般员工" <?php if($result["job"] == '一般员工'): ?>selected<?php endif; ?>>一般员工</option>
                        <option value="内勤" <?php if($result["job"] == '内勤'): ?>selected<?php endif; ?>>内勤</option>
                        <option value="后勤" <?php if($result["job"] == '后勤'): ?>selected<?php endif; ?>>后勤</option>
                        <option value="工人" <?php if($result["job"] == '工人'): ?>selected<?php endif; ?>>工人</option>
                        <option value="销售/中介/业务代表" <?php if($result["job"] == '销售/中介/业务代表'): ?>selected<?php endif; ?>>销售/中介/业务代表</option>
                        <option value="营业/服务员" <?php if($result["job"] == '营业/服务员'): ?>selected<?php endif; ?>>营业/服务员</option>
                        <option value="个体商户" <?php if($result["job"] == '个体商户'): ?>selected<?php endif; ?>>个体商户</option>
                        <option value="学生" <?php if($result["job"] == '学生'): ?>selected<?php endif; ?>>学生</option>
                </select>
            </span>
        </li>
        <li>
            <span class="worker_l">单位名称：</span>
            <span class="worker_r"><input type="text" placeholder="请输入单位名称" name="company" value="<?php echo ($result["company"]); ?>"/></span>
        </li>
        <li>
            <span class="worker_l" style="margin-top: 8px;">单位地址：</span>
            <span class="worker_r">
                <select id="Select1" class="job_province" name="job_province"></select>
                <select id="Select2" class="job_city" name="job_city"></select>
                <select id="Select3" class="job_zone" name="job_zone"></select>
            </span>
            <span class="worker_r worker_detail" ><input type="text" placeholder="请输入详细地址" name="job_detail" value="<?php echo ($result["job_detail"]); ?>"/></span>
        </li>
       <!-- <li>
            <span class="worker_l">所属银行：</span>
            <span class="worker_r">
                <select name="bank" id="bank" style="width: 100%;" >
                    <option value="工商银行">工商银行</option>
                    <option value="农业银行">农业银行</option>
                    <option value="中国银行">中国银行</option>
                    <option value="招商银行">招商银行</option>
                    <option value="建设银行">建设银行</option>
                    <option value="交通银行">交通银行</option>
                    <option value="邮政储蓄">邮政储蓄</option>
                    <option value="民生银行">民生银行</option>
                    <option value="光大银行">光大银行</option>
                    <option value="兴业银行">兴业银行</option>
                </select>
            </span>
        </li>-->
        <li>
            <span class="worker_l" style="margin-top: 10px;">单位电话：</span>
            <span class="worker_r"><input type="tel" placeholder="输入单位电话" name="com_phone" maxlength="11" value="<?php echo ($result["com_phone"]); ?>"/></span>
        </li>
    </ul>
	</form>
</section>
<div class="dd_yzm" onclick="sub()"><a href="javascript:;">提&nbsp;&nbsp;&nbsp;&nbsp;交</a></div>
<script> 
addressInit('Select1', 'Select2', 'Select3','<?php echo ($result["job_province"]); ?>','<?php echo ($result["job_city"]); ?>','<?php echo ($result["job_zone"]); ?>');
document.ele</script>
</body>
<script>
	function sub(){
		$("#bank_form").submit();
	}
	function return_page(){
		window.location.href = "<?php echo U('User/work',array('id'=>$id));?>";
	}
</script>
</html>