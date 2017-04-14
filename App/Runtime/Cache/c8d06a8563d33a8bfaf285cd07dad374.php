<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>欢迎登录</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/Public/app/css/laginPage.css" />
		<link rel="stylesheet" href="/Public/app/fonts/font3/iconfont.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/fonts/font3/iconfont.js" ></script>
	</head>
	<body>
		<!--导航条-->
		<div></div>
		<!--logo-->
		<div class="welcomeBannerAll">
			<!--始终在中间的部分-->
			<div class="welcomeBanner">
				<img src="/Public/app/img/welcomeLogo.png" width="160px" height="60px"/>
				<p class="welcomeText">欢迎登录</p>
			</div>
		</div>
		<!--内容部分-->
		<div class="welcomeMainALL">
			<!--始终在中间的内容-->
			<div class="welcomeMain">
				<div class="FinanceConsultantImg">
					<img src="/Public/app/img/welcomeFinanceConsultant.png">
				</div>
				<div class="loginPageAll">
					<p class="loginPageTitle">用户登录</p>
					<form>
						<p><i class="iconfont icon-yonghuming"></i><span>账号</span><input type="text" name="names" placeholder="手机号码"></p>
						<p><i class="iconfont icon-mima"></i><span>密码</span><input type="password" name="pwd" placeholder="6-16位数字或字母，区分大小写"></p>
					</form>
					<div class="checkPsw">
						<p>
							<input type="checkbox" id="ChkBox">
							<label for="ChkBox">记住密码</label>
						</p>
						<p><a href="<?php echo U('Login/findpassword');?>">找回密码</a></p>
						<button class="searchsub">登录</button>
					</div>
					<div class="logainText">
						<span>还没有账号？</span><a href="<?php echo U('Register/vipRegister');?>">先去注册>></a>
					</div>
					<div class="thridParty">
						<p>第三方登录</p>
						<img src="/Public/app/img/weixing.png" />
					</div>
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
	<!--<script>
		$("html,body").css("font-zize",parseInt($(window).width() / 1000 / 100) + "px" );
	</script>-->
	<script>
		$(".searchsub").bind('click',function(){
			var name = $("input[name='names']").val();
			var pwd = $("input[name='pwd']").val();

			if(name == '' || pwd == ''){
				$("input[name='names']").attr("placeholder","请输入账号");
				$("input[name='pwd']").attr("placeholder","请输入密码");
				return false;
			}
			$.ajax({
				type:"post",
				dataType:'json',
				url:"<?php echo U('Login/login');?>",
				data:{'Phone':name,'password':pwd},
				success:function(data){
					var row = eval(data);
					if(row){
						window.location.href = "<?php echo U('Index/index');?>";
						alert("登录成功");
					}
				}
			});
		})
	</script>
</html>