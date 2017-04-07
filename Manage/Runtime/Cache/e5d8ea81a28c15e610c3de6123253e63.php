<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>电话初审页</title>
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
<body class="easyui-layout" style="margin: 0 auto; width:99%;">
 <div  data-options="region:'center',border:false">
 <!--操作演示结束，后面还要封闭div-->
	<table id="dg" class="easyui-datagrid" toolbar='#toolbar' 
			data-options="
				url: '<?php echo U('LoanManage/meanlist',array('plan'=>4));?>',
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
				<th field="loan_num" align="center" width="20%">申请编号</th>
				<th field="uid" align="center" width="15%">UID</th>
				<th field="name" align="center" width="15%">申请人姓名</th>
				<th field="card_no" align="center" width="15%">身份证</th>
				<th field="loan_money" align="center" width="15%">借款金额</th>
				<th field="time_limit" align="center" width="15%">借款期限</th>
				<th field="check_time" align="center" width="25%">资料审核通过时间</th>
				<th field="check_name" align="center" width="25%">审核员</th>
				<th field="d"  align="left" width="10%" formatter="show_manger">操作</th>
			</tr>
		</thead>
	</table>
    </div>
</body>
	<script type="text/javascript">
		function show_manger(val,row){
			   return '<a href="__APP__/LoanManage/show_fir/id/'+row.id+'" class="easyui-linkbutton" iconCls="icon-edit" plain="true">审核</a>'; 
		}
	</script>
</html>