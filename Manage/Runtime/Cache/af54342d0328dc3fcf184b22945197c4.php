<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>课程详情页</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>

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
				url: '<?php echo U('Up/kindls');?>',
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
        <th field="id" align="center" width="10%">id</th>
        <th field="kind" align="center" width="25%">视频种类</th>

        <!--<th field="name" align="center" width="25%">老师名称</th>-->
        <th field="f" align="center" width="30%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="add()">添加种类</a>
                </td>
                <td>种类:<input class="easyui-validatebox" id="kind" type="text" name="kind" size="14" ></td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--新增-->
<div id="dlg" class="easyui-dialog" title="设置" closed="true" buttons="#dlg-button" style="width:400px;height:300px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>种类:</label>
            <input name="kind"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>图片:</label>
            <input type="file" name="kimg">
        </div>
        <!--<div class="fitem">-->
            <!--<label>老师名称:</label>-->
            <!--<input name="name"  class="easyui-validatebox" style="width:200px;">-->
        <!--</div>-->
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>


<!--修改-->
<div id="dlgup" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:400px;height:300px;">
    <form id="fmup" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>种类名称:</label>
            <input name="kind"  class="easyui-validatebox" style="width:200px;">
        </div>

        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="saveup()">保存修改</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlgup').dialog('close')">取消</a>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">
    var url;

    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            kind: $('#kind').val(),
        });
    }

    //管理回调
    function show_manger(val,row){
        return"<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >修改消息</a>"
    }


    //展示修改信息
    function add(){
        $('#fm').form('clear');
        $('#dlg').dialog('open').dialog('setTitle','发布消息');
        url = "<?php echo U('Up/kindadd');?>";

    }
    //增加提交
    function save(){
        $('#fm').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    $('#dlg').dialog('close');		// close the dialog
                    $('#dg').datagrid('reload');	// reload the user data
                    $.messager.show({
                        title: '消息',
                        msg: result.msg
                    });
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: result.msg
                    });
                }
            }
        });
    }

    //修改提交
    function saveup(){
        $('#fmup').form('submit',{
            url: url,

            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){

                var result1 = eval('('+result+')');
                if (result1.success){
                    $('#dlgup').dialog('close');		// close the dialog
                    $('#dg').datagrid('reload');	// reload the user data
                    $.messager.show({
                        title: '消息',
                        msg: result1.msg
                    });
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: result1.msg
                    });
                }
            }
        });
    }

    function edit(id){
        $.ajax({
            type:'post',
            url:"__APP__/Up/kindedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fmup').form('clear');
                    $('#dlgup').dialog('open');
                    url = "<?php echo U('Up/kindsave');?>&id="+id;
                    $('#fmup').form('load',row);
                }else{
                    $.messager.show({
                        title: '出错啦！！',
                        msg: '请选择一条'
                    });
                }
            }
        });
    }


</script>

</html>