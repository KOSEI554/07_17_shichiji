<?php
 //ログイン認証チェック
function loginCheck(){
  if (
    !isset($_SESSION["chk_ssid"])||
    $_SESSION["chk_ssid"] != session_id()
  ){
    echo "ログインエラー";
    exit();
  }else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
    // echo $_SESSION["chk_ssid"];
  }
}

function db_connect(){
  // DB接続の設定
$dbn = 'mysql:dbname=gsf_d06_db17;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  // ここでDB接続処理を実行する
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  // DB接続に失敗した場合はここでエラーを出力し，以降の処理を中止する
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit('dbError:'.$e->getMessage());
  echo "エラー";
}
  return $pdo;
}
