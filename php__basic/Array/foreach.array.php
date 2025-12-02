<?php
//foreach array loop is used to iterate over each element in an array.
// It provides a simple and convenient way to access and manipulate array elements without needing to manage loop counters or indices manually.
// Syntax:
// foreach($array_name as $element){
//     // code to be executed for each element
// }
$products=["Labtop"=>15000,"memory"=>250,"monitor"=>450000];
foreach($products as $values){
    echo "The price value is:".$values."</br>";
    
}

?>