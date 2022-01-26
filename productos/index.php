<!--TIENDA-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Now</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Shop Now</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="" class="nav-link">CARRITO <span class="badge">0</span></a>
            </li> 
            <li class="nav-item active">
          <a class="nav-link" href="../api/logout.php">Cerrar sesion<span class="sr-only"></span></a>
        </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!--Card-->
<h1 class="text-center">SESIONES</h1>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="margin-top: 30px; margin-left: 20px;">
      <img src="../img/01.jpg" alt="...">
      <div class="caption">
        <h5 style=" text-align: center;font-weight: bolder;">Deportes</h5>
        <p>Encuentra los mejores articulos en deporte para que te animes a empezar tu vida sana.</p>   
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="margin-top: 30px;">
      <img src="../img/02.jpg" alt="...">
      <div class="caption">
        <h5 style=" text-align: center;font-weight: bolder;"> Productos de Tecnologia</h5>
    <p>Encuentra lo ultimo en tecnologia y estaras siempre a un paso mas.</p>
    
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="margin-top: 30px;">
      <img src="../img/03.jpg" alt="...">
      <div class="caption">
        <h5 style=" text-align: center;font-weight: bolder;"> Productos de Musica</h5>
        <p >Encuentra lo ultimo en musica y tus instrumentos favoritos.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="margin-top: 30px; margin-right: 20px;">
      <img src="../img/04.jpg" alt="...">
      <div class="caption">
        <h5 style=" text-align: center;font-weight: bolder;"> Productos de Hogar</h5>
        <p>Encuentra los mejores articulos en deporte para que te animes a empezar tu vida sana.</p>
      </div>
    </div>
  </div>
</div> 
<hr><br><br>
<!--fin card-->
<!--SESION MUSICA -->
    <h1 class="text-center">PRODUCTOS</h1>
    <div class="container" id="main">
        <div class="row" style="margin-top: -55px;">
            <?php
              require 'vendor/autoload.php';
              $productos = new tienda\productos;
              $info_productos = $productos->mostrar();
              $cantidad = count($info_productos);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++){
                  $item = $info_productos[$x];
              ?>
              <!------------------------------------------------ -->
               <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1 class="text-center titulo-productos"><?php print $item['titulo'] ?></h1>  
                    </div>
                    <div class="panel-body">
                   <?php
                          $foto = 'upload/'.$item['foto'];
                          if(file_exists($foto)){
                        ?>
                          <img src="<?php print $foto; ?>" class="img-responsive">
                    <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                      <?php }?>
                    </div>
                  <div class="panel-footer">
                        <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-dark btn-block">
                          <span class="glyphicon glyphicon-shopping-cart"> Comprar</span>
                        </a>
                    </div>
                  </div>
                  <!---------------------------------------------------->
              </div>
              <?php 
                  }
            }else{?>
                 <h4>NO HAY REGISTROS</h4>
              <?php }?>
    </div> 
<!-- FIN SESION MUSICA -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
