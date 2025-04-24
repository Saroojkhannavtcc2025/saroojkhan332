<?php



function greet($num1, $num2, $a) {
    if ($a == '+') {
        echo "Result  " . ($num1 + $num2);
    } else {
        if ($a == '-') {
            echo "Result  " . ($num1 - $num2);
        } else {
            if ($a == '*') {
                echo "Result  " . ($num1 * $num2);
            } else {
                if ($a == '/') {
                    if ($num2 != 0) {
                        echo "Result  " . ($num1 / $num2);
                    } 
                }
            }
        }
    }
}


greet (5, 5, '+');  
greet (5,5, '-');
greet (5,5, '*');
greet (5,5, '/');
?>
