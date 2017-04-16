<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>账户安全</title>
		<link rel="stylesheet" href="/Public/app/css/account-security.css" />
		<link rel="stylesheet" href="/Public/app/css/commonality.css" />
		<script src="/Public/app/js/jquery.min.js"></script>
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
						<p class="person_title"><span>账户安全</span></p>
						<div class="security">
							<form>
								<p><span>原始密码：</span><input class="oldPassword"  type="text" name="oldpasswd"/><span class="hint"></span></p>
								<p><span>新建密码：</span><input  class="newPassword" type="text" name="newpasswd"/><span class="hint"></span></p>
								<p><span style="margin-left: 14px;">验证码：</span><input  type="text" class="inputCode" name="vcode"/><input class="codeBtn" type="button" value="发送验证码" name="sendCode"></p>
								<button name="sub" type="button">提交</button>
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


	</body>
	<script>
			$(function(){
				$(".bac-e a").eq(3).css("color","#55BDCF");

				/*
				$('input[name=sendCode]').click(function(){
					var uid = <?php echo ($uid); ?>
					$.post('<?php echo U("Code/chwd");?>', {'uid':uid}, 
							function(res){
								alert(res);
							}
					);		
						
				});
				*/
			});


		$('button[name="sub"]').click(function() {
			var data = collectForm();
			console.log(data);
			$.post(
				'<?php echo U("MyCenter/changePassword");?>', 
				{'data':data}, 
				function(res) {
					alert(res);
				}	
			);
		});



		//收集表单数据
		function collectForm(name) {
			var data = {};
			var form = 'form';
			if(name) {
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