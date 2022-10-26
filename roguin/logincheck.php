<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');

$sql = "SELECT*FROM user_tbl WHERE id = ? AND pass = ?";
$ps = $pdo->prepare($spl);
$ps->bindValue(1,$_post['uid'], PDO::PARAM_INT);
$ps->bindValue(1,$_post['psw'], PDO::PARAM_STR);

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