<?php

include("con_db.php");



if(isset($_POST['export'])){
    $query =mysqli_query($conex, "SELECT * FROM datos");
    $docu="detalles.xls";
    header('Content-Type: application/vnd.ms-excel; charset=utf-8');
    header('Content-Disposition: attachment; filename='.$docu);
    header('Pragma: no-cache');
    header('Expires: 0');
    echo '<table boder=1> ';
    echo '<tr>';
    echo '<td colspan=4> Detalles</td>';
    echo '</tr>';
    echo '<tr><th>Sku</th>
            <th>Estiba</th>
            <th>Caja</th>
            <th>Rack</th>
            <th>Columna</th>
            <th>Nivel</th>
            <th>Descripcion</th>
            <th>Total</th>
            </tr>';
    while($row = mysqli_fetch_array($query)){
        echo '<tr>';
        echo '<td>'.$row ['sku'].'</td>'; 
        echo '<td>'.$row ['stiba'].'</td>';
        echo '<td>'.$row ['caja'].'</td>';
        echo '<td>'.$row ['rack'].'</td>';
        echo '<td>'.$row ['columna'].'</td>';  
        echo '<td>'.$row ['nivel'].'</td>';
        echo '<td>'.$row ['descripcion'].'</td>';
        echo '<td>'.$row ['cantidad'].'</td>';
    }

    echo '</table>';

}


?>