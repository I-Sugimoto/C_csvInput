<?php

function string_filter($param1) 
{
  return is_string($param1);
}

function numeric_filter($param2) 
{
  return is_numeric($param2);
}

//1.ファイルを開くfopen()
$fileName = "sales.csv";

if (!$fp = fopen($fileName, "r")) 
{
  echo "ファイルは開けませんでした";
  exit;
}


// 2.ファイルからデータを読み込む　fread()
$test = file($fileName);
mb_convert_variables("UTF-8", "SJIS", $test); 
var_dump($test);

$str = array_filter($test, "string_filter");
echo $str;

// $test = file($fileName);
// mb_convert_variables("UTF-8", "SJIS", $test); 
// var_dump($test);

// $str = array_filter($test, "string_filter");
// $num = array_filter($test, "numeric_filter");


fclose($fp);

// $data = array("aa", 10, "bb", 20, 30);
// $str = array_filter( $data, "string_filter");
// $num = array_filter( $data, "numeric_filter");
// var_dump($str);
// echo count($str);
// var_dump($num);
// $numnum = count($num);
// // echo count($num);
// $sellSum = echo array_sum($num)/$numnum;
