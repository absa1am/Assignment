<?php

// Input: n x n size array
fscanf(STDIN, "%d\n", $n);

// Input: Array element
for($i = 0; $i < $n; $i++)
    for($j = 0; $j < $n; $j++)
        fscanf(STDIN, "%d\n", $arr[$i][$j]);

// Print: Array element
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++)
        echo $arr[$i][$j]." ";
    echo "\n";
}