<?php
function myfunc(array $values)
{   
    $zero_arr =  array(0);
    return min(array_diff(array_map('intval', $values),$zero_arr));
}
print_r(myfunc(array(-1, 0, 1, 12, -100, 1)) . "\n");
?>