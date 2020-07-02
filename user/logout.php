<?php
session_start();

//SESSIONを初期化
$_SESSION[] = array();

//Cookieに保存してあるSESSION IDを保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])){
  setcookie(session_name(), "", time()-42000, "/");
}

//サーバー側のセッションIDを破棄
session_destroy();

//処理後リダイレクト
header("Location: input.php");
exit();