<?php 
if ($_GET['resposta2']==8) {
echo "<div class='panel-heading'><h4>P8. Hamosu naran cidadaun, sexu no naran distrito husi cidadaun sira nebe laos husi distrito Lautem no Dili;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>Sexo</th><th>Naran Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_cidadaun,a.sexo,d.naran_dist FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND NOT (d.naran_dist='Lautem' OR d.naran_dist='Dili')");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta2']==9) {
echo "<div class='panel-heading'><h4>P9. Hamosu naran cidadaun, sexu no naran distrito husi cidadaun sira nebe mai husi distrito Liquisa ho Ermera nebe ho sexo Mane;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>Sexo</th><th>Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_cidadaun,a.sexo,d.naran_dist FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND (d.naran_dist='Liquisa' OR d.naran_dist='Ermera') AND a.sexo='Mane'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	$data_moris=data_tl($r['data_moris']);
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta2']==10) {
echo "<div class='panel-heading'><h4>P10. Hamosu naran cidadaun, sexo, naran suco, naran subdistrito, naran distrito husi cidadaun sira nebe ornedar tuir naran cidadaun husi A-Z;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>Sexo</th><th>Suco</th><th>SubDistrito</th><th>Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_cidadaun,a.sexo,b.naran_suco,c.naran_subdist,d.naran_dist FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist ORDER BY a.naran_cidadaun ASC");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$r[naran_suco]</td><td>$r[naran_subdist]</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta2']==11) {
echo "<div class='panel-heading'><h4>P11. Hamosu naran cidadaun nebe mai husi suco “Ponilala” nebe komesan ho letra “V”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_cidadaun FROM cidadaun a, suco b WHERE a.nu_suco=b.nu_suco AND b.naran_suco='Ponilala' AND a.naran_cidadaun LIKE 'V%'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta2']==12) {
echo "<div class='panel-heading'><h4>P12. Hamosu naran cidadaun ho subdistrito nebe ho apalidu “Lay”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Cidadaun</th><th>SubDistrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_cidadaun, c.naran_subdist FROM cidadaun a, suco b, subdistrito c WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND a.naran_cidadaun LIKE '%Lay%'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_cidadaun]</td><td>$r[naran_subdist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta2']==13) {
echo "<div class='panel-heading'><h4>P13. Konta cidadaun sira husi suco “Comoro”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Total Cidadaun Suco Comoro</th></tr>";
	$query=mysql_query("SELECT count(a.nu_cidadaun) as TotalCidadaun FROM cidadaun a, suco b WHERE a.nu_suco=b.nu_suco AND b.naran_suco='Comoro'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[TotalCidadaun]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
elseif ($_GET['resposta2']==14) {
echo "<div class='panel-heading'><h4>P14. Konta cidadaun sira husi sub-distrito “Lospalos”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<tr><th>Total Cidadaun SubDistrito Lospalos</th></tr>";
	$query=mysql_query("SELECT count(a.nu_cidadaun) as TotalCidadaun FROM cidadaun a, suco b, subdistrito c WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.naran_subdist='Lospalos'");
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$r[TotalCidadaun]</td></tr>";
	}
	echo "</table>
	</div></div>";
}
?>
