<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=saketown;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM user_tbl WHERE mail_address = ?";
$ps = $pdo -> prepare($sql);
$ps->bindValue(1, $_POST['mail'], PDO::PARAM_STR);
$ps->execute();
$searchArray = $ps->fetchAll();

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