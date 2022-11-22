<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng -> loginCheck($_POST['mail'], $_POST['pass']);

if($searchArray == false) {
    $alert = "<script type='text/javascript'>alert('ログインできませんでした');location.href = '../login/login.php'</script>";
    echo $alert;
} else {
    foreach ($searchArray as $row) {
        if(password_verify($_POST['pass'], $row['password']) == true) {
            $_SESSION['userId'] = $row['user_id'];
            $_SESSION['userName'] = $row['user_name'];
            $alert = "<script type='text/javascript'>alert('ログインが成功しました');location.href = '../top/top.php'</script>";
            echo $alert;
        }
    }
}
?>