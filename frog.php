<?php
function minCost($h, $n)
{
    $dp = array_fill(0, $n, PHP_INT_MAX); //指定範囲を最大値で初期化
    $dp[0] = 0;  // 頂点0のコストは0
    $dp[1] = abs($h[1] - $h[0]);  // 頂点1のコストは頂点0からの距離

    for ($i = 2; $i < $n; $i++) {
        $dp[$i] = min(
            $dp[$i - 1] + abs($h[$i] - $h[$i - 1]),
            $dp[$i - 2] + abs($h[$i] - $h[$i - 2])
        );
    }
    print_r($dp); //中身見てみる
    return $dp[$n - 1];  // 頂点6までの最小コストを返す
}

$h = array(2, 9, 4, 5, 1, 6, 10);
$n = count($h);

echo minCost($h, $n) . PHP_EOL;
