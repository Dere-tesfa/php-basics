<?php
//Comparison operators are used to compare two values and return a Boolean result (true or false).
$x=10;
$y=20;
$value=$x==$y;//false
$value=$x==10;//true
$value=$x!=20;//true
$value=$x<>20;//true not equal to
$value=$x>20;//false
$value=$x<=10;//true
$value=$x>=20;//false
$value=$x<>$y;//true
$value=$x===10;//true // Returns True if both the operands are equal and are of the same type
$value=$x!==$y;//true

?>