<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
        <style>
            #main {
                height: 1800px;
                padding-top: 90px;
                text-align: center;
            }

            #fullbg {
                background-color: gray;
                left: 0;
                /*bottom: 0;*/
                /*right: 0;*/
                opacity: 0.5;
                position: absolute;
                top: 0;
                z-index:3;
                filter: alpha(opacity=50);
                -moz-opacity: 0.5;
                -khtml-opacity: 0.5;
            }

            #dialog {
                background-color: #fff;
                border: 5px solid rgba(0, 0, 0, 0.4);
                height: 400px;
                left: 36%;
                margin: -200px 0 0 -200px;
                padding: 1px;
                position: fixed !important;
                /* 浮动对话框 */
                position: absolute;
                top: 50%;
                width: 950px;
                z-index: 5;
                border-radius: 5px;
                display: none;
            }

            #dialog p {
                margin: 0 0 12px;
                height: 31px;
                width: 100%;
                line-height: 31px;
                background: #f3f3f3;
                overflow: hidden;
            }

            #dialog p.close {
                text-align: left;
               text-indent: 10px;
                color: #000000;
                font-weight: 700;
                font-size: 14px;
            }

            #dialog p.close img {
                float: right;
                margin-top: 3px;
                margin-right: 3px;
                width: 25px;
                height: 25px;
                cursor: pointer;
            }
            #dialog div{
                width: 100%;
                margin-top: 20px;
            }
            #dialog button{
                width: 300px;
                height: 45px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                line-height: 45px;
                color: #ffffff;
                letter-spacing: 3px;
                background: #0098B3;
                margin: 0 auto;
                border: 0;
            }
            #dialog textarea{
                width:95%;
                height: 65%;
                margin: 0 auto;
                resize: none;
                border: none;
                padding:0 10px 0 10px;
                color: #666666;
                font-family:"微软雅黑";
                font-size: 14px;
                line-height: 20px;
            }
        </style>
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
							<input type="checkbox" id="ChkBox"checked="checked">
							<label for="ChkBox"><span>我已阅读并同意</span><a href="#" onclick="showBg()">《扁鹊财院服务协议》</a></label>
						</p>
						<button name="regis">注册</button>
					</div>
					<div class="thridParty">
						<p>第三方登录</p>
						<img src="/Public/app/img/weixing.png" />
					</div>
				</div>

                <!--弹窗-->
                <div id="main">
                    <div id="fullbg"></div>
                    <div id="dialog">
                        <p class="close"><span>扁鹊财院注册协议</span><img src="/Public/app/img/cross.png" onclick="closeBg();"></p>
                        <textarea>注册前请先阅读【扁鹊财院】协议欢迎您加入【扁鹊财院】参加交流和讨论，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款：
     一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息：
        （一）煽动抗拒、破坏宪法和法律、行政法规实施的；
        （二）煽动颠覆国家政权，推翻社会主义制度的；
        （三）煽动分裂国家、破坏国家统一的；
        （四）煽动民族仇恨、民族歧视，破坏民族团结的；
        （五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；
        （六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；
        （七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；
        （八）损害国家机关信誉的；
        （九）其他违反宪法和法律行政法规的；
    二、互相尊重，对自己的言论和行为负责。
    三、个人资料与隐私
        （一）您应当保证注册时提交的用户信息的正确性与完整性。
        （二）当资料发生变化时，您应当及时通过网页上发布的联系方式进行更改。
        （三）如您提供的用户信息不准确、不完整或您未及时更改用户信息而引起的一切后果由您本人承担。
                        </textarea>
                        <div><button onclick="closeBg()">同意并继续</button></div>
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
//                    window.location.href = "<?php echo U('Index/index');?>";
						alert(data.msg);
						return false;
					}
					if(!(data.error == 2)){
						alert("注册成功，您可以去个人中心完善个人信息");
						window.location.href="<?php echo U('Index/index');?>";
					}
				}
			})
		})


//        $(".deal").on("click",function(){
//            $(".popUPDiv,.popUP").css("display","block");
//        });
//        $(".popUP button").on("click",function(){
//            $(".popUPDiv,.popUP").css("display","none");
//        });
        //弹窗

        function showBg() {
            var bh = $("html").height();
            var bw = $("html").width();
            $("#fullbg").css({
                height:bh,
                width:bw,
                display:"block"
            });
            $("#dialog").show();
        }
        //关闭灰色 jQuery 遮罩
        function closeBg() {
            $("#fullbg,#dialog").hide();
        }
    </script>
</html>