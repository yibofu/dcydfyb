<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>联系人信息</title>
    <meta content="IE=Edge,,chrome=1" http-equiv="x-ua-compatible"/>
    <meta name="keywords" content="滴滴快贷，联系人信息">
    <meta name="description" content="滴滴快贷联系人信息。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Mob/yh/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mob/yh/css/20151123style.css" media="all">
    <link rel="stylesheet" href="/Public/Mob/yh/css/set.css"/>
</head>
<body class="mhome">
<header class="dd_header">联系人信息<span class="fa fa-chevron-left dd_return" onclick="history.go(-1);"></span></header>
<section class="dd_index  dd_index2" style="height: 500px;">
    <div style="width: 90.5%; margin: 0 auto;">
        <ul class="worker_info" >
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span class="contact_dd"><?php echo ($vo["name"]); ?></span><span class="contact_dd"><?php echo ($vo["relation"]); ?></span><span class="contact_dd contact_tel"><?php echo ($vo["phone"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
			<li onclick="add()">
                <a href="javascript:;" class="a_contact">
                    <span class="contact_dd contact_add">添加联系人</span>
                    <span class="contact_dd contact_add">添加关系</span>
                    <span class="contact_dd contact_tel contact_add">添加电话</span>
                </a>
            </li>
        </ul>
    </div>

</section>
</body>
<script>
	function add(){
		window.location.href="<?php echo U('User/link_update',array('id'=>$id));?>";
	}
	function return_page(){
		window.location.href = "<?php echo U('User/index');?>";
	}
</script>
</html>