<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー設定変更</title>

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
            <h2 class="card-title">ユーザー登録内容変更</h2>
        </div>
    </div>

    <div class="card user-card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">性別</p>
                        <div class="col-md-8">
                        <div class="row">
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="male">
                            <label class="form-check-label" for="male">
                              男性
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="female">
                            <label class="form-check-label" for="female">
                              女性
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="none">
                            <label class="form-check-label" for="none">
                              無回答
                            </label>
                        </div>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">生年月日</p>
                        <div class="col-md-8">0000年 00月 00日</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">氏名</p>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputSei" placeholder="姓">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputMei" placeholder="名">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">メールアドレス</p>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="◯◯◯@example.jp">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">住所</p>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputAddress" placeholder="全角で入力してください">
                        </div>
                    </div>
                </li>
                <hr>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">パスワード入力</p>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="現在のパスワードを入力してください">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <a class="nextbtn btn btn-outline-ligth col-auto" href="userchangeCheck.php">次へ</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>