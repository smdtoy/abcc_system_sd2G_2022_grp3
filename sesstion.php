<?php
    // ログインしていない→ログイン画面に遷移
    function searchUser() {
        session_start();
        if(!isset($_SESSTION['user_id'])) {
            $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
            echo $alert;
        }
    }
?>