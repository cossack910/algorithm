<?php
//コインの合計枚数をなるべく少なく
$coins = [500, 100, 50, 10, 5, 1];
$numbers_of_coins = [9, 12, 40, 300, 20, 100000];

$MAX = 10000;

$result = 0;
for ($i = 0; $i < count($coins); $i++) {
    $add = intdiv($MAX, $coins[$i]);
    if ($add > $numbers_of_coins[$i]) {
        $add = $numbers_of_coins[$i];
    }

    $MAX -= $coins[$i] * $add;
    $result += $add;
    print((string) $coins[$i] . '円' . PHP_EOL); //円玉
    print((string) $add . '枚' . PHP_EOL); //枚数
}

echo $result;

//docker exec -it php8.1 php /var/www/php-py/algorithm/greedy/coin.php