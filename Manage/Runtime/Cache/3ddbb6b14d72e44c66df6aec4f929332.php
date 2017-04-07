<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>试卷列表</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
  </head>
<body class="easyui-layout" style="margin: 0 auto; width:99%;overflow:auto;">
	<input type="button" name="submit" value="提交"  onclick="fun()"/>
	<form action="<?php echo U('Show/add');?>" method="post" id="myform">
	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["title"]); endforeach; endif; else: echo "" ;endif; ?>
	<!-- <input type="hidden" name="uid" value="<?php echo ($uid); ?>" /> -->
	<input type="hidden" name="uid" value="<?php echo ($uid); ?>" />
	<input type="hidden" name="sub_id" value="<?php echo ($sub_id); ?>" />
	</form>
	<input type="button" name="submit" value="提交"  onclick="fun()"/>
</body>
<script>
	function show(str){
		if(str == ''){
			return;
		}
		var temp = str.split(',');
		for(var i=0;i<temp.length;i++){
			$("#"+temp[i]).show();
		}
	}
	function fun(){
		$('#myform').submit();
	}
</script>
</html>