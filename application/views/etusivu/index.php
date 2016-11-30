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
<img src="http://www.koirakissaklinikka.fi/images/artikkelit/kissa-artikkelit/kissalaihdutus.jpg" />
  <div class="jumbotron">
    <h1>Bussikortti järjestelmän etusivu</h1>
    <p>Hieno juttu</p> 
  </div>







  <p>Tähän voi kirjoittaa jotakin infoa.</p> 
  
  <li><a href="http://www.iltasanomat.fi/viihde/art-2000004885579.html" ><span class="glyphicon glyphicon-bell"></span> Uutiset</a></li>
  <li><a href="https://www.miniclip.com/games/supercar-showdown/en/#t-ss-S" ><span class="glyphicon glyphicon-sunglasses"></span> Rallipeli</a></li>


</div>
<?php 
$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);
echo "Your Username is " . $id_tunnus; ?>

