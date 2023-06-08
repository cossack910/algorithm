<?php
class dynamicProgramming
{
    #frog問題
    public function minCost($h, $n)
    {
        $dp = array_fill(0, $n, PHP_INT_MAX); //指定範囲を最大値で初期化
        $dp[0] = 0;  // 頂点0のコストは0
        $dp[1] = abs($h[1] - $h[0]);  // 頂点1のコストは頂点0からの距離

        for ($i = 2; $i < $n; $i++) {
            $dp[$i] = min(
                $dp[$i],
                $dp[$i - 1] + abs($h[$i] - $h[$i - 1]),
                $dp[$i - 2] + abs($h[$i] - $h[$i - 2])
            );
        }
        return $dp[$n - 1];  // 頂点6までの最小コストを返す
    }

    #編集距離
    public function editDistance($S, $T)
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
            }
        }

        return $dp[$m][$n];
    }

    #ナップサック問題
    public function knapsack($W, $wt_val, $N)
    {
        $dp = array_fill(0, $N + 1, array_fill(0, $W + 1, 0)); //品物の数, 重さを表した配列を0で初期化

        // i=0,すべての重さに対して価値は0
        for ($w = 0; $w <= $W; $w++) {
            $dp[0][$w] = 0;
        }

        // ナップサックに何も入れないとき、すべての品物の価値は0
        for ($i = 0; $i <= $N; $i++) {
            $dp[$i][0] = 0;
        }

        for ($i = 1; $i <= $N; $i++) { //縦軸
            for ($w = 1; $w <= $W; $w++) { //横軸
                // 品物iをナップサックに追加できる場合
                if ($wt_val[$i - 1][0] <= $w) {
                    $dp[$i][$w] = max(
                        $wt_val[$i - 1][1] + $dp[$i - 1][$w - $wt_val[$i - 1][0]], //品物重さ + (総重量-品物の重さ)
                        $dp[$i - 1][$w]
                    );
                } else {
                    // 追加できない場合、価値は前の品物までの価値と同じ
                    $dp[$i][$w] = $dp[$i - 1][$w];
                }
            }
        }
        return $dp[$N][$W];
    }

    #区間分割問題ようわからんわい
    public function sectionDiv($N, $t)
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
}

//docker exec -it php8.1 php /var/www/php-py/algorithm/DP/dynamicProgrammingClass.php