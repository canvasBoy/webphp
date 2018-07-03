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
    <title>echo_print</title>
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
            <span>php echo和print</span>
        </p>
    </div>

    <pre style="color: green;">

        在 PHP 中有两个基本的输出方式： echo 和 print。

        echo - 可以输出一个或多个字符串

        print - 只允许输出一个字符串，返回值总为 1

        提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。

        都是语言结构

    </pre>

    <h4>
        <i>
            单引号与双引号的区别：<br>
            双引号里的变量字符串被识别成php变量<br>
            单引号不能识别
        </i>
        <?php
            $textmy = "666";
            echo "echo $textmy"."<br>";
            echo 'echo $textmy';
        ?>
    </h4>

    <h4>
        <?php
            print "PHP is fun!<br>";
            print "Hello world!<br>";
            print "I'm about to learn PHP!";
        ?>
    </h4>

    <h4>
        <?php
            $txt1="Learn PHP";
            $txt2="php.cn";
            $cars=array("Volvo","BMW","Toyota");
            print $txt1;
            print "<br>";
            print "Study PHP at $txt2"."<br>";
            print "My car is a {$cars[0]}"."<br>";
        ?>
    </h4>
</body>
</html>