<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<main>
<h2>practice</h2>
<pre>
<?php
try {
    $db = new PDO('mysql:dbname=mydb; host=127.0.0.1; port=8889; charset=utf8', 'root', 'root');
    // $db -> exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
} catch (PDOException $e) {
    echo 'DB接続エラー：' . $e->getMessage();
}
// セキュリティ的に危険な為execをprepareに変更
$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
echo 'メモが登録されました';
?>
</pre>
</main>
</body>
</html>
