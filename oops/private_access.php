<?php
  class Visiblity{
    public $foo = '';
    public function __construct($a){
	   $this->foo = $a;
	}
	
	private function Small(){
     	 echo "Call private method";
	}
	
	public function Big(Visiblity $ob){
		var_dump($ob->foo);
		$ob->foo = "hello";
		var_dump($this->foo);
		$ob->Small();
	}
  }
  
  $obj = new Visiblity("one");
  $obj->Big(new Visiblity("two"));
  
?>