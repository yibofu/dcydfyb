<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>发票信息</title>
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<link rel="stylesheet" href="/Public/app/css/bill.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
		<script src="/Public/app/js/bill.js"></script>
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
				<div class="main_person_text" >
					<p class="person_title"><span>发票信息</span></p>
					<div class="invoiceType">
						<p class="billCommonBtn">
							<input  type="radio" name="billtype" value="putong" checked="checked" id="putong"/>
							<label for="putong">普通发票</label>
							<img src="/Public/app/img/gou.png"/>
						</p>
						<p class="billAddBtn">
							<input  type="radio" name="billtype" value="zengzhi" id="zengzhi"/>
							<label for="zengzhi">增值税发票</label>
							<img src="/Public/app/img/gou.png"/></p>
					</div>
					<!--普通发票-->
					<div class="billCommon">
						<form name="putong">
						<div class="rise">
							<span>发票抬头：</span>
							<p class="personBill">
								<input  type="radio" name="billMold" value="个人" checked="checked" id="geren"/>
								<label for="geren">个人</label>
								<img src="/Public/app/img/gou.png" />
							</p>
							<p class="companyBill">
								<input  type="radio" name="billMold" value="gongsi" id="company1"/>
								<label for="company1">北京大财有道科技有限公司</label>
								<img src="/Public/app/img/gou.png" />
							</p>
							<a>新增单位发票</a>
						</div>
						<div class="contants">
							<span>发票内容：</span>
							<p class="contantAsk">
								<input  type="radio" name="billMain" value="1" checked="checked" id="zixun"/>
								<label for="zixun">咨询</label>
								<img  src="/Public/app/img/gou.png">
							</p>
							<p class="contantTrain">
								<input  type="radio" name="billMain"  value="2" id="peixun"/>
								<label for="peixun">培训</label>
								<img  src="/Public/app/img/gou.png">
							</p>
						</div>
						<div class="btn">
							<button name="sub" type="button" class="submitBtn">提交</button>
							<button class="abolishBtn">取消</button>
						</div>
						</form>
					</div>
					<!--增值税发票-->
					<div class="billAdd">
						<form name="zengzhi">
						<div class="billStyle">
							<span style="color: #666666;margin-left: 45px;margin-top:5px;">开票方式：</span>
							<p class="second_span">订单完成后开票<img src="/Public/app/img/gou.png"/></p>
						</div>
						<p class="company_name" style="margin-left: 32px;">
							<span>*</span>
							<span >单位名称：</span>
							<input type="text" name="company"/>
							<span class="hint"></span>
						</p>
						<p>
							<span>*</span>
							<span>纳税人识别码：</span>
							<input type="text" name="pcode" />
							<span class="hint"></span>
						</p>
						<p style="margin-left: 32px;">
							<span>*</span>
							<span>注册地址：</span>
							<input type="text" name="address" />
							<span class="hint"></span>
						</p>
						<p style="margin-left: 32px;">
							<span>*</span>
							<span>注册电话：</span>
							<input type="text" name="phone" />
							<span class="hint"></span>
						</p>
						<p style="margin-left: 32px;">
							<span>*</span>
							<span>开户银行：</span>
							<input type="text" name="openbank" />
							<span class="hint"></span>
						</p>
						<p style="margin-left: 32px;">
							<span>*</span>
							<span>银行账户：</span>
							<input type="text" name="openaccount" />
							<span class="hint"></span>
						</p>
						<div class="btn">
							<button type="button" name="sub" class="submitBtn">提交</button>
							<button class="abolishBtn">取消</button>
						</div>
						</form>
					</div>
					
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
	<script>
		$('button[name="sub"]').click(function() {
			var url = '';
			var type = $('input[name=billtype]:checked').val();
			var data = collectForm(type);
			switch(type) {
				case 'putong':
					url = '<?php echo U("MyCenter/ptbill");?>';
					break;
				
				case 'zengzhi':
					url = '<?php echo U("MyCenter/zzbill");?>';
					break;
			}

			$.post(
				url, 
				{'data':data}, 
				function(res) {
					if(res == 1) {
						alert('申请成功');
					} else {
						alert(res);
					}
				}	
			);
		});

		//收集表单数据
		function collectForm(name) {
			var data = {};
			var form = 'form';
			if(name != '') {
				form = form + '[name=' +name+ ']';	
			}

			var checkbox = $(form + ' input[type=checkbox]:checked'); 
			var checkBoxName = checkbox.attr('name');
			data[checkBoxName] = [];
			checkbox.each(function() {
					data[checkBoxName].push($(this).val());
			});

			var radio = $(form + ' input[type=radio]:checked'); 
			radio.each(function() {
				var radioName = $(this).attr('name');
				data[radioName] = '';
			});

			radio.each(function() {
				var rname = $(this).attr('name');
				data[rname] = $(this).val();
			});

			$(form + ' input,select,textarea').each(
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