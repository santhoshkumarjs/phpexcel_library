<?php
//https://www.youtube.com/watch?v=XRAlEbVL8vQ

$test = array("discussion_dataa" => array("17-03-2018" =>array("discussions" => array(array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => ""),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"))),"16-03-2018" => array("discussions" => array(array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"), array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf",	"reply_msg" => ""),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj"),array("sender_msg" => "santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg" => "kasdflkjasldfj")))) );

echo json_encode($test); exit;
echo "<pre>"; print_r($test); exit;
$sample_array = array("key1"=>array("key2"=>array("key8"=>"key2value","key3value","key9"=>array("9tharray")),"key3"=>array("3santhsoh","3kumar"),"key4"=>array("4santhsoh","4kumar"),"key7"=>array("7santhsoh","7kumar"),"key5"=>array("santhsoh","kumar"),),"key6"=>"name");
echo "<pre>"; print_r($sample_array);
echo "</br>-----------------------</br>";
$test = testfunction($sample_array, array("key1","key2","key9"), '');
echo "<pre>"; print_r($test);
function testfunction($arr, $values, $default=''){
	$array = $arr;
	if(is_array($values)){
		/*
		foreach($array as  $value){
			echo "<pre>"; print_r($value);
			foreach($values as $k => $v){
				if(isset($value[$v])){
					if(is_array($value[$v])){
						$array = $value[$v];
						break;
					}
				}
			}
			//echo "<pre>"; print_r($key);
			//echo "<pre>"; print_r($value);
		}
		*/
		foreach($array as $value){
			
			foreach($values as $k => $v){
				echo "</br>-------$v--------</br>";
				if(isset($value[$v])){
					if(is_array($value[$v])){
						$value = $value[$v];
						echo "</br>******** $v *********</br>";
						echo "<pre>"; print_r($array);
						continue;
					}
				}
			}
		}
		return $value;
	}else{
		return (isset($array[$values]) ? $array[$values] : $default);
	}
}
?>