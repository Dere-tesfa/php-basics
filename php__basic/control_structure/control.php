<?php
$score=7;// Change this value to test different conditions
if($score>=90){
   var_dump("Grade A");
}
elseif($score>=80){
   var_dump("Grade B");
}
elseif($score>=70){
   var_dump("Grade C");
}
else{
   var_dump("Grade F");
}
?>