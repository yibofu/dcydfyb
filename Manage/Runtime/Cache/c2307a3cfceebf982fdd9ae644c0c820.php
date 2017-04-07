<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>借款查询</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/demo.css">
     
   <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
 <style type="text/css">
		#ff{
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
		
.showimg{background: url("/Public/upload/apps/selectimg/images/common/bg/phone.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0); height: 289px;width:550px;}
.showimg img{width:398px;height:241px;margin:24px 0 0 57px;}
.demo p{line-height:32px}
.btn{position: relative;overflow: hidden;margin-right: 4px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.btn input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
.progress { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}
.bar {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
.files{ margin:10px 0}
.delimg{margin-left:20px; color:#090; cursor:pointer}
	</style>
</head>
<body>
	<table id="dg" class="easyui-datagrid" toolbar="#toolbar" style="width:90%px;height:80%px"
			data-options="
				url: '<?php echo U('Loanquery/loanlist');?>',
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
				<th field="loan_num"> 编号 </th>
				<th field="uid"> UID </th>
				<th field="name">申请人姓名</th>
				<th field="card_no"> 身份证 </th>
				<th field="deal_num"> 协议编号</th>
				<th field="loan_money"> 借款总额 </th>
				<th field="time_limit"> 借款期限 </th>
				<th field="creatime" > 申请时间 </th>
				<th field="plan" formatter="show_plan"> 审核进度 </th>
				<th field="loan_status" formatter="show_status"> 状态 </th>
				<th field="check_name"> 审核员 </th>
				<th field="d" formatter="show_manage"> 操作 </th>
			</tr>
		</thead>
	</table>
	<!---工具条--->
	<div id="toolbar" style="height:70px;">
		<div>
			<form  method="post" action="<?php echo U('Loan/loanlist');?>">
				<table>
					<tr>
						<td>编号：<input class="easyui-validatebox" id="loan_num" type="text" name="loan_num" ></td>
						<td>姓名：<input class="easyui-validatebox" id="name" type="text" name="name" ></td>
						<td>手机号：<input class="easyui-validatebox" id="phone" type="text" name="phone" ></td>
						<td>借款金额：<input class="easyui-validatebox" id="loan_money" type="text" name="loan_money" ></td>
						<td>借款期限：<input class="easyui-validatebox" id="time_limit" type="text" name="time_limit" ></td>
					</tr>
					<tr>
						<td>申请时间：<input class="easyui-validatebox" id="stime" onClick="WdatePicker()" class="Wdate" type="text" name="stime" >至<input class="easyui-validatebox" id="etime" onClick="WdatePicker()" class="Wdate" type="text" name="etime" ></td>
						<td>审核进度：
							<select name="plan" id="plan">
								<option>-请选择-</option>
								<option value="1">新进审核</option>
								<option value="2">身份审核</option>
								<option value="3">资料审核</option>
								<option value="4">电话初审</option>
								<option value="5">收入核查</option>
								<option value="6">电话复核</option>
								<option value="7">代发快递</option>
								<option value="8">审核快递</option>
								<option value="9">电话终审</option>
								<option value="10">附件审核</option>
								<option value="11">最终审核</option>
							</select>
						</td>
						<td>操作员：
							<select name="check_id" id="check_id">
								<option>-请选择-</option>
								<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="$vo.id"><?php echo ($vo["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</td>
						<td></td>
						<td>
 						  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>
				</table>
			</form>
	</div>
	</div>
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.form.js"></script>
</body>
<script type="text/javascript">
	function doSearch(){
		$('#dg').datagrid('load',{
			loan_num: $('#loan_num').val(),
			name: $('#name').val(),
			phone: $('#phone').val(),
			loan_money: $('#loan_money').val(),
			time_limit: $('#loan_installments').val(),
			stime: $('#stime').val(),
			etime: $('#etime').val(),
			plan: $('#plan').val(),
			check_id: $('#check_id').val(),				
		});
	}
	function show_plan(val,row){
		if(val == 1){
			val = '新进审核';
		}else if(val == 2){
			val = '身份审核';
		}else if(val == 3){
			val = '资料审核';
		}else if(val == 4){
			val = '电话初审';
		}else if(val == 5){
			val = '收入核查';
		}else if(val == 6){
			val = '电话复核';
		}else if(val == 7){
			val = '代发快递';
		}else if(val == 8){
			val = '审核快递';
		}else if(val == 9){
			val = '电话终审';
		}else if(val == 10){
			val = '附件审核';
		}else if(val == 11){
			val = '最终审核';
		}else if(val == 12){
			val = '完成审核';
		}
		return val;
	}
	function show_status(val,row){
		if(val == 1){
			val = '<font color="green">通过</font>';
		}else if(val == 2){
			val = '<font color="red">未通过</font>';
		}else{
			val = '<font color="red">未处理</font>';
		}
		return val;
	}
	function show_manage(val,row){
		return "<a href='/Manerger/index.php/Check/detail/id/"+row.id+"' target='_blank'>查看</a>";
	}
</script>
</html>