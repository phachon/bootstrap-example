<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <title>Bootstrap-example</title>
    <link rel="stylesheet" href="/resource/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/resource/css/dashboard.css"/>
    <link rel="stylesheet" href="/resource/css/content-style.css"/>

    <script src="/resource/js/plugins/jquery/jquery.js"></script>
    <script src="/resource/js/plugins/bootstrap/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar " style="width: 200px; padding-left: 30px;">
            <ul class="nav nav-sidebar"><a href="javascript:;"><strong>表单</strong></a>
                <li><a href="/form/form1">表单1</a></li>
                <li><a href="/form/form2">表单2</a></li>
            </ul>
            <ul class="nav nav-sidebar"><a href="javascript:;"><strong>表格</strong></a>
                <li><a href="/table/table1">表格1</a></li>
                <li><a href="/table/table1">表格2</a></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?php echo $content;?>
        </div>
    </div>
</div>
</body>
</html>