<?php
  class Add{
	public function __construct($arg1){
	  $args		=	func_get_args();
	  $num_args	=	func_num_args();
	  $m		=	'';
	  if(method_exists($this, $m='__construct'.$num_args)){
		   call_user_func_array(array($this, $m), $args);
	  }		  
	}
	
	private function __construct1($arg1){
		echo "Argument is ".$arg1."</br>";
	}
	private function __construct2($arg1, $arg2){
		echo "Argument is ".$arg1." ".$arg2."</br>";
	}
	
	protected function __construct3($arg1, $arg2, $arg3){
		echo "Argument is ".$arg1." ".$arg2." ".$arg3."</br>";
	}
	
	public function __destruct(){
		echo "destruct function called</br>";
	}
  }
  
  $one		=	new Add('santhosh');
  $one		=	new Add('santhosh', 'kumar');
  $one   	=	new Add('santhosh', 'kumar', 'MCA');
?>