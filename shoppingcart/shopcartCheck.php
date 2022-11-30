<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
if(!isset($_SESSION['userId'])) {
    $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
    echo $alert;
} else {
    $searchArray = $dbmng -> getFavoriteTblByUidSid($_SESSION['userId'], $_GET['id']);
    if(empty($searchArray)) {
        $searchArray = $dbmng -> insertCartTblByUidSid($_SESSION['userId'], $_GET['id']);
        $alert = "<script type='text/javascript'>alert('カートに追加しました');location.href = 'shopcart.php'</script>";
        echo $alert;
    } else {
        $searchArray = $dbmng -> deleteCartTblByUidSid($_SESSION['userId'], $_GET['id']);
        $alert = "<script type='text/javascript'>alert('カートから削除しました');location.href = 'shopcart.php'</script>";
        echo $alert;
    }
}
?>