<?php require('dbconnect.php'); ?>
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
$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
echo 'メモが登録されました';
?>
</pre>
</main>
</body>
</html>
