<?php

// データ取得
$name = $_POST["name"];
$age = $_POST["age"];
$location = $_POST["location"];
$condition = $_POST["condition"];
$free = $_POST["free"];

// var_dump($name);
// var_dump($age);
// var_dump($location);
// var_dump($condition);
// var_dump($free);

// 時間取得
$date = date("Y/m/d H:i:s");

// ファイル読み込み
$file = fopen("data/data.txt","a");

// ファイル書き込み
fwrite($file,$date."\t".$name."\t".$age."\t".$location."\t".$condition[0]."/".$condition[1]."/".$condition[2]."/".$condition[3]."\t".$free."\n");

// ファイルクローズ
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();


?>