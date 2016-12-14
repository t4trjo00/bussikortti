<form action="paivita_toiminnassa" method="POST">

<?php

if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$admin = ($this->session->userdata['logged_in']['admin']);
if($admin==1);
else header("location: http://[::1]/bussikortti/index.php/Etusivu");


} else {
header("location: login");
}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<style type="text/css">
   body { background: #d1b8ff !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>


<div class="container">



<h1>Asiakkaat</h1>
<table class="table table-striped table-bordered table-hover table-condensed">
<tr><th>Etunimi</th><th>Sukunimi</th><th>Sähköposti</th><th>Puhelin</th><th>Muokkaa</th></tr>
<?php
foreach ($asiakkaat as $rivi) 
{
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['email'].'<td>'.$rivi['puhelin'].'</td>';



	echo '<td><a href="nayta_muokattavat_asiakkaat">Muokkaa</a>';
	echo "</td></tr>";

	
}



?>




</table>
</div>
