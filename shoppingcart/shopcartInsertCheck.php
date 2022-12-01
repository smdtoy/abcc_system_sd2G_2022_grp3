<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
if(!isset($_SESSION['userId'])) {
    $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
    echo $alert;
} else {
    $searchArray = $dbmng -> getCartTblByUidSid($_SESSION['userId'], $_POST['shohinId']);
    if(empty($searchArray)) {
        $searchArray = $dbmng -> insertCartTblByUidSid($_SESSION['userId'], $_POST['shohinId'], $_POST['shohinNum'], $_POST['shohinPrice']);
        $alert = "<script type='text/javascript'>alert('カートに追加しました');location.href='../shohin/shohinDetail.php?id=".$_POST['shohinId']."'</script>";
        echo $alert;
    } else {
        $searchArray = $dbmng -> updateCartTblByUidSid($_SESSION['userId'], $_POST['shohinId'], $_POST['shohinNum'], $_POST['shohinPrice']);
        $alert = "<script type='text/javascript'>alert('購入内容を変更しました');location.href='../shohin/shohinDetail.php?id=".$_POST['shohinId']."'</script>";
        echo $alert;
    }
}
?>