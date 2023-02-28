<?php
$original_string = 'Sigma is a workplace';
$string_to_insert ='wonderful';
$insert_pos = 11;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>