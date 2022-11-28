<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/top.css">

</head>
<body>
    <?php include "../menu/menu.php" ?>

    <?php
        require_once '../DBManager.php';
        $dbmng = new DBManager();
        $searchArray = $dbmng -> getShohinTblBySake(0);
        foreach($searchArray as $row) {
        }
    ?>

    <div class="img">
    <ul class="slider">
  <li><a href="../shohin/shohin_detail.php"><img src="hyakunenn.png" alt=""></a></li>
  <li><img src="akakirisima.png" alt=""></li>
  <li><img src="aka.png" alt=""></li>
  <li><img src="aka.png" alt=""></li>
  <li><img src="akakirisima.png" alt=""></li>
  <li><img src="akakirisima.png" alt=""></li>
  
<!--/slider--></ul>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="css/top.js"></script>

</div>

<div class="card border-0 shohin-title-card">
        <div class="card-body">
            <h1 class="card-title">商品一覧</h1>
        </div>
    </div>

    <div class="card shohin-card border-0">
        <div class="row">
        <?php
           foreach($searchArray as $row) {
            // 商品枠組み
            echo '<div class="card col-md-4 col-sm-6">';
            // 詳細
            echo '<a href="../shohin/shohin_detail.php?id='.$row['shohin_id'].'">';
            // 商品写真表示
            echo '<img class="photo" src="../img/'.$row['img_pas'].'.jpg">';
            // 商品名表示
            echo '<div class="shohinName">'.$row['shohin_name'].'</div>';
            echo '</a>';
            echo'<div class="youryo">'.$row['capacity'].'ml'.'</div>';
            // 商品金額表示
            echo '<div class="shohinPrice">'.$row['price'].'円'.'</div>';
            echo '</div>';
        }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>