<?php
//An array in PHP is a data structure that can hold multiple values under a single name.
// Each value in the array can be accessed using its corresponding index or key.
//  There are three types of arrays in PHP:
// 1. Indexed Arrays: Arrays with a numeric index.
// 2. Associative Arrays: Arrays with named keys.
// 3. Multidimensional Arrays: Arrays containing one or more arrays.
//1. Indexed Arrays

$arr=array("Dereje","gebre","jone","bro");
echo $arr[0]."</br>";
echo $arr[1]."</br>";       
echo $arr[2]."</br>";
echo $arr[3]."</br>";
$scores=[90,80,70,60];
echo $scores [0]."</br>";
echo $scores [1]."</br>";
echo $scores [2]."</br>";

//2. Associative Arrays
// Associative arrays use named keys that you assign to them.
// Example:

$age=array("Dereje"=>25,"gebre"=>30,"jone"=>28);
echo $age["Dereje"]."</br>";
echo $age["gebre"]."</br>";
echo $age["jone"]."</br>";
// example:2
// Using the shorthand array syntax

$products=["Labtop"=>15000,"memory"=>250,"monitor"=>450000];
var_dump($products);
echo "</br>";
$php=["Title"=>"Php associative array","Description"=>"This is a php associative array example"];
var_dump($php);
echo "</br>";
