<?php

function selection_sort(array $array): array
{
    $size = count($array);
    for ($i = 0; $i < $size; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $size; $j++) {
            
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        // 入れ替え
        $save = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $save;
    }
    return $array;
}

// === テスト === //
// 0~30の配列
$array = range(0, 6000);
shuffle($array);

// ソート
$sort_array = selection_sort($array);

foreach ($sort_array as $key=>$val) {
    if ($key !== $val) {
        echo "失敗";
    }
}
