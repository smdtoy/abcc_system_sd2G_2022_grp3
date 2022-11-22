<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <div class="card border-0 logout-title-card">
        <div class="card-body">
            <h1 class="card-title">ログアウト</h1>
        </div>
    </div>

    <form action="logoutFin.php" method="post">
        <div class="card logout-card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-0">
                        <div class="row">
                            <h2 class="logoutCheck">本当にログアウトしますか</h2>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <a class="cancelbtn btn btn-outline-ligth col-auto" href="../top/top.php">キャンセル</a>
                            <button type="submit" class="logoutbtn btn btn-outline-ligth col-auto">ログアウト</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>