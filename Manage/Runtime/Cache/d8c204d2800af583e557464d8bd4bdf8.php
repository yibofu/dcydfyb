<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>用户管理</title>
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
				url: '<?php echo U('User/datalist',array('sex'=>1));?>',
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
				<th field="id" align="center">用户id</th>
				<th field="userid" align="center">随机id</th>
				<th field="nickname" align="center">用户昵称</th>
				<th field="send" align="center">送礼金额</th>
				<th field="status" align="center" formatter="show_status">状态</th>
				<th field="ctime" align="center">注册时间</th>
				<th field="ltime" align="center">最后登录时间</th>
				<th field="d" formatter="show_manage" align="center">管理</th>
			</tr>
		</thead>
	</table>
	<!---工具条--->
	<div id="toolbar" style="height:40px;">
		<div>
				<table>
					<tr>
						<td>随机id：<input class="easyui-validatebox" id="userid" type="text" name="userid" size='4'></td>
						<td>用户昵称：<input class="easyui-validatebox" id="nickname" type="text" name="nickname" size="5" ></td>
						<td>用户状态：
							<select name="status" id="status">
								<option value=''>-请选择-</option>
								<option value='1'>正常</option>
								<option value='2'>禁用</option>
							</select>
						</td>
						<td>注册时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="cstart" name="cstart">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="cend" name="cend"></td>
						<td>最后登录时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="lstart" name="lstart">至<input style="width:90px;"  type="text" class="Wdate"  onClick="WdatePicker()"  id="lend" name="lend"></td>
						<td>
							  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
						</td>
					</tr>
				</table>
		</div>
	</div>
	<!--修改-->
	<div id="edit_dlg" class="easyui-dialog" title="修改信息" closed="true" buttons="#dlg-edit" style="width:400px;height:320px;">
			<div class="ftitle">修改信息</div>
			   <form id="edit" method="post">
			   <div class="fitem">
					<label>随机id:</label>
					<input name="userid"  class="easyui-validatebox" disabled />
					<input type="hidden" name="id" />
				</div>			
				<div class="fitem">
					<label>用户昵称:</label>
					<input name="nickname"  class="easyui-validatebox" disabled />
				</div>
				<div class="fitem">
					<label>登录密码:</label>
					<input name="pw"  class="easyui-validatebox">
				</div>
				<div class="fitem">
					<label>账户状态:</label>
					  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="status" id="edit_status">
						<option value="">-请选择-</option>
						<option value="1">正常</option>
						<option value="2">禁用</option>
					</select>
				</div>
				</form>
			<div id="dlg-edit">
				<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save_edit()">保存</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#edit_dlg').dialog('close')">取消</a>
			</div>
	</div>
	<!--修改结束-->
	<!--个人资料-->
	<div id="detail_dlg" class="easyui-dialog" title="个人资料修改" closed="true" buttons="#dlg-detail" style="width:420px;height:520px;">
			<div class="ftitle">个人资料修改</div>
			   <form id="detail" method="post">
				<input type="hidden" name="uid" />			
				<div class="fitem">
					<label>用户昵称:</label>
					<input name="nickname"  class="easyui-validatebox" disabled />
				</div>
				<div class="fitem">
					<label>所在城市:</label>
					<input name="city"  class="easyui-validatebox" />
				</div>
				<div class="fitem">
					<label>个性签名:</label>
					<input name="show"  class="easyui-validatebox">
				</div>
				<div class="fitem">
					<label>学校名称:</label>
					<input name="school"  class="easyui-validatebox">
				</div>
				<div class="fitem">
					<label>职业名称:</label>
					  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="job">
						<option value="">-请选择-</option>
						<option value="管理人员">管理人员</option>
						<option value="一般人员">一般人员</option>
						<option value="内勤">内勤</option>
						<option value="后勤">后勤</option>
						<option value="工人">工人</option>
						<option value="销售/中介/业务代表">销售/中介/业务代表</option>
						<option value="营业/服务员">营业/服务员</option>
						<option value="个体商户">个体商户</option>
						<option value="学生">学生</option>
						<option value="其他">其他</option>
					</select>
				</div>
				<div class="fitem">
					<label>所属星座:</label>
					  <select  data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="constellation">
						<option value="">-请选择-</option>
						<option value="白羊座">白羊座</option>
						<option value="金牛座">金牛座</option>
						<option value="双子座">双子座</option>
						<option value="巨蟹座">巨蟹座</option>
						<option value="狮子座">狮子座</option>
						<option value="处女座">处女座</option>
						<option value="天蝎座">天秤座</option>
						<option value="射手座">射手座</option>
						<option value="摩羯座">摩羯座</option>
						<option value="水瓶座">水瓶座</option>
						<option value="双鱼座">双鱼座</option>
					</select>
				</div>
			</form>
			<div id="dlg-detail">
				<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save_detail()">保存</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#detail_dlg').dialog('close')">取消</a>
			</div>
	</div>
	<!--个人资料结束-->
	<!--送礼记录-->
	<div id="give-dlgs" class="easyui-window" data-options="minimizable:false,tools:'#tt'"  title="收礼记录" closed="true" style="width:1000px;height:500px;">
		   <table id="give" class="easyui-datagrid">
			</table>
	</div>
	<!--送礼记录-->
	<!--收藏记录-->
	<div id="collect-dlgs" class="easyui-window" data-options="minimizable:false,tools:'#tt'"  title="收藏记录" closed="true" style="width:1000px;height:500px;">
		   <table id="collect" class="easyui-datagrid">
			</table>
	</div>
	<!--收藏记录-->
</body>
<script type="text/javascript">
	function doSearch(){
		$('#dg').datagrid('load',{
			userid: $('#userid').val(),
			nickname: $('#nickname').val(),
			status: $('#status').val(),
			cstart: $('#cstart').val(),
			cend: $('#cend').val(),			
			lstart: $('#lstart').val(),			
			lend: $('#lend').val(),			
		});
	}
	function show_manage(val,row){
		var str = '';
		str = "<a href='javascript:;' onclick='show_edit("+row.id+")' >修改</a>&nbsp;/&nbsp;<a href='javascript:;' onclick='show_detail("+row.id+")'>个人信息</a>&nbsp;/&nbsp;<a href='javascript:;' onclick='give("+row.id+")' >送礼记录</a>&nbsp;/&nbsp;<a href='javascript:;' onclick='collect("+row.id+")'>收藏记录</a>";
		return str;
	}
	function show_status(val,row){
		if(val == 1){
			val = '正常';
		}else if(val == 2){
			val = '禁用';
		}
		return val;
	}
	//展示修改信息
	function show_edit(id){
		$.ajax({
			    type:'post',
				 url:"__APP__/User/show_edit",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                        $('#edit').form('clear');
						$('#edit_dlg').dialog('open');
					    $('#edit').form('load',row);
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
						});					
					}
				}
		});
	}
	//修改信息
	function save_edit(){
		$('#edit').form('submit',{
				url: '__APP__/User/save_edit',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#edit_dlg').dialog('close');		// close the dialog
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
	//展示个人信息
	function show_detail(id){
		$.ajax({
			    type:'post',
				 url:"__APP__/User/show_detail",
				data:{id:id},
				success:function(data){
			        row = eval('('+data+')');
					if (row){
                        $('#detail').form('clear');
						$('#detail_dlg').dialog('open');
					    $('#detail').form('load',row);
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
						});					
					}
				}
		});
	}
	//修改个人信息
	function save_detail(){
		$('#detail').form('submit',{
				url: '__APP__/User/save_detail',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#detail_dlg').dialog('close');		// close the dialog
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
	//送礼记录展示
	function give(id){
		       $('#give-dlgs').dialog('open');
			   $('#give').datagrid({  
						url:'/Manerger/index.php/User/give?uid='+id,
					columns:[[
						{field:'uid',title:'送礼人id',width:80}, 
						{field:'nickname',title:'送礼人昵称',width:80},
						{field:'ctime',title:'收礼时间',width:80},	
						{field:'gift_name',title:'礼物名称',width:80},	
						{field:'money',title:'金额',width:80}, 
						{field:'receive_id',title:'收礼人id',width:80},  
						{field:'receive_name',title:'收礼人昵称',width:80},  
						{field:'bank',title:'付款银行',width:80},  
						{field:'bank_no',title:'银行卡号',width:80},  
						{field:'bank_name',title:'持卡人姓名',width:80},  
					]],
						rownumbers: true,
						striped:true,
						fit:true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						pageSize:20,
						pageList: [20,30],
						idField: 'id',				 
						loadMsg:'数据加载中请稍后……',    
					});
	}
	//收藏记录展示
	function collect(id){
		$('#collect-dlgs').dialog('open');
			   $('#collect').datagrid({  
						url:'/Manerger/index.php/User/collect?uid='+id,
					columns:[[
						{field:'uid',title:'id',width:80}, 
						{field:'name',title:'昵称',width:80},
						{field:'collect_id',title:'收藏用户id',width:80},	
						{field:'collect_name',title:'收藏用户昵称',width:80},	
						{field:'collect_time',title:'收藏时间',width:120},  
					]],
						rownumbers: true,
						striped:true,
						fit:true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						pageSize:20,
						pageList: [20,30],
						idField: 'id',				 
						loadMsg:'数据加载中请稍后……',    
				});
	}
</script>
</html>