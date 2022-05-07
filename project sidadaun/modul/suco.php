
<?php
$ak="modul/ak_suco.php";
switch($_GET['act']){
	
default:
echo "<div class='panel-heading'><h4>Suco</h4></div>
	<div class='panel-body'>";
	echo "<a href='suco-addsuco.html'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span> Adiciona Suco</button></a><br /><br />
	<table id='example' class='table table-striped table-bordered table-condensed' cellspacing='0' width='90%'>
	<thead><tr><th width='5%'>Nu.</th><th width='10%'>Nu. Suco</th><th width='20%'>Suco</th><th width='20%'>Sub Distrito</th><th width='20%'>Distrito</th><th width='5%'>#</th></tr></thead><tbody>";
	$query=mysql_query("SELECT c.nu_suco,c.naran_suco,s.nu_subdist,s.naran_subdist,d.naran_dist FROM suco c, subdistrito s, distrito d WHERE c.nu_subdist=s.nu_subdist AND s.nu_dist=d.nu_dist");
	$no = 1;
	while($r=mysql_fetch_array($query)){
	  echo "<tr><td>$no</td>
		<td>$r[nu_suco]</td>
		<td>$r[naran_suco]</td>
		<td>$r[naran_subdist]</td>
		<td>$r[naran_dist]</a></td>
		<td><a href='suco-editsuco-$r[nu_suco].html' data-toggle='tooltip' data-placement='left' title='Edit'><span class='glyphicon glyphicon-pencil'></span></a> | <a href='$ak?module=suco&act=delete&nusuco=$r[nu_suco]' data-toggle='tooltip' data-placement='left' title='Hapaga' onclick=\"return confirm('Hakarak atu hapaga suco $r[naran_suco]?')\"><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
	$no++;
	}
	echo "</tbody></table>
	</div>";
break;
	  
case "addsuco":
	echo "<div class='panel-heading'><h4>Adiciona Suco</h4></div>
	<div class='panel-body'>";
	echo "<form role='form' method='POST' action='$ak?module=suco&act=input'>
		<div class='form-group'>
			<label for='Numeru Suco'>Numeru Suco:</label>
			<input type='text' class='form-control' name='nu_suco' placeholder='Numeru Suco' required>
		</div>
		<div class='form-group'>
			<label for='Naran Suco'>Naran Suco:</label>
			<input type='text' class='form-control' name='naran_suco' placeholder='Naran Suco' required>
		</div>
		<div class='form-group'>
		<label for='SubDistrito/Distrito'>SubDistrito/Distrito:</label>
		<select class='form-control' name='nu_subdist' required>";
			$s=mysql_query("SELECT s.nu_subdist,s.naran_subdist,d.naran_dist FROM subdistrito s, distrito d WHERE s.nu_dist=d.nu_dist");
			while($r=mysql_fetch_array($s)) {
			echo "<option value='$r[nu_subdist]'>$r[nu_subdist]-$r[naran_subdist]/$r[naran_dist]</option>";
		}
	echo "</select>
		</div>
		<button type='submit' class='btn btn-primary'>Save</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;
		
case "editsuco":
	$queryedit=mysql_query("SELECT * FROM suco WHERE nu_suco='$_GET[nusuco]'");
	$r=mysql_fetch_array($queryedit);
	echo "<div class='panel-heading'><h4>Edit suco</h4></div>
	<div class='panel-body'>
	<form role='form' method='POST' action='$ak?module=suco&act=update'>
		<div class='form-group'>
			<label for='Numeru Suco'>Numeru Suco:</label>
			<input type='text' class='form-control' name='nu_suco' value='$r[nu_suco]' readonly='readonly'>
		</div>
		<div class='form-group'>
			<label for='Naran Suco'>Naran Suco :</label>
			<input type='text' class='form-control' name='naran_suco' value='$r[naran_suco]' placeholder='Naran Suco' required>
		</div>
		<div class='form-group'>
		<label for='SubDistrito/Distrito'>SubDistrito/Distrito:</label>
		<select class='form-control' name='nu_subdist' required>";
		$t=mysql_query("SELECT s.nu_subdist,s.naran_subdist,d.naran_dist FROM subdistrito s, distrito d WHERE s.nu_dist=d.nu_dist");
		while($w=mysql_fetch_array($t)){
			if ($r['nu_subdist']==$w['nu_subdist']){ echo "<option value='$w[nu_subdist]' selected>$w[naran_subdist]/$w[naran_dist]</option>"; }
			else { echo "<option value='$w[nu_subdist]'>$w[naran_subdist]/$w[naran_dist]</option>"; }
		}
	echo "</select>
		</div>
		<button type='submit' class='btn btn-primary'>Update</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;

}
?>
