<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
   body { background: white !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
<div class="container">


<h1>Kortit</h1>

<table class="table table-bordered table-hover table-condensed">
<tr><th>Käyttäjänimi</th><th>Saldo</th><th>Toiminnassa</th></tr>

<?php

$username = ($this->session->userdata['logged_in']['username']);
echo "Your Username is " . $username;

$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);
echo "  and your Userid is " . $id_tunnus;

foreach ($kortit as $rivi) 
{
	echo '<tr><td>'	
	.$username.'</td><td>'
	.$rivi['saldo'].'</td><td>'
	.$rivi['toiminnassa'].'</td><tr>';

}



?>
	<div>
	</div>



</table>


<input type="submit" name="btnKuolleta" value="Kuolleta kortti" />

<a href="nayta_muokattava_saldo"><BUTTON>Lisää saldoa</BUTTON></a>











<!--
<input type="button" name="Release" onclick="hello()" value="Click to Release" />


<script>
function paivita_toiminnassa() {
    $.get("Kayttaja.php");
    return false;
}
</script>

<a href="<?php echo site_url('kayttaja/kayttaja_page'); ?>" onclick="paivita_toiminnassa();">Kuolleta kortti</a>
-->


</div>

