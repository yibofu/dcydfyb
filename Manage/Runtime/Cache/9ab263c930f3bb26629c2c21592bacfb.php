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
				url: '<?php echo U('User/messlist',array('is_admin'=>2));?>',
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
				<th field="content" align="center" width='190'>消息内容</th>
				<th field="send_id" align="center">发消息用户id</th>
				<th field="accept_id" align="center">接收消息用户id</th>
				<th field="send_time" align="center" width='60'>发送时间</th>
				<th field="d" formatter="show_manage" align="center">管理</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="height:40px;">
		<div>
				<table>
					<tr>
						<td>消息内容：<input class="easyui-validatebox" id="content" type="text" name="content"></td>
						<td>发消息用户id:<input class="easyui-validatebox" id="send_id" type="text" name="send_id" size="4" ></td>
						<td>收消息用户id:<input class="easyui-validatebox" id="accept_id" type="text" name="accept_id" size="4" ></td>
						<td>发送时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="start" name="start">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="end" name="end"></td>
						<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>
				</table>
	</div>
	</div>
</body>

<script type="text/javascript">
	//搜索
	function doSearch(){
		$('#dg').datagrid('load',{
			content: $('#content').val(),
			send_id: $('#send_id').val(),
			accept_id: $('#accept_id').val(),
			start: $('#start').val(),			
			end: $('#end').val(),		
		});
	}
	//操作回调
	function show_manage(val,row){
		var str = '';
		str = "<a href='javascript:;' onclick='del("+row.id+")' >删除</a>";
		return str;
	}
	function del(id){
		$.ajax({
			    type:'post',
				 url:"__APP__/User/del_mes",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row.success){
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
</script>
</html>