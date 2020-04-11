<?php

#practice01
$result = 10;
$result = $result * 2;

echo $result."\n";


#practice02

$a = 11;
$b = 22;

function f($a,$b){
$result = 0;
$result = $a + $b;

return $result;
}

echo f($a,$b)."\n";


#practice03
$arr = array(1,3,5,7,9);
$t = 1;

foreach($arr as $a){

$t = $t * $a;
} 

echo $t."\n";


#practice04

function max_array($arr){

// とりあえず配列の最初の要素を一番大きい値とする

 $max_number = $arr[0];
 $i = 0;
 foreach($arr as $a){

 //どうしたらいいかわからない・・・・
if($i<=$a){

$i = $a;
}
$max_number = $i;
 }

 return $max_number;
 }

echo max_array($arr)."\n";
echo "\n";

#practice05

//strip_tags
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result."\n";
echo "\n";

//array_push
$fruit = array("apple","orange","banana");
foreach($fruit as $fruits){
echo $fruits."\n";
}

array_push($fruit,"grape");
foreach($fruit as $fruits){
echo $fruits."\n";
}
echo "\n";

//array_merge
$data01 = array(0 =>"apple",1=>"orange",2=>"banana");
foreach($data01 as $value01){
echo $value01."\n";
}
$data02 = array(0=>"apple",1=>"orange",2=>"banana",3=>"grape");
$result = array_merge($data01,$data02);
foreach($result as $value02){
echo $value02."\n";
}
echo "\n";

//time
$now = time();
echo $now."\n";

//mktime
$timestamp = mktime(0,0,0,20,3,2020);
echo $timestamp."\n";

//date
$timestamp = time() + (60*60);
$now = date('Y年m月d日H時i分s秒',$timestamp);
echo $now."\n";
