<?php 

$resultArr = array(
	array('status'=>1,'link'=>'grp_123','oid'=>121),
	array('status'=>1,'link'=>'grp_123','oid'=>122),
	array('status'=>1,'link'=>'grp_123','oid'=>123),

	array('status'=>0,'link'=>'grp_124','oid'=>131),
	array('status'=>0,'link'=>'grp_124','oid'=>132),
	array('status'=>0,'link'=>'grp_124','oid'=>133),

	array('status'=>1,'link'=>'grp_125','oid'=>141),
	array('status'=>1,'link'=>'grp_125','oid'=>142),
	array('status'=>0,'link'=>'grp_125','oid'=>143),

	array('status'=>1,'link'=>'grp_126','oid'=>151),
	array('status'=>0,'link'=>'grp_126','oid'=>152),
	array('status'=>1,'link'=>'grp_126','oid'=>153),

	array('status'=>0,'link'=>'grp_127','oid'=>161),
	array('status'=>1,'link'=>'grp_127','oid'=>162),
	array('status'=>1,'link'=>'grp_127','oid'=>163),

	);
	
 echo "<pre>";
 
$finalArr = array();
foreach($resultArr as $data) {
	$tmp = array();
	$link = $data['link'];
	
	$finalArr[$link]['status'] = (isset($finalArr[$link]['status']) && $finalArr[$link]['status'] == 1) ? 1 : $data['status'];
	$finalArr[$link]['link'] = $link;
	$finalArr[$link]['oid'] = $data['oid'];
	
	if($data['status'] == 1) {	
		$finalArr[$link]['grp'][] = $data;
	}
}  
  
print_r($finalArr);
 

 ?>