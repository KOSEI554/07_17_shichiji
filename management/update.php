<?php

// 送信データのチェック
// var_dump($_POST);
// exit();

// 関数ファイルの読み込み
include("funcs.php");

// 送信データ受け取り
$id = $_POST['id'];
$name = $_POST['name'];
$usern = $_POST['usern'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];



// DB接続
$pdo = db_connect();

// UPDATE文を作成&実行
$sql = "UPDATE user_table SET name=:name, usern=:usern, mail=:mail, pass=:pass, updated_at=sysdate() WHERE id=:id";;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':usern', $usern, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR); 
$stmt->bindValue(':pass', $pass, PDO::PARAM_STR); 
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();



// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する
  header("Location:read.php");
  exit();
}
