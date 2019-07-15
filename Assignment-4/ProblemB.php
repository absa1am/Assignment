<?php

$prev = 1;
$recent = 2;
echo $prev.", ".$recent;

for($next = 3; $next <= 40; $next = $prev + $recent) {
    echo ", ".$next;
    $prev = $recent;
    $recent = $next;
}
echo "\n";