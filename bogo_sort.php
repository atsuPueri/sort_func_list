<?php

// 名称: ボゴソート

// n はソートすべきデータ要素数
// 平均計算時間: n・n!
// 最悪計算時間: 無限

/**
 * ボゴソートで昇順に並び替える
 * @param array $array ソート対象
 * @return array
 */
function bogo_sort(array $array): array
{
    do {
        shuffle($array);
    } while (!is_sort($array));
    return $array;
}

/**
 * 昇順に並んでいるかを確認する
 * @param array $array 確認対象
 * @return bool
 */
function is_sort(array $array): bool
{
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i - 1] > $array[$i]) {
            return false;
        }
    }
    return true;
}
