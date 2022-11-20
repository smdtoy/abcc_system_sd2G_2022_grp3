<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録内容確認</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <div class="card border-0 user-title-card">
        <div class="card-body">
            <h2 class="card-title">ユーザー登録内容確認</h2>
        </div>
    </div>

    <div class="card user-card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item seibetu">
                    <div class="row">
                        <p class="col-md-2">性別</p>
                        <div class="col-md-8">
                            <?php 
                                $isErr = false;
                                if(!isset($_POST['gender'])) {
                                    echo '<p class="error">性別が選択されていません</p>';
                                    $isErr = true;
                                } else {
                                    echo $_POST['gender'];
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">生年月日</p>
                        <div class="col-md-8">
                            <?php
                                if(!checkdate(($_POST['month']), ($_POST['day']), ($_POST['year']))) {
                                    echo '<p class="error">存在しない生年月日です';
                                    $isErr = true;
                                } else {
                                    $date = $_POST['year'].sprintf('%02d', $_POST['month']).sprintf('%02d', $_POST['day']);
                                    $today = date('Ymd');
                                    $is20 = floor(($today - $date) / 10000);
                                    if($is20 < 20) {
                                        echo '<p class="error">二十歳未満です';
                                        $isErr = true;
                                    } else {
                                        echo $_POST['year']."年 ".$_POST['month']."月 ".$_POST['day']."日";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">氏名</p>
                        <div class="col-md-8">
                            <?php
                                if(empty($_POST['sei']) || empty($_POST['mei'])) {
                                    echo '<p class="error">名前が入力されていません';
                                    $isErr = true;
                                } else {
                                    echo $_POST['sei']." ".$_POST['mei'];
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">メールアドレス</p>
                        <div class="col-md-8">
                            <?php
                                $mail = $_POST['mail'];
                                if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)) {
                                    echo '<p class="error">正しいメールアドレスを入力してください<br>';
                                    $isErr = true;
                                } else {
                                    echo $_POST['mail'];
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">パスワード</p>
                        <div class="col-md-8">
                            <?php
                                if(empty($_POST['pass'])) {
                                    echo '<p class="error">パスワードが入力されていません<br>';
                                    $isErr = true;
                                } else {
                                    echo $_POST['pass'];
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">住所</p>
                        <div class="col-md-8">
                            <?php
                                if(empty($_POST['address'])) {
                                    echo '<p class="error">住所が入力されていません<br>';
                                    $isErr = true;
                                } else {
                                    echo $_POST['address'];
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <div class="row">
                    <a class="backbtn btn btn-outline-ligth col-md-4" href="new_user.php">戻る</a>
                    <!-- 入力された内容が正しいか確認-->
                    <div class="col-md-4 offset-md-4">
                    <form action="new_userFin.php" method="post">
                        <?php
                            if($isErr == false) {
                                echo '<button class="changebtn btn btn-outline-ligth" value="submit">登録する</button>';
                                echo '<input type="hidden" value='.$_POST['gender'].' name="gender">';
                                echo '<input type="hidden" value='.$_POST['year']."-".$_POST['month']."-".$_POST['day'].' name="date">';
                                echo '<input type="hidden" value='.$_POST['sei']." ".$_POST['mei'].' name="name">';
                                echo '<input type="hidden" value='.$_POST['mail'].' name="mail">';
                                echo '<input type="hidden" value='.$_POST['pass'].' name="pass">';
                                echo '<input type="hidden" value='.$_POST['address'].' name="address">';
                            }
                        ?>
                    </form>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>