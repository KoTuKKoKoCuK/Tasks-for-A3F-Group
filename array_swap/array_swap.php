<?php

$array=[4, 5, 8, 9, 1, 7, 2];

function array_swap(array &$arr, int $num) {
    $val = $arr[$num];
    $arr[$num] = $arr[0];
    $arr[0] = $val;
}

function array_sort_by_swap(array $arr) {
    for ($cnt = count($arr); $cnt > 1; $cnt--) {
        for ($i = 1; $i < $cnt; $i++) {
            if ($arr[$i] > $arr[0]) {
                array_swap($arr, $i);
            }
            array_swap($arr, $cnt - 1);
        }
    }
    return $arr;
}


print_r(array_sort_by_swap($array));