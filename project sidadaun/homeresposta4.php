<?php 
if ($_GET['resposta4']==22) {
echo "<div class='panel-heading'><h4>P22. Fo sai fulan (naran fulan) moris husi Sergio Pinto;;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Fulan Moris</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,monthname(data_moris) as fulan_moris FROM cidadaun WHERE nu_cidadaun='702070180'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[fulan_moris]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta4']==23) {
echo "<div class='panel-heading'><h4>P23. Fo sai tinan moris husi Sergio Pinto;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Tinan Moris</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,year(data_moris) as tinan_moris FROM cidadaun WHERE nu_cidadaun='702070180'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[tinan_moris]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta4']==24) {
echo "<div class='panel-heading'><h4>P24. Fo sai naran, loron moris, data moris, fulan moris, tinan moris husi Sergio Pinto;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Data Moris</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,dayname(data_moris) as loron,day(data_moris) as data,monthname(data_moris) fulan, year(data_moris) as tinan FROM cidadaun WHERE nu_cidadaun='702070180'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[loron], $r[data] $r[fulan] $r[tinan]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta4']==25) {
echo "<div class='panel-heading'><h4>P25. Fo sai naran, loron moris, data moris, fulan moris, tinan moris husi cidadaun hotu;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>Data Moris</th></tr></thead><tbody>";
	$query=mysql_query("SELECT naran_cidadaun,dayname(data_moris) as loron,day(data_moris) as data,monthname(data_moris) fulan, year(data_moris) as tinan FROM cidadaun");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[loron], $r[data] $r[fulan] $r[tinan]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
?>
