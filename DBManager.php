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

    //商品名検索(名前)
    public function getShohinTblByName($getshohinName) {
        $pdo = $this -> dbConnect();
        $sql =  "SELECT * FROM shohin_tbl WHERE shohin_name LIKE ? ORDER BY shohin_id";
        $ps = $pdo -> prepare($sql);
        $ps -> bindValue(1, '%'.$getshohinName.'%', PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
        return $searchArray;
    }
}
?>