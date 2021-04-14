<?php

function sum($numbers)
{
    $result = 0;
    foreach ($numbers as $value) {
        $result += $value;
    }
    return $result;
}

echo sum([1, 2, 3, 4, 5]) . "\n";
