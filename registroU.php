<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
    <?php
    include("con_db.php");
    ?>

<?php
    include("nav_vacio.php");
    ?>



   

<div class="d-flex flex-column" style="width:50%; background-color: #ededed;
 margin: 100px 0 0 330px; border-radius: 10px; ">
    <h1  style="width:50%; margin: 8px 0 0 250px">Registro</h1>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" style="margin: 8px 0 0 0 "  >
        <div class="form-group" style="width:70%; margin: 20px 0 0 100px ">
            <!--<label for="exampleInputEmail1">Nombre</label>-->
            <input class="form-control" type="text" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group" style="width:70%; margin:20px 0 0 100px  ">
            <!--<label for="exampleInputPassword1">Contraseña</label>-->
            <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
        </div>
        <div class="form-group" style="width:70%; margin:20px 0 0 100px  ">
            <!--<label for="exampleInputPassword1">Contraseña</label>-->
            <input type="password" class="form-control" name="contraseñas" placeholder="Confirmar Contraseña">
        </div>
        <div class="form-group" style="width:70%; margin:20px 0 0 100px  ">
            <!--<label for="exampleInputPassword1">Contraseña</label>-->
            <input type="text" class="form-control" name="cargo" placeholder="Cargo">
        </div>
        <button type="submit" name="registrar" class="form-control btn btn-info " style="width:15%; margin: 30px 0 30px 220px; color: white;">Registrar</button>
        <span style="margin: 0 0 0 30px ; "><a href="login.php" >Iniciar Sesion</a></span>
    </form>



<?php
//REGISTRO
 if(isset($_POST['registrar'])){
    $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
    $contraseña = mysqli_real_escape_string($conex, $_POST['contraseña']);
    $cargo = mysqli_real_escape_string($conex, $_POST['cargo']);
    $contraseña_incriptada = ($contraseña);

    $sql= "SELECT * FROM usuarios WHERE nombre = '$nombre'";

    $resultado = $conex->query($sql);

    $filas = $resultado->num_rows;

    if($filas > 0){
        echo "<script>
            alert('el usuario ya existe');
            window.location = 'registroU.php'; 
            </script>";
        
        

 }else{ //insert

    if($cargo == 'operario'){
        
    $sql = "INSERT INTO usuarios (nombre, contraseña, id_cargo) VALUES ('$nombre','$contraseña_incriptada', '2')";
    $result = $conex->query($sql);

    if($result > 0 ){
        echo "<script>
        alert('Registro exitoso');
        window.location = 'registroU.php'; 
        </script>";
    }else{
        echo "<script>
        alert('Error ');
        window.location = 'registroU.php'; 
        </script>";
    }

    }else{
        if('id_cargo' < 1){
            $sql = "INSERT INTO usuarios (nombre, contraseña, id_cargo) VALUES ('$nombre','$contraseña_incriptada', 1)";
            $result = $conex->query($sql);

            if($result > 0 ){
                echo "<script>
                alert('Registro exitoso');
                window.location = 'registroU.php'; 
                </script>";
            }else{
                echo "<script>
                alert('Error ');
                window.location = 'registroU.php'; 
                </script>";
            }
    }else{
        echo "<script>
        alert('Ya hay un administrador ');
        window.location = 'registroU.php'; 
        </script>";
    }
        

    }



 }

 }
?>
</div>
</body>
</html>