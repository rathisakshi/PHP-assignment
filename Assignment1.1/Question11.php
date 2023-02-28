<?php
$num =207;
$x=$num;
$total=0;
while ($x!=0){
$rem = $x%10;
$total =$total+$rem*$rem*$rem;
$x=$x/10;
}
if($num==$x){
    echo"Its an armstrong number";
}
else{
    echo"Its not an armstrong number";
}
?>