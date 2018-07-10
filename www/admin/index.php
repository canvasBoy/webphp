<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <script type="text/javascript" src="/bmy/jquery-5f40de3296.js"></script>
    <link rel="stylesheet" href="/admin/index.css">
</head>
<?php
    /**
    *
    *   后台管理功能，产品的添加与删除
    *   @author zoujg
    *   @version GIT: 2018-07-10 17:30
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

    $sql= "CREATE TABLE if not exists admIndex (
        goods_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        goods_img VARCHAR(30) NOT NULL ,
        goods_name VARCHAR(30) NOT NULL,
        goods_type VARCHAR(30) NOT NULL,
        goods_pire VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP
    ) DEFAULT charset=utf8";
    if ($conn->query($sql) === TRUE) {
        echo "<div style='color:blue;'>Table admIndex created successfully</div>";
    } else {
        echo "<div style='color:red;'>创建数据表错误: " . $conn->error . "</div>";
    }

    //如果也有提交数据则添加进表里
    if($_POST){
        $arr_str = "(".$_POST['goods_id'].", '".$_POST['goods_img']."', '".$_POST['goods_name']."', '".$_POST['goods_type']."', ".$_POST['goods_pire'].")";
        echo $arr_str;
        $sql = "INSERT INTO admIndex (goods_id, goods_img, goods_name, goods_type, goods_pire)
        VALUES ".$arr_str;
        if ($conn->query($sql) === TRUE) {
            echo "<div style='color:blue;'>新记录插入admIndex成功</div>";
        } else {
            echo "<div style='color:red;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }

    //读取数据
    $sql = "select * from admIndex";
        $result = $conn->query($sql);
        if($result){
            $code = 1;
        }else{
            $code = 2;
        }
        $attr = $result->fetch_all();
        $title_arr = array("id","img","name","type","pire");
?>
<body>
    <table id="index-goods">
        <thead>
            <tr>
                <td>ID</td>
                <td>图片</td>
                <td>标题</td>
                <td>简介</td>
                <td>价格</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
<?php
        //渲染页面数据
        foreach($attr as $v){
            /**
            *   下面将php每一条数据对应字段值转化成键值对
            */
            echo '<tr>';
            for($i=0;$i<count($title_arr);$i++){
                echo '<td>
                    <input class="'.$title_arr[$i].'" type="text" value="'.$v[$i].'">
                </td>';
                if($i == count($title_arr)-1){
                    echo '<td>
                        <button onclick="submit()">完成</button>
                    </td>';
                }
            }
            echo '</tr>';
        }

    //关闭数据库 
    $conn->close();

?>
            <!--<tr>
                <td>
                    <input class="id" type="text" value="23">
                </td>
                <td>
                    <input class="img" type="text" value="/bmy/img/bmd.jpg">
                </td>
                <td>
                    <input class="name" type="text" value="智能充气娃娃">
                </td>
                <td>
                    <input class="type" type="text" value="你能怎么玩？哈哈">
                </td>
                <td>
                    <input class="pire" type="text" value="39800">
                </td>
                <td>
                    <button onclick="submit()">完成</button>
                </td>
            </tr>-->
        </tbody>
    </table>
    <button class="creat-btn">创建产品</button>
    <form id="form-goods" method="post" action="/admin/index.php">
        <input type="text" name="goods_id">
        <input type="text" name="goods_img">
        <input type="text" name="goods_name">
        <input type="text" name="goods_type">
        <input type="text" name="goods_pire">
    </form>
</body>
<script>
    $('.creat-btn').click(function(){
        var str = '<tr>\
            <td>\
                <input class="id" type="text" value="">\
            </td>\
            <td>\
                <input class="img" type="text" value="">\
            </td>\
            <td>\
                <input class="name" type="text" value="">\
            </td>\
            <td>\
                <input class="type" type="text" value="">\
            </td>\
            <td>\
                <input class="pire" type="text" value="">\
            </td>\
            <td>\
                <button onclick="submit(this)">完成</button>\
            </td>\
        </tr>';
        $('#index-goods tbody').append(str);
    });

    function submit(_this){
        $('#form-goods').find('input[name=goods_id]').val($(_this).parents('tr').find('.id').val());
        $('#form-goods').find('input[name=goods_img]').val($(_this).parents('tr').find('.img').val());
        $('#form-goods').find('input[name=goods_name]').val($(_this).parents('tr').find('.name').val());
        $('#form-goods').find('input[name=goods_type]').val($(_this).parents('tr').find('.type').val());
        $('#form-goods').find('input[name=goods_pire]').val($(_this).parents('tr').find('.pire').val());
        if($('#form-goods').find('input[name=goods_id]').val() && $('#form-goods').find('input[name=goods_img]').val() && $('#form-goods').find('input[name=goods_name]').val() && $('#form-goods').find('input[name=goods_type]').val() && $('#form-goods').find('input[name=goods_pire]').val()){
            $('#form-goods').submit();
        }else{
            alert('有空值！')
        }
    }
</script>
</html>