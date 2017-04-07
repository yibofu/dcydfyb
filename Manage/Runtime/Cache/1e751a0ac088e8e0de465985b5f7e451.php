<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>放贷管理</title>
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
				url: '<?php echo U('Loan/datalist');?>',
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
				<th field="loan_num" align="center"> 编号 </th>
				<th field="deal_num" align="center"> 协议编号 </th>
				<th field="uid"  align="center"> UID </th>
				<th field="name" align="center"> 申请人 </th>
				<th field="card_no" align="center"> 身份证号 </th>
				<th field="loan_money"  align="center"> 借款金额 </th>
				<th field="loan_status"  align="center" formatter="show_check"> 审核状态 </th>
				<th field="check_time" align="center"> 审核通过时间 </th>
				<th field="len_money" align="center"> 放贷金额 </th>
				<th field="len_time" align="center"> 放贷时间 </th>
				<th field="len_status" align="center" formatter="show_status"> 放贷状态 </th>
				<th field="check_name" align="center"> 审核员 </th>
				<th field="d" align="center" formatter="show_operat"> 操作 </th>
			</tr>
		</thead>
	</table>
	<!---工具条--->
	<div id="toolbar" style="height:70px;">
		<div>
			<form  method="post" action="<?php echo U('Loan/loanlist');?>">
				<table>
					<tr>
						<td>协议编号：<input class="easyui-validatebox" id="deal_num" type="text" name="deal_num" >
						&nbsp;&nbsp;&nbsp;&nbsp;审核状态<select name="loan_status" id="loan_status">
								<option value="">-请选择-</option>
								<option value="1">通过</option>
								<option value="2">未通过</option>
							</select>
						</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;申请人：<input class="easyui-validatebox" id="name" type="text" name="name" ></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;身份证号：<input class="easyui-validatebox" id="card_no" type="text" name="card_no" ></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;借款金额：<input class="easyui-validatebox" id="loan_money" type="text" name="loan_money" ></td>
					</tr>
					<tr>
						<td colspan=4>审核通过时间：<input type="text"  class="Wdate"  onClick="WdatePicker()" id="check_start" name="check_start">至<input type="text" class="Wdate"  onClick="WdatePicker()"  id="check_end" name="check_end">&nbsp;&nbsp;&nbsp;&nbsp;放贷时间：<input type="text"  class="Wdate"  onClick="WdatePicker()" id="len_start" name="len_start">至<input  type="text" class="Wdate"  onClick="WdatePicker()"  id="len_end" name="len_end"></td>
					</tr>
					<tr>
						<td colspan=3>&nbsp;&nbsp;&nbsp;&nbsp;放贷金额：<input class="easyui-validatebox" id="len_money" type="text" name="len_money" >
						&nbsp;&nbsp;&nbsp;&nbsp;放贷状态：
							<select name="len_status" id="len_status">
								<option value="">-请选择-</option>
								<option value="1">放贷成功</option> 
								<option value="2">放贷失败</option> 
								<option value="3">未处理</option> 
							</select>
						&nbsp;&nbsp;&nbsp;&nbsp;操作员：
							<select name="check_id" id="check_id">
								<option value="">-请选择-</option>
								<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="$vo.id"><?php echo ($vo["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
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
	<!--------弹出框----------->
	
		<div id="dlg" class="easyui-dialog" style="width:600px;height:450px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
		<form id="ff" method="post" style="margin-top:40px;" novalidate>
			<div id="tt" class="easyui-tabs" style="width:500px;height:auto;"> 
			    <div title="放贷成功-已汇款处理" style="overflow:auto;padding:20px;">  
					<div class="fitem">
						<label>汇款账号:</label>
						<input id="lend_accout" class="easyui-validatebox" size="35px" type="text" name="lend_accout" >
					</div>
					<div class="fitem">
						<label>汇款方式:</label>
						<input id="lend_way" class="easyui-validatebox" size="35px" type="text" name="lend_way" >
					</div>
					<div class="fitem">
						<label>汇款流水号:</label>
						<input id="lend_num" class="easyui-validatebox" size="35px" type="text" name="lend_num" >
					</div>
					<div class="fitem">
						<label>汇款金额:</label>
						<input id="len_money" class="easyui-validatebox" size="35px" type="text" name="len_money" >
					</div>
					<div class="fitem">
						<label>收款人姓名:</label>
						<input id="name" class="easyui-validatebox" size="35px" type="text" name="name" >
					</div>
					<div class="fitem">
						<label>收款账号:</label>
						<input id="bank_no" class="easyui-validatebox" size="35px" type="text" name="bank_no" >
					</div>
					<div class="fitem">
						<label>收款所属银行:</label>
						<input id="bank" class="easyui-validatebox" size="35px" type="text" name="bank" >
					</div>
			    </div>  
			    <div title="放贷失败-问题处理" style="padding:20px;">  
			    	<div id="fail_div">
			    		<input type="radio" name="fail" value="1" />汇款失败，借款人银行卡问题<br/>
                   		<input type="radio" name="fail" value="2" />借款申请有问题，撤销该次申请
			    	</div>
			    </div>

			</div>
			<input type="hidden" id="id" name="id" value="" />
		</form>
	</div>
	
	<div id="dlg-buttons">
		<a href="#" id="sub_btn" class="easyui-linkbutton"  iconCls="icon-edit" onClick="submitForm()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearForm()">取消</a>
	</div>
	
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.form.js"></script>
</body>
<script type="text/javascript">
	//操作
	function show_operat(val,row){
		var str = "";
		if(row.len_status==1){
			str = "<a target='bank' href='/Manerger/index.php/Check/detail/id/"+ row.id +"'>详情</a>";
		}else{
			str = "<a target='bank' href='/Manerger/index.php/Check/detail/id/"+ row.id +"'>详情</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href='javascript:void(0);' onClick='remit_money("+ row.id +");'>汇款</a>";
		}
		
		return str;
	}
	//汇款
	function remit_money(id){
		$("#lid").val(id);
		
		var common = {};
		common.id = id;
		$.ajax({
			type : "POST",
			data : common,
			url : "/Manerger/index.php/Loan/remit_mon",
			success:function(result){
				result = $.trim(result);//过滤空格
				var data = eval("("+ result +")");
				$('#dlg').dialog('open').dialog('setTitle','放贷处理');
				$('#ff').form('load',data);
			}
		})
		
		url = "<?php echo U('Loan/remit');?>";
	}

	function clearForm(){
		$('#ff').form('clear');
		$('#dlg').dialog('close');
	}

	function submitForm(){
		$('#ff').form('submit',{
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
				} else {
					$.messager.show({
						title: '出错啦！！',
						msg: result.msg
					});
				}
			}
		});
	}

	function doSearch(){
		$('#dg').datagrid('load',{
			deal_num: $('#deal_num').val(),
			loan_status: $('#loan_status').val(),
			name: $('#name').val(),
			card_no: $('#card_no').val(),
			loan_money: $('#loan_money').val(),
			check_start: $('#check_start').val(),
			check_end: $('#check_end').val(),
			len_start: $('#len_start').val(),
			len_end: $('#len_end').val(),
			len_money: $('#len_money').val(),
			len_status: $('#len_status').val(),				
			check_id: $('#check_id').val(),				
		});
	}
	function show_status(val,row){
		if(val == 1){
			val = '<font color="green">放贷成功</font>';
		}else if(val == 2){
			val = '<font color="red">放贷失败</font>';
		}else{
			val = '<font color="red">未放贷</font>';
		}
		return val;
	}
	function show_check(val,row){
		if(val ==1){
			val = '<font color="green">通过</font>';
		}else if(val == 2){
			val = '<font color="red">未通过</font>';
		}else{
			val = '<font color="red">未处理</font>';
		}
		return val;
	}
</script>
</html>