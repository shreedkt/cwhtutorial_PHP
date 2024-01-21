<?php
   echo "Welcome to multi Dimensional arrays in php <br>";

  //  $multiDim = array(
  //   array(2,5,7,8),
  //   array(1,2,3,1),
  //   array(4,5,0,1)
  //  );

  $multiDimm = array(
    array(
      array(2,5,7,8),
      array(1,2,3,1),
      array(4,5,0,1),
      array(4,3,2,1)
    )
   );

  //  echo var_dump($multiDim);
  // echo $multiDim[1][2];

  // printing the contents of 2 dimenstional array
  // for ($i=0; $i < count($multiDim); $i++) { 
  //   echo var_dump($multiDim[$i]);
  //   echo "<br>";
  // }

  // for ($i=0; $i < count($multiDim); $i++) { 
  //   for ($j=0; $j < count($multiDim[$i]); $j++) { 
  //     echo $multiDim[$i][$j];
  //     echo ",";
  //   }
  //   echo "<br>";
  // }

  for ($i=0; $i < count($multiDimm); $i++) { 
    for ($j=0; $j < count($multiDimm[$i]); $j++) {
       for ($k=0; $k < count($multiDimm[$j]); $k++) { 
        echo $multiDimm[$i][$j][$k];
        echo ",";
       }
       echo "<br>";
    }
  }


?>