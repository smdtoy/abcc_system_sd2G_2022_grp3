<?php
session_start();

session_destroy();

$alert = "<script type='text/javascript'>alert('ログアウトしました');location.href = '../top/top.php'</script>";
echo $alert;
?>