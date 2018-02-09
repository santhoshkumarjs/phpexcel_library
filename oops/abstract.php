<?php

# ABSTRACT method cannot declare private
# abstract method declare private or protected
# abstract you can declare property without abstract, if you used it will throw fatal error.
# abstract child class you used with less visiblity but you cannot use hight visiblity like protected, private

 abstract class MyAbstractClass{
	 public $a;
	 abstract protected function getvalue();
	 abstract protected function prefixvalue($prefix);
	 
	 public function printout(){
		 $this->getvalue();
	 }
 }
 
 class extendAbstractclass extends MyAbstractClass{
	 protected function getvalue(){
		 echo  "Construct1</br>";
	 }
	 
	 public function prefixvalue($prefix){
		 echo "{$prefix} Construct";
	 }
 }
 
 $obj = new extendAbstractclass;
 $obj->printout();
 $obj->prefixvalue("foo");
 
?>