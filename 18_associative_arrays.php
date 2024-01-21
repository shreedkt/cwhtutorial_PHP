<?php 

  echo "Welcome to Associative Arrays <br>";
//these are calle indexed arrays
  $arr = array('this','that','what','deepak');
  echo $arr['0'];
  echo $arr['1'];
  echo $arr['2'];
  echo $arr['3'];
  echo "<br>";

  //Associative Arrayys
  $favGame = array('shubham'=>'cricket', 'diksha'=>'badminton', 'ranjan'=>'chess',8=>'this');

  foreach ($favGame as $key => $value) {
    echo "<br> favorite game of $key is $value";
  }

  // echo $favGame['shubham'];
  // echo "<br>".$favGame['disha'];
  // echo "<br>".$favGame[8];
?>