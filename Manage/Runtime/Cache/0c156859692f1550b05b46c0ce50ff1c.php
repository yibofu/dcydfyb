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
				<th field="nickname" align="center" width="20%">申请人</th>
				<th field="Phone" align="center" width="30%">电话</th>
				<th field="ctime" align="center" width="30%">注册时间</th>
				<th field="is_vip" align="center" formatter="show_status" width="20%">是否是VIP</th>
				<!--<th field="d" formatter="showmanger" align="center" width="30%">操作</th>-->
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="margin-top:5px;">
			<form  method="post" action="<?php echo U('User/userlist');?>">
				<table>
					<tr>
						<td>uid:<input style="width:150px" class="easyui-validatebox" name="id" type="text" id="id" value="" onmouseover="this.value=''" ></td>
						<td>用户名:<input style="width:150px" class="easyui-validatebox" name="nickname" type="text" id="nickname" value="" onmouseover="this.value=''" ></td>
						<td>手机:<input style="width:150px" class="easyui-validatebox" name="Phone" type="text" id="Phone" value="" onmouseover="this.value=''" ></td>
					  	<td>&nbsp;注册日期:<input  type="text" style="width:85px;" id="reg_start" class="Wdate"  onClick="WdatePicker()">
						  -<input  type="text" style="width:85px;" id="reg_end" class="Wdate"  onClick="WdatePicker()">			
					  	</td>
					  	<td>状态：<select name="is_vip" id="is_vip">
									<option value="">-请选择-</option>
									<option value="1">已开通</option>
									<option value="2">未开通</option>
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
			id: $('#id').val(),
			nickname: $('#nickname').val(),
			Phone: $('#Phone').val(),
			regstart: $('#reg_start').val(),
			regend: $('#reg_end').val(),
			is_vip: $('#is_vip').val(),
		});
	 }
//	function showmanger(val,row){
//
//		str = "<a href='<?php echo U('User/detail');?>&id="+row.id+"' >详情信息</a>";
//
//		return str;
//	}
	function show_status(val,row){
		if(val == 1){
			val = '<font color="green">已开通</font>';
		}else{
			val = '<font color="red">未开通</font>';
		}
		return val;
	}


	</script>
</html>