<?php
// 名称: バブルソート

// n はソートすべきデータ要素数
// 平均計算時間: n^2
// 最悪計算時間: n^2

/**
 * バブルソートで昇順に並び替える
 * @param array $array ソート対象
 * @return array
 */
function bubble_sort(array $array): array
{
    $cnt = count($array);
    for ($i = 0; $i < $cnt; $i++) {
        for ($j = 1; $j < $cnt - $i; $j++) {

            // 降順にするときは比較条件を『>』にする
            if ($array[$j] < $array[$j - 1]) {
                $save = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j - 1] = $save;
            }
        }
    }
    return $array;
}


// === テスト === //
// 0~30の配列
$array = [5, 10, 20, 15, 1];
shuffle($array);

// ソート
$sort_array = bubble_sort($array);

echo "<pre>";
print_r($sort_array);
echo "</pre>";