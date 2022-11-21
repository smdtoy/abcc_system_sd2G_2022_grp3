<?php
    // ログインしていない→ログイン画面に遷移
    function searchUser() {
        session_start();
        if(!isset($_SESSTION['userId'])) {
            $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
            echo $alert;
        }
    }

    // ログイン済みの場合→名前を表示させる
    function searchUserName() {
        session_start();
        if(!isset($_SESSTION['userId'])) {
            echo $_SESSION['user_name'];
        }
    }
?>