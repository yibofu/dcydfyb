<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请借款 - 滴滴块贷</title>
    <meta name="keywords" content="滴滴快贷，申请借款，借款">
    <meta name="description" content="滴滴快贷申请借款。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/css/20151123New.css"/>
    <link rel="stylesheet" href="/Public/Mob/yh/css/footer.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
	<script src="/Public/Mob/js/toucher.js"></script>
	<script src="/Public/Mob/js/dd_index.js"></script>
	<script src="/Public/Mob/js/yunsuan.js"></script>
	<style>
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
        .wrapBox p:nth-child(2){
            text-align: center;
        }
        .wrapBox p:last-of-type{
            margin-bottom: 40px;
        }
         #news p:first-child{
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
             padding: 5px 5px;
             color: #909090;
             border:1px solid #eeeeee;
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
<header class="dd_header">申请借款</header>
<section class="dd_index">
    <div class="dd_container">
        <h1>您计划借多少钱？</h1>
        <div class="dd_jk">
            <span class="fa fa-minus" id="money_minus"></span>
            <span class="show_money" id="show_money"><strong>500</strong><i>元</i></span>
            <span class="fa fa-plus" id="money_plus" style="color: #ff4201;"></span>
        </div>
        <div class="dd_rang" >
            <!--<span class="dd_duan dd_d1"></span>-->
            <!--<span class="dd_duan dd_d2"></span>-->
            <!--<span class="dd_duan dd_d3"></span>-->
            <span class="dd_moved" id="money_moved"></span>
            <span class="dd_move" id="money_move"></span>
        </div>
    </div>

</section>

<section class="dd_index">
    <div class="dd_container">
        <h1 style="padding-top: 10px;">您计划借多久？</h1>
        <div class="dd_jk">
            <span class="fa fa-minus" id="month_minus"></span>
            <span class="show_money" id="show_month"><strong>1</strong><i>个月</i></span>
            <span class="fa fa-plus" id="month_plus" style="color: #ff4201;"></span>
        </div>
        <div class="dd_rang" style="margin-bottom: 20px">
            <!--<span class="dd_duan dd_d1"></span>-->
            <!--<span class="dd_duan dd_d2"></span>-->
            <!--<span class="dd_duan dd_d3"></span>-->
            <span class="dd_moved" id="month_moved"></span>
            <span class="dd_move" id="month_move"></span>
        </div>
    </div>
</section>
<section class="dd_index">
    <p class="dd_text">
        从您借款到账日开始计算，30天后开始还款，每期（月）还款<i id="money_num">550</i>元，共 <i id="month_num">1</i>期
    </p>
</section>
<div class="shadowBox">
    <section class="wrapBox">
        <p>&nbsp;</p>
        <p id="word">浮层内容</p>
        <p>&nbsp;</p>
        <div class="shadowBtn">
            <div class="Btn_container">
                <span>确定</span>
            </div>
        </div>
    </section>

</div>
<!--新的提示框-->
<div class="shadowBox">
    <section class="wrapBox" id="news">
        <p>新消息提示</p>
        <p>请填写消息</p>
        <p>&nbsp;</p>
        <div class="shadowBtn">
            <div class="Btn_container">
                <span>确定</span>
            </div>

        </div>
    </section>
</div>
<input type="hidden" name="is_address" value="2" />
<div class="bb_next" style="margin-bottom:80px"><a href="javascript:;" onclick="sub()">下一步</a></div>
<footer class="web_footer">
    <ul>
        <!--<li><a href="#"><span class="dd_nav1 "></span>申请</a></li>
        <li><a href="#"><span class="dd_nav2"></span>账户</a></li>
        <li><a href="#" ><span class="dd_nav3"></span>设置</a></li>
        <li><a href="#" style="color: #ff3200;"><span class="dd_nav4x"></span>更多</a></li>-->
        <li><a href="<?php echo U('/Apply/index');?>"<?php if((MODULE_NAME) == "Apply"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Apply'): ?>class="dd_nav1x"<?php else: ?>class="dd_nav1"<?php endif; ?> ></span>申请 </a></li>
        <li><a href="<?php echo U('/Repay/index');?>"<?php if((MODULE_NAME) == "Repay"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Repay'): ?>class="dd_nav2x"<?php else: ?>class="dd_nav2"<?php endif; ?> ></span>账号 </a></li>
        <li><a href="<?php echo U('/User/index');?>"<?php if((MODULE_NAME) == "User"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'User'): ?>class="dd_nav3x"<?php else: ?>class="dd_nav3"<?php endif; ?> ></span>设置 </a></li>
        <li><a href="<?php echo U('/Help/helpList');?>"<?php if((MODULE_NAME) == "Help"): ?>style="color:#ff3200;"<?php endif; ?>> <span <?php if(MODULE_NAME == 'Help'): ?>class="dd_nav4x"<?php else: ?>class="dd_nav4"<?php endif; ?> ></span>更多 </a></li>
		
        <!--<li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Apply/index');?>" <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><span class="dd_nav1x"></span>申请</a></li>

        <li <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Repay"): ?>class="active"<?php endif; ?> href="<?php echo U('Repay/index');?>"><span class="dd_nav2"></span>账户</a></li>
        <li <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "User"): ?>class="active"<?php endif; ?> href="<?php echo U('User/index');?>"><span class="dd_nav3"></span>设置</a></li>
        <li <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?>><a <?php if((MODULE_NAME) == "Apply"): ?>class="active"<?php endif; ?> href="#"><span class="dd_nav4"></span>帮助</a></li>
        MODEL_NAME-->
    </ul>
</footer>
<script>
	/*
	var sign = window.didikd.getId();
	$.ajax({ 
			type: "POST", 
			url: "<?php echo U('Public/index');?>",
			data:{'sign':sign},
			success:function(data){
				var data = eval("("+data+")");
				if(data.error == 2){
					window.location.href = "<?php echo U('Index/login');?>";
				}
			}
	});
	*/
	$.ajax({ 
			type: "POST", 
			url: "<?php echo U('Apply/is_address',array('id'=>$id));?>",
			success:function(data){
				var data = eval("("+data+")");
				if(data.error){
					$("[name=is_address]").val(1);
					alert(data.msg);
				}else{
					$("[name=is_address]").val(2);
					window.didikd.startLoc('<?php echo ($id); ?>');
				}
			}
	});
	var shadow=document.getElementsByClassName("shadowBox")[0];
	var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
	for(var i=0;i<btns.length;i++){
			btns[i].onclick=function(){
				shadow.style.display="none";
				flag=true;
			};
	}
	function sub(){
		var money = $("#show_money").find("strong").html();
		var month = $("#show_month").find("strong").html();
		var is_address = $("[name=is_address]").val();
		if(is_address == 2){
			$("#word").html('无法获取位置权限');
			shadow.style.display="block";
			return;
		}
		$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Apply/loan_manage',array('id'=>$id));?>",
				data:{'money':money,'month':month},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error == 1){
						window.location.href="<?php echo U('Apply/userinfo',array('id'=>$id));?>";
					}else if(data.error == 3){
						$("#word").html(data.message);
						shadow.style.display="block";
					}else if(data.error == 4){
						$("#word").html(data.message);
						shadow.style.display="block";
					}else{
						window.location.href = "<?php echo U('Apply/apply',array('id'=>$id));?>";
					}
				}
		});
	}
</script>
</body>
</html>