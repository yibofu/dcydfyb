<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>审核速度与借款成本</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，关于滴滴快贷还款，还款">
    <meta name="description" content="关于滴滴快贷还款。">
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
            text-indent: 42px;
            font-size: 14px;
            line-height: 24px;
        }
    </style>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">审核速度与借款成本<span class="fa fa-chevron-left dd_return" onclick="turn()"></span></header>
<article>
    <div class="container">
        <h5>如何提高借款申请被审核通过的速度？</h5>
        <section>
            <p>为了提高您的借款申请被审核通过的速度，要求您本人须手持身份证拍照上传，照片中须包含您本人免冠正面影像，以及身份证正面影像（包含身份证号和照片的一面），两者须在同一画面中，本人影像及身份证上信息在照片中均清晰可辨认。以上要求达不到，平台将直接驳回申请。</p>
            <p style="padding-bottom: 0;">同时，为了提升您的信用等级，我们建议您拍照上传补充真实、有效的材料附件，这些材料包括以下五大类:</p>
            <ul>
                <li>1.个人信息类:结婚证、户口本、个人征信报告、驾驶证、行驶证</li>
                <li>2.工作信息类:劳务合同、工作证、工牌、工作证明、社保卡、公积金收入信息类．银行流水扫描件、网银截图、收入证明</li>
                <li>3.住址信息类:租赁合同、水电煤气费交费单、房产证</li>
                <li>4.其他类:职业等级证书</li>
            </ul>
            <p style="padding-top: 0;">等以上五类材料每一类提供所列项中的其中一件即可，但您提交的种类越多，每类下项目越丰富，则您的借款申请被通过的几率越高，速度越快。一旦发现您提供虚假材料，平台有权驳回申请，并取消您的借款资格，记入征信系统和用户黑名单。</p>
        </section>
        <h5>借款人的借款成本包含哪些？</h5>
        <section>
            <p>借款人的借款成本包含“利息”、“借款管理费”及“成交综合管理费”。“利息”是基于借贷双方个人之间的借贷关系，由滴滴快贷平台上的对应理财人收取。“借款管理费”及“成交综合管理费”是平台为客户提供信息服务收取的服务费用，在双方自愿约定的合理范围内。借款人对借款成本的承受能力经过滴滴快贷平台的严格审核，由双方自主约定，符合借款人实际承受能力，也符合国家相应的法律法规。</p>
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