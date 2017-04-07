<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>推荐用户</title>
		<link href="/Public/app/css/index.css" rel="stylesheet"/>
		<script src="/Public/app/js/index.js"></script>
	</head>
	<body>
		<div id="header">
			<ul class="list">
				<li class="active">首页</li>
				<li class="li1">土豪，你好！</li>
				<li class="li2"><img src="/Public/app/img/logo3.png"/></li>
				<li class="li3"><img src="/Public/app/img/logo4.png"/></li>
				<li><img src="/Public/app/img/logo5.png"/></li>
			</ul>
		</div>
		<div id="content">
			<div class="title">
				<h3>推荐用户</h3>
				<input class="submit" value="" type="submit"/>
				<input class="text" type="text"/>
			</div>

			<!-- <div style="display:block" class="box imgbox">
				<?php $__FOR_START_24655__=0;$__FOR_END_24655__=3;for($i=$__FOR_START_24655__;$i < $__FOR_END_24655__;$i+=1){ if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,$i*5,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul style="" class="img">
				<?php $h=1; ?>
					<?php if($h == 1): ?><li style="" class="first"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="__APP__/Public/app/img/big_img.jpg"/></a></li>
					<?php elseif($h != 1): ?>
					<?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,$i*4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="" class="second"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="__APP__/Public/admin/imgs/20150905123758_NHSui.png"/></a></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					<?php $h++; ?>
				</ul><?php endforeach; endif; else: echo "" ;endif; } ?>
			</div> -->
			<div style="display:block" class="box imgbox">
			<!-- <?php $h=1; ?> -->
				<!-- <?php $__FOR_START_17372__=0;$__FOR_END_17372__=4;for($i=$__FOR_START_17372__;$i < $__FOR_END_17372__;$i+=1){ ?>-->
				<ul style="" class="img">
				<!-- <?php echo ($i); ?> -->
				
			 <?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <?php echo ($i -1); ?> -->
			

				<?php if($vo["big"] == 1): ?><li style="" class="first"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li>
				<?php else: ?>
					<li style="" class="second"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li><?php endif; ?>
				<!-- <?php $h++; ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>	
				<!--<?php } ?> -->
				<?php if($count_ul >= 2): ?><ul style="" class="img">
				<!-- <?php echo ($i); ?> -->
				
			 <?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,5,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <?php echo ($i -1); ?> -->
			

				<?php if($vo["big"] == 1): ?><li style="" class="first"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li>
				<?php else: ?>
					<li style="" class="second"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li><?php endif; ?>
				<!-- <?php $h++; ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul><?php endif; ?>

				<?php if($count_ul >= 3): ?><ul style="" class="img">
				<!-- <?php echo ($i); ?> -->
				
			 <?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,11,15,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <?php echo ($i -1); ?> -->
			

				<?php if($vo["big"] == 1): ?><li style="" class="first"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li>
				<?php else: ?>
					<li style="" class="second"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li><?php endif; ?>
				<!-- <?php $h++; ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul><?php endif; ?>
				<?php if($count_ul >= 4): ?><ul style="" class="img">
				<!-- <?php echo ($i); ?> -->
				
			 <?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,16,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <?php echo ($i -1); ?> -->
			

				<?php if($vo["big"] == 1): ?><li style="" class="first"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li>
				<?php else: ?>
					<li style="" class="second"><a href="#"><span class="nickName"><?php echo ($vo["nickname"]); ?></span><img src="/Public/app/img/big_img.jpg"/></a></li><?php endif; ?>
				<!-- <?php $h++; ?> --><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul><?php endif; ?>	
			</div>
			<img class="img1" src="/Public/app/img/xian.jpg"/>
			<img class="img2" src="/Public/app/img/xian.jpg"/>
			<img class="img3" src="/Public/app/img/xian.jpg"/>
			<img class="img4" src="/Public/app/img/xian.jpg"/>
			<img class="img5" src="/Public/app/img/dian.jpg"/>
			<ul id="btn">
				<?php echo ($str); ?>
			</ul>
		</div>
		<div id="footer">客服电话:400-88888888</div>
	</body>
</html>