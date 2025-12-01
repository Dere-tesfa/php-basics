<?php
//named function
// A function is a block of statements that can be used repeatedly in a program.
// A function will not execute immediately when a page loads.
//named function is defined using the function keyword followed by the function name and parentheses ().
// The function name is followed by a pair of parentheses () and a block of code enclosed in curly braces {}.
// To call a function, we simply use the function name followed by parentheses ().
//the name of the function is msg
function msg($name){
   echo "Hello, ".$name."!"."</br>";
}
 msg("Dereje");
 function sum($a,$b){
    return $a+$b;
 }
echo sum(5,10);
?>