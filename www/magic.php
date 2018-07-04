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
    <title>magic</title>
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
            <span>php magic</span>
        </p>
    </div>

    <pre style="color: green;">

        PHP魔术变量
            PHP 向它运行的任何脚本提供了大量的预定义常量。
            不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，或者动态加载后，或者在编译时已经包括进去了。
            有八个魔术常量它们的值随着它们在代码中的位置改变而改变。

        __LINE__
            文件中的当前行号。
            <\?php
                echo '这是第 “ ' . __LINE__ . ' ” 行'; 
            ?>
            这是第 “ 2 ” 行

        __FILE__
            文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
            <\?php
                echo echo '该文件位于 “ ' . __FILE__ . ' ” '; 
            ?>
            该文件位于 “ E:\wamp\www\test\index.php ” //此处为文件的绝对路径

        __DIR__
            文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。
            它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增）
            <\?php
            echo echo '该文件位于 “ ' . __DIR__ . ' ” '; 
            ?>
            以上实例输出结果类似为：
            该文件位于 “ E:\wamp\www\test ”

        __FUNCTION__
            当前代码所在的函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。
            <\?php
                function test(){ 
                    echo '函数名为：' . __FUNCTION__ ; 
                } 
                test(); 
            ?>
            以上实例输出结果为：
            函数名为：test

        __CLASS__
            当前类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。
            在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。 注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。
            <\?php
                class test { 
                    function print(){ 
                        echo '类名为：' . __CLASS__ . "<br>"; 
                        echo '函数名为：' . __FUNCTION__ ; 
                    } 
                } 
                $t = new test(); 
                $t-> print(); 
            ?>
            类名为：test 
            函数名为：print

        __TRAIT__
            Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。
            Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
            从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。其行为 MyHelloWorld 类中定义的方法一致。 优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。
    
        __METHOD__
            类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
            实例:
            <\?php
                function test() 
                { 
                echo '函数名为：' . __METHOD__ ; 
                } 
                test(); 
            ?>
            以上实例输出结果为：
            函数名为：test

        __NAMESPACE__
            当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。
            实例:
            <\?php
                namespace MyProject; 
                echo '命名空间为："', __NAMESPACE__, '"';     // 输出 "MyProject" 
            ?>
            以上实例输出结果为：
            命名空间为："MyProject"
    </pre>

    <h4>

    </h4>
</body>
</html>