<?php
//anonymous function is a function that has no name.
// It is also known as a closure or lambda function.
// Anonymous functions are often used as callback functions or as arguments to other functions.
//finction is assigned to a variable
// Anonymous function is finally using semicolon at the end of the function definition.
// example 1:
$great=function($name){
    echo "Hello, ".$name."!"."</br>";
};

$great("Dereje");
// example 2:
$message="Welcome to PHP anonymous function example.";
$showMessage=function($name) use($message){
    // to access the variable from the parent scope, we need to use the 'global' keyword
    
    
    echo $name . " " . $message."</br>";
};
//call the anonymous function
 $showMessage("Dereje");

//  example 3:
$sum=function($a,$b){
    return $a+$b;
};
echo $sum(5,10);
?>