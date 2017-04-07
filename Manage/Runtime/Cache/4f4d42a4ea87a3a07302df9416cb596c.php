<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>题目列表</title>
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
			margin-bottom:15px;
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
				url: '<?php echo U('Quesion/quelist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,
				singleSelect: true,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30],
				showFooter: true,
				idField: 'id',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
				
			">
			<thead>
				<tr>
					<th field="sub_title">所属科目</th>
					<th field="title" align="left" width="80" >题目名称</th>
					<th field="sort" align="left" width="50"sortable="true" >题号(√)</th>
					<th field="creatime" align="left" width="70" >创建时间</th>
					<th field="status" align="left" formatter="show_status" >状态</th>
					<th field="is_shadow" width="50" formatter="show_shadow">是否附加</th>
					<th field="d" width="50" formatter="show_answer">操作</th>
				</tr>
			</thead>
		</table>
		<div id="toolbar" style="margin-top:5px;">
					<table>
						<tr>
							<td>科目名:
								<select name="sub_id" id="sub_id">
									<option>--请选择--</option>
									<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</td> <!---onmouseover="this.value=''"这段代码可放在input内-->
							<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
							</td>
							<td>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newNode()">添加题目</a>
							</td>
							<td>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editNode()">编辑题目</a>
							</td>
						</tr>
					</table>
		</div>
    </div>
	
	
	
	<!----------------编辑添加框------------------>
	<div id="dlg" class="easyui-dialog" closed="true" buttons="#dlg-buttons" style="width:600px;height:400px;">
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>所属科目</label>
				<select name="sub_id" style="width:110px;">
					<option >--请选择--</option>
					<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="fitem">
				<label>题目名称:</label>
				<input name="title" class="easyui-validatebox">
			</div>
			<div class="fitem">
				<label>题号:</label>
				<input name="sort" class="easyui-validatebox"><span style="color:red;font-size:8px">(*当前题的所属附加问题题号一致即可)</span>
			</div>
			<div class="fitem">
				<label>状态</label>
				<select name="status" style="width:110px;">
					<option >--请选择--</option>
					<option value="1">上线</option>
					<option value="2">下线</option>
				</select>
			</div>
			<div class="fitem">
				<label>附加问题</label>
				<select name="is_shadow" style="width:110px;">
					<option >--请选择--</option>
					<option value="1">是</option>
					<option value="2">否</option>
				</select><span style="color:red;font-size:8px">(*附加问题默认隐藏)</span>
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
			$('#dlg').dialog('open').dialog('setTitle','新增题目');
			$('#fm').form('clear');
			url = '<?php echo U("Quesion/que_add");?>';
		}
		function editNode(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','编辑题目');
				$('#fm').form('load',row);
				url = '<?php echo U("Quesion/que_edit");?>&id='+row.id;
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
		function show_type(val,row){
			if(val == 1){
				val = '<font color="blue">填空</font>';
			}else if(val == 2){
				val = '选择';
			}
			return val;
		}
		function show_shadow(val,row){
			if(val == 1){
				val = '<font color="red">附加问题</font>';
			}else if(val == 2){
				val = '正常问题';
			}
			return val;
		}
		function show_answer(val,row){
			if(row.status == 1){
				return "<a href='/Manerger/index.php/Quesion/answer/que_id/"+row.id+"'>查看选项</a>";
			}else{
				return "<a href='/Manerger/index.php/Quesion/answer/que_id/"+row.id+"'>查看选项</a>";
			}	
		}
		function doSearch(){
			$('#dg').datagrid('load',{
				sub_id:	$('#sub_id').val(),
			});
		}
	</script>
</html>