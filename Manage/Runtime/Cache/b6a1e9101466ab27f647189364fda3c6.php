<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>发送信息</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
   <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
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
	</style>
</head>
<body>
	<table id="dg" class="easyui-datagrid" style="width:1200px;height:300px;"
			data-options="
				url: '<?php echo U('Message/datalist');?>',
				rownumbers: true,
				fitColumns:true,
				pagination: true,
				pageSize:20,
				pageNumber:1,
				pageList: [20,30],
				idField: 'id',
				treeField: 'title',
				onBeforeLoad: function(row,param){
					if (!row) {	// load top level rows
						param.id = 0;	// set id=0, indicate to load new page rows
					}
				}
			"
			>
		<thead>
			<tr>
				<th field="title" align="center"> 标题 </th>
				<th field="message" align="center"> 内容 </th>
				<th field="type"  align="center" formatter="show_type"> 类型 </th>
				<th field="ret" align="center" formatter="show_ret"> 状态 </th>
				<th field="ctime" align="center"> 时间 </th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="push()">发送推送</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="send()">发送短信&推送</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="message()">发送消息</a>
	</div>
	<!----------------发送推送框------------------>
			<div id="send_push" class="easyui-dialog" title="发送推送" style="width:500px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'发送',
					iconCls:'icon-ok',
					handler:function(){
							$('#push_fm').form('submit',{
								url: '<?php echo U('Message/send_push',array('id'=>$id));?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno){
										$('#send_push').dialog('close');		// close the dialog
										$.messager.show({
											title: '发送成功',
											msg: result.mesg
										});
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
						$('#send_push').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
			<form id="push_fm" method="post" novalidate >
				<div class="fitem" style="margin-top:10px;" >
					<label>&nbsp;分类:</label>
					 <input class="easyui-validatebox" type="text" name="title" style="width:225px;"></input>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>&nbsp;内容:</label>
					 <textarea name="message" style="width:225px;height:125px;"></textarea>
				</div>	
				<input type="hidden" name="type" />
			</form>
			</div>
	</div>
	<!--------------发送推送框--------------->
	<!----------------发送推送&短信框------------------>
			<div id="send" class="easyui-dialog" title="短信&推送" style="width:700px;height:550px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'发送',
					iconCls:'icon-ok',
					handler:function(){
							$('#send_fm').form('submit',{
								url: '<?php echo U('Message/send',array('id'=>$id));?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno){
										$('#send').dialog('close');		// close the dialog
										$.messager.show({
											title: '发送成功',
											msg: result.mesg
										});
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
						$('#send').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
			<form id="send_fm" method="post" novalidate >
				<div class="fitem" style="margin-top:10px;" >
					<label>标题:</label>
					<select name="list_type" id="list_type">
						<option>--请选择--</option>
						<option value="1">系统初筛，身份证照不合格</option>
						<option value="2">系统初筛、电审1、电审2、电审3未通过</option>
						<option value="3">系统放款</option>
						<option value="4">电审1、电审2</option>
						<option value="5">电审1、电审2(含变量)</option>
					</select>
				</div>
				<div style="display:none;" id="show_nums">
					<div class="fitem"style="margin-top:10px;" >
						<label id="one">变量1:</label>
					 	<input type="text" name="one_val" />
					</div>
					<div class="fitem"style="margin-top:10px;" >
						<label id="two">变量2:</label>
					 	<input type="text" name="two_val" />
					</div>
					<div class="fitem"style="margin-top:10px;" >
						<label id="three">变量3:</label>
					 	<input type="text" name="thr_val" />
					</div>
				</div>	
				<div class="fitem"style="margin-top:10px;" >
					<label>选择模板:</label>
					 <select name="temp_word"></select>
				</div>
				<div class="fitem"style="margin-top:10px;" >
					<label>&nbsp;预览:&nbsp;</label>
					 <textarea name="show_text" style="width:264px;height:140px;" readonly></textarea>
				</div>
				<div class="fitem"style="margin-top:10px;" id="update_view" style="display:none;">
					 	<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-del" plain="true" onclick="update_message()">更新预览</a>
				</div>	
				<input type="hidden" name="send_type" />
			</form>
			</div>
	</div>
	<!--------------发送推送&短信框--------------->
	<script>
		var str;
		var temp;
		var value;
		var show;
		function show_type(val,row){
			if(val == 1){
				val = '短信&推送';
			}else{
				val = '推送';
			}
			return val;
		}
		function show_ret(val,row){
			if(val == 1){
				val = '<font color="green">成功</font>';
			}else{
				val = '<font color="red">失败</font>';
			}
			return val;
		}
		function push(id){
			$('#push_fm').form('clear');
			$('[name=type]').val(2);
			$('#send_push').dialog('open');	
		}
		function send(){
			$('#send').form('clear');
			$('[name=send_type]').val(2);
			$('#send').dialog('open');	
		} 
		$("#list_type").bind('change',function(){
			temp = $(this).val();
			if(temp == 1){
				$('#show_nums').hide();
				$("#update_view").hide();
				str = '<option>--请选择--</option><option value="59353">您填写的身份信息和持证拍照中的身份证不符，请重新进行身份确认</option><option value="59355">本人持身份证照片中的身份证不清晰，请重新持证拍照</option><option value="59356">本人持身份证照片中的身份证显示反向，请用后置摄像头拍照</option><option value="59357">本人持身份证照片中的身份证信息被遮挡，请重新持证拍照</option><option value="59358">本人持身份证照片中的面部五官不完整或不清晰</option><option value="59359">本人持身份证照需要您本人手拿身份证的合照，请重新持证拍照</option><option value="59360">身份证正面照不清晰，请重新上传</option><option value="59361">身份证反面照不清晰，请重新上传</option><option value="59362">身份证照片需要您身份证正反面照片，请重新上传</option><option value="59363">身份证有效期限过期，请提供正确的身份证</option><option value="59364">身份证照片不符合要求，需要参考“示例”拍照</option>';
			}else if(temp == 2){
				$('#show_nums').hide();
				$("#update_view").hide();
				str = '<option>--请选择--</option><option value="59365">您好，经过系统综合评定，您的本次申请未通过......</option><option value="59366">您好，由于您的年龄太小，滴滴快贷目前不能为您提供贷款服务......</option><option value="59367">您好,谢谢您选择滴滴快贷！由于您在使用滴滴快贷过程中产生过逾期.....</option><option value="59368">您的加急申请已受理完毕。经过系统综合评定，您的本次申请未通过......</option>';
			}else if(temp == 3){
				str = '<option>--请选择--</option><option value="59369">“亲，您的贷款申请已通过......</option>';
			}else if(temp == 4){
				$('#show_nums').hide();
				$("#update_view").hide();
				str = '<option>--请选择--</option><option value="59377">您好，多次致电均未联系到您，如果您还需要申请借款，请保持手机通畅......</option><option value="59376">您好，您的借款申请已取消。如有借款需要.....</option><option value="59375">您好，如需借款，请如实填写工作单位和联系人信息后......</option><option value="59373">您好，由于您的资料未提交齐全，无法进一步审核......</option>';
			}else if(temp == 5){
				$('#show_nums').show();
				$("#update_view").show();
				str = '<option>--请选择--</option><option value="59370">您好，根据系统评定，请将额度调整为....</option><option value="59378">请将额度调整...期限调整...并在联系人处补充.....姓名和手机号</option><option value="59374">如需借款，请如实填写工作信息（或学校信息）...</option>';
			}
			$('[name=temp_word]').html(str);
		});
		$("[name=temp_word]").bind('change',function(){
			value = $(this).val();
			switch(value){
				case '59353':
				  show = '【滴滴快贷】您填写的身份信息和持证拍照中的身份证不符，请重新进行身份确认';
				  break;
				case '59355':
				  show = '【滴滴快贷】本人持身份证照片中的身份证不清晰，请重新持证拍照';
				  break;
				case '59356':
				  show = '【滴滴快贷】本人持身份证照片中的身份证显示反向，请用后置摄像头拍照';
				  break;
				case '59357':
				  show = '【滴滴快贷】本人持身份证照片中的身份证信息被遮挡，请重新持证拍照';
				  break;
				case '59358':
				  show = '【滴滴快贷】本人持身份证照片中的面部五官不完整或不清晰';
				  break;
				case '59359':
				  show = '【滴滴快贷】本人持身份证照需要您本人手拿身份证的合照，请重新持证拍照';
				  break;
				case '59360':
				  show = '【滴滴快贷】身份证正面照不清晰，请重新上传';
				  break;
				case '59361':
				  show = '【滴滴快贷】身份证反面照不清晰，请重新上传';
				  break;
				case '59362':
				  show = '【滴滴快贷】身份证照片需要您身份证正反面照片，请重新上传';
				  break;
				case '59363':
				  show = '【滴滴快贷】身份证有效期限过期，请提供正确的身份证';
				  break;
				case '59364':
				  show = '【滴滴快贷】身份证照片不符合要求，需要参考“示例”拍照';
				  break;
				case '59365': 
				  show = '【滴滴快贷】您好，经过系统综合评定，您的本次申请未通过。建议您选用其他渠道缓解经济状况。感谢您对滴滴快贷的支持，祝您工作生活愉快!';
				  break;
				case '59366':
				  show = '【滴滴快贷】您好，由于您的年龄太小，滴滴快贷目前不能为您提供贷款服务。感谢您的光临!';
				  break;
				case '59367':
				  show = '【滴滴快贷】您好,谢谢您选择滴滴快贷！由于您在使用滴滴快贷过程中产生过逾期，近日暂时无法受理您的申请。建议您暂且选用其他渠道缓解经济状况。感谢您对滴滴快贷的支持，祝您工作生活愉快!';
				  break;
				case '59368':
				  show = '【滴滴快贷】您的加急申请已受理完毕。经过系统综合评定，您的本次申请未通过。建议您选用其他渠道缓解经济状况。感谢您对滴滴快贷的支持，祝您工作生活愉快'; 
				  break; 	
				case '59369':
				  show = '【滴滴快贷】“亲，您的贷款申请已通过，请记得及时还款哦~~请您在手机应用下载处给滴滴快贷好评，感谢您的支持！”——滴滴快贷（4009987220）'; 
				  break;
				case '59377':
					show = '【滴滴快贷】您好，多次致电均未联系到您，如果您还需要申请借款，请保持手机通畅。感谢您对滴滴快贷的支持！——滴滴快贷（4009987220）';
					break;
				case '59376':
				    show = '【滴滴快贷】您好，您的借款申请已取消。如有借款需要，您可以重新提交申请。谢谢！——滴滴快贷（4009987220）';
				    break;
				case '59375':
					show = '【滴滴快贷】您好，如需借款，请如实填写工作单位和联系人信息后，再提交申请。谢谢！——滴滴快贷（4009987220）';
					break;
				case '59373':
					show = '【滴滴快贷】您好，由于您的资料未提交齐全，无法进一步审核。如需继续申请，请按客服建议或系统提示补充相应材料。谢谢！';
					break;
				case '59370':
					var temp_one = $('[name=one_val]').val();
					var temp_two = $('[name=two_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					show = '【滴滴快贷】您好，根据系统评定，请将额度调整为'+ temp_one +'元，期限调整为'+ temp_two +'期后，再提交申请。谢谢！——滴滴快贷（4009987220）';
					break;
				case '59378':
					var temp_one = $('[name=one_val]').val();
					var temp_two = $('[name=two_val]').val();
					var temp_three = $('[name=thr_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					if(temp_three == ''){
						temp_three = '****';
					}
					show = '【滴滴快贷】您好，根据系统评定，请将额度调整为'+ temp_one+'元，期限调整为' +temp_two+ '期，并在联系人处补充'+  temp_three +'位联系人的姓名和手机号后，再提交申请。谢谢！——滴滴快贷（4009987220）';
					break;
				case '59374':
					var temp_one = $('[name=one_val]').val();
					var temp_two = $('[name=two_val]').val();
					var temp_three = $('[name=thr_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					if(temp_three == ''){
						temp_three = '****';
					}
					show = '【滴滴快贷】您好，如需借款，请如实填写工作信息（或学校信息）、'+ temp_one +'个直系亲属、'+ temp_two +'个朋友、'+ temp_three +'个同事（或同学）的联系方式后，再提交申请。谢谢！';
					break;			    	     	
			}
			$('[name=show_text]').val(show);
		});
		function update_message(){
			var temp = $("[name=temp_word]").val();
			switch(temp){
				case '59370':
					temp_one = $('[name=one_val]').val();
				    temp_two = $('[name=two_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					show = '【滴滴快贷】您好，根据系统评定，请将额度调整为'+ temp_one +'元，期限调整为'+ temp_two +'期后，再提交申请。谢谢！——滴滴快贷（4009987220）';
					break;
				case '59378':
					var temp_one = $('[name=one_val]').val();
					var temp_two = $('[name=two_val]').val();
					var temp_three = $('[name=thr_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					if(temp_three == ''){
						temp_three = '****';
					}
					show = '【滴滴快贷】您好，根据系统评定，请将额度调整为'+ temp_one+'元，期限调整为' +temp_two+ '期，并在联系人处补充'+  temp_three +'位联系人的姓名和手机号后，再提交申请。谢谢！——滴滴快贷（4009987220）';
					break;
				case '59374':
					var temp_one = $('[name=one_val]').val();
					var temp_two = $('[name=two_val]').val();
					var temp_three = $('[name=thr_val]').val();
					if(temp_one == ''){
						temp_one = '****';
					}
					if(temp_two == ''){
						temp_two = '****';
					}
					if(temp_three == ''){
						temp_three = '****';
					}
					show = '【滴滴快贷】您好，如需借款，请如实填写工作信息（或学校信息）、'+ temp_one +'个直系亲属、'+ temp_two +'个朋友、'+ temp_three +'个同事（或同学）的联系方式后，再提交申请。谢谢！';
					break;	
			}
			$('[name=show_text]').val(show);
		}
	</script>
</html>