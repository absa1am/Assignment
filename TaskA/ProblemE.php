<?php

function decToBin($dec) {
  // Converting decimal to binary
  $bin = null;
  while($dec > 0) {
    $bin .= ($dec % 2);
    $dec = (int) ($dec / 2);
  }
  if($bin == null) return 0;
  // Reversing the digit
  for($i = 0, $j = strlen($bin) - 1; $i < $j; $i++, $j--) {
    $temp = $bin[$i];
    $bin[$i] = $bin[$j];
    $bin[$j] = $temp;
  }
  return $bin;
}

$dec = 13329;
echo decToBin($dec)."\n";
