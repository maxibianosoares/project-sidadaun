<?php
session_start();

	include "../koneksaun.php";
	
	$module=$_GET['module'];
	$act=$_GET['act'];
	
	if ($module=='cidadaun' AND $act=='delete'){
		mysql_query("DELETE FROM cidadaun WHERE nu_cidadaun='$_GET[nucidadaun]'");
		header('location:../'.$module.'.html');
	}
	
	elseif ($module=='cidadaun' AND $act=='input'){	  
		$data=$_POST['tinan'].'-'.$_POST['fulan'].'-'.$_POST['loron'];
	 	mysql_query("INSERT INTO cidadaun (nu_cidadaun,naran_cidadaun,sexo,data_moris,nu_suco) 
		VALUES('$_POST[nu_cidadaun]','$_POST[naran_cidadaun]','$_POST[sexo]','$data','$_POST[nu_suco]')") or die ("".mysql_error());
	 	header('location:../'.$module.'.html');
	
	}
	elseif ($module=='cidadaun' AND $act=='update'){
		$data=$_POST['tinan'].'-'.$_POST['fulan'].'-'.$_POST['loron'];	  
		mysql_query("UPDATE cidadaun SET naran_cidadaun='$_POST[naran_cidadaun]', sexo='$_POST[sexo]', data_moris='$data', nu_suco='$_POST[nu_suco]' WHERE nu_cidadaun='$_POST[nu_cidadaun]'") or die ("".mysql_error());
		header('location:../'.$module.'.html');
}
?>
