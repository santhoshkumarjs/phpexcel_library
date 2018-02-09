<?php
 class Firstclass{
	 public function getname(){
		 echo "test santhosh";
	 }
	 final public function getclass(){
		 return "name";
	 }
 }
 
 class SecondClass extends Firstclass{
	 public function getname(){
		 echo "myname";
	 }
 }
 
 $obj = new SecondClass;
 $obj->getname();
?>