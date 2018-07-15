<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style type="text/css">
        a {color:#000;}
        h1 {text-align: center;}
        h2 {color:red;}
        .list-table {min-width:480px; margin:0 auto;}
        .origin a {font-size: 1.5em; font-weight:bold; color:#000;}
        .master a {font-size:1.3em; }
        .master.qna .title a {color:#00f;}
        .list_label {position: relative;width:108px; height:28px;}
        .list_label span {position: absolute;}
        .list_label .board_name {top:50%; left:36px; font-size:10px; margin-top:-13px;}
        .list_label .board_name > a {display:inline-block; font-size:10px; }
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

      </style>
        <title>guruchain time sort</title>
       
    </head>
    <body>
        @yield('content')
    </body>
</html>

