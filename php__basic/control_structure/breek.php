<?php
//break statement is used to terminate the loop or switch statement before it has completed its normal cycle.
// When a break statement is encountered inside a loop, the loop is immediately terminated, and the
for($i=1;$i<=10;$i++){
    if($i==4){
        break;
    }
    echo $i."\n";
}

?>