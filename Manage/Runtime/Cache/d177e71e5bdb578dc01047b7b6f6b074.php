<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="jquery,ui,easy,easyui,web">
    <meta name="description" content="easyui help you build your web page easily!">
    <title>课程详情页</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/easyui.css?v=<?php echo date('Ymjs') ?>">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/icon.css?v=<?php echo date('Ymjs') ?>">
    <!--<link rel="stylesheet" type="text/css" href="/Public/admin/css/uploadify.css">-->
    <script type="text/javascript" src="/Public/admin/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.easyui.min.js"></script>
    <!--<script type="text/javascript" src="/Public/admin/js/jquery.uploadify.min.js"></script>-->

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
        .yq{
            color: red;
        }
    </style>
</head>
<body>
<table id="dg" class="easyui-datagrid" toolbar="#toolbar" style="width:90%px;height:80%px"
       data-options="
				url: '<?php echo U('Up/vedels');?>',
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
        <th field="id" align="center" width="15%">id</th>
        <!--<th field="kid" align="center" width="15%">视频种类id</th>-->
        <th field="kind" align="center" width="15%">视频种类名称</th>
        <!--<th field="zname" align="center" width="15%">视频子类名称</th>-->
        <!--<th field="zid" align="center" width="15%">视频子类id</th>-->
        <th field="name" align="center" width="15%">老师名字</th>
        <!--<th field="url" align="center" width="20%" >视频连接</th>-->
        <th field="title" align="center" width="30%" >章节标题</th>
        <th field="money" align="center" width="15%" >课程价格</th>
        <th field="introduce" align="center" width="30%" >章节介绍</th>
        <th field="chapternum" align="center" width="5%" >章节数</th>
        <th field="kctitle" align="center" width="20%" >课程标题</th>
        <th field="img" align="center" width="30%" formatter="imgFormatter">课程图片</th>
        <th field="isrecommend" align="center" width="20%" formatter="show_status">是否设置为推荐课程</th>
        <th field="f" align="center" width="40%" formatter="show_manger">操作</th>
    </tr>
    </thead>
</table>
<div id="toolbar" style="height:40px;">
    <div>
        <table>
            <tr>
                <td>章节标题:<input class="easyui-validatebox" id="title" type="text" name="title" size="14" ></td>
                <td>视频价格:<input class="easyui-validatebox" id="money" type="text" name="money" size="15" ></td>
                <td>课程标题:<input class="easyui-validatebox" id="kctitle" type="text" name="kctitle" size="14" ></td>
                <td>
                    <a href="javascript:void(0)" iconCls="icon-search" class="easyui-linkbutton" onClick="doSearch()">查询</a>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--修改-->
<div id="dlgup" class="easyui-dialog" title="修改" closed="true" buttons="#dlg-button" style="width:500px;height:500px;">
    <form id="fmup" method="post" enctype="multipart/form-data">
        <div class="fitem">
            <label>视频种类</label>
            <select data-options="panelHeight:'auto',editable:false" class="easyui-combobox" name="kind" id="kname">
                <option value="">--请选择--</option>
                <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["kind"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="fitem">
            <label>视频子类</label>
            <select data-options="panelHeight:'auto',editable:false"  class="easyui-combobox" name="zname" id="zname">
                <option value="">--请选择--</option>
                <?php if(is_array($ras)): $i = 0; $__LIST__ = $ras;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa): $mod = ($i % 2 );++$i;?><option value="<?php echo ($voa["id"]); ?>"><?php echo ($voa["zname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="fitem">
            <label>老师名字:</label>
            <select style="height:20px; overflow: scroll;" class="easyui-combobox" name="name" id="name">
                <option value="">--请选择--</option>
                <?php if(is_array($ree)): $i = 0; $__LIST__ = $ree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($voo["id"]); ?>"><?php echo ($voo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="fitem">
            <label>课程标题:</label>
            <input name="kctitle"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>课程价格:</label>
            <input name="money"  class="easyui-validatebox" style="width:200px;">
        </div>
        <div class="fitem">
            <label>章节标题:</label>
            <textarea name="title" class="easyui-validatebox" cols="20" rows="5"></textarea>
        </div>
        <div class="fitem">
            <label>章节介绍:</label>
            <textarea name="introduce" class="easyui-validatebox" cols="30" rows="5"></textarea>
        </div>
        <div class="fitem">
            <label>章节数:</label>
            <input name="chapternum"  class="easyui-validatebox" style="width:200px;">
        </div>

        <div class="fitem">
            <label>图片:</label>
            <input type="file" name="img"><span class="yq">*图片尺寸为:244x212</span>
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
    //图片
    function imgFormatter(value,row,index){
        if('' != value && null != value)
            value = '<img style="width:50px; height:50px" src="' + value + '">';
        return  value;

    }



    function show_status(val,row){
        if(val == 0){
            val = "<span style='color: red;'>未推荐</span>";
        }else if(val == 1){
            val = "<span style='color: green'>已推荐</span>";
        }
        return val;
    }

    //搜索
    function doSearch(){
        $('#dg').datagrid('load',{
            title: $('#title').val(),
            money: $('#money').val(),
            kctitle: $('#kctitle').val()
        });
    }

    //管理回调
    function show_manger(val,row){
        return"<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='edit("+row.id+")' >完善消息</a>&nbsp;/&nbsp;" +
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='shows("+row.id+")'>确认推荐</a>&nbsp;/&nbsp;"+
                "<a href='javascript:;' class='easyui-linkbutton' iconCls='icon-edit' onclick='deshow("+row.id+")'>取消推荐</a>";
    }

    function shows(id){
        $.ajax({
            type:"post",
            url:"__APP__/Up/shows",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
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

    function deshow(id){
        $.ajax({
            type:"post",
            url:"__APP__/Up/deshow",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
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
            url:"__APP__/Up/vedeedit",
            data:{id:id},
            success:function(data){
                row = eval('('+data+')');
                if (row){
                    $('#fmup').form('clear');
                    $('#dlgup').dialog('open');
                    url = "<?php echo U('Up/vedesave');?>&id="+id;
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