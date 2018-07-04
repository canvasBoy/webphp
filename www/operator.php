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
    <title>operator</title>
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
            <span>php 运算符</span>
        </p>
    </div>

    <pre style="color: green;">

        在 PHP 中，只有一个字符串运算符。<br>

        并置运算符 (.) 用于把两个字符串值连接起来。<br>

        strlen() 函数返回字符串的长度（字符数）。<br>

        strpos() 函数用于在字符串内查找一个字符或一段指定的文本。<br>
        如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
        <br>
    PHP 算术运算符

        +           加号                   $x + $y    

        -           减号                    $x - $y    

        *           乘号,乘以               $x * $y    

        /           除号,除以               $x / $y    

        %         取余也叫取模、求模         $x % $y   
        <br>
        PHP7+ 版本新增整除运算符 intdiv(),在这里了解一下
        <\?php 
            var_dump(intdiv(10, 3)); 
        ?>

    PHP 赋值运算符

        符号          举例               等价式

        ＝             $x ＝ $y         左操作数被设置为右侧表达式的值    

        +＝          $x +＝ $y       $x ＝ $x + $y    

        -＝           $x -＝ $y        $x ＝ $x - $y    

        *＝           $x *＝ $y        $x ＝ $x * $y    

        /＝           $x /＝ $y        $x ＝ $x / $y    

        %＝         $x %＝ $y       $x ＝ $x % $y    

        .＝           $x .＝ $y          $x ＝ $x . $y  

    PHP 递增/递减运算符

        运算符         名称                 描述

        ++ x            预递增           x 加 1，然后返回 x    

        x ++            后递增           返回 x，然后 x 加 1    

        -- x              预递减           x 减 1，然后返回 x    

        x --              后递减           返回 x，然后 x 减 1    

    PHP 比较运算符

        运算符             名称              描述                                                                                        实例

        x == y             等于              如果 x 等于 y，则返回 true                                                     5==8 返回 false    

        x === y          恒等于           如果 x 等于 y，且它们类型相同，则返回 true                         5==="5" 返回 false    

        x != y              不等于           如果 x 不等于 y，则返回 true                                                  5!=8 返回 true    

        x <> y            不等于            如果 x 不等于 y，则返回 true                                                  5<>8 返回 true    

        x !== y           不恒等于         如果 x 不等于 y，或它们类型不相同，则返回 true                  5!=="5" 返回 true    

        x > y               大于               如果 x 大于 y，则返回 true                                                     5>8 返回 false    

        x < y               小于               如果 x 小于 y，则返回 true                                                     5<8 返回 true    

        x >= y             大于等于        如果 x 大于或者等于 y，则返回 true                                      5>=8 返回 false    

        x <= y             小于等于        如果 x 小于或者等于 y，则返回 true
        
    PHP 逻辑运算符

        运算符          名称                   描述                                                                        实例

        x and y         逻辑与               如果 x 和 y 都为 true，则返回 true                         x=6  y=3  (x < 10 and y > 1) 返回 true    

        x or y            逻辑或               如果 x 和 y 至少有一个为 true，则返回 true           x=6  y=3   (x==6 or y==5) 返回 true    

        x xor y          逻辑异或            如果 x 和 y 有且仅有一个为 true，则返回 true       x=6  y=3   (x==6 xor y==3) 返回 false    

        x && y         逻辑与               如果 x 和 y 都为 true，则返回 true                         x=6   y=3  (x < 10 && y > 1) 返回 true    

        x || y             逻辑或               如果 x 和 y 至少有一个为 true，则返回 true           x=6   y=3  (x==5 || y==5) 返回 false    

        ! x                逻辑非                如果 x 不为 true，则返回 true                                x=6   y=3  !(x==y) 返回 true    5<=8 返回 true    
        
    PHP 数组运算符

        运算符           名称              描述

        x + y             集合               x 和 y 的集合    

        x == y          相等               如果 x 和 y 具有相同的键/值对，则返回 true    

        x === y       恒等               如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true    

        x != y           不相等            如果 x 不等于 y，则返回 true    

        x <> y         不相等            如果 x 不等于 y，则返回 true    

        x !== y        不恒等            如果 x 不等于 y，则返回 true    

    三元运算符
    
        (expr1) ? (expr2) : (expr3)

    PHP_EOL 是一个换行符，兼容更大平台。
    </pre>

    <h4>
        <?php
            $x = 10; 
            echo ++$x; // 输出11  
            $y = 10; 
            echo $y++; // 输出10  
            $z = 5;
            echo --$z; // 输出4  
            $i = 5;
            echo $i--; // 输出5
        ?>
    </h4>

    <h4>
        <i><pre>
        PHP的数据类型转换属于强制转换，允许转换的PHP数据类型有：
            （int）、（integer）：转换成整形
            （float）、（double）、（real）：转换成浮点型
            （string）：转换成字符串
            （bool）、（boolean）：转换成布尔类型
            （array）：转换成数组
            （object）：转换成对象

        PHP数据类型有三种转换方式：
            在要转换的变量之前加上用括号括起来的目标类型
            使用3个具体类型的转换函数，intval()、floatval()、strval()
            使用通用类型转换函数settype(mixed var,string type)
        </pre></i>
        <br>
        第一种转换方式： (int)  (bool)  (float)  (string)  (array) (object)<br>
        <?php   
            $num1=3.14;   
            $num2=(int)$num1;   
            var_dump($num1); //输出float(3.14)   
            var_dump($num2); //输出int(3)   
        ?>  
        <br>
        第二种转换方式：  intval()  floatval()  strval()
        <?php   
            $str="123.9abc";   
            $int=intval($str);     //转换后数值：123   
            $float=floatval($str); //转换后数值：123.9   
            $str=strval($float);   //转换后字符串："123.9"  
            var_dump($int);  
            var_dump($float);  
            var_dump($str);  
        ?>  
        <br>
        第三种转换方式：  settype();
        <?php   
            $num4=12.8;   
            $flg=settype($num4,"int");   
            var_dump($flg);  //输出bool(true)   
            var_dump($num4); //输出int(12)   
        ?> 
    </h4>
    
    <h4>
        <i>
            数组运算符
        </i>
        <?php
            $x = array("a" => "red", "b" => "green"); 
            $y = array("c" => "blue", "d" => "yellow"); 
            $z = $x + $y; // $x 和 $y 数组合并
            var_dump($z);
            var_dump($x == $y);
            var_dump($x === $y);
            var_dump($x != $y);
            var_dump($x <> $y);
            var_dump($x !== $y);
        ?>
    </h4>
</body>
</html>