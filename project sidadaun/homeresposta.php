<?php 
if ($_GET['resposta']==1) {
echo "<div class='panel-heading'><h4>P1. Hamosu naran distrito, nu_subdistrito no naran subdistrito;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Distrito</th><th>Nu. SubDistrito</th><th>Naran SubDistrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT naran_dist,nu_subdist,naran_subdist FROM distrito, subdistrito WHERE distrito.nu_dist=subdistrito.nu_dist");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_dist]</td><td>$r[nu_subdist]</td><td>$r[naran_subdist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==2) {
echo "<div class='panel-heading'><h4>P2. Hamosu cidadaun sira no naran distrito husi distrito Lautem;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Nu. Cidadaun</th><th>Naran Cidadaun</th><th>Sexo</th><th>Data Moris</th><th>Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.nu_cidadaun,a.naran_cidadaun,a.sexo,a.data_moris,d.naran_dist FROM cidadaun a,suco b,subdistrito c,distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND d.naran_dist='Lautem'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	$data_moris=data_tl($r['data_moris']);
	echo "<tr><td>$nu</td><td>$r[nu_cidadaun]</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$data_moris</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==3) {
echo "<div class='panel-heading'><h4>P3. Hamosu naran sub-distrito no naran distrito husi distrito Ermera;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran SubDistrito</th><th>Naran Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT naran_dist,naran_subdist FROM distrito, subdistrito WHERE distrito.nu_dist=subdistrito.nu_dist AND naran_dist='Ermera'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_subdist]</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==4) {
echo "<div class='panel-heading'><h4>P4. Hamosu suco sira ho naran distrito nebe laos husi municipiu Baucau;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Naran Suco</th><th>Naran Distrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.naran_suco,c.naran_dist FROM suco a, subdistrito b, distrito c WHERE a.nu_subdist=b.nu_subdist AND b.nu_dist=c.nu_dist AND c.naran_dist<>'Baucau'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[naran_suco]</td><td>$r[naran_dist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==5) {
echo "<div class='panel-heading'><h4>P5. Hamosu cidadaun sira ho naran suco husi suco Riheu;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Nu. Cidadaun</th><th>Naran Cidadaun</th><th>Sexo</th><th>Suco</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.nu_cidadaun,a.naran_cidadaun,a.sexo,b.naran_suco FROM cidadaun a, suco b WHERE a.nu_suco=b.nu_suco AND b.naran_suco='Riheu'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[nu_cidadaun]</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$r[naran_suco]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==6) {
echo "<div class='panel-heading'><h4>P6. Hamosu cidadaun nebe ho sexo “Mane” nebe mai husi suco Fuiloro;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Nu. Cidadaun</th><th>Naran Cidadaun</th><th>Sexo</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.nu_cidadaun,a.naran_cidadaun,a.sexo FROM cidadaun a, suco b WHERE a.nu_suco=b.nu_suco AND b.naran_suco='Fuiloro' AND a.sexo='Mane'");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[nu_cidadaun]</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
elseif ($_GET['resposta']==7) {
echo "<div class='panel-heading'><h4>P7. Hamosu dados cidadaun hotu ho naran sub-distrito nebe mai husi sub-distrito “Quelicai” ho “Bazartete”;</h4></div>
	<div class='panel-body'><div class='table-responsive'>
	<table id='example' class='table table-striped table-bordered table-hover' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th>Nu. Cidadaun</th><th>Naran Cidadaun</th><th>Sexo</th><th>SubDistrito</th></tr></thead><tbody>";
	$query=mysql_query("SELECT a.nu_cidadaun,a.naran_cidadaun,a.sexo,c.naran_subdist FROM cidadaun a, suco b, subdistrito c WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND (c.naran_subdist='Quelicai' OR c.naran_subdist='Bazartete')");
	$nu=1;
	while($r=mysql_fetch_array($query)) {
	echo "<tr><td>$nu</td><td>$r[nu_cidadaun]</td><td>$r[naran_cidadaun]</td><td>$r[sexo]</td><td>$r[naran_subdist]</td></tr>";
	$nu++;
	}
	echo "</tbody></table>
	</div></div>";
}
?>
