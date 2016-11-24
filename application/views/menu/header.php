<!DOCTYPE html>
<html>
<?php

if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);

} else {
header("location: login");
}
?>
<head>
<title>asiakas sivusto</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/bootstrap.min.css');?>">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>





<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('Etusivu'); ?>">Etusivu
     </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
		    <li><a href="<?php echo site_url('asiakas/listaa'); ?>">Asiakas</a></li>
		    <li><a href="<?php echo site_url('asiakas/lisaa'); ?>">Lisää asiakas</a></li>
        <li><a href="<?php echo site_url('asiakas/nayta_poistettavat'); ?>">Poista asiakas</a></li>
		    <li><a href="<?php echo site_url('Kortti/listaa_kortti'); ?>">Kortti</a></li>
		    
        <li><a href="<?php echo site_url('admin/admin_page'); ?>">Oma sivu</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li> <a>logged in as:</a></li>
          <li> <a <?php echo "Hello <b id='welcome'>" . $username . "</b>";?></a></li>

          <li><a href="http://[::1]/bussikortti/index.php/user_authentication/logout" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        
      </ul>
    </div>
  </div>
</nav>
  

<br>

<ul>





</ul>







