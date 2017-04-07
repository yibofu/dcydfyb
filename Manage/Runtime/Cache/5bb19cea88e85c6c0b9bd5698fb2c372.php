<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>附件列表</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <style>
	.fitem{
		padding-bottom:10px;
		padding-top:10px;
	}
   
   </style>
</head>
<body>
	<div style="margin:20px 0;"></div>
	<div class="easyui-panel" title="附件列表" >
		<div style="padding:20px 60px 60px 60px">
			<div style="margin:5px 0;">
				<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#dlg').dialog('open')" >上传提醒</a>
			</div>
		<table id="dg" title="待审核列表" class="easyui-datagrid" style="width:700px;height:250px"
			data-options="
				url: '<?php echo U('Annex/datalist1');?>',
				rownumbers: true,
				singleSelect:true,
				fitColumns:true,
				pagination: true,
				pageNumber:1,
				collapsible:true,
				pageSize:10,
				pageList: [10,20],
				idField: 'id'
			"
			>
			<thead>
				<tr>
					<th data-options="field:'title',width:80">标题</th>
					<th data-options="field:'url',width:100">图片</th>
					<th data-options="field:'is_agree',width:80,align:'right'" formatter="show_status">状态</th>
					<th data-options="field:'createtime',width:80,align:'right'">创建时间</th>
					<th data-options="field:'d',width:80" formatter="show_manger">审核</th>
				</tr>
			</thead>
		</table>
	
		<div style="padding:5px 0 5px 0;">
				<a href="javascript:void(0)" class="easyui-linkbutton" style="color:blue" onclick="$('#upload').dialog('open')" >添加离线附件</a>
		</div>
	
		<table id="datalist2" class="easyui-datagrid" title="审核员上传的" style="width:700px;height:250px"
			data-options="
				url: '<?php echo U('Annex/datalist2');?>',
				rownumbers: true,
				singleSelect:true,
				fitColumns:true,
				pagination: true,
				pageNumber:1,
				collapsible:true,
				pageSize:10,
				pageList: [10,20],
				idField: 'id'
			"
			>
			<thead>
				<tr>
					<th data-options="field:'title',width:80">名称</th>
					<th data-options="field:'url',width:100">下载地址</th>
					<th data-options="field:'d',width:100,align:'right'" formatter="show_manger2">操作</th>
				</tr>
			</thead>
		</table>
	   </div>
	</div>

	<!----->
		<div id="dlg" class="easyui-dialog" title="上传提醒" style="width:400px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#fm').form('submit',{
								url: '<?php echo U('Annex/insert');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#dlg').dialog('close');		// close the dialog
										$.messager.show({
											title: '消息',
											msg: result.mesg
										});
									} else {
										$.messager.show({
											title: '出错啦！！',
											msg: result.mesg
										});
									}
								}
							});
					}
				},{
					text:'撤消',
					handler:function(){
						$('#dlg').dialog('close')
					}
				}],
				closed: true,  
			">
			
			<div style="padding:10px;">
			<form id="fm" method="post" novalidate >
				<div class="fitem">
					<label>发送方式:</label>
					<select name="type">
						<option value="1">短信和推送</option>
						<option value="2">短信</option>
						<option value="3">推送</option>
					</select>
				</div>		
				<div class="fitem">
					<label>标&nbsp;&nbsp;题:</label>
					 <input class="easyui-validatebox" type="text" name="title"></input>
				</div>	
				<div class="fitem">
					<label>内&nbsp;&nbsp;容:</label>
					<textarea name="message" style="height:60px;">XX您好，您的信息不够充分，请在设置补充附件中，上传****补充信息【滴滴快贷】</textarea>
				</div>
			</form>
			</div>
	</div>
	<!------>
	
	<!---添加离线附件开始-->
		<div id="upload" class="easyui-dialog" title="添加离线附件" style="width:400px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#uploadfm').form('submit',{
								url: '<?php echo U('Annex/fujian');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.error==0){
										$('#upload').dialog('close');		// close the dialog
										$.messager.show({
											title: '消息',
											msg: result.mesg
										});
										$('#datalist2').datagrid('reload');
									} else {
										$.messager.show({
											title: '出错啦！！',
											msg: result.mesg
										});
									}
								}
							});
					}
				},{
					text:'撤消',
					handler:function(){
						$('#upload').dialog('close')
					}
				}],
				closed: true,  
			">
			
			<div style="padding:10px;">
			<form id="uploadfm" method="post" enctype="multipart/form-data" >	
				<div class="fitem">
					<label>标&nbsp;&nbsp;题:</label>
					 <input class="easyui-validatebox" type="text" name="title"></input>
				</div>	
				<div class="fitem">
					<label>附件</label>
					 <input class="easyui-validatebox" type="file" name="fujian"></input>
					 <input class="easyui-validatebox" type="hidden" name="url"></input>
					 <input class="easyui-validatebox" type="hidden" name="id"></input>
				</div>
			</form>
			</div>
	</div>
	<!------>
</body>
<script>

	function show_status(val){
	    if(val==1){
		    return "<span style='color:green;'>正常</span>";
		}else{
		    return "<span>未审核</span>";
		}
	 }
	 
	 
	 	function show_manger(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="shenhe('+row.id+')">审核</a>'; 
		}
		
		function show_manger2(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="del('+row.id+')">删除</a>&nbsp;&nbsp;<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="edit('+row.id+')">修改</a>'; 
		}
		
		
		function shenhe(id){
			$.post('__URL__/pass',{id:id},function(data){
				var result = eval('('+data+')');
					if (result.errno==0){
						$.messager.show({
							title: '审核通过',
							msg: result.mesg
						});
						$('#dg').datagrid('reload');
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: result.mesg
						});
					}			
			});
		}
		
		function del(id){
			$.post('__URL__/del',{id:id},function(data){
				var result = eval('('+data+')');
					if (result.errno==0){
						$.messager.show({
							title: 'ok',
							msg: result.mesg
						});
						$('#datalist2').datagrid('reload');
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: result.mesg
						});
					}			
			});
		
		}
		
	function edit(id){
		$.ajax({
			    type:'post',
				 url:"__URL__/edit",
				data:{id:id},
			  success:function(data){
			        row = eval('('+data+')');
					//console.log(row);
					if (row.id){
						//$('#uploadfm').form('clear');
						$('#upload').dialog('open').dialog('setTitle','编辑'); 
						
						$('#uploadfm').form('load',row); 
					
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
						});
					
					}
			  }
		});
	}

</script>
</html>