<?php
include("con_db.php");

$usuario= $_POST["nombre"];
$contraseña= $_POST["contraseña"];
session_start();

$_SESSION["usuario"]=$usuario;


$sql= "SELECT * FROM usuarios WHERE nombre = '$usuario' AND contraseña = '$contraseña'";
$resultado= mysqli_query($conex,$sql);

$filas=mysqli_fetch_array($resultado);

if($filas["id_cargo"] ==1){

    header("Location:admin.php");


}else
if($filas["id_cargo"] ==2){
    header("Location:operario.php");
}

else{
    ?>
    <div class="alert alert-dark"  style="width:100px; margin: 0 0 0  260px " role="alert">
            ¡complete los cargos!
            </div>
    <?php
    

}
mysqli_free_result($resultado);
mysqli_close($conex);

?>
