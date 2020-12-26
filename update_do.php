<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<main>
<h2>practice</h2>
<?php
$statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
$statement->execute(array($_POST['memo'], $_POST['id']));
?>
<p>内容を変更しました</p>
<p><a href="index.php">戻る</a></p>
</main>
</body>
</html>
