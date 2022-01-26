<?php

  include './templates/header.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/83fe3ac9e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="templates/iconos.css">

</head>
<body>

    <?php include './templates/nav.php' ?>

<div align="center">
  <img src="./img/icono.gif" style="width: 10; height: 10;">
  <!--iconos-->
  <div class="redes-container" align="right" style=" margin-right: -689px; margin-top: -779px;">
    <ul>
      <li><a href="#" class="facebook"><i class= "fab fa-facebook-f"></i></a></li>
      <li><a href="#" class="instagram"><i class= "fab fa-instagram"></i></a></li>
      <li><a href="#" class="whatsapp"><i class= "fab fa-whatsapp"></i></a></li>
    </ul>
  </div>
</div>

<!--footer-->
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Inicio</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Musica</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Deportes</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hogar</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tecnologia</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
  </footer>
</div>
</body>
</html>