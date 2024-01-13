<?php
// $a = 65;
// $b = 45;
// if($a>78){
//   echo "A is greater than 78";
// } else{
//   echo "A is not greater than 78";
// }

/*$age = 14;
if($age>18) {
  echo "You Can Drink water, Tea & Alcohol";
}
elseif($age>13){
  echo "You can Drink Water and Tea Only";
}
else{
  echo "You can Drink Only Water";
} */

/* Quick quiz - Create an if if else ladder useing more than one elseif write a program to allow a driver to drive only when his age is greater than 25 and less than 65. */

$age = 66;
if($age<25){
  echo "You are too young to drive. ";
} elseif ($age > 65){
  echo "You are too Old to drive";
} else {
  echo "You can Drive.";
}

echo "Done";
?>