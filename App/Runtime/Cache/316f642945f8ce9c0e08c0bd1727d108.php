<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>OO交友</title>
		<meta http-equiv="x-ua-compatible" content="IE=edge"/>
		<link href="/Public/app/css/style.css" rel="stylesheet"/>
		<link rel="stylesheet" href="/Public/app/css/font-awesome.min.css"/>
		<script src="/Public/app/js/jquery-1.11.3.min.js"></script>
		<!--[if lt IE9>
    	<script src="./js/html5.js"></script>
   	 	<![end if]-->
		<style>
			#second{ font-style: normal;}
		</style>
	</head>
	<body>
		<div id="box">
			<div class="header">
				<span class="logo">
					<img src="/Public/app/img/ooxxlogo.png" alt="OOXX"/>
				</span>
			</div>
			<div class="content">
				<div class="input" id="part1" style="display: block;">
					<ul class="link usertype">
						<li class="active">新用户注册</li>
						<li class="">老用户登录</li>
					</ul>
					<!--新用户注册-->
					<form method="post">
					<div class="resigter" id="resigter" style="display: block;">
						<div class="addborder" >
							<ul class="addname one" id="wenzi">
								<li>手 机 号 :
								<li>验 证 码 :
								<li>密  &nbsp;&nbsp; 码 :
								<li>昵  &nbsp;&nbsp; 称 :
							</ul>
							<ul class="input_text">
								<li class="li1" id="sex" style="border:0;height:48px;text-align: left; font-family:'SimHei';color: #3C444a;">
									性 &nbsp;&nbsp; 别 :
									<span>
										<input class="radio" type="radio" name="sex" value="1"  id="sex1"/>
										 &nbsp;&nbsp;男<i class="iconfont icon-nan"></i>
									</span>
									<span style="margin-left: 35px; "><!--color: #e86867;-->
										<input class="radio" type="radio" name="sex"  value="2"  id="sex2"/>
										 女<i  class="iconfont icon-nv"></i>
									</span>
								</li>
								<li class="male" style="display: none;">
									<input type="text" placeholder="请输入用户名" name="username" id="name" maxlength='11'/>
								</li>
								<input type="hidden" value="2" id="reg_mess" />
								<li class="female">

									<input style="padding:32px 140px 0 0px" type="text" name="tel" placeholder="请输入手机号" id="reg_tel" maxlength='11'/>
								</li>
								<li class="li2 female">
									<input style="padding:32px 0px 0 10px" type="text"  placeholder="请输入验证码" name="mess" maxlength='5'/>

									<div class="dd_yzmm" onclick="get_code(this)" style="display: block;" id="btn">获取验证码</div>
									<div style="width: 252px;right: -244px; background: #CDCDCD; box-shadow:none; display:none;" id="got_code"><i id="second">60</i>s后重新获取验证码</div>
								</li>
								<li>

									<input type="password" placeholder="请输入密码" name="pwd" id="pwd" maxlength='11'/>
								</li>
								<li class="male" style="display:none;">
									<input type="password" placeholder="请输入密码" name="repwd" id="repwd" maxlength='11'/>
								</li>
								<li>
									<input type="text" placeholder="请输入昵称" name="nickname" id="nickname" maxlength="12" style="width: 400px; height: 31px; line-height: 31px; padding-left: 10px; padding-right: 50px;"/>
								</li>
							</ul>
						</div>
						<p>昵称提交后不可更改</p>
						<input class="submit" type="button" id="sub" value="注册"/>
					</div>
				</form>
					<!--老用户登录-->
					<div class="login" id="login" style="display: none;">
						<form method="post">
							 <div class="addborder">
								<ul class="addname" id="wwzz">
									<li>用 户 名 :
									<li>密  &nbsp;&nbsp; 码 :
								</ul>
								<ul class="input_text logininput">
									<li>
										<input type="text" placeholder="请输入用户名" value="<?php echo ($username); ?>" name="loginname" id="loginname" maxlength='11'/>
									</li>
									<li>
										<input type="password" placeholder="请输入密码" name="loginpwd" id="loginpwd" maxlength='11'/>
									</li>
								</ul>
							 </div>
							<div class="pwdact">
								<span class="remember"><!-- <i class="fa fa-square-o"></i> -->
								&nbsp;</span>
								<a href="<?php echo U('Index/foget');?>" target="_blank"><span class="forget" style="margin-left:26px;">忘记密码</span></a>
							</div>
							<input class="submit" type="button" id="logine" value="登录"/>
						</form>
					</div>
				</div>
				<!--忘记密码-->
				<!--<div class="input" id="fogotmima" style="display: none;">
					<ul class="link fglink">
						<li class="forgetpwd">忘记密码</li>
					</ul>
					<form action="#">
						<div class="resigter" style="display: block;">
							<ul class="input_text">
								<li class="female">
									<input style="padding:32px 140px 0 0px" type="text" name="tel" placeholder="请输入手机号码" id="ftel"/>
								</li>
								<li class="li2 female">
									<input style="padding:32px 140px 0 7px" type="text"  placeholder="请输入验证码" name="fmess"/>
									<div class="dd_yzmm" onclick="get_fcode(this)" style="display: block;" id="fbtn">获取验证码</div>
									<div style="width: 252px;right: -265px; background: #CDCDCD;display:none;" id="fgot_code"><i id="fsecond">60</i>s后重新获取验证码</div>
								</li>
								<li>
									<input type="password" placeholder="请输入密码" name="fpass" id="pass"/>
								</li>
							</ul>
							<input class="submit fgsubmint" onclick="subb()" type="button" value="提交"/>
						</div>
					</form>
				</div>-->
			</div>
			<div class="footer">版权所有：宜春姝慧信息咨询有限公司<br/>网站备案：赣ICP备15011104号-3<br/>客服电话：400-998-7220（周一至周五：9:00-18:00）<br/>客服邮箱：kefu@oojiaoyou.com</div>
		</div>
		<script>
			$(function(){
				$("#name").focus(function () {
					if(!($("#sex1").attr("checked") === "checked")&& !($("#sex2").attr("checked") === "checked")){
						$(this).blur();
						alert("请选择性别");
						return false;
					}
				});
				$("#reg_tel").focus(function () {
					if(!($("#sex1").attr("checked") === "checked")&& !($("#sex2").attr("checked") === "checked")){
						$(this).blur();
						alert("请选择性别");
						return;
					}
				});
				$("#sex  input[type='radio']").click(function () {
					$(this).parent().css("color","#e86867").siblings().css("color","#989da1");
					$(this).attr("checked","checked");
					$(this).parent().siblings().find("input[type='radio']").removeAttr("checked");
//					console.log($(this).attr("checked"));
					var index=$(this).parent().index();

					if($(this).val() == 1){
						$(".one>li").eq(0).html('用 户 名 : ');
						$(".one>li").eq(1).html('密  &nbsp;&nbsp; 码 : ');
						$(".one>li").eq(2).html('再次密码 : ');
					}

					if($(this).val() == 2){
						$(".one>li").eq(0).html('手 机 号 : ');
						$(".one>li").eq(1).html('验 证 码 : ');
						$(".one>li").eq(2).html('密  &nbsp;&nbsp; 码 : ');
					}

					if(index==0){
						$(".male").show();
						$(".female").hide();
					}else{
						$(".male").hide();
						$(".female").show();
					}
				});
				$("")
				$(".usertype li").click(function () {
					$(this).addClass("active").siblings().removeClass("active");
					var index=$(this).index();
					if(index==0){
						$("#resigter").show(); $("#login").hide();
					}else{
						$("#resigter").hide(); $("#login").show();
					}
				});

			});

			$(function(){
			  $("input[name='username']").focus(function(){
			    $(this).next("span").remove();
			    $("input[name='username']").attr("placeholder","请输入用户名");
			  }).blur(function(){
			    ob=$(this);
			    ob.next("span").remove();
			    var s=ob.val();
			    if(s==""){
			      $("input[name='username']").attr("placeholder","请输入用户名");
			      return false;
			    }else if(s.match(/^\w{2,11}$/)==null){
			       $("input[name='username']").val("").attr("placeholder","2-11位数字字母下划线");
			      return false;
			    }else{
			      $.get("<?php echo U(Index/'check_username');?>",{unsrname:s},function(data){
			        if(data.error){
			          ob.next("span").remove();
			           $("input[name='username']").val("").attr("placeholder","对不起，此用户名已存在");
			              return false;
			        }else{
			          ob.next("span").remove();
//			          $("<span>√</span>").css("color","#2DAE71").insertAfter(ob);
			              return true;
//			          $("<span>√</span>").css("color","#2DAE71").insertAfter(ob);
			        }
			      },"html")
			    }
			  });
			});

			//密码的验证
			$(function(){
			  $("input[name='pwd']").focus(function() {
			    $(this).next("span").remove();
			    $("input[name='pwd']").attr("placeholder","密码长度必须为6-11位");
			    return false;
			  }).blur(function() {
			    ob=$(this); 
			    ob.next("span").remove();
			    var s=ob.val();
			    if(s==""){
			      $("input[name='pwd']").val("").attr("placeholder","密码不能为空");
			        return false;
			    }else if(s.match(/^\w{6,11}$/)==null){    
			     $("input[name='pwd']").val("").attr("placeholder","密码长度必须为6-11位");
			        return false;
			    }else{
//			      $("<span class='tell'>√</span>").css("color","#2DAE71").insertAfter(ob);
			      return true;
			      }
			    });
			  })

			//确认密码的验证
			$(function(){
			  $("input[name='repwd']").focus(function() {
			    $(this).next("span").remove();
			    $("input[name='repwd']").attr("placeholder","请再次输入密码");
			    return false;
			  }).blur(function() {
			  	ob=$(this);
			    obb=$("input[name='repwd']"); 
			    ob.next("span").remove();
			    var s=obb.val();
			    if(s==""){
			      $("input[name='repwd']").attr("placeholder","密码不能为空");
			      return false;
			    }else if(s!=$("input[name='pwd']").val()){
			       $("input[name='repwd']").val("").attr("placeholder","两次输入的密码不一致");
			       return false;
			     }else{
//			      $("<span class='tell'>√</span>").css("color","#2DAE71").insertAfter(ob);
			      return true;
			    }
			  });
			})

			//昵称
			$(function(){
			  $("input[name='nickname']").focus(function() {
			    $(this).next("span").remove();
			    $("input[name='nickname']").attr("placeholder","中文、数字、字母的组合");
			    return false;
			  }).blur(function() {
			    ob=$(this); 
			    ob.next("span").remove();
			    var s=ob.val();
				var c = /[\u4e00-\u9fa5]{2,10}/g;
			    if(s==""){
			      $("input[name='nickname']").val("").attr("placeholder","不允许为空");
			        return false;
			    }else if(!c.test(s)){    
			        var b = /^[0-9a-zA-Z]*$/g;
					if(b.test(s)){
						return true;
					}else{
						 $("input[name='nickname']").val("").attr("placeholder","输入不合要求");
						return false;
					}
			    }else{
//			      $("<span class='tell'>√</span>").css("color","#2DAE71").insertAfter(ob);
			      return true;
			      }
			    });
			  })

			  
		function get_code(dom){
			/*结束*/
			var mobile = $("#reg_tel").val();
			var new_time = 60;
			var re = /^1\d{10}$/;
			console.log(mobile);
			if(mobile == '' ){
				 $("input[name='tel']").val("").attr("placeholder","手机号格式不正确");
			        return false;
			}
			if(!re.test(mobile)){
				$("input[name='tel']").val("").attr("placeholder","手机号格式不正确");
			    return false;
			}
			$.ajax({ 
				type: "post", 
				url: '<?php echo U("Code/sendsms");?>',
				data:{'mobile':mobile},
				success:function(data){
				var data = eval("("+data+")");
					$("#got_code").show();
					$("#btn").hide();
					var a = setInterval(function(){
						new_time = new_time - 1;
						if(new_time == 0){
							clearInterval(a);
							new_time = 60;
							$("#got_code").hide();
							$("#btn").show();
						}
						$("#second").html(new_time);
					},1000);
				}
			});			
		}	

			function get_fcode(dom){
			/*结束*/
			var mobile = $("#ftel").val();
			var new_time = 60;
			var re = /^1\d{10}$/;
			if(mobile == '' || !re.test(mobile)){
				 $("input[name='ftel']").val("").attr("placeholder","请填写手机号");
			        return false;
			}
			$.ajax({ 
				type: "post", 
				url: '<?php echo U("Code/fpwd");?>',
				data:{'mobile':mobile},
				success:function(data){
				var data = eval("("+data+")");
				if(data.error){
					$("#fgot_code").show();
					$("#fbtn").hide();
					var a = setInterval(function(){
						new_time = new_time - 1;
						if(new_time == 0){
							clearInterval(a);
							new_time = 60;
							$("#fgot_code").hide();
						
							$("#fbtn").show();
						}
						$("#fsecond").html(new_time);
					},1000);
						}else{
							$("[name=tel]").val('');
							return;
						}
				
				}		
			})
		}
		$("input[name='mess']").bind('click',function(){
			var mess = $(this).val();
			var tel = $('#tel').val();
			$.ajax({
					type: "post",
					url: "<?php echo U('Index/check_mess_reg');?>",
					data:{'mess':mess,'phone':tel},
					success:function(data){	
						var data = eval("("+data+")");
						if(!data.error){
							alert(data.msg);
							$("#reg_mess").val(2);
						}else{
							$("#reg_mess").val(1);
						}
					}
			});
		})
			
			
			
			$("#sub").bind('click',function(){
				var sex = $("input[name='sex']:checked").val();
				var mess = $("input[name='mess']").val();
				var name = $('#name').val();
				var tel = $('#reg_tel').val();
				var pwd = $('#pwd').val();
				var repwd = $('#repwd').val();
				var nickname = $('#nickname').val();
				var reg_mess = $("#reg_mess").val();
				if(sex == 1){
					if(name == '' && pwd == '' && nickname == '' && repwd == ''){
						alert('信息不能为空');
						return false;
					}
				}else{
					if(tel == '' && pwd == '' && nickname == '' && mess == ''){
						alert('信息不能为空');
						return false;
					}
					if(reg_mess == 2){
						alert('验证码不正确');
						return false;
					}
				}
				var a = /^[\u4e00-\u9fa5]{2,10}$/g;
				if(nickname==""){
			      $("input[name='nickname']").val("").attr("placeholder","不允许为空");
			        return false;
			    }else if(!a.test(nickname)){  
					var b = /^[0-9a-zA-Z]*$/g;
					if(!b.test(nickname)){
						$("input[name='nickname']").val("").attr("placeholder","输入不合要求");
						return false;
					}
			    }
				$.ajax({
						type: "post",
						url: "<?php echo U('Index/check');?>",
						data:{'sex':sex,'mess':mess,'name':name,'tel':tel,'pwd':pwd,'repwd':repwd,'nickname':nickname},
						success:function(data){	
							var data = eval("("+data+")");
							if(data.error){
								if(data.sex == 1){
									window.location.href = "<?php echo U('Show/index');?>";
								}else{
									window.location.href = "<?php echo U('User/women');?>";
								}
							}
						}
				});
			})

			$("#logine").bind('click',function(){
				var username = $("#loginname").val();
				var password = $("#loginpwd").val();
				$.ajax({
					type:'post',
					url:"/index.php/Index/loginin",
					data:{'username':username,'password':password},
					success:function(data){
						row = eval('('+data+')');
						if (row.error){
							if(row.sex == 1){
								window.location.href = "<?php echo U('Show/index');?>";
							}else{
								window.location.href = "<?php echo U('User/women');?>";
							}				
						}else{
							alert(row.msg);
						}
					}
				});
			})

			//忘记密码
			function subb(){
				var tel = $("[name=ftel]").val();
				var pass = $("[name=fpass]").val();
				var code = $("[name=fmess]").val();
				$.ajax({
					type:"post",
					url:"{U('Index/fpwd')}",
					data:{'ftel':tel,'fpass':pass,'fmess':code},
					success:function(data){
						var data = eval("("+data+")");
						if(data.error){
							window.location.href = "<?php echo U('Show/index');?>";
						}else{
							window.location.href = "<?php echo U('Show/index');?>";
						}
					}
				})
			}
		</script>
	</body>
</html>