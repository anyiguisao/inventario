
<?php
$conex = mysqli_connect("localhost", "root", "","inventario");

$output= "";

if(isset($_POST['buscar'])){

    $input=$_POST['input'];

    if(!empty($input)) {

        $query = "SELECT * FROM datos WHERE sku LIKE '%$input%' /*OR caja LIKE '%$input%'*/";

        $res = mysqli_query($conex, $query);

        $output .= "
        <div class='container d-flex justify-content-center' style='height: 100px; margin: 40px 400px 0 100px '>
            <table>
                <tr style='border: 10px; border-color: black; background-color: #0e026b'>
                    <th>Sku</th>
                    <th>Estiba</th>
                    <th>Caja</th>
                    <th>Rack</th>
                    <th> columna</th>
                    <th>Nivel</th>
                    <th>Descripcion</th>
                    <th>Total</th>
                    <th>Fecha ingreso</th>
                    
                </tr>
          
        ";

        if(mysqli_num_rows($res) < 1 ){

            $output .="
            <div class='d-flex justify-content-center'>
            <tr>
            <td style='color: black;' > no hay resltados </td>
            </tr>
            </div>
            ";
        }else{
            while($row = mysqli_fetch_array($res)){
                $output .="
                <tr>
                    <td style='color:black;'>".$row['sku']."</td>
                    <td style='color: black;'>".$row['stiba']."</td>
                    <td style='color:black;'>".$row['caja']."</td>
                    <td style='color:black;'>".$row['rack']."</td>
                    <td style='color:black;'>".$row['columna']."</td>                   
                    <td style='color:black;'>".$row['nivel']."</td>
                    <td style='color:black;'>".$row['descripcion']."</td>
                    <td style='color:black;'>".$row['cantidad']."</td>
                    <td style='color:black;' >".$row['fecha_ingreso']."</td>
                    <td>
                          <form action='listado.php'  method='post' >
                          <div class='botones' >
                              <td><button class='btn'  type='submit'  name='sumar'  style='background-color:  rgba(5, 17, 251, 0.3)' >+</button></td>
                              <td><input type='number' name='input'  style='width:45px'></td>
                              <input type='number' hidden name='id' style='width:45px'value=".$row['id'].">  
                              <td><button class='btn' type='submit'  name='restar' style='background-color: rgba(5, 17, 251, 0.3)'>-</button></td>
                          </div> 
                          </form>
                    </td> 
                    
                </tr>
                </div>
                ";
                
            }
        }
    }


}
?>

<?php

if (isset($_POST['sumar'])) {
    date_default_timezone_set('America/Bogota');
    $formated_DATE = date('(d/m/y) H:i:s');
    $input= $_POST['input'];
    $id= $_POST['id'];
    $suma= '+';
    if(!empty($input)){
        $tabla = "INSERT INTO entrada_salida(id,signo,cantidad,fecha) VALUES ('$id','$suma','$input','$formated_DATE')";
        $sql = "UPDATE datos SET cantidad = cantidad + $input WHERE id = '$id'";
        //$datos="SELECT sku FROM datos INNER JOIN entrada_salida ON datos.id = entrada_salida.id";
        $resultado = mysqli_query($conex, $sql );
        $resultado2 = mysqli_query($conex, $tabla); 
        //$resultado3 = mysqli_query($conex, $datos); 
}   
}



if (isset($_POST['restar'])) {
    date_default_timezone_set('America/Bogota');
    $formated_DATE = date('(d/m/y) H:i:s');
    $input= $_POST['input'];
    $id= $_POST['id'];
    $resta= '-';
    if(!empty($input)){
        $tabla = "INSERT INTO entrada_salida(id,signo,cantidad,fecha) VALUES ('$id','$resta','$input','$formated_DATE')";
        $sql = "UPDATE datos SET cantidad = cantidad - $input WHERE id = '$id'";
        $resultado = mysqli_query($conex, $sql );
        $resultado2 = mysqli_query($conex, $tabla);
    } 
    }

?>