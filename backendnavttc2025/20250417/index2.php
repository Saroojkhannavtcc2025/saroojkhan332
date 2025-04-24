<?php 
$dbpassword = "mypassword123";
$userenteredpass = "mypassword1234";

$check = "";

if ( $userenteredpass==$dbpassword){
  header("Location: index3.php");
  exit;
  
  
}
else {
  $check = "Passwords MisMatched";
}
?>

<html>
 <head> 
  <style>
  
   .usernteeredpass  {
    color : 'red';
    border: 2px solid red;
    text-align: center;
   }
  </style>
   
   <?php if ( $check != '' ){
     echo "<div class='usernteeredpass'>". $check ."</div>";
   }
   ?>
 </head>
 <body>

  
  