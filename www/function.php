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
    <title>function</title>
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
            <span>php 函数</span>
        </p>
    </div>

    <pre style="color: green;">

    基本类似javascript函数

    php函数不能声明两次

    变量函数
        可变函数，我们也会称呼为变量函数
        
        <\?php
            function demo()
            {
            echo '天王盖地虎';
            }
            function test()
            {
            echo '小鸡炖蘑菇';
            }
            $fu = 'demo';
            //把$fu变为了demo,把demo后加上了一个括号，就执行函数了 
            $fu();   // 输出为 天王盖地虎
            //把$fu的值改为test字符串再试试？
        ?>

        <?php
            function foo(){

                echo '111111111<br />';

                function bar(){
                    echo '2222222222<br />';
                }
            }
            //现在还不能调用bar()函数，因为它还不存在
            // bar(); 这里调用报错

            foo();
            //现在可以调用bar()函数了，因为foo()函数的执行使得bar()函数变为已定义的函数
            bar();
            //再调一次foo()看看是不是会报错？
            // foo(); 这里调用报错
        ?>

    </pre>

    <h4>

    </h4>
</body>
</html>