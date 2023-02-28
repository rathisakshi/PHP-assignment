<?php
$input = "Sakshi Rathi";
$input = preg_replace('/(\b[a-z])/i', 
'<span style="color:red;">\1</span>', $input);
echo $input;
?>