<?php
    // header("Content-Type: text/html;charset=utf-8"); //好像没用
    /**
    *   购物车
    *   购物车操作数据库学习
    *   @author zoujg
    *   @version GIT: 2018-07-07 10:30
    */

    /**
     *   创建数据库链接
     *   @param $addrIP     服务器地址
     *   @param $adminName   phpMyAdmin用户名
     *   @param $adminPwd    用户秘密
     *   @param $database    数据库
     */
    $addrIP = "localhost";
    $adminName = "root";
    $adminPwd = "root";
    $database = "BMYBASE";
    // 创建连接
    $conn = new mysqli($addrIP, $adminName, $adminPwd);
    // 检测连接
    if ($conn->connect_error) die("连接失败: " . $conn->connect_error);
    // 设置编码，防止中文乱码
    mysqli_query($conn , "set names utf8");
    // 选择数据库
    mysqli_select_db($conn, $database);


    /**
     *   创建数据库并设置编码***********************************************
     */
/*
    $sql = "CREATE DATABASE BMYBASE character set utf8";
    $result = $conn->query($sql);
    if($result){
        echo "<div style='color:blue;'>创建数据库成功！</div>";
    }else{
        echo "<div style='color:red;'>创建数据库失败！</div>";
    }
*/

    /**
     *   删除数据库***********************************************
     */
/*
    $sql = "drop database ".$database;
    $result = $conn->query($sql);
    if($result){
        echo "<div style='color:blue;'>删库跑路成功！</div>";
    }else{
        echo "<div style='color:red;'>删库失败被逮着！</div>";
    }
*/


    /**
     *   创建数据表***********************************************
     */
/*
    $sql= "CREATE TABLE Cart (
        goods_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        goods_img VARCHAR(30) NOT NULL ,
        goods_name VARCHAR(30) NOT NULL,
        goods_type VARCHAR(30) NOT NULL,
        goods_pire VARCHAR(30) NOT NULL,
        goods_num VARCHAR(50),
        reg_date TIMESTAMP
    ) DEFAULT charset=utf8";
    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:blue;'>Table Cart created successfully</div>";
    } else {
        echo "<div style='color:red;'>创建数据表错误: " . $conn->error . "</div>";
    }
*/


    /**
     *  删除表***********************************************
     */
/*
    $sql = "DROP TABLE Cart";
    $result = $conn->query($sql);
    if($result){
        echo "<div style='color:blue;'>删除表成功！</div>";
    }else{
        echo "<div style='color:red;'>删除表失败！</div>";
    }
*/


    /**
     *   往表里插入数据***********************************************
     */
/*
    $sql = "INSERT INTO Cart (goods_id, goods_img, goods_name, goods_type, goods_pire, goods_num)
    VALUES (10, '/bmy/img/bmd.jpg', '智能联想', '想怎么玩就怎么玩', 3980, 40)";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:blue;'>新记录插入成功</div>";
    } else {
        echo "<div style='color:red;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
*/


    /**
     *  查询、读取表里数据***********************************************
     *  @param $result  表的信息
     *  @param $attr    返回的数据(Array)
     */
/*
    $sql = "select * from Cart";
    // $sql = "select goods_id,goods_name from Cart";//选择某些个字段
    $result = $conn->query($sql);
    //方法一
    $attr = $result->fetch_all();
    foreach($attr as $v){
        echo "<br>";
        print_r($v);
    }
    //方法二
    // while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //     echo "<br>";
    //     print_r($row);
    // }
*/


    /**
     *  添加表字段***********************************************
     */
/*
    $sql = "alter table Cart add testede varchar(10) not NULL";
    //$sql = "alter table Cart add testede varchar(10) default '0'";//此处有设置默认值
    $result = $conn->query($sql);
    if($result){
        echo "添加表字段成功！";
    }else{
        echo "添加失败！";
    }
*/


    /**
     *  删除字段***********************************************
     */
/*
    $sql = "ALTER TABLE Cart DROP tested";
    $result = $conn->query($sql);
    if($result){
        echo "删除字段成功！";
    }else{
        echo "删除字段失败！";
    }
*/


    /**
     *  删除整行数据***********************************************
     */
/*
    $sql = "DELETE FROM Cart WHERE goods_id = 70";
    $result = $conn->query($sql);
    if($result){
        echo "<div style='color:blue;'>删除整行数据成功！</div>";
    }else{
        echo "<div style='color:red;'>删除整行数据失败！</div>";
    }
*/


    /**
     *  更新字段***********************************************
     */
/*
    $sql = "UPDATE Cart SET goods_name = '品牌手机',goods_type = 'I am huawei' WHERE goods_id = 56";
    $result = $conn->query($sql);
    if($result){
        echo "更新字段成功！";
    }else{
        echo "更新失败！";
    }
*/


    //关闭数据库 
    $conn->close();
########################################## 以上个人学习记录 ##############################################################################################

    /**
    *
    *   购物车功能实现
    *   @author zoujg
    *   @version GIT: 2018-07-07 18:00
    *   @alterData 修改时间 2018-07-08 16:30
    *   cart page start =>>>>>>>>>>>>>>>>>>>>>
    *
    */

    $addrIP = "localhost";
    $adminName = "root";
    $adminPwd = "root";
    $database = "BMYBASE";
    
    $conn = new mysqli($addrIP, $adminName, $adminPwd);
    if ($conn->connect_error) die("连接失败: " . $conn->connect_error);
    
    mysqli_query($conn , "set names utf8");
    mysqli_select_db($conn, $database);

    /**
    *   此时数据库啥表都没有，那么先创建一个临时学习用的虚拟表并插入数据
    */
/*
    $sql= "CREATE TABLE if not exists Cart (
        goods_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        goods_img VARCHAR(30) NOT NULL ,
        goods_name VARCHAR(30) NOT NULL,
        goods_type VARCHAR(30) NOT NULL,
        goods_pire VARCHAR(30) NOT NULL,
        goods_num VARCHAR(50),
        reg_date TIMESTAMP
    ) DEFAULT charset=utf8";
    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:blue;'>Table Cart created successfully</div>";
    } else {
        echo "<div style='color:red;'>创建数据表错误: " . $conn->error . "</div>";
    }

    //假设创建多条
    $arr_str1 = "(23, '/bmy/img/bmd.jpg', '智能充气娃娃', '你能怎么玩？哈哈', 39800, 50)";
    $arr_str2 = "(33, '/bmy/img/bmd.jpg', '智能充气娃娃', '你能怎么玩？哈哈', 39800, 50)";
    $arr_str3 = "(43, '/bmy/img/bmd.jpg', '智能充气娃娃', '你能怎么玩？哈哈', 39800, 50)";
    $arr_str4 = "(53, '/bmy/img/bmd.jpg', '智能充气娃娃', '你能怎么玩？哈哈', 39800, 50)";
    
    $sql = "INSERT INTO Cart (goods_id, goods_img, goods_name, goods_type, goods_pire, goods_num)
    VALUES ".$arr_str1.','.$arr_str2.','.$arr_str3.','.$arr_str4;

    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:blue;'>新记录插入成功</div>";
    } else {
        echo "<div style='color:red;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
*/

    /**
    *   数据读取并操作返回给请求页面
    */
    //此处声明一个成功返回给html页面的数组
    $cli_arr_par = [];

    if($_POST && $_POST['cartid']){
        $sql = "DELETE FROM Cart WHERE goods_id = ".$_POST['cartid'];
        $result = $conn->query($sql);
        if($result){
            $code = 1;
        }else{
            $code = 2;
        }
    }else{
        $sql = "select * from Cart";
        $result = $conn->query($sql);
        if($result){
            $code = 1;
        }else{
            $code = 2;
        }
        $attr = $result->fetch_all();
        // print_r($attr);
        //遍历每一条数据
        foreach($attr as $v){
            /**
            *   下面将php每一条数据对应字段值转化成键值对
            */
            //方法一
            $title_arr = array("goods_id","goods_img","goods_name","goods_type","goods_pire","goods_num");
            for($i=0;$i<count($title_arr);$i++){
                $cli_arr[$title_arr[$i]] = $v[$i];
            }
            //方法二
            // foreach($v as $i){
            //     switch($i){
            //         case $v[0]:
            //             $cli_arr["goods_id"] = $i;
            //             break;
            //         case $v[1]:
            //             $cli_arr["goods_img"] = $i;
            //             break;
            //         case $v[2]:
            //             $cli_arr["goods_name"] = $i;
            //             break;
            //         case $v[3]:
            //             $cli_arr["goods_type"] = $i;
            //             break;
            //         case $v[4]:
            //             $cli_arr["goods_pire"] = $i;
            //             break;
            //         case $v[5]:
            //             $cli_arr["goods_num"] = $i;
            //             break;
            //     }
            // }
            $cli_arr_par[] = $cli_arr;
        }
    }
    $message = 'ok';
    $back_cart = array(
        'code' => $code,
        'message' => $message,
        'data' => $cli_arr_par
    );
    echo json_encode($back_cart);
    
    $conn->close();
    
?>