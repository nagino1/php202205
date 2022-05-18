<?php


// データまとめ用の空文字変数
$str = '';

$file = fopen('data/list.csv', 'r');// ファイルを開く（読み取り専用）

flock($file, LOCK_EX);// ファイルをロック


// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgets($file)) {
    $str .="<tr><td>{$line}</td></tr>";    // 取得したデータを`$str`に追加する

  }
}

flock($file, LOCK_UN);// ロックを解除する
fclose($file);// ファイルを閉じる

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>list（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>list（一覧画面）</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>list</th>
        </tr>
      </thead>
      <tbody>
          
        <?= $str?> 
      </tbody>
    </table>
  </fieldset>
</body>

</html>