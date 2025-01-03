<?php
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//DB接続関数：db_conn() 
function db_conn() {
    try {
        $db_name = ''; //データベース名
        $db_id   = ''; //アカウント名
        $db_pw   = ''; //パスワード
        $db_host = ''; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;  //外でも使うためにリターンする（関数のリターン）
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}


