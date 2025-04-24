<?php
function greet( $name ,$caste ){
    return "$name $caste I will meet you tomorrow";

}
$result = greet("Muskan", "khan");
?>
<html>
    <head>
    </head>
    <body>
        <h1> <?= $result ?></h1>
    </body>
</html>