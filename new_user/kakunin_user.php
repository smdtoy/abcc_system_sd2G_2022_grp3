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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
    <h2>登録内容確認</h2>
    <form action="kanryo_user.php">
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=saketown;cahrset=utf8','webuser','abccsd2');

    $sql="INSET INTO user_tbl(user_name,mail_address,password,birthday,gender,address)VALUES(?,?,?,?,?,?)";

    $ps=$pdo->prepare($sql);
    $ps->bindValue(1,$_POST['user_name'],PDO::PARAM_STR);
    $ps->bindValue(2,$_POST['mail_address'],PDO::PARAM_STR);
    $ps->bindValue(3,password_hash($_POST['password'],PASSWORD_DEFAULT),PDO::PARAM_STR);
    $ps->bindValue(4,$_POST['bithday'],PDO::PARAM_STR);
    $ps->bindValue(5,$_POST['gender'],PDO::PARAM_STR);
    $ps->bindvalue(6,$_POST['address'],PDO::PARAM_STR);
    $ps->execute();

    echo"性別:".$_POST['gender'];
    echo"生年月日:".$_POST['bithday'];
    echo"氏名:".$_POST['user_name'];
    echo"メールアドレス:".$_POST['mail_address'];
    echo"パスワード:".$_POST['password'];
    echo"住所:".$_POST['address'];
    ?>
</body>
</html>