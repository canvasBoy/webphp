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
    <title>constant</title>
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
            <span>php 常量</span>
        </p>
    </div>

    <pre style="color: green;">

        常量是一个简单值的标识符。该值在脚本中不能改变。
        <br>
        一个常量由英文字母、下划线、和数字组成,(建议只用字母和下划线)但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)。
        <br>
        常量名可以小写，但是通常大写。
        <br>
        常量名可以不加引号，但是通常加上引号。
        <br>
        在字符串中调用常量的时候，必须在引号外面。
        <br>
        常量在整个脚本中都可以使用。
        <br>
        设置常量，使用 define() 函数，函数语法如下：
        <br>
        bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
        <br>
        该函数有三个参数:
        <br>
        name：必选参数，常量名称，即标志符。
        <br>
        value：必选参数，常量的值。
        <br>
        case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。

    </pre>

    <h4>
        <i>常量区不区分大小写写法</i>
        <?php
            // 区分大小写的常量名 
            define("GREEN","绿色<br>");
            echo GREEN;

            // 不区分大小写的常量名 
            define("GREETING", "欢迎访问 php.cn", true); 
            echo greeting;   // 输出 "欢迎访问 php.cn" 
        ?>
    </h4>

    <h4>
        <i>
        常量在定义后，默认是全局变量，即便常量定义在函数外也可以正常使用常量
        </i>
        <?php 
            define("GREETING", "欢迎访问 php.cn"); 
            function myTest() 
            { 
            echo GREETING; 
            } 
            myTest();   // 输出 "欢迎访问 php.cn" 
        ?>
    </h4>
</body>
</html>