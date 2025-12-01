<?php
//Arrow functions are a shorthand syntax for defining anonymous functions in PHP.
// They were introduced in PHP 7.4.
// Arrow functions use the fn keyword and have a more concise syntax compared to traditional anonymous functions.
// Arrow functions automatically capture variables from the parent scope without needing to use the 'use' keyword.
//syntax:
// variable=fn(parameter_list) => expression;
//
// Example 1:
$sum=fn($a,$b)=>$a+$b;
echo $sum(5,10)."</br>";
// Example 2:
$msg=fn($name)=>"Hello, ".$name."!"."</br>";
echo $msg("Dereje");


?>