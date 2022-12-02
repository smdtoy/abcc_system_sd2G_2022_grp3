<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入り</title>

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

    <div class="card border-0 shohin-title-card">
        <div class="card-body">
            <h2 class="card-title">お気に入り一覧</h2>
        </div>
    </div>

    <div class="card favorite-card border-0">
        <div class="row">
        <?php
            if(!isset($_SESSION['userId'])) {
                echo '<div>お気に入り機能を利用するにはログインが必要です</div>';
            } else {
                $searchArray = $dbmng -> getFavoriteTblByUid($_SESSION['userId']);
                if(empty($searchArray)) {
                    echo '<div>お気に入り商品は0件です</div>';
                } else {
                    foreach($searchArray as $row) {
                        // 商品枠組み
                        echo '<div class="card col-md-4 col-sm-6">';
                        // 削除
                        echo '<a href="shohinFavoriteCheck.php?id='.$row['shohin_id'].'" class="btn deleteBtn"><i class="bi bi-x"></i></a>';
                        // 詳細
                        echo '<a href="../shohin/shohinDetail.php?id='.$row['shohin_id'].'">';
                        // 商品写真表示
                        echo '<div class="photoFavorite"><img class="photo-favorite" src="../img/'.$row['img_pas'].'.jpg"></div>';
                        // 商品名表示
                        echo '<div class="shohinName-favorite">'.$row['shohin_name'].'</div>';
                        echo '</a>';
                        echo'<div class="youryo">'.$row['capacity'].'ml'.'</div>';
                        // 商品金額表示
                        echo '<div class="shohinPrice-favorite">'.$row['price'].'円'.'</div>';
                        echo '</div>';

                    }
                }
            }
        ?>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>