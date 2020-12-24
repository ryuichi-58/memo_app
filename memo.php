<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>index.php</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>MEMO</h2>
<pre>
<?php
try{
    $db = new PDO('mysql:dbname=mydb; host=127.0.0.1; port=8889; charset=utf8', 'root', 'root');
} catch (PDOException $e) {
echo '接続エラー：' . $e->getMessage();
}

$memo = $db->query('select * from memos where id=1')
?>
</pre>
</main>
</body>
</html>
