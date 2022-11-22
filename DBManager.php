<?php
class DBManager {
    private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=saketown;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //新規会員登録
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

    //商品検索(商品ID)
    public function getShohinById($getShohinId) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM shohin_tbl WHERE shohin_id = ?";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getShohinId, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    //商品検索(ワード)
    public function getShohinTblByWord($getShohinWord) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE shohin_name LIKE ? OR shohin_detail LIKE ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, '%'.$getShohinName.'%', PDO::PARAM_STR);
        $ps -> bindValue(2, '%'.$getShohinName.'%', PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    //商品検索(県別)
    public function getShohinTblByKen($getkeNname) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE kyushu = ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, $getkenName, PDO::PARAM_INT);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    //商品検索
    public function getShohinTblByAttribute() {

    }

    //ユーザー登録内容表示
    public function getUserTblByUid($getuid) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT * FROM user_tbl WHERE user_id = ?";
        $ps = $pdo -> prerare($sql);
        $ps -> bindValue(1, $getuid, PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }

    //商品カート表示
    public function getCartTblByUid($getuid) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT Stbl.shohin_name, Stbl.shohin_img, Stbl.price, SCtbl.total_price, SCtbl.item_kosu, Utbl.address FROM shohin_tbl AS Stbl 
        INNER JOIN cart_tbl AS SCtbl ON Stbl.user_id = SCtbl.user_id INNER JOIN user_tbl AS Utbl ON SCtbl.user_id = Utbl.user_id";
        
    }

    //商品カート登録
    public function insertCartTblByUid($getuid) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT ";
    }


    //商品カート削除
    public function deleteCartTblByUid($getuid) {
        $pdo = $this -> dbConnect();

    }

    //ユーザー登録内容変更
    public function changeUserTbl() {
        $pdo = $this -> dbConnect();
        $sql = "UPDATE user_tbl SET WHERE user_id = ?";
        $ps -> bindValue(1, PDO::PARAM_);
    }

    //ユーザーパスワード変更
    public function changeUserTblByPass($getNewPass) {
        $pdo = $this -> dbConnect();
        $sql = "UPDATE user_tbl SET password = ? WHERE user_id = ?";
        $ps -> bindValue(1, $getNewPass, PDO::PARAM_STR);
        
    }
}
?>