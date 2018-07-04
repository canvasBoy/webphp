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
            <span>php 输出语句和函数</span>
        </p>
    </div>

    <pre style="color: green;">

        在 PHP 中有两个基本的输出方式： echo 和 print。

    (1).echo - 可以输出一个或多个字符串   echo() 实际上不是一个函数，是php语句

    (2).print - 只允许输出一个字符串，返回值总为 1   实际上它也不是一个函数，因此您无需对其使用括号

        提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。

        都是语言结构
        
        $a = echo("55nav"); // 错误！不能用来赋值  
        echo ("55nav","com"); //发生错误，有括号不能传递多个参数   
        echo "55nav"," com"," is", " web";  // 不用括号的时候可以用逗号隔开多个值， 会输出 55nav com is web   
        
        $a = print("55nav"); // 这个是允许的  
        echo $a; // $a的值是1 

    (3).print_r 函数
        print_r函数打印关于变量的易于理解的信息。
        语法：mixed print_r ( mixed $expression [, bool return ] )
        如果变量是string , integer or float , 将会直接输出其值，如果变量是一个数组，则会输出一个格式化后的数组，便于阅读，也就是有key和value对应的那种格式。
        对于object对象类同。print_r有两个参数，第一个是变量，第二个可设为true，如果设为true，则会返回字符串，否则返回布尔值TRUE。
        
            $a="55nav"; 
            $c = print_r($a);  
            echo $c;  // $c的值是TRUE  
            $c = print_r($a,true);  
            echo $c; // $c的值是字符串55nav  

    (4).printf函数
        printf函数返回一个格式化后的字符串。
        语法：printf(format,arg1,arg2,arg++)
        参数 format 是转换的格式，以百分比符号 (“%”) 开始到转换字符结束。下面是可能的 format 值：
        * %% – 返回百分比符号
        * %b – 二进制数
        * %c – 依照 ASCII 值的字符
        * %d – 带符号十进制数
        * %e – 可续计数法（比如 1.5e+3）
        * %u – 无符号十进制数
        * %f – 浮点数(local settings aware)
        * %F – 浮点数(not local settings aware)
        * %o – 八进制数
        * %s – 字符串
        * %x – 十六进制数（小写字母）
        * %X – 十六进制数（大写字母）
        arg1, arg2, arg++ 等参数将插入到主字符串中的百分号 (%) 符号处。
        该函数是逐步执行的，在第一个 % 符号中，插入 arg1，在第二个 % 符号处，插入 arg2，依此类推。如果 % 符号多于 arg 参数，则您必须使用占位符。占位符被插入 % 符号之后，由数字和 “\$” 组成。
    
        printf("My name is %s %s。","55nav", "com"); // My name is 55nav com。 
        printf("My name is %1\$s %1\$s","55nav", "com"); // 在s前添加1\$或2\$.....表示后面的参数显示的位置，此行输出 My name is 55nav 55nav因为只显示第一个参数两次。 
        printf("My name is %2\$s %1\$s","55nav", "com"); // My name is com 55nav  

    (5).sprintf函数
        此函数使用方法和printf一样，唯一不同的就是该函数把格式化的字符串写写入一个变量中，而不是输出来。

        sprintf("My name is %1\$s %1\$s","55nav", "com");  //你会发现没有任何东西输出的。  
        $out = sprintf("My name is %1\$s %2\$s","55nav", "com");  
        echo $out;  //输出 My name is 55nav com  

    (6).var_dump函数
        功能: 输出变量的内容、类型或字符串的内容、类型、长度。常用来调试。

        $a=100; 
        var_dump($a); //int(100) 
        $a=100.356; 
        var_dump($a); //float(100.356) 

    (7).die函数
        die() 函数输出一条消息，并退出当前脚本。
        该函数是 exit() 函数的别名。

        die(status)
        status	必需。规定在退出脚本之前写入的消息或状态号。状态号不会被写入输出。
            如果 status 是字符串，则该函数会在退出前输出字符串。
            如果 status 是整数，这个值会被用作退出状态。退出状态的值在 0 至 254 之间。退出状态 255 由 PHP 保留，不会被使用。状态 0 用于成功地终止程序。
            注释：如果 PHP 的版本号大于等于 4.2.0，那么在 status 是整数的情况下，不会输出该参数
            <\?php
                $site = "http://www.w3school.com.cn/";
                fopen($site,"r")
                or 
                die("Unable to connect to $site")
                ;
            ?>      
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