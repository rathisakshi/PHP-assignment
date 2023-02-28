<?php
$str = 'Sigma is the organization';
echo "this is original string: " .$str;
echo "<br>";
echo preg_replace('/the/', 'best', $str, 1)."\n"; 
?>