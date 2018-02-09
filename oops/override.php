<?php
   class ParentClass{
	   protected function getName(){
		   echo "My name is santhosh";
	   }
   }
   
   class ChildClass extends ParentClass{
	   public function getName(){
		   parent::getName();
		   echo "</br> My name from childclass";
	   }
   }
   
   $obj = new ChildClass;
   $obj->getName();
?>