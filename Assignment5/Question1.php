<?php
function reverse($str){
    $str_new ='';
    $length = strlen($str);  
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
      $str_new = $str_new .$str[$i];  
    }  
    return $str_new;
    
    }
$str = "SakshiRathi";
print_r(reverse($str));

?>

