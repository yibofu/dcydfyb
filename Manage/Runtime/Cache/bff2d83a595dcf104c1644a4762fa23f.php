<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>百问百答</title>
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
				url: '<?php echo U('AskAnswer/asklist');?>',
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
        <th field="nickname" align="center" width="10%">提问人</th>
        <th field="Phone" align="center" width="10%">提问人电话</th>
        <th field="question" align="center" width="5%">问题</th>
        <th field="typename" align="center" width="15%">问题类型</th>
        <th field="addtime" align="center" width="10%">提问时间</th>
        <th field="name" align="center" width="15%" >解决老师</th>
        <th field="answer" align="center" width="20%" >答案</th>
        <th field="f" align="center" width="15%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>提问人:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>
                <td>问题:<input class="easyui-validatebox" id="content" type="text" name="content" size="15" ></td>
                <td>&nbsp;提问时间:<input  type="text" style="width:85px;" id="reg_start" class="Wdate"  onClick="WdatePicker()">
                    -<input  type="text" style="width:85px;" id="reg_end" class="Wdate"  onClick="WdatePicker()">
                </td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!--解答问题-->
<div id="dlg" class="easyui-dialog" title="解答问题" closed="true" buttons="#dlg-button" style="width:900px;height:500px;">
    <form id="fm" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>问题:</label>
            <textarea name="question" cols="30" rows="10"></textarea>
        </div>
        <div class="fitem">
            <label>解答老师:</label>
            <select  style="height:20px; overflow: scroll;" class="easyui-combobox" name="name" id="name">
                <option value="">--请选择--</option>
                <?php if(is_array($ree)): $i = 0; $__LIST__ = $ree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($voo["id"]); ?>"><?php echo ($voo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="fitem">
            <label>答案:</label>
            <input name="answer" class="easyui-validatebox" style="width:300px;height:67px;">
        </div>
        <div id="dlg-button">
            <a href="javascript:;" class="easyui-linkbutton" iconCls="icon-ok" onClick="save()">保存</a>
            <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onClick="javascript:$('#dlg').dialog('close')">取消</a>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">
    var url;
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
        return "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >解答问题</a> / "+
                "<a href='javascript:;' onclick='del("+row.id+")' >删除</a>";

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

    function edit(id){
        $.ajax({
            type:'post',
            url:"__APP__/AskAnswer/askedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');

                if (row){
                    $('#fm').form('clear');
                    $('#dlg').dialog('open');
                    url = "<?php echo U('AskAnswer/asksave');?>&id="+id;
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

    function del(id){
        $.messager.confirm('Confirm','确定要删除么？',function(r){
            if(r){
                $.ajax({
                    type:'post',
                    url:"__APP__/AskAnswer/del_mes",
                    data:{id:id},
                    success:function(data){
                        row = eval('('+data+')');
                        if (row){
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