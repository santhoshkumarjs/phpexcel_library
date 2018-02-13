<?php
$a =5;// 
$b =6;// 


echo "--------- BEFORE SWAPING -----------</br>";
echo "A value is ".$a."</br>";
echo "B value is ".$b."</br>";

// LOGIC ONE USING XOR OPERATOR
$a = $a ^ $b; // 3
$b = $a ^ $b; // 5
$a = $a ^ $b; // 6

echo "------------ XOR SWAPING --------------</br>";
echo "A value is ". $a."</br>";
echo "B value is ". $b."</br>";


/*
echo "------------ ADDITION & SUBSTRACTION SWAPPING -----------------</br>";
$a = ($a + $b) - $a;
$b = ($a + $b) - $b;
echo "A value is ". $a."</br>";
echo "B value is ". $b."</br>";

echo "------------  DIVISION & MULTIPLICATION SWAPPING -----------------</br>";

$a = ($a * $b) / $a;
$b = ($a * $b) / $a;
echo "A value is ". $a."</br>";
echo "B value is ". $b."</br>";*/
?>
