<?php
include "con_db.php";

if (isset($_POST['register'])) {
    if(strlen($_POST['stiba']) >= 1 && strlen($_POST['caja']) >= 1 && 
    strlen($_POST['rack']) >= 1 && strlen($_POST['columna']) >=1 && 
    strlen($_POST['nivel']) >=1 && strlen($_POST['sku']) >=1 && 
    strlen($_POST['descripcion']) >=1 && strlen($_POST['cantidad']) >=1 ){
        $stiba=trim($_POST['stiba']);
        $caja=trim($_POST['caja']);
        $rack=trim($_POST['rack']);
        $columna=trim($_POST['columna']);
        $nivel=trim($_POST['nivel']);
        $sku=trim($_POST['sku']);
        $descripcion=trim($_POST['descripcion']);
        $cantidad=trim($_POST['cantidad']);
        $fechareg=date("d/m/y");
        $consulta = "INSERT INTO datos(stiba, caja, rack, sku, descripcion, cantidad, columna,nivel, fecha_ingreso, fecha_salida, total) VALUES ('$stiba','$caja','$rack','$sku','$descripcion','$cantidad','$columna','$nivel','$fechareg','$cantidad')";
        //$consulta = "INSERT INTO datos( nombre, email, fecha_registro) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
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
    } else {
            ?>
            <div class="alert alert-dark"  style="width:100px; margin: 0 0 0  260px " role="alert">
            ¡complete los cargos!
            </div>  
            <?php
        }
    }






?>