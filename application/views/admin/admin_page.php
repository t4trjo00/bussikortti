
<!DOCTYPE html>
<html>
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

<div class="container">
	<h1>Kortit</h1>
	<table class="table table-bordered table-hover table-condensed">


		<br>
		<p>Adminin sivu</p>
TÄMÄ ON TURHA TURHUUS SIVU LEHTI
TÄMÄ ON TURHA TURHUUS SIVU LEHTI
TÄMÄ ON TURHA TURHUUS SIVU LEHTI



<!-- <img id="image1" src="<?php echo base_url('/style/images/Koala.jpg'); ?>"  width="304" height="236" /> -->



		<tr><th>id_kortti</th><th>Pin</th><th>Saldo</th><th>asiakas id</th><th>Maksu id</th><th>Poista kortti</th></tr>
<?php
	foreach ($kortit as $rivi) 
{
	echo '<tr><td>'
	.$rivi['id_kortti'].'</td><td>'
	.$rivi['pin_kortti'].'</td><td>'
	.$rivi['saldo'].'</td><td>'
	.$rivi['asiakas_id_asiakas'].'</td><td>'
	.$rivi['maksu_id_maksu'].'</td><td>';
	echo "<a onclick='javascript:varmistaPoistokortti($(this));return false;' href='poista_kortti/".$rivi['asiakas_id_asiakas']."'>Poista</a>";
}



//echo "Your Username is " . $username;
//$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);


?>

<script>
function varmistaPoistokortti(anchor)
{
   var conf = confirm('Haluatko varmasti poistaa tämän kortin?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>



</table>
</div>