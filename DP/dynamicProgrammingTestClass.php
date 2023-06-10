<?php

use PHPUnit\Framework\TestCase;

//絶対パス。。。。
require_once "/var/www/php-py/algorithm/DP/dynamicProgrammingClass.php";

class DynamicProgrammingTestClass extends TestCase
{
    public function testMinCost()
    {
        $dp = new dynamicProgramming();
        $h = array(2, 9, 4, 5, 1, 6, 10);
        $n = count($h);
        $this->assertEquals(8, $dp->minCost($h, $n)); //最小コスト
    }

    public function testEditDistance()
    {
        $dp = new dynamicProgramming();
        $S = "kodansha";
        $T = "danshari";
        $this->assertEquals(4, $dp->editDistance($S, $T)); //類似度4
    }

    public function testKnapsack()
    {
        $dp = new dynamicProgramming();
        $N = 6;  //品物の個数
        $W = 15; //重さの総和
        $wt_val = [[2, 3], [1, 2], [3, 6], [2, 1], [1, 3], [5, 85]]; //品物の重さ_価値
        $this->assertEquals(100, $dp->knapsack($W, $wt_val, $N)); //最大価値100
    }
}

// テスト
// docker exec -it php8.1 /usr/local/bin/phpunit /var/www/php-py/algorithm/DP/dynamicProgrammingTestClass.php