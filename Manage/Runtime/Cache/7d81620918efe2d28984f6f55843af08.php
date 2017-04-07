<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>还款管理</title>
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
				url: '<?php echo U('Repay/datalist');?>',
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
				<th field="bianhao" align="center" width="20%">编号</th>
				<th field="uid" align="center" width="15%">UID</th>
				<th field="name" align="center" width="20%">申请人姓名</th>
				<th field="phone" align="center" width="20%">手机号</th>
				<th field="corpus" align="center" width="20%">借款金额</th>
				<th field="time_limit" align="center" width="20%">借款期限</th>
				<th field="content" align="left" width="25%">应还款</th>
				<th field="repay_time" align="center" width="25%">到期还款日</th>
				<th field="real_money" align="center" width="15%">实际还款金额</th>
				<th field="real_repay_time" align="center" width="25%">实际还款时间</th>
				<th field="status" align="center" width="25%">还款状态</th>
				<th field="is_overdue" align="center" width="25%">逾期状态</th>
				<th field="money_status" align="center" width="25%">金额状态</th>
				<th field="is_check" align="center" width="25%">还款核对</th>
				<th field="desc" align="center" width="30%">还款备注</th>
				<th field="d"  align="left" width="10%" formatter="show_manger">操作</th>
			</tr>
		</thead>
	</table>
	
		<div id="toolbar" style="height:70px;">
			<div>
				<form  method="post">
					<table>
						<tr>
						 <td>编号：<input class="easyui-validatebox" id="loan_num" type="text" name="loan_num" ></td>
						<td>uid：<input class="easyui-validatebox" id="uid" type="text" name="uid" ></td> 
						<td>姓名：<input class="easyui-validatebox" id="name" type="text" name="name" ></td>
						<td>手机号：<input class="easyui-validatebox" id="phone" type="text" name="phone" ></td>	
						<td>还款状态：
							<select name="status" id="status">
							   <option value="">请选择</option>
							   <option value="0">未审核</option>
							   <option value="1">未到账</option>
							   <option value="2">已到账</option>
							</select>
						  </td>
						</tr>
						<tr>	
						 <td>金额状态：
							<select name="money_status" id="money_status">
							   <option value="">请选择</option>
							   <option value="1">正常</option>
							   <option value="2">异常</option>
							</select>
						  </td>
							<td>
							   操作员：
								<select name="check_id" id="check_id">
								   <option value="">请选择</option>
								   <?php if(is_array($admins)): foreach($admins as $key=>$info): ?><option value="<?php echo ($info["id"]); ?>"><?php echo ($info["realname"]); ?></option><?php endforeach; endif; ?>
								</select>
							</td>
						  <td>
							应还款时间:<input style="width:105px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="shoudstart" name="shoudstart">至<input style="width:105px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="shoudend" name="shoudend">
						  </td>	
						   <td>
							实际还款时间:<input style="width:105px;"  class="Wdate"  onClick="WdatePicker()"  type="text" id="realystart" name="realystart">至<input style="width:105px;"  class="Wdate"  onClick="WdatePicker()" type="text"  id="realyend" name="realyend">
						  </td>	
							<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
    </div>
</body>
	<script type="text/javascript">
		 function show_manger(val,row){
			   return '<a href="/Manerger/index.php/Check/detail/id/'+row.lid+'" class="easyui-linkbutton" iconCls="icon-edit" plain="true"  target="_blank">查看</a>'; 
		}
		function doSearch(){

			$('#dg').datagrid('load',{
				bianhao: $('#bianhao').val(),
				time_limit:$('#time_limit').val(),
				loan_money:$('#loan_money').val(),
				status:$('#status').val(),
				check_id:$('#check_id').val(),
				shoudstart: $('#shoudstart').val(),
				shoudend: $('#shoudend').val(),
				realystart: $('#realystart').val(),
				realyend: $('#realyend').val(),
				money_status: $('#money_status').val(),
				
			});
		}
	</script>
</html>