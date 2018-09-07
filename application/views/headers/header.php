<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Abogados En linea</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href=" <?php echo  base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo  base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo  base_url();?>assets/js/materialize.js"></script>
  
  
  <script src="<?php echo  base_url();?>assets/js/init.js"></script>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#modal1"  class="waves-effect waves-light btn modal-trigger">Iniciar Sesion</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
		
      </ul>
	  
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>ACCESO AL SISTEMA</h4>
      <div class="row">
       <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Usuario</label>
        </div>
       </div> 



          <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>