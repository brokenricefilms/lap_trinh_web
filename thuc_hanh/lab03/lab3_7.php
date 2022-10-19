<?php

$min = 1;
for ($i = 1; $i < 1000; $i++) {
    if ($i < $min) {
        $min = $i;
    }
}

echo "min $min";
