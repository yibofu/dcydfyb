<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="/Public/app/img/logo.ico" type="image/x-icon">
		<title>扁鹊财院-欢迎登陆</title>
		<meta name="title" content="扁鹊财院-领先的财务解决方案供应商。财务咨询，财税咨询，企业上市服务，企业并购服务。">
		<meta name="Keywords" content="财务咨询、股权设计、税务筹划" />
		<meta name="description" content="扁鹊财院以分享财务管理智慧为使命，致力于让企业财务更加安全、利用财务技术创造更多利润、让财务管理更规范。平台隶属于北京大财有道科技有限公司，为企业提供专业的财务培训、财税筹划咨询、高端财务人员猎头、企业资产管理等一站式服务，并为创业型资本运作企业提供财务整体解决方案。"/>

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
				<a href="<?php echo U('Index/index');?>"><img src="/Public/app/img/welcomeLogo.png" width="160px" height="60px"/></a>
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