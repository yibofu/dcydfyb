<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>管理员列表</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script language="javascript" type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
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
			width:650px;
			margin:0 auto;
		}
		.fitem{
			margin:0 auto 5px;
			width:650px;
		
		}
		.fitem label{
			display:inline-block;
			width:80px;
			text-align:right;
			
		}
	</style>
	
</head>
<body>

	<table id="dg" class="easyui-datagrid" toolbar='#toolbar' 
			data-options="
				url: '<?php echo U('Admin/adminlist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,
				singleSelect: true,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30],
				idField: 'id',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
			">
		<thead>
			<tr>
				<th field="username" width="5%">用户名</th>
				<th field="passwd" align="left" width="8%">密码</th>
				<th field="realname" align="left" >真实姓名</th>
				<th field="roles" align="left" >用户角色</th>
				<th field="qq"  align="left" >QQ</th>
				<th field="status"  align="left"  formatter="show_status" >状态</th>
				<th field="ctime"  align="left">创建时间</th>
				<th field="last_time"  align="left" >最后登录</th>
				<th field="d"  align="left" width="10%" formatter="show_manger">操作</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="new_admin()">添加新管理员</a>
	</div>


<!--编辑内容-->
<div id="dlg" class="easyui-dialog" title="编辑用户" closed="true" buttons="#dlg-buttons" style="width:680px;height:320px;">
		<div class="ftitle">管理员信息</div>
           <form id="fm" method="post">
			<div class="fitem">
				<label>用户名:</label>
				<input name="username"  disabled class="easyui-validatebox" style="width:300px;">
			</div>
						
			<div class="fitem">
				<label>登录密码:</label>
				<input name="new_passwd" class="easyui-validatebox" style="width:300px;"><span style="color:red;">* 密码不修改请不要输入</span>
			</div>
			
			<div class="fitem">
				<label>真实姓名:</label>
				<input name="realname"  class="easyui-validatebox">
			</div>
			
			
			<div class="fitem">
				<label>QQ号码:</label>
				<input name="qq"  class="easyui-validatebox">
			</div>
			<div class="fitem">
				<label>所属角色:</label>
                  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="rid">
					<option value="">-请选择-</option>
					<?php if(is_array($rolerows)): $i = 0; $__LIST__ = $rolerows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="fitem">
				<label>状态:</label>
                  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="status">
					<option value="1">正常</option>
					<option value="0">禁用</option>
				</select>
			</div>
		</form>

	    <div id="dlg-buttons">
			<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save_admin()">保存</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
		</div>
	</div>
	<!------->

<!--新增内容-->
<div id="add_dlg" class="easyui-dialog" title="新增管理员" closed="true" buttons="#dlg-buttons" style="width:680px;height:320px;">
		<div class="ftitle">管理员信息</div>
           <form id="ff" method="post">
		   <div class="fitem">
				<label>用户名:</label>
				<input name="username"  class="easyui-validatebox" style="width:300px;">
			</div>
						
			<div class="fitem">
				<label>登录密码:</label>
				<input name="passwd" class="easyui-validatebox" style="width:300px;"><span style="color:red;">* 密码不修改请不要输入</span>
			</div>
			
			<div class="fitem">
				<label>真实姓名:</label>
				<input name="realname"  class="easyui-validatebox">
			</div>
			<div class="fitem">
				<label>QQ号码:</label>
				<input name="qq"  class="easyui-validatebox">
			</div>
			<div class="fitem">
				<label>所属角色:</label>
                  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="roles">
                  	<option value="">-请选择-</option>
					<?php if(is_array($rolerows)): $i = 0; $__LIST__ = $rolerows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="fitem">
				<label>状态:</label>
                  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="status">
					<option value="1">正常</option>
					<option value="0">禁用</option>
				</select>
			</div>
		</form>

	    <div id="dlg-buttons">
			<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="add_admin()">保存</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#add_dlg').dialog('close')">取消</a>
		</div>
	</div>
	<!------->

</body>
<script>
     var url;

	 function show_status(val){
	    if(val==1){
		    return "<span style='color:green;'>正常</span>";
		}else{
		    return "<span>禁用</span>";
		}
	 }

	 function show_manger(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="edit_admin('+row.id+')">修改</a>'+
			   '&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="del_admin('+row.id+')">禁用</a>'; 
	}


	function new_admin(){
	    $('#ff').form('clear');
		$('#add_dlg').dialog('open').dialog('setTitle','新增管理员');
		url = '<?php echo U('Admin/add');?>';
	}

	function  add_admin(){
	  	  $('#ff').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#add_dlg').dialog('close');		// close the dialog
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
	
	function edit_admin(id){
	  	$.ajax({
			    type:'post',
				 url:"__APP__/Admin/select_admininfo",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                        $('#fm').form('clear');
						$('#dlg').dialog('open').dialog('setTitle','编辑管理员');
					    $('#fm').form('load',row);                           
						url = '<?php echo U('Admin/update');?>&id='+row.id;						
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
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

	function del_admin(id){
	    if (id){
			$.messager.confirm('Confirm','确实要删除这条记录么？',function(r){
					if (r){
						$.post('<?php echo U('Admin/remove');?>',{id:id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');
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