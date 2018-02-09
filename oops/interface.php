<?php
 interface interfaceA{
	  public function getname($a);
 }
 interface interfaceB{
	 public function gettest($b);
 }
 class Interfaceclass implements interfaceA, interfaceB{
	 public function getname($a){
		 echo $a."</br>";
	 }
	 public function gettest($b){
		 echo $b;
	 }
 }
 
 $obj = new Interfaceclass;
 $obj->getname("santhosh");
 $obj->gettest("mytest");
?>