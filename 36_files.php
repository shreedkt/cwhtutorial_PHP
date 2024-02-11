<?php
$fptr = fopen("myfile.txt", "r");

// echo fgets($fptr);// fgets function give  the first line of text file.
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
//fclose($fptr); // close the file after reading all lines.

/* 
//Reading a file line by line
while($a= fgets($fptr)){
  echo $a;
}
echo " <br> End of this file has been Reached";
*/


//Reading a file character by Character 
// echo fgetc($fptr);
// while($a= fgets($fptr)){
//   echo $a;
// // break;
// }
// echo " <br> End of this file has been Reached";

// Write a program which reads the content of a file until . has been encountered

while($a = fgetc($fptr)){
  echo $a;
  if($a == "."){ // print till full stop is not encounter
    break;
  }
}
fclose($fptr);
?>