<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>联系我们</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，关于滴滴快贷隐私保障与法律法规，隐私保障与法律法规">
    <meta name="description" content="关于滴滴快贷隐私保障与法律法规。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <style>
        article{  background: #ffffff;  width: 100%;  padding-bottom: 20px;  height: 100%;  }
        article .container{  width: 90%;  margin: 0 auto;  }
        h5{  margin: 0;  padding: 10px 0;  font-size: 16px;  }
        p{  font-size: 16px;  padding: 10px 0;  text-align: justify;  line-height: 24px;  }
        ul li{  text-indent: 42px;  font-size: 14px;  line-height: 24px;  }
    </style>
</head>
<body class="mhome" style="background: #f0f4fe;">
<header class="dd_header">联系我们<span class="fa fa-chevron-left dd_return" onclick="turn()"></span></header>
<article>
    <div class="container">
        <h5>联系滴滴快贷</h5>
        <section>
            <p>客服热线:4009987220。</p>
            <p>平台网站:www.didikuaidai.com</p>
            <p>客服邮箱:kefu@didikuaidai.com</p>
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