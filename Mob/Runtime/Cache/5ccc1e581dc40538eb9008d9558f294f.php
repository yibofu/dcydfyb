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
    <link rel="stylesheet" href="/Public/Mob/yh/css/progressNew.css"/>
    <link rel="stylesheet" href="/Public/Mob/css/20151223apply.css"/>
    <script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
    <script src="/Public/Mob/js/MyRespond.js"></script>
    <script src="/Public/Mob/js/jsAddress.js"></script>
    <style>
        .tishi{
            width: 14rem;
            margin: 0 auto;
            font-size: 0.65rem;
            color: #ee3200;
            margin-bottom: 7.5rem;
        }
			 /*浮层样式*/
        .shadowBox{
            width: 100%;
            height: 100%;
            max-width: 640px;
            margin: 0 auto;
            overflow: hidden;
            position: fixed;
            /*left: 0;*/
            top: 0;
            z-index: 50;
            background: rgba(0, 0, 0, 0.8);
			display:none;
        }
        .wrapBox{
            width: 80%;
            /*height: 40%;*/
            position: absolute;
            top: 20%;
            left: 50%;
            margin-left: -40%;
            -webkit-box-shadow: 0 0 4px #000000;
            -moz-box-shadow: 0 0 4px #000000;
            box-shadow: 0 0 4px #000000;
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .wrapBox p{
            padding: 10px;
        }
        .wrapBox p:last-of-type{
            margin-bottom: 40px;
        }
        .wrapBox .shadowBtn {
            position: relative;
            width: 100%;
        }
        .wrapBox .shadowBtn .Btn_container{
            width: 80%;
            padding-bottom: 30px;
            margin: 0 auto;

        }
        .wrapBox .shadowBtn .Btn_container:after{
            content: '';
            display: block;
            height: 0;
            clear: both;
        }
        .wrapBox .shadowBtn span{
            display: block;
            width: 45%;
            background: #ee3200;
            margin-right: 5%;
            text-align: center;
            float: left;
            line-height: 2.2;
            color: #ffffff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        /*浮层样式*/
    </style>
</head>
<body  class="mhome">
<header class="dd_header">首次信息确认</header>
<div class="dd_progress" style="background: #ffffff;">
    <!--<img src="/Public/Mob/yh/img/prograss01.png" alt=""/>-->
    <div class="jindu">
        <span style="display: inline-block;">当前进度：75%</span>
        <span class="jindutiao">
            <span class="jindutiaos" style="width: 75%;"></span>
        </span>
    </div>
</div>
<form action="<?php echo U('Apply/bankadd',array('id'=>$id));?>" method="post" id="myform">
    <div id="myinfo">
        <div class="cont_text">银行账号</div>
    </div>
    <!--<section class="dd_index dd_apply">
        <div class="input_group">
            <div class="group_container">
                <span class="input_text">真实姓名</span>
                <input type="text" class="input_add" name="username" placeholder="输入真实姓名" required autofocus/>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container" style="border:none;">
                <span class="input_text">身份证号</span>
                <input type="text" class="input_add" name="Idcard" placeholder="输入11位身份证号码" required autofocus/>
            </div>
        </div>
    </section>-->

    <section class="dd_index dd_apply" style="margin-top: 10px;">
        <div class="input_group">
            <div class="group_container">
                <span class="input_text">银行卡号</span>
                <input type="text" class="input_add" name="bank_no"  id="bank_no" placeholder="输入银行卡号" required autofocus/>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container">
                <span class="input_text">所属银行</span>
                <div class="select">
                    <select class="select_group" name="bank" style="background:#ffffff;" id="bank">
                        <option value="default" selected>请选择</option>
                        <option value="工商银行">工商银行</option>
                        <option value="农业银行">农业银行</option>
                        <option value="中国银行">中国银行</option>
                        <option value="招商银行">招商银行</option>
                        <option value="建设银行">建设银行</option>
                        <option value="交通银行">交通银行</option>
                        <option value="邮政储蓄">邮政储蓄</option>
                        <option value="民生银行">民生银行</option>
                        <option value="光大银行">光大银行</option>
                        <option value="兴业银行">兴业银行</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="input_group">
            <div class="group_container" style="border:none;">
                <span class="input_text">开户城市</span>
                <div class="select">
                    <select id="Select11" class="province" name="province" style="background:#ffffff;"></select>
                    <select id="Select21" class="city" name="city" style="background:#ffffff;"></select>
                    <select id="Select31" class="zone" name="zone" style="background:#ffffff;"></select>
                </div>

            </div>
        </div>
    </section>
    <!--<div id="contact">
        <div class="cont_text">紧急联系人</div>
    </div>-->
    <!--section class="dd_index dd_apply" style="margin-top: 0px;">
        <div class="input_group">
            <div class="group_container" onclick="show()">
                <span class="input_text">电话</span>
                <input type="text" class="input_add" name="phone" id="show_phone" placeholder="选择通讯录" readonly/>
                <span class="address_list"><img src="/Public/Mob/yh/img/tongxunlu.png" alt="" style="max-width: 100%;"/></span>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container">
                <span class="input_text">姓名</span>
                <input type="text" class="input_add" name="name" placeholder="请输入紧急联系人姓名" required autofocus/>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container" style="border:none;">
                <span class="input_text">关系</span>
                <input type="text" class="input_add" name="relation" placeholder="请注明关系" required autofocus/>
            </div>
        </div>
    </section>-->
</form>
<div class="tishi">
    <p>提示：为了提升系统综合评定，请您上传您最近有交易流水的银行卡</p>
</div>
<div class="bb_next" onclick="sub()"><a href="javascript:;">确认，下一步</a></div>
<div class="shadowBox">
    <section class="wrapBox">
        <p>&nbsp;</p>
        <p id="word" style="text-align:center;">浮层内容</p>
        <p>&nbsp;</p>
        <div class="shadowBtn">
            <div class="Btn_container">
                <span>确定</span>
                <span>取消</span>
            </div>
        </div>
    </section>
</div>
</body>
<script>
    addressInit('Select11', 'Select21', 'Select31');
	var shadow=document.getElementsByClassName("shadowBox")[0];
	var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
	for(var i=0;i<btns.length;i++){
			btns[i].onclick=function(){
				shadow.style.display="none";
				flag=true;
			};
	}
   /* addressInit('Select11', 'Select21', 'Select31');*/
    /*$(".xlr_icon").click(function(){

        $(".se_option").hide();
        $(this).prev().show();
        return false;
    });
    $(".se_option").find("li").click(function(){
        $(this).parent().hide();
        var text=$(this).html();
        $(this).parent().parent().find(".select_x").val(text);
        return false;
    });
    $(window).click(function(){
        $(".se_option").hide();

    });*/
    function sub(){
        var bankcard=/^\d{18,19}$/;
		var bank_no = $("#bank_no").val();
		if(bank_no == ''){
			$("#word").html('请填写银行卡号!');
			shadow.style.display="block";
			return;
		}
        else if(!(bankcard.test(bank_no)))
        {
            $("#word").html('请填写银行卡号!');
            shadow.style.display="block";
            return;
        }
        var bank=$("#bank").find("option:selected").val();
        if(bank=="default")
        {
            $("#word").html('请选择银行卡!');
            shadow.style.display="block";
            return;
        }
        var city=$("#Select11").find("option:selected").val();
        if(city=="请选择")
        {
            $("#word").html('请选择银行!');
            shadow.style.display="block";
            return;
        }

        $("#myform").submit();
    }
</script>
</html>