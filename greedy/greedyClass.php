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

    public function intervalScheduling($intervals)
    {
        // 終了時刻でソート
        usort($intervals, function ($a, $b) {
            //print($a[1] - $b[1] . PHP_EOL);
            return $a[1] - $b[1]; //0の場合並び替えなし、1以上のとき$aの順番繰り上げ, -1以下の時$aの順番を繰り下げ
        });

        // 最初のジョブを選択(終了時刻が一番早いもの)
        $currentJob = $intervals[0];
        $selectedJobs = [$currentJob];

        // 次のジョブを選択
        foreach ($intervals as $interval) {
            // 現在のジョブが次のジョブの開始前に終了していれば、次のジョブを選択
            if ($currentJob[1] <= $interval[0]) {
                $selectedJobs[] = $interval;
                $currentJob = $interval;
            }
        }

        return $selectedJobs;
    }
}
// docker exec -it php8.1 php /var/www/php-py/algorithm/greedy/greedyClass.php