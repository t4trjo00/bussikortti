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


<h1>Kortit</h1>

<table class="table table-bordered table-hover table-condensed">




<tr><th>Pin</th><th>Saldo</th><th>asiakas id</th></tr>
<?php
$username = ($this->session->userdata['logged_in']['username']);
echo "Your Username is " . $username;
foreach ($kortit as $rivi) 
{
	echo '<tr><td>'
	
	.$rivi['pin_kortti'].'</td><td>'
	.$rivi['saldo'].'</td><td>'
	.$rivi['asiakas_id_asiakas'].'</td><tr>';
	
}



?>




</table>
</div>
