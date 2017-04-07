<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>报名确认</title>
		<link rel="stylesheet" href="/Public/app/css/confirmation.css" />
		<link rel="stylesheet" href="/Public/app/font/iconfont.css" />
		<script src="/Public/app/font/iconfont.js"></script>
	</head>
	<body>
		<div class="confirmation_all">
			<!--报名确认的banner-->
			<div class="confirmation_banner">
				<img src="/Public/app/img/confirmation_banner_img.png" />
			</div>
			<!--报名确认的信息-->
			<div class="confirmation_main">
				<p class="confirmation_title">报名确认</p>
				<!--导语部分-->
				<div class="confirmation_lead">
					<p>尊敬的<span><?php echo ($data["adminname"]); ?></span></p>
					<p>您好。根据您的课程报名表，大财有道科技有限公司与您确认如下信息。</p>
				</div>
				<!--参课信息-->
				<p class="join_classes_title">参课信息</p>
				<div class="join_classes">
					<p><span>课程名称:</span></span>《<?php echo ($data["course"]["tname"]); ?>》</span></p>
					<p><span>计划时间:</span><span><?php echo ($data["course"]["date"]); ?><课前一周以邮件的形式通知具体授课地点></span></p>
					<p><span>参课学员:</span><span><?php echo ($data["uname"]); ?></span></p>
					<p><span>所属公司:</span><span><?php echo ($data["company"]); ?></span></p>
				</div>
				<!--费用与付款事宜-->
				<p class="confirmation_price_title">费用与付款事宜</p>
				<div class="confirmation_price">
					<p><span>培训费用：</span><span>￥<?php echo ($data["course"]["cost"]); ?>/人</span></p>
					<p><span>付费方式：</span><span>待确定</span></p>
				</div>
				<!--特殊情况-->
				<p class="special_case_title">特殊情况</p>
				<div class="special_case">
					<p>如因特殊原因（包括但不限于恶劣天气、航班延误、授课教师身体不适等情况）造成的培训无法按期举办
						或有所变更，我们会及时通知说明，并安排您改期参加或根据您的情况更改相应培训课程，您的参课计划如果
						有所变更，请务必于培训课程开始前一周通知我们，以便我们安排工作。谢谢！
					</p>
					<p>请在培训开始前至少五个工作日转账至北京大财有道科技有限公司账户，并将付款凭证传递给对方。</p>
				</div>
				<!--报名需要看的协议-->
				<div class="apply_aggrement">
					<input type="checkbox" checked="checked" id="check"/><label for="check">我已阅读并同意《公开课参课注意事项》</label>
				</div>
				<!--确认按钮-->
				<div class="ack_btn">
					<button class="ack">确认报名</button>
					<button class="ack_back">返回</button>
				</div>
			</div>
			<!--弹窗-->
			<div class="popup" style="display:none;">
				<p class="off_btn"><img src="/Public/app/img/off.png"/></p>
				<p class="submit_success_title">感谢您的报名，信息成功提交</p>
				<div class="popup_text">
					<div class="submit_success_text">
						<p>我们将向您的邮箱发送课程邮件；</p>
					  	 <p>请查收并关注付款事宜以确保您参课席位的预留。</p>
					</div>
					<div class="popup_phone">
						<p><img src="/Public/app/img/popup_phone.png" /><span class="phone_number">400-810-9017</span><span class="phone_text">(客服服务热线)</span></p>
					</div>
				</div>
				<div class="focusOn">您可以继续关注</div>
				<div class="inFont_img">
					<div class="icon_num">
						<i class="iconfont icon-huodongyujingqujiudianxiangqingyeicon09"></i>
						<p>返回首页</p>
					</div>
					<div class="icon_num">
						<i class="iconfont icon-huizhen"></i>
						<p>远程问诊</p>
					</div>
					<div class="icon_num">
						<i class="iconfont icon-x-mpg"></i>
						<p>视频课程</p>
					</div>
					<div class="icon_num">
						<i class="iconfont icon-27"></i>
						<p>专家团队</p>
					</div>
					<div class="icon_num">
						<i class="iconfont icon-huiyuanzhuanxiang"></i>
						<p>会员专享</p>
					</div>
					
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/Public/app/js/jquery.min.js" ></script>
	<script>
		$(function(){
			//字体图标变色
			$(".icon_num").mouseover(function(){
				$(".icon_num").find("i").css("color","");
				$(".icon_num").find("p").css("color","");
				$(this).find("i").css("color","#044a99");
				$(this).find("p").css("color","#044a99");
			});
			$(".icon_num").mouseleave(function(){
				$(".icon_num").find("i").css("color","");
				$(".icon_num").find("p").css("color","");
			});
			//弹出框的显示和隐藏
			$(".popup").css("display","none");
			$(".ack").click(function(){
				var checkon = $('input[id="check"]:checked').val();
				if(!checkon) {
					alert('请阅读协议');
					return;
				}
				var data = <?php echo ($datas); ?>;
				$.post('<?php echo U("Kecheng/goSign");?>', {'datas':data},
					function(res){
						if(res == 1) {
							$('.submit_success_title').html('感谢您的报名，信息成功提交');
						} else if(res == 0) {
							$('.submit_success_title').html('信息提交失败，请稍后提交');
						}
						$(".popup").css("display","block");
						$(".popup").css({"position":"relative","top":"-500px","z-index":"99999"});
						$("html").css("background","rgba(0,0,0,0.3)");
					});
			});
			$(".off_btn img").click(function(){
				$(".popup").css("display","none");
				$("html").css("background","");
			});
		});
	</script>
</html>