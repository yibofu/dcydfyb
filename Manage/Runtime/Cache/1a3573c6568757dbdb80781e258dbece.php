<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>身份审核列表</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
	<style>
		ul li{
			list-style:none;
		}
		li{
			float:left;
			margin-left:10px;
		}
	</style>
<body>
	<!--身份证浏览开始-->
	<div style="width:40%;float:left;">
		<span id="big"><img src="<?php echo ($result["card_front_ske"]); ?>" style="width:450px;height:340px;"></span>
			<ul>
				<li onclick="fun()"><img src="<?php echo ($result["card_front_ske"]); ?>"style="width:120px;height:80px;"></li>
				<li onclick="check()"><img src="<?php echo ($result["card_back_ske"]); ?>"style="width:120px;height:80px;"></li>
				<li onclick="hand()"><img src="<?php echo ($result["card_hand_ske"]); ?>"style="width:120px;height:80px;"></li>
			</ul>
	</div>
	<div id="dlg" class="easyui-dialog" title="用户身份信息审核" closed="true" buttons="#dlg-buttons" style="width:920px;height:600px;">
        <p id="show"><img src="<?php echo ($result["card_front"]); ?>"></p>
	</div>
	<!--身份证浏览结束-->
	<div style="float:left; width:40%;">
		<table cellpadding="5" style=" border-collapse:separate;border-spacing:5px; ">
			<tr>
				<td>姓名：<?php echo ($result["name"]); ?></td>
				<td>身份证号：<?php echo ($result["card_no"]); ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center">拍照时间:2015-11-06 11:45:13</td>
			</tr>
		</table>
		
		<hr />
		<form id="fm" method="post">
		<table>
			<tr>
				<td>姓名修正:</td>
				<td><input type="text" name="name" value="" id="name" /><input type="checkbox" name="check_name" id="check_name" value="<?php echo ($result["name"]); ?>"/>姓名正确，无需修改</td>
			</tr>	
			<tr>
				<td>输入身份证号:</td>
				<td><input type="text" name="card_no" value="" id="card_no"/><input type="checkbox" name="check_card" id="check_card" value="<?php echo ($result["card_no"]); ?>"/>身份证正确，无需修改</td></td>
			</tr>
			<tr>
				<td>户籍所在地：</td>
				<td>例：河北省，石家庄市，平山县</td>
			</tr>
			<tr>
				<td colspan="2" align="center">省份:<input type="text" name="province" value="<?php echo ($result["province"]); ?>"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">地市:<input type="text" name="town" value="<?php echo ($result["town"]); ?>"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center">区县:<input type="text" name="county" value="<?php echo ($result["county"]); ?>"/></td>
			</tr>
			<tr>
				<td>户籍详细地址：</td>
				<td><input type="text" name="census_register" value="<?php echo ($result["census_register"]); ?>"></td>
			</tr>
			<input type="hidden" name="check_result" value="" id="check_result"/>
		</table>
		</form>
		<hr />
		<p>
			<input type="radio" name="rule" id="back" value="2"/><font color="red"><b>[×]</b></font>设置中身份证信息和持身份证拍照信息”全部审核不通过
		</p>
		<p>
			<input type="radio" name="rule" id="incon"/><font color="red"><b>[?]</b></font>持身份证拍照信息
			<div style="border:1px groove #f2f2f2;background:#fcfcfc; display:none" id="detail">
					<p><input type="radio" name="incon_detail" value="3">1.持证拍照身份证不清晰</p>
					<p><input type="radio" name="incon_detail" value="4">2.持证拍照身份证显示反向</p>
					<p><input type="radio" name="incon_detail" value="5">3.持证拍照身份证信息被遮挡</p>
					<p><input type="radio" name="incon_detail" value="6">4.持证拍照中的面部五官不完整或不清晰</p>
					<p><input type="radio" name="incon_detail" value="7">5.持证拍照需要您本人手拿身份证的合照</p>
					<hr />
					<p><input type="radio" name="incon_detail" value="8">6.身份证正面照不清晰</p>
					<p><input type="radio" name="incon_detail" value="9">7.身份证反面照不清晰</p>
					<p><input type="radio" name="incon_detail" value="10">8.身份证照片需要您身份证正反面照片</p>
					<p><input type="radio" name="incon_detail" value="11">9.身份证有效期限过期</p>
					<p><input type="radio" name="incon_detail" value="12">10.临时身份证无效</p>
					<p><input type="radio" name="incon_detail" value="13">11.照片不符合要求，需要参考示例拍照</p>
			</div>	
		</p>
		<p><input type="radio" name="rule" id="ok" value="1"/><font color="green">[O]身份可确认，持照拍照信息可以确认</font></p>
		<table style=" border-collapse:separate;border-spacing:5px; " cellpadding="5">
			<tr>
				<td>手机号码：<?php echo ($result["phone"]); ?></td>
				<td>归属地：<?php echo ($result["phone_local"]); ?></td>
			</tr>
			<tr>
				<td>银行卡号：<?php echo ($result["bank_no"]); ?></td>
				<td>开户地区：<?php echo ($result["bank_local"]); ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onclick="enter('<?php echo ($result["id"]); ?>')">保存</a>
					<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-no" onclick="history()">取消</a>
				</td>
				
			</tr>
		</table>
	</div>
	<script>
		function fun(){
			var tmp = '<img src="<?php echo ($result["card_front_ske"]); ?>" style="width:500px;height:340px;">';
			$("#big").html(tmp);
			var tmps = '<img src="<?php echo ($result["card_front"]); ?>" width="920px" height="600px">';
			$("#show").html(tmps);
		}
		
		function check(){
			var tmp = '<img src="<?php echo ($result["card_back_ske"]); ?>" style="width:500px;height:340px;">';
			$("#big").html(tmp);
			var tmps = '<img src="<?php echo ($result["card_back"]); ?>"width="920px" height="600px">';
			$("#show").html(tmps);
		}
		function hand(){
			var tmp = '<img src="<?php echo ($result["card_hand_ske"]); ?>" style="width:500px;height:340px;">';
			$("#big").html(tmp);
			var tmps = '<img src="<?php echo ($result["hand_back"]); ?>" width="920px" height="600px">';
			$("#show").html(tmps);
		}
		$("#big").bind('click',function(){
			$('#dlg').dialog('open').dialog('setTitle','查看照片');
		});
		$("#incon").bind('click',function(){
			$("#detail").show();
		});
		$("#back").bind('click',function(){
			$("#detail").hide();
			var val = $(this).val();
			$("#check_result").val(val);
		});
		$("#ok").bind('click',function(){
			$("#detail").hide();
			var val = $(this).val();
			$("#check_result").val(val);
		});
		$("[name=incon_detail]").each(function(){
			$(this).bind('click',function(){
				var val = $(this).val();
				$("#check_result").val(val);
			});
		});
		$("#check_name").bind('click',function(){
			var b = $(this).prop('checked');
			if(b){
				$("#name").prop('disabled',true);
			}else{
				$("#name").prop('disabled',false);
			}
		});
		$("#check_card").bind('click',function(){
			var c = $(this).prop('checked');
			if(c){
				$("#card_no").prop('disabled',true);
			}else{
				$("#card_no").prop('disabled',false);
			}
		});
		function enter(id){
			$('#fm').form('submit',{
					url:'<?php echo U('ShowCard/enter');?>&id='+id	,
					onSubmit: function(){
						return $(this).form('validate');
					},
					success: function(result){
						var result = eval('('+result+')');
						if (result.success){
							window.location.href = '/Manerger/index.php/LoanApplication/index';
						} else {
							$.messager.show({
								title: '出错啦！！',
								msg: result.msg
							});
						}
					}
			 });
		}
		function history(){
			window.location.href="/Manerger/index.php/LoanApplication/index"
		}
	</script>
</body>
</html>