<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-fluid" id="menuber">
        <div class="row">
            <div class="col-md-1 offset-md-1">
                <a class="navbar-brand" href="#" id="logo">SAKETOWN</a>
            </div>
            <div class="col-md-4 offset-md-2 col-sm-6">
                <form class="d-flex align-items-center" action="#" method="post">
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 offset-md-1 col-sm-6">
                <button type="button" class="btn btn-ligth"><i class="bi bi-cart2"></i></button>
                <button type="button" class="btn btn-ligth"><i class="bi bi-suit-heart"></i></button>
                <button type="button" class="btn btn-ligth navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-controls="navbars1 navbars2 navbars3" aria-expanded="false"><i class="bi bi-list"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid nav-menu row">
        <div class="col-md-4">
            <div class="collapse multi-collapse navbars1">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">SAKETOWN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">ログイン 新規会員登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">ログアウト</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">はじめての方に</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="collapse multi-collapse navbars2">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ユーザー</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">ユーザー設定</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">パスワード変更</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="collapse multi-collapse navbars3">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">商品を探す</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">県別で探す</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="#">福岡県</a></li>
                            <li><a class="dropdown-item" href="#">佐賀県</a></li>
                            <li><a class="dropdown-item" href="#">長崎県</a></li>
                            <li><a class="dropdown-item" href="#">熊本県</a></li>
                            <li><a class="dropdown-item" href="#">宮崎県</a></li>
                            <li><a class="dropdown-item" href="#">大分県</a></li>
                            <li><a class="dropdown-item" href="#">鹿児島県</a></li>
                            <li><a class="dropdown-item" href="#">沖縄県</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">項目で探す</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shohin-detail-card border-0">
        <div class="row">
            <div class="photo col-auto">
    <img class="shohin-detail-photo" src="..." alt="...">
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>