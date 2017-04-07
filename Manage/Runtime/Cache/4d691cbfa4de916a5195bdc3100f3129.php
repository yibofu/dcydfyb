<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>代发快递</title>
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
<iframe src="/Manerger/index.php/Check/detail/id/<?php echo ($id); ?>" width="100%" height="40%" style="resize:vertical;">
</iframe>
<iframe src="/Manerger/index.php/Show/index/uid/<?php echo ($uid); ?>" width="100%" height="40%" style="resize:vertical;">
</iframe>
	<form action="<?php echo U('LoanManage/wait_add');?>" method="post"id="fm">
	<div style="width:1200px;display:block;heiht:20%">
			<div>
				<h3>快递发送地址：</h3>
				<span style="display:block;">
					<input type="radio" name="address" value="1" />已发快递：&nbsp;现住址：&nbsp;<?php echo ($address["home"]); ?>
				</span>
				<span style="display:block;">
					<input type="radio" name="address" value="2" />已发快递：&nbsp;公司地址：&nbsp;<?php echo ($address["company"]); ?>
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
		window.location.href = "<?php echo U('LoanManage/wait_send');?>";
	}
</script>
</html>