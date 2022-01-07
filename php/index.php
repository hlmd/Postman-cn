<?php require './common.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= APP_NAME ?></title>
    <link rel="icon" href="<?= APP_IMAGE ?>" type="image/x-icon"/>
    <link rel="stylesheet" href="./layui/css/layui.css"/>
    <style>
        h2 {
            word-wrap: break-word;
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 50px 0;
        }

        .list {
            display: flex;
            flex-wrap: wrap;
        }

        .list > div {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            order: 3;
        }

        .version {
            font-size: 18px;
            margin-left: 10px;
        }

        @media screen and (max-width: 992px) {
            .list > div:nth-child(1) {
                order: 1;
            }

            .list > div:nth-child(4) {
                order: 2;
            }
        }

        .no-wrap {
            white-space: nowrap;
        }
    </style>
</head>
<body>

<div class="layui-container">
    <div class="top">
        <img width="100" src="<?= APP_IMAGE ?>"/>
        <h1><?= APP_NAME ?><span class="version"><?= APP_VERSION ?></span></h1>
    </div>
    <div class="layui-row list">
        <div class="layui-col-lg2 layui-col-md3 layui-col-sm6 layui-col-xs6">
            <button class="layui-btn hanhua">汉化</button>
        </div>
        <div class="layui-col-lg2 layui-col-md3 layui-col-sm6 layui-col-xs6">
            <button class="layui-btn layui-btn-primary tiqu">提取</button>
        </div>
        <div class="layui-col-lg2 layui-col-md3 layui-col-sm6 layui-col-xs6">
            <button class="layui-btn layui-btn-primary beifen">从当前备份</button>
        </div>
        <div class="layui-col-lg2 layui-col-md3 layui-col-sm6 layui-col-xs6">
            <button class="layui-btn layui-btn-primary beifenhuanyuan">从备份还原</button>
        </div>
        <div class="layui-col-lg2 layui-col-md3 layui-col-sm6 layui-col-xs6">
            <button class="layui-btn layui-btn-primary huanyuan">还原</button>
        </div>
    </div>
    <div class="layui-row no">

    </div>
</div>

<script src="./layui/layui.js"></script>
<script>


    //一般直接写在一个js文件中
    layui.use(['layer'], function () {
        let layer = layui.layer
        $ = layui.$;
        $(".hanhua").click(function () {
            layer.confirm('是否汉化?', function (index) {
                var load_index = layer.load();
                layer.close(index);
                $.ajax({
                    url: './api.php',
                    data: {'action': 'sinicization'},
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        $(".no").html("");
                        if (res.no) {
                            for (let file_index in res.no) {
                                if (res.no[file_index]) {
                                    let file = res.no[file_index];
                                    let file_dom = $("<pre>").addClass('file').append($("<h2>").text(file_index));
                                    for (let i in file) {
                                        file_dom.append($("<h3>").text(i));
                                        for (let i2 in file[i]) {
                                            file_dom.append($("<p>").addClass('no-wrap').text(file[i][i2]));
                                        }
                                    }
                                    $(".no").append(file_dom);
                                }
                            }
                        }
                        layer.msg(res.msg, {icon: res.code});
                    },
                    complete() {
                        layer.close(load_index);
                    }
                });
            });
        });

        $(".beifen").click(function () {
            layer.confirm('是否从当前备份?', function (index) {
                var load_index = layer.load();
                layer.close(index);
                $.ajax({
                    url: './api.php',
                    data: {'action': 'backup'},
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        layer.msg(res.msg, {icon: res.code});
                    },
                    complete() {
                        layer.close(load_index);
                    }
                });
            });
        });

        $(".beifenhuanyuan").click(function () {
            layer.confirm('是否从备份还原?', function (index) {
                var load_index = layer.load();
                layer.close(index);
                $.ajax({
                    url: './api.php',
                    data: {'action': 'restoreFormBackup'},
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        layer.msg(res.msg, {icon: res.code});
                    },
                    complete() {
                        layer.close(load_index);
                    }
                });
            });
        });
        $(".huanyuan").click(function () {
            layer.confirm('是否还原?', function (index) {
                var load_index = layer.load();
                layer.close(index);
                $.ajax({
                    url: './api.php',
                    type: 'get',
                    data: {'action': 'restore'},
                    dataType: 'json',
                    success: function (res) {
                        layer.msg(res.msg, {icon: res.code});
                    },
                    complete() {
                        layer.close(load_index);
                    }
                });
            });
        });

        $(".tiqu").click(function () {
            var load_index = layer.load();
            $.ajax({
                url: './api.php',
                type: 'get',
                data: {'action': 'getString'},
                dataType: 'json',
                success: function (res) {
                    layer.msg(res.msg, {icon: res.code});
                },
                complete() {
                    layer.close(load_index);
                    
                }
            });
        });

    });
</script>
</body>
</html>
