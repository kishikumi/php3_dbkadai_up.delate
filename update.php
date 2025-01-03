<?php

//1. POSTデータ取得
$name   = $_POST['theme'];
$email  = $_POST['url'];
$content = $_POST['content'];
$date = $_POST['date'];
$id      = $_POST['id'];

//2. DB接続
require_once('funcs.php');
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE php3kadai 
SET 
  theme = :theme, 
  url = :url,
  content = :content,
  date = sysdate()
WHERE id = :id;');


// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':theme', $theme, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}
