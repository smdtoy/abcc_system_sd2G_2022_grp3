<?php
    // セッションが残っているか判定
    function isLogin() {
        if(session_id() == "") {
            session_start();
        }
        if(isset($_SESSION['userId']) == true && isset($_SESSION['userName']) == true) {
            return $isLogin = true;
        } else {
            return $isLogin = false;
        }
    }

    // ログインしていない→ログイン画面に遷移
    function searchUser() {
        $isLogin = isLogin();
        if($isLogin == false) {
            $alert = "<script type='text/javascript'>alert('ログインしてください');location.href = '../login/login.php'</script>";
            echo $alert;
        }
    }

    // ログイン済み→トップ画面に遷移
    function searchLoginUser() {
        $isLogin = isLogin();
        if($isLogin == true) {
            $alert = "<script type='text/javascript'>alert('ログイン済みです\nトップページへ移動します');location.href = '../top/top.php'</script>";
            echo $alert;
        }
    }
?>