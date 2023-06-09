<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224); ">

<?php
  
  include("nav.php");
  
?>
  <?php
  
    include("con_db.php");
    
?>




<div class="container d-flex justify-content-center" style="height: 100px; margin: 40px 0 0 100px ">
<table >
    <tr style="border: 10px; border-color: black; background-color: #0e026b">
        <th>Sku</th>
        <th>Estiba</th>
        <th>Caja</th>
        <th>Rack</th>
        <th>Columna</th>
        <th>Nivel</th>
        <th>Descripcion</th>
        <th>Total</th>
        <th>Fecha ingreso</th>
        <th><br></th>   
        <th>Entrada</th>
        <th >Cantidad</th>
        <th>Salida</th>
    </tr>

    <?php
    $sql="SELECT * FROM datos";
    $resul=mysqli_query($conex,$sql);
    while($mostrar=mysqli_fetch_array($resul)){

    
    ?>

    <tr >
        <td style="color:black;"><?php echo $mostrar['sku']?></td>
        <td style="color: black;"><?php echo $mostrar['stiba']?></td>
        <td style="color:black;"><?php echo $mostrar['caja']?></td>
        <td style="color:black;"><?php echo $mostrar['rack']?></td>
        <td style="color:black;"><?php echo $mostrar['columna']?></td>
        <td style="color:black;"><?php echo $mostrar['nivel']?></td>
        <td style="color:black;"><?php echo $mostrar['descripcion']?></td>
        <td style="color:black;"><?php echo $mostrar['total']?></td>
        <td style="color:black; " ><?php echo$mostrar['fecha_ingreso']?></td>
        <td>
            <form method="post" >
            <div class="botones" >
                <td><button class="btn"  type="submit" name="sumar"  style="background-color:  rgba(5, 17, 251, 0.3)"  >+</button></td>
                <td><input type="number" name="input" style="width:45px"></td>
                <td><button class="btn" type="submit" name="restar" style="background-color: rgba(5, 17, 251, 0.3)">-</button></td>
            </div> 
            </form>
        </td> 
    </tr>
    <?php
}


?>
<?php
/*

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
    }
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
        }
    }
    
    }

   

?>
<?php
if (isset($_POST['restar'])) {
    date_default_timezone_set('America/Bogota');
    $formated_DATE = date('(d/m/y) H:i:s ');
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
        <?php
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
        /*?>
        <div class="alert alert-danger"  style="width:70px; margin: 0 0 0  300px " role="alert">
            ¡Error!
        </div>
        <?php
    }
    

    
}


  
  

 */
?>

</table>

</div>
</body>
</html>