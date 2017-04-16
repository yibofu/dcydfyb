<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>权限库</title>
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
<body class="easyui-layout" style="margin: 0 auto; width:99%;">
 <div  data-options="region:'center',border:false">
 <!--操作演示结束，后面还要封闭div-->
	<table id="dg" class="easyui-treegrid" toolbar='#toolbar' 
			data-options="
				url: '<?php echo U('Power/powerlist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30],
				idField: 'id',
				treeField: 'title',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
			">
		<thead>
			<tr>
				<th field="title" width="40%">权限名称</th>
				<th field="name" align="left" width="30%">url</th>
				<th field="ctime"  align="left" width="20%">ctime</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newNode()">添加功能</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editNode()">编辑功能</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeNode()">删除</a>
	</div>
    </div>
	
	
	
	<!----------------编辑添加框------------------>
	<div id="dlg" class="easyui-dialog" title="编辑节点" closed="true" buttons="#dlg-buttons" style="width:500px;height:300px;">
		<div class="ftitle">功能</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>名称:</label>
				<input name="title" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>url地址:</label>
				<input name="name" class="easyui-validatebox" required="true">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveNode()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
	</div>
	
	<!--表单结束-->
	
</body>
	<script type="text/javascript">
		var url;
		function newNode(){
			var row = $('#dg').datagrid('getSelected');
			$('#dlg').dialog('open').dialog('setTitle','添加功能');
			$('#fm').form('clear');
			if(row){
				url = '<?php echo U('Power/add');?>&pid='+row.id;
			}else{
				url = '<?php echo U('Power/add');?>'
			}
		}
		function editNode(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','编辑功能');
				$('#fm').form('load',row);
				url = '<?php echo U('Power/edit');?>&id='+row.id;
			}else{
				$.messager.show({
					title: '出错啦！！',
					msg: '请选择一条'
				});
			
			}
		}
		function saveNode(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').treegrid('reload');	// reload the user data
						$.messager.show({
							title: '消息',
							msg: result.msg
						});
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeNode(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('删除功能','确实要删除这条记录么？',function(r){
					if (r){
						$.post('<?php echo U('Power/remove');?>',{id:row.id},function(result){
							if (result.success){
								$('#dg').treegrid('reload');
							} else {
								$.messager.show({				// show error message
									title: '出错啦！！',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
</html>