<?php
function totalSubjectMarks ($eng,$maths,$acconting,$chem,$sst){
    $total = $eng+ $maths + $acconting + $chem + $sst;
    return $total;
}

function AverageSubjectMarks ($eng,$maths,$acconting,$chem,$sst){
    $total = ($eng+ $maths + $acconting + $chem + $sst)/5;
}
function checkGrade ( $totalMarks ){
   if($totalMarks > = 90){
    return"You have passed A+";
   }elseif  ($totalMarks > =80){
    return"You have passed A";
   }elseif ($totalMarks > =70){
    return"You have passed B";
   }else{
    return "fail";
   }
}
$eng = 50;
$maths =55;
$acconting = 20;
$chem =15;
$sst =20;

$total =totalSubjectMarks($eng,$maths,$acconting,$chem,$sst);
echo $total;
echo "<hr>";
echo AverageSubjectMarks($eng,$maths,$acconting,$chem,$sst);
echo "<hr>";
echo checkGrade($total);

?>




