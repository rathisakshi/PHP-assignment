<?php
$sub_string = 'sak';
$str = 'sakshi';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";
?>