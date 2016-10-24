<!doctype html>
<html lang="en">
<head>
    <?php include 'common/common.php';echo $head;?>
    <meta charset="UTF-8">
    <title>Reader</title>
    <style>
        ::-webkit-scrollbar{
            display:none;
        }
    </style>
    <style>
        .white{
            background:white;
            color:black;
        }
        .black{
            background: black;
            color: gray
        }
        .green{
            background: green;
            color: black;
        }
    </style>
</head>
<body>
<div data-role="page" id="index">
    <div data-role="panel" id="left_panel" data-dismissible="true" data-position-fixed="true">
        <h1>Reader</h1>
        <ol data-role="listview">
            <li data-role="list-divider">账户信息</li>
            <li><a href="#">test</a></li>
        </ol>
    </div>
    <div data-role="header" data-position="fixed">
        <a href="#left_panel" class="ui-btn ui-btn-corner-all ui-icon-bars ui-btn-icon-left">设置</a>
        <h1>Reader</h1>
        <a href="#" class="ui-btn ui-btn-corner-all ui-icon-user ui-btn-icon-left">账户</a>
    </div>
    <div data-role="main" class="ui-content">
        <div id="home">
            <ul data-role="listview">
                <li><a href="#">首页</a></li>
                <li><a href="#show">test</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
            </ul>
        </div>
        <div id="community">
            <ul data-role="listview">
                <li><a href="#">社区</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
            </ul>
        </div>
        <div id="find">
            <ul data-role="listview">
                <li><a href="#">发现</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
                <li><a href="#">列表项</a></li>
            </ul>
        </div>
    </div>
    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a id="to_home" class="ui-btn-b ui-btn-corner-all ui-icon-home ui-btn-icon-top ui-nodisc-icon ui-btn-active">首页</a></li>
                <li><a id="to_community" class="ui-btn-b ui-btn-corner-all ui-icon-info ui-btn-icon-top ui-nodisc-icon">社区</a></li>
                <li><a id="to_find" class="ui-btn-b ui-btn-corner-all ui-icon-search ui-btn-icon-top ui-nodisc-icon">发现</a></li>
            </ul>
        </div>
    </div>
</div>
<div data-role="page" id="show">
    <div data-role="header" data-position="fixed" data-fullscreen="true">
        <a href="#" class="ui-btn ui-icon-back ui-btn-icon-left" data-rel="back">返回</a>
        <h1>books</h1>
        <a href="#" class="ui-btn ui-icon-bars ui-btn-icon-left ui-btn-right">详情</a>
    </div>
    <div data-role="main" class="ui-content">
        <div id="main">
            <?php include 'fopen.php'; my_fopen("test.txt")?>
        </div>
    </div>
    <div data-role="footer" data-position="fixed" data-fullscreen="true">
        <a class="ui-btn ui-icon-eye ui-btn-corner-all ui-btn-icon-notext ui-btn-inline"></a>
        <button id="a" data-theme="a"></button>
        <button id="b" data-theme="b"></button>
        <button id="c" data-theme="c"></button>
        <button id="d" data-theme="d"></button>
        <button id="e" data-theme="e"></button>
    </div>
</div>
</body>
<script>
    $("#community").hide();
    $("#find").hide();
    $("#home").show();

    $("#to_home").click(function () {
        $("#community").hide();
        $("#find").hide();
        $("#home").show();
    });
    $("#to_community").click(function () {
        $("#home").hide();
        $("#find").hide();
        $("#community").show();
    });
    $("#to_find").click(function () {
        $("#home").hide();
        $("#community").hide();
        $("#find").show();
    });
</script>
<script>
    $("#a").click(function () {
        $("#main").removeClass().addClass("white");
    });
    $("#b").click(function () {
        $("#main").removeClass().addClass("black");
    });
    $("#c").click(function () {
        $("#main").removeClass().addClass("green");
    });
</script>
</html>