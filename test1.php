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


foreach ($test as $data) {
	// var_dump($data);
    $sales = explode(",", $data);
    // $sales = $sales[1];
    $sum += $sales[1];
    var_dump($sales);
	// $sales = explode(",",$data[1]);
	// var_dump($sales);
}
var_dump($sum);
// $first = explode(",",$test[1]);
// var_dump($first);
// $second = explode(",",$test[2]);
// var_dump($second);
// $third = explode(",",$test[3]);
// var_dump($third);

$human = count($test) - 1;
echo "社員数は". $human. "名です。\n";
// $sum =$first[1] + $second[1] + $third[1];
echo "合計売上は". $sum. "です。\n";

$salesAvg = $sum / count($test);
echo "売上平均". $salesAvg. "です。\n";
// echo $a[1];
exit;

$count = count($str);

var_dump($test);
$num = array_filter($test, "numeric_filter");
$salesSum = array_sum($num);

var_dump($num);
$salesAvg = $salesSum / count($num);

echo "社員数は" . $count. "人です。\n";
echo "売上平均は" . $salesSum. "です。\n";
echo "売上平均は" . $salesAvg. "です。	\n";


fclose($fp);