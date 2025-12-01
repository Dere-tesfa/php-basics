<?php
//for each is used to loop through array
//it reads every element one by one


//syntax
//Example 1:
$colors = ["red", "green", "blue"];

foreach ($colors as $color) {
    echo $color . "\n";
}
//Example 2: Key → Value loop
$student=[
"name"=>"dereje",
"age"=>22,
"city"=>"woldia"

];
foreach($student as $key=>$value){
    echo $key .":" .$value."\n";
}

//$key = array index

//$value = data stored at that index
//Alternate Syntax with endforeach
$fruits=["apple","banana","orange"];
foreach($fruits as $fruit);
echo $fruit."<br>";

?>