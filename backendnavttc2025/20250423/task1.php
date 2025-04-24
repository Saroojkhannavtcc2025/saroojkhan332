<?php

function greet($num) {
    if ($num == 0) {
        echo "$num is Zero and Even";
    } elseif ($num > 0) {
        if ($num % 2 == 0) {
            echo "$num  Positive Even number";
        } else {
            echo "$num  Positive Odd number";
        }
    } else {
        if ($num % 2 == 0) {
            echo "$num  Negative Even number";
        } else {
            echo "$num  Negative Odd number";
        }
    }
}
 greet (5);  
greet (-7);  
greet (0); 
?>


