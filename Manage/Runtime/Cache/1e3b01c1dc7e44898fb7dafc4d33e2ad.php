<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>头像管理</title>
  	<link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
	<style type="text/css">
		.page{ width:440px; height:30px; margin:15px 0 15px 870px;}
		.page li{ float:left; border:1px solid #E9E9E9; margin-left:10px;list-style:none;}
		.page li a{ line-height:25px; padding:0px 10px; color:#666666; display:block;text-decoration:none;}
		.page li a:hover{ line-height:25px; padding:0px 10px; background:#e86867; color:#fff; display:block;text-decoration:none;}
		.page li span a{ line-height:25px; padding:0px 10px; background:#e86867; color:#fff; display:block;text-decoration:none;}
		.box{
			width:120px;
			float:left;
			margin-left:10px;
			border:1px solid #fcfcfc;
		}
		.box img{
			margin-left:10px;
		}
	</style>
</head>
<body class="easyui-layout">
	<div data-options="region:'center'">
		<div style="height:40px;">
			<table>
				<tr>
					<form action="<?php echo U('User/image');?>" method="post" id="fm">
					<td>用户id：<input class="easyui-validatebox" type="text" name="uid" size='4' value="<?php echo ($uid); ?>"></td>
					<td>用户昵称：<input class="easyui-validatebox" type="text" name="nickname" size="5" value="<?php echo ($nickname); ?>"></td>
					<td>用户状态：
						<select name="status">
							<option value=''>-请选择-</option>
							<option value='1' <?php if($status == 1): ?>selected<?php endif; ?>>正常</option>
							<option value='2' <?php if($status == 2): ?>selected<?php endif; ?>>禁用</option>
						</select>
					</td>
					<td>头像状态：
						<select name="img_status">
							<option value=''>-请选择-</option>
							<option value='1' <?php if($img_status == 1): ?>selected<?php endif; ?>>通过</option>
							<option value='2'<?php if($img_status == 2): ?>selected<?php endif; ?> >未通过</option>
							<option value='3'<?php if($img_status == 3): ?>selected<?php endif; ?> >为处理</option>
						</select>
					</td>
					</form>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
					</td>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-sum" class="easyui-linkbutton" onClick="check_all()">全选</a>
					</td>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-remove" class="easyui-linkbutton" onClick="check_cancle()">取消所有选泽</a>
					</td>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-reload" class="easyui-linkbutton" onClick="check_other()">反选</a>
					</td>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-ok" class="easyui-linkbutton" onClick="do_check()">通过</a>
					</td>
					<td>
						  <a href="javascript:void(0)" iconCls="icon-cancel" class="easyui-linkbutton" onClick="cancle_check()">拒绝</a>
					</td>
				</tr>
			</table>
		</div>
		<!--审核通过-->
		<form id="check" action="<?php echo U('User/head_check');?>" method="post">
			<input type="hidden" id="headcheck" name="id" />
		</form>
		<!--审核未通过-->
		<form id="cancle" action="<?php echo U('User/head_cancle');?>" method="post">
			<input type="hidden" id="headcancle" name="id" />
		</form>
		<!--图像模块-->
		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box">
			<img src="<?php echo ($vo["img_url"]); ?>" alt="头像" width='100px'height='120px'/>
			<div>
				<div><input type="checkbox" name="test" value="<?php echo ($vo["id"]); ?>" /><?php echo ($vo["nickname"]); ?></div>
				<div>id：<?php echo ($vo["id"]); ?></div>
				<div>
					图片状态：<?php echo ($vo["img_status"]); ?>
				</div>
				<div><?php echo ($vo["img_time"]); ?></div>
				<div><a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="big('<?php echo ($vo["img_url"]); ?>')">查看大图</a></div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--图像模块结束-->
		<div style="clear:both;"></div>
		<div class="page">
			<?php echo ($page); ?>
		</div>
	</div>	
	<!--查看大图-->
	<div id="dlg" class="easyui-dialog" title="查看大图" closed="true" style="width:600px;">
		<img id="img">
	</div>
</body>
<script type="text/javascript">
	function doSearch(){
		$("#fm").submit();
	}
	//全选
	function check_all(){
		 $(":checkbox").each(function(index,element){
			$(this).prop("checked",true);
		 }) 
	}
	//取消全选
	function check_cancle(){
		$(":checkbox").each(function(index,element){
			$(this).prop("checked",false);
		 }) 
	}
	//反选
	function check_other(){
		var status
		$(":checkbox").each(function(index,element){
			status = $(this).prop('checked');
			if(status){
			   $(this).prop("checked",false);
			}else{
				$(this).prop("checked",true);
			}
		 }) 
	}
	//通过
	function do_check(){
		var val = '';
		$("input[type='checkbox']:checked").each(function(index,element){
			val = val +  $(this).val() + ',';
		});
		$("#headcheck").val(val);
		$("#check").submit();
	}
	//拒绝
	function cancle_check(){
		var val = '';
		$("input[type='checkbox']:checked").each(function(index,element){
			val = val +  $(this).val() + ',';
		});
		$("#headcancle").val(val);
		$("#cancle").submit();
	}
	//查看大图
	function big(url){
			$('#dlg').dialog('open');
			$('#img').attr('src',url);
	}
</script>
</html>