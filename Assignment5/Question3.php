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
$str = 'madam';
$str2 = reverse($str);
if($str==$str2){
    echo"This string is a palindrome";
}
else{
echo"This string is not a palindrome";
 }


?>