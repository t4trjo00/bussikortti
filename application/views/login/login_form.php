<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<title>Kirjaudu sisään</title>

  <br>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<style type="text/css">
   body { background: #eeeeee !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>

<?php

  if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
    if (isset($message_display)) {
    echo "<div class='message'>";
    echo $message_display;
    echo "</div>";
}
?>
    <div id="main">
    <div id="login">

      <h2>Kirjaudu sisään</h2>
<hr/>
    <?php echo form_open('user_authentication/user_login_process'); ?>
    <?php
      echo "<div class='error_msg'>";
      if (isset($error_message)) {
      echo $error_message;
      }
      echo validation_errors();
      echo "</div>";
?>

<form>
  <div class="form-horizontal">
      <label class="control-label col-sm-1" for="tunnus">Käyttäjänimi:</label>
      <div class="col-sm-1">
      
        <input type="text" class="form-control" name="username" id="name" placeholder="tunnus">
        </div>
    
  </div>
  <br>
  <br>

  <br>
  <div class="form-horizontal">
  <label class="control-label col-sm-1" for="tunnus">Salasana:</label>
      <div class="col-sm-1">
        <input type="password" class="form-control" name="password" id="password" placeholder="salis">
    
  </div>
    <br/>
    <br/>
    <br>
     <div class="col-sm-offset-1 col-sm-1">
      <input type="submit" value=" Kirjaudu " name="submit"/><br />
      </div>

<?php echo form_close(); ?>
</form>

</div>
</div>
</body>
</html>



