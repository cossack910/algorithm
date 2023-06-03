<?php


function minCost($N)
{
    $c = array_fill(0, $N + 1, array_fill(0, $N + 1, 0));
    for ($i = 0; $i < $N + 1; $i++) {
        for ($j = 0; $j < $N + 1; $j++) {
            $c[$i][$j] = intval(fgets(STDIN));
        }
    }

    $dp = array_fill(0, $N + 1, PHP_INT_MAX);
    $dp[0] = 0;
    for ($i = 0; $i <= $N; $i++) {
        for ($j = 0; $j < $i; $j++) {
            $dp[$i] = min($dp[$i], $dp[$j] + $c[$j][$i]);
        }
    }
    echo $dp[$N];
}

$N = 2;
minCost($N);
