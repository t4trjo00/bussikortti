<form action="muokattava_saldo" method="POST">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<h1>Lisää rahaa saldoosi</h1>
<a href="http://[::1]/bussikortti/index.php/kayttaja/kayttaja_page"><BUTTON>Peruuta</BUTTON></a>
<div>
	<br>
</div>
<table class="table table-striped table-bordered table-hover table-condensed">


<tr><th>Saldo</th></tr> 
 <?php

foreach ($kortit as $rivi) {
	echo '<tr><td>';
	echo '<input type="number" min="0" name="saldo" required></td>';
	echo '<input type="hidden" name="id_tunnus" value="'.$rivi['asiakas_id_asiakas'].'">';
	echo '</tr>';
}


?>

</table>


<input type="submit" name="btnTallenna" value="Tallenna"/>
</form>
</div>