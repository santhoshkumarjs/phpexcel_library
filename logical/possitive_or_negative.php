<?php
 // Given number is possitive or negative
 try{
	$a	=	-1;
	$c  = gmp_sign($a);
	if($c === -1){
		throw new EXCEPTION("Given number is negative");
	}else if($c === 1){
		throw new EXCEPTION("Given number is positive");
	}else if($c === 0){
		throw new EXCEPTION("Given number is zero");
	}
 }catch(EXCEPTION $e){
	 echo $e->getMessage();
 }
?>