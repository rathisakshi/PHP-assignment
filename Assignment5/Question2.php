<?php
function bubble_Sort_self($arr)
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
$arr = array(4,2,2,0,-1,0,2,2);
echo implode(" ",(bubble_Sort_self($arr)));

?>
