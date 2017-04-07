<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>题目列表</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
     
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
	<style type="text/css">
		#fm{
			margin-top:25px;
			padding:10px 30px;
		}
		.fitem{
			margin-bottom:15px;
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
				url: '<?php echo U('Quesion/ansdatalist',array('sub_id'=>$sub_id));?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,
				singleSelect: false,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30],
				showFooter: true,
				idField: 'id',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
				
			">
			<thead>
				<tr>
					<th data-options="field:'ck',checkbox:true"></th>
					<th field="sub_title">所属科目</th>
					<th field="title" align="left" width="80" >题目名称</th>
					<th field="creatime" align="left" width="70" >创建时间</th>
					<th field="status" align="left" formatter="show_status" >状态</th>
				</tr>
			</thead>
		</table>
		<div id="toolbar" style="margin-top:5px;">
								<a href="<?php echo U('Quesion/answer',array('que_id'=>$que_id));?>" class="easyui-linkbutton" iconCls="icon-back" plain="true">返回选项</a>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="add()">分配附加题</a>
								<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onClick="del()">清空当前附加题</a>
		</div>
    </div>
</body>
	<script type="text/javascript">
		function show_status(val,row){
			if(val == 1){
				val = '<font color="green">上线</font>';
			}else if(val == 2){
				val = '<font color="red">下线</font>';
			}
			return val;
		}
		function add(){
			var row = $('#dg').datagrid('getSelections');
			var id='';
			if(row != 0){
				for(var i=0;i<row.length;i++){
					id = id + row[i].id + ',';
				}
				$.ajax({ 
					type: "POST", 
					url: "<?php echo U('Quesion/change_add',array('ans_id'=>$ans_id));?>",
					data:{'add_que_id':id},
					success:function(data){
						var data = eval("("+data+")");
						if (data.success){
							$.messager.show({
								title: '消息',
								msg: data.msg
							});
						}else{
							$.messager.show({
								title: '出错啦！！',
								msg: data.msg
							});
						}
					}
				});
			}else{
				alert("请选择响应的附加题");
				return;
			}	
		}
		function del(){
			$.ajax({ 
					type: "POST", 
					url: "<?php echo U('Quesion/change_del',array('ans_id'=>$ans_id));?>",
					success:function(data){
						var data = eval("("+data+")");
						if (data.success){
							$.messager.show({
								title: '消息',
								msg: data.msg
							});
						}else{
							$.messager.show({
								title: '出错啦！！',
								msg: data.msg
							});
						}
					}
			});
		}
	</script>
</html>