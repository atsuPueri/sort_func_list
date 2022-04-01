<?php

function insertion_sort(array $array): array
{
    for ($i = 1; $i < count($array); $i++) {

        if ($array[$i] < $array[$i - 1]) {
            $j = $i;
            $save = $array[$i];

            do {
                $array[$j] = $array[$j - 1];
                $j--;
            } while(0 < $j && $array[$j - 1] > $save);
            $array[$j] = $save;
        }
    }
    return $array;
}

// === テスト === //
// 0~30の配列
$array = range(0, 6000);
shuffle($array);

// ソート
$sort_array = insertion_sort($array);

foreach ($sort_array as $key=>$val) {
    if ($key !== $val) {
        echo "失敗";
    }
}

