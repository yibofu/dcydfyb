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
    <link rel="stylesheet" href="/Public/Mob/yh/css/progress_style.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/progressNew.css"/>
    <link rel="stylesheet" href="/Public/Mob/css/20151223apply.css"/>
    <script src="/Public/Mob/js/MyRespond.js"></script>
    <script src="/Public/Mob/yh/js/jsAddress.js"></script>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>

    <style>
        .input_group .contact_time{  width: 2.5rem; display: inline-block;   border:none;background:#ffffff; }
        .dd_tt{
            width: 14rem;
            font-size: 0.65rem;
            color: #ff0000;
            margin: 10px auto;
        }
        .gohome{
            padding: 0.4rem 0;
            font-size: 0.65rem;
        }
        .gohome span{
            display: inline-block;
            width: 1rem;
            height: 1rem;
            font-size: 1rem;
            padding-right: 0.2rem;
            vertical-align: middle;
            text-align: center;
            color: #666666;
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
<div class="dd_progress"style="background: #ffffff;">
    <div class="jindu" >
        <span style="display: inline-block;">当前进度：50%</span>
        <span class="jindutiao">
            <span class="jindutiaos" style="width: 50%;"></span>
        </span>
    </div>
    <!--<img src="/Public/Mob/yh/img/prograss02.png" alt=""/>-->
</div>
<div id="contact">
    <div class="cont_text">居住地址</div>
</div>
<section class="dd_index dd_apply dd_apply2">
    <form action="<?php echo U('Apply/detailadd',array('id'=>$id));?>" method="post" role="form" id="myform">
        <div class="input_group">
            <div class="group_container1">
                <span class="select_text">居住地</span>
                <div class="select">
                    <select id="Select1" class="province" name="home_province"></select>
                    <select id="Select2" class="city" name="home_city"></select>
                    <select id="Select3" class="zone" name="home_zone"></select>
                </div>

            </div>
            <div class="group_container">
                <input type="text"class="input_add" placeholder="具体地址" style="display: inline-block;width:90%; margin-left: 0.3rem;" name="home_detail" id="home_detail" />
            </div>

        </div>
        <div class="input_group">
            <div class="group_container1">
                <span class="select_text" >联系时间</span>
                <div class="select">
                    <select class="contact_time" value="8" style="position: relative;" name="contact_front" id="time1">
                        <option value="default">请选择</option>
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
                        <option value="default">请选择</option>
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
        <div class="input_group">
            <div class="group_container" style="border-bottom: 0;">
                <p class="dd_tt">您所属地区的工作人员会上门与您签署书面合同</p>
                <!--如果同意则为fa-check-square-o-->
                <p class="gohome"><span class="fa fa-square-o aggree" state="no"></span>我同意工作人员上门</p>
                <!--<span class="select_text">固定电话</span>-->
                <!--<input type="tel" class="input_add"  style="width:70%;" name="tel" required placeholder="（非必填）" value=""/>-->
            </div>
        </div>
    </form>
    </section>
    <div id="livehold">
        <div class="cont_text">个人信息</div>
    </div>
    <section class="dd_index dd_apply dd_apply2">
        <div class="input_group">
            <div class="group_container1"  >
                <span class="select_text">我现在</span>
                <div class="select">
                    <select class="select_group" name="marry" style="background:#ffffff;" id="marry">
                        <option value="default" selected>请选择</option>
                        <option value="未婚">未婚</option>
                        <option value="已婚">已婚</option>
                        <option value="离异">离异</option>
                        <option value="丧偶">丧偶</option>
                    </select>
                </div>
                <!--<input type="text" class="input_add"　 name="marry" required readonly value="未婚"/>
                <ul class="se_option" style="display: none;">
                    <li>未婚</li>
                    <li>已婚</li>
                    <li>离异</li>
                    <li>丧偶</li>
                </ul>-->
                <!--<span class="fa fa-chevron-down xlr_icon"></span>-->
            </div>

        </div>
        <div class="input_group">
            <div class="group_container1" style="border-bottom: 0;">
                <span class="select_text">我现在</span>
                <div class="select">
                    <select class="select_group"  name="son"  style="background:#ffffff;" id="child">
                        <option value="default" selected>请选择</option>
                        <option value="无子女">无子女</option>
                        <option value="一个子女">一个子女</option>
                        <option value="两个子女">两个子女</option>
                        <option value="三个子女（或以上）">三个子女（或以上）</option>
                    </select>
                </div>
                <!-- <input type="text" class="input_add" name="chidren" required readonly value="无子女"/>
                 <ul class="se_option" style="display: none;">
                     <li>无子女</li>
                     <li>一个子女</li>
                     <li>两个子女</li>
                     <li>三个子女（或以上）</li>
                 </ul>-->
                <!--<span class="fa fa-chevron-down xlr_icon"></span>-->
            </div>
        </div>
    </section>
    <div id="contactR">
        <div class="cont_text">紧急联系人</div>
    </div>
    <section class="dd_index dd_apply dd_apply2">
         <div class="input_group">
         <div class="group_container" onclick="show()">
             <span class="input_text">电话</span>
             <input type="text" class="input_add" name="phone" id="phone" placeholder="选择通讯录" readonly/>
             <span class="address_list"><img src="/Public/Mob/yh/img/tongxunlu.png" alt="" style="max-width: 100%;"/></span>
         </div>
     </div>
     <div class="input_group">
         <div class="group_container">
             <span class="input_text">姓名</span>
             <input type="text" class="input_add" name="name" id="name" placeholder="请输入紧急联系人姓名" />
         </div>
     </div>
     <div class="input_group">
         <div class="group_container" style="border:none;">
             <span class="input_text">关系</span>
             <input type="text" class="input_add" name="relation" id="relation" placeholder="请注明关系" required autofocus/>
         </div>
     </div>
    </section>


       <!-- <div class="input_group">
            <div class="group_container1" style="border:none;">
                <span class="select_text">生活半径</span>
                <div class="select">
                    <select class="select_group" form="myform" name="liveRange" required  style="background:#ffffff;">
                        <option value="方圆10公里内">方圆10公里内</option>
                        <option value="方圆20公里内">方圆20公里内</option>
                        <option value="方圆30公里内">方圆30公里内</option>
                        <option value="方圆40公里内">方圆40公里内</option>
                        <option value="方圆50公里内">方圆50公里内</option>
                        <option value="100公里内或以上">100公里内或以上</option>
                    </select>
                </div>
                &lt;!&ndash;<input type="text" class="input_add" name="liveRange" required readonly value="方圆10公里内"/>
                <ul class="se_option" style="display: none;">
                    <li>方圆10公里内</li>
                    <li>方圆20公里内</li>
                    <li>方圆30公里内</li>
                    <li>方圆40公里内</li>
                    <li>方圆50公里内</li>
                    <li>100公里内或以上</li>
                </ul>&ndash;&gt;
                &lt;!&ndash;<span class="fa fa-chevron-down xlr_icon"></span>&ndash;&gt;
            </div>
        </div>
        <div class="input_group" style="border-top: 0.75rem solid #F4F7FE;">
            <div class="group_container1">
                <span class="select_text">我是一名</span>
                <div class="select">
                    <select class="select_group" form="myform" name="job" required  style="background:#ffffff;">
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
                &lt;!&ndash;<input type="text" class="input_add" name="job" required readonly value="管理人员"/>
                <ul class="se_option" style="display: none;">
                    <li>管理人员</li>
                    <li>一般员工</li>
                    <li>内勤</li>
                    <li>后勤</li>
                    <li>工人</li>
                    <li>销售/中介/业务代表</li>
                    <li>营业/服务员</li>
                    <li>个体商户</li>
                    <li>学生</li>
                </ul>&ndash;&gt;
            &lt;!&ndash;<span class="fa fa-chevron-down xlr_icon"></span>&ndash;&gt;
            </div>
        </div>
        <div class="input_group">
            <div class="group_container1">
                <span class="select_text">单位名称</span>
                <input type="text" class="input_add"  style="width:70%;" name="company" required value=""/>
            </div>

        </div>
        <div class="input_group">
            <div class="group_container1">
                <span class="select_text">所在城市</span>
                <div class="select">
                    <select id="Select11" class="province" name="province"></select>
                    <select id="Select21" class="city" name="city"></select>
                    <select id="Select31" class="zone" name="zone"></select>
                </div>
            </div>
                <div class="group_container1">
                    <input type="text"class="input_add" placeholder="具体地址" style="display: inline-block;width:90%; margin-left: 0.3rem;" name="now_address"/>
                </div>

        </div>
        <div class="input_group">
            <div class="group_container1">
                <span class="select_text">单位电话</span>
                <input type="tel" class="input_add"  style="width:70%;" name="coma_tel" required value=""/>
            </div>
        </div>
        <div class="input_group">
            <div class="group_container" style="border:none;">
                <span class="select_text" >联系时间</span>
                <div class="select">
                    <select class="contact_time" value="8" style="position: relative;" name="contact_front">
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
                        <option value="19">10:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                    </select>到
                    <select class="contact_time" name="contact_later">
                        &lt;!&ndash;<option value="8">8</option>&ndash;&gt;
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
                        <option value="19">10:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22" selected>22:00</option>
                    </select>
                </div>
            </div>

        </div>-->
    <!--</form>-->
<!--</section>-->
</form>
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
<div class="bb_next" onclick="sub()"><a href="javascript:;">确认，下一步</a></div>
</body>
<script>
    addressInit('Select1', 'Select2', 'Select3');

    /*$(".input_add").click(function(){

        $(".se_option").hide();
        $(this).next().show();
        return false;
    })
    $(".se_option").find("li").click(function(){
        $(this).parent().hide();
        var text=$(this).html();
        $(this).parent().parent().find(".input_add").val(text);
        return false;
    })
    $(window).click(function(){
        $(".se_option").hide();

    })*/
//    匹配地址
    var companyAddress=/^[\u4e00-\u9faf]{2,50}$/;
	var shadow=document.getElementsByClassName("shadowBox")[0];
	var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
	for(var i=0;i<btns.length;i++){
			btns[i].onclick=function(){
				shadow.style.display="none";
				flag=true;
			};
	}
    var G=true;
    $(".aggree").click(function(){
        if(G){
            $(this).removeClass("fa-square-o").addClass("fa-check-square-o");
            $(this).attr("state",'ok');
            $(this).css("color","#ee3200");
            G=false;
        }else{
            G=true;
            $(this).removeClass("fa-check-square-o").addClass("fa-square-o");
            $(this).attr("state",'no');
            $(this).css("color","#666666");
        }
    })
	function sub(){
        var city=$("#Select1").find("option:selected").val();
        if(city=="请选择")
        {
            $("#word").html('请选择居住地!');
            shadow.style.display="block";
            return;
        }
		var home_detail = $("#home_detail").val();
		if(home_detail == ''){
			$("#word").html('请填写详细地址!');
			shadow.style.display="block";
			return;
		}else if(home_detail.length > 49){
			$("#word").html('详细地址过长');
			shadow.style.display="block";
			return;
		}
        /* else if(!(companyAddress.test(home_detail))){
            $("#word").html('详细地址有误，请填写详细地址!');
            shadow.style.display="block";
            return;
        } */
        var time1=$("#time1").find("option:selected").val();
        var time2=$("#time2").find("option:selected").val();
        if(time1=="default"||time2=="default")
        {
            $("#word").html('请选择在家时间');
            shadow.style.display="block";
            return;
        }
        else if(parseInt(time1)>=parseInt(time2))
        {
            $("#word").html('联系时间有误');
            shadow.style.display="block";
            return;
        }
        if($(".aggree").attr("state")=="no"){
            $("#word").html('未同意工作人员上门，无法提交。');
            shadow.style.display="block";
            return;
        }

        var marry=$("#marry").find("option:selected").val();
        if(marry=="default")
        {
            $("#word").html('请选择婚姻状态!');
            shadow.style.display="block";
            return;
        }
        var child=$("#child").find("option:selected").val();
        if(child=="default")
        {
            $("#word").html('请选择有无子女!');
            shadow.style.display="block";
            return;
        }
        var con_name=/^[\u4e00-\u9faf]{2,5}$/;
		var name = $("#name").val();
		var phone = $("#phone").val();
		if(phone == ''){
			$("#word").html('请填写联系人电话!');
			shadow.style.display="block";
			return;
		}
		if(name == ''){
			$("#word").html('请填写联系人姓名!');
			shadow.style.display="block";
			return;
		}
        else if(!(con_name.test(name))){
            $("#word").html('请填写联系人姓名!');
            shadow.style.display="block";
            return;
        }

		var relation = $("#relation").val();
		if(relation == ''){
			$("#word").html('请填写与联系人关系!');
			shadow.style.display="block";
			return;
		}
        else if(!(con_name.test(relation))){
            $("#word").html('请填写与联系人关系!');
            shadow.style.display="block";
            return;
        }
		$("#myform").submit();
	}
	function show(){
		/*请求点*/
		var imei = window.didikd.getImei();
		var imsi = window.didikd.getImsi();
		var channel = window.didikd.getChannel();
		var mode = window.didikd.getModel();
		var behavior = '1026';
		var uid = <?php echo ($id); ?>;
		$.ajax({ 
				type: "GET", 
				url: "http://27.50.130.152/api/ddkdtongji.php",
				async:true,
				data:{'imei':imei,'imsi':imsi,'channelid':channel,'behavior':behavior,'model':mode,'uid':uid},
				success:function(data){}
		});	
		/*结束*/
		window.didikd.choosePerson('<?php echo ($id); ?>');
	}
	function showlink(tel,name){
		if(tel != '' && name != ''){
			$("#phone").val(tel);
			$("#name").val(name);	
		}
	}
</script>
</html>