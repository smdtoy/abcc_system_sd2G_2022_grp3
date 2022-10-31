<link rel="stylesheet" href="uidstyle.css">
<h1>ログイン</h1>
<?php
session_start();
if(isset($_SESSON["username"])==true&&
   isset($_SESSON["userid"])==true){
       header('Location:menu.php');
}
?>
<form action="logincheck.php" method="post">
    <input class="id" type="text"name="uid" placeholder="メールアドレス"><br>
    <input class="pas"type="password"name="psw" placeholder="パスワード"><br>
    <input class="button"type="submit" value="ログイン">
</form>