<!--AL iniciar sesion (se debe cambiar)-->
<?php

  include './templates/header.php';
  
  if (!$userController->isUserLoggedIn()) {
    header('Location: login.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <?php include './templates/nav.php' ?>
<br> 
    <h1 align="center">Bienvenid@s</h1>
    <img src="img/icono.gif" style="margin-left: 435px;">
    <div style="margin-left:550px; margin-top:-175px;">
      <a href="productos/index.php" >IR A HACER COMPRAS</a>
    </div>
    
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index2.php" class="nav-link px-2 text-muted">Inicio</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Musica</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Deportes</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hogar</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tecnologia</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
  </footer>
</body>
</html>