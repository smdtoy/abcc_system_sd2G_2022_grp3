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
    <?php
        require_once '../session.php';
        $result = isLogin();
    ?>

    <?php
        require_once '../DBManager.php';
        $dbmng = new DBManager();
    ?>

    <?php include "../menu/menu.php" ?>

    <div class="card border-0 shopcart-title-card">
        <div class="card-body">
            <h2 class="card-title">ショッピングカート</h2>
        </div>
    </div>

    <div class="card shopping-card border-0">
        <?php
            if(!isset($_SESSION['userId'])) {
                echo '<div>カート機能を利用するにはログインが必要です</div>';
            } else {
                echo '<h4 class="user-name">'.$row['user_name'].'様</h4>';
                $searchArray = $dbmng -> getCartTblByUid($_SESSION['userId']);
                if(empty($searchArray)) {
                    echo '<div>カートに商品はありません</div>';
                } else {
                    foreach($searchArray as $row) {
                        // 商品枠組み
                        echo '<div class="card shohin-card">';
                        echo '<div class="row g-0">';
                        echo '<div class="col-4">';
                        // 詳細
                        echo '<a href="../shohin/shohinDetail.php?id='.$row['shohin_id'].'">';
                        // 写真表示
                        echo '<div class="photoCart"><img class="photoCart" src="../img/'.$row['img_pas'].'.jpg"></div></div>';
                        echo '</a>';
                        // 商品名、個数、金額表示、削除ボタン
                        echo '<div class="col-8">';
                        echo '<div class="row">';
                        echo '<div class="col-8">';
                        echo '<div class="shohinName">'.$row['shohin_name'].'</div>';
                        echo '<div class="shohinNum">'.$row['shohin_num'].'</div>';
                        echo '<div class="shohinPrice">'.$row['shohin_price'].'</div>';
                        echo '</div>';
                        echo '<div class="col-4">';
                        echo '<a class="deletebtn btn btn-outline-ligth col-auto" href="#">削除</a>';
                        echo '</div></div></div></div>';
                    }
                }
            }
        ?>
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