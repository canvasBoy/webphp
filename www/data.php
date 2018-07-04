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
    <title>data</title>
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
            <span>php 日期</span>
        </p>
    </div>

    <pre style="color: green;">

        PHP提供了内置函数 time() 来取得服务器当前时间的时间戳。
            echo time();
            1. time() 得到的总是当前的时间戳，所以是不固定的值
            2. 如果时间戳为负数，则为从1970年1月1日 00:00:00往前推

        PHP 提供了函数可以方便的将各种形式的日期转换为时间戳，该类函数主要是：
            • strtotime()：将任何英文文本的日期时间描述解析为时间戳。
            • mktime()：从日期取得时间戳。

        PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。
            string date ( string $format [, int $timestamp ] )
            参数                   描述
            format               必需。规定时间戳的格式。    
            timestamp           可选。规定时间戳。默认是当前的日期和时间。 
                echo date("Y/m/d");
                echo date("Y.m.d");
                echo date("Y-m-d");
                echo date('Y-m-d H:i:s');

                format字符         说明                                          返回值例子

                日                         ---                                                ---    

                d    月份中的第几天，有前导零的 2 位数字          01 到 31    

                D    星期中的第几天，文本表示，3 个字母           Mon 到 Sun    

                j    月份中的第几天，没有前导零                          1 到 31    

                l（"L"的小写字母）    星期几，完整的文本格式    Sunday 到 Saturday    

                N    ISO-8601 格式数字表示的星期中的第几天（PHP 5.1.0 新加）    1（表示星期一）到 7（表示星期天）    

                S    每月天数后面的英文后缀，2 个字符                st，nd，rd 或者 th。可以和 j 一起用    

                w    星期中的第几天，数字表示                           0（表示星期天）到 6（表示星期六）    

                z    年份中的第几天                                             0 到 365    

                星期    ---    ---    

                W    ISO-8601 格式年份中的第几周，每周从星期一开始（PHP 4.1.0 新加的）    例如：42（当年的第 42 周）    

                月    ---    ---    

                F    月份，完整的文本格式，                             例如 January 或者 March    January 到 December    

                m    数字表示的月份，有前导零                        01 到 12    

                M    三个字母缩写表示的月份                           Jan 到 Dec    

                n    数字表示的月份，没有前导零                     1 到 12    

                t    给定月份所应有的天数                                28 到 31    

                年    ---    ---    

                L    是否为闰年                                                 如果是闰年为 1，否则为 0    

                o    ISO-8601 格式年份数字。这和 Y 的值相同，只除了如果 ISO 的星期数（W）属于前一年或下一年，则用那一年。（PHP 5.1.0 新加）    Examples: 1999 or 2003    

                Y    4 位数字完整表示的年份                            例如：1999 或 2003    

                y    2 位数字表示的年份                                   例如：99 或 03    

                时间    ---    ---    

                a    小写的上午和下午值                                   am 或 pm    

                A    大写的上午和下午值                                   AM 或 PM    

                B    Swatch Internet 标准时                             000 到 999    

                g    小时，12 小时格式，没有前导零                  1 到 12    

                G    小时，24 小时格式，没有前导零                 0 到 23    

                h    小时，12 小时格式，有前导零                    01 到 12    

                H    小时，24 小时格式，有前导零                    00 到 23    

                i    有前导零的分钟数                                        00 到 59>    

                s    秒数，有前导零                                           00 到 59>    

                u    毫秒 （PHP 5.2.2 新加）。需要注意的是 date()函数总是返回 000000 因为它只接受 integer 参数， 而 DateTime::format() 才支持毫秒。    示例: 654321    

                时区    ---    ---    

                e    时区标识（PHP 5.1.0 新加）    例如：UTC，GMT，Atlantic/Azores    

                I    是否为夏令时    如果是夏令时为 1，否则为 0    

                O    与格林威治时间相差的小时数    例如：+0200    

                P    与格林威治时间（GMT）的差别，小时和分钟之间有冒号分隔（PHP 5.1.3 新加）    例如：+02:00    

                T    本机所在的时区    例如：EST，MDT（【译者注】在 Windows 下为完整文本格式，例如"Eastern Standard Time"，中文版会显示"中国标准时间"）。    

                Z    时差偏移量的秒数。UTC 西边的时区偏移量总是负的，UTC 东边的时区偏移量总是正的。    -43200 到 43200    

                完整的日期／时间    ---    ---    

                c    ISO 8601 格式的日期（PHP 5 新加）    2004-02-12T15:19:21+00:00    

                r    RFC 822 格式的日期    例如：Thu, 21 Dec 2000 16:01:07 +0200    

                U    从 Unix 纪元（January 1 1970 00:00:00 GMT）开始至今的秒数    参见 time()    
    </pre>

    <h4>

    </h4>
</body>
</html>