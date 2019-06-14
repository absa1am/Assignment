<?php

// Input: Size of two dim array
fscanf(STDIN, "%d\n", $n);

// Input: Array element
for($i = 0; $i < $n; $i++)
    for($j = 0; $j < $n; $j++)
        fscanf(STDIN, "%d\n", $arr[$i][$j]);


$prow = 0;
$srow = $n - 1;
$psum = $ssum = 0;
for($i = 0; $i < $n; $i++) {
    $psum += $arr[$i][$prow++];
    $ssum += $arr[$i][$srow--];
}

echo "Primary diagonal sum: ".$psum."\n";
echo "Secondary diagonal sum: ".$ssum."\n";