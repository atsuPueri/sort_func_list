<?php

/**
 * シェーカーソートで昇順に並び替える
 * @param array $array ソート対象
 * @return array
 */
function shaker_sort(array $array): array
{


    $head_index = 0;
    $tail_index = count($array) - 1;

    while (true) {

        // 順方向スキャン
        $last_swap_index = $head_index;
        for ($i = $head_index; $i < $tail_index; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                // 入れ替え
                $array = swap($array, $i, $i + 1);
                $last_swap_index = $i;
            }
        }
        $tail_index = $last_swap_index; // 後方スキャン範囲を狭める

        if ($head_index === $tail_index) {
            break;
        }

        // 逆方向スキャン
        $last_swap_index = $tail_index;
        for ($i = $tail_index; $i > $head_index; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                $array = swap($array, $i, $i - 1);
                $last_swap_index = $i;
            }
        }
        $head_index = $last_swap_index; // 前方スキャン範囲を狭める

        if ($head_index === $tail_index) {
            break;
        }
    }
    return $array;
}

/**
 * 入れ替え関数
 * @param array $array 入れ替え対象
 * @param int $key1 添え字1
 * @param int $key2 添え字2
 * @return array 入れ替えた値
 * $a = swap([5,10], 1, 2);
 * print_r($a); // [10, 5]
 */
function swap (array $array, int $key1, int $key2): array
{
    $save = $array[$key1];
    $array[$key1] = $array[$key2];
    $array[$key2] = $save;
    // [$array[$key2], $array[$key1]] = [$array[$key1], $array[$key2]];
    return $array;
};



// === テスト === //
// 0~30の配列
$array = range(0, 30);
shuffle($array);

// ソート
$sort_array = shaker_sort($array);

echo "<pre>";
print_r($sort_array);
echo "</pre>";