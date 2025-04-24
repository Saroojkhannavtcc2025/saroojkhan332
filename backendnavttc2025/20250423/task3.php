<?php

function greet($age, $nationality){
    if($age<= 18){
        if ($nationality == "pakistan"){
            echo "You are eligible ";
        }else{
            echo "You are not eligible ";
        }
    }
}
greet (16,"pakistan");

?>