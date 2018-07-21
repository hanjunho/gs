<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <style type="text/css">
        *, body {font-family: "Gothic A1";}
        a {color:#000;}
        h1 {text-align: center;}
        h2 {color:red;}

        .list-table {min-width:480px; margin:0 auto;}
        .list-table td {padding:6px 0 0px;}
        .origin a {font-size: 1.5em; font-weight:bold; color:#000;}
        .master a {font-size:1.3em; }
        .master.qna .parent {font-size:10px;}
        .master.qna .depth {padding-left:15px; color:#00f;}
        .list_label {position: relative;width:114px; height:28px;}
        .list_label span {position: absolute;}
        .list_label .board_name {top:50%; left:36px; font-size:10px; margin-top:-13px;}
        .list_label .board_name > a {display:inline-block; font-size:9px; }
        .list_label .date {bottom:50%; left:36px; font-size:11px; margin-bottom:-13px; font-style:italic;}
        .list_label .date small {font-size:0.75em;}
        .list_label .date a {font-size:10px; }
        .list_label .year {top:50%; margin-top:-9px; font-size:14px; font-style:italic;}
        .coffee a {color: #656565; font-size:12px; font-weight:normal;}
        .coffee.master .title a {color: #000; font-size:1.3em; }
        .qna a {font-size:14px;}
        .notice .board_name a {font-weight: bold;}
        .notice .title a {font-size: 1.4em; color:#000;}
        .title {padding-left:5px}
        .creator a {display:inline-block; margin-left:15px; font-size:11px;}
        .title span.creator.master a {font-size:12px; font-weight:bold; color:#000;}
        tr {border-bottom:1px dashed #ddd;}
        ul {margin:0; padding:0;}
        .other-sort li {list-style: none; display: inline-block; margin:0 10px;}
        footer {height:100px; border-bottom:50px solid #000;}

      </style>
        <title>guruchain time sort</title>
       
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>

