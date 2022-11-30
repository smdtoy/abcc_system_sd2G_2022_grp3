<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
if(!isset($_SESSION['userId'])) {
    $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
    echo $alert;
} else {
    $searchArray = $dbmng -> getCartTblByUidSid($_SESSION['userId'], $_GET['id']);
    if(empty($searchArray)) {
        $searchArray = $dbmng -> insertCartTblByUidSid($_SESSION['userId'], $_GET['id'], $_POST['shohinNum'], $_POST['shohinPrice']);
        $alert = "<script type='text/javascript'>alert('".$_POST['shohinName']."をカートに追加しました');location.href='shohinDetail.php'?id=".$_GET['id']."</script>";
        echo $alert;
    } else {
        $searchArray = $dbmng -> updateCartTblByUidSid($_SESSION['userId'], $_GET['id'], $_POST['shohinNum'], $_POST['shohinPrice']);
        $alert = "<script type='text/javascript'>alert('購入内容を変更しました');location.href='shohinDetail.php'?id=".$_GET['id']."</script>";
        echo $alert;
    }
}
?>