<?php
session_start();
include("funcs.php");
loginCheck();

// 送信データのチェック
// var_dump($_POST);
// exit();


// 送信データ受け取り
$id = $_POST['id'];
$usern = $_POST['usern'];
$old = $_POST['old'];
$prefecture = $_POST['prefecture'];
$message = $_POST['message'];



// DB接続
$pdo = db_connect();

// UPDATE文を作成&実行
$sql = "UPDATE user_table SET usern=:usern, old=:old, prefecture=:prefecture, message=:message, updated_at=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':usern', $usern, PDO::PARAM_STR); 
$stmt->bindValue(':old', $old, PDO::PARAM_STR); 
$stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR); 
$stmt->bindValue(':message', $message, PDO::PARAM_STR); 
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();



// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
//   print_r($message);
// exit();
  // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する
  header("Location:mypage.php");
  exit();
}