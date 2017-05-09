<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
<link href="/Public/admin/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<script src="/Public/admin/js/jquery-1.8.0.min.js"></script>
<title>扁鹊财学院</title>
<script type="text/javascript">
	if(self!=top){top.location=self.location;}
</script>
<style type="text/css">
html,body {
	height: 100%;
}
.box {
	/*filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0C679E', endColorstr='#0C679E'); 
	background-image:linear-gradient(bottom, #0C679E 0%, #0C679E 100%);
	background-image:-o-linear-gradient(bottom, #0C679E 0%, #0C679E 100%);
	background-image:-moz-linear-gradient(bottom, #0C679E 0%, #0C679E 100%);
	background-image:-webkit-linear-gradient(bottom, #0C679E 0%, #0C679E 100%);
	background-image:-ms-linear-gradient(bottom, #0C679E 0%, #0C679E 100%);*/
	
	
	background:url(/Public/admin/imgs/ta_003.jpg) repeat-x top; 
	
	margin: 0 auto;
	position: relative;
	width: 100%;
	height: 100%;
}
.login-box {
	width: 100%;
	max-width:500px;
	height:auto;
	position: absolute;
	*position:inherit;
	margin:0 auto;
	/*top: 50%;*/
	top: 12px;

	margin-top:246px;
	/*设置负值，为要定位子盒子的一半高度*/
	
}
@media screen and (min-width:500px){
	.login-box {
		left: 50%;
		/*设置负值，为要定位子盒子的一半宽度*/
		margin-left: -250px;
	}
}	

.form {
	width: 100%;
	max-width:500px;
	height: 275px;
	margin: 25px auto 0px auto;
	padding-top: 25px;
}	
.login-content {
	height: 300px;
	width: 100%;
	max-width:500px;
	/*background-color: rgba(255, 250, 2550, .6);*/
	background:#eeeeee;
	float: left;
}		
	
	
.input-group {
	margin: 0px 0px 30px 0px !important;
}
.form-control,
.input-group {
	height: 40px;
}

.form-group {
	margin-bottom: 0px !important;
}
.login-title {
	/*padding: 21px 10px;*/
/*	background-color:#197DB9;*/
}
.login-title h1 {
	margin-top: 10px !important;
	margin-bottom: 0!important;
}
.login-title small {
	color: #fff;
}

.link p {
	line-height: 20px;
	margin-top: 30px;
}
.btn-sm {
	padding: 8px 50px !important;
	font-size: 16px !important;
	margin-left:10px;
	margin-top:10px;
}





</style>
</head>

<body>
<!--<div class="xezfdl">
<div class="qs_deng">
  <div class="xezfdl_1a">
   <div class="xezfdl_1aa"><a href=""><img src="/Public/admin/imgs/qs_5.png"/></a></div>
   <div class="xezfdl_1ab"><a href="">返回首页</a></div>
   <div class="clear"></div>
  </div>
</div>

 <div class="xezfdl_1">

  <div class="xezfdl_1b">
   <div class="xezfdl_1ba">
   
   
   	<div class="content">
		<div id="loginWrap">
			<div id="modLoginWrap" class="mod-qiuser-pop">
				<dl class="login-wrap">
					<dt><span id="loginTitle" style=" *font-size:22px;">登录</span></dt>
					<div class="ipbox">
			
						<form action="__URL__/checklogin" id="myform" method="post"/>
						<div class="con">
						 <dd class="botborder" style="z-index:10;">
						  <div class="quc-clearfix login-item" style="border-bottom:1px solid #ddd; height:49px; line-height:49px; ">
						   <label for="username" style=" *width:50px; margin-left:10px; *line-height:49px; *display:block; *float:left;">帐号：</label>
						   <input type="text" name="username" id="username" tabindex="1" class="ipt tipinput1" placeholder="用户名" autocomplete="off" maxlength="100" suggestwidth="374px" style=" *display:block;*float:left;">                           <div class="clear"></div>
						  </div>
						 </dd>
						 <dd class="password" >
						 <div class="quc-clearfix login-item" style="border-radius:0 0 5px 5px;">
						  <label for="password" style="margin-left:10px;*width:50px;margin-left:10px; *line-height:49px; *display:block; *float:left; ">密码：</label>
						  <input type="password" name="password" id="password" tabindex="2" class="ipt tipinput1" placeholder="请输入您的密码" maxlength="20" autocomplete="off" style=" *display:block;*float:left;">
                          <div class="clear"></div>
						 </div>
						</dd>
					   </div>
					  </form>
					</div>
					<div style="margin:0 0 10px; color:#c35d00;" id="error_box">
						<span id="error_tips"></span>
					</div>
					<dd class="submit"> <div class="xezfdl_1bb"><a id="submita" href="javascript:"></a></div> </dd>
				</dl>
			</div>
		</div>
	</div>
  
   </div>
   
  </div>
 </div>
</div>-->



<div class="box">
		<div class="login-box">
			<div class="login-title text-center">
				<h1><small><a href="" target="_blank"><img src="" width="502" height="113"></a></small></h1>
			</div>
			<div class="login-content ">
			<div class="form">
			<form  action="__URL__/checklogin"  method="post"> 
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon" style=" *float:left; *width:40px; *height:26px;*padding-top:20px;"><span class="glyphicon glyphicon-user"><img src="/Public/admin/imgs/ta_001.jpg"></span></span>
							<input type="text" id="username" name="username" class="form-control" placeholder="用户名" style=" *float:left; *width:380px; *height:40px; *line-height:40px;">
                            <div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon" style=" *float:left; *width:40px; *height:26px;*padding-top:20px;"><span class="glyphicon glyphicon-lock"><img src="/Public/admin/imgs/ta_002.jpg"></span></span>
							<input type="password" id="password" name="password" class="form-control" placeholder="密码" style=" *float:left; *width:380px; *height:40px; *line-height:40px;">
						</div>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-xs-4 col-xs-offset-4 ">
						<button type="submit" class="btn btn-sm btn-info">登录</button>
					</div>
				</div>
				
			</form>
			</div>
		</div>
	</div>
</div>



 








</body>
<script>
$(function(){
   $('#submita').click(function(){
	  $('#myform').submit();
   });
});


$(window).keydown(function(event){
		var key = event.which;
		if(key==13){
			$('#myform').submit();
		}
});
</script>
</html>