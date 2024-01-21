<?php
 echo "Welcome to the PHP Functions <br>";

//  function processMarks($marksArr){
  // $sum = 0;
  // foreach ($marksArr as $value){
    // $sum += $value;
  // }
  // return $sum;
//  }

 function avgMarks($marksArr){
  $sum = 0;
  $i = 1;
  foreach ($marksArr as $value){
    $sum += $value;
    $i++;
  }
  return $sum/$i;
 }

$rohanDas = [34,98,45,12,98,93];
// $sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$deepak =[91,92,93,99,41,90];
// $sumMarksdeepak = processMarks($deepak);
$sumMarks = avgMarks($rohanDas);

echo "Total marks avg scored by rohan out of 600 is $sumMarks  <br>";
echo "Total marks avg scored by deepak out of 600 is $sumMarks "
?>