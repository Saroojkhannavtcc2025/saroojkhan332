<?php
$name = "Sarooj Khan";
$age = "19";
$department = "NAVTTC";
$city  = "Hyderabad";
$num1 = 15;
$num2 = 5;
$studentName = "Sarooj";
$courseName = "WebDevelopment";
$batchYear = "2025";







?>
<html>
    <head></head>
    <body>
        <div>
            <h1>Hello i am <?= $name?> </h1>
            <h3>I am  <?= $age?> Years old</h3>
            <h3>I am a student of <?= $department?> </h3>
            <h3>I live in   <?= $city?></h3>
            <hr>
            <p>sum  <?= $num1 + $num2;?></p>
            <p>Sub<?= $num1 - $num2; ?> </p>
            <p>Multiply <?= $num1 * $num2; ?> </p>
            <p>Div <?= $num1 / $num2; ?> </p>
            <hr>
            <h2>Welcome Sir Abrar to CIT,batch 2025 <br><?= $studentName?> <?= $courseName ?> <?= $batchYear ?></h2>


       
       
          </div>
    </body>
</html>