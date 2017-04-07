<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>用户管理</title>
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
				url: '<?php echo U('Gift/gmanagelist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true, 
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
				<th field="id" align="center">礼品id</th>
				<th field="pid" align="center">礼品pid</th>
				<th field="name" align="center">礼品名称</th>
				<th field="money" align="center">礼品金额</th>
				<th field="status" formatter="show_status" align="center">状态</th>
				<th field="ctime" align="center" width='60'>添加时间</th>
				<th field="d" formatter="show_manage" width="130" align="center">管理</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="height:60px;">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" 		onClick="add()">添加信息</a>
			<div>
				<table>
					<tr>
						<td>礼品id：<input class="easyui-validatebox" id="id" type="text" name="id" size='4'></td>
						<td>礼品名称：<input class="easyui-validatebox" id="name" type="text" name="name" size="5" ></td>
						<td>礼品金额：<input class="easyui-validatebox" id="money" type="text" name="money" size="5" ></td>
						<td>状态：
							<select name="status" id="status">
								<option value="">--请选择--</option>
								<option value="1">上线</option>
								<option value="2">下线</option>
							</select>
						</td>
						<td>添加时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="cstart" name="cstart">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="cend" name="cend"></td>
						<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>

				</table>
			</div>
	</div>

	<!-- 增加修改 -->
	<div id="dlg" class="easyui-dialog" title="设置" closed="true" button="#dlg-buttons" style="width:680px;height:320px;">
		<div class="ftitle">礼品名称</div>
			<form id="fm" method="post" >

				<div class="fitem">
					<label>礼品名称:</label>
					<input name="name" class="easyui-validatebox">
				</div>
				<div class="fitem">
					<label>礼品金额:</label>
					<input name="money" class="easyui-validatebox">
				</div>
				<div class="fitem">
					<label>礼品种类:</label>
					<select name="check_id" id="check_id">

					</select>
				</div>
				<div class="fitem">
					<label>礼品状态:</label>
						<select name="status">
							<option value="1">上线</option>
							<option value="2">下线</option>
						</select>
				</div>
			</form>
			<div id="dlg-buttons">
				<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
			</div>
	</div>
</body>
<script type="text/javascript">


	//上线下线显示的颜色
	function show_status(val,row){
		if(val == 1){
			val = '<font color="green">上线</font>';
		}else if(val == 2){
			val = '<font color="red">下线</font>';
		}
			return val;
		}

	//搜索
	function doSearch(){
		$('#dg').datagrid('load',{
			id: $('#id').val(),
			name: $('#name').val(),
			money: $('#money').val(),
			status: $('#status').val(),
			cstart: $('#cstart').val(),
			cend: $('#cend').val(),					
		});
	}
	//操作回调
	function show_manage(val,row){
		var str = '';
		str = "<a href='javascript:;' onclick='gedit("+row.id+")'>修改种类</a>&nbsp;/&nbsp;<a href='javascript:;' onclick='del("+row.id+")' >删除种类</a>";
		return str;
	}

	var url;
	function add(){
		var row = $('#dg').datagrid('getSelected'); 
		$('#check_id').find('option').remove();
		$('#dlg').dialog('open').dialog('setTitle','礼品名称');
		url = "<?php echo U('Gift/gadd');?>";
		$.post("__APP__/Gift/GiftList",{},function(data){
			data=eval ("("+data+")");
			// alert(data);
			for(var i=0;i<data.length;i++){
				$("#check_id").append("<option value="+data[i]['id']+">"+data[i]['name']+"</option>");	
			}
		});
	}

	function save(){
		var ul=$('#check_id').find('option:selected').attr('value');
		$('#fm').form('submit',{
				url: url+"&id="+ul,
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

	var url;
	function gedit(id){
		$.ajax({
			type:'post',
				url:"__APP__/Gift/show_gedit",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                        $('#fm').form('clear');
						$('#dlg').dialog('open');
					    $('#fm').form('load',row);
						url = '<?php echo U('Gift/gupdate');?>&id='+row.id;
					}else{
						$.messager.show({
							title: '出错啦！',
							msg: '请选择一条'
						});					
					}
				}
		});
	}

	function del(id){
		$.ajax({
			type:'post',
			url:"__APP__/Gift/del",
			data:{id,id},
			success:function(data){
				row=eval('('+data+')');
				if(row){
					$('#dg').datagrid('reload');
				}else{
					$.messager.show({
						title:'出错了！',
						msg:'请选择一条'
					});
				}
			}
		});
	}
</script>
</html>