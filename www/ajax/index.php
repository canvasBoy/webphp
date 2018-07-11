<?php
    /**
    *
    *   首页
    *   @author zoujg
    *   @version GIT: 2018-07-11 11:00
    *   @alterData 修改时间 2018-07-08 16:30
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

    $sql = "select goods_id,goods_img,goods_name,goods_pire from admindex";
    $result = $conn->query($sql);
    
    if($result){
        $code = 1;
    }else{
        $code = 2;
    }
    $attr = $result->fetch_all();

    $cli_arr_par = [];
    foreach($attr as $v){
        $title_arr = array("goods_id","goods_img","goods_name","goods_pire");
        for($i=0;$i<count($title_arr);$i++){
            $cli_arr[$title_arr[$i]] = $v[$i];
        }
        $cli_arr_par[] = $cli_arr;
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