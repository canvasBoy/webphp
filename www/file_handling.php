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

        fopen() 函数用于在 PHP 中打开文件。
            PHP 中没有单独的文件创建函数，创建和打开文件都是用 fopen() 函数。 当使用 fopen() 函数打开一个文件时，如果文件不存在，则会尝试创建该文件，并返回一个资源。 如果打开失败，函数返回 FALSE 。
            $file=fopen("welcome.txt","r");

        文件可能通过下列模式来打开：

            模式            描述

            r                 只读。在文件的开头开始。    

            r+              读/写。在文件的开头开始。    

            w               只写。打开并清空文件的内容；如果文件不存在，则创建新文件。    

            w+             读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。    

            a               追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。    

            a+             读/追加。通过向文件末尾写内容，来保持文件内容。    

            x               只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。    

            x+            读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。    

            注释：如果 fopen() 函数无法打开指定文件，则返回 0 (false)。

            $file=fopen("welcome.txt","r") or exit("Unable to open file!");
            // 不能打开指定文件的错误信息: Unable to open file 

            fclose() 函数用于关闭打开的文件：
                $file = fopen("test.txt","r");
                //执行一些代码
                fclose($file);

            feof() 函数检测是否已到达文件末尾（EOF）。
                在循环遍历未知长度的数据时，feof() 函数很有用。
                注释：在 w 、a 和 x 模式下，您无法读取打开的文件！
                    if (feof($file)) echo "文件结尾";
                
            fgets() 函数用于从文件中逐行读取文件。
                注释：在调用该函数之后，文件指针会移动到下一行。

            fgetc() 函数用于从文件中逐字符地读取文件。
                注释：在调用该函数之后，文件指针会移动到下一个字符。

            fread() 函数用于读取文件（可安全用于二进制文件）。
                string fread( int handle, int length )
                fread() 从文件指针 handle 读取最多 length 个字节。当遇到下列任何一种情况时，会停止读取文件：
    
            file_get_contents()
                file_get_contents() 函数用于把 整个文件 读入一个字符串，成功返回一个字符串，失败则返回 FALSE
    
            fwrite()
                fwrite() 函数用于向文件写入字符串，成功返回写入的字符数，否则返回 FALSE 。

            file_put_contents()
                file_put_contents() 函数用于把字符串写入文件，成功返回写入到文件内数据的字节数，失败则返回 FALSE。
    
    </pre>

    <h4>

    </h4>
</body>
</html>