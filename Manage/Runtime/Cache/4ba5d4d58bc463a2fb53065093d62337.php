<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>电话核查表</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
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
	<div style="width:40%;float:left;">
		<h4 style="width:10%;">基本信息</h4>
		<form id="info" method="post">
		<table cellpadding="5" style=" border-collapse:separate;border-spacing:5px; ">
			<tr>
				<td>姓名：</td>
				<td><?php echo ($bansic_info["name"]); ?></td>
			</tr>
			<tr>
				<td>身份证：</td>
				<td><?php echo ($bansic_info["card_no"]); ?></td>
			</tr>
			<tr>
				<td>籍贯：</td>
				<td><input type="text" name="native" value="<?php echo ($bansic_info["native"]); ?>"></td>
			</tr>
			<tr>
				<td>年龄：</td>
				<td><input type="text" name='age' value="<?php echo ($bansic_info["age"]); ?>"></td>
			</tr>
			<tr>
				<td>电话：</td>
				<td><input type="text" name='phone' value="<?php echo ($bansic_info["phone"]); ?>"></td>
			</tr>
			<tr>
				<td>贷款详情：</td>
				<td><input type="text" name='loan_detail' value="<?php echo ($bansic_info["loan_detail"]); ?>"></td>
			</tr>
			<tr>
				<td>放款详情：</td>
				<td><input type="text" name='credit_detail' value="<?php echo ($bansic_info["credit_detail"]); ?>"></td>
			</tr>
			<tr>
				<td>人法网：</td>
				<td><input type="text" name='findlaw' value="<?php echo ($bansic_info["findlaw"]); ?>"></td>
			</tr>
			<tr>
				<td>百度：</td>
				<td><input type="text" name='baidu' value="<?php echo ($bansic_info["baidu"]); ?>"></td>
			</tr>
			<tr>
				<td>黑名单：</td>
				<td><input type="text" name='dark_status' value="<?php echo ($bansic_info["dark_status"]); ?>"></td>
			</tr>
			<tr>
				<td>工商网：</td>
				<td><input type="text" name='icbc' value="<?php echo ($bansic_info["icbc"]); ?>"></td>
			</tr>
			<tr>
				<td>社保：</td>
				<td><input type="text" name='social' value="<?php echo ($bansic_info["social"]); ?>"></td>
			</tr>
		</table>
	</div>
	<div style="float:left;">
		<h4 style="width:20%">电审信息</h4>
		<table cellpadding="5" style=" border-collapse:separate;border-spacing:5px; ">
			<tr>
				<td>身份核实情况：</td>
				<td><input type="text" name="is_identity_verification" value="<?php echo ($phone_info["is_identity_verification"]); ?>"></td>
				<td>借款用途：</td>
				<td><input type="text" name="purpose" value="<?php echo ($phone_info["purpose"]); ?>"></td>
			</tr>
			<tr>
				<td>QQ：</td>
				<td><input type="text" name="qq" value="<?php echo ($phone_info["qq"]); ?>"></td>
				<td>微信：</td>
				<td><input type="text" name="weixin" value="<?php echo ($phone_info["weixin"]); ?>"></td>
			</tr>
			<tr>
				<td>短信信息：</td>
				<td><input type="text" name="shot_message" value="<?php echo ($phone_info["shot_message"]); ?>"></td>
				<td>现居住址：</td>
				<td><input type="text" name="address" value="<?php echo ($phone_info["address"]); ?>"></td>
			</tr>
			<tr>
				<td>工作信息：</td>
				<td><input type="text" name="job" value="<?php echo ($phone_info["job"]); ?>"></td>
				<td>收入与负债：</td>
				<td><input type="text" name="stream" value="<?php echo ($phone_info["stream"]); ?>"></td>
			</tr>
			<tr>
				<td>婚姻状况：</td>
				<td><input type="text" name="marriage" value="<?php echo ($phone_info["marriage"]); ?>"></td>
				<td>家庭状况：</td>
				<td><input type="text" name="family" value="<?php echo ($phone_info["family"]); ?>"></td>
			</tr>
			<tr>
				<td>家人知否：</td>
				<td><input type="text" name="family_know" value="<?php echo ($phone_info["family_know"]); ?>"></td>
				<td>其他信息：</td>
				<td><input type="text" name="else_message" value="<?php echo ($phone_info["else_message"]); ?>"></td>
			</tr>
			<tr>
				<td>如何得知：</td>
				<td><input type="text" name="way" value="<?php echo ($phone_info["way"]); ?>"></td>
				<td>下载平台：</td>
				<td><input type="text" name="download" value="<?php echo ($phone_info["download"]); ?>"></td>
			</tr>
			<tr>
				<td>上网习惯：</td>
				<td><input type="text" name="habit" value="<?php echo ($phone_info["habit"]); ?>"></td>
				<td>小贷经验：</td>
				<td><input type="text" name="experience" value="<?php echo ($phone_info["experience"]); ?>"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">评审结论</td>
				<td colspan="2" align="center"><textarea name="record" style="width: 259px; height: 120px;"><?php echo ($phone_info["record"]); ?></textarea></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onclick="sub()">保存</a>
				</td>
			</tr>
		</table>
		</form>
		
	</div>
	<div style="clear:both;"></div>
	<div  data-options="region:'center',border:false">
 <!--操作演示结束，后面还要封闭div-->
		<table id="dg" class="easyui-datagrid" toolbar='#toolbar' 
				data-options="
					url:'<?php echo U('TelCheck/linklist',array('id'=>$id));?>',
					rownumbers: true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						collapsible:true,
						pageSize:5,
						pageList: [5,10],
						idField: 'id'
				">
			<thead>
				<tr>
					<th field="name" align="center" width="20%">联系人</th>
					<th field="phone" align="center" width="15%">电话</th>
					<th field="is_result" align="center" width="15%">核查结果</th>
					<th field="createtime" align="center" width="15%">创建时间</th>
					<th field="d"  align="left" width="10%" formatter="show_manger">核查</th>
				</tr>
			</thead>
		</table>
    </div>
	<!--编辑内容-->
<div id="dlg" class="easyui-dialog" title="核查记录" closed="true" buttons="#dlg-buttons" style="width:520px;height:300px;">
        <form id="fm" method="post">
			<div class="fitem">
				<label>核查记录：</label>
				<textarea name="result" style="width:380px;height:100px;"></textarea>
			</div>
			<div class="fitem">
				<label>核查状态:</label>
				<select name="is_result">
							   <option value="">请选择</option>
							   <option value="1">审核成功</option>
							   <option value="2">未审核</option>
							   <option value="3">审核失败</option>
				</select>
			</div>
		</form>
	    <div id="dlg-buttons">
			<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
		</div>
	</div>
	<!--------------表单结束--------------->
	<script>
		var url;
		function show_manger(val,row){
			return '<a href="javascript:;" onClick="check('+row.id+')">审核</a>/<a href="javascript:;" onClick="del('+row.id+')">删除</a>';
			
		}
		function check(id){
			url = "__APP__/TelCheck/save/id/"+id;
			$('#dlg').dialog('open').dialog('setTitle','电话审核');
			
		}
		function del(id){
			$.ajax({
			    type:'post',
				 url:"__APP__/TelCheck/change_del",
				data:{id:id},
				success:function(data){
						row = eval('('+data+')');
						if (row){
							$('#dg').datagrid('reload');	// reload the user data
							$.messager.show({
								title: '消息',
								msg: result.msg
							});					
						}else{
							$.messager.show({
								title: '出错啦！！',
								msg: '请选择一条'
							});					
						}
				  }
			});
		}
		function save(id){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success:function(result){
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
		function sub(){
			$('#info').form('submit',{
				url: '<?php echo U('TelCheck/save_info',array('id'=>$id));?>',
				onSubmit: function(){
					return $(this).form('validate');
				},
				success:function(result){
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
	</script>
</body>
</html>