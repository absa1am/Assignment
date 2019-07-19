<?php

$n = (int) readline();

for($i = 1; $i <= $n; $i++) {
	$cnt = 0;
    $ans = [[]];
    $temp = readline();
    $test = false;
    list($row, $col) = explode(" ", $temp);
    for($j = 0; $j < (int) $row; $j++) {
        $str = readline();
        for($k = 0; $k < (int) $col; $k++) {
            if($str[$k] == '$') {
                $test = true;
                $ans[$cnt][0] = $j + 1;
                $ans[$cnt][1] = $k + 1;
                $cnt++;
            }
        }
    }
    echo "Case ".$i.":\n";
    if($test) {
        for($j = 0; $j < count($ans); $j++)
            echo $ans[$j][0].",".$ans[$j][1]."\n";
    }
    else {
        echo "No Gold Found\n";
    }
}
