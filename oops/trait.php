<?php
//The Idea that multiple inheritence is not supported is correct but with tratits this can be reviewed.
  trait TraitA{
     public function hello(){
	   echo "Hello World";
	 }
  }
  
  trait TraitB{
    public function hello(){
	  echo "Hello World2";
	}
  }
  
  class UseTrait{
	  use TraitA, TraitB{
		  TraitA::hello insteadof TraitB;
	  }
	  public function display(){
		$this->hello();
		
	  }
  }
  
  $obj = new UseTrait;
  $obj->display();
  
?>