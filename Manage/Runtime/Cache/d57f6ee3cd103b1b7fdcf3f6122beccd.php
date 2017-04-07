<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>借款查询</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/demo.css"> 
   <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.form.js"></script>
 <style type="text/css">
		#ff{
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
<body class="easyui-layout" style="margin:0 auto; width:99%;">
<div data-options="region:'center',border:false">	
	<table id="dg" class="easyui-datagrid" toolbar="#toolbar"  
			data-options="
				url: '<?php echo U('Rate/ratelist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,    //让列自适应表格的宽度。
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				idField: 'id',
				singleSelect: true,
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
			"
			>
		
		<thead>
			<tr>
				<th field="rate" width="40%" align="center" data-options="field:'id'"> 提费利率(%) </th>
				<th field="manage" width="60%" align="center" formatter="show_manage"> 管理 </th>
			</tr>
		</thead>
	</table>
	</div>


	<div id="dlg" class="easyui-dialog" title="设置" closed="true" button="#dlg-buttons" style="width:680px;height:320px;">
		<div class="ftitle">利率信息</div>
			<form id="fm" method="post" >
				<div class="fitem">
					<label>提现手续费率:</label>
					<input name="tx_rate" class="easyui-validatebox">(%)
				</div>
			</form>
			<div id="dlg-buttons">
				<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save_admin()">保存</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
			</div>
	</div>
</body>
<script type="text/javascript">
		
	function show_manage(val,row){
		return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true"  onclick="edit_admin('+row.id+')">修改</a>';
	}
	
	var url;
	function edit_admin(id){
		$.ajax({
			type:'post',
			url:"__APP__/Rate/edit",
			data:{id:id},
			success:function(data){
				row=eval('('+data+')');
				if(row){
					$('#fm').form('clear');
					$('#dlg').dialog('open').dialog('setTitle','设置');
					$('#fm').form('load',row);
					url='<?php echo U('Rate/update');?>&id='+row.id;
				}else{
					$.messager.show({
						title:'出错了',
						msg:'请选择一条'
					});
				}
			}
		});
	}

	function save_admin(){
		$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');
						$('#dg').datagrid('reload');
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
</script>
</html>