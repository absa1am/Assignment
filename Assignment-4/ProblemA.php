<?php

$list = [[]];
$matrix = [[]];

fscanf(STDIN, "%d %d\n", $V, $E);

// Initializing the matrix with 0
for($i = 0; $i < $V; $i++) {
    for($j = 0; $j < $V; $j++)
        $matrix[$i][$j] = 0;
}

// Inputting the connected edge
for($i = 0; $i < $E; $i++) {
    fscanf(STDIN, "%d %d\n", $x, $y);
    $list[$x - 1][] = $y;
    $list[$y - 1][] = $x;
    $matrix[$x - 1][$y - 1] = 1;
    $matrix[$y - 1][$x - 1] = 1;
}


echo "Adjacency List:\n";
for($i = 0; $i < $V; $i++) {
    echo ($i + 1)." -> ";
    $list[$i] = array_unique($list[$i]);
    for($j = 0; $j < count($list[$i]); $j++)
        if(isset($list[$i][$j])) echo $list[$i][$j]." ";
    echo "\n";
}

echo "\nAdjacency Matrix:\n";
for($i = 0; $i < $V; $i++) {
    for($j = 0; $j < $V; $j++)
        echo $matrix[$i][$j]." ";
    echo "\n";
}