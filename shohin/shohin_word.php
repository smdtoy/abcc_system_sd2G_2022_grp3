<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品検索結果画面</title>

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
    $searchArray = $dbmng -> getShohinTblByWord($_POST['word']);
    foreach($searchArray as $row){
    }
    ?>

    <div class="card border-0 shohin-title-card">
        <div class="card-body">
            <div class="row">
                <h2 class="card-title col-auto">検索ワード：</h2>
                <h2 class="word-title col-auto"><?php echo $_POST['word']; ?></h2>
            </div>
        </div>
    </div>

    <div class="card shohin-card border-0">
        <div class="row">
            <div class="card col-md-4 col-sm-6">
                <img src="..." alt="...">
                <div>aaa</div>
            </div>
            <div class="card col-md-4 col-sm-6">
                <img src="..." alt="...">
                <div>aaa</div>
            </div>
            <div class="card col-md-4 col-sm-6">
                <img src="..." alt="...">
                <div>aaa</div>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>