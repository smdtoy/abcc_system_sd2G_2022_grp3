<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top</title>
</head>
<body>
    <h1>SAKETOWN</h1>
    <table>
        <?php foreach ($sake as $g) { ?>
            <tr>
                <td>
                    <?php echo img_tag($g['code']) ?>
                </td>
                <td>
                    <p class="sake"><?php echo $g['name'] ?></p>
                    <p><?php echo nl2br($g['comment']) ?></p>
                </td>
                <td width="80">
                    <p><?php echo $g['price'] ?>円</p>
                    <from action="cart.php" method="post">
                        <select name="num">
                            <?php
                                for($i = 0;$i<=9;i++){
                                    echo "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
                        <input type="submit" name="submit" value="カートに入れる">
                    </from>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>