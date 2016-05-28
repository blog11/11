<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap.min.css"/> 
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap-table.min.css"/>
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/layer.css"/>
</head>
<body>
<div class="container">
    <!-- <table id="table"
           data-toggle="table"
           data-url="/blog/Admin/Moodlist/data_init"
           data-pagination="false"
           data-show-columns="false"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="false"
           contentType: "application/x-www-form-urlencoded",

           data-height="500"> -->
    <table id="table">
        <!-- <thead>
        <tr>
            <th data-field="id" data-align="center">序号</th>
            <th data-field="imgpath" data-align="center" data-formatter="imgpathFormatter">图片</th>
            <th data-field="mood" data-align="center">心情</th>
            <th data-field="createtime" data-align="center">创建时间</th>
            <th data-field="state" data-align="center">状态</th>
            <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
        </tr>
        </thead> -->
    </table>
</div>
<script src="/blog/Public/js/jquery.min.js" type="text/javascript"></script>
<script src="/blog/Public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/blog/Public/js/pager/tableExport.js" type="text/javascript"></script>
<script src="/blog/Public/js/pager/jquery.base64.js" type="text/javascript"></script>
<script src="/blog/Public/js/pager/bootstrap-table.js" type="text/javascript"></script>
<script src="/blog/Public/js/pager/bootstrap-table-export.js" type="text/javascript"></script>
<script src="/blog/Public/js/layer.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        init();

    });
    function init(){
        $('#table').bootstrapTable({
            method: 'post',
            url: "/blog/index.php/Admin/Permission/data_init",
            height: $(window).height()-182,
            width:800,
            //striped: true,
            dataType: "json",
            pagination: true,
            //"queryParamsType": "limit",
            //singleSelect: false,
            //contentType: "application/x-www-form-urlencoded",
            pageSize: 10,
            pageNumber:1,
            search: true, //不显示 搜索框
            showColumns: false, //不显示下拉框（选择显示的列）
            //sidePagination: "server", //服务端请求
            //queryParams: queryParams,
            //responseHandler: responseHandler,
            columns: [
                {
                    field: 'id',
                    title: '序号',
                    width: 20,
                    align: 'center',
                    valign: 'middle',
                    sortable: true

                },
                {
                    field: 'username',
                    title: '用户名',
                    width: 100,
                    align: 'center',
                    valign: 'middle',
                    sortable: false,

                },
                
                {
                    field: 'createtime',
                    title: '创建时间',
                    width: 200,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'state',
                    title: '状态',
                    width: 20,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'attention',
                    title: '关注人数',
                    width: 20,
                    align: 'center',
                    valign: 'middle',
                    sortable: false

                },
                {
                    field: 'identity',
                    title: '状态',
                    width: 100,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'action',
                    title: '操作',
                    width: 100,
                    align: 'center',
                    formatter: actionFormatter,
                    events: actionEvents
                }
            ]
        });
    }
    function responseHandler(res) {
        if (res.IsOk) {
            var result = b64.decode(res.ResultValue);

            var resultStr = $.parseJSON(result);
            return {
                "rows": resultStr.Items,
                "total": resultStr.TotalItems
            };

        } else {
            return {
            "rows": [],
            "total": 0
            };
        }

    }

        //传递的参数

    function queryParams(params) {

        return {
            pageSize: params.limit,

            pageNumber: params.pageNumber,

            UserName: 4

        };

    }

    function actionFormatter(value, row, index) {
        return [
            '<a class="like ml10" href="javascript:void(0)" title="Floppy-remove">',
            '<i class="glyphicon glyphicon-floppy-remove"></i>',
            '</a>',
            '&nbsp&nbsp',
            '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
            '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',
            '&nbsp&nbsp',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.actionEvents = {
        'click .remove': function (e, value, row, index) {
            if(confirm('确定要此操作吗?')){
                $.post('/blog/Admin/Permission/delete',{'id':index+1},function(result){
                    if(result.result==0){
                        alert('操作成功');
                        location.reload();
                    }else{
                        alert('操作失败');
                    }
                });
            }
        },
        'click .edit':function(e,value,row,index){
            if(confirm('您确定要任命他为管理人员')){
                $.post('/blog/Admin/Permission/improve',{'id':index+1},function(result){
                    if(result.result==0){
                        alert('此人已经是管理人员了');
                    }else if(result.result==1){
                        alert('此人是游客身份,不能任命为管理人员');
                    }else{
                        alert('操作成功');
                        location.reload();
                    }
                });
            }
        },
        'click .like':function(e,value,row,index){
            if(confirm('您确定要撤去他的管理职务吗?')){
                $.post('/blog/Admin/Permission/down',{'id':index+1},function(result){
                    if(result.result==0){
                        alert('操作成功');
                        location.reload();
                    }else{
                        alert('操作失败');
                    }
                })
            }
        }
    };
</script>
</body>
</html>