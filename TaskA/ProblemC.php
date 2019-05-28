<?php

$arr = [2, 3, 1, 6, 8, 3, 9, 0, -1];

for($i = 0; $i < count($arr); $i++)
  $arr[$i] *= 2;

for($i = 0; $i < count($arr); $i++)
  echo $arr[$i]." ";
