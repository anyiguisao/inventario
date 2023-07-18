<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Inicio de sesion</title>
</head>
<body style="background-color: rgb(224, 224, 224);">

<?php
include("nav_vacio.php")
?>



<div class="d-flex flex-column" style="width:50%; background-color: #ededed;
 margin: 100px 0 0 330px; border-radius: 10px;" >

    <h1 style="width:50%; margin: 8px 0 0 200px"> Inicio de sesion</h1>
    <!--<form action="login.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" >
        <input type="password " name="password" placeholder="Contraseña" >
        <input type="submit" value="ingresar">
        
    </form>-->

    <form action="conex.php" method="post" style="margin: 8px 0 0 0; "  >
        <div class="form-group" style="width:70%; margin: 20px 0 0 100px ">
            <!--<label for="exampleInputEmail1">Nombre</label>-->
            <input class="form-control" type="text" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group" style="width:70%; margin: 20px 0 0 100px ; ">
            <!--<label for="exampleInputPassword1">Contraseña</label>-->
            <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
        </div>
        <button type="submit" value="ingresar"  class="form-control btn btn-info " style="width:15%; margin: 30px 0 30px 230px; ">Ingresar</button>
        <span style="margin: 0 0 0 30px ; "><a href="registroU.php" >Resgistrarse</a></span>
    </form>


</div>
</body>
</html>
