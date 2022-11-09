<?php
class DBManager {
    private function dbConnect() {
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    //新規会員登録
    public function insertUserTbl($getname, $getmail, $getpass, $getBday, $getseibetu, $getaddress) {
        $pdo = $this -> dbConnect();
        $sql = "INSERT INTO user_tbl(user_name, user_mail, password, birthday, seibetu, address) VALUES(?, ?, ?, ?, ?, ?)";
        $ps -> bindValue(1, $getname, PDO::PARAM_STR);
        $ps -> bindValue(2, $getmail, PDO::PARAM_STR);
        $ps -> bindValue(3, password_hash($getpass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps -> bindValue(4, $getBday, PDO::PARAM_STR);
        $ps -> bindValue(5, $getseibetu, PDO::PARAM_STR);
        $ps -> bindValue(6, $getaddress, PDO::PARAM_STR);
        $ps -> execute();
    }

    //商品検索(名前)
    public function getShohinTblByName($getshohinName) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE shohin_name LIKE ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, '%'.$getshohinName.'%', PDO::PARAM_STR);
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
    public function getCartTblByUid($getuid) {
        $pdo = $this -> dbConnect();
        $sql = "SELECT ";
    }


    //商品カート削除
    public function getCartTblByUid($getuid) {
        $pdo = $this -> dbConnect();

    }
    //
}
?>