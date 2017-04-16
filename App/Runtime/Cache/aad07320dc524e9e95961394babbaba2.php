<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>收货地址</title>
		<link rel="stylesheet" href="/Public/app/css/delivery-address.css" />
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/delivery-address.js"></script>
		<script src="/Public/app/js/region_select.js"></script>
	</head>
	<body>
		<div class="page_all">
			<!--banner部分-->
			<div class="banner">
	<div class="banner_range">
		<div class="range_left">
			<a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/logo.png" /></a>
			<p>企业财务健康顾问</p>
		</div>
		<div class="range_right">
			<p>用户中心</p>
			<button>用户中心</button>
		</div>
	</div>
</div>

			<!--内容部分-->
			<div class="text_all">
				<!--左侧菜单栏-->
				<div class="menu_list">
	<ul class="three-a fl title-a text tab-nav">
		<li class="bac-a color-d" id="min-a" name="basia">账户信息</li>
		<li class="bac-e color-v" name="basib"><a href="<?php echo U('MyCenter/index');?>">我的首页</a></li>
		<li class="bac-e color-v" name="basib"><a href="<?php echo U('MyCenter/personInfo');?>">个人信息</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('MyCenter/bill');?>">我的发票</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('MyCenter/accountSecurity');?>">账户安全</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('ReciveAddress/index');?>">收货地址</a></li>
		<li class="i bac-e color-v" name="basic"><a href="<?php echo U('WebMessage/index');?>">我的消息</a></li>
		<li class="bac-a color-d">我的服务</li>
		<li class="bac-e color-v" name="basid"><a href="<?php echo U('MyService/diagnoseList');?>">我的诊断</a></li>
		<li class="i bac-e color-v" name="basie"><a href="<?php echo U('MyService/apporintmentList');?>">我的约见</a></li>
		<li class="i bac-e color-v" name="basie"><a href="<?php echo U('MyService/questionList');?>">我的提问</a></li>
		<li class="bac-a color-d">课程中心</li>
		<li class="i bac-e color-v" name="basif"><a href="<?php echo U('MyCart/index');?>">线上课程</a></li>
		<li class="i bac-e color-v" name="basio"><a href="<?php echo U('MyOpenCourse/index');?>">线下课程</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('MyCollect/index');?>">收藏课程</a></li>
		 <li class="bac-a color-d">帮助中心</li>
		<li class="i bac-e color-v" name="basif"><a href="<?php echo U('HelpCenter/payProblem');?>">支付问题</a></li>
		<li class="i bac-e color-v" name="basio"><a href="<?php echo U('HelpCenter/billProblem');?>">发票问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/accountProblem');?>">账户问题</a></li>
		<li class="i bac-e color-v" name="basip"><a href="<?php echo U('HelpCenter/makeselfProblem');?>">定制服务</a></li>
	</ul>
</div>


				<!--个人信息-->
				<div class="main_person_text" style="width: 780px;" >
						<p class="person_title"><span>收货地址</span></p>
						<div class="getAddressAll">
							<div class="getAddress">
								<div class="yetAddress"><p>已有收货地址</p><img src="/Public/app/img/gou.png"/></div>
							</div>	
							<div class="addressSpecific">
								<?php if(is_array($data["allAddress"])): $i = 0; $__LIST__ = $data["allAddress"];if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$address): $mod = ($i % 2 );++$i;?><div class="addressSpecificModel">
									<p class="name"><span>收货人：</span><?php echo ($address["reciver"]); ?>
										<span name="makeDefault" attr="<?php echo ($address["id"]); ?>" <?php if($address["isdefault"] == 1): ?>class="default-Address"<?php endif; ?> style="<?php if($address["isdefault"] == 1): ?>block<?php endif; ?>">
										<?php if($address["isdefault"] == 1): ?>默认地址<?php endif; ?>
										</span>
									</p>
									<p class="area"><span>所在地区：</span><?php echo ($address["area"]); ?></p>
									<p class="address"><span>地址：</span><?php echo ($address["address"]); ?></p>
									<p class="phone"><span>手机：</span><?php echo ($address["phonenumber"]); ?></p>
								</div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
							</div>
							<div class="addAddress-main">
								<div class="addAddress"><p>新增收货地址</p><img src="/Public/app/img/gou.png"/></div>
								<p class="foundAddress">您已创建<?php echo ($data["count"]); ?>个收货地址</p>
							</div>
							<div class="btn">
								<button class="submitBtn">提交</button>
								<button class="abolishBtn">取消</button>
							</div>
						</div>
						<!--新增收货地址-->
						<div class="addAddressPopup" style="display: none;">
							<p class="addAddressPopupTitle">新增收货地址</p>
							<div class="popupInput">
								<form action="" method="post">
								<p><span>收货人:</span><input type="text" name="rec" /><span class="hint"></span></p>
								<p><span>手机:</span><input type="text" name="phone" /><span class="hint"></span></p>
								<p><span>省份:</span>
									<select name="location_p" id="location_p"></select>
									<span class="hint"></span>
								</p>
								<p><span>城市:</span>
									<select name="location_c" id="location_c"></select>
									<span class="hint"></span>
								</p>
								<p><span>区/县:</span>
									<select name="location_a" id="location_a"></select>
									<span class="hint"></span>
								</p>
								<p><span>具体地址:</span><input type="text" name="adetial" /><span class="hint"></span></p>
							</div>
							<div class="popupBtn">
								<button name="sub" type="button">保存</button>
								<button class="popupBtnAbolish">取消</button>
							</div>
							</form>
						</div>
						<!--新增发票-->
						<!--<div class="addInvoice" style="display: none;">
							<p>新增发票</p>
							<input type="text" />
							<p>发票抬头</p>
							<div class="invoiceTitle">
								<p>广大冰泉集团有限公司<span>×</span><span></span></p>
								<p>广大冰泉集团有限公司<span>×</span><span></span></p>
								<p>广大冰泉集团有限公司<span>×</span><span></span></p>
							</div>
							<div class="addInvoiceBtn">
								<button type="submit">保存</button>
								<button class="addInvoiceBtnAbolish">取消</button>
							</div>
						</div>-->
						
				</div>
			</div>
			
			<!--友情链接-->
			<div class="friendly_link">
	<div class="link_title">友情链接</div>
	<ul>
		<li><a href="#">天津长财咨询</a></li>
		<li><a href="#">长财咨询</a></li>
		<li><a href="#">北京长财咨询</a></li>
		<li><a href="#">太原长财咨询</a></li>
		<li><a href="#">广州长财咨询</a></li>
		<li><a href="#">成都长财咨询</a></li>
		<li><a href="#">长沙长财咨询</a></li>
		<li><a href="#">金华长财咨询</a></li>
		<li><a href="#">四度信息</a></li>
	</ul>
</div>


		</div>
	</body>
	<script type="text/javascript">
		new PCAS('location_p', 'location_c', 'location_a');

		$('span[name=makeDefault]').click(function(){
			var aid = $(this).attr('attr');		
			$.post(
				'<?php echo U("ReciveAddress/isDefault");?>',	
				{'data':aid},
				function(res) {
					if(res == 1) {
						alert('设置成功');
					} else {
						alert('设置失败');
					}
				}
					
			);
		});

		$('button[name="sub"]').click(function() {
			var data = collectForm();

			$.post('<?php echo U("ReciveAddress/addAddress");?>', {'data':data}, 
				function(res) {
					if(res == 1)  {
						alert('添加成功');
					} else {
						alert('添加失败');
					}
				}	
			);
		});


	
		//收集表单数据
		function collectForm() {
			var data = {};

			var checkbox = $('input[type=checkbox]:checked'); 
			var checkBoxName = checkbox.attr('name');
			data[checkBoxName] = [];
			checkbox.each(function() {
					data[checkBoxName].push($(this).val());
			});

			var radio = $('input[type=radio]:checked'); 
			var radioName = radio.attr('name');
			data[radioName] = [];
			data[radioName] = radio.val();

			$('form input,select,textarea').each(
				function(){
					if($(this).val() != '') {
						var tmp = $(this).attr('name');
						var type = $(this).attr('type');
						if(type != 'checkbox' && type != 'radio') {
							data[tmp] =  $(this).val();
						}
					}
			});

			return data;
		}		
	</script>
</html>