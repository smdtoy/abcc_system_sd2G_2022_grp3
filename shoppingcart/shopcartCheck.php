<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入内容確認</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../header/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../header/header.php" ?>

    <div class="card border-0 shopcart-title-card">
        <div class="card-body">
            <h2 class="card-title">ショッピングカート</h2>
            <h4 class="user-name">（名前）様</h4>
        </div>
    </div>

    <div class="card shopping-card border-0">
        <div class="card shohin-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>商品名</h4>
                            </div>
                            <div class="col-2">
                                <h6>個数</h6>
                            </div>
                            <div class="col-4">
                                <h5>金額</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shohin-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>商品名</h4>
                            </div>
                            <div class="col-2">
                                <h6>個数</h6>
                            </div>
                            <div class="col-4">
                                <h5>金額</h5>
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

        <a class="nextbtn btn btn-outline-ligth" href="shopcartFin.php">購入する</a>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>