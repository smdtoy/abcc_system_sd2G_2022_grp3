<?php
class DBManager {
    private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=saketown;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    // 新規会員登録
    public function insertUserTbl($getName, $getMail, $getPass, $getBirthday, $getGender, $getAddress) {
        $pdo = $this -> dbConnect();
        $sql = "INSERT INTO user_tbl(user_name, mail_address, password, birthday, gender, address) VALUES(?, ?, ?, ?, ?, ?)";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getName, PDO::PARAM_STR);
        $ps -> bindValue(2, $getMail, PDO::PARAM_STR);
        $ps -> bindValue(3, password_hash($getPass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps -> bindValue(4, $getBirthday, PDO::PARAM_STR);
        $ps -> bindValue(5, $getGender, PDO::PARAM_STR);
        $ps -> bindValue(6, $getAddress, PDO::PARAM_STR);
        $ps -> execute();
    }

    // ユーザー登録内容表示
    public function getUserTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM user_tbl WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // ユーザー登録内容変更
    public function updateUserTbl($getUserId, $getName, $getMail, $getBirthday, $getGender, $getAddress) {
        $pdo = $this -> dbConnect();
        $sql = "UPDATE user_tbl SET user_name = ?, mail_address = ?, birthday = ?, gender = ?, address = ? WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getName, PDO::PARAM_STR);
        $ps -> bindValue(2, $getMail, PDO::PARAM_STR);
        $ps -> bindValue(3, $getBirthday, PDO::PARAM_STR);
        $ps -> bindValue(4, $getGender, PDO::PARAM_STR);
        $ps -> bindValue(5, $getAddress, PDO::PARAM_STR);
        $ps -> bindValue(6, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // ユーザーパスワード変更
    public function updateUserTblByPass($getUserId, $getNewPass) {
        $pdo = $this -> dbConnect();
        $sql = "UPDATE user_tbl SET password = ? WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, password_hash($getNewPass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps -> bindValue(2, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // ログイン機能
    public function loginCheck($getMail, $getPass) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM user_tbl WHERE mail_address = ?";
        $ps = $pdo -> prepare($sql);
        $ps->bindValue(1, $getMail, PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps -> fetchAll();
        foreach($searchArray as $row) {
            if(password_verify($getPass, $row['password']) == true) {
                return $searchArray;
            } else {
                return "";
            }
        }
    }

    // 商品検索(商品ID)
    public function getShohinTblById($getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl WHERE shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // スライド商品
    public function getShohinTblBySlider($getShohinSlider) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl WHERE slider = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getShohinSlider, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // 商品一覧
    public function getShohinTblBySake($getShohinSake) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl WHERE sake = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getShohinSake, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // 商品検索(ワード)
    public function getShohinTblByWord($getShohinWord) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE shohin_name LIKE ? OR shohin_detail LIKE ? OR ken_name LIKE ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, '%'.$getShohinWord.'%', PDO::PARAM_STR);
        $ps -> bindValue(2, '%'.$getShohinWord.'%', PDO::PARAM_STR);
        $ps -> bindValue(3, '%'.$getShohinWord.'%', PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // 商品検索(県別)
    public function getShohinTblByKen($getKenName) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE ken_name = ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getKenName, PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // お気に入り商品表示
    public function getFavoriteTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl AS S INNER JOIN favorite_tbl AS F ON S.shohin_id = F.shohin_id WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // お気に入り商品判断
    public function getFavoriteTblByUidSid($getUserId, $getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM favorite_tbl WHERE user_id = ? AND shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // お気に入り商品追加
    public function insertFavoriteTblByUidSid($getUserId, $getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "INSERT INTO favorite_tbl(user_id, shohin_id) VALUES(?, ?)";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // お気に入り商品削除
    public function deleteFavoriteTblByUidSid($getUserId, $getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "DELETE FROM favorite_tbl WHERE user_id = ? AND shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // 商品カート表示
    public function getCartTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl AS st INNER JOIN cart_tbl AS ct ON st.shohin_id = ct.shohin_id WHERE ct.user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // 商品カート判定
    public function getCartTblByUidSid($getUserId, $getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM cart_tbl AS ct INNER JOIN shohin_tbl AS st ON st.shohin_id = ct.shohin_id WHERE ct.user_id = ? AND ct.shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    // 商品カート登録
    public function insertCartTblByUidSid($getUserId, $getShohinId, $getShohinNum, $getShohinPrice) {
        $pdo = $this -> dbConnect();
        $sql = "INSERT INTO cart_tbl(user_id, shohin_id, shohin_num, shohin_price, cart_date) VALUES(?, ?, ?, ? ,?)";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> bindValue(3, $getShohinNum, PDO::PARAM_INT);
        $ps -> bindValue(4, $getShohinPrice, PDO::PARAM_INT);
        $ps -> bindValue(5, date("Y-m-d"), PDO::PARAM_STR);
        $ps -> execute();
    }

    // 商品カート同商品変更
    public function updateCartTblByUidSid($getUserId, $getShohinId, $getShohinNum, $getShohinPrice) {
        $pdo = $this -> dbConnect();
        $sql = "UPDATE cart_tbl SET user_id = ?, shohin_id = ?, shohin_num = ?, shohin_price = ?, cart_date = ? WHERE user_id = ? AND shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> bindValue(3, $getShohinNum, PDO::PARAM_INT);
        $ps -> bindValue(4, $getShohinPrice, PDO::PARAM_INT);
        $ps -> bindValue(5, date("Y-m-d"), PDO::PARAM_STR);
        $ps -> bindValue(6, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(7, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // 商品カート削除
    public function deleteCartTblByUidSid($getUserId, $getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "DELETE FROM cart_tbl WHERE user_id = ? AND shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // 商品カート全商品削除
    public function deleteAllCartTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "DELETE FROM cart_tbl WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
    }

    // 注文,注文明細追加
    public function insertOrderTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "INSERT INTO order_tbl(user_id, order_date) VALUES(?, ?)";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> bindValue(2, date("Y-m-d"), PDO::PARAM_STR);
        $ps -> execute();

        $searchArray = $this -> getCartTblByUid($_SESSION['userId']);
        foreach($searchArray as $row) {
            $sql2 = "INSERT INTO order_detail_tbl(order_id, shohin_id, shohin_num, shohin_price) VALUES(LAST_INSERT_ID(), ?, ?, ?)";
            $ps2 = $pdo -> prepare($sql2);
            $ps2 -> bindValue(1, $row['shohin_id'], PDO::PARAM_INT);
            $ps2 -> bindValue(2, $row['shohin_num'], PDO::PARAM_INT);
            $ps2 -> bindValue(3, $row['shohin_price'], PDO::PARAM_INT);
            $ps2 -> execute();
        }
    }

    // 注文検索
    public function getOrderTblByUid($getUserId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM order_tbl WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getUserId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;    
    }

    // 注文明細検索
    public function getOrderDetailTblByOid($getOrderId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM order_detail_tbl WHERE order_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getOrderId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }
}
?>