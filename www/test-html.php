<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname" value="高">
        <input type="submit">
    </form>
    <?php echo $_SERVER['PHP_SELF']; ?>
    <div>
    您的名字是：     <?php 
                        if($_REQUEST["fname"] != ''){
                            echo $_REQUEST["fname"];
                        }
                    ?>
    </div>
</body>
</html>