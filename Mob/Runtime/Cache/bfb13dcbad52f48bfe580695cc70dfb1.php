<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首次信息确认</title>
    <meta name="keywords" content="滴滴快贷，首次信息确认">
    <meta name="description" content="滴滴快贷登录。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <!--<link rel="stylesheet" href="./css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="/Public/Mob/yh/css/progress_style.css"/>
    <script src="/Public/Mob/js/MyRespond.js"></script>
    <style>
        .jindu{
            width: 14rem;
            margin: 0 auto;
            background: #ffffff;
            height: 2rem;
            line-height: 2rem;
            font-size: 0.65rem;
            color: #ee3200;
        }
        .jindutiao{
            display: inline-block;
            width: 8.7rem;
            vertical-align: middle;
            border:1px solid #ee3200;
            height: 1rem;
        }
        .jindutiaos{
            display: block;
            width: 25%;
            height: 100%;
            background: #ee3200;
        }
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
            position: fixed;
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
<header class="dd_header">首次信息确认</header>
<!--<div class="dd_progress"><img src="/Public/Mob/yh/img/prograss03.png" alt=""/></div>-->
<div class="dd_progress" style="background: #ffffff;">
    <!--<img src="/Public/Mob/yh/img/prograss01.png" alt=""/>-->
    <div class="jindu">
        <span style="display: inline-block;">当前进度：100%</span>
        <span class="jindutiao">
            <span class="jindutiaos" style="width: 100%;"></span>
        </span>
    </div>
</div>
<section class="dd_index dd_apply" style="position:relative;">
    <div class="Photo_example"><a href="<?php echo U('Apply/example');?>">查看试例</a></div>
    <section class="take_photo" id="shenfen">
        <h4>本人持身份证拍照</h4>
        <div class="photo_box" id="hand_card">
            <img src="/Public/Mob/yh/img/i_img_take_photo.png" alt="本人持身份证拍照"/>
        </div>
    </section>
    <section class="take_photo" >
        <h4>身份证正面照</h4>
        <div class="photo_box1"id="shenfenT">
            身份证正面照
        </div>
    </section>
    <section class="take_photo">
        <h4>身份证反面照</h4>
        <div class="photo_box1" id="shenfenF">
            身份证正面照
        </div>
    </section>
</section>
<div class="alert_shadow" id="shenfen1" style="display: none;">
    <ul class="photo_alert">
        <span>选择图片位置</span>
        <li onclick="mobile(5,'<?php echo ($id); ?>')">手机拍照</li>
        <!--<li>预览大图</li>-->
        <li class="cancel">取消</li>
    </ul>
</div>
<div class="alert_shadow" id="shenfentt" style="display: none;">
    <ul class="photo_alert">
        <span>选择身份证正面位置</span>
        <li onclick="mobile(3,'<?php echo ($id); ?>')">手机拍照</li>
        <!--<li>预览大图</li>-->
        <li class="cancel">取消</li>
    </ul>
</div>
<div class="alert_shadow" id="shenfenff" style="display: none;">
    <ul class="photo_alert">
        <span>选择身份证正面位置</span>
        <li onclick="mobile(4,'<?php echo ($id); ?>')">手机拍照</li>
        <li class="cancel">取消</li>
    </ul>
</div>
<input type="hidden" name="card_hand_ske" id="card_hand_ske" />
<input type="hidden" name="card_front_ske" id="card_front_ske" />
<input type="hidden" name="card_back_ske" id="card_back_ske" />
<div class="bb_next" onclick="sub()"><a href="javascript:;">确&nbsp;&nbsp;认</a></div>
<div class="Up_shadow" style="display: none;" id="load">
    <img  class="Upload" src="/Public/Mob/yh/img/loading.gif" alt="loading.gif"/>
    <p class="Uptext">正在上传中……</p>
</div>
</body>
<script src="/Public/Mob/yh/js/jquery-1.11.3.min.js"></script>
<script>
    $(function(){
        var height=$("html").height();
        $(".Up_shadow").css({height:height});
        $("#shenfen").bind("click",function(){
            var height=$("html").height();
            $("#shenfen1").css({"display":"block",height:height});

        });
        $("#shenfenT").bind("click",function(){
            var height=$("html").height();
            $("#shenfentt").css({"display":"block",height:height});
        });
        $("#shenfenF").bind("click",function(){
            var height=$("html").height();
            $("#shenfenff").css({"display":"block",height:height});
        });
        $(".cancel").bind("click",function(){
            $(this).parents(".alert_shadow").css("display","none");
        })
    })
		function sub(){
		window.location.href="<?php echo U('Apply/apply',array('id'=>$id));?>";
	}
	
	function mobile(type,id){
		if(type == 5){
			$("#shenfen1").css("display","none");
		}else if(type == 3){
			$("#shenfentt").css("display","none");
		}else if(type == 4){
			$("#shenfenff").css("display","none");
		}
		$("#load").css('display','block');
		window.didikd.clickToPhoto(type,'<?php echo ($id); ?>');
	}
	 function photo(type,id){
		if(type == 1){
			$("#shenfentt").css("display","none");
		}else if(type == 2){
			$("#shenfenff").css("display","none");
		}
		$("#load").css('display','block');
		window.didikd.choosePic(type,'<?php echo ($id); ?>');
	 }
	 function show_photo(url,type){
		var img;
		$("#load").css('display','none');
		if(type == 1){
			img = '<img src="'+url+'" alt="本人持身份证拍照" style="max-width:100%;height:auto;"/>';
			$("#hand_card").html(img);
			$("#card_hand_ske").val(url);
		}else if(type == 2){
			img = '<img src="'+url+'" alt="身份证正面照" style="width:260px;height:120px;"/>';
			$("#shenfenT").html(img);
			$("#card_front_ske").val(url);
		}else if(type == 3){
			var img = '<img src="'+url+'" alt="身份证反面照" style="width:260px;height:120px;"/>';
			$("#shenfenF").html(img);
			$("#card_back_ske").val(url);
		}else{
			return;
		}
	 }
</script>
</html>