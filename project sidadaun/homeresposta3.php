<?php 
if ($_GET['resposta3']==15) {
echo "<div class='panel-heading'><h4>P15. Konta cidadaun sira husi distrito “Dili”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Total Cidadaun Distrito Dili</th></tr>";
	$query=mysql_query("SELECT count(a.nu_cidadaun) as TotalCidadaun FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND d.naran_dist='Dili'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[TotalCidadaun]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta3']==16) {
echo "<div class='panel-heading'><h4>P16. Konta cidadaun feto husi distrito “Liquisa”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Total Cidadaun</th></tr>";
	$query=mysql_query("SELECT count(a.nu_cidadaun) as TotalCidadaun FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND d.naran_dist='Liquisa' AND a.sexo='Feto'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[TotalCidadaun]</td></tr>";
	$nu++;
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta3']==17) {
echo "<div class='panel-heading'><h4>P17. Hamosu naran distrito no total subdistrito husi kada distrito;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Distrito</th><th>Total SubDistrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT b.naran_dist, count(a.nu_subdist) as TotalSubdistrito FROM subdistrito a, distrito b WHERE a.nu_dist=b.nu_dist GROUP BY b.naran_dist");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_dist]</td><td>$r[TotalSubdistrito]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta3']==18) {
echo "<div class='panel-heading'><h4>P18. Konta idade husi Sergio Pinto (tinan hira);</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Idade</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,year(curdate())-year(data_moris) as tinan FROM cidadaun WHERE nu_cidadaun='702070180'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[tinan] Anos</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta3']==19) {
echo "<div class='panel-heading'><h4>P19. Fo sai naran cidadaun, idade husi cidadaun hotu;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>Idade</th></tr></thead><tbody>";
	$query=mysql_query("SELECT naran_cidadaun,year(curdate())-year(data_moris) as tinan FROM cidadaun");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[tinan] Anos</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta3']==20) {
echo "<div class='panel-heading'><h4>P20. Fo sai loron moris husi Sergio Pinto;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Loron Moris</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,dayname(data_moris) as loron_moris FROM cidadaun WHERE nu_cidadaun='702070180'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[loron_moris]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta3']==21) {
echo "<div class='panel-heading'><h4>P21. Fo sai data moris husi Sergio Pinto;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Naran Cidadaun</th><th>Loron Moris</th></tr>";
	$query=mysql_query("SELECT naran_cidadaun,day(data_moris) as data_moris FROM cidadaun WHERE nu_cidadaun='702070180'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[naran_cidadaun]</td><td>$r[data_moris]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
?>
