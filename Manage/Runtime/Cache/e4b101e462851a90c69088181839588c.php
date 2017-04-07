<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>新进审核</title>
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
				url: '<?php echo U('LoanManage/datalist',array('plan'=>1));?>',
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
				<th field="name" align="center" width="15%">申请人</th>
				<th field="loan_money" align="center" width="15%">借款金额</th>
				<th field="time_limit" align="center" width="15%">借款期限/月</th>
				<th field="creatime" align="center" width="25%">申请时间</th>
				<th field="d"  align="left" width="10%" formatter="show_manger">操作</th>
			</tr>
		</thead>
	</table>
    </div>
	<!--编辑内容-->
<div id="dlg" class="easyui-dialog" title="分配审核员" closed="true" buttons="#dlg-buttons" style="width:680px;height:320px;">
        <form id="fm" method="post">
			<div class="fitem">
				<label>编号</label>
				<input name="loan_num" class="easyui-validatebox" disabled>
			</div>			
			<div class="fitem">
				<label>申请人</label>
				<input name="name" class="easyui-validatebox" disabled>
			</div>
			
			<div class="fitem">
				<label>借款金额:</label>
				<input name="loan_money" class="easyui-validatebox" disabled>
			</div>
			
			
			<div class="fitem">
				<label>申请时间:</label>
				<input name="creatime" class="easyui-validatebox" disabled>
			</div>
			<div class="fitem">
				<label>审核人:</label>
				<select name="check_id" id="check_id">
							   <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</form>
	    <div id="dlg-buttons">
			<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save_allot()">保存</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
		</div>
	</div>
	<!--------------表单结束--------------->
</body>
	<script type="text/javascript">
		var url;
		function check(id){
			$.ajax({
			    type:'post',
				 url:"__APP__/LoanManage/allot",
				data:{'id':id},
				success:function(data){
						row = eval('('+data+')');
						if (row){
							$('#fm').form('clear');
							$('#dlg').dialog('open').dialog('setTitle','编辑管理员');
							$('#fm').form('load',row);                           
							url = '<?php echo U('LoanManage/update');?>&id='+row.id;						
						}else{
							$.messager.show({
								title: '出错啦！！',
								msg: '请选择一条'
							});					
						}
				  }
			});
			
		}
		function save_allot(){
			$('#fm').form('submit',{
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
								msg: result.msg,
							});
						} else {
							$.messager.show({
								title: '出错啦！！',
								msg: result.msg,
							});
						}
					}
			 });
		}
		 function show_manger(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="check('+row.id+')">分配审核员</a>'; 
		}
	</script>
</html>