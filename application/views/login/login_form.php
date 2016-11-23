


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
      <label class="control-label col-sm-2" for="tunnus">Käyttäjänimi:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" id="name" placeholder="tunnus">
        </div>
    
  </div>
  <br>
  <br>

  <br>
  <div class="form-horizontal">
  <label class="control-label col-sm-2" for="tunnus">Salasana:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password" id="password" placeholder="*********">
    
  </div>
    <br/>
    <br/>
    <br>
     <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value=" Login " name="submit"/><br />
      </div>
<!-- <a href="<?php //echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>  -->
<?php echo form_close(); ?>
</form>

</div>
</div>
</body>
</html>





















<!--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="<?php //echo base_url('style/css/bootstrap.min.css');?>">
 <head>
   
 </head>
 <body>
   <h1>Kirjaudu sisään</h1>

   <?php //echo validation_errors(); ?>
   <?php //echo form_open('verifylogin'); ?>

     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>

     <br/>

     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>

     <input type="submit" value="Login"/>

   </form>
 </body>
</html>


-->

