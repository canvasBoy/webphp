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
    <title>superglobals</title>
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
            <span>php 超级全局变量</span>
        </p>
    </div>

    <pre style="color: green;">

        超级全局变量在PHP 4.1.0之后被启用, 是PHP系统中自带的变量，在一个脚本的全部作用域中都可用。

        PHP 超级全局变量列表:

            • $GLOBALS 存储当前脚本中的所有全局变量，其KEY为变量名，VALUE为变量值
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 

            • $_SERVER 当前Web服务器变量数组
                $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。 这个数组中的项目由 Web 服务器创建。
                不能保证每个服务器都提供全部项目；服务器可能会忽略一些， 或者提供一些没有在这里列举出来的项目。

                    <\?php 
                        echo $_SERVER['PHP_SELF'];
                            在开发的时候常会用到，一般用来引用当前网页地址，并且它是系统自动生成的全局变量。
                            当前执行脚本的文件名，与 document root 有关。
                            例如，在地址为 http://example.com/test.php/foo.bar 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /test.php/foo.bar
                        echo "<\br>";
                        echo $_SERVER['SERVER_NAME'];
                            当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。(如:www.runoob.com)  
                        echo "<\br>";
                        echo $_SERVER['HTTP_HOST'];
                            当前请求头中 Host: 项的内容，如果存在的话。 
                        echo "<\br>";
                        echo $_SERVER['HTTP_REFERER'];
                        echo "<\br>";
                        echo $_SERVER['HTTP_USER_AGENT'];
                        echo "<\br>";
                        echo $_SERVER['SCRIPT_NAME'];
                            包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
                        echo "<\br>";
                        echo $_SERVER['REMOTE_ADDR'];
                            浏览当前页面的用户的 IP 地址。
                        echo $_SERVER['SCRIPT_URI'];
                            URI 用来指定要访问的页面。例如 "/index.html"      
                    ?>

            • $_REQUEST 存储提交表单中的所有请求数组,其中包括$_GET、$_POST、$_COOKIE和$_SESSION中的所有内容
                PHP $_REQUEST 用于收集HTML表单提交的数据。

            • $_POST 存储以POST方法提交表单中的数据
                PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。

            • $_GET 存储以GET方法提交表单中的数据
                PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。

            • $_FILES 存储上传文件提交到当前脚本的数据

            • $_ENV 存储当前Web环境变量

            • $_COOKIE 取得或设置用户浏览器Cookies中存储的变量数组

            • $_SESSION 存储当前脚本的会话变量数组

    </pre>

    <h4>

    </h4>
</body>
</html>