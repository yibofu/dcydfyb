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
				url: '<?php echo U('User/commentslist');?>',
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
        <th field="nickname" align="center" width='10%'>评论人昵称</th>
        <th field="viewid" align="center" width="10%">视频ID</th>
        <th field="title" align="center" width="10%">视频标题</th>
        <th field="content" align="center" width="20%">评论内容</th>
        <th field="addtime" align="center" width="10%">评论时间</th>
        <th field="status" formatter="show_status" align="center" width="10%">是否显示评论</th>
        <th field="d" formatter="show_manage" align="center" width="20%">管理</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>用户昵称：<input class="easyui-validatebox" id="nickname" type="text" name="nickname"></td>
                <td>视频标题:<input class="easyui-validatebox" id="title" type="text" name="title" ></td>
                <td>评论内容:<input class="easyui-validatebox" id="content" type="text" name="content" ></td>
                <td>评论是否显示:
                    <select name="status" id="status">
                        <option value="">--请选择--</option>
                        <option value="1">不显示</option>
                        <option value="2">已显示</option>
                    </select>
                </td>
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
    function show_status(val,row){
        if(val == 1){
            val = "<span style='color: red;'>禁止</span>";
        }else if(val == 2){
            val = "<span style='color: green'>允许</span>";
        }
        return val;
    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            nickname: $('#nickname').val(),
            title: $('#title').val(),
            content: $('#content').val(),
            status: $('#status').val(),
        });
    }
    //操作回调
    function show_manage(val,row){
        var str = '';
        str = "<a href='javascript:;' onclick='del("+row.id+")' >删除</a> / " +
                "<a href='javascript:;' onclick='mana("+row.id+")'>点击显示评论</a>";
        return str;
    }
    function mana(id){
        $.ajax({
            type:"post",
            url:"__APP__/User/surecomments",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if(row){
                    $('#dg').datagrid('reload',row);
                }else{
                    $.messager.show({
                        title:'出错了！',
                        msg:'请选择一条'
                    });
                }
            }
        })
    }

    function del(id){
        $.messager.confirm('Confirm','确定要删除么？',function(r){
            if(r){
                $.ajax({
                    type:'post',
                    url:"__APP__/User/delcomments",
                    data:{id:id},
                    success:function(data){
                        row = eval('('+data+')');
                        if (row.success){
                            $('#dg').datagrid('reload');
                            $.messager.show({
                                title: '消息',
                                msg: '删除成功'
                            });
                        }else{
                            $.messager.show({
                                title: '出错啦！！',
                                msg: '请选择一条'
                            });
                        }
                    }
                });
            }
        })
    }
</script>
</html>