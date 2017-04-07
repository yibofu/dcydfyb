<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<META http-equiv="X-UA-Compatible" content="IE=7" >
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/default/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
	<script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
</head>
<body class="easyui-layout">
    <noscript>
        <div style="position: absolute; z-index: 100000; height: 2046px; top: 0px; left: 0px;
            width: 100%; background: white; text-align: center;">
            <img src="images/noscript.gif" alt='抱歉，请开启脚本支持！' />
        </div>
    </noscript>
	
	
	
	<div data-options="region:'north',border:false" style=" width:100%; height:40px; line-height:40px; background:#e86867; padding:0 0 0 30px; color:#fff; font-size:22px; font-weight:800; margin:0 auto; font-family:'微软雅黑';">
    <div class="tmk_mc" style=" width:807px; height:40px; overflow:hidden; float:left;"><img src=""/></div>
    
    <div class="tmk_mz" style=" width:480px; height:40px; float:right; font-size:14px; ">
     <ul style="">
      <li style=" width:180px; height:40px; line-height:40px; float:left; list-style:none;">您好：<?php echo ($_SESSION['admin']['username']); ?> 欢迎您登陆！</li>
      <li style=" width:100px; height:40px; line-height:40px; float:left; list-style:none;"><a href="<?php echo U('Public/logout');?>" style=" color:#fff;">退出</a></li>
     </ul>
    </div>
    <div class="clear"></div>
    </div>
    
	
	<div data-options="region:'west'" class="tmkht_zuo" >
		<div class="easyui-accordion west-body" >
			<?php if(is_array($powers)): $i = 0; $__LIST__ = $powers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$power): $mod = ($i % 2 );++$i;?><div class="west-menu" title="<?php echo ($power["power"]["title"]); ?>" data-options="iconCls:'icon-menu'">
					<ul class="menu-childs">
						<?php if(is_array($power["childrens"])): $i = 0; $__LIST__ = $power["childrens"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li class="menu-child">
							<a target="mainFrame" href="<?php echo ($child["name"]); ?>"><div><i class="icon-caret-right"></i><?php echo ($child["title"]); ?></div></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	
    <div data-options="region:'center'" id="mainPanle" style="background: #eee;overflow:hidden;  border-radius:5px 5px 0 0;">
		<iframe name="mainFrame" id="mainFrame" name="mainFrame" frameborder="0"  style="width:100%;height:99.5%;">
			<img src="/bianquecaixueyuanw/Web/Public/admin/css/default/images/S01.jpg">
		</iframe>
    </div>
</body>
<script>
	$('.easyui-accordion li a').click(function () {
        $('.easyui-accordion li').removeClass("selected");
        $(this).parent().addClass("selected");
    }).hover(function () {
        $(this).parent().addClass("hover");
    }, function () {
        $(this).parent().removeClass("hover");
    });

</script>
</html>