<?php
	include "../koneksaun.php";
	
	$module=$_GET['module'];
	$act=$_GET['act'];
	
	if ($module=='suco' AND $act=='delete'){
		mysql_query("DELETE FROM suco WHERE nu_suco='$_GET[nusuco]'");
		header('location:../'.$module.'.html');
	}
	
	elseif ($module=='suco' AND $act=='input'){	  
		mysql_query("INSERT INTO suco (nu_suco,naran_suco,nu_subdist) 
		VALUES('$_POST[nu_suco]','$_POST[naran_suco]','$_POST[nu_subdist]')");
		
		header('location:../'.$module.'.html');
	
	}
	elseif ($module=='suco' AND $act=='update'){
	  	mysql_query("UPDATE suco SET naran_suco='$_POST[naran_suco]', nu_subdist='$_POST[nu_subdist]' WHERE nu_suco='$_POST[nu_suco]'") or die ("".mysql_error());
		header('location:../'.$module.'.html');
}
?>
