<?php

$s = "mohammedkhammash";
$s_search = "a";
$count = 0;

for($b=0 ; $b < strlen($s); $x++){
    if (substr($s,$b,1)==$s_search){
        $count = $count + 1;  
    }
}
echo $count."\n";

















?>