<?php
$var = 143;
$sum=0;
while($var!=0){
$rem = $var%10;
$sum = $sum+$rem;
$var = $var/10;
}
echo($sum);
?>

