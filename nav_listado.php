
<?php
  
  include("buscador_listado.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: black; "  >
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a href="" class="navbar-brand me-2 mb-1 d-flex align-items-center">
            <img src="https://grupouma.com/colombia/wp-content/uploads/sites/2/2021/07/uma-logo.png" alt="" height="20" alt="MDB Logo" loading="lazy" style="margin-top: 2px;">
          </a>
              
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="formulario.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="listado.php">Listado</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link  text-light" href="entrada.php">Entrada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light"  href="salida.php">Salida</a>
              </li>
            </ul>
              <!--<form action="index2.php" method="get" class="form_search">
                  <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
                  <input type="submit" value="buscar" class="btn_search">
              </form>--> 
      </div>
    </div>

    <div class="container " style="margin:5px 0 0 601px">
      <div class="col-md-17 d-flex justify-content-center">
        <form action="nav_listado.php" method="post">
          <div class="row">
              <div class="col-md-9" >
                  <input type="text" name="input"   class="form-control" placeholer="Buscar">
              </div>
              <div class="col-md-3" >
                  <input type="submit" name="buscar" class="btn btn-info"  value="Buscar" >
              </div>   
          </div>
        </form>
          <br><br>
    </div>
</nav>

  <?php
    echo $output;
    ?>





</body>
</html>
</body>
</html>