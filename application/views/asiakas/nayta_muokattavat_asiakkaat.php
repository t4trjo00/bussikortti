<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<h1>Muokkaa asiakkaiden tietoja</h1>


<table class="table table-striped table-bordered table-hover table-condensed">


<form action="muokkaa_asiakkaat" method="POST">
<TABLE>
<tr><th>Etunimi</th><th>Sukunimi</th><th>Email</th><th>Puhelin</th></tr>

<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>';
	echo '<input type="text" name="en[]" value="'.$rivi['etunimi'].'"></td>';
	echo '<td><input type="text" name="sn[]" value="'.$rivi['sukunimi'].'"></td>';
	echo '<td><input type="text" name="em[]" value="'.$rivi['email'].'"></td>';
	echo '<td><input type="text" name="pn[]" value="'.$rivi['puhelin'].'"></td>';
	echo '<input type="hidden" name="id[]" value="'.$rivi['id_asiakas'].'">';
	echo '</tr>';
}


?>


</TABLE>
<a href="asiakas"><BUTTON>Peruuta</BUTTON></a>

<input type="submit" name="btnTallenna" value="Tallenna">




</form>
