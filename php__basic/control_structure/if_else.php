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


$age=10;
$isIdCard=true;
if($isIdCard)
if($age>=18)
   echo "you are to vote";


elseif($age<=18)
   echo "the age is less than 18 not vote"

else
   echo " you are not to vote";



?>