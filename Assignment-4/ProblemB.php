<?php

$prev = 1;
$recent = 2;
echo $prev.", ".$recent;

for($next = 3; $next <= 1000000; $next = $prev + $recent) {
    echo ", ".$next;
    $prev = $recent;
    $recent = $next;
}
echo "\n";