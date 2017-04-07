<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>审核</title>
    <link rel="stylesheet" href="/Public/admin/css/shenhe.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css">
	<script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
</head>
<style>
		#card_img li{
			list-style:none;
			float:left;
			margin-left:10px;
		}
	</style>
<body class="easyui-layout">

<div data-options="region:'center'">

    <section class="sh_box">
        <h3>借款详情</h3>
        <div class="detail">
            <ul>
                <li>借款金额：<span>￥<?php echo ($loan_result["loan_money"]); ?></span></li>
                <li>综合管理费：<span>￥<?php echo ($loan_result["manage_prize"]); ?></span></li>
                <li>年化利率：<span><?php echo ($loan_result["year_rate"]); ?>%</span></li>
				<li>借款期限：<span><?php echo ($loan_result["time_limit"]); ?>个月</span></li>
				<li>还款方式：<span><?php echo ($loan_result["repay_mode"]); ?></span></li>
                <li>申请时间：<span><?php echo (date("Y-m-d",$loan_result["creatime"])); ?></span></li>
                <li>费用说明：<span><?php echo ($loan_result["desc"]); ?></span></li>
            </ul>
           
            <table border="1" cellspacing="0" class="hk_detail" >
                <tr>
                    <td>期数</td>
                    <td>本息合计</td>
                    <td>本金</td>
                    <td>利息</td>
                    <td>月管理费</td>
                    <td>应还款</td>
                </tr>
                <?php if(is_array($repay_result)): $i = 0; $__LIST__ = $repay_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                    <td>第<?php echo ($v["installments"]); ?>期</td>
	                    <td><?php echo ($v["total"]); ?></td>
	                    <td><?php echo ($v["corpus"]); ?></td>
	                    <td><?php echo ($v["interest"]); ?></td>
	                    <td><?php echo ($v["manage_prize"]); ?></td>
	                    <td><?php echo ($v["should_money"]); ?></td>
	                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </section>
    <section class="sh_box">
        <h3>借款人</h3>
        <div class="detail">
            <ul>
                <li>借款人：<span><?php echo ($user_result["name"]); ?></span></li>
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
                <li><a href="javascript:;" onclick="change_detail(<?php echo ($user_result["id"]); ?>)">更改地址信息</a></li>
            </ul>
        </div>
		<!----->
		<div id="check_detail" class="easyui-dialog" title="审核附件" style="width:500px;height:450px;padding:10px"
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
	<section class="sh_box">
        <h3>利率表</h3>
        <div class="detail">
            <ul>
                <li>年化利率：<span><?php echo ($rate_result["year_rate"]); ?>%</span></li>
                <li>分期服务费：<span>￥<?php echo ($rate_result["serve_prize"]); ?></span></li>
				 <li>&nbsp;<span><a href="javascript:;" onclick="manage_rate(<?php echo ($loan_result["id"]); ?>)">设置利率表</a></span></li>
                <li>逾期滞纳金率：<span><?php echo ($rate_result["overdue_fine"]); ?>%</span></li>
                <li>管理费比率：<span><?php echo ($rate_result["manage_prize"]); ?>%</span></li>
                <li>违约金利率：<span><?php echo ($rate_result["dedit"]); ?>%</span></li>
                <li>分期期数上限：<span><?php echo ($rate_result["number"]); ?>月</span></li>
                <li>贷款额度：<span>￥<?php echo ($rate_result["limit"]); ?></span></li>
            </ul>
        </div>
		<!--设置利率表-->
		<div id="manage_rate" class="easyui-dialog" title="设置利率" style="width:500px;height:450px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#rate_fm').form('submit',{
								url: '<?php echo U('Check/rate_edit');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#manage_rate').dialog('close');		// close the dialog
										window.location.href = '/Manerger/index.php/Check/detail/id/<?php echo ($loan_result["id"]); ?>';
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
						$('#manage_rate').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
				<form id="rate_fm" method="post" novalidate >
					<div class="fitem" >
						<label>&nbsp;&nbsp;&nbsp;用户姓名:</label>
						 <?php echo ($user_result["name"]); ?>
					</div>	
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;年化利率:</label>
						 <input class="easyui-validatebox" type="text" name="year_rate"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;综合管理费率:</label>
						 <input class="easyui-validatebox" type="text" name="manage_prize"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>分期服务管理费:</label>
						 <input class="easyui-validatebox" type="text" name="serve_prize"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;滞纳金率:</label>
						 <input class="easyui-validatebox" type="text" name="overdue_fine"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;违约金利率:</label>
						 <input class="easyui-validatebox" type="text" name="dedit"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额度:</label>
						 <input class="easyui-validatebox" type="text" name="limit"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;分期次数:</label>
						 <input class="easyui-validatebox" type="text" name="number"></input>
					</div>		
						 <input type="hidden" name="id" />
				</form>
			</div>
		</div>	
    </section>
     <section class="sh_box">
        <h3>持证拍照信息</h3>
        <div class="pic_detail">
            <div class="pic_img">
                <div class="pic_img_box">
                    <!--身份证浏览开始-->
					<div style="float:left;">
						<!--<span id="big"><img style="width:120px;" src="<?php echo ($userres["card_front"]); ?>"></span>-->
							<ul style="margin-top:0px">
								<li onclick="showimg('<?php echo ($card_result["card_front"]); ?>')"><img style="width:150px;height:100px;cursor:pointer" src="<?php echo ($card_result["card_front_ske"]); ?>"></li>
								<li onclick="showimg('<?php echo ($card_result["card_back"]); ?>')"><img style="width:150px;height:100px;cursor:pointer" src="<?php echo ($card_result["card_back_ske"]); ?>"></li>
								<li onclick="showimg('<?php echo ($card_result["card_hand"]); ?>')"><img style="width:150px;height:100px;cursor:pointer" src="<?php echo ($card_result["card_hand_ske"]); ?>"></li>
							</ul>
					</div>
					<div id="dlg_zp" class="easyui-dialog" title="用户身份信息审核" closed="true" buttons="#dlg-buttons" style="width:900px;height:600px;">
				        <p id="show"><img src="<?php echo ($card_result["card_front"]); ?>" style="max-width:100%;height:auto;" /></p>
					</div>
					<!--身份证浏览结束-->
                </div>
            </div>
            <ul>
                <li>姓名：<span><?php echo ($user_result["name"]); ?></span></li>
                <li>省：<span><?php echo ($detail_result["province"]); ?></span></li>
                <li>拍照时间：<span><?php echo (date("Y-m-d",$card_result["ctime"])); ?></span></li>
                <li>市：<span><?php echo ($detail_result["town"]); ?></span></li>
                <li>审核状态：
					<?php if($card_result["card_status"] == 1): ?><font color="green">通过</font>
					<?php else: ?><font color="red">不通过</font><?php endif; ?>
                </li>
                <li>区：<span><?php echo ($detail_result["county"]); ?></span></li>
                <li>历史记录：<span><a href="javascript:void(0);" onClick="show_img();">持证拍照历史记录</a></span></li>
                <li>详细地址：<span><?php echo ($detail_result["census_register"]); ?></span></li>
                <li class="info_edit"><a href="javascript:void(0);"onclick="change_card(<?php echo ($user_result["id"]); ?>)">更改身份信息</a></li>
            </ul>
        </div>
		<!--设置身份证信息-->
		<div id="change_card" class="easyui-dialog" title="设置利率" style="width:500px;height:450px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#card_fm').form('submit',{
								url: '<?php echo U('Check/card_edit');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#change_card').dialog('close');		// close the dialog
										window.location.href = '/Manerger/index.php/Check/detail/id/<?php echo ($loan_result["id"]); ?>';
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
						$('#change_card').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
				<form id="card_fm" method="post" novalidate >
					<div class="fitem" >
						<label>&nbsp;&nbsp;&nbsp;省:</label>
						  <input class="easyui-validatebox" type="text" name="province"></input>
					</div>	
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;市:</label>
						 <input class="easyui-validatebox" type="text" name="town"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>&nbsp;&nbsp;&nbsp;区:</label>
						 <input class="easyui-validatebox" type="text" name="county"></input>
					</div>
					<div class="fitem" style="margin-top:10px;">
						<label>详细地址:</label>
						 <input class="easyui-validatebox" type="text" name="census_register"></input>
					</div>	
						 <input type="hidden" name="id" />
				</form>
			</div>
		</div>
		<!--------身份证历史弹出框开始--------- -->
	<div id="dlg_history" class="easyui-dialog" style="width:620px;height:400px;padding:10px 20px" closed="true">
		<table>
			<tr>
				<?php if(is_array($new_arr)): $i = 0; $__LIST__ = $new_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td>
						<img src="<?php echo ($vo["front"]); ?>" width="120" height="80" /><br />
						<img src="<?php echo ($vo["back"]); ?>" width="120" height="80" /><br />
						<img src="<?php echo ($vo["hand"]); ?>" width="120" height="80" /><br />
						<span>第<?php echo ($vo["i"]); ?>次</span>
					</td><?php endforeach; endif; else: echo "" ;endif; ?>
			</tr>
		</table>
	</div>
	<!-- 身份证历史弹框结束 -->
    </section>
	<section class="sh_box">
        <h3>附件列表</h3>
        <div class="detail fj-detail">      
            <div class="easyui-panel" title="附件列表" >
				<div style="padding:20px 60px 60px 60px">
				<table id="dg" title="用户上传附件" class="easyui-datagrid" style="width:900px;height:400px"
					data-options="
						url: '<?php echo U('Check/datalist1',array('id'=>$user_result['id']));?>',
						rownumbers: true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						collapsible:true,
						pageSize:5,
						pageList: [5,10],
						idField: 'id'
					"
					>
					<thead>
						<tr>
							<th data-options="field:'title',width:80">标题</th>
							<th data-options="field:'img',width:100">图片</th>
							<th data-options="field:'is_agree',width:80,align:'right'" formatter="show_status">状态</th>
							<th data-options="field:'createtime',width:80,align:'right'">创建时间</th>
							<th data-options="field:'d',width:80" formatter="show_manger">审核</th>
						</tr>
					</thead>
				</table>
				<div style="padding:5px 0 5px 0;">
						<a href="javascript:void(0)" class="easyui-linkbutton" style="color:blue" onclick="$('#upload').dialog('open')" >添加离线附件</a>
				</div>
			
				<table id="datalist2" class="easyui-datagrid" title="审核员上传的" style="width:900px;height:400px"
					data-options="
						url: '<?php echo U('Check/datalist2',array('id'=>$user_result['id']));?>',
						rownumbers: true,
						singleSelect:true,
						fitColumns:true,
						pagination: true,
						pageNumber:1,
						collapsible:true,
						pageSize:5,
						pageList: [5,10],
						idField: 'id'
					"
					>
					<thead>
						<tr>
							<th data-options="field:'title',width:80">名称</th>
							<th data-options="field:'url',width:100">下载地址</th>
							<th data-options="field:'d',width:100,align:'right'" formatter="show_manger2">操作</th>
						</tr>
					</thead>
				</table>
			   </div>
			</div>
        </div>
		<!----->
		<div id="check_annex" class="easyui-dialog" title="审核附件" style="width:500px;height:450px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#check_title').form('submit',{
								url: '<?php echo U('Check/insert');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#check_annex').dialog('close');		// close the dialog
										$('#dg').datagrid('reload');
										$.messager.show({
											title: '消息',
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
						$('#check_annex').dialog('close')
					}
				}],
				closed: true,   
			">
			
			<div style="padding:10px;">
			<form id="check_title" method="post" novalidate >
				<div class="fitem" >
					<label>标题:</label>
					 <input class="easyui-validatebox" type="text" name="title"></input>
				</div>	
				<div class="fitem" style="margin-top:10px;">
					<label>状态:</label>
					 <select name="is_agree">
						<option value="1">通过</option>
						<option value="2">未通过</option>
						<option value="3">未审核</option>
					 </select>
					 <input type="hidden" name="id" />
				<div class="fitem" id="img" style="margin-top:10px;">
				</div>
				</div>	
			</form>
			</div>
	</div>
	<!---添加离线附件开始-->
		<div id="upload" class="easyui-dialog" title="添加离线附件" style="width:400px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#uploadfm').form('submit',{
								url: '<?php echo U('Check/fujian');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.error==0){
										$('#upload').dialog('close');		// close the dialog
										$.messager.show({
											title: '消息',
											msg: result.mesg
										});
										$('#datalist2').datagrid('reload');
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
						$('#upload').dialog('close')
					}
				}],
				closed: true,  
			">
			
			<div style="padding:10px;">
			<form id="uploadfm" method="post" enctype="multipart/form-data" >	
				<div class="fitem">
					<label>标&nbsp;&nbsp;题:</label>
					 <input class="easyui-validatebox" type="text" name="title"></input>
				</div>	
				<div class="fitem">
					<label>附件</label>
					 <input class="easyui-validatebox" type="file" name="fujian"></input>
					 <input class="easyui-validatebox" type="hidden" name="url"></input>
					 <input class="easyui-validatebox" type="hidden" name="id"></input>
					 <input class="easyui-validatebox" type="hidden" name="uid" value="<?php echo ($user_result["id"]); ?>"></input>
				</div>
			</form>
			</div>
	</div>
	<!------>
    </section>
	<section class="sh_box">
        <h3>地理位置信息</h3>
        <div style="width:1200px;margin:0 auto;">
			<div style="width:540px;float:left;">
             <table id="datalist2" class="easyui-datagrid" title="" style="width:500px;height:300px;"
				data-options="
					url: '<?php echo U('Check/address',array('id'=>$user_result['id']));?>',
					rownumbers: true,
					singleSelect:true,
					fitColumns:true,
					pagination: true,
					pageNumber:1,
					collapsible:true,
					pageSize:10,
					pageList: [10,20],
					idField: 'id'
				"
				>
				<thead>
					<tr>
						<th data-options="field:'address_detail',width:200">详细地址</th>
						<th data-options="field:'createtime',width:100">获取时间</th>
						<th data-options="field:'id',width:100" formatter="show_address">查看地图</th>
					</tr>
				</thead>
			</table>
			</div>
            <div style="float:left;width:600px;">
               <iframe src="/Manerger/index.php/Address/index/id/<?php echo ($address_id); ?>" style="width:540px;height:300px;" name ="iframe_a"></iframe>
            </div>
			<div style="clear:both;"></div>
        </div>
    </section>
	<section class="sh_box">
        <h3>工作信息</h3>
            <div class="detail">
                <table border="1" cellspacing="0" class=hk_detail >
                    <tr>
                        <td>社会角色</td>
                        <td> 公司名称</td>
                        <td>详细地址</td>
                        <td> 联系电话</td>
                        <td> 联系时间</td>
                        <td>创建时间</td>
                        <td>核查</td>
                    </tr>
                    <tr>
                        <td> <?php echo ($detail_result["job"]); ?> </td>
                        <td><?php echo ($detail_result["company"]); ?></td>
                        <td><?php echo ($detail_result["job_province"]); echo ($detail_result["job_city"]); echo ($detail_result["job_zone"]); echo ($detail_result["job_detail"]); ?></td>
                        <td><?php echo ($detail_result["com_phone"]); ?></td>
                        <td><?php echo ($detail_result["job_contact"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$user_result["create_time"])); ?></td>
                        <td><a href="javascript:void(0);" onClick="check_job(this,<?php echo ($userres["id"]); ?>,<?php echo ($userres["job_status"]); ?>,'<?php echo ($userres["job_check"]); ?>');" style="color: #0000ff;">修改</a></td>
                    </tr>
                </table>
        </div>
    </section>
	<section class="sh_box">
        <h3>联系人信息</h3>
        <div class="detail">
            <table border="1" cellspacing="0" class=hk_detail >
                <tr>
                    <td>联系人</td>
                    <td>电话</td>
                    <td>创建时间</td>
                </tr>
                <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                    <td>【<?php echo ($v["relation"]); ?>】<?php echo ($v["name"]); ?>
	                    	<?php if($v["is_del"] == '0' ): ?><span style="color:red;">已删除</span><?php endif; ?>
	                    </td>
	                    <td><?php echo ($v["phone"]); ?></td>
	                    <td><?php echo (date("Y-m-d H:i:s",$v["createtime"])); ?></td>
	                   <!--  <td>
	                    		<span><a href="javascript:void(0);" onClick="del_link(this,<?php echo ($v["id"]); ?>)">删除</a></span>
	                    </td> -->
	                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </section>
	<section class="sh_box">
        <h3>历史申请</h3>
        <div class="detail">
            <table id="history" class="easyui-datagrid" title="" style="width:1200px;height:250px"
				data-options="
					url: '<?php echo U('Check/loan',array('id'=>$user_result['id']));?>',
					rownumbers: true,
					singleSelect:true,
					fitColumns:true,
					pagination: true,
					pageNumber:1,
					collapsible:true,
					pageSize:10,
					pageList: [10,20],
					idField: 'id'
				"
				>
				<thead>
					<tr>
						<th data-options="field:'loan_money',width:80">金额</th>
						<th data-options="field:'time_limit',width:100">期限</th>
						<th data-options="field:'creatime',width:100">申请时间</th>
						<th data-options="field:'loan_status',width:100">状态</th>
						<th data-options="field:'shenhe',width:100">审核反馈</th>
						<th data-options="field:'check_name',width:100,align:'right'">审核员</th>
						<th data-options="field:'d'" formatter="show_history">操作</th>
					</tr>
				</thead>
			</table>
        </div>	
    </section>
	<section class="sh_box">
        <h3>借款记录</h3>
        <div class="detail">
            <table id="datalist2" class="easyui-datagrid" title="" style="width:1200px;height:250px"
				data-options="
					url: '<?php echo U('Check/repay',array('id'=>$user_result['id']));?>',
					rownumbers: true,
					singleSelect:true,
					fitColumns:true,
					pagination: true,
					pageNumber:1,
					collapsible:true,
					pageSize:10,
					pageList: [10,20],
					idField: 'id'
				"
				>
				<thead>
					<tr>
						<th data-options="field:'bianhao',width:80">编号</th>
						<th data-options="field:'corpus',width:100">金额</th>
						<th data-options="field:'installments',width:100">还款期数</th>
						<th data-options="field:'should_money',width:100">还款金额</th>
						<th data-options="field:'repay_time',width:100">到期还款日</th>
						<th data-options="field:'is_overdue',width:100">是否逾期</th>
						<th data-options="field:'real_repay_time',width:100">实际还款日</th>
						<th data-options="field:'check_name',width:100">审核员</th>
					</tr>
				</thead>
			</table>
        </div>
    </section>
	<section class="sh_box">
        <h3>审核详细信息</h3>
        <div class="detail">
            <table border="1" cellspacing="0" class=hk_detail >
                <tr>
                    <td>阶段</td>
                    <td>状态</td>
                    <td>明细</td>
                </tr>
                <tr>
					<td><?php echo ($check_data["card_way"]); ?></td>
					<td><?php echo ($check_data["card_status"]); ?></td>
					<td><?php echo ($check_data["card_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["data_way"]); ?></td>
					<td><?php echo ($check_data["data_status"]); ?></td>
					<td><?php echo ($check_data["data_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["fis_tel_way"]); ?></td>
					<td><?php echo ($check_data["fis_tel_status"]); ?></td>
					<td><?php echo ($check_data["fis_tel_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["income_way"]); ?></td>
					<td><?php echo ($check_data["income_status"]); ?></td>
					<td><?php echo ($check_data["income_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["sec_tel"]); ?></td>
					<td><?php echo ($check_data["sec_tel_status"]); ?></td>
					<td><?php echo ($check_data["sec_tel_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["wait_exp_way"]); ?></td>
					<td><?php echo ($check_data["wait_exp_status"]); ?></td>
					<td><?php echo ($check_data["wait_exp_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["express_way"]); ?></td>
					<td><?php echo ($check_data["express_status"]); ?></td>
					<td><?php echo ($check_data["express_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["fin_tel_way"]); ?></td>
					<td><?php echo ($check_data["fin_tel_status"]); ?></td>
					<td><?php echo ($check_data["fin_tel_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["annex_way"]); ?></td>
					<td><?php echo ($check_data["annex_status"]); ?></td>
					<td><?php echo ($check_data["annex_reason"]); ?></td>
				</tr>
				<tr>
					<td><?php echo ($check_data["fin_way"]); ?></td>
					<td><?php echo ($check_data["fin_status"]); ?></td>
					<td><?php echo ($check_data["fin_reason"]); ?></td>
				</tr>
            </table>
        </div>
    </section>	
</div>
	
<script type="text/javascript">
	function showimg(imgsrc){
		var tmps = '<img src="'+imgsrc+'"style="max-width:100%;height:auto;">';
		$("#show").html(tmps);
		$('#dlg_zp').dialog('open').dialog('setTitle','查看照片');
		
	}
	function show_status(val){
	    if(val==1){
		    return "<span style='color:green;'>正常</span>";
		}else{
		    return "<span>未审核</span>";
		}
	}
	 function show_manger(val,row){
		 return '<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="shenhe('+row.id+')">审核</a>&nbsp;/&nbsp;<a href="javascript:;" onclick="del_annex('+row.id+')" >删除</a>'; 
	}
	function show_manger2(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="edit('+row.id+')">修改</a>'; 
	}
	function del(id){
			$.post('__URL__/del',{id:id},function(data){
				var result = eval('('+data+')');
					if (result.errno==0){
						$.messager.show({
							title: 'ok',
							msg: result.mesg
						});
						$('#datalist2').datagrid('reload');
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: result.mesg
						});
					}			
			});
		
	}
	function edit(id){
		$.ajax({
			    type:'post',
				 url:"__URL__/edit",
				data:{id:id},
			  success:function(data){
			        row = eval('('+data+')');
					//console.log(row);
					if (row.id){
						$('#uploadfm').form('clear');
						$('#upload').dialog('open').dialog('setTitle','编辑'); 
						
						$('#uploadfm').form('load',row); 
					
					}else{
						$.messager.show({
							title: '出错啦！！',
							msg: '请选择一条'
						});
					
					}
			  }
		});
	}	
	function shenhe(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Check/check_annex');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					var img = '<img src="'+data.url_ske+'" width="340px" height="200px"><br />下载地址<br /><a href="'+data.url+'" target="_blank">'+data.url+'</a>';
					$("#img").html(img);
					$('#check_title').form('load',data);
					$('#check_annex').dialog('open');
				}
		});		
	}
	function del_annex(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Check/del_annex');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					if (data.errno==0){
						$('#dg').datagrid('reload');
						$.messager.show({
							title: '消息',
							msg: data.mesg
						});
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: data.mesg
						});
					}
				}
		});	
	}
	function show_address(val,row){
				return '<a href="/Manerger/index.php/Address/index/id/'+row.id+'" class="easyui-linkbutton" iconCls="icon-edit" plain="true"  target="iframe_a">查看</a>'; 
	}
	/*
	//删除联系人信息
	function del_link(dom,num){
		var common = {};
		common.id = num;
		$.ajax({
			type : "POST",
			data : common,
			url : "/Manerger/index.php/Check/remove",
			dataType : "text",
			async : false,
			success:function(result){
				result = $.trim(result);//过滤空格
				if(result=='true'){
					var content = "<span style='color:red;'>已删除</span>";
					$(dom).parent().parent().parent().find("td").eq(0).append(content);
					$(dom).parent().remove();
				}
			}
		})
			
	}
	*/
	//历史申请操作
	function show_history(val,row){
		return "<a href='<?php echo U('Check/detail');?>&id="+row.id+"' target='_blank'>查看</a>";
	}
	//设置利率表
	function manage_rate(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Check/rate');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					$('#rate_fm').form('load',data);
					$('#manage_rate').dialog('open');
				}
		});	
	}
	//身份证更改
	function change_card(id){
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Check/change_card');?>",
				data:{'id':id},
				success:function(data){
					var data = eval("("+data+")");
					$('#card_fm').form('load',data);
					$('#change_card').dialog('open');
				}
		});	
	}
	//展示 身份证上传历史记录
	function show_img(){
		$('#dlg_history').dialog('open').dialog('setTitle','拍照历史记录');
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
</body>
</html>