<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入完了</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once '../session.php';
        $result = isLogin();
    ?>

    <?php
        require_once '../DBManager.php';
        $dbmng = new DBManager();
        $searchArray = $dbmng -> insertOrderTblByUid($_SESSION['userId']);
        $searchArray = $dbmng -> deleteAllCartTblByUid($_SESSION['userId']);
    ?>

    <?php include "../menu/menu.php" ?>

    <div class="card border-0 shop-center-card">
        <div class="card-body">
            <h2 class="card-center">購入完了しました</h2>
            <h4 class="card-center">登録先のメールアドレスに確認メールを送信しました</h4>
            <div class="row">
                <a class="changebtn btn btn-outline-ligth col-auto" href="../top/top.php">マイページへ</a>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>