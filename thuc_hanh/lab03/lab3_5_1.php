<?php

$n = 100;

for ($i = 2 ; $i <= $n ; $i++) {  
    $flag = false;
    for ($j = 2; $j <= $n; $j++) {
        if ( $i != $j && $i % $j == 0) {
            $flag = true;
        }
    }    
    if ($flag == false) {
        echo "<br>";
        echo "$i";
    }
}
