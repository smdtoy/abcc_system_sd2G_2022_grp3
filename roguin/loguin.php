<?php
sesson_start();
if(isset($_SESSON["username"])==true&&
   isset($_SESSON["userid"])==true){
       header('Location:login.menu.php');
}
?>
<form action="