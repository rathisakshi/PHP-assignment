<?php
$x='z';
$y = ++$x;

if(strlen($y)>1){
    $y= $y[0];
}
echo $y;

?>