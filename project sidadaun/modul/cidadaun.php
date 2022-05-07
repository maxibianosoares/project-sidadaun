
<?php
$ak="modul/ak_cidadaun.php";
switch($_GET['act']){
	
default:
echo "<div class='panel-heading'><h4>Dados Cidadaun</h4></div>
	<div class='panel-body'>
	<a href='cidadaun-addcidadaun.html'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span> Adiciona Cidadaun</button></a><br /><br />
	<table id='example' class='table table-striped table-bordered table-condensed' cellspacing='0' width='100%'>
	<thead><tr><th>Nu.</th><th width='15%'>Nu. Cidadaun</th><th width='25%'>Naran Cidadaun</th><th width='10%'>Sexo</th><th width='15%'>Data Moris</th><th width='25%'>Suco</th><th width='7%'>#</th></tr></thead><tbody>";
	$query=mysql_query("SELECT nu_cidadaun,naran_cidadaun,sexo,data_moris,naran_suco,naran_subdist,naran_dist FROM cidadaun c, suco s, subdistrito b, distrito d WHERE c.nu_suco=s.nu_suco AND s.nu_subdist=b.nu_subdist AND b.nu_dist=d.nu_dist ORDER BY d.nu_dist ASC,b.nu_subdist ASC,s.nu_suco ASC,c.nu_cidadaun ASC");
	$no = 1;
	while($r=mysql_fetch_array($query)){
	$data_moris=data_tl($r['data_moris']);
	echo "<tr><td>$no</td>
		<td>$r[nu_cidadaun]</td>
		<td><a href='cidadaun-viewcidadaun-$r[nu_cidadaun].html'>$r[naran_cidadaun]</a></td>
		<td>$r[sexo]</td>
		<td>$data_moris</td>
		<td>$r[naran_suco]/$r[naran_subdist]/$r[naran_dist]</td>
		<td><a href='cidadaun-editcidadaun-$r[nu_cidadaun].html' data-toggle='tooltip' data-placement='left' title='Edit'><span class='glyphicon glyphicon-pencil'></span></a> | <a href='$ak?module=cidadaun&act=delete&nucidadaun=$r[nu_cidadaun]' data-toggle='tooltip' data-placement='left' title='Hapaga' onclick=\"return confirm('Hakarak atu hapaga cidadaun ho naran $r[naran_cidadaun]?')\"><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
	$no++;
	}
	echo "</tbody></table>
	</div>";
break;
	  
case "addcidadaun":
	echo "<div class='panel-heading'><h4>Adiciona Cidadaun</h4></div>
	<div class='panel-body'>
	<form role='form' method='POST' action='$ak?module=cidadaun&act=input'>
		<div class='form-group'>
			<label for='Numeru Cidadaun'>Numeru Cidadaun:</label>
			<input type='text' class='form-control' name='nu_cidadaun' placeholder='Numeru Cidadaun' required>
		</div>
		<div class='form-group'>
			<label for='Naran Cidadaun'>Naran Cidadaun:</label>
			<input type='text' class='form-control' name='naran_cidadaun' placeholder='Naran Cidadaun' required>
		</div>
		<div class='form-group'>
		<label for='Sexo'>Sexo:</label>
		<select class='form-control' name='sexo' required>
			<option value='Mane'>Mane</option>
			<option value='Feto'>Feto</option>
		</select>
		</div>
		<div class='form-group'>
		<label for='Data Moris'>Data Moris:</label>";
			combodata(1,31,'loron',$data_agora);
			combofulan(1,12,'fulan',$fln_agora);
			combotinan(1980,$tinan_agora,'tinan',$tinan_agora);
	echo "</div>
		<div class='form-group'>
		<label for='Suco'>Suco:</label>
		<select class='form-control' name='nu_suco' required>";
			$qs=mysql_query("SELECT * FROM suco ORDER BY naran_suco ASC");
			while($r=mysql_fetch_array($qs)){ echo "<option value='$r[nu_suco]'>$r[naran_suco]</option>";}
	echo "</select>
		</div>
		<button type='submit' class='btn btn-primary'>Save</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;
		
case "editcidadaun":
	$edit=mysql_query("SELECT * FROM cidadaun WHERE nu_cidadaun='$_GET[nucidadaun]'");
	$r=mysql_fetch_array($edit);
	echo "<div class='panel-heading'><h4>Edit Dados Cidadaun</h4></div>
	<div class='panel-body'>
	<form role='form' method='POST' action='$ak?module=cidadaun&act=update'>
		<div class='form-group'>
			<label for='Numeru Cidadaun'>Numeru Cidadaun:</label>
			<input type='text' class='form-control' name='nu_cidadaun' value='$r[nu_cidadaun]' readonly='readonly'>
		</div>
		<div class='form-group'>
			<label for='Naran Cidadaun'>Naran Cidadaun:</label>
			<input type='text' class='form-control' name='naran_cidadaun'  value='$r[naran_cidadaun]' placeholder='Naran Cidadaun' required>
		</div>
		<div class='form-group'>
		<label for='Sexo'>Sexo:</label>
		<select class='form-control' name='sexo' required>";
			$sexo = array ("Mane","Feto");
			$tot = count($sexo);
		for ($l=0; $l<$tot; $l++) {
			if ($r['sexo']==$sexo[$l]){ echo "<option value='$sexo[$l]' selected>$sexo[$l]</option>"; }
			else { echo "<option value='$sexo[$l]'>$sexo[$l]</option>"; }
		}
	echo "</select>
		</div>
		<div class='form-group'>
		<label for='Data Moris'>Data Moris:</label>";
			$get_tgl=substr("$r[data_moris]",8,2);
			combodata(1,31,'loron',$get_tgl);
			$get_bln=substr("$r[data_moris]",5,2);
			combofulan(1,12,'fulan',$get_bln);
			$get_thn=substr("$r[data_moris]",0,4);
			combotinan(1980,$tinan_agora, 'tinan',$get_thn);
	echo "</div>
		<div class='form-group'>
		<label for='Suco'>Suco:</label>
		<select class='form-control' name='nu_suco' required>";
		$qs=mysql_query("SELECT * FROM suco");
		while($w=mysql_fetch_array($qs)){
			if ($r['nu_suco']==$w['nu_suco']){ echo "<option value='$w[nu_suco]' SELECTed>$w[naran_suco]</option>"; }
			else { echo "<option value='$w[nu_suco]'>$w[naran_suco]</option>"; }
		}
	echo "</SELECT>
		</div>
		<button type='submit' class='btn btn-primary'>Update</button>
		<input type='button' value='Cancel' class='btn btn-default' onclick=self.history.back()>
	</form>
	</div>";
break;
		
case "viewcidadaun":
	$query=mysql_query("SELECT naran_cidadaun,sexo,data_moris,year(curdate())-year(data_moris) as tinan,naran_suco,naran_subdist,naran_dist FROM cidadaun a, suco b, subdistrito c, distrito d WHERE a.nu_suco=b.nu_suco AND b.nu_subdist=c.nu_subdist AND c.nu_dist=d.nu_dist AND nu_cidadaun='$_GET[nucidadaun]'");
	$r=mysql_fetch_array($query);
	$data_moris=data_tl($r['data_moris']);
	echo "<div class='panel-heading'><h4><u>$r[naran_cidadaun]</u></h4></div>
	<div class='panel-body'>
	<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%'>
	<tr><td width='20%'>Numeru Cidadaun</td><td>$_GET[nucidadaun]</td></tr>
	<tr><td>Sexo</td><td>$r[sexo]</td></tr>
	<tr><td>Data Moris</td><td>$data_moris</td></tr>
	<tr><td>Idade</td><td>$r[tinan] Anos</td></tr>
	<tr><td>Suco</td><td>$r[naran_suco]/$r[naran_subdist]/$r[naran_dist]</td></tr>
	</table>
	</div>";
break;
}
?>
