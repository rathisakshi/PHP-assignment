<?php
$str1 = "$12,334.00A";
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
?>