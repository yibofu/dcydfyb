<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>身份审核列表</title>
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
				url: '<?php echo U('LoanApplication/dochecklist');?>',
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
				<th field="loan_num" align="center" width="20%">编号</th>
				<th field="name" align="center" width="15%">申请人</th>
				<th field="job" align="center" width="20%">社会角色</th>
				<th field="loan_money" align="center" width="15%">借款金额</th>
				<th field="loan_installments" align="center" width="15%">借款期限</th>
				<th field="create_time" align="center" width="25%">申请时间</th>
				<th field="status" align="center" width="25%" formatter="show_status">状态</th>
				<th field="username" align="center" width="25%">操作员</th>
				<th field="d"  align="left" width="10%" formatter="show_manger">操作</th>
			</tr>
		</thead>
	</table>
		<div id="toolbar" style="height:80px;">
			<div>
				<form  method="post">
					<table>
						<tr>
						  <td>
							编号:<input  type="text" style="width:85px;" id="loan_num" name="loan_num">&nbsp;&nbsp;
						  </td>	
						   <td>
							申请人:<input  type="text" style="width:85px;" id="name" name="name">&nbsp;&nbsp;
						  </td>	
						   <td>社会角色：
							<select name="job" id="job">
							    <option value="">请选择</option>
							   <option value="1">一般员工</option>
							   <option value="2">内勤</option>
							   <option value="3">外勤</option>
							   <option value="4">工人</option>
							   <option value="5">销售/中介/业务代表</option>
							   <option value="6">营业/服务</option>
							   <option value="7">个体商户</option>
							   <option value="8">学生</option>
							   <option value="9">管理人员</option>
							   <option value="10">社会角色</option>
							</select>
						   <td>
							借款金额:<input  type="text" style="width:85px;" id="loan_money" name="loan_money">&nbsp;&nbsp;
						  </td>
						</tr>
						<tr>		
						   <td>
							借款期限:<input  type="text" style="width:85px;" id="loan_installments" name="loan_installments">&nbsp;&nbsp;
						  </td>			
						  <td>申请时间:<input  type="text" style="width:85px;" id="go_time" name="go_time" class="Wdate"  onClick="WdatePicker()">
							  -<input  type="text" style="width:85px;" id="etime" class="Wdate"  onClick="WdatePicker()" name="etime">&nbsp;&nbsp;			
						  </td>					
						  <td>操作员：
							<select name="check_id" id="check_id">
							    <option value="">请选择</option>
							   <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						  </td>
						  <td>状态：
							<select name="status" id="status">
							    <option value="">请选择</option>
							   <option value="1">已通过</option>
							   <option value="2">未通过</option>
							   <option value="3">未审核</option>
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
    </div>
</body>
	<script type="text/javascript">
		var url;
		function check(){
			$.ajax({
			    type:'post',
				 url:"__APP__/LoanApplication/allot",
				data:{id:id},
				success:function(data){
						row = eval('('+data+')');
						if (row){
							$('#fm').form('clear');
							$('#dlg').dialog('open').dialog('setTitle','编辑管理员');
							$('#fm').form('load',row);                           
							url = '<?php echo U('LoanApplication/update');?>&id='+row.id;						
						}else{
							$.messager.show({
								title: '出错啦！！',
								msg: '请选择一条'
							});					
						}
				  }
			});
		}
		 function show_manger(val,row){
			   return '<a href="/Manerger/index.php/Check/detail/id/'+row.id+'" class="easyui-linkbutton" iconCls="icon-edit" plain="true">审核</a>'; 
		}
		function show_status(val,row){
			if(val == 1){
				return '<font color="green">已通过</font>';
			}else if(val == 2){
				return '<font color="red">未通过</font>';
			}else if(val == 3){
				return '<font color="red">取消</font>';
			}else if(val == 0){
				return '<font color="red">未审核</font>';
			}
		}
		function doSearch(){

			$('#dg').datagrid('load',{
				loan_num: $('[name=loan_num]').val(),
				name:$('[name=name]').val(),
				loan_money:$('[name=loan_money]').val(),
				loan_installments:$('[name=loan_installments]').val(),
				job:$('[name=job]').val(),
				go_time: $('#go_time').val(),
				etime: $('#etime').val(),
				check_id: $('#check_id').val(),
				status: $('#status').val(),
			});
		}
	</script>
</html>