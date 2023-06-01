<?php
include('con_db.php');

$_POST['buscar'];

$sql_read ="SELECT * FROM datos WHERE sku LIKE '%".$buscar."%' OR descripcion LIKE '%".$buscar."%'  OR fecha_ingreso LIKE '%".$buscar."%' ";

$sql_query=mysqli_query($conex,$sql_read);





?>