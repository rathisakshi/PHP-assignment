<?php
$cars = array('BMW', 'Dastun', 'Honda');
echo 'Cars: ';
foreach ($cars as $x)
{
echo "$x ";
}
echo "\n";
$new= 'Kia';
$position = 1;
array_splice( $cars, $position, 0, $new)."\n";
echo "New array is : </br>";
foreach ($cars as $x)
{
echo "$x ";
}
?>
