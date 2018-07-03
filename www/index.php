<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="锐克首页,锐克新闻">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- 避免IE使用兼容模式 -->
    <meta name="format-detection" content="telephone=no,email=no"><!-- 禁用自动识别页面中的电话号码,邮箱地址 -->
    <meta name="MobileOptimized" content="320"><!-- 微软的老式浏览器 -->
    <meta name="msapplication-tap-highlight" content="no"><!-- windows phone 点击无高光 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- viewport -->
    <title>phpinfo</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        div{
            height: 50px;
        }
        P{
            padding: 0 20px;
            height: 50px;
            line-height: 50px;
            margin: 0;
            position: fixed;
            width: 100%;
            background: white;
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2);
        }
        pre{
            background: #e9e9e9;padding:10px 5px 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <div>
        <p>
            <span>php phpinfo函数</span>
        </p>
    </div>

    <pre style="color: green;">
        phpinfo是一个函数（功能），这个函数（功能）会显示一个当前电脑（服务器）的详细的PHP信息。

        php注释类似javascript注释
    </pre>

    <h4>
        <?php
            phpinfo();
        ?>
    </h4>
</body>
</html>