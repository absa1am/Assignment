<?php

function binToDec($bin) {
  $dec = 0;
  $posValue = 1;
  for($i = strlen($bin) - 1; $i >= 0; $i--) {
    if($bin[$i]) $dec += $posValue;
    $posValue *= 2;
  }
  return $dec;
}

$bin = "00000000000001";
echo binToDec($bin)."\n";
