<?php
session_start();
include("funcs.php");
loginCheck();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>マイページ</title>
</head>
<body>
  <div>こんにちは！ <br>
  <?php echo $_SESSION['usern'] ?>さん！</div>
  
  <div>
    <p>プロフィール</p>
    <h1><?php echo $_SESSION['usern'] ?></h1>

    <div>年齢<br><?php echo $_SESSION['old'] ?>歳</div>
    <div>居住地<br><?php echo $_SESSION['prefecture'] ?>県</div>
    <div>ひとこと<br><?php echo $_SESSION['message'] ?></div>

    <p><a href=<?php echo "edit.php?id={$_SESSION['id']}"?>>編集</a></p>
  </div>
  
  <div>
    <form action="" method="post">
      <p>ユーザー検索</p>
      <input type="search" name="search">
      <input type="submit" value="検索">
    </form>
  </div>
  <div class="out"><a href="logout.php">ログアウト</a></div>
  <p><a href="delete.php">アカウントを削除する</a></p>  
</body>
</html>
