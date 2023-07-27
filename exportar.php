<?php
include("con_db.php");

$query =mysqli_query($conex, "SELECT * FROM datos");
$docu="detalles.xls";
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires: 0');



$output ="";

'<input type="submit" name="export" class="btn btn-info"  value="export" >';

if(ISSET($_POST['export'])){
    $output .="
    <table>
        <thead>
            <tr>
                <th>Sku</th>
                <th>Estiba</th>
                <th>Caja</th>
                <th>Rack</th>
                <th>columna</th>
                <th>Nivel</th>
                <th>Descripcion</th>
                <th>Total</th>
            </tr>
        
        <tbody>
    
    ";
    
   
    while($row = mysqli_fetch_array($query)){
        $output .= "
        <tr>
            <td style='color:black;'>".$row['sku']."</td>
            <td style='color: black;'>".$row['stiba']."</td>
            <td style='color:black;'>".$row['caja']."</td>
            <td style='color:black;'>".$row['rack']."</td>
            <td style='color:black;'>".$row['columna']."</td>                   
            <td style='color:black;'>".$row['nivel']."</td>
            <td style='color:black;'>".$row['descripcion']."</td>
            <td style='color:black;'>".$row['cantidad']."</td>
        </tr>
        ";

    }
   
    $output .= "
    </tbody> 
    </thead>
    </table>

    ";
    
   
    echo $output;
    
}

  

?>