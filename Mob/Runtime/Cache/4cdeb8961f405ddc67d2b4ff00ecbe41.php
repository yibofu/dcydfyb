<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请借款确认</title>
    <meta name="keywords" content="滴滴快贷，申请借款确认">
    <meta name="description" content="滴滴快贷申请借款确认。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/20151123New.css"/>
	<script src="/Public/Mob/js/jquery-1.11.3.min.js"></script>
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
	</style>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">申请借款确认</header>
    <section class="dd_index" style=" margin-top: 15px; margin-bottom: 120px;">
        <section class="dd_par">
            <ul>
                <li><span class="text_jk">真实姓名：</span><span><?php echo ($user["name"]); ?></span></li>
                <li><span class="text_jk">身份证号：</span><span><?php echo ($user["card_no"]); ?></span></li>
                <li><span class="text_jk">银行卡：</span><span><?php echo ($user["bank_no"]); ?></span></li>
                <li><span class="text_jk">开户银行：</span><span><?php echo ($user["bank_local"]); ?></span></li>
            </ul>
        </section>
        <div class="dd_par_text">借款金额及费用说明</div>
        <section class="dd_par" style="margin-top: 10px;">
            <!--<div class="dd_par_text"></div>-->
            <ul>
                <li><span class="text_jk">借款金额：</span><span><?php echo ($loan_data["money"]); ?>元</span></li>
                <li><span class="text_jk">借款期限：</span><span><?php echo ($loan_data["month"]); ?>个月</span></li>
                <li><span class="text_jk">综合管理费：</span><span><?php echo ($loan_data["manage_price"]); ?>元</span></li>
                <li><span class="text_jk">月管理费：</span><span><?php echo ($loan_data["month_manage"]); ?>/月</span></li>
                <li><span class="text_jk">实际到账金额：</span><span><?php echo ($loan_data["real_money"]); ?>元</span></li>
            </ul>
        </section>
        <section class="dd_par" style="margin-top: 10px;">
            <div class="dd_par_text">还款说明</div>
            <div class="dd_par_text dd_par_m"><span class="fl">还款方式</span><span class="fr hk_method" style="padding-right: 10px;">等额本息 按期还款</span></div>
            <table class="hk_table" border="1" cellspacing="0">
                <tr>
                    <td>还款期数</td>
                    <td>还款金额</td>
                    <td>到期还款日</td>
                </tr>
                <?php if(is_array($new_arr)): $i = 0; $__LIST__ = $new_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["month"]); ?></td>
                    <td><?php echo ($vo["total"]); ?></td>
                    <td><?php echo ($vo["repay"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </section>
        <div class="dd_protocol">
            <!--fa-square-o替换fa-check-square-o-->
            <p><span class="fa fa-square-o protocol_box" id="chk">&nbsp;同意<a href="<?php echo U('Apply/deal',array('id'=>$id));?>">《滴滴快贷小额借贷协议》</a></span> </p>
            <div class=" dd_yzm dd_qr" onclick="sub()">
                <a href="javascript:;">确认本次借贷申请</a>
            </div>
        </div>  
</section>
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
<script>
		var shadow=document.getElementsByClassName("shadowBox")[0];
        var btns=shadow.getElementsByClassName("shadowBtn")[0].getElementsByTagName("span");
		for(var i=0;i<btns.length;i++){
				btns[i].onclick=function(){
					shadow.style.display="none";
                    flag=true;
				};
        }
		$("#chk").bind('click',function(){
			var h = $(this).hasClass("fa-square-o");
			if(h){
				$(this).removeClass("fa-square-o");
				$(this).addClass("fa-check-square-o");
			}else{
				$(this).removeClass("fa-check-square-o");
				$(this).addClass("fa-square-o");
			}
		});
		
		function sub(){
			var h = $("#chk").hasClass("fa-check-square-o");
			if(!h){
				$("#word").html('请勾选协议!');
				shadow.style.display="block";
				return;
			}
			var info;
			info = window.didikd.upInfo();
			$.ajax({ 
				type: "POST", 
				url: "<?php echo U('Apply/loan',array('id'=>$id));?>",
				data:{'info':info},
				success:function(data){
					var data = eval("("+data+")");
					if(data.error){
						shadow.style.display="block";
						$("#word").html(data.message);
						window.location.href="<?php echo U('Repay/index',array('id'=>$id));?>";
					}
				}
			});
		}
	</script>
</body>
</html>