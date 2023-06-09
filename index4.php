<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

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
        <th>Tota Entrada</th>
        <th >Fecha y hora de entrada</th>
    
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
        <td style="color:black;"><?php echo $mostrar['entrada']?></td>
        <td style="color:black;" ><?php echo$mostrar['fecha_entrada']?></td>
         
    </tr>
    <?php
}


?>
    
</body>
</html>