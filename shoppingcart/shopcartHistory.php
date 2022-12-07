<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入履歴</title>

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
            <h2 class="card-title">商品購入履歴</h2>
        </div>
    </div>

    <div class="card shopping-card border-0">
        <div class="row">
        <?php
            if(!isset($_SESSION['userId'])) {
                echo '<div>購入履歴機能を利用するにはログインが必要です</div>';
            } else {
                $searchArray = $dbmng -> getOrderTblByUid($_SESSION['userId']);
                if(empty($searchArray)) {
                    echo '<div>購入した商品は0件です</div>';
                } else {
                    foreach($searchArray as $row) {
                        // オーダーIDで購入商品を検索
                        $searchArray2 = $dbmng -> getOrderDetailTblByOid($row['order_id']);
                        echo '<div class="card date-card border-0">'.$row['order_date'].'</div>';
                        $sum = 0;
                        //履歴枠組み
                        foreach($searchArray2 as $row2) {
                            // 商品枠組み
                            echo '<div class="card col-md-4 col-sm-6">';
                            // 詳細
                            echo '<a href="../shohin/shohinDetail.php?id='.$row2['shohin_id'].'">';
                            // 商品写真表示
                            $searchArray3 = $dbmng -> getShohinTblById($row2['shohin_id']);
                            foreach($searchArray3 as $row3) {
                            }
                            echo '<div class="photoCart"><img class="photo" src="../img/'.$row3['img_pas'].'.jpg"></div>';
                            // 商品名表示
                            echo '<div class="shohinName-favorite">'.$row3['shohin_name'].'</div>';
                            echo '</a>';
                            echo'<div class="youryo">'.$row2['shohin_num'].'個'.'</div>';
                            // 商品金額表示
                            echo '<div class="shohinPrice-favorite">'.number_format($row2['shohin_price'] * $row2['shohin_num']).'円'.'</div>';
                            $sum += $row2['shohin_price'] * $row2['shohin_num'];
                            echo '</div>';
                        }
                        echo '<div class="card sum-price-card border-0">￥ '.number_format($sum).'</div>';
                    }
                }
            }
        ?>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>