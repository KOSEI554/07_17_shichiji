<?php
// 送信データのチェック
// var_dump($_GET);
// exit();

// 関数ファイルの読み込み
include("funcs.php");

// idの受け取り
$id = $_GET['id'];

// DB接続
$pdo = db_connect();

// データ取得SQL作成
$sql = 'SELECT * FROM user_table WHERE id=:id';

// SQL準備&実行
$stmt = $pdo->prepare($sql); 
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();
// $record = $stmt->fetch();




// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は指定の11レコードを取得
  // fetch()関数でSQLで取得したレコードを取得できる
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
//   print_r($record);
// exit();
  // var_dump($record);
  // exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>変更</title>
</head>

<body>
  <form action="update.php" method="POST">
      <p>更新画面</p> 
      <p><a href="mypage.php">マイページに戻る</a></p>
      
      <ul class="item">
        <li><label for="">ユーザー名: </label><input type="text" name="usern" value="<?= $record["usern"] ?>"></li>
        <li><label for="">年齢:</label><input type="text" name="old" value="<?= $record["old"] ?>"></li>
        <li><label for="">居住地:</label><input type="text" name="prefecture" value="<?= $record["prefecture"] ?>"></li>
        <li><label for="">ひとこと:</label><input type="text" name="message" value="<?= $record["message"] ?>"></li>
        <li><label for=""><button>更新</button></label></li>
      </ul>
      <input type="hidden" name="id" value="<?=$record['id']?>">
  </form>

</body>

</html>