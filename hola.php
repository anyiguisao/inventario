<?php

$inc = include("con_db.php");
if ($inc) {
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
            $fechareg = $row['fecha_ingreso'];
            $total = $row['total'];
        ?>
       

         <div class="container d-flex justify-content-center">
            <table >
                <thead >
                    <tr style="border: 10px; border-color: black;">
                        <th>Stiba</th>
                        <th>Caja</th>
                        <th>Rack</th>
                        <th>Columna</th>
                        <th>Sku</th>
                        <th>Nivel</th>
                        <th>Descripcion</th>
                        <th>Total</th>
                        <th>Fecha ingreso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $stiba;  ?></td>
                        <td><?php echo $caja;  ?> </td>
                        <td><?php echo $rack;  ?></td>
                        <td><?php echo $columna;  ?></td>
                        <td><?php echo $sku;  ?></td>
                        <td> <?php echo $nivel;  ?></td>
                        <td><?php echo $descripcion;  ?></td>
                        <td><?php echo $total;  ?> </td>
                        <td><?php echo $fechareg;  ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <?php

    }
}
}
?>