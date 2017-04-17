<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>发布文章</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <script type="text/javascript" src="/Public/admin/js/jquery-1.8.0.min.js"></script>
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
				url: '<?php echo U('Article/articlelist');?>',
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
        <th field="title" align="center" width="10%">标题</th>
        <th field="auth" align="center" width="5%">作者</th>
        <th field="time" align="center" width="10%">日期</th>
        <th field="content" align="center" width="15%" >内容</th>
        <th field="describe" align="center" width="20%" >描述</th>
        <th field="keywords" align="center" width="10%" >关键字</th>
        <th field="status" align="center" width="5%" formatter="show_status">状态</th>
        <th field="lanmu" align="center" width="5%" formatter="show_lanmu">栏目</th>
        <th field="f" align="center" width="15%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>
                    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="add()">发布文章</a>
                </td>
                <td>标题:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>
                <td>内容:<input class="easyui-validatebox" id="content" type="text" name="content" size="15" ></td>
                <td>描述:<input class="easyui-validatebox" id="describe" type="text" name="title" size="14" ></td>
                <td>关键字:<input class="easyui-validatebox" id="keywords" type="text" name="title" size="14" ></td>
                <td>解决情况:
                    <select name="status" id="status">
                        <option value="">--请选择--</option>
                        <option value="1">未发布</option>
                        <option value="2">已发布</option>
                    </select>
                </td>
                <td>栏目:
                    <select name="lanmu" id="lanmu">
                        <option value="">--请选择--</option>
                        <option value="1">案例</option>
                        <option value="2">法规</option>
                        <option value="3">干货</option>
                        <option value="4">动态</option>
                    </select>
                </td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--新增-->
<div id="dlg" class="easyui-dialog" title="设置" closed="true" buttons="#dlg-button" style="width:900px;height:500px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>标题:</label>
            <input name="title"  class="easyui-validatebox" style="width:300px;">
        </div>
        <div class="fitem">
            <label>关键字:</label>
            <input name="keywords" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div class="fitem">
            <label>栏目:</label>
            <select data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="lanmu" id="lanmu">
                <option value="" selected="selected">--请选择--</option>
                <option value="1">案例</option>
                <option value="2">法规</option>
                <option value="3">干货</option>
                <option value="4">动态</option>
            </select>
        </div>
        <div class="fitem">
            <label>来源:</label>
            <input name="laiyuan" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div class="fitem">
            <label>描述:</label>
            <input name="describe" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div class="fitem">
            <label>作者:</label>
            <input name="auth" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div class="fitem">

            <label>内容:</label>
            <!--<iframe src="" height="4000px;" frameborder="0">-->
            <script id="editor" name="content" type="text/plain" style="width:750px;height:300px;">

            </script>
            <!--</iframe>-->
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>


<!--修改-->
<!--<div id="dlgup" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:700px;height:700px;">-->
    <!--<form id="fmup" method="post" enctype="multipart/form-data">-->
        <!--<div class="fitem">-->
            <!--<label>标题:</label>-->
            <!--<input name="title"  class="easyui-validatebox" style="width:200px;">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>关键字:</label>-->
            <!--<input name="keywords" class="easyui-validatebox" style="width:300px;height:67px;">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>栏目:</label>-->
            <!--<select data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="lanmu" id="lanmu">-->
                <!--<option value="" selected="selected">&#45;&#45;请选择&#45;&#45;</option>-->
                <!--<option value="1">案例</option>-->
                <!--<option value="2">法规</option>-->
                <!--<option value="3">干货</option>-->
                <!--<option value="4">动态</option>-->
            <!--</select>-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>来源:</label>-->
            <!--<input name="laiyuan" class="easyui-validatebox" style="width:300px;height:67px;">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>描述:</label>-->
            <!--<input name="describe" class="easyui-validatebox" style="width:300px;height:67px;">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>作者:</label>-->
            <!--<input name="auth" class="easyui-validatebox" style="width:300px;height:67px;">-->
        <!--</div>-->
        <!--<div class="fitem">-->
            <!--<label>内容:</label>-->
            <!--<script id="container" name="content" type="text/plain" style="width:750px;height:300px;">-->
            <!--</script>-->
        <!--</div>-->
        <!--<div id="dlg-button">-->
            <!--<a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>-->
            <!--<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>-->
        <!--</div>-->
    <!--</form>-->
<!--</div>-->
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

    function show_status(val,row){
        if(val == 1){
            val = "<span style='color:red;'>未发布</span>";
        }else if(val == 2){
            val = "<span style='color:green;'>已发布</span>";
        }
        return val;
    }

    function show_lanmu(val,row){
        if(val == 1){
            val = "<span>案例</span>";
        }else if(val == 2){
            val = "<span>法规</span>";
        }else if(val == 3){
            val = "<span>干货</span>";
        }else if(val == 4){
            val = "<span>动态</span>";
        }
        return val;
    }
    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            title: $('#title').val(),
            content: $('#content').val(),
            describe: $('#describe').val(),
            keywords: $('#keywords').val(),
            status: $('#status').val(),
            lanmu: $('#lanmu').val(),
        });
    }
    //管理回调
    function show_manger(val,row){
        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >修改消息</a>&nbsp;/&nbsp;" +
               "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon' onclick='fabu("+row.id+")'>发布</a>&nbsp;/&nbsp;" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-cancel' onclick='del("+row.id+")' >删除消息</a>";

    }
    //展示修改信息
    function add(){
        $('#fm').form('clear');
        $('#dlg').dialog('open').dialog('setTitle','发布消息');
        url = "<?php echo U('Article/articleadd');?>";
        $('.window').css('zIndex', 1000);
        $('.window-shadow').css('zIndex', 999);

    }

    function fabu(id){
        $.ajax({
            type:"post",
            url:"__APP__/Article/show",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                alert(row);
                if(row){
                    $('#dg').datagrid('reload',row);
                }else{
                    $.messager.show({
                        title:'出错了！',
                        msg:'请选择一条'
                    })
                }
            }
        })
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
            url:"__APP__/Article/articleedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    ue.setContent(row.content);
                    $('#fm').form('clear');
                    $('#dlg').dialog('open');
                    url = "<?php echo U('Article/articlesave');?>&id="+id;
                    $('.window').css('zIndex', 1000);
                    $('.window-shadow').css('zIndex', 999);
                    $('.window-shadow').css('zIndex', 999);
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

    //删除
    function del(id){
        $.ajax({
            type:'post',
            url:"__APP__/Article/articledel",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#dg').datagrid('reload');
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