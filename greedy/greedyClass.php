<?php
class Greedy
{
    public function coin($MAX, $coins, $numbers_of_coins)
    {
        $result = 0;
        for ($i = 0; $i < count($coins); $i++) {
            $add = intdiv($MAX, $coins[$i]);
            if ($add > $numbers_of_coins[$i]) {
                $add = $numbers_of_coins[$i];
            }

            $MAX -= $coins[$i] * $add;
            $result += $add;
        }
        return $result;
    }
}
