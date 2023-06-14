<?php
$id=$_GET["id"];
include "con_db.php";

$sql="DELETE FROM datos WHERE id='".$id."'";    
$resultado = mysqli_query($conex, $sql);

if ($resultado){
    echo "
    <script lenguaje='javaScript'>  
    alert ('Eliminado');
    location.assign('listado.php')
    </script>";
}else{
    echo "
    <script lenguaje='javaScript'>  
    alert ('No eliminado');
    location.assign('listado.php')
    </script>";
}



?>