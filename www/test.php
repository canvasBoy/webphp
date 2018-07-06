<?php
    $conn = mysqli_connect('localhost','root','root');  // 获取连接
    if($conn){  //判断是否连接
        mysqli_select_db($conn,"test"); // 选择一个数据库
        mysqli_query($conn,"set names utf8");   // 查询输出要使用utf8的编码格式，避免乱码
        $sql = "select * from product;";  // 查找到数据库的product表（）
        $result = mysqli_query($conn,$sql);  // 从键连获取到数据库的字表 
        while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){   // MYSQLI_ASSOC返回键值形式数组
            echo $row["需要输出的表中列的名称"]; 
        } 
        mysqli_free_result($result);   // 释放内存在 
        mysqli_close($conn);   // 关闭连接 
        echo "成功"; 
    }else{ 
        echo "失败"; 
    }; 
?>