<?php

$arr = [2, 3, 1, 6, 8, 3, 9, 0, -1];

for($i = 0, $j = count($arr) - 1; $i < $j; $i++, $j--) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}


for($i = 0; $i < count($arr); $i++)
  echo $arr[$i]." ";

echo "\n";
