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
    <title>variable</title>
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
            display: inline-block;
        }
    </style>
</head>
<body>
    <div>
        <p>
            <span>php 变量</span>
        </p>
    </div>
    <pre style="color: green;">

        <\?php
            $x = 5;
            $y = 6;
            $z = $x + $y;
            echo $z;
        ?>

        PHP 变量规则：

            1.变量以 $ 符号开始，后面跟着变量的名称

            2.变量名必须以字母或者下划线字符开始

            3.变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）

            4.变量名不能包含空格

            5.变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

        $var = 'hello';      //正确  
        $var123 = 'hello';    //正确  
        $123var = 'hello';    //错误  
        $_var = 'hello';     //正确  
        $@#var = 'hello';     //错误 

        PHP 语句和 PHP 变量都是区分大小写的。    

        变量在您第一次赋值给它的时候被创建

        PHP 是一门弱类型语言: 不必向 PHP 声明该变量的数据类型。

        PHP 变量作用域

            变量的作用域是脚本中变量可被引用/使用的部分。

            PHP 有四种不同的变量作用域：

            local (局部)

            global (全局)

            static (静态)

            parameter (参数)

    </pre>

    <h4>
    global 关键字用于函数内访问全局变量
    <br>
        <?php
            $x = 5;

            test();

            echo $x.'<br>';

            function test(){
                $y = 10;
                global $x;
                echo '$x = '.$x.'<br>';
                echo '$y = '.$y.'<br>';
                $x = $x + $y;
            }
        ?>
    </h4>

    <h4>
    PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
    <br>
        <?php
            $x1=5;
            $y1=10;
            function myTest()
            {
                $GLOBALS['y1']=$GLOBALS['x1']+$GLOBALS['y1'];
            } 
            myTest();
            echo '$y1 = '.$y1.'<br>';
            echo '$x = '.$x.'<br>';
        ?>
    </h4>

    <h4>
    当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。<br>
    要做到这一点，请在您第一次声明变量时使用 static 关键字：<br>
    然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。<br>
    注释：该变量仍然是函数的局部变量。<br>
    <br>
        <?php
            function myTest1()
            {
                static $x2=0;
                echo '$x2 = '.$x2.'<br>';
                $x2++;
            }
            myTest1();
            myTest1();
            myTest1();
        ?>
    </h4>

    <h4>
    参数作用域<br>
    参数是通过调用代码将值传递给函数的局部变量。<br>
        <?php
            function myTest3($x)
            {
                echo $x;
            }
            myTest3(50);
        ?>
    </h4>

    <h4>
    可变变量<br>
    可变变量就是——已声明的变量前，再上变量符。请看下面的例子：<br>
        <?php 
            //定义了一个变量叫作 $shu 将$shu这个变量的值设为字符串的biao
            $shu = 'biao'; 
            //定义了一个【变量】$biao。将他的值设置为鼠标
            $biao = '鼠标';
            //$$shu 就是可变变量：在已声明的变量$shu前又加上了一个变量符
            echo '$$shu = '.$$shu.'<br>';

            ${'wo'} = 'wo';

            echo '${"wo"} = '.${'wo'}.'<br>';
        ?>
        <i>
        $shu的值为字符串的'biao'。在$shu前再加上一个$(美元符号)，可以理解成为以下的变形过程：<br>
    
        $$shu<br>
    
        ${$shu} 分成两块来看<br>
    
        ${'biao'} 把变量$shu解释成了biao<br>
    
        $biao 而$biao也是一个变量对应的值是：鼠标
        </i>
    </h4>

    <h4>
    以下两种方式效果是相同的，希望灵活运用。<br>
        <?php 
            $name = "tom"; 
            $age = 20; 
        ?> 
        <ul>
            <li> name : <?php echo $name; ?> </li> 
            <li> age : <?php echo $age; ?> </li> 
        </ul>

        <?php 
            $name = "tom"; 
            $age = 20; 
            echo "<ul>";
            echo "<li> name: " . $name . "</li>";
            echo "<li> age: " . $age . "</li>";
            echo "</ul>";
        ?>
    </h4>
</body>
</html>