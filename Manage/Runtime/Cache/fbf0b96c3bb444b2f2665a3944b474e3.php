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
<body class="easyui-layout">

	<div data-options="region:'center'">

    <section class="sh_box">
        <h3>借款详情</h3>
        <div class="detail">
            <ul>
                <li>编号：<span><?php echo ($loanres["loan_num"]); ?></span></li>
                <li>借款金额：<span>￥<?php echo ($loanres["loan_money"]); ?></span></li>
                <li>借款时间：<span><?php echo (date("Y-m-d",$loanres["create_time"])); ?></span></li>
                <li>借款期限：<span><?php echo ($loanres["loan_installments"]); ?>个月</span></li>
                <li>借款用途：<span><?php echo ($loanres["loan_use"]); ?></span></li>
                <li>综合管理费：<span>￥<?php echo ($mang_piz); ?></span></li>
                <li>放贷接受账号：<span><?php echo ($userres["bank_no"]); ?>&nbsp;&nbsp;&nbsp;<?php echo ($userres["bank"]); ?>&nbsp;&nbsp;&nbsp;<?php echo ($userres["bank_local"]); ?></span></li>
            </ul>
            <h4>审核员：<?php echo ($loanres["realname"]); ?>   <span>预留现金余额：<?php echo ($userres["account"]); ?>元&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onClick="view_account();">查看账户</a></span></h4>
            <table border="1" cellspacing="0" class="hk_detail" >
                <tr>
                    <td>期数</td>
                    <td>应还金额</td>
                    <td>到期还款日</td>
                    <td>本息总额</td>
                    <td>逾期利息</td>
                    <td>违约金</td>
                    <td>还款情况</td>
                    <td>实际还款</td>
                    <td>实际还款日</td>
                    <td>操作</td>
                </tr>
                <?php if(is_array($repres)): $i = 0; $__LIST__ = $repres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                    <td>第<?php echo ($v["installments"]); ?>期</td>
	                    <td><?php echo ($v["should_money"]); ?></td>
	                    <td><?php echo (date("Y-m-d",$v["repay_time"])); ?></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td>
	                    	<a href="javascript:void(0);" onClick="cuikuan(<?php echo ($v["installments"]); ?>);">催款</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="">备注</a>
	                    </td>
	                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </section>
    <section class="sh_box">
        <h3>借款人</h3>
        <div class="detail">
            <ul>
                <li>借款人：<span><?php echo ($userres["name"]); ?></span></li>
                <li>银行卡：<span><?php echo ($userres["bank_no"]); ?></span></li>
                <li>注册时间：<span><?php echo (date("Y-m-d H:i:s",$userres["create_time"])); ?></span></li>
                <li>身份证号：<span><?php echo ($userres["card_no"]); ?></span></li>
                <li>所属银行：<span><?php echo ($userres["bank"]); ?></span></li>
                <li>手机品牌：<span><?php echo ($loanres["phone_brand"]); ?></span></li>
                <li>手机：<span><?php echo ($userres["phone"]); ?></span><a href="javascript:void(0);" onClick="show_phone();">历史记录</a></li>
                <li>来开户城市：<span><?php echo ($userres["bank_local"]); ?></span></li>
                <li>App版本：：<span><?php echo ($loanres["app_version"]); ?></span></li>
                <li ><span class="li_xx1">手机归属：</span><span class="li_xx2"><?php echo ($userres["phone_local"]); ?></span></li>
            </ul>
        </div>
    </section>
    <section class="sh_box">
        <h3>持证拍照信息</h3>
        <div class="pic_detail">
            <div class="pic_img">
                <div class="pic_img_box">
                    <!--身份证浏览开始-->
					<div style="width:40%;float:left;">
						<span id="big"><img src="<?php echo ($userres["card_front_middle"]); ?>"></span>
							<ul>
								<li onclick="fun()"><img src="<?php echo ($userres["card_front_small"]); ?>"></li>
								<li onclick="check()"><img src="<?php echo ($userres["card_back_small"]); ?>"></li>
								<li onclick="hand()"><img src="<?php echo ($userres["card_hand_small"]); ?>"></li>
							</ul>
					</div>
					<div id="dlg_zp" class="easyui-dialog" title="用户身份信息审核" closed="true" buttons="#dlg-buttons" style="width:820px;height:500px;">
				        <p id="show"><img src="<?php echo ($userres["card_front"]); ?>"></p>
					</div>
					<!--身份证浏览结束-->
                </div>
            </div>
            <ul>
                <li>姓名：<span><?php echo ($userres["name"]); ?></span></li>
                <li>省：<span><?php echo ($userres["province"]); ?></span></li>
                <li>拍照时间：<span><?php echo (date("Y-m-d",$loanres["create_time"])); ?></span></li>
                <li>市：<span><?php echo ($userres["town"]); ?></span></li>
                <li>审核状态：
                	<?php echo ($userres["card_status"]); ?>
                </li>
                <li>区：<span><?php echo ($userres["county"]); ?></span></li>
                <li>历史记录：<span><a href="javascript:void(0);" onClick="show_img();">持证拍照历史记录</a></span></li>
                <li>详细记录：<span><?php echo ($userres["census_register"]); ?></span></li>
                <li class="info_edit"><a href="javascript:void(0);">更改身份信息</a></li>
            </ul>

        </div>
    </section>
    <section class="sh_box">
        <h3>附件列表</h3>
        <div class="detail fj-detail">
<!--            <a href="#" class="fj">上传提示（短信或推送）</a>-->
<!--            <a href="#" class="fj"> 删除所选</a>-->
<!--            <a href="#" class="fj"> 回收站（<span>0</span>）</a>-->
<!--            <a href="#" class="fj_lixian">添加离线附件</a>-->
            
            
            <div class="easyui-panel" title="附件列表" >
				<div style="padding:20px 60px 60px 60px">
					<div style="margin:5px 0;">
						<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#dlg').dialog('open')" >上传提醒</a>
					</div>
				<table id="dg" title="待审核列表" class="easyui-datagrid" style="width:700px;height:250px"
					data-options="
						url: '<?php echo U('Loan/datalist1',array('id'=>$userres['id']));?>',
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
							<th data-options="field:'title',width:80">标题</th>
							<th data-options="field:'url',width:100">图片</th>
							<th data-options="field:'is_agree',width:80,align:'right'" formatter="show_status">状态</th>
							<th data-options="field:'createtime',width:80,align:'right'">创建时间</th>
							<th data-options="field:'d',width:80" formatter="show_manger">审核</th>
						</tr>
					</thead>
				</table>
			
				<div style="padding:5px 0 5px 0;">
						<a href="javascript:void(0)" class="easyui-linkbutton" style="color:blue" onclick="$('#upload').dialog('open')" >添加离线附件</a>
				</div>
			
				<table id="datalist2" class="easyui-datagrid" title="审核员上传的" style="width:700px;height:250px"
					data-options="
						url: '<?php echo U('Loan/datalist2',array('id'=>$userres['id']));?>',
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
		<div id="dlg" class="easyui-dialog" title="上传提醒" style="width:400px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#fm').form('submit',{
								url: '<?php echo U('Loan/insert');?>',
								onSubmit: function(){
									return $(this).form('validate');
								},
								success: function(result){
									var result = eval('('+result+')');
									if (result.errno==0){
										$('#dlg').dialog('close');		// close the dialog
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
						$('#dlg').dialog('close')
					}
				}],
				closed: true,  
			">
			
			<div style="padding:10px;">
			<form id="fm" method="post" novalidate >
				<div class="fitem">
					<label>发送方式:</label>
					<select name="type">
						<option value="1">短信和推送</option>
						<option value="2">短信</option>
						<option value="3">推送</option>
					</select>
				</div>		
				<div class="fitem">
					<label>标&nbsp;&nbsp;题:</label>
					 <input class="easyui-validatebox" type="text" name="title"></input>
				</div>	
				<div class="fitem">
					<label>内&nbsp;&nbsp;容:</label>
					<textarea name="message" style="height:60px;">XX您好，您的信息不够充分，请在设置补充附件中，上传****补充信息【滴滴快贷】</textarea>
				</div>
			</form>
			</div>
	</div>
	<!------>
	
	<!---添加离线附件开始-->
		<div id="upload" class="easyui-dialog" title="添加离线附件" style="width:400px;height:350px;padding:10px"
			data-options="
				iconCls: 'icon-save',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
							$('#uploadfm').form('submit',{
								url: '<?php echo U('Loan/fujian');?>',
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
					 <input class="easyui-validatebox" type="hidden" name="uid" value="<?php echo ($userres["id"]); ?>"></input>
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
					url: '<?php echo U('Loan/address',array('id'=>$userres['id']));?>',
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
                        <td>创建时间</td>
                        <td>核查结果</td>
                        <td>核查</td>
                    </tr>
                    <tr>
                        <td>
	                        <?php if($userres["job"] == '1' ): ?>一般员工
	                        <?php elseif($userres["job"] == '2' ): ?>
	                        	内勤
	                        <?php elseif($userres["job"] == '3' ): ?>
	                        	后勤
	                        <?php elseif($userres["job"] == '4' ): ?>
	                        	工人
	                        <?php elseif($userres["job"] == '5' ): ?>
	                        	销售/中介/业务代表
	                        <?php elseif($userres["job"] == '6' ): ?>
	                        	营业/服务
	                        <?php elseif($userres["job"] == '7' ): ?>
	                        	个体商户
	                        <?php elseif($userres["job"] == '8' ): ?>
	                        	学生
	                        <?php elseif($userres["job"] == '9' ): ?>
	                        	管理人员
	                        <?php elseif($userres["job"] == '10' ): ?>
	                        	社会角色<?php endif; ?>
                        </td>
                        <td><?php echo ($userres["com_name"]); ?></td>
                        <td><?php echo ($userres["city"]); ?></td>
                        <td><?php echo ($userres["com_phone"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$userres["create_time"])); ?></td>
                        <td>
                        	<?php if($userres["job_status"] == '1' ): ?><span style="color:green;">审核成功(<?php echo ($userres["job_check"]); ?>)</span>
                        	<?php elseif($userres["job_status"] == '2' ): ?>
                        		<span style="color:red;">未审核(<?php echo ($userres["job_check"]); ?>)</span>
                        	<?php elseif($userres["job_status"] == '3' ): ?>
                        		<span style="color:red;">审核失败(<?php echo ($userres["job_check"]); ?>)</span><?php endif; ?>
                        </td>
                        <td><a href="javascript:void(0);" onClick="check_job(this,<?php echo ($userres["id"]); ?>,<?php echo ($userres["job_status"]); ?>,'<?php echo ($userres["job_check"]); ?>');" style="color: #0000ff;">核查</a></td>
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
                    <td>核查结果</td>
                    <td>创建时间</td>
                    <td>核查</td>
                </tr>
                <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	                    <td>【<?php echo ($v["relation"]); ?>】<?php echo ($v["name"]); ?>
	                    	<?php if($v["is_del"] == '0' ): ?><span style="color:red;">已删除</span><?php endif; ?>
	                    </td>
	                    <td><?php echo ($v["phone"]); ?></td>
	                    <td style="color: #ff0000;">
	                    	<?php if($v["is_result"] == '1' ): ?><span style="color:green;">审核成功(<?php echo ($v["result"]); ?>)</span>
	                    	<?php elseif($v["is_result"] == '2' ): ?>
	                    		<span style="color:red;">未审核(<?php echo ($v["result"]); ?>)</span>
                    		<?php elseif($v["is_result"] == '3' ): ?>
	                    		<span style="color:red;">审核失败(<?php echo ($v["result"]); ?>)</span><?php endif; ?>
	                    </td>
	                    <td><?php echo ($v["createtime"]); ?></td>
	                    <td>
	                    	<span><a href="javascript:void(0);" onClick="check_link(this,<?php echo ($v["id"]); ?>,<?php echo ($v["is_result"]); ?>,'<?php echo ($v["result"]); ?>')">核查</a></span>
	                    	<?php if($v["is_del"] == '1' ): ?><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onClick="del_link(this,<?php echo ($v["id"]); ?>)">删除</a></span><?php endif; ?>
	                    </td>
	                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </section>
    <section class="sh_box">
        <h3>历史申请</h3>
        <div class="detail">
            <table id="datalist2" class="easyui-datagrid" title="" style="width:1200px;height:250px"
				data-options="
					url: '<?php echo U('Loan/loan',array('id'=>$userres['id']));?>',
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
						<th data-options="field:'loan_installments',width:100">期限</th>
						<th data-options="field:'create_time',width:100">申请时间</th>
						<th data-options="field:'shenhe',width:100">审核反馈</th>
						<th data-options="field:'realname',width:100,align:'right'">审核员</th>
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
					url: '<?php echo U('Loan/repay',array('id'=>$userres['id']));?>',
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
						<th data-options="field:'loan_id',width:80">编号</th>
						<th data-options="field:'total',width:100">金额</th>
						<th data-options="field:'installments',width:100">还款期数</th>
						<th data-options="field:'total',width:100">还款金额</th>
						<th data-options="field:'repay_time',width:100,align:'right'">到期还款日</th>
						<th data-options="field:'repay_content',width:100,align:'right'">是否逾期</th>
						<th data-options="field:'real_repay_time',width:100,align:'right'">实际还款日</th>
						<th data-options="field:'realname',width:100,align:'right'">审核员</th>
					</tr>
				</thead>
			</table>
        </div>
    </section>

</div>

<!--------电话历史记录弹出框开始--------- -->
	
	<div id="dlg_mob" class="easyui-dialog" style="width:720px;height:400px;padding:10px 20px" closed="true" buttons="#dlg_mob-buttons">
		<div class="fitem">
			<table border="1" cellspacing="0" class="hk_detail">
				<tr>
					<td>手机号码</td>
					<td>手机归属</td>
					<td>运营商</td>
					<td>手机品牌</td>
					<td>时间</td>
				</tr>
				<?php if(is_array($phonres)): $i = 0; $__LIST__ = $phonres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($v["phone"]); ?></td>
						<td><?php echo ($v["phone_local"]); ?></td>
						<td><?php echo ($v["operators"]); ?></td>
						<td><?php echo ($v["phone_brand"]); ?></td>
						<td><?php echo (date("Y-m-d H:i:s",$v["record_time"])); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div>
	
	<div id="dlg_mob-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearForm()">关闭 </a>
	</div>
	<!-- 电话历史记录弹框结束 -->
	
	<!--------拍照历史记录弹出框开始--------- -->
	<div id="dlg_img" class="easyui-dialog" style="width:720px;height:400px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
		<div class="fitem">
			<label>照片记录:</label>
			<?php if(is_array($anres)): $i = 0; $__LIST__ = $anres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><img src="<?php echo ($v["url"]); ?>" /><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearFormImg()">关闭 </a>
	</div>
	<!-- 拍照历史记录弹框结束 -->
	
	
	<!-- 联系人电话审核弹框开始 -->
	<div id="dlg_phone" class="easyui-dialog" style="width:500px;height:400px;padding:10px 20px" closed="true" buttons="#dlg_phone-buttons">
		<form id="ff" method="post" style="margin-top:40px;" novalidate>
			<div class="fitem">
				<label>核查记录:</label>
				<textarea name="result" styel="width:150px;height:50px;"></textarea>
			</div>
			<br/>
			<div class="fitem">
				<label>核查记录:</label>
				<select name="is_result">
					<option value="1">审核成功</option>
					<option value="2">未审核</option>
					<option value="3">审核失败</option>
				</select>
			</div>
			
			<input type="hidden" id="link_id" name="link_id" value=""/>
		</form>
	</div>
	<div id="dlg_phone-buttons">
		<a href="#" id="sub_btn" class="easyui-linkbutton"  iconCls="icon-edit" onClick="submitForm()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearFormPhone()">取消</a>
	</div>
	<!-- 联系人电话审核弹框结束 -->
	
	<!-- 查看账户弹框开始 -->
	<div id="dlg_acc" class="easyui-dialog" style="width:500px;height:400px;padding:10px 20px" closed="true" buttons="#dlg_acc-buttons">
		<div class="fitem">
			<table border="1" cellspacing="0" class="hk_detail">
				<tr>
					<td>还款日期</td>
					<td>多还</td>
				</tr>
					<?php if(is_array($$repres)): $i = 0; $__LIST__ = $$repres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v["lave_money"] > '0' ): ?><tr>
								<td><?php echo (date("Y-m-d",$v["repay_time"])); ?></td>
								<td><?php echo ($v["lave_money"]); ?></td>
							</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td>余额</td>
					<td><?php echo ($userres["account"]); ?></td>
				</tr>
			</table>
		</div>
			
	</div>
	<div id="dlg_acc-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearFormAcc()">关闭</a>
	</div>
	<!-- 查看账户弹框结束 -->
	
	<!-- 催款弹框开始 -->
	<div id="dlg_ck" class="easyui-dialog" style="width:800px;height:500px;padding:10px 20px" closed="true" buttons="#dlg_ck-buttons">
		<form id="ff" method="post" style="margin-top:40px;" novalidate>
			<div id="tt" class="easyui-tabs" style="width:500px;height:auto;"> 
			    <div title="发给本人" style="overflow:auto;padding:20px;">  
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a(this);">1.<label>（3天内）亲，您的应还款已逾期，请尽快还款。</label></a>
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a(this);">2.<label>（3天）明天起对您的欠款收取高额罚金，请尽快还款。</label></a>
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a(this);">3.<label>（7到30天内）亲，您有什么特殊情况，为何一直未还款，您已逾期超过7天，请尽快还款。</label></a>
					</div>
					<div class="fitem">
						还款方式
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_b(this);">1.<label>【支付宝还款】</label></a>
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_b(this);">2.<label>【银行转账/汇款】</label></a>
					</div>
					
					<div>
						<div class="fitem">
							<label>借款编号：<?php echo ($loanres["loan_num"]); ?>，<?php echo ($loanres["loan_money"]); ?>元</label>
						</div>
						<div class="fitem">
							<label>期数：<span class="num_span"></span></label>
						</div>
						<div class="fitem">
							<label>手机号：</label>
							<input type="text" name="" value="<?php echo ($userres["phone"]); ?>" />
						</div>
						<div class="fitem">
							<label>推送标题</label>
							<input type="text" name="" />&nbsp;&nbsp;&nbsp;标题最好别超过14个字
						</div>
						<div class="fitem">
							<label>内容：</label>
							<textarea name="msg_content" style="width:400px;heigth:300px;"></textarea>
						</div>
					</div>
			    </div>  
			    <div title="发给联系人" style="padding:20px;">  
                   <div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a_fail(this);">1.<label>（3天内）亲，您的应还款已逾期，请尽快还款。</label></a>
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a_fail(this);">2.<label>（3天）明天起对您的欠款收取高额罚金，请尽快还款。</label></a>
					</div>
					<div class="fitem">
						<a href="javascript:void(0);" onClick="cli_a_fail(this);">3.<label>（7到30天内）亲，您有什么特殊情况，为何一直未还款，您已逾期超过7天，请尽快还款。</label></a>
					</div>
					
					<div>
						<div class="fitem">
							<label>借款编号：<?php echo ($loanres["loan_num"]); ?>，<?php echo ($loanres["loan_money"]); ?>元</label>
						</div>
						<div class="fitem">
							<label>期数：第<span class="num_span"></span>/<?php echo ($loanres["loan_installments"]); ?>期，<span class="hk_money"></span></label>
						</div>
						<div class="fitem">
							<label>手机号：</label>
							<input type="text" name="" value="<?php echo ($phstr); ?>" />
						</div>
						<div class="fitem">
							<label>推送标题</label>
							<input type="text" name="" />&nbsp;&nbsp;&nbsp;标题最好别超过14个字
						</div>
						<div class="fitem">
							<label>内容：</label>
							<textarea name="msg_content_fail" style="width:300px;heigth:100px;"></textarea>
						</div>
					</div>
			    </div>
			</div>
			
		</form>
	</div>
	<div id="dlg_ck-buttons">
		<a href="#" id="sub_btn" class="easyui-linkbutton"  iconCls="icon-edit" onClick="submitForm()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="clearFormPhone()">取消</a>
	</div>
	<!-- 催款弹框结束 -->
	
<script type="text/javascript">
	//电话历史记录
	function show_phone(){
		$('#dlg_mob').dialog('open').dialog('setTitle','手机号历史');
	}
	function clearForm(){
		$('#dlg_mob').dialog('close');
	}

	//拍照历史记录
	function show_img(){
		$('#dlg_img').dialog('open').dialog('setTitle','拍照历史');
	}
	function clearFormImg(){
		$('#dlg_img').dialog('close');
	}

	//删除联系人信息
	function del_link(dom,num){
		var common = {};
		common.id = num;
		$.ajax({
			type : "POST",
			data : common,
			url : "/Manerger/index.php/Loan/remove",
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

	//检查联系人
	function check_link(dom,id,is_result,result){
		$('#dlg_phone').dialog('open').dialog('setTitle','电话检查');

		$("[name='result']").text(result);
		var content = "";
		if(is_result==1){
			content += "<option value='1' selected='selected'>审核成功</option>";
			content += "<option value='2'>未审核</option>";
			content += "<option value='3'>审核失败</option>";
		}else if(is_result==2){
			content += "<option value='1'>审核成功</option>";
			content += "<option value='2' selected='selected'>未审核</option>";
			content += "<option value='3'>审核失败</option>";
		}else if(is_result==3){
			content += "<option value='1'>审核成功</option>";
			content += "<option value='2'>未审核</option>";
			content += "<option value='3' selected='selected'>审核失败</option>";
		}
		$("[name='is_result']").find("option").remove();
		$("[name='is_result']").append(content);
		$("#link_id").val(id);
		url = '<?php echo U('Loan/edit_link');?>';
	}

	function clearFormPhone(){
		$('#dlg_phone').dialog('close');
	}
	//工作信息审核
	function check_job(dom,id,is_result,result){
		$('#dlg_phone').dialog('open').dialog('setTitle','电话检查');

		$("[name='result']").text(result);
		var content = "";
		if(is_result==1){
			content += "<option value='1' selected='selected'>审核成功</option>";
			content += "<option value='2'>未审核</option>";
			content += "<option value='3'>审核失败</option>";
		}else if(is_result==2){
			content += "<option value='1'>审核成功</option>";
			content += "<option value='2' selected='selected'>未审核</option>";
			content += "<option value='3'>审核失败</option>";
		}else if(is_result==3){
			content += "<option value='1'>审核成功</option>";
			content += "<option value='2'>未审核</option>";
			content += "<option value='3' selected='selected'>审核失败</option>";
		}
		$("[name='is_result']").find("option").remove();
		$("[name='is_result']").append(content);
		$("#link_id").val(id);
		url = '<?php echo U('Loan/edit_user');?>';
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
					$('#dlg_phone').dialog('close');		// close the dialog
					$.messager.show({
						title: '消息',
						msg: result.msg
					});
					location.reload();
				} else {
					$.messager.show({
						title: '出错啦！！',
						msg: result.msg
					});
				}
			}
		});
	}

	function show_status(val){
	    if(val==1){
		    return "<span style='color:green;'>正常</span>";
		}else{
		    return "<span>未审核</span>";
		}
	 }
	 
	 
	 	function show_manger(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="shenhe('+row.id+')">审核</a>'; 
		}
		
		function show_manger2(val,row){
			   return '<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="del('+row.id+')">删除</a>&nbsp;&nbsp;<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onClick="edit('+row.id+')">修改</a>'; 
		}
		
		
		function shenhe(id){
			$.post('__URL__/pass',{id:id},function(data){
				var result = eval('('+data+')');
					if (result.errno==0){
						$.messager.show({
							title: '审核通过',
							msg: result.mesg
						});
						$('#dg').datagrid('reload');
					} else {
						$.messager.show({
							title: '出错啦！！',
							msg: result.mesg
						});
					}			
			});
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
						//$('#uploadfm').form('clear');
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


	//身份证图片
	function fun(){
		var tmp = '<img src="<?php echo ($result["card_front_middle"]); ?>">';
		$("#big").html(tmp);
		var tmps = '<img src="<?php echo ($result["card_front"]); ?>">';
		$("#show").html(tmps);
	}
	
	function check(){
		var tmp = '<img src="<?php echo ($result["card_back_middle"]); ?>">';
		$("#big").html(tmp);
		var tmps = '<img src="<?php echo ($result["card_back"]); ?>"style="max-width:100%;height:auto;">';
		$("#show").html(tmps);
	}
	function hand(){
		var tmp = '<img src="<?php echo ($result["card_hand_middle"]); ?>" style="max-width:100%;height:auto;">';
		$("#big").html(tmp);
		var tmps = '<img src="<?php echo ($result["hand_back"]); ?>"style="max-width:100%;height:auto;">';
		$("#show").html(tmps);
	}
	$("#big").bind('click',function(){
		$('#dlg_zp').dialog('open').dialog('setTitle','查看照片');
	});

	//查看账户
	function view_account(){
		$('#dlg_acc').dialog('open').dialog('setTitle','查看账户');
	}
	function clearFormAcc(){
		$('#dlg_acc').dialog('close');
	}

	//催款
	function cuikuan(num){
		$('#dlg_ck').dialog('open').dialog('setTitle','查看账户');
		$(".num_span").text(num);
	}
	function show_address(val,row){
			return '<a href="/Manerger/index.php/Address/index/id/'+row.id+'" class="easyui-linkbutton" iconCls="icon-edit" plain="true"  target="iframe_a">查看</a>'; 
	}
	//给催款内容追加文字信息
	function cli_a(dom){
		var a_cont = $(dom).find("label").text();
		$("[name='msg_content']").empty();
		$("[name='msg_content']").append(a_cont);
	}

	function cli_a_fail(dom){
		var a_cont = $(dom).find("label").text();
		$("[name='msg_content_fail']").empty();
		$("[name='msg_content_fail']").append(a_cont);
	}

	function cli_b(dom){
		var a_cont = $(dom).find("label").text();
		$("[name='msg_content']").append(a_cont);
	}
</script>
</body>
</html>