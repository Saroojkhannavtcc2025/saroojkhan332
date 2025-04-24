<?php 
$name = "sarooj khan";

$fruit=['Apple,Mango'];
$num1 = 100;
$num2 = 50;




?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>My Name is <?= $name; ?> </h1>
<hr>
<h3>Result</h3>

  <p>Sum   <?= $num1 + $num2; ?></p>
  <p>Subtraction <?= $num1 - $num2; ?> </p>
  <p>Multiplication  <?= $num1 * $num2; ?> </p>
  <p> Division <?= $num1 / $num2; ?> </p>
 

 
</body>
</html>