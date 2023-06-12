<?php

use PHPUnit\Framework\TestCase;

require_once "/var/www/php-py/algorithm/greedy/greedyClass.php";

class GreedyTestClass extends TestCase
{
    public function testCoin()
    {
        $gr = new Greedy();
        $coins = [500, 100, 50, 10, 5, 1];
        $numbers_of_coins = [9, 12, 40, 300, 20, 100000];
        $MAX = 10000;

        $this->assertEquals(291, $gr->coin($MAX, $coins, $numbers_of_coins));
    }

    public function testintervalScheduling()
    {
        $gr = new Greedy();
        $intervals = [[3, 5], [2, 4], [7, 9], [1, 3]];
        $this->assertEquals([[1, 3], [3, 5], [7, 9]], $gr->intervalScheduling($intervals));
    }
}

// docker exec -it php8.1 /usr/local/bin/phpunit /var/www/php-py/algorithm/greedy/greedyTestClass.php