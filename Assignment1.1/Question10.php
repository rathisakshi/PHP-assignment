<?php
$num1 = 10;
$num2 =20;
print("The original value of first number is" . $num1 . "</br>");
print("The original value of first number is" . $num2 . "</br>");
$temp = $num1;
$num1=$num2;
$num2 = $temp;
print("The new value of first number is" . $num1 . "</br>");
print("The new value of first number is" . $num2 . "</br>");

