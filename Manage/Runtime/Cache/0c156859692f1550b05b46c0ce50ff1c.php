<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>用户管理</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
	

   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.form.js"></script>
   <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>

 <script src="/Public/admin/js/artDialog/artDialog.js?skin=twitter"></script>
  <script src="/Public/admin/js/artDialog/plugins/iframeTools.js"></script>
   
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
<body class="easyui-layout" style="margin: 0 auto; width:99%;">

 <div  data-options="region:'center',border:false">
 <!--操作演示结束，后面还要封闭div-->
	<table id="dg" class="easyui-datagrid" toolbar='#toolbar' 
			data-options="
				url: '<?php echo U('User/userlist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,
				singleSelect: true,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30]
			">
		<thead>
			<tr>
				<th field="id">UID</th>
				<th field="name" align="left">申请人</th>
				<th field="phone" align="left" width="50">电话</th>
				<th field="create_time" align="left" width="50">注册时间</th>
				<th field="dark_status" align="left" formatter="show_status" width="50">状态</th>
				<th field="d" formatter="showmanger" width="50">操作</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="margin-top:5px;">
			<form  method="post" action="<?php echo U('User/userlist');?>">
				<table>
					<tr>
						<td>uid:<input style="width:150px" class="easyui-validatebox" name="uid" type="text" id="uid" value="" onmouseover="this.value=''" ></td>
						<td>用户名:<input style="width:150px" class="easyui-validatebox" name="username" type="text" id="username" value="" onmouseover="this.value=''" ></td>
						<td>手机:<input style="width:150px" class="easyui-validatebox" name="phone" type="text" id="phone" value="" onmouseover="this.value=''" ></td>
					  <td>&nbsp;注册日期:<input  type="text" style="width:85px;" id="reg_start" class="Wdate"  onClick="WdatePicker()">
						  -<input  type="text" style="width:85px;" id="reg_end" class="Wdate"  onClick="WdatePicker()">			
					  </td>
					  <td>状态：<select name="dark_status" id="dark_status">
									<option value="">-请选择-</option>
									<option value="2">正常</option>
									<option value="1">小黑屋</option>
								</select>
					  </td>
						<td>
 						  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>
				</table>
			</form>
	</div>	
   </div>
</body>
	<script type="text/javascript">
		
	 function doSearch(){
		$('#dg').datagrid('load',{
			id: $('#uid').val(),
			name: $('#username').val(),
			phone: $('#phone').val(),
			regstart: $('#reg_start').val(),
			regend: $('#reg_end').val(),
			dark_status: $('#dark_status').val(),			
		});
	 }
	function showmanger(val,row){
		if(row.dark_status == 1){
			str = "<a href='<?php echo U('User/detail');?>&id="+row.id+"' >详情信息</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href='javascript:;' onclick='change_light("+row.id+")'>更改状态</a>";
		}else{
			str = "<a href='<?php echo U('User/detail');?>&id="+row.id+"' >详情信息</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href='javascript:;' onclick='change_dark("+row.id+")'>拉入黑名单</a>";
		}
		
		return str;
	}
	function show_status(val,row){
		if(val == 1){
			val = '<font color="red">小黑屋</font>';
		}else{
			val = '<font color="green">正常</font>';
		}
		return val;
	}
	function change_dark(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('LoanManage/dark');?>",
				data:{'uid':id},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						window.location.href = '/Manerger/index.php/User/index';
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: data.msg
						});
					}
				}
		});
	}
	function change_light(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('LoanManage/light');?>",
				data:{'uid':id},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						window.location.href = '/Manerger/index.php/User/index';
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: data.msg
						});
					}
				}
		});
	}
	</script>
</html>