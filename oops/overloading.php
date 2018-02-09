<?php

# Overloading properties via the __get(), __set(), __isset() and __unset() methods
# Overloading methods via the __call() and __callStatic() methods

class OverloadingClass{
	private $data 	= array();
	public $inital = "kumar";
	
	public function __set($name, $value){
		$this->data[$name] = $value;
	}
	
	public function __get($name){
		if(array_key_exists($name, $this->data)){
			return $this->data[$name];
		}
		return "key not exists";
	}
	
	public function __isset($inital){
		echo "is isset ".$inital;
		return isset($this->$inital);
	}
	
	public function __unset($name){
		echo "unset this value".$name;
		unset($this->data[$name]);
	}
}

$obj	=	new OverloadingClass;
$obj->name = "santhosh";
echo $obj->name;

if(isset($obj->inital)){
	echo $obj->inital;
}

unset($obj->name);

echo "</br> ------------------------------------------------------ </br>";

class OverloadingMethod{
	public function __call($name, $arguments){
		echo "Try to call this method.".$name." with arguments ".implode(",",$arguments)."</br>";
		
	}
	public static function __callStatic($name, $arguments){
		echo "Try to call static method.".$name." with arguments ".implode(",",$arguments);
	}
}

$obj = new OverloadingMethod;
$obj->Myclass("santhosh", "kumar");
OverloadingMethod::Myclass("santhos","kumar");
?>