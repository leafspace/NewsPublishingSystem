<?php
    $title = $_POST['title'];
    $innerCode = $_POST['innerCode'];
    $dateTime = date("Y-m-d H:i:s");

    require_once 'Classes/MysqlConnect.php';;
    $mysql_Connect = new MysqlConnect();
    $mysqli = $mysql_Connect->connect();
    $sqlStr = "INSERT INTO news(title, time, opened, information, state) 
                    VALUES('".$title."', '".$dateTime."', 0, '".substr($innerCode, 42601)."', 0);";
    $result = $mysql_Connect->query($mysqli, $sqlStr);
    $mysql_Connect->freeresourse($mysqli);
    $url = "../index.php";
    Header("Location: $url"); 
?>