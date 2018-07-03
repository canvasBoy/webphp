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
    <title>datatype</title>
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
            <span>php 数据类型</span>
        </p>
    </div>

    <pre style="color: green;">

        数据类型：就是对数据分类的一个划分。<br>

        包含了：String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
        <br>
        一个字符串是一串字符的序列<br>

        在PHP语言中声明字符串有三种方式：<br>

            1.用单引号声明<br>

            2.用双引号声明<br>

            3.用字界符声明（需要输入非常大段的字符串时使用）<br>
    </pre>

    <h4>
        <i>
            字界符声明<br>
            将关闭的定界符置于行首,在该行的分号后面不能有空格， 否则错误<br>
            EOT可以任意取
        </i>
        <br>
        <?php
            $str = <<< EOT
            我想说：<span> Hello Word </span> 
EOT;
//上面一行的关闭定界符需在行首
            echo($str);
        ?>
    </h4>

    <h4>
        <i>
            测试不同的数字<br>
            var_dump() 函数返回变量的数据类型和值,并打印
        </i>
        <?php
            $n = null;
            $x = -456;
            $z = 9.89;
            $g = false;
            $arr = array("volor","nba",'todata',12);

            class Car {
                var $color;
                function Car($color="green") 
                {
                  $this->color = $color;
                }
                function what_color() 
                {
                  return $this->color;
                }
            }

            var_dump($x);//E:\myGitHub\webphp\www\dataType.php:90:int 456
            var_dump($z);//E:\myGitHub\webphp\www\dataType.php:97:float 9.89
            var_dump($g);//E:\myGitHub\webphp\www\dataType.php:99:boolean false

            var_dump($arr);
            /*E:\myGitHub\webphp\www\dataType.php:101:
                array 
                (size=4)

                0 => string 'volor' 
                (length=5)

                1 => string 'nba' 
                (length=3)

                2 => string 'todata' 
                (length=6)

                3 => int 12
            */
            echo $arr[0];//volor

            //变量没声明值为null时会报出警告
            var_dump($n);//E:\myGitHub\webphp\www\dataType.php:133:null
            echo $n;
        ?>
    </h4>

    <h4>
        <i>
            empty()可以向括号中间传入一个变量。这个变量的值如果为false或者为null的话，返回true。<br>
            isset()可以向括号中间传入一个或者多个变量，变量与变量间用逗号分开。只要有有一个变量为null，则返回false。否则，则返回true。
        </i>
        <?php 
            $apple = null; 
            //false跟null都返回true
            empty($apple);

            $one = 10; 
            $two = false; 
            $three = 0; 
            $four = null; 
            //false跟0跟返回true
            $result = isset($one, $two, $three, $four); 
            // 执行看看结果，是不是false; 
            var_dump($result); 
        ?>
    </h4>
</body>
</html>