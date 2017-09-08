<?php
    function returnBack($sid) {
        $url = "../auditInfo.php?sid=".$sid;
        Header("Location: $url"); 
    }

    echo "hello world";
    @session_id($_POST['sid']);
    @session_start();
    $sid = @session_id();

    error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
    define("mysql_server_name", "localhost");
    define("mysql_username", "root");
    define("mysql_password", "123456");

    $mysqli = new mysqli();
    $mysqli->connect($mysql_server_name, $mysql_username, $mysql_password, 'news_system');
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        returnBack($sid);
        exit;
    }
    $mysqli->set_charset("utf8");

    $choiceList = $_POST['choice'];
    for ($i = 0; $i < count($choiceList); $i++) {
        $newsID = $choiceList[$i];
        $audit = $_POST['audit'.$newsID];

        $sqlStr = "UPDATE news SET state = ".$audit." WHERE id = ".$newsID.";";
        $result = $mysqli->query($sqlStr);
        if ($result === false) {
            echo $mysqli->error;
            returnBack($sid);
            exit;
        }
    }
    $mysqli->close();
    returnBack($sid);
?>