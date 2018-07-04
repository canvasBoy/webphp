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
    <title>array</title>
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
            <span>php 数组方法</span>
        </p>
    </div>

    <pre style="color: green;">

    获取数组的长度 - count() 函数
        count() 函数用于返回数组的长度（元素的数量）：

        $cars=array("Volvo","BMW","Toyota");
        echo count($cars);

    遍历数值数组，您可以使用 for 循环：
        $cars=array("Volvo","BMW","Toyota");
        $arrlength=count($cars);
        for($x=0;$x<$arrlength;$x++){
            echo $cars[$x];
        }

    PHP 关联数组。这里有两种创建关联数组的方法：
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

        or:

        $age['Peter']="35"; 

        $age['Ben']="37"; 

        $age['Joe']="43";

        //声明一下关联数组
        $rela = array(
                '帅' => '你',
                '很帅' => '黄晓明',
                '灰常灰常帅' => '宁泽涛',
                '有男人味的大叔' => '吴秀波',
                );
        //简洁声明
        $drink = [
                '美' => '凤姐',
                '很美' => '芙蓉姐姐',
                'verymei' => '杨幂',
                '心中滴女神呀' => '华妃',
                100 => '孙俪',
                '娘娘',
            ];

        声明关联数组是 键名 => 值
    
    遍历关联数组，您可以使用 foreach 循环
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        foreach($age as $x=>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
        }

    PHP - 数组排序函数

        sort() - 对数组进行升序排列

        rsort() - 对数组进行降序排列

        asort() - 根据关联数组的值，对数组进行升序排列

        ksort() - 根据关联数组的键，对数组进行升序排列

        arsort() - 根据关联数组的值，对数组进行降序排列

        krsort() - 根据关联数组的键，对数组进行降序排列

    （1）. shuffle 随机乱序
        shuffle函数可以对数组中的元素进行随机的排序
        注意：关联数组被shuffle后，键会丢失

    （1）.array_reverse 反序函数
        反序是将一个原始的数组中的每个元素的顺序翻转 反序 ≠ 降序
        如果数组为关联数组：
        键为字符时反序不受影响，键仍然会保留
        键是数字时，反序后默认键会重置为0、1、2……
        第二个参数为true时，键为数字，反序保留数字键
        <\?php
            $names = [10 => '张三', 60 => '阿毛', 30 => '李四', 25 => '宝哥'];
            print_r(array_reverse($names));
                                            /*
                                            Array
                                            (
                                                [0] => 宝哥
                                                [1] => 李四
                                                [2] => 阿毛
                                                [3] => 张三
                                            )
                                            */
            print_r(array_reverse($names, true)); 
                                            /*
                                            Array
                                            (
                                                [25] => 宝哥
                                                [30] => 李四
                                                [60] => 阿毛
                                                [10] => 张三
                                            )
                                            */
        ?>
    </pre>

    <h4>
        <i>sort() - 对数组进行升序排列</i>
        <?php
            $cars=array("Volvo","BMW","Toyota");
            sort($cars);
            print_r($cars);
            print_r('<br>');
            $numbers=array(4,6,2,22,11);
            sort($numbers);
            print_r($numbers);
        ?>
    </h4>
</body>
</html>