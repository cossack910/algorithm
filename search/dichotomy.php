<?php

function comparison($a)
{
    return $a > 18;
}

function binary_search($arr)
{
    [$left, $right] = [0, count($arr)];

    while ($right - $left > 1) {
        $mid = $left + intdiv(($right - $left), 2);
        if (comparison($arr[$mid])) {
            $right = $mid;
        } else {
            $left = $mid;
        }
        print_r([$left, $right]);
    }
    return $right;
}

$arr = [3, 5, 8, 19, 55, 76, 79, 100, 120]; //6

echo binary_search($arr) . PHP_EOL;
//docker exec -it php8.1 php /var/www/php/algorithm/search/dichotomy.php