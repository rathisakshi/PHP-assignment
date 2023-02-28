<?php
$total=0;
for($i=1;$i<11;$i++){
    if($i%2!=0){
        $total =$total +$i;
        
    }
}
echo "The sum of odd numbers is:" .$total;