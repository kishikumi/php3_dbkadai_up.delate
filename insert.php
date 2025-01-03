<?php
// データを受け取る
$theme = $_POST['theme'];
$url = $_POST['url'];
$content = $_POST['content'];
$date = date('Y-m-d H:i:s');

// /2. DB接続関数で
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO php3kadai(id, theme, url, content, date)
                        VALUES(NULL, :theme, :url, :content, now())');


//Integer（数値の場合 PDO::PARAM_INT)
//String（文字列の場合 PDO::PARAM_STR)
$stmt->bindValue(':theme', $theme, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':date', $content, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('ErrorMessage:' . print_r($error, true));
} else {
    header('Location: index.php');
}