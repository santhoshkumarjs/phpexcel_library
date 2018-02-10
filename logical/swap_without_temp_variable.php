<?php
  // Swap the value without using temp variable
  
  $a	=	-1;
  $b	=	-2;
  
  echo "a = ".$a."</br>";
  echo "b = ".$b."</br>";
  echo "-----------------</br>";
  list($b, $a) = array($a, $b);
  
  echo "a = ".$a."</br>";
  echo "b = ".$b;
  
?>