<?php
	include "../koneksaun.php";
	
	$module=$_GET['module'];
	$act=$_GET['act'];
	
	if ($module=='subdistrito' AND $act=='delete'){
		mysql_query("DELETE FROM subdistrito WHERE nu_subdist='$_GET[nusubdist]'");
		header('location:../'.$module.'.html');
	}
	
	elseif ($module=='subdistrito' AND $act=='input'){	  
		mysql_query("INSERT INTO subdistrito (nu_subdist,naran_subdist,nu_dist) 
		VALUES('$_POST[nu_subdist]','$_POST[naran_subdist]','$_POST[nu_dist]')");
		
		header('location:../'.$module.'.html');
	
	}
	elseif ($module=='subdistrito' AND $act=='update'){
	  	mysql_query("UPDATE subdistrito SET naran_subdist='$_POST[naran_subdist]', nu_dist='$_POST[nu_dist]' WHERE nu_subdist='$_POST[nu_subdist]'") or die ("".mysql_error());
		header('location:../'.$module.'.html');
}
?>
