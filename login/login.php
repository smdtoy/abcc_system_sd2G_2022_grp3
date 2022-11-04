<link rel="stylesheet" href="uidstyle.css">

<?php
session_start();
if(isset($_SESSON["username"])==true&&
   isset($_SESSON["userid"])==true){
       header('Location:menu.php');
}
?>
<form action="logincheck.php" method="post">
<div class="top">
<h1>ログイン</h1>
</div>
<div class="body">
    <input type="text" name="uid" placeholder="メールアドレス"><br>
    <input type="text" name="psw" placeholder="パスワード"><br>
<button type="submit">ログイン</button>
</div>
</form>