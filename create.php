<?php
// まずは`var_dump($_POST);`で値を確認すること！！
//var_dump($_post);
//exit();
// データの受け取り
$name = $_POST["name"];
$age = $_POST["age"];
$today = $_POST["today"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$ginou = $_POST["ginou"];
$student = $_POST["student"];
$tokutei = $_POST["tokutei"];
$koudo = $_POST["koudo"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$name} {$age} {$today} {$mail} {$tel} {$ginou} {$student}{$tokutei} {$koudo} \n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/list.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:index.php");

?>