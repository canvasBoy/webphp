<?php
    // header("Content-Type: text/html;charset=utf-8"); //好像没用
    /**
    *   购物车
    *   购物车功能实现
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
    VALUES (10, '/bmy/bmd.jpg', '智能联想', '想怎么玩就怎么玩', 3980, 40)";

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


    //关闭数据库 #####################################################################
    $conn->close();

    if(!$_POST){

        $code = 1;
        $message = 'ok';

        $obj = array(
            "goods_id"=>"35",
            "goods_img"=>"/bmy/bmd.jpg",
            "goods_name"=>"智能手机",
            "goods_type"=>"有光泽",
            "goods_pire"=>"3980",
            "goods_num"=>"10"
        );

        $obj1 = array(
            "goods_id"=>"35",
            "goods_img"=>"/bmy/bmd.jpg",
            "goods_name"=>"智能手机",
            "goods_type"=>"有光泽",
            "goods_pire"=>"3980",
            "goods_num"=>"108"
        );
        
        $data = array($obj,$obj1);

        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );

        echo json_encode($result);
    
    }
    
?>