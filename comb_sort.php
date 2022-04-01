<?php

function comb_sort(array $array): array
{
    $size = count($array);
    $h = ($size * 10) / 13;
    $is_swapped = false;

    while (true) {

        $is_swapped = false;
        for ($i = 0; $i < $size - $h; $i++) {

            if ($array[$i] > $array[$i + $h]) {
                // 入れ替え
                $save = $array[$i];
                $array[$i] = $array[$i + $h];
                $array[$i + $h] = $save;

                $is_swapped = true;
            }
        }

        if (1 < $h || $is_swapped) {
            $h = ($h * 10) / 13;
        } else {
            break;
        }
    }
    return $array;
}

// === テスト === //
// 0~30の配列
$array = range(0, 300);
shuffle($array);

// ソート
$sort_array = comb_sort($array);

echo "<pre>";
print_r($sort_array);
echo "</pre>";