<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link rel="stylesheet" href="/admin/style/index.css">
    <script type="text/javascript" src="/bmy/jquery-5f40de3296.js"></script>
</head>
<?php
    /**
    *
    *   后台管理功能，产品的添加与删除
    *   @author zoujg
    *   @version GIT: 2018-07-10 17:30
    *
    */

    //设置图片的地址头
    $imgUrl = "/admin/upload/";

    $addrIP = "localhost";
    $adminName = "root";
    $adminPwd = "root";
    $database = "BMYBASE";
    
    $conn = new mysqli($addrIP, $adminName, $adminPwd);
    if ($conn->connect_error) die("连接失败: " . $conn->connect_error);
    
    mysqli_query($conn , "set names utf8");
    mysqli_select_db($conn, $database);

    //如果没表则创建表
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

    //如果有提交数据
    if($_POST && $_POST['code']=='1'){
        //文件上传处理
        if ($_FILES["goods_img"]["error"] > 0){
            echo "错误：" . $_FILES["goods_img"]["error"] . "<br>";
        }else{
            // 判断当期目录下的 upload 目录是否存在该文件
            if(file_exists("upload/" . $_FILES["goods_img"]["name"])){
                echo $_FILES["goods_img"]["name"] . " 文件已经存在。 ";
            }else{
                // echo "上传文件名: " . $_FILES["goods_img"]["name"] . "<br>";
                // echo "文件类型: " . $_FILES["goods_img"]["type"] . "<br>";
                // echo "文件大小: " . ($_FILES["goods_img"]["size"] / 1024) . " kB<br>";
                // echo "文件临时存储的位置: " . $_FILES["goods_img"]["tmp_name"];
                // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                move_uploaded_file($_FILES["goods_img"]["tmp_name"], "upload/" . $_FILES["goods_img"]["name"]);
                echo "文件存储在: " . "upload/" . $_FILES["goods_img"]["name"]; 
            }
        }

        //则添加进表里
        $arr_str = "(".$_POST['goods_id'].", '".$_FILES["goods_img"]["name"]."', '".$_POST['goods_name']."', '".$_POST['goods_type']."', ".$_POST['goods_pire'].")";
        $sql = "INSERT INTO admIndex (goods_id, goods_img, goods_name, goods_type, goods_pire) VALUES ".$arr_str;
        if ($conn->query($sql) === TRUE) {
            echo "<div style='color:blue;'>新记录插入admIndex成功</div>";
        } else {
            echo "<div style='color:red;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }else if($_POST && $_POST['code']=='2'){
        //则删除表里的数据
        $sql = "DELETE FROM admIndex WHERE goods_id = ".$_POST['goods_id'];
        $result = $conn->query($sql);
        if($result){
            echo "<div style='color:blue;'>删除整行数据成功！</div>";
        }else{
            echo "<div style='color:red;'>删除整行数据失败！</div>";
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
        $title_arr = array("id","img","name","type","pire");
        //渲染页面数据
        foreach($attr as $v){
            /**
            *   下面将php每一条数据对应字段值转化成键值对
            */
            echo '<tr>';
            for($i=0;$i<count($title_arr);$i++){
                if($title_arr[$i] == "img"){
                    echo '<td>
                        <input class="'.$title_arr[$i].'" type="text" value="'.$imgUrl.$v[$i].'">
                    </td>';
                }else{
                    echo '<td>
                        <input class="'.$title_arr[$i].'" type="text" value="'.$v[$i].'">
                    </td>';
                }
                if($i == count($title_arr)-1){
                    echo '<td>
                        <button class="delete" onclick="deleteFn(this)">删除</button>
                    </td>';
                }
            }
            echo '</tr>';
        }

    //关闭数据库 
    $conn->close();

?>
        </tbody>
    </table>
    <div class="creat-btn-warp">
        <button class="creat-btn">添加产品</button>
    </div>
    <form id="form-goods" method="post" action="/admin/index.php" enctype="multipart/form-data">
        <input type="text" name="goods_id">
        <!--<input type="file" name="goods_img">-->
        <input type="text" name="goods_name">
        <input type="text" name="goods_type">
        <input type="text" name="goods_pire">
        <input type="text" name="code">
    </form>
    <div class="v"></div>
</body>
<script>
    $('.creat-btn').click(function(){
        var str = '<tr>\
            <td>\
                <input class="id" type="text" value="">\
            </td>\
            <td>\
                <input class="img" type="file" name="goods_img">\
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
                <button type="submit" onclick="submit(this)">完成</button>\
            </td>\
        </tr>';
        $('#index-goods tbody').append(str);
    });

    function submit(_this){
        $('#form-goods').append($(_this).parents('tr').find('.img').clone(true,true));
        $('#form-goods').find('input[name=code]').val(1);
        $('#form-goods').find('input[name=goods_id]').val($(_this).parents('tr').find('.id').val());
        $('#form-goods').find('input[name=goods_name]').val($(_this).parents('tr').find('.name').val());
        $('#form-goods').find('input[name=goods_type]').val($(_this).parents('tr').find('.type').val());
        $('#form-goods').find('input[name=goods_pire]').val($(_this).parents('tr').find('.pire').val());
        if($('#form-goods').find('input[name=goods_id]').val() && $('#form-goods').find('input[name=goods_name]').val() && $('#form-goods').find('input[name=goods_type]').val() && $('#form-goods').find('input[name=goods_pire]').val()){
            $('#form-goods').submit();
        }else{
            alert('有空值！')
        }
    }
    
    function deleteFn(_this){
        $('#form-goods').find('input[name=code]').val(2);
        $('#form-goods').find('input[name=goods_id]').val($(_this).parents('tr').find('.id').val());
        if($('#form-goods').find('input[name=goods_id]').val()){
            $('#form-goods').submit();
        }else{
            alert('有空值！') 
        } 
    }
    
</script>
</html>