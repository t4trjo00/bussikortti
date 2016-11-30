
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


<h1>Lisää asiakas</h1>




  <p>Täytä tiedot:</p>
  <form method="POST" action="lisaa">
    <div class="form-group">
      <label for="usr">Etunimi:</label>
      <input type="text" class="form-control" name="en">
    </div>
    <div class="form-group">
      <label for="usr">Sukunimi:</label>
      <input type="text" class="form-control" name="sn">
    </div>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="em">
    </div>
    <div class="form-group">
      <label for="usr">Puhelin:</label>
      <input type="text" class="form-control" name="pn">
      <br>
      <input type="submit" name="btnTallenna" value="tallenna">
    </div>


  </form>
</div>









</table>
