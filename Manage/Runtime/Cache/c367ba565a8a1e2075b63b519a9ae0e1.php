<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>消息管理</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
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
<body>
	<table id="dg" class="easyui-datagrid" toolbar="#toolbar" style="width:90%px;height:80%px"
			data-options="
				url: '<?php echo U('Rate/meslist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,    //让列自适应表格的宽度。
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				idField: 'id',
				singleSelect: false,
			"
			>
		<thead>
			<tr>
				<th field="content" align="center" width="150">消息内容</th>
				<th field="send_time" align="center" >发布时间</th>
				<th field="accept" align="center" >收信人</th>
				<!-- <th field="f" align="center" formatter="show_manger" >操作</th> -->
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="height:40px;">
		<div>
				<table>
					<tr>
						<td>
							<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="add()">发布消息</a>
						</td>
						<td>收信人id:<input class="easyui-validatebox" id="accept_id" type="text" name="accept_id" size="4" ></td>
						<td>收信人昵称:<input class="easyui-validatebox" id="accept_name" type="text" name="accept_name" size="5" ></td>
						<td>发布时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="start" name="start">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="end" name="end"></td>
						<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>
				</table>
	</div>
	</div>
	<!--新增&修改-->
	<div id="dlg" class="easyui-dialog" title="修改信息" closed="true" buttons="#dlg-button" style="width:400px;height:320px;">
			   <form id="fm" method="post">
				<div class="fitem">
					<label>发送方式:</label>
					<input type="radio" name="type"  value="1" class="easyui-validatebox"/>id&nbsp;&nbsp;
					<input type="radio" name="type" value="2" class="easyui-validatebox"/>昵称
				</div>
				<div class="fitem">
					<label>收信人:</label>
					<input name="accept"  class="easyui-validatebox"/>
					<input type="hidden" name="id" />
				</div>
				<div class="fitem">
					<label>内容:</label>
					<textarea name="content" class="easyui-validatebox" style="width:175px;height:67px;">
					</textarea>	
				</div>
				</form>
			<div id="dlg-button">
				<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
			</div>
	</div>
	<!--新增&修改-->
</body>
<script type="text/javascript">
	var url;
	//搜索
	function doSearch(){
		$('#dg').datagrid('load',{
			accept_id: $('#accept_id').val(),
			accept_name: $('#accept_name').val(),
			start: $('#start').val(),			
			end: $('#end').val(),		
		});
	}
	//管理回调
	function show_manger(val,row){
		return "<a href='javascript:;' onclick='edit("+row.id+")' >修改消息</a>&nbsp;/&nbsp;<a href='javascript:;' onclick='del("+row.id+")'>删除消息</a>";
	}
	//展示修改信息
	function add(){
		$('#fm').form('clear');
		$('#dlg').dialog('open').dialog('setTitle','发布消息');
		url = "<?php echo U('Rate/add');?>";
	}
	//提交
	function save(){
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
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: result.msg
						});
					}
				}
		 });	
	}
	//删除
	function del(id){
		$.ajax({
			    type:'post',
				 url:"__APP__/Rate/del",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                       	$('#dg').datagrid('reload');					
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
						});					
					}
				}
		});
	}
	function edit(id){
		$.ajax({
			    type:'post',
				 url:"__APP__/Rate/show_edit",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                        $('#fm').form('clear');
						$('#dlg').dialog('open');
					    $('#fm').form('load',row);
						url = '/Manerger/index.php/Rate/save';
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