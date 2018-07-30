<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <style type="text/css">
        header, #app {background:#fff;}
        header {padding-top:15px;}
        *, body {font-family: "Gothic A1";}
        body { background:#000;}
        a {color:#000;}

        .wrap {max-width: 1140px; margin:0 auto;}
        h1 {margin-top:0; text-align: left; font-size:18px;}
        h2 {color:red;}

        .list-table {max-width:1140px; margin:0 auto;}
        .list-table td {position:relative; padding:6px 0 0px; line-height:1.3;}
        .origin a {font-size: 1.5em; font-weight:bold; color:#000;}
        .master a {font-size:1.3em; }
        .list-table .parent {position:absolute; top:3px; left:-3px; font-family:'Lato'; font-size:8px !important; border:1px solid #ccc; border-radius:3px; padding:1px; background:#fff;}
        .list-table .depth {padding-left:15px; }
        .master.qna .depth {color:#00f;}
        .list_label {position: relative;width:94px; height:28px;}
        .list_label .board_name {display:block; line-height:0.9; }
        .list_label .board_name > a {display:inline-block; font-size:10px; }
        .list_label .time, .list_label .time * {font-family:'Lato'; font-weight:300;}
        .list_label .year {font-size:8px;}
        .list_label .date {font-size:8px; }
        .list_label .date small {font-size:8px;}
        .list_label .date a {font-size:10px; }
        
        .coffee, .coffee a {color: #858585; font-weight:normal;}
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
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        </script>
    </head>
    <body>
        
        <header>
            <p> 조작미숙으로 기존주소는 이용불가합니다. <a href="http://guruchaingo.com">http://guruchaingo.com</a>   으로 접속 부탁드립니다 </p>
            <div class="wrap">
                <h1><a href="/">경영수업 시간순 정렬</a></h1>
                <ul class="other-sort text-center">
                    <li><a href="/">원리와 방법1</a></li>
                    <li><a href="/all/">전체보기</a></li>
                    <li><a href="/sortc/">커피게시판 제외</a></li>
                    <li><a href="/all/">커피게시판 삽입</a></li>
                </ul>
            </div>
        </header>
        <div id="app">
            <?php echo $__env->yieldContent('content'); ?>

            <vue-test></vue-test>
        </div>
        <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    </body>
</html>

