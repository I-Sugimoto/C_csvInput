<?php
// ファイルを読み込む。
// fread()とfilr()
//1.ファイルを開くfopen()
$fileName = "sales.csv";

if (!$fp = fopen($fileName, "r")) 
{
  echo "ファイルは開けませんでした";
  exit;
}
// 2.ファイルからデータを読み込む　fread()
$content = fread($fp, filesize($fileName));

var_dump($content);

$test = file($fileName);

var_dump($test);


fclose($fp);



// //1.ファイルを開く　fopen()
// $fileName = "test.dat";
// $data = "書き込みテスト";

// $fp = fopen($fileName, "a");

// //2.ファイルにデータを書き込む。 fwrite()
// if (fwrite($fp,$data) === false)
// {
// 	echo "書き込みができませんでした。";
// 	exit;
// }
// echo "書き込みが成功しました。"
// 3.ファイルを閉じる　fclose()
// fclose($fp);