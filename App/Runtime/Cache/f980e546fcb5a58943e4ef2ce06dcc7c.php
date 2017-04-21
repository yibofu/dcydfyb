<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>欢迎登录</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/Public/app/css/vipRegister.css" />
		<link rel="stylesheet" href="/Public/app/fonts/font3/iconfont.css" />
		<link rel="stylesheet" href="/Public/app/fonts/font1/iconfont.css" />
		<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Public/app/fonts/font3/iconfont.js" ></script>
		<script type="text/javascript" src="/Public/app/fonts/font1/iconfont.js" ></script>
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
					<p class="loginPageTitle">会员注册</p>
					<form>
						<p><i class="iconfont icon-yonghuming"></i><span>账号</span><input type="text" name="Phone" placeholder="手机号码"></p>
						<p><i class="iconfont icon-duanxin"></i><span>短信</span><input name="yanzheng" type="text">
							<a class="yanzheng"  onclick="get_fcode(this)" style="display:block;" id="fbtn">获取验证码</a>
							<a class="seconds heah-slip sizea colod fr noe-twop cursor" style="display: none;" id="fgot_code">
								<i id="fsecond">60</i>秒
							</a>
						</p>
						<p><i class="iconfont icon-mima"></i><span>密码</span><input type="password" name="password" placeholder="6-16位数字或字母，区分大小写"></p>
						
					</form>
					<div class="checkPsw">
						<p>
							<input type="checkbox" id="ChkBox">
							<label for="ChkBox"><span>我已阅读并同意</span><a href="#">《扁鹊财院服务协议》</a></label>
						</p>
						<button name="regis">注册</button>
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
		var new_time = 60;
		function dingshiqi(new_time){
			var a = setInterval(function(){
				new_time = new_time -1;
				if(new_time == 0){
					window.clearInterval(a);
					new_time = 60;
					$("#fgot_code").hide();
					$("#fbtn").show();
				}
				$("#fsecond").html(new_time);
			},1000);
		}
		function get_fcode(dom) {
			var Phone = $("input[name='Phone']").val();
			if (Phone == '' || Phone.match(/^1[0-9]{10}$/) == null) {
				$("input[name='Phone']").val("").attr("placeholder", "请输入合法的手机号码");
				return false;
			}
			$.ajax({
				type:"post",
				url:"<?php echo U('Code/fpwd');?>",
				data:{"Phone":Phone},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error==false){
						return false;
					}else{
						dingshiqi(new_time);
						$("#fgot_code").show();
						$("#fbtn").hide();
					}
				}
			})
		}
		$("button[name='regis']").bind('click',function(){
			var Phone = $("input[name='Phone']").val();
			var yanzheng = $("input[name='yanzheng']").val();
			var password = $("input[name='password']").val();
			if(Phone == '' && yanzheng == '' && password == ''){
				$("input[name='Phone']").val("").attr("placeholder", "手机号不能为空");
				$("input[name='yanzheng']").val("").attr("placeholder", "验证码不能为空");
				$("input[name='password']").val("").attr("placeholder", "密码不能为空");
				return false;
			}
			$.ajax({
				type:"post",
				url:"<?php echo U('Register/check');?>",
				data:{'Phone':Phone,'yanzheng':yanzheng,'password':password},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 2){
						alert(data.msg);
						return false;
					}
					if(!(data.error == 2)){
						window.location.href="<?php echo U('Register/registerSuccess');?>";
					}
				}
			})
		})
	</script>
</html>