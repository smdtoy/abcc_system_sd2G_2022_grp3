<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">

    <?php
    session_start();
    if(isset($_SESSON["mail_address"])==true&&
        isset($_SESSON["password"])==true){
        header('Location:menu.php');
    }
?>
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <div class="card border-0 login-title-card">
        <div class="card-body">
            <h1 class="card-title">ログイン</h1>
        </div>
    </div>

    <form action="loginCheck.php" method="post">
        <div class="card login-card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <input type="text" class="form-control" id="inputMail" placeholder="メールアドレス" name="mail">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <input type="password" class="form-control" id="inputPass" placeholder="パスワード" name="pass">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <button type="submit" class="loginbtn btn btn-outline-ligth col-auto">ログイン</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <a class="newMemberbtn btn btn-outline-ligth col-auto" href="../new_user/new_user.php">新規会員登録はこちらから</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

