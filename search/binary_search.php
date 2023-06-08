<?php

function binarySearch($N, $arr, $key)
{
    [$left, $right] = [0, count($arr) - 1];
    while ($right >= $left) {
        $mid = intdiv(($left + $right), 2);
        if ($arr[$mid] === $key) {
            return $mid;
        } else if ($arr[$mid] > $key) {
            $right = $mid - 1;
        } else if ($arr[$mid] < $key) {
            $left = $mid + 1;
        }
        print_r([$left, $mid, $right]);
    }
    return false;
}

$N = 8;
$arr = [3, 5, 8, 10, 14, 17, 21, 39];

echo binarySearch($N, $arr, intval(fgets(STDIN)));

//docker exec -it php8.1 php /var/www/php-py/algorithm/search/binary_search.php