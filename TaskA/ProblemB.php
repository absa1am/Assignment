<?php

$arr = [2, -3, 1, 6, 8, 3, 9, 0, -1];

$min = $max = $arr[0];
for($i = 0; $i < count($arr); $i++) {
  if($min > $arr[$i]) $min = $arr[$i];
  if($max < $arr[$i]) $max = $arr[$i];
}

// Use console for printing newline, otherwise replace newline with <br>
echo "Minimum: ".$min."\n";
echo "Maximum: ".$max."\n";
