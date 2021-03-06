<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap.min.css"/> 
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/bootstrap-table.min.css"/>
    <link rel="stylesheet" type="text/css" href="/blog/Public/css/layer.css">
    
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
<script type="text/javascript" src="/blog/Public/js/layer.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        init();
    });
    function init(){
        $('#table').bootstrapTable({
            method: 'post',
            url: "/blog/index.php/Admin/Article/data_init",
            height: $(window).height()-182,
            width:1200,
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
                    field: 'title',
                    title: '标题',
                    width: 120,
                    align: 'center',
                    valign: 'middle',
                    sortable: false,

                },
                {
                    field: 'content',
                    title: '文章内容',
                    width: 160,
                    align: 'center',
                    valign: 'middle',
                    sortable: false

                },
                {
                    field: 'createtime',
                    title: '创建时间',
                    width: 170,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'updatetime',
                    title: '更新时间',
                    width: 170,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'username',
                    title: '发布者',
                    width: 80,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'state',
                    title: '发布状态',
                    width: 60,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'close_comment',
                    title: '评论状态',
                    width: 80,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'classify',
                    title: '文章分类',
                    width: 30,
                    align: 'center',
                    valign: 'middle',
                    sortable: false
                },
                {
                    field: 'action',
                    title: '操作',
                    width: 90,
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
            '<a class="like ml10" href="javascript:void(0)" title="关闭评论">',
            '<i class="glyphicon glyphicon-floppy-remove"></i>',
            '</a>',
            '&nbsp&nbsp',
            '<a class="edit ml10" href="javascript:void(0)" title="详情">',
            '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',
            '&nbsp&nbsp',
            '<a class="remove ml10" href="javascript:void(0)" title="删除">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.actionEvents = {
        'click .remove': function (e, value, row, index) {
            if(confirm('确定要删除此文章?')){
                $.post('/blog/index.php/Admin/Article/edit',{'id':index+1},function(result){
                    if(result.result==0){
                        alert('操作成功');
                        location.reload();
                    }else{
                        alert('操作失败');
                    }
                });
            }
        },
        'click .like': function (e,value,row,index){
            if(confirm('确定要关闭评论吗?')){
                $.post('/blog/index.php/Admin/Article/close_comment',{'id':index+1},function(result){
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
            $.post('/blog/index.php/Admin/Article/detail',{'id':index+1},function(result){
                layer.open({
                    type:1,
                    skin:'layui-layer-demo',
                    closeBtn:1,
                    area:['420px','240px'],
                    shift:2,
                    shadeClose:true,
                    content:"<h6>"+result.result.title+"</h6><br>"+result.result.content
                });
            });
            
        }
    };
</script>
</body>
</html>