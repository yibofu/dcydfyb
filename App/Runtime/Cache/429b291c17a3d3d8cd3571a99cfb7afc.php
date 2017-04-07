<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>推荐用户</title>
		<link href="/Public/app/css/index.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="header">
			<div style="width: 1200px; margin:0 auto; position: relative;">
				<ul class="list">
					<li class="active">首页</li>
					<li class="li1"><?php echo ($nickname); ?>，你好！</li>
					<?php if($sex == 1): ?><a href="<?php echo U('User/man');?>"><li class="li2"><img src="/Public/app/img/logo3.png"/></li></a>
					<a href="<?php echo U('User/man');?>"><li class="li3"><img src="/Public/app/img/logo4.png"/></li></a>
					<?php else: ?>
					<a href="<?php echo U('User/women');?>"><li class="li2"><img src="/Public/app/img/logo3.png"/></li></a>
					<a href="<?php echo U('User/women');?>"><li class="li3"><img src="/Public/app/img/logo4.png"/></li></a><?php endif; ?>1
					<a href="<?php echo U('User/userdetail');?>"><li><img src="/Public/app/img/logo5.png"/></li></a>
				</ul>
			</div>
			
		</div>
		<div id="content">
			<div class="title">
				<h3>推荐用户</h3>
				<input class="submit" value="" type="submit"/>
				<input class="text" type="text"/>
			</div>
			<ul class="imgbox">
				<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i % 5 == 0): ?><li class="th5"><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li>
				<?php else: ?>
					<li><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="imgbox">
				<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,5,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i % 5 == 0): ?><li class="th5"><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li>
				<?php else: ?>
					<li><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="imgbox">
				<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,10,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i % 5 == 0): ?><li class="th5"><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li>
				<?php else: ?>
					<li><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="imgbox">
				<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,15,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i % 5 == 0): ?><li class="th5"><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li>
				<?php else: ?>
					<li><a href="<?php echo U('User/userdetail');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><img src="<?php echo ($vo["img_url"]); ?>" alt="<?php echo ($vo["nickname"]); ?>"/><span><?php echo ($vo["nickname"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<input type="hidden" id="page" value="1" />
		<input type="hidden" id="max_page" value="<?php echo ($page); ?>" />
		<div id="footer">客服电话:400-88888888</div>
		<script src="/Public/app/js/jquery-1.11.3.min.js"></script>
		<script>
			$(function () {
				$(window).scroll(function(){
					var scroll=$(this).scrollTop();
					var windowH=$(window).height();
					var documentH=$(document).height();
					var page = $("#page").val();
					var max_page = $("#max_page").val();
					page = parseInt(page);
					page = page + 1;
					if(scroll>=documentH-windowH-92){
						if(page <= max_page){
							$.ajax({
								type:'post',
								url:"/index.php/Show/ajax_photo/p/"+page,
								success:function(data){
									data = eval('('+data+')');
									if (data){
										var str= '';
										for(var i=0;i<data.length;i++){
											if(i%5 == 0){
												//开头
												str += '<ul class="imgbox"><li><a href="/index.php/User/userdetail/id/'+data[i].id+'" target="_blank"><img src="'+data[i].img_url+'" alt="'+data[i].nickname+'"/><span>'+data[i].nickname+'</span></a></li>';
											}else if(i%5 == 4){
												//结尾
												str += '<li class="th5"><a href="/index.php/User/userdetail/id/'+data[i].id+'" target="_blank"><img src="'+data[i].img_url+'" alt="'+data[i].nickname+'"/><span>'+data[i].nickname+'</span></a></li></ul>';
											}else{
												if(i == data.length){
														str += '<li class="th5"><a href="/index.php/User/userdetail/id/'+data[i].id+'" target="_blank"><img src="'+data[i].img_url+'" alt="'+data[i].nickname+'"/><span>'+data[i].nickname+'</span></a></li></ul>';
												}else{
														str += '<li><a href="/index.php/User/userdetail/id/'+data[i].id+'" target="_blank"><img src="'+data[i].img_url+'" alt="'+data[i].nickname+'"/><span>'+data[i].nickname+'</span></a></li>';
												}
											}
										}
										$("#content").append(str);
									}
								}
							})	
							$("#page").val(page);
						}
					}
				})
			})
		</script>
	</body>
</html>