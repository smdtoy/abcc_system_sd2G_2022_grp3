<?php
sesson_start();
if(isset($_SESSON["username"])==true&&
   isset($_SESSON["userid"])==true){
       header('Location:login.menu.php');
}
?>
<form action="logincheck.php" method="post">
    ID:<input type="text"name="uid"><br>
    PASSWORD:<input type="password"name="psw"><br>
    <input type="submit" value="ログイン">
</form>