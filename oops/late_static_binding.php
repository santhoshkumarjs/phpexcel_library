<?php
  #self does not follow the rules of inheritance and it always resolves to the class in which it is used. For example – 
  #if you make a method in a parent class and call it from a child class, self will always reference the parent, instead of child.
  #late static bindings work by storing the class named
  
  class ClassA{
	  public static function who(){
		  echo __CLASS__."</br>";
	  }
	  public  function get(){
		  self::who(); // return ClassA
		  static::who(); // return ClassB
	  }
  }
  
  class ClassB extends ClassA{
	  public static function who(){
		  echo __CLASS__;
	  }
  }
  $obj = new ClassB;
  $obj->get();
?>