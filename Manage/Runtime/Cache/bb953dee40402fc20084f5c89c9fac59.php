<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>学员评论</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
    <style type="text/css">
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            color:#666;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
    </style>
</head>
<body>
<table id="dg" class="easyui-datagrid" toolbar="#toolbar" style="width:90%px;height:80%px"
       data-options="
				url: '<?php echo U('User/collectionlist');?>',
				rownumbers: true,
				fit:true,
				fitColumns:true,    //让列自适应表格的宽度。
				pagination: true,
				pageNumber:1,
				pageSize:20,
				pageList: [20,30],
				idField: 'id',
				singleSelect: false,
			"
>
    <thead>
    <tr>
        <th field="id" align="center" width="10%">ID</th>
        <th field="uid" align="center" width='10%'>UID</th>
        <th field="nickname" align="center" width='10%'>收藏人昵称</th>
        <th field="courseid" align="center" width="10%">视频ID</th>
        <th field="title" align="center" width="10%">收藏的视频标题</th>
        <th field="addtime" align="center" width="20%">收藏时间</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>收藏人昵称：<input class="easyui-validatebox" id="nickname" type="text" name="nickname"></td>
                <td>视频标题:<input class="easyui-validatebox" id="title" type="text" name="title" ></td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>

            </tr>
        </table>
    </div>
</div>

<!--修改-->
<div id="dlg" class="easyui-dialog" title="设置" closed="true" buttons="#dlg-button" style="width:900px;height:500px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>发票抬头:</label>
            <input name="company"  class="easyui-validatebox" style="width:300px;">
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>
</body>

<script type="text/javascript">
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            nickname: $('#nickname').val(),
            Phone: $('#Phone').val(),
            regstart: $('#reg_start').val(),
            regend: $('#reg_end').val(),
            is_open: $('#is_open').val(),
        });
    }
</script>
</html>