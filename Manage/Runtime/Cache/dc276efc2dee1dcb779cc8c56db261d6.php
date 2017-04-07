<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>手机使用记录</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
  </head>
<body class="easyui-layout" style="margin: 0 auto;">
	<div style="margin:20px 0;"></div>
	<div class="easyui-panel" title="手机历史记录" >
		<div style="padding:20px 60px 60px 360px">
		<table id="dg" title="使用过的手机设备" class="easyui-datagrid" style="width:700px;height:250px"
			data-options="
				url: '<?php echo U('Teluse/datalist',array('id'=>$id));?>',
				rownumbers: true,
				singleSelect:true,
				fitColumns:true,
				pagination: true,
				pageNumber:1,
				collapsible:true,
				pageSize:5,
				pageList: [5,10],
				idField: 'id'
			"
			>
			<thead>
				<tr>
				<th field="equipment" align="center">设备标示</th>
				<th field="phone_brand" align="center">品牌</th>
				<th field="use_num" align="center">使用次数</th>
				<th field="last_time" align="center">最近使用时间</th>
				<th field="contacts" align="center">通讯录数</th>
				</tr>
			</thead>
		</table>
	
		<table id="datalist2" class="easyui-datagrid" title="通讯录详情" style="width:700px;height:250px"
			data-options="
				url: '<?php echo U('Teluse/communication',array('id'=>$id));?>',
				rownumbers: true,
				singleSelect:true,
				fitColumns:true,
				pagination: true,
				pageNumber:1,
				collapsible:true,
				pageSize:5,
				pageList: [5,10],
				idField: 'id'
			"
			>
			<thead>
				<tr>
					<th field="name" align="center">用户姓名</th>
					<th field="phone" align="center">电话号码</th>
					<th field="nums" align="center">通话次数</th>
				</tr>
			</thead>
		</table>
	   </div>
	</div>
</body>
</html>