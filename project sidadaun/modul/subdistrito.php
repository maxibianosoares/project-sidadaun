
<?php
$ak="modul/ak_subdistrito.php";
switch($_GET['act']){
	
default:
echo "<div class='panel-heading'><h4>Sub Distrito</h4></div>
	<div class='panel-body'>";
	echo "<a href='subdistrito-addsubdistrito.html'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span> Adiciona SubDistrito</button></a><br /><br />
	<table id='example' class='table table-striped table-bordered table-condensed' cellspacing='0' width='50%'>
	<thead><tr><th width='5%'>Nu.</th><th width='20%'>Sub Distrito</th><th width='20%'>Distrito</th><th width='5%'>#</th></tr></thead><tbody>";
	$query=mysql_query("SELECT s.nu_subdist,s.naran_subdist,d.naran_dist FROM subdistrito s, distrito d WHERE s.nu_dist=d.nu_dist");
	$no = 1;
	while($r=mysql_fetch_array($query)){
	  echo "<tr><td>$no</td>
		<td>$r[naran_subdist]</td>
		<td>$r[naran_dist]</a></td>
		<td><a href='subdistrito-editsubdistrito-$r[nu_subdist].html' data-toggle='tooltip' data-placement='left' title='Edit'><span class='glyphicon glyphicon-pencil'></span></a> | <a href='$ak?module=subdistrito&act=delete&nusubdist=$r[nu_subdist]' data-toggle='tooltip' data-placement='left' title='Hapaga' onclick=\"return confirm('Hakarak atu hapaga subdistrito $r[naran_subdist]?')\"><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
	$no++;
	}
	echo "</tbody></table>
	</div>";
break;
	  
case "addsubdistrito":
	echo "<div class='panel-heading'><h4>Adiciona SubDistrito</h4></div>
	<div class='panel-body'>";
	echo "<form role='form' method='POST' action='$ak?module=subdistrito&act=input'>
		<div class='form-group'>
			<label for='Numeru SubDistrito'>Numeru SubDistrito:</label>
			<input type='text' class='form-control' name='nu_subdist' placeholder='Numeru SubDistrito' required>
		</div>
		<div class='form-group'>
			<label for='Naran SubDistrito'>Naran SubDistrito:</label>
			<input type='text' class='form-control' name='naran_subdist' placeholder='Naran SubDistrito' required>
		</div>
		<div class='form-group'>
		<label for='Distrito'>Distrito:</label>
		<select class='form-control' name='nu_dist' required>";
			$s=mysql_query("SELECT * FROM distrito");
			while($r=mysql_fetch_array($s)) {
			echo "<option value='$r[nu_dist]'>$r[naran_dist]</option>";
		}
	echo "</select>
		</div>
		<button type='submit' class='btn btn-primary'>Save</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;
		
case "editsubdistrito":
	$queryedit=mysql_query("SELECT * FROM subdistrito WHERE nu_subdist='$_GET[nusubdist]'");
	$r=mysql_fetch_array($queryedit);
	echo "<div class='panel-heading'><h4>Edit SubDistrito</h4></div>
	<div class='panel-body'>
	<form role='form' method='POST' action='$ak?module=subdistrito&act=update'>
		<div class='form-group'>
			<label for='Numeru SubDistrito'>Numeru SubDistrito:</label>
			<input type='text' class='form-control' name='nu_subdist' value='$r[nu_subdist]' readonly='readonly'>
		</div>
		<div class='form-group'>
			<label for='Naran SubDistrito'>Naran SubDistrito :</label>
			<input type='text' class='form-control' name='naran_subdist'  value='$r[naran_subdist]' placeholder='Naran SubDistrito' required>
		</div>
		<div class='form-group'>
		<label for='Distrito'>Distrito:</label>
		<select class='form-control' name='nu_dist' required>";
		$t=mysql_query("SELECT * FROM distrito");
		while($w=mysql_fetch_array($t)){
			if ($r['nu_dist']==$w['nu_dist']){ echo "<option value='$w[nu_dist]' selected>$w[naran_dist]</option>"; }
			else { echo "<option value='$w[nu_dist]'>$w[naran_dist]</option>"; }
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
