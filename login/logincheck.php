<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=saketown;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM user_tbl WHERE mail_address = ?";
$ps = $pdo->prepare($spl);
$ps->bindValue(1, $_POST['mail'], PDO::PARAM_STR);
$ps->execute();
$searchArray = $ps->fetchAll();

foreach ($searchArray as $row) {
    $_SESSION['userid'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header('Location: menu.php');
}
if(count($searchArray)==0){
    header('Location:login.php');
}
?>