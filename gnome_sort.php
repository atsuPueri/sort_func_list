<?php

function gnome_sort(array $array): array
{
    $i = 1;
    while ($i < count($array)) {

        if ($array[$i - 1] <= $array[$i]) { // 降順にソートする場合は >= で比較する
            $i++;
        } else {
            // 入れ替え
            $save = $array[$i];
            $array[$i] = $array[$i - 1];
            $array[$i - 1] = $save;

            $i--; // 交換したので前に戻る
            if ($i === 0) {
                $i++; // 端なので次に進む
            }
        }
    }
    return $array;
}

// === テスト === //
// 0~30の配列
$array = range(0, 100);
shuffle($array);

// ソート
$sort_array = gnome_sort($array);

echo "<pre>";
print_r($sort_array);
echo "</pre>";