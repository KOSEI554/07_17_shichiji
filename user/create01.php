<?php
  // var_dump($_POST);
  // exit();
// 送信確認
// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
  !isset($_POST['name']) || $_POST['name']=='' ||
  !isset($_POST['usern']) || $_POST['usern']=='' ||
  !isset($_POST['mail']) || $_POST['mail']=='' ||
  !isset($_POST['pass']) || $_POST['pass']=='' ){
    // var_dump($_POST);
    // exit();
  exit('ParamError');
  }


// 受け取ったデータを変数に入れる
  
$name = $_POST["name"];
$usern = $_POST["usern"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$old = $_POST["old"];
$prefecture = $_POST["prefecture"];
$message = $_POST["message"];



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
}

// var_dump($_POST);
// exit();

// データ登録SQL作成
$sql = 'INSERT INTO user_table(id, name, usern, mail, pass, old, prefecture, message, created_at, updated_at)
VALUES(NULL, :name, :usern, :mail, :pass, :old, :prefecture, :message,  sysdate(), sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR); 
$stmt->bindValue(':usern', $usern, PDO::PARAM_STR); 
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
$stmt->bindValue(':old', $old, PDO::PARAM_STR);
$stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行



// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  exit('sqlError:'.$error[2]);
} else {
  // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
  header('Location:input.php');
}
