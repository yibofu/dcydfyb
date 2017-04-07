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
				url: '<?php echo U('Loan/checklist');?>',
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
				<th field="bianhao" align="center">编号</th>
				<th field="uid" align="center">UID</th>
				<th field="name" align="center">申请人姓名</th>
				<th field="phone" align="center" >手机号</th>
				<th field="corpus" align="center" >借款金额</th>
				<th field="time_limit" align="center" >借款期限</th>
				<th field="content" align="left">应还款</th>
				<th field="real_money" align="center" >实际还款金额</th>
				<th field="repay_time" align="center" >到期还款日</th>
				<th field="real_repay_time" align="center">实际还款时间</th>
				<th field="status" align="center">还款状态</th>
				<th field="is_overdue" align="center">逾期状态</th>
				<th field="money_status" align="center" >金额状态</th>
				<th field="is_check" align="center" >还款核对</th>
				<th field="desc" align="center" width="30%">还款备注</th>
				<th field="d"  align="left"  formatter="show_manger">操作</th>
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
	<!----->
		<div id="check_detail" class="easyui-dialog" title="收款记录" style="width:500px;height:450px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#detail_fm').form('submit',{
								url: '<?php echo U('Loan/submit');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#check_detail').dialog('close');		// close the dialog
										window.location.href='/Manerger/index.php/Loan/check';
									} else {
										$.messager.show({
											title: '出错啦！！',
											msg: result.mesg
										});
									}
								}
							});
					}
				},{
					text:'撤消',
					handler:function(){
						$('#check_detail').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
			<form id="detail_fm" method="post" novalidate >
				<div class="fitem" style="margin-top:10px;" >
					<label>还款账号:</label>
					 <input class="easyui-validatebox" type="text" name="accout"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>账号姓名:</label>
					 <input class="easyui-validatebox" type="text" name="name"></input>
				</div>	
				<div class="fitem" style="margin-top:10px;">
					<label>还款银行:</label>
					 <input class="easyui-validatebox" type="text" name="bank"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>还款流水号:</label>
					 <input class="easyui-validatebox" type="text" name="repay_water"></input>
				</div>		
				<div class="fitem" style="margin-top:10px;">
					<label>还款金额:</label>
					 <input class="easyui-validatebox" type="text" name="money"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>还款方式:</label>
					 <select name="way">
						<option value="">-请选择-</option>
						<option value="1">支付宝</option>
						<option value="2">国付宝</option>
						<option value="3">人工</option>
					 </select>
				</div>	
				<div class="fitem" style="margin-top:10px;">
					<label>收款核查:</label>
					 <select name="check">
						<option value=''>-请选择-</option>
						<option value="1">已到账</option>
						<option value="2">未到账</option>
					 </select>
				</div>
				<div class="fitem" style="margin-top:10px;">
					<label>金额状态:</label>
					<select name="status">
						<option value="">-请选择-</option>
						<option value="1">正常</option>
						<option value="2">异常</option>
					 </select>
				</div>
				<div class="fitem" style="margin-top:10px;">
					<label>备注详情:</label>
					 <textarea name="desc" style="width:178px;;height:67px;"></textarea>
				</div>
					 <input type="hidden" name="rid" id="rid"/>
					 <input type="hidden" name="id" />
			</form>
			</div>
	</div>
</body>
	<script type="text/javascript">
		 function show_manger(val,row){
			   return '<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true"  onclick="check('+row.id+')">核对</a>'; 
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
		function check(id){
			$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Loan/detail');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					$('#detail_fm').form('load',data);
					$('#rid').val(id);
					$('#check_detail').dialog('open');
				}
			});
		}
	</script>
</html>