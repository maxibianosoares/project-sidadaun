
<?php
$ak="modul/ak_distrito.php";
switch($_GET['act']){
	
default:
echo "<div class='panel-heading'><h4>Distrito</h4></div>
	<div class='panel-body'>";
	
	echo "<table id='example' class='table table-striped table-bordered table-condensed' cellspacing='0' width='40%'>
	<thead><tr><th width='5%'>Nu.</th><th width='30%'>Distrito</th><th width='5%'>#</th></tr></thead><tbody>";
	$query=mysql_query("SELECT * FROM distrito");
	$no = 1;
	while($r=mysql_fetch_array($query)){
	  echo "<tr><td>$no</td>
		<td>$r[naran_dist]</td>
		<td><a href='distrito-editdistrito-$r[nu_dist].html' data-toggle='tooltip' data-placement='left' title='Edit'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
	$no++;
	}
	echo "</tbody></table></div>";
	
	echo "</div>";
break;
	  		
case "editdistrito":
	$queryedit=mysql_query("SELECT * FROM distrito WHERE nu_dist='$_GET[nudist]'");
	$r=mysql_fetch_array($queryedit);
	echo "<div class='panel-heading'><h4>Altera Distrito</h4></div>
	<div class='panel-body'>";
	echo "<form role='form' method='POST' action='$ak?module=distrito&act=update'>
		<div class='form-group'>
			<label for='Numeru Distrito'>Numeru Distrito:</label>
			<input type='text' class='form-control' name='nu_dist' value='$r[nu_dist]' readonly='readonly'>
		</div>
		<div class='form-group'>
			<label for='Naran Distrito'>Naran Distrito :</label>
			<input type='text' class='form-control' name='naran_dist'  value='$r[naran_dist]' placeholder='Naran Distrito' required>
		</div>
		<button type='submit' class='btn btn-primary'>Update</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;
}
?>
