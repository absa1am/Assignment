<?php

// Input: n x n size array
fscanf(STDIN, "%d\n", $n);

// Input: Array element
for($i = 0; $i < $n; $i++)
    for($j = 0; $j < $n; $j++)
        fscanf(STDIN, "%d\n", $arr[$i][$j]);

$pdrow = 0;
$sdrow = $n - 1;
$pdsum = $sdsum = 0;
for($i = 0; $i < $n; $i++) {
    $pdsum += $arr[$i][$pdrow++];
    $sdsum += $arr[$i][$sdrow--];
}

echo "Primary diagonal sum: ".$pdsum."\n";
echo "Secondary diagonal sum: ".$sdsum."\n";