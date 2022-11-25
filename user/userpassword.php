<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再設定</title>

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

    <?php include "../menu/menu.php" ?>

    <div class="card border-0 user-title-card">
        <div class="card-body">
            <h2 class="card-title">パスワード再設定</h2>
        </div>
    </div>

    <form action="userPasswordCheck.php" method="post">
        <div class="card user-card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <input type="password" class="form-control oldPass" placeholder="現在のパスワード" name="oldPass">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <input type="password" class="form-control newPass" placeholder="新しいパスワード" name="newPass">
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input type="password" class="form-control newPass2" placeholder="新しいパスワード（確認用）" name="newPass2">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="row">
                            <button type="submit" class="changebtn btn btn-outline-ligth col-auto">変更する</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>