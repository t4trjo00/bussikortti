
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

<h1>Poista asiakas</h1>


<table class="table table-striped table-bordered table-hover table-condensed">




<tr><th>Etunimi</th><th>Sukunimi</th><th>Valitse</th></tr>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>';
	echo "<a onclick='javascript:varmistaPoisto($(this));return false;' href='poista/".$rivi['id_asiakas']."'>Poista</a>";
}
?>



<script>
function varmistaPoisto(anchor)
{
   var conf = confirm('Haluatko varmasti poistaa tämän asiakkaan?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>





</table>
</div>
