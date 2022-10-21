<?php
    require 'Top.php';
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM goods");
    $goods = $st->fetchAll();
    require 't_index.php';
?>
