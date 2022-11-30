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
    <?php include "../menu/menu.php" ?>

    <?php 
        require '../DBManager.php';
        $dbmng = new DBManager();
        $searchArray = $dbmng -> getShohinTblById($_GET['id']);
        foreach($searchArray as $row){
        }
    ?>

    <form action="../shoppingcart/shopCheck.php" method="post">
        <div class="card shohin-detail-card border-0">
            <div class="row">
                <div class="card shohin-photo-card border-0 col-md-5">
                    <?php echo '<img class="photo" src="../img/'.$row['img_pas'].'.jpg">'; ?>
                </div>
                <div class="card shohin-d-card border-0 col-md-7">
                    <ul class="list-group list-group-flush">
                        <div class="row">
                        <li class="list-group-item border-0 col-md-10 shohinName"><?php echo $row['shohin_name']; ?></li>
                        <li class="list-group-item border-0 col-md-2 shohinLike">
                            <a class="btn" href="shohinFavoriteCheck.php?id=<?php echo $row['shohin_id'];?>"><i class="bi bi-suit-heart like"></i></a>
                        </li>
                        </div>
                        <li class="list-group-item border-0 shohinPrice">￥ <?php echo $row['price']; ?></li>
                        <div class="row">
                            <li class="list-group-item border-0 col-md-9 offset-3 shohinCapa">容量：<?php echo $row['capacity']; ?>ml</li>
                            <li class="list-group-item border-0 col-md-9 offset-3 shohinAlcohol">アルコール度数：<?php echo $row['alcohol']; ?>%</li>
                            <li class="list-group-item border-0 col-md-9 offset-3 shohinNum">個数:
                                <select name="shohinNum">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </li>
                        </div>
                        <li class="list-group-item shohinDetail"><div class="card shohin-detail"><?php echo $row['shohin_detail']; ?></li>
                    </ul>
                </div>
            </div>
            <li class="list-group-item border-0">
                <div class="row">
                    <a class="backbtn btn btn-outline-ligth col-auto" href="javascript:history.back()">戻る</a>
                    <input type="submit" class="shopbtn btn btn-outline-ligth col-auto" value="カートに入れる">
                    <?php
                        echo '<input type="hidden" value='.$row['shohin_id'].' name="shohinId">';
                        echo '<input type="hidden" value='.$row['shohin_name'].' name="shohinName">';
                        echo '<input type="hidden" value='.$row['price'].' name="shohinPrice">';
                    ?>
                </div>
            </li>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

;