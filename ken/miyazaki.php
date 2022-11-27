<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>宮崎県</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <?php
        require_once '../DBManager.php';
        $dbmng = new DBManager();
        $searchArray = $dbmng -> getShohinTblByKen('宮崎');
        foreach($searchArray as $row) {
        }
    ?>

    <div class="card border-0 shohin-title-card">
        <div class="card-body">
            <h2 class="card-title">宮崎県</h2>
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