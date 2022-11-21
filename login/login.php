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
    <link rel="stylesheet" href="../header/css/style.css">
    <link rel="stylesheet" href="./css/uidstyle.css">

    <?php
session_start();
if(isset($_SESSON["mail_address"])==true&&
   isset($_SESSON["password"])==true){
       header('Location:menu.php');
}
?>
</head>
<body>
<?php include "../header/header.php" ?>

    <form action="logincheck.php" method="post">
        <div class="top">
            <h1>ログイン</h1>
        </div>
        <div class="touroku">
            <div class="text">
            <input type="text" name="uid" placeholder="メールアドレス"><br>
            <input type="text" name="psw" placeholder="パスワード"><br>
            </div>
            <div class="login">
            <button type="submit">ログイン</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

