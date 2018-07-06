<?php

        if($_POST['action']=='10'){

            $code = '1';

            $message = 'ok';

            $obj = array(
                "goods_id"=>"35",
                "goods_img"=>"/bmy/bmd.jpg",
                "goods_name"=>"智能手机",
                "goods_type"=>"有光泽",
                "goods_pire"=>"3980"
            );

            $obj1 = array(
                "goods_id"=>"35",
                "goods_img"=>"/bmy/bmd.jpg",
                "goods_name"=>"智能手机",
                "goods_type"=>"有光泽",
                "goods_pire"=>"3980"
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