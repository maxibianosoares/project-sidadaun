<?php
	include "koneksaun.php";
	include "library.php";
	include "combobox.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="pt" xml:lang="pt" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SISTEMA INFORMASAUN CIDADANIA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta name="description" content="FECT UNTL">
<meta http-equiv="Copyright" content="Departamento Engenharia Informatica">
<meta name="author" content="UNTL">
<meta name="author" content="Frederico Soares Cabral">
<meta http-equiv="imagetoolbar" content="no">
<meta name="language" content="Timor Leste">
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">

<script type="text/javascript" language="javascript" src="bootstraps/jquery-1.12.0.min.js"></script>
<script type="text/javascript" language="javascript" src="bootstraps/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="bootstraps/dataTables.bootstrap.js"></script> 
<link rel="stylesheet" type="text/css" href="bootstraps/bootstrap.min.css">
<script type="text/javascript" language="javascript" src="bootstraps/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstraps/dataTables.bootstrap.css">

<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );

</script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.html">SISTEMA CIDADANIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
		<li><a href="distrito.html"><span class="glyphicon glyphicon-star"></span> Distrito </a></li>
		<li><a href="subdistrito.html"><span class="glyphicon glyphicon-star"></span> Sub Distrito </a></li>
		<li><a href="suco.html"><span class="glyphicon glyphicon-star"></span> Suco </a></li>
		<li><a href="cidadaun.html"><span class="glyphicon glyphicon-star"></span> Cidadaun </a></li>
    </ul>
    </div>
  </div>
</nav>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-1">
    
    </div>
    <div class="col-sm-10">
		<div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
				<?php include "content.php"; ?>
          </div>
        </div>
		</div>
	</div>
    <div class="col-sm-1">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; Copyright 2016 - <?php $data=date('Y'); echo "$data"; ?> | Departamento de Engenharia Inform&#225;tica - FECT - UNTL</p>
</footer>

</body>
</html>
