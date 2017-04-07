<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>jQuery EasyUI CRUD Demo</title>
	  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
 
  <script type="text/javascript">
		var url;
		function newUser(){
			$('#w').window('open').window('setTitle','添加角色');
			nodes = $('#tt').tree('getRoots');
			for(var i=0; i<nodes.length; i++){
				rootid = nodes[i].id;
				nodeb = $('#tt').tree('find',rootid);
				$('#tt').tree('check', nodeb.target);

			}
			$('#fm').form('clear');
			url = "<?php echo U('Group/add');?>";
		}
		
		function in_array(search,array) {
			for(var i in array){
				if(array[i]==search){
					return true;
				}
			}
			return false;
		}
		
		
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#w').dialog('open').dialog('setTitle','修改角色');
				
				$.get('<?php echo U("Role/edit");?>',{id:row.id},function(data){
					var obj = eval('('+data+')');
						//gpower = obj.gpower.split(',');
						rpower = obj.power.split(',');
						$('#group').combobox('setValue',obj.gid)
						//获取所有根节点把根节点的的选中状态定义为非选择中。
						nodes = $('#tt').tree('getRoots');
						for(var i=0; i<nodes.length; i++){
							rootid = nodes[i].id;
							nodeb = $('#tt').tree('find',rootid);
							$('#tt').tree('uncheck', nodeb.target);
						}
						
						//把所有的有权限记录的子节点选中。
						for(var i in rpower){
							id = rpower[i];
							if(id){
								nodeb = $('#tt').tree('find',id);
								$('#tt').tree('check', nodeb.target);
							}
							}
						});
				
					$('#fm').form('load',row);
			}
		}
		
		
		function saveUser(){
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
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('删除角色','您确实要删除么？',function(r){
					if (r){
						$.post('<?php echo U("Role/remove");?>',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
</head>
<body>
	<table id="dg"  class="easyui-datagrid" style="width:90%px;height:80%px"
			toolbar="#toolbar" 
			fitColumns="true" singleSelect="true" 
			data-options="
				url: '<?php echo U('Role/rolelist');?>',
				rownumbers: true,
				fit:true,
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				idField: 'id',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
			"
			>
		<thead>
			<tr>
				<th field="name"> 角色名 </th>
				<th field="description">描述</th>
				<th field="powername" width="400">角色权限</th>
				<th field="ctime">创建时间</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newUser()">添加角色</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editUser()">修改角色</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="removeUser()">删除角色</a>
	</div>
	
	<div id="w" class="easyui-window"  data-options="closed:true,iconCls:'icon-save'" style="width:500px;height:300px;padding:5px;">
		
		<div class="easyui-layout" data-options="fit:true">
			<div data-options="region:'east',split:true" style="width:200px">
				<ul id="tt" class="easyui-tree"
				url="<?php echo U('Power/powertree');?>"
				animate="true"
				checkbox="true">
				</ul>
			</div>
			<div data-options="region:'center'" style="padding:10px;">
				<form id="fm" method="post">
					<div class="fitem">
						<label>角色名称:</label>                                                                              
						<input name="name" class="easyui-validatebox" required="true">
					</div>
					<input type="hidden" id="power" name="power" value=""/>
					<input type="hidden" id="powername" name="powername" value=""/>
					<input type="hidden" id="id" name="id" value=""/>
					<div class="fitem">
						<label>描&nbsp;&nbsp述:</label>
						<textarea name="description" class="easyui-validatebox" required="true"></textarea>
					</div>
				</form>
			</div>
			<div data-options="region:'south',border:true" style="text-align:right;padding:5px;">
			<div id="dlg-buttons">
				<a href="#" class="easyui-linkbutton"  iconCls="icon-add" onClick="submitForm('<?php echo U('Role/insert');?>')">添加</a>
				<a href="#" class="easyui-linkbutton"  iconCls="icon-edit" onClick="submitForm('<?php echo U('Role/update');?>')">修改</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearForm()">取消</a>
			</div>
			</div>
		</div>
	</div>
</body>
<script>
/*
		$('#group').combobox({
			onSelect:function(title){
					id = $('#group').combobox('getValue');
					$.get('<?php echo U("Group/edit");?>',{id:id},function(data){
						var obj = eval('('+data+')');
						nodes = $('#tt').tree('getRoots');
						for(var i=0; i<nodes.length; i++){
							rootid = nodes[i].id;
							nodeb = $('#tt').tree('find',rootid);
							if(in_array(rootid,obj)){
								$('#tt').tree('check', nodeb.target);
							}else{
								$('#tt').tree('uncheck', nodeb.target);
							}
						}
						
					});
				}
			}); 

*/


		function submitForm(url){
		
			//取所有被选择的节点及其父节点。
			nodes = $('#tt').tree('getChecked');
			
			var power='',powername='';
			for(var i=0;i<nodes.length;i++){
				if(power!='') power+=',';
				power+=nodes[i].id;	
				if(powername!='') powername+=',';
				powername+=nodes[i].text;
				
			}
			
			//$('#groupid').val($('#group').combobox('getValue'));   //给隐藏的表单赋值。
			$('#power').val(power);          
			$('#powername').val(powername);   
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
						clearForm();
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		
		
	function clearForm(){
		$('#fm').form('clear');
		$('#w').window('close');
	}
</script>
</html>