<?php

function test ($a , $b){
    $num = 50;
    $r1 = abs($a - $num);
    $r2= abs($b - $num);
    return $r1 == $r2 ? 0 : ($r1 < $r2 ? $a : $b);
}
echo test (39,48) ."\n";
echo test (49 , 30) . "\n";



?>