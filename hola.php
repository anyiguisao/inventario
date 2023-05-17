<?php

$inc = include("con_db.php")
if($inc){
    $consulta = "SELECT * FROM datos";
    $resultado= mysqli_query($conex, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $stiba = $row['stiba'];
            $caja = $row['caja'];
            $rack = $row['rack'];
            $sku = $row['sku'];
            $descripcion = $row['descripcion'];
            $cantidad = $row['cantidad'];
            $columna = $row['columna'];
            $nivel = $row['nivel'];
            $fechareg = $row['fechareg'];
        }
        ?>
        <div>
            <h2>hola</h2>
            <div>
                <p>
                    <b>id: </b>
                    <b>estiba: </b>
                    <b>columna</b>
                    <b></b>
                    <b></b>
                    <b></b>
                    <b></b>
                    <b></b>
                    <b></b>
                </p>
            </div>
        </div>
        <?php

    }
}

?>