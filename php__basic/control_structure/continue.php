<?php
//continue statement is used to skip the current iteration of a loop and move to the next iteration.
// When a continue statement is encountered inside a loop, the remaining code in the current iteration is skipped, and the loop proceeds to the next iteration.

for($i=1;$i<=10;$i++){
    if($i==4){
        continue;
    }
    echo $i."\n";
}


?>