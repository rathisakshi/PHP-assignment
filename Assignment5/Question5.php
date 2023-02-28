<?php
for($i=1;$i<=50;$i++){
    if($i%5==0 and $i%3==0){
        print($i ."FizzBuzz" ."\n");
    }
    else{
    if($i%3==0){
        print($i ."Fizz" ."\n");
    }
    if($i%5==0){
        print($i. "Buzz" ."\n");
    }
 
}
}
?>
