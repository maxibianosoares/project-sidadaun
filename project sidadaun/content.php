<?php
if ($_GET['module']=='home'){ 
	include 'home.php';
}
elseif ($_GET['module']=='homeresposta'){ 
	include 'homeresposta.php';
}
elseif ($_GET['module']=='homeresposta2'){ 
	include 'homeresposta2.php';
}
elseif ($_GET['module']=='homeresposta3'){ 
	include 'homeresposta3.php';
}
elseif ($_GET['module']=='homeresposta4'){ 
	include 'homeresposta4.php';
}
elseif ($_GET['module']=='distrito') {
	include 'modul/distrito.php';
}
elseif ($_GET['module']=='subdistrito') {
	include 'modul/subdistrito.php';
}
elseif ($_GET['module']=='suco') {
	include 'modul/suco.php';
}
elseif ($_GET['module']=='cidadaun') {
	include 'modul/cidadaun.php';
}
?>
