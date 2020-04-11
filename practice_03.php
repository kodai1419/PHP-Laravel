<?php

#practice_01
$name = "kodai";

if($name=="kodai"){
echo "私はあなたの名前です"."\n";
}
else{
echo "あなたの名前ではありません"."\n";
}


#practice_02
$s=0;
for($i=0;$i<=10000;$i++){
$s += $i;
}
echo $s."\n";


#practice_03
$fruits = array("apple","orange","banana","grape","lemon");

foreach($fruits as $value){
echo $value."\n";
}


#practice_04
$start = 1;
$end = 101;

for($i = $start; $i < $end; $i++){

if($i % 5 == 0){
echo $i."\n";
}
}
