<?php
  echo "Welcome to scope and local/global vars in php <br>";

  $a = 98;// Global Variable 
  $b = 15;
  echo $a;
  function myfunction(){
    //$a= 10; // Local Variable 
    global $a,$b; // Give me the acces to the global variable
    $a = 99;
    $b = 999;
    echo "<br> The Value of a is $a  and the value of b is $b <br>";
  }
  myfunction();
  echo "The value of a is $a  and the value of c is $b";
  // echo var_dump($GLOBALS);// Give all Global variable
  echo "<br>";
  echo var_dump($GLOBALS["a"]);
  echo var_dump($GLOBALS["b"]);
?>