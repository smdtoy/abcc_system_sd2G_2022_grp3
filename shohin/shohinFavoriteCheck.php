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
        $searchArray = $dbmng -> insertFavoriteTblByUidSid($_SESSION['userId'], $_GET['id']);
        $alert = "<script type='text/javascript'>alert('お気に入りに追加しました');location.href = 'shohinFavorite.php'</script>";
        echo $alert;
    } else {
        $searchArray = $dbmng -> deleteFavoriteTblByUidSid($_SESSION['userId'], $_GET['id']);
        $alert = "<script type='text/javascript'>alert('お気に入りから削除しました');location.href = 'shohinFavorite.php'</script>";
        echo $alert;
    }
}
?>