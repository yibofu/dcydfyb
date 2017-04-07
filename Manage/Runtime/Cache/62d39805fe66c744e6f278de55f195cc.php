<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>选项列表</title>
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
				url: '<?php echo U('Quesion/answerlist',array('que_id'=>$que_id));?>',
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
					<th field="title" width="80">所属问题</th>
					<th field="detail" align="left" width="50" >选项明细</th>
					<th field="type" width="50" formatter="show_type">题型</th>
					<th field="creatime" align="left" width="60" >创建时间</th>
					<th field="status" width="40" align="left" formatter="show_status" >状态</th>
					<th field="dd" width="40" align="left" formatter="mange_add" >操作</th>
				</tr>
			</thead>
		</table>
		<div id="toolbar" style="margin-top:5px;">
					<table>
						<tr>
							<td>
								<a href="<?php echo U('Quesion/show_ques');?>" class="easyui-linkbutton" iconCls="icon-back" plain="true">返回题目</a>
							</td>
							<td>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="newNode()">添加选项</a>
							</td>
							<td>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="editNode()">编辑选项</a>
							</td>
						</tr>
					</table>
		</div>
    </div>
	<!----------------添加框------------------>
	<div id="dlg" class="easyui-dialog" closed="true" buttons="#dlg-buttons" style="width:540px;height:360px;">
		<form id="fm" method="post">
			<!-- < div class="fitem">
				<label>所属题目</label>
				<select name="que_id" style="width:110px;">
					<option >--请选择--</option>
					<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>  -->
			<div class="fitem">
				<label>选项明细:</label>
				<input name="detail" class="easyui-validatebox"><span style="color:red;font-size:8px">(*若为填空则填写“请填写”即可)</span>
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
				<label>题型</label>
				<select name="type" style="width:110px;">
					<option >--请选择--</option>
					<option value="1">填空题</option>
					<option value="2">选择题</option>
				</select><span style="color:red;font-size:8px">(*若为填空则在选项明细注明“请填写”)</span>
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
			$('#dlg').dialog('open').dialog('setTitle','新增选项');
			$('#fm').form('clear');
			url = '<?php echo U("Quesion/ans_add");?>&que_id=<?php echo ($que_id); ?>';
		}
		
		function editNode(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','编辑选项');
				$('#fm').form('load',row);
				url = '<?php echo U("Quesion/ans_edit");?>&id='+row.id;
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
		function mange_add(val,row){
			return "<a href='/Manerger/index.php/Quesion/ans_add_que/ans_id/"+row.id+"'>设置附加题</a>";
		}
	</script>
</html>