<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>買い物カート画面</title>

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
                <a class="navbar-brand" href="../top/top.php" id="logo">SAKETOWN</a>
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

    <div class="card border-0 shopcart-title-card">
        <div class="card-body">
            <h2 class="card-title">ショッピングカート</h2>
            <h4 class="user-name">（名前）様</h4>
        </div>
    </div>

    <div class="card shopping-card border-0">
        <div class="card shohin-card">
            <div class="row g-0">
                <div class="col-4">
                    <img src="..." alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h4>商品名</h4><br>
                                <h6>個数</h6>
                                <h5>金額</h5>
                            </div>
                            <div class="col-4">
                                <a class="deletebtn btn btn-outline-ligth col-auto" href="#">削除</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shohin-card">
            <div class="row g-0">
                <div class="col-4">
                    <img src="..." alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h4>商品名</h4><br>
                                <h6>個数</h6>
                                <h5>金額</h5>
                            </div>
                            <div class="col-4">
                                <a class="deletebtn btn btn-outline-ligth col-auto" href="#">削除</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card sum-card border-0">
            <div class="row">
                <div class="col-3 offset-5">
                    <h2>合計</h2>
                </div>
                <div class="col-4">
                    <h3>￥00000</h3>
                </div>
            </div>
        </div>

        <a class="nextbtn btn btn-outline-ligth" href="shopcartCheck.php">購入画面へ</a>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>