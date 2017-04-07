<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>电话初审</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <style>
		ul li{
			list-style:none;
		}
		li{
			float:left;
			margin-left:10px;
		}
	</style>
</head>
<body class="easyui-layout">
<div data-options="region:'center'">
<iframe src="/Manerger/index.php/Check/detail/id/<?php echo ($id); ?>" width="100%" height="600px;">
</iframe>
<iframe src="/Manerger/index.php/Show/index/uid/<?php echo ($uid); ?>" width="100%" height="400px;">
</iframe>
	<form action="<?php echo U('LoanManage/fir_add');?>" method="post"id="fm">
	<div style="width:1200px;display:block;heiht:20%">
			<div style="margin-top:12px;margin-left:15px;float:left;">
				<span style="display:block;margin-top:20px;">发送通知:
					<select name="inform_type">
						<option value="4">不发送</option>
						<option value="1">短信&push </option>
						<option value="2">短信</option>
						<option value="3">push</option>
					</select>
				</span>
				<span style="margin-top:20px;display:block;">
					通知内容:
					<textarea name="inform" style="width:240px;height:50px;"></textarea>
				</span>
			</div>	
			<div style="margin-top:12px;margin-left:230px;float:left;">
				<span style="display:block;margin-top:20px;">审核状态:
					<select name="status">
						<option value="2">不通过</option>
						<option value="1">通过</option>
					</select>
				</span>
				<span style="margin-top:20px;display:block;">
					结论内容:
					<textarea name="desc" style="width:240px;height:50px;"></textarea>
				</span>
				<input type="hidden" name="uid" value="<?php echo ($uid); ?>" />
				<input type="hidden" name="id" value="<?php echo ($id); ?>" />
			</div>
			<div style="clear:both;"></div>
			<a href="javascript:;" style="margin-left:32%;" class="easyui-linkbutton" iconCls="icon-ok" onclick="enter()">保存</a>
						<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-no" onclick="history()">取消</a>
	</div>
	</form>
	</div>
</body>
<script>
	function enter(){
		$("#fm").submit();
	}
	function history(){
		window.location.href = "<?php echo U('LoanManage/fir_tel');?>";
	}
</script>
</html>