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
	<script src="/Public/Mob/yh/js/jsAddress.js"></script>
    <style>
        select{
            border:none;
        }
        .input_group .contact_time{  width: 2.5rem; display: inline-block;   border:none;background:#ffffff; }
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
            width: 40%;
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
            width: 100%;
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
<body class="mhome">
<header class="dd_header">首次信息确认</header>
<div class="dd_progress" style="background: #ffffff;">
    <!--<img src="/Public/Mob/yh/img/prograss01.png" alt=""/>-->
    <div class="jindu">
        <span style="display: inline-block;">当前进度：25%</span>
        <span class="jindutiao">
            <span class="jindutiaos"></span>
        </span>
    </div>
</div>
<form action="<?php echo U('Apply/useradd',array('id'=>$id));?>" method="post" id="myform">
    <div id="myinfo">
        <div class="cont_text">个人信息</div>
    </div>
<section class="dd_index dd_apply">
        <div class="input_group">
            <div class="group_container">
                <span class="input_text">真实姓名</span>
                <input type="text" class="input_add" id="trueName" name="name" placeholder="请输入真实姓名" required autofocus/>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container" style="border:none;">
                <span class="input_text">身份证号</span>
                <input type="text" class="input_add" id="cardId" name="card_no" placeholder="请输入18位身份证号码" required autofocus/>
            </div>
        </div>
</section>


<div id="contact">
    <div class="cont_text">单位信息</div>
</div>
<section class="dd_index dd_apply" style="margin-top: 0px;">
        <div class="input_group">
            <div class="group_container1">
            <span class="select_text">我是一名</span>
            <div class="select">
                <select class="select_group" name="job" required  style="background:#ffffff;" id="job">
                    <option value="default" selected>请选择</option>
                    <option value="管理人员">管理人员</option>
                    <option value="一般员工">一般员工</option>
                    <option value="内勤">内勤</option>
                    <option value="后勤">后勤</option>
                    <option value="工人">工人</option>
                    <option value="销售/中介/业务代表">销售/中介/业务代表</option>
                    <option value="营业/服务员">营业/服务员</option>
                    <option value="个体商户">个体商户</option>
                    <option value="学生">学生</option>
                </select>
            </div>
        </div>
         </div>
        <div class="input_group">
        <div class="group_container1">
            <span class="select_text">单位名称</span>
            <input type="text" class="input_add"  style="width:70%;" id="company" name="company" required value=""/>
        </div>

    </div>
        <div class="input_group">
        <div class="group_container1">
            <span class="select_text">所在城市</span>
            <div class="select">
                <select id="Select11" class="province" name="job_province">
					<option value="111111">111111111</option>
				</select>
                <select id="Select21" class="city" name="job_city"></select>
                <select id="Select31" class="zone" name="job_zone"></select>
            </div>
        </div>
        <div class="group_container1">
            <input type="text"class="input_add" placeholder="具体地址" id="job_detail" style="display: inline-block;width:90%; margin-left: 0.3rem;" name="job_detail"/>
        </div>

    </div>
        <div class="input_group">
        <div class="group_container1">
            <span class="select_text">单位电话</span>
            <input type="tel" class="input_add"  style="width:70%;" id="com_phone" name="com_phone" required value=""/>
        </div>
    </div>
        <div class="input_group">
        <div class="group_container" style="border:none;">
            <span class="select_text" >联系时间</span>
            <div class="select">
                <select class="contact_time" value="8" style="position: relative;" name="contact_front" id="time1">
                    <option value="default" selected>请选择</option>
                    <option value="8">8:00</option>
                    <option value="9">9:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                    <option value="19">19:00</option>
                    <option value="20">20:00</option>
                    <option value="21">21:00</option>
                </select>到
                <select class="contact_time" name="contact_later" id="time2">
                    <option value="default" selected>请选择</option>
                    <option value="9">9:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                    <option value="19">19:00</option>
                    <option value="20">20:00</option>
                    <option value="21">21:00</option>
                    <option value="22">22:00</option>
                </select>
            </div>
        </div>

    </div>
    <!-- <div class="input_group">
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
     </div>-->
</section>
</form>
<div class="bb_next" onclick="sub()"><a href="javascript:;">确认，下一步</a></div>
<div class="shadowBox">
    <section class="wrapBox">
        <p>&nbsp;</p>
        <p id="word" style="text-align:center;">浮层内容</p>
        <p>&nbsp;</p>
        <div class="shadowBtn">
            <div class="Btn_container">
                <span>确定</span>
                <!--<span>取消</span>-->
            </div>
        </div>
    </section>
</div>
</body>
<script>
	addressInit('Select11', 'Select21', 'Select31','北京','县','密云县');
/*	$(".xlr_icon").click(function(){

        $(".se_option").hide();
        $(this).prev().show();
        return false;
    })
    $(".se_option").find("li").click(function(){
        $(this).parent().hide();
        var text=$(this).html();
        $(this).parent().parent().find(".select_x").val(text);
        return false;
    })
    $(window).click(function(){
        $(".se_option").hide();

    })*/
	var shadow=document.getElementsByClassName("shadowBox")[0];
	var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
	for(var i=0;i<btns.length;i++){
			btns[i].onclick=function(){
				shadow.style.display="none";
				flag=true;
			};
	}
    //  只能匹配汉字
    var chinese = /^[\u4e00-\u9faf]{2,5}$/;
    //匹配身份证号
    var cardid=/^(^\d{18}$|^\d{17}(\d|X|x))$/;
    //匹配公司地址
    var companyAddress=/^[\u4e00-\u9faf]{2,50}$/;
    /*$("#trueName").blur(function(){
        var trueName = $("#trueName").val();
        if(!(m.test(trueName))){
            $("#word").html('填写有误，请重新填写姓名!');
            shadow.style.display="block";
            return;
         }
    });*/
	function sub() {
        var trueName = $("#trueName").val();
        if (trueName == '') {
            $("#word").html('请填写姓名!');
            shadow.style.display = "block";
            return;
        }
        else if (!(chinese.test(trueName))) {
            $("#word").html('填写有误，请重新填写姓名!');
            shadow.style.display = "block";
            return;
        }
        var cardId = $("#cardId").val();
        if (cardId == '') {
            $("#word").html('请填写身份证号!');
            shadow.style.display = "block";
            return;
        }
        else if (!(cardid.test(cardId))) {
            $("#word").html('身份证号有误，请填写身份证号!');
            shadow.style.display = "block";
            return;
        }
        var job = $("#job").find("option:selected").val();

        if (job == "default") {
            $("#word").html('请选择职业!');
            shadow.style.display = "block";
            return;
        }
        var company = $("#company").val();
        if (company == '') {
            $("#word").html('请填写公司名称!');
            shadow.style.display = "block";
            return;
        }
        else if (!(companyAddress.test(company))) {
            $("#word").html('请填写单位名称!');
            shadow.style.display = "block";
            return;
        }
//		var com_phone = $("#com_phone").val();
        var com_address = $("#job_detail").val();
        if (com_address == '') {
            $("#word").html('请填写公司具体地址!');
            shadow.style.display = "block";
            return;
        }else if(com_address.length > 49){
			$("#word").html('公司具体地址过长!');
            shadow.style.display = "block";
            return;
		}
        /*else if (!(companyAddress.test(com_address))) {
            $("#word").html('请填写单位具体地址!');
            shadow.style.display = "block";
            return;
        }
		*/
        var com_phone = $("#com_phone").val();
        var phone = /^\d{6,12}$/;
        if (com_phone != '' &&!(phone.test(com_phone))) {
            $("#word").html('请填写正确的单位电话，例：01088888888!');
            shadow.style.display = "block";
            return;
        }
        var time1 = $("#time1").find("option:selected").val();
        var time2 = $("#time2").find("option:selected").val();
        if (time1 == "default" || time2 == "default") {
            $("#word").html('请选择在家时间');
            shadow.style.display = "block";
            return;
        }
        else if (parseInt(time1) >= parseInt(time2))
        {
            $("#word").html('联系时间有误');
        shadow.style.display = "block";
        return;
        }
		$("#myform").submit();
	}
	
</script>
</html>