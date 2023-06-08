<?php
$conex = mysqli_connect("localhost", "root", "","inventario");

$output= "";

if(isset($_POST['buscar'])){

    $input=$_POST['input'];

    if(!empty($input)) {

        $query = "SELECT * FROM datos WHERE sku LIKE '%$input%' /*OR caja LIKE '%$input%'*/";

        $res = mysqli_query($conex, $query);

        $output .= "
        <div class='container d-flex justify-content-center' style='height: 100px; margin: 40px 400px 0 100px '>
            <table>
                <tr style='border: 10px; border-color: black; background-color: #0e026b'>
                    <th>Sku</th>
                    <th>Estiba</th>
                    <th>Caja</th>
                    <th>Rack</th>
                    <th> columna</th>
                    <th>Nivel</th>
                    <th>Descripcion</th>
                    <th>Total</th>
                    <th>Fecha ingreso</th>
                    
                </tr>
          
        ";

        if(mysqli_num_rows($res) < 1 ){

            $output .="
            <div class='d-flex justify-content-center'>
            <tr>
            <td style='color: black;' > no hay resltados </td>
            </tr>
            </div>
            ";
        }else{
            while($row = mysqli_fetch_array($res)){
                $output .="
                <tr>
                    <td style='color:black;'>".$row['sku']."</td>
                    <td style='color: black;'>".$row['stiba']."</td>
                    <td style='color:black;'>".$row['caja']."</td>
                    <td style='color:black;'>".$row['rack']."</td>
                    <td style='color:black;'>".$row['columna']."</td>                   
                    <td style='color:black;'>".$row['nivel']."</td>
                    <td style='color:black;'>".$row['descripcion']."</td>
                    <td style='color:black;'>".$row['total']."</td>
                    <td style='color:black;' >".$row['fecha_ingreso']."</td>
                    <td>
                          <form   method='post' >
                          <div class='botones' >
                              <td><button class='btn'  type='submit'  name='sumar'  style='background-color:  rgba(5, 17, 251, 0.3)' >+</button></td>
                              <td><input type='number' name='input'  style='width:45px'></td>
                              <td><button class='btn' type='submit'  name='restar' style='background-color: rgba(5, 17, 251, 0.3)'>-</button></td>
                          </div> 
                          </form>
                    </td> 
                    
                </tr>
                </div>
                ";
                
            }
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index2.css">
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
                <a class="nav-link active text-light" aria-current="page" href="index.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="index2.php">Listado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="index4.php">Entrada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light"  href="index3.php">Salida</a>
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
        <form action="nav.php" method="post">
          <div class="row">
              <div class="col-md-9" >
                  <input type="text" name="input"  class="form-control" placeholer="Buscar">
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
<?php

if (isset($_POST['sumar'])) {
$input=$_POST['input'];

if(!empty($input)) { 
    $sql = "UPDATE datos SET total = total + $input WHERE total>=0  or total <=0";
    $resultado = mysqli_query($conex, $sql);
   /* if($resultado){
        ?>
        <div class="alert alert-success d-flex justify-content-center" style="width:70px; margin: 0 0 0  300px " role="alert">
         ¡Registro exitoso!
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger"  style="width:70px; margin: 0 0 0  300px " role="alert">
            ¡Error!
        </div>
        <?php
    }*/
}
}

if (isset($_POST['restar'])) {
    $input=$_POST['input'];
    
    if(!empty($input)) {
        $sql = "UPDATE datos SET total = total - $input WHERE total";
        $resultado = mysqli_query($conex, $sql);
       /* if($resultado){
            ?>
            <div class="alert alert-success d-flex justify-content-center" style="width:70px; margin: 0 0 0  300px " role="alert">
             ¡Registro exitoso!
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger"  style="width:70px; margin: 0 0 0  300px " role="alert">
                ¡Error!
            </div>
            <?php
        }*/
    }
    
    }

   

?>
<?php
if (isset($_POST['restar'])) {
    date_default_timezone_set('America/Bogota');
    $formated_DATE = date('(d/m/y) H:i:s');

    $input=$_POST['input'];
    if($input > 0){

        $consulta = "INSERT INTO datos(fecha_salida,salida) VALUES ('$formated_DATE','$input')";
        $resultado = mysqli_query($conex, $consulta);
        echo $formated_DATE. "<br>";
       
    }else{
      /*  ?>
        
        <div class="alert alert-danger"  style="width:70px; margin: 0 0 0  300px " role="alert">
            ¡Error!
        </div>
        <?php*/
    }
   
    
}


  
  

 
?>
<?php
if (isset($_POST['sumar'])) {
    date_default_timezone_set('America/Bogota');
    $formated_DATE = date('(d/m/y) H:i:s');
    $input=$_POST['input'];
    if($input > 0){
        $consulta = "INSERT INTO datos(fecha_entrada,entrada) VALUES ('$formated_DATE','$input')";
        $resultado = mysqli_query($conex, $consulta);
        echo $formated_DATE. "<br>";
    }else{
        ?>
        <div class="alert alert-danger"  style="width:70px; margin: 0 0 0  300px " role="alert">
            ¡Error!
        </div>
        <?php
    }
    

    
}


  
  

 
?>
</body>
</html>
</body>
</html>