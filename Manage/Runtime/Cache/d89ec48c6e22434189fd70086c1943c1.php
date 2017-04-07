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
   <style>
		.show{
			height:40px;
		}
		.show li{
			list-style:none;
			float:left;
			margin-left:20px;
			line-height:20px;
			font-size:16px;
		}
   </style>
  </head>
<body class="easyui-layout" style="margin: 0 auto; width:99%;overflow:auto;">
	<div data-options="region:'center'">
	<ul class="show">
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Show/test',array('id'=>$vo['id'],'uid'=>$uid));?>" target="mainweb"><?php echo ($vo["title"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<iframe src="<?php echo U('Show/test',array('id'=>$id,'uid'=>$uid));?>" id="mainweb" name="mainweb" width="100%" height="700px"  frameborder="0"></iframe>
	</div>
</body>
</html>