<?php 
/* 
Operators in PHP
1. Arithmetic Operator
2. Assignment Operator
3. Comparision Operator
4. Logical Operator
*/
$a = 45;
$b = 9;
echo ("For a + b, the result is ". ($a+$b)). "<br>";
echo ("For a - b, the result is ". ($a-$b)). "<br>";
echo ("For a * b, the result is ". ($a*$b)). "<br>";
echo ("For a / b, the result is ". ($a/$b)). "<br>";
echo ("For a % b, the result is ". ($a%$b)). "<br>";
echo ("For a ** b, the result is ". ($a**$b)). "<br>";

// 2. Asignment Operator

// $x = $a;
// echo "For x, the value is ". $x . "<br>";
$a += 6;
echo "For a, the value is ".$a . "<br>";

// 3.Comparision Operator
$x= 7;
$y = 9;

echo "For x == y, the result is ";
echo var_dump  ($x==$y) ;
echo "<br>";

echo "for x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";

// 4. Logical Operators

$m= true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m <> $n);
echo "<br>";

?>