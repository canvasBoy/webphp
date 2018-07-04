<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- 避免IE使用兼容模式 -->
    <meta name="format-detection" content="telephone=no,email=no"><!-- 禁用自动识别页面中的电话号码,邮箱地址 -->
    <meta name="MobileOptimized" content="320"><!-- 微软的老式浏览器 -->
    <meta name="msapplication-tap-highlight" content="no"><!-- windows phone 点击无高光 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- viewport -->
    <title>include_require</title>
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
            background: #e9e9e9;padding: 5px;
            margin: 0;
        }
        h4{
            margin: 0;
            padding: 10px;
            color: pink;
            background: lightgoldenrodyellow;
            border-bottom: 2px solid green;
        }
        i{
            color: #999;
            padding-left: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <div>
        <p>
            <span>php 包含文件</span>
        </p>
    </div>

    <pre style="color: green;">

        在PHP中， 有require、require_once、include、include- once四种方法包含一个文件。

            Inlcude           返回一条警告                  文件继续向下执行。通常用于动态包含    

            Require          一个致命的错                  代码就不会继续向下执行。通常包含极为重要的文件，整个代码甭想执行    

            Include_once    返回一条警告               除了原有include的功能以外，它还会做once检测，如果文件曾经已经被被包含过，不再包含    

            Require_once    一个致命的错              除了原的功能一外，会做一次once检测，防止文件反复被包含

        PHP include 和 require 语句

            在 PHP 中，您可以在服务器执行 PHP 文件之前在该文件中插入一个文件的内容。

            include 和 require 语句用于在执行流中插入写在其他文件中的有用的代码。

            include 和 require 除了处理错误的方式不同之外，在其他方面都是相同的：

            require 生成一个致命错误（E_COMPILE_ERROR），在错误发生后脚本会停止执行。

            include 生成一个警告（E_WARNING），在错误发生后脚本会继续执行。
    </pre>

    <h4>

    </h4>
</body>
</html>