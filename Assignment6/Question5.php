<?php
function bubble_Sort($arr)
{
    $arr_length = count($arr);
    for ($i = 0; $i < $arr_length; $i++) {
        for ($j = 0; $j < $arr_length; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {

                list($arr[$j + 1], $arr[$j]) =
                    array($arr[$j], $arr[$j + 1]);
                }
            }
    }
    return $arr;
}
$arr = array(3, 0, 2, 5, -1, 4, 1);
print_r(bubble_Sort($arr));
?>