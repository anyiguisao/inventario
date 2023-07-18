<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="entrada.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<?php
  
  include("nav_listado.php");
  
?>
  <?php
  
    include("con_db.php");
    
?>


<div class="container d-flex justify-content-center" style="height: 100px; margin: 40px 0 0 100px ">
<table >
    <tr style="border: 10px; border-color: black; background-color: #0e026b">
        <th>Sku</th>
        <th>Signo</th>
        <th>Cantidad</th>
        <th>Fecha</th>

    </tr>

    <?php
    $sql="SELECT *  FROM entrada_salida WHERE signo = '+'";
    $datos="SELECT sku FROM datos INNER JOIN entrada_salida ON datos.id = entrada_salida.id";
    $resul=mysqli_query($conex,$sql);
    $resul2=mysqli_query($conex,$datos);
    while($mostrar=mysqli_fetch_array($resul)){
        

    
    ?>

    <tr >
        <td style="color:black;"><?php// echo $mostrar['sku']?></td>
        <td style="color:black;"><?php echo $mostrar['signo']?></td>
        <td style="color: black;"><?php echo $mostrar['cantidad']?></td>
        <td style="color:black;"><?php echo $mostrar['fecha']?></td>
    
         
    </tr>
    <?php
}


?>
    
</body>
</html>