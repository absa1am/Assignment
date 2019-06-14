<?php

// Input: n x n size array
fscanf(STDIN, "%d\n", $n);

// Input: Array element
for($i = 0; $i < $n; $i++)
    for($j = 0; $j < $n; $j++)
        fscanf(STDIN, "%d\n", $arr[$i][$j]);

$sum = 0;
$row = $col = 0;
for($i = 1; $i < $n - 1; $i++) {
    for($j = 1; $j < $n - 1; $j++) {
        $temp = ($arr[$i][$j] + $arr[$i - 1][$j] + $arr[$i + 1][$j] + $arr[$i][$j - 1] + $arr[$i][$j + 1]);
        if($sum < $temp) {
            $sum = $temp;
            $row = $i + 1;
            $col = $j + 1;
        }
    }
}

// Assume that index started at 1 to n
echo "Maximum sum at row = $row, column = $col: $sum\n";