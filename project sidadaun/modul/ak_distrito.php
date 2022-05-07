<?php
	include "../koneksaun.php";
	
	$module=$_GET['module'];
	$act=$_GET['act'];
	
	if ($module=='distrito' AND $act=='update'){
	 	mysql_query("UPDATE distrito SET naran_dist='$_POST[naran_dist]' WHERE nu_dist='$_POST[nu_dist]'") or die ("".mysql_error());
		
	header('location:../'.$module.'.html'); 
}
?>
