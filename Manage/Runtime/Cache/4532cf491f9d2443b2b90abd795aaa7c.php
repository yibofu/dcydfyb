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
    <script  type="text/javascript" src="/Public/admin/js/DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
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
				url: '<?php echo U('Up/teacherls');?>',
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
        <th field="id" align="center" width="5%">id</th>
        <th field="name" align="center" width="15%">老师名称</th>
        <th field="explain" align="center" width="30%">老师信息</th>
        <th field="timg" align="center" width="15%" formatter="imgFormatter">老师图片</th>
        <th field="f" align="center" width="30%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="add()">发布消息</a>
                </td>
                <td>标题:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>
                <td>讲师名称:<input class="easyui-validatebox" id="name" type="text" name="name" size="15" ></td>
                <td>发布时间：<input style="width:90px;"   type="text"  class="Wdate"  onClick="WdatePicker()" id="ytime" name="ytime"></td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--新增-->
<div id="dlg" class="easyui-dialog" title="设置" closed="true" buttons="#dlg-button" style="width:900px;height:700px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>老师名称:</label>
            <input type="text" name="name" class="easyui-validatebox">
        </div>
        <div class="fitem">
            <label>老师信息:</label>
            <script id="editor" name="explain" type="text/plain" style="width:750px;height:300px;">

            </script>
        </div>
        <div class="fitem">
            <label>老师图片:</label>
            <input type="file" name="timg">
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>


</body>
<script type="text/javascript">
    var ue = UE.getEditor('editor');
    var url;
    //图片
    function imgFormatter(value,row,index){
        if('' != value && null != value)
            value = '<img style="width:50px; height:50px" src="' + value + '">';
        return  value;

    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            title: $('#title').val(),
            content: $('#content').val(),
        });
    }

    //管理回调
    function show_manger(val,row){

        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >完善消息</a>"
    }



    //展示修改信息
    function add(){
        $('#fm').form('clear');
        $('#dlg').dialog('open').dialog('setTitle','发布消息');
        url = "<?php echo U('Up/teacheradd');?>";

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
        $('#fm').form('submit',{
            url: url,

            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){

                var result1 = eval('('+result+')');
                if (result1.success){
                    $('#dlg').dialog('close');		// close the dialog
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
            url:"__APP__/Up/teacheredit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
//                alert(row);
                if (row){
                    $('#fm').form('clear');
                    $('#dlg').dialog('open');
                    url = "<?php echo U('Up/teachersave');?>&id="+id;
                    $('#fm').form('load',row);
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