<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー設定変更内容確認</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <div class="card border-0 user-title-card">
        <div class="card-body">
            <h2 class="card-title">変更内容確認</h2>
        </div>
    </div>

    <div class="card user-card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item seibetu">
                    <div class="row">
                        <p class="col-md-2">性別</p>
                        <div class="col-md-8">男性or女性</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">生年月日</p>
                        <div class="col-md-8">0000年 0月 0日</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">氏名</p>
                        <div class="col-md-8">ABC太郎</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">メールアドレス</p>
                        <div class="col-md-8">＊＊＊＊＊@example.jp</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">パスワード</p>
                        <div class="col-md-8">＊＊＊＊＊</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">住所</p>
                        <div class="col-md-8">◯◯県　◯◯市　◯◯◯</div>
                    </div>
                </li>
                <div class="row">
                    <a class="backbtn btn btn-outline-ligth col-auto" href="userchange.php">戻る</a>
                    <a class="changebtn btn btn-outline-ligth col-auto" href="#">変更する</a>
                </div>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>