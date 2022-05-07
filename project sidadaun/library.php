<?php
$data_agora		= date("d");
$fln_agora 		= date("m");
$tinan_agora 	= date("Y");
$horas_agora 	= date("H:i:s");

$nrn_fln=array(1=> "Janeiru", "Fevereiru", "Marsu", "Abril", "Maiu", 
                    "Junhu", "Julhu", "Agostu", "Setembru", 
                    "Outubru", "Novembru", "Dezembru");
					

function data_tl($dt){
	$data = substr($dt,8,2);
	$fulan = getFulan(substr($dt,5,2));
	$tinan = substr($dt,0,4);
	return $data.' '.$fulan.' '.$tinan;	 
}	
	
function getFulan($fln){
	switch ($fln){
		case 1: 
			return "Janeiru";
		break;
		case 2:
			return "Fevereiru";
		break;
		case 3:
			return "Marsu";
		break;
		case 4:
			return "Abril";
		break;
		case 5:
			return "Maiu";
		break;
		case 6:
			return "Junhu";
		break;
		case 7:
			return "Julhu";
		break;
		case 8:
			return "Agostu";
		break;
		case 9:
			return "Setembru";
		break;
		case 10:
			return "Outubru";
		break;
		case 11:
			return "Novembru";
		break;
		case 12:
			return "Dezembru";
		break;
	}
}
?>
