<?php

 // 1. クエリパラメータの確認 = GETで取得している内容を確認

$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();


$stmt = $pdo->prepare('SELECT * FROM php3kadai WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

var_dump($result);
?> 

<!-- ２．HTML -->
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="css/phpindex.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
   
</head>

<header>
   <div class="header-list">
       <ul>
           <li><a href="index.html">Home</a></li>
           <li><a href="bio.html">Bio</a></li>
           <li><a href="psycho.html">Psycho</a></li>
           <li><a href="social.html">Social</a></li>
           <li><a href="index.php">お問い合わせ</a></li>
       </ul>
   </div>
 </header>

<body>
<form method="POST" action="update.php" >
<div class="container">
        <h1>お問い合わせ</h1>
      
         <label for="theme">名前</label>
         <input type="text" id="theme" name="theme" value="<?= $result['theme']?>" required>

         <label for="url">URL</label>
         <input type="text" id="url" name="url" value="<?= $result['url']?>" required>

         <label for="content">内容</label>
         <textarea id="content" name="content" rows="5" value="<?= $result['content']?>" required></textarea>
         
         <!-- ユーザーに書き換えられたくない項目 -->
         <input type="hidden" name="id" value="<?= $result['id']?>" >

         <button type="submit">送信</button>
        </form>
    </div>
    </div>
</form>
   
</body>
</html>

