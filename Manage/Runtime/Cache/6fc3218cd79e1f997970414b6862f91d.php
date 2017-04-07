<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>科目列表</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
	<style type="text/css">
		#fm{
			margin-top:25px;
			padding:10px 30px;
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
	<table id="dg" class="easyui-datagrid" toolbar='#toolbar' 
			data-options="
				url: '<?php echo U('Quesion/datalist');?>',
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
				<th field="title" align="left" width="30%">科目名称</th>
				<th field="detail" align="left" width="30%">科目描述</th>
				<th field="creatime"  align="left" width="20%">创建时间</th>
				<th field="status"  align="left" width="20%" formatter="show_status">状态</th>
				<th field="d" width="40" align="left" formatter="show_test" >操作</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newNode()">添加科目</a>
		<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editNode()">编辑科目</a>
	</div>
    </div>
	
	
	
	<!----------------编辑添加框------------------>
	<div id="dlg" class="easyui-dialog" closed="true" buttons="#dlg-buttons" style="width:400px;height:280px;">
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>科目名称:</label>
				<input name="title" class="easyui-validatebox">
			</div>
			<div class="fitem">
				<label>科目详情:</label>
				<textarea name="detail" style="width:160px;height:50px;"></textarea>
			</div>
			<div class="fitem">
				<label>状态</label>
				<select name="status">
					<option value="1">上线</option>
					<option value="2">下线</option>
				</select>
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveNode()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
	</div>
	
	<!--------------表单结束--------------->
	
</body>
	<script type="text/javascript">
		var url;
		function newNode(){
			var row = $('#dg').datagrid('getSelected');
			$('#dlg').dialog('open').dialog('setTitle','新增科目');
			$('#fm').form('clear');
			url = '<?php echo U("Quesion/add");?>';
		}
		function editNode(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','编辑科目');
				$('#fm').form('load',row);
				url = '<?php echo U('Quesion/edit');?>&id='+row.id;
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
						$('#dg').datagrid('reload');	// reload the user data
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
		function show_status(val,row){
			if(val == 1){
				val = '<font color="green">上线</font>';
			}else if(val == 2){
				val = '<font color="red">下线</font>';
			}
			return val;
		}
		function show_test(val,row){
			return "<a href='/Manerger/index.php/Quesion/show_test/id/"+row.id+"' target='_blank'>预览试题</a>";
		}
	</script>
</html>