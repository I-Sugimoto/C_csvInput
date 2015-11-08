<?php


//1.ファイルを開くfopen()
$fileName = "sales.csv";

if (!$fp = fopen($fileName, "r")) 
{
  echo "ファイルは開けませんでした";
  exit;
}


// 2.ファイルからデータを読み込む　fread()
$test = file($fileName,FILE_IGNORE_NEW_LINES);
mb_convert_variables("UTF-8", "SJIS", $test); 


foreach ($test as $data) 
{
    $sales = explode(",", $data);
    $sum = 0; 
    $sum += $sales[1];
}

$human = count($test) - 1;
$salesAvg = $sum / count($test);
echo "社員数は". $human. "名です。\n";
echo "合計売上は". $sum. "です。\n";
echo "売上平均". $salesAvg. "です。\n";
//3.ファイルを閉じる fclose()
fclose($fp);