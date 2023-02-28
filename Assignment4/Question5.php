<?php
$str1= 'sakshi'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>