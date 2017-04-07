<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于借款</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，关于滴滴快贷借款，借款">
    <meta name="description" content="关于滴滴快贷借款。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <style>
        article{
            background: #ffffff;
        }
        article .container{
            width: 90%;
            margin: 0 auto;
        }
        h5{
            margin: 0;
            padding: 10px 0;
            font-size: 16px;
        }
        p{
            font-size: 14px;
            text-indent: 28px;
            padding: 10px 0;
            text-align: justify;
            line-height: 24px;
        }
        ul li{
            font-size: 14px;
            line-height: 24px;
        }
    </style>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">关于借款<span class="fa fa-chevron-left dd_return" onclick="turn()"></span></header>
<article>
    <div class="container">
        <h5>怎样在滴滴快贷上借钱？</h5>
        <section>
            <p>您通过滴滴快贷的手机借款应用申请借款，滴滴快贷通过后台审核，审核通过后滴滴快贷平台将资金直接打款到您绑定的银行卡上，整个过程在24小时内完成。</p>
        </section>
        <h5>借款额度和期限</h5>
        <section>
            <p>提供500元-5000元的借款额度（100的整数倍），期限1-6个月。</p>
        </section>
        <h5>没有中介</h5>
        <section>
            <p>滴滴快贷没有任何借款中介，请不要相信帮您借款的任何中介，更不要向他们提供任何材料或支付任何费用。</p>
        </section>
        <h5>初次借款步骤</h5>
        <section>
            <p>所有借款操作步骤需本人在滴滴快贷App应用内完成。</p>
            <ul>
                <li>1）通过本人手机号码完成注册</li>
                <li>2）按照提示信息完成首次身份确认；</li>
                <li>3）提交借款申请；</li>
                <li>4）滴滴快贷平台审核，期间可能会有风控人员主动和你联系沟通，或要求增加辅助资料；</li>
                <li>5）借款申请通过，发放借款。</li>
                <li></li>
            </ul>
            <h5>注意事项：</h5>
            <ul>
                <li>1）信息资料务必如实填写，否则影响信用评分；</li>
                <li>2）提交图片资料时，务必确保图片清晰且符合要求。</li>
            </ul>
        </section>
        <h5>再次借款</h5>
        <section>
            <p>对于已结清借款的用户再次提交借款申请，审批流程会比初次借款简单、审批速度也会比初次借款快。</p>
        </section>
        <h5>借款费用</h5>
        <section>
            <p>借款费用包括利息和成交撮合费用和借款分期管理费用</p>
            <ul>
                <li>1）利息：借款成功后，需要支付给滴滴快贷的利息；</li>
                <li>2）平台管理费用：借款成功后，需要支付给滴滴快贷平台方的管理费用；</li>
                <li>3）分期管理费用：需要支付给滴滴快贷平台的贷后分期还款管理费用（平台方会定期提醒还款、维护用户的信用状态）。</li>
            </ul>
        </section>
        <h5>降低费用和提升额度</h5>
        <section>
            <p>滴滴快贷有信用等级评价机制，等级越高，费用越低。信用等级是依据用户本身的资质信息和成交还款情况综合评定出来的，按时还款对维持和提升信用很重要。平台方会根据用户的信用综合情况，逐步提升（或降低）额度。</p>
        </section>
    </div>
</article>

<script>
	function turn(){
		window.location.href = "<?php echo U('Help/helplist');?>";
	}
</script>

</body>
</html>