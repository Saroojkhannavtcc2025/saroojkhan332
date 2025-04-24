<?php

function greet($username, $password) {
    $validUsername = "admin sarooj";
    $validPassword = "pass12345";

    if ($username == $validUsername) {
        if ($password == $validPassword) {
            echo "Login Successful Welcome, $username";
        } else {
            echo "Login Failed  Incorrect password";
        }
    } 
}

 

greet("admin sarooj", "pass12345");  

     

?>




