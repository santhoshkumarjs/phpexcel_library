<?php
 require_once "./phpexcel/Classes/PHPExcel.php";
 
 $Header = array('Name', 'Age');
 
 $data = array();

//Data to be written in the excel sheet -- Sample Data
array_push($data, array('Kiran', 	30));
array_push($data, array('Venu', 	31));
array_push($data, array('Tim', 		32));
array_push($data, array('Markus', 	33));
array_push($data, array('Catherine',34));
array_push($data, array('John', 	35));
array_push($data, array('Fred', 	36));
array_push($data, array('Nik', 		37));

//echo "<pre>";  print_r($data); exit;
 $excel_obj	=	new PHPExcel;
 $objWriter = PHPExcel_IOFactory::createWriter($excel_obj, 'Excel2007');
 
 $ActiveSheet	=	$excel_obj->setActiveSheetIndex(0);
 
//Write the Header
	$i=0;
	foreach($Header as $ind_el)
	{
		//Convert index to Excel compatible Location
		$Location = PHPExcel_Cell::stringFromColumnIndex($i) . '1';
		$ActiveSheet->setCellValue($Location, $ind_el);
		$i++;
	}
	
	//Insert that data from Row 2, Column A (index 0)
	$rowIndex=2;
	$columnIndex=0; //Column A
	foreach($data as $row)
	{			
		foreach($row as $ind_el)
		{
			$Location = PHPExcel_Cell::stringFromColumnIndex($columnIndex) . $rowIndex;
			//var_dump($Location);
			$ActiveSheet->setCellValue($Location, $ind_el); 	//Insert the Data at the specific cell specified by $Location
			$columnIndex++;
		}
		
		$rowIndex++;
		$columnIndex = 0;
	}
/* 
$rowIndex = count($data) + 3;
$Location = PHPExcel_Cell::stringFromColumnIndex(0) . $rowIndex;
$ActiveSheet->setCellValue($Location, 'AVERAGE'); 
 
//Insert Average Formula -> AVERAGE(B2:B9)
$start_row = 2;
$end_row = count($data)+1;
$formula = "=AVERAGE(B" . $start_row . ":B" . $end_row  .  ")";
 
$Location = PHPExcel_Cell::stringFromColumnIndex(1) . $rowIndex;
$ActiveSheet->setCellValue($Location, $formula);
*/
 
$randno = rand(100000, 999999);
 
$fileName = "ResultExcel-" . $randno . ".xlsx";
$folder = "Result";
 
//Create the Result Directory if Directory is not created already
if (!file_exists($folder))
	mkdir($folder);
 
$fullpath = $folder . '/' . $fileName;
$objWriter->save($fullpath);
?>