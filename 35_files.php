<?php

$fptr = fopen("myfile.txt", "r"); // Here fptr  is a file pointer to read the contents of myfile.txt
// mode a= append, w= write, r= read;
// echo var_dump($fptr);
if(!$fptr){
  die("Unable to open this file. Please enter a valid FileName");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr); // fclose basically close the Open file it takes file pointer  as argument
echo $content;

?>