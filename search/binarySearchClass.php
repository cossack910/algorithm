<?php
class BinarySearch
{

    private function comparison($arr_num, $criterion)
    {
        return $arr_num > $criterion;
    }

    public function binary_search($arr, $criterion)
    {
        [$left, $right] = [0, count($arr)]; // 要素番号

        while ($right - $left > 1) {
            $mid = $left + intdiv(($right - $left), 2);
            if ($this->comparison($arr[$mid], $criterion)) {
                $right = $mid;
            } else {
                $left = $mid;
            }
            print_r([$left, $right]);
        }
        return $right;
    }

    public function binarySearch($arr, $key)
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
}
