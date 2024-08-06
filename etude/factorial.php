<?php


function factorial($n){
    $fact=1;
    for($i=1;$i<=$n;$i++){
        $fact=$fact*$i;

    }
    echo "the factorial is : $fact";

}
factorial(5);

?>