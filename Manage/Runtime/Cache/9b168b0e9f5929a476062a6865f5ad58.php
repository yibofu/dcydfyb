<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户详情</title>
    <link rel="stylesheet" href="/Public/admin/css/shenhe.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	 <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.form.js"></script>
   <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>

 <script src="/Public/admin/js/artDialog/artDialog.js?skin=twitter"></script>
  <script src="/Public/admin/js/artDialog/plugins/iframeTools.js"></script>
</head>
<body class="easyui-layout">
<div data-options="region:'center'">
    <section class="sh_box">
        <h3>用户详情信息</h3>
        <div class="detail">
            <ul>
                <li>姓名：<span><?php echo ($user_result["name"]); ?></span></li>
                <li>银行卡：<span><?php echo ($detail_result["bank_no"]); ?></span></li>
                <li>注册时间：<span><?php echo (date("Y-m-d H:i:s",$user_result["create_time"])); ?></span></li>
                <li>身份证号：<span><?php echo ($user_result["card_no"]); ?></span></li>
                <li>所属银行：<span><?php echo ($detail_result["bank"]); ?></span></li>
                <li>手机品牌：<span><?php echo ($user_result["brand"]); ?></span></li>
                <li>手机：<span><?php echo ($user_result["phone"]); ?></span><a href="/Manerger/index.php/Teluse/index/id/<?php echo ($user_result["id"]); ?>" target="_blank">历史记录</a></li>
                <li>银行卡开户城市：<span><?php echo ($userdetail["bank_local"]); ?></span></li>
                <li>App版本：：<span><?php echo ($user_result["app_version"]); ?>(来源<?php echo ($user_result["brand"]); ?>)</span></li>
                <li ><span class="li_xx1">手机归属：</span><span class="li_xx2"><?php echo ($user_result["phone_local"]); ?></span></li>
                <li>居住地：<span><?php echo ($detail_result["home_province"]); echo ($detail_result["home_city"]); echo ($detail_result["home_zone"]); ?></span></li>
                <li>详细地址：<span><?php echo ($detail_result["home_detail"]); ?></span></li>
                <li>固定电话：<span><?php echo ($detail_result["landline"]); ?></span></li>
                <li>居住地联系时间：<span><?php echo ($loanres["app_version"]); ?></span></li>
                <li>账户状态：<span><?php if($user_result["dark_status"] == 1): ?>黑名单<?php else: ?>正常<?php endif; ?></span></li>
                <li>婚姻状况：<span><?php echo ($detail_result["marry"]); ?></span></li>
                <li>子女状况：<span><?php echo ($detail_result["son"]); ?></span></li>
                <li>工作：<span><?php echo ($detail_result["job"]); ?></span></li>
                <li>公司电话：<span><?php echo ($detail_result["com_phone"]); ?></span></li>
                <li>公司：<span><?php echo ($detail_result["company"]); ?></span></li>
                <li>公司地址：<span><?php echo ($detail_result["job_province"]); echo ($detail_result["job_city"]); echo ($detail_result["job_zone"]); echo ($detail_result["job_detail"]); ?></span></li>
                <li>工作地联系时间：<span><?php echo ($detail_result["job_contact"]); ?></span></li>
                <li><a href="javascript:;" onclick="change_detail(<?php echo ($id); ?>)">更改地址信息</a></li>
            </ul>
        </div>
    </section>
		<section class="sh_box">
        <h3>通话记录</h3>
        <div class="detail fj-detail">      
				<div style="padding:20px 60px 60px 60px">
				<table id="dg" title="通话记录" class="easyui-datagrid" style="width:900px;height:400px"
					data-options="
						url: '<?php echo U('User/call_log',array('id'=>$id));?>',
						rownumbers: true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						collapsible:true,
						pageSize:20,
						pageList: [20,30],
						idField: 'id'
					"
					>
					<thead>
						<tr>
							<th field="phone">电话</th>
							<th field="name" align="left">姓名</th>
							<th field="type" align="left" width="50" formatter="show_type">类型</th>
							<th field="ttime" align="left" width="50">通话时间</th>
							<th field="timeleng" align="left" width="50">通话时长</th>
						</tr>
					</thead>
				</table>
			   </div>
        </div>
		<!----->
		<div id="check_detail" class="easyui-dialog" title="修改地址信息" style="width:500px;height:450px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#detail_fm').form('submit',{
								url: '<?php echo U('Check/card_edit');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#check_detail').dialog('close');		// close the dialog
										window.location.href='/Manerger/index.php/Check/detail/id/<?php echo ($loan_result["id"]); ?>';
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
					<label>&nbsp;居住地省:</label>
					 <input class="easyui-validatebox" type="text" name="home_province"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>&nbsp;居住地市:</label>
					 <input class="easyui-validatebox" type="text" name="home_city"></input>
				</div>	
				<div class="fitem" style="margin-top:10px;">
					<label>&nbsp;居住地区:</label>
					 <input class="easyui-validatebox" type="text" name="home_zone"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>居住地详情:</label>
					 <input class="easyui-validatebox" type="text" name="home_detail"></input>
				</div>		
				<div class="fitem" style="margin-top:10px;">
					<label>&nbsp;工作地省:</label>
					 <input class="easyui-validatebox" type="text" name="job_province"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>&nbsp;工作地市:</label>
					 <input class="easyui-validatebox" type="text" name="job_city"></input>
				</div>	
				<div class="fitem" style="margin-top:10px;">
					<label>&nbsp;工作地区:</label>
					 <input class="easyui-validatebox" type="text" name="job_zone"></input>
				</div>
				<div class="fitem" style="margin-top:10px;">
					<label>工作地详情:</label>
					 <input class="easyui-validatebox" type="text" name="job_detail"></input>
				</div>
					 <input type="hidden" name="id" />
			</form>
			</div>
	</div>
    </section>
   </div>
</body>
<script>
	function show_type(val,row){
		if(val == 1){
			val = '来电';
		}else if(val == 2){
			val = '去电';
		}else if(val ==3){
			val = '未接';
		}
		return val;
	}
	//修改用户地址详情 
	function change_detail(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Check/change_detail');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					$('#detail_fm').form('load',data);
					$('#check_detail').dialog('open');
				}
		});	
	}
</script>
</html>