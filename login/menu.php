<?php
session_start();
if(isset($_SESSION['username'])==false||
   isset($_SESSON['userid'])==false){
       header('Location:login.php');
}

echo"ようこそ　$_SESSON[username]さん<br>";
echo"<a href=¥"logout.php¥">ログアウト</a>";
?>