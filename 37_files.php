<?php
echo "Welcome to Writes file in PHP <br>";

// Writing to a file in PHP
$fptr = fopen("myfile1.txt", "w");
fwrite($fptr, "This senances i want to add in the myfile1.txt \n");

fwrite($fptr,"Another Text i want to add\n");
fwrite($fptr, "Third Line i wnat to add\n");
fclose($fptr);

//Appending to a file in PHP
$fptr = fopen("myfile1.txt", "a"); // a = append means it add lines or sentances at the End.
fwrite($fptr, "This is being appended to the file \n");
fclose($fptr);

?>