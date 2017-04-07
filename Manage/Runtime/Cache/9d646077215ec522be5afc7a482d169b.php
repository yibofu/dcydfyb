<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>提现记录</title>
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
				url: '<?php echo U('Water/reclist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,    //让列自适应表格的宽度。
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				showFooter: true,
				idField: 'id',
				singleSelect: false,
			"
			>
		<thead>
			<tr>
				<th field="order_num" align="center">编号</th>
				<th field="uid" align="center">用户id</th>
				<th field="name" align="center">用户昵称</th>
				<th field="surplus" align="center">账户余额</th>
				<th field="extract" align="center">提现金额</th>
				<th field="procedure" align="center">手续费</th>
				<th field="real" align="center">实际到账金额</th>
				<th field="bank" align="center">提现银行</th>
				<th field="bank_no" align="center">银行卡号</th>
				<th field="bank_name" align="center">真实姓名</th>
				<th field="status" align="center" formatter="show_status">状态</th>
				<th field="ctime" align="center">提现时间</th>
				<th field="manage_time" align="center">处理时间</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar" style="height:70px;">
		<div>
				<table>
					<tr>
						<td>编号：<input class="easyui-validatebox" id="order_num" type="text" name="order_num" size='4'></td>
						<td>用户id：<input class="easyui-validatebox" id="uid" type="text" name="uid" size="5" ></td>
						<td>用户昵称：<input class="easyui-validatebox" id="name" type="text" name="name" size="5" ></td>
						<td>提现银行：<input class="easyui-validatebox" id="bank" type="text" name="bank" size="5" ></td>
						<td>银行卡号<input class="easyui-validatebox" id="bank_no" type="text" name="bank_no" size="5" ></td>
						<td>真实姓名<input class="easyui-validatebox" id="bank_name" type="text" name="bank_name" size="5" ></td>
						<td>用户状态：
							<select name="status" id="status">
								<option value=''>-请选择-</option>
								<option value='1'>成功</option>
								<option value='2'>失败</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>提现时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="cstart" name="cstart">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="cend" name="cend"></td>
						<td>处理时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="mstart" name="mstart">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="mend" name="mend"></td>
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
			order_num: $('#order_num').val(),
			uid: $('#uid').val(),
			name: $('#name').val(),
			bank: $('#bank').val(),
			bank_no: $('#bank_no').val(),
			bank_name: $('#bank_name').val(),
			status: $('#status').val(),
			cstart: $('#cstart').val(),
			cend: $('#cend').val(),			
			mstart: $('#mstart').val(),			
			mend: $('#mend').val(),			
		});
	}
	//datagrid状态回调
	function show_status(val,row){
		if(val == 1){
			val = '<font color="green">已处理</font>';
		}else if(val == 2){
			val = '<font color="red">未处理</font>';
		}
		return val;
	}
</script>
</html>