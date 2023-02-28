<?php
function test($n){
    $result = $n>30?"greater than 30":($n>20?"greater than 20":($n>10?"greater than 10":"smaller than 10"));
    echo $result.  "</br>";
}
test(45);
test(22);
test(11);   
test(9);

?>
