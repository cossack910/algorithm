<?php

use PHPUnit\Framework\TestCase;

require_once "/var/www/php-py/algorithm/search/binarySearchClass.php";

class BinarySearchTestClass extends TestCase
{
    public function testBinary_search()
    {
        $bs = new BinarySearch();
        $arr = [3, 5, 8, 19, 55, 76, 79, 100, 120];
        $criterion = 77;
        $expected_output = 7;  // 配列のインデックス7の値（79）が77よりも大きい最初の数値です。

        $this->assertEquals($expected_output, $bs->binary_search($arr, $criterion));
    }

    public function testBinarySearch()
    {
        $bs = new BinarySearch();
        $arr = [1, 2, 3, 55, 66, 77, 88, 99];
        $key = 66;
        $expected_output = 4;  // 配列のインデックス4に66が存在します。

        $this->assertEquals($expected_output, $bs->binarySearch($arr, $key));
    }
}

// docker exec -it php8.1 /usr/local/bin/phpunit /var/www/php-py/algorithm/search/binarySearchTestClass.php
