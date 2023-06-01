<?php
function editDistance($S, $T)
{
    $m = strlen($S);
    $n = strlen($T);

    $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));

    for ($i = 0; $i <= $m; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            if ($i == 0) {
                $dp[$i][$j] = $j;
            } elseif ($j == 0) {
                $dp[$i][$j] = $i;
            } elseif ($S[$i - 1] == $T[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1];
            } else {
                $dp[$i][$j] = min(
                    $dp[$i][$j - 1],
                    $dp[$i - 1][$j],
                    $dp[$i - 1][$j - 1]
                ) + 1;
            }
            print_r($dp);
        }
    }

    return $dp[$m][$n];
}

$S = "kodansha";
$T = "danshari";

echo editDistance($S, $T) . PHP_EOL;  // 編集距離を表示
