
<form action="paivita_asiakas" method="POST">
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

<h1>Päivitä valitun asiakkaan tiedot</h1>


<table class="table table-striped table-bordered table-hover table-condensed">

<?php 

echo '<tr><td>Etunimi</td><td><input type="text" name="en" value="'.$asiakas[0]['etunimi'].'"/></td></tr>';
echo '<tr><td>Sukunimi</td><td><input type="text" name="sn" value="'.$asiakas[0]['sukunimi'].'"/></td></tr>';
echo '<tr><td>Sähköposti</td><td><input type="text" name="em" value="'.$asiakas[0]['email'].'"/></td></tr>';
echo '<tr><td>puhelin</td><td><input type="text" name="pn" value="'.$asiakas[0]['puhelin'].'"/></td></tr>';

echo '<input type="hidden" name="id" value="'.$asiakas[0]['id_asiakas'].'"/>';


 ?>

</table>
<input type="submit" name="btnTallenna" value="Tallenna"/>
</form>
