<?php
    function returnBack() {
        $url = "../index.php";
        Header("Location: $url"); 
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    } else {
        returnBack();
    }

    error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
    define("mysql_server_name", "localhost");
    define("mysql_username", "root");
    define("mysql_password", "123456");

    $mysqli = new mysqli();
    $mysqli->connect($mysql_server_name, $mysql_username, $mysql_password, 'news_system');
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        returnBack();
    }
    $mysqli->set_charset("utf8");
    
    $sqlStr = "SELECT * FROM user WHERE username = '".$username."' AND `password` = '".$password."';";
    $result = $mysqli->query($sqlStr);
    if ($result === false) {
        echo $mysqli->error;
        returnBack();
    }

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
        session_start();
        $sid = @session_id();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        $url = "../auditInfo.php?sid=".$sid;
        Header("Location: $url"); 
    } else {
        returnBack();
    }
    $mysqli->close();
?>