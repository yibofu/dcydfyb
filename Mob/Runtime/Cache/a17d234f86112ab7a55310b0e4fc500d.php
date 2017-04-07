<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>补充附件</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，补充附件">
    <meta name="description" content="滴滴快贷补充附件。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/set.css"/>
    <link rel="stylesheet" href="/Public/Mob/css/footer.css"/>
    <script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
	 <link rel="stylesheet" href="/Public/Mob/css/progress_style.css"/>
	 <style>
        .Upload{
            position: absolute;
            left: 50%;
            top: 50%;
            height: 50px;
            width: 50px;
            margin-top: -25px;
            margin-left: -25px;
            -moz-border-radius: 50% 50% 50% 50%;
            -webkit-border-radius: 50% 50% 50% 50%;
            border-radius: 50% 50% 50% 50%;
            text-align: center;
            line-height: 150px;

        }
       .Up_shadow{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.5);
            z-index: 122;
        }
        .Uptext{
            color: #ffffff;
            position: absolute;
            left: 50%;
            top: 57%;
            height: 30px;
            width: 150px;
            margin-left: -70px;
            line-height: 30px;
            text-align: center;
        }
    </style>
</head>
<body class="mhome">
<header class="dd_header">补充附件<span class="fa fa-chevron-left dd_return" onclick="window.history.go(-1)"></span></header>
<section class="dd_index">
    <form action="<?php echo U('User/annex_update');?>" id="myform" method="post">
        <div class="dd_buchong">
            <span class="buchong_title">标题</span><input type="text" id="fj_title" placeholder="请输入标题" name="title"/>
        </div>
        <div class="show_img" id="show_img">
            <img src="/Public/Mob/img/i_img_take_photo.png" alt="" width="100%"/>
        </div>
		<input type="hidden" name="url_ske" id="url_ske"/>
		<input type="hidden" name="aid" id="aid">
    </form>
	<div class="alert_shadow" id="shenfentt" style="display: none;">
    <ul class="photo_alert">
        <span>选择方式</span>
        <li onclick="mobile(7)">手机拍照</li>
       <!-- <li onclick="photo(7,'<?php echo ($id); ?>')">手机相册</li> -->
        <li class="cancel">取消</li>
    </ul>
	</div>
    <div class="dd_yzm" id="shenfenT"><a href="javascript:;">查找拍照</a></div>
    <div class="dd_yzm dd-zc" style="margin-top:10px;" onclick="sub()"><a href="javascript:;">确认</a></div>
</section>
<div class="Up_shadow" id="load" style="display:none;">
    <img  class="Upload" src="/Public/Mob/img/loading.gif" alt="loading.gif"/>
    <p class="Uptext">正在上传中……</p>
</div>
<footer class="web_footer">
    <ul>
		
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
		MODEL_NAME
    </ul>
</footer>
<script>
	 $("#shenfenT").bind("click",function(){
            var height=$("html").height();
            $("#shenfentt").css({"display":"block",height:height});
        });
	$(".cancel").bind("click",function(){
            $(this).parents(".alert_shadow").css("display","none");
      })
    $(function () {
        var screen_height=$(window).height();
       $(".show_img").css({
           height:screen_height/3
       });
        $(".show_img").css({
            height: $(".show_img").find("img").height()
        });

    })
	function mobile(types){
		$("#shenfentt").css("display","none");
		$("#load").css('display','block');
		//请求后台添加一条新数据
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('User/annex_add');?>",
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 0){
						$("#aid").val(data.id);
						window.didikd.clickToPhoto(types,data.id);
					}
				}
		});
	}
	 /*
	 function photo(type,id){
		$("#shenfentt").css("display","none");
		$("#load").css('display','block');
		window.didikd.choosePic(type,'<?php echo ($id); ?>');
	 }
	 */
	 function show_photo(url,type){
		var img;
		$("#load").css('display','none');
		img = '<img src="'+url+'" alt="附件" style="max-width:100%;height:auto;"/>';
		$("#show_img").html(img);
		$("#url_ske").val(url);
	 }
	 function sub(){
		$("#myform").submit();
	 }
</script>
</body>
</html>