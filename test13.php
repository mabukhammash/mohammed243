<?php
$n = 12345;
$s = 0;
while ($n >0){
    $s += $n % 10 ;
    $n = (int)($n /10);


}
echo "The sum of digits is $s";













?>