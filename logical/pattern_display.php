<?php
  $length = 5;
  for($i=0; $i <= $length; $i++){
    for($j=0; $j <= $i; $j++){
	  echo '&nbsp&nbsp&nbsp';
	}
	for($j=0; $j <= $length-$i; $j++){
	  echo chr(65 + $j)." ";
	}
	for($k=$length-$i-1; $k >= 0; $k--){
	  echo chr(65 + $k)." ";
	}
	echo "</br>";
  }
?>