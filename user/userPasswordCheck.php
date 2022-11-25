<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再設定確認</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once '../session.php';
        $result = searchUser();
    ?>

    <?php
        require_once '../DBManager.php';
        $dbmng = new DBManager();
        $searchArray = $dbmng -> getUserTblByUid($_SESSION['userId']);
        foreach($searchArray as $row) {
        }
    ?>

    <?php include "../menu/menu.php" ?>

    <div class="card border-0 user-title-card">
        <div class="card-body">
            <h2 class="card-title">パスワード再設定確認</h2>
        </div>
    </div>

    <div class="card user-card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 oldPass">
                            <?php 
                                $isErr = false;
                                if(empty($_POST['oldPass'])) {
                                    echo '<p class="error">パスワードが入力されていません</p>';
                                    $isErr = true;
                                } else {
                                    if(password_verify($_POST['oldPass'], $row['password']) == false) {
                                        echo "現在のパスワードが正しくありません";
                                        $isErr = true;
                                    } else {
                                        echo "＊＊＊＊＊";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 newPass">
                            <?php 
                                if(empty($_POST['newPass'])) {
                                    echo '<p class="error">パスワードが入力されていません</p>';
                                    $isErr = true;
                                } else {
                                    echo $_POST['newPass'];
                                }
                            ?>
                        </div>
                        <div class="col-md-10 offset-md-1 newPass2">
                            <?php 
                                if(empty($_POST['newPass2'])) {
                                    echo '<p class="error">パスワードが入力されていません</p>';
                                    $isErr = true;
                                } else {
                                    if($_POST['newPass'] != $_POST['newPass2']) {
                                        echo '<p class="error">パスワードが異なります</p>';
                                        $isErr = true;
                                    } else {
                                        echo $_POST['newPass2'];
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <a class="backbtn btn btn-outline-ligth col-auto" href="userPassword.php">戻る</a>
                    </div>
                </li>
                <!-- 入力された内容が正しいか確認-->
                <form action="userPasswordFin.php" method="post">
                    <?php
                        if($isErr == false) {
                            echo '<li class="list-group-item border-0"><div class="row">';
                            echo '<button type="submit" class="changebtn btn btn-outline-ligth col-auto">変更する</button>';
                            echo '</div></li>';
                            echo '<input type="hidden" value='.$_POST['newPass'].' name="newPass">';
                        }
                    ?>
                </form>
            </ul>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>