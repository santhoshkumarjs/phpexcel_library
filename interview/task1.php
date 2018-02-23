<?PHP
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

	$final_data	=	array();
	foreach($resultArr as $resultData){
		$link	=	$resultData['link'];
		$status	=	$resultData['status'];
		$oid	=	$resultData['oid'];
		$final_data[$link]["status_".$status]	=	array("status"=>$status, "link" => $link,"oid"=>array());
		if(isset($final_data[$link])){
			//$final_data[$link]['grp'][] = array("status"=>$status, "link" => $link,"oid"=>$oid);
			//$final_data[$link]["status_".$status] = 
			//array_push($final_data[$link]["status_".$status], array("grp"=>$resultData));
			
			$tmp_data[$link][] = $oid;
			//echo "<pre>"; print_r($tmp_data);
			array_push($final_data[$link]["status_".$status]['oid'],$tmp_data[$link]);
		}
		
		
	}
	
	echo "<pre>"; print_r(array_values($final_data));
?>