
<?php
$conex = mysqli_connect("localhost", "root", "","inventario");

$output= "";

if(isset($_POST['buscar'])){

    $input=$_POST['input'];

    if(!empty($input)) {

        $query = "SELECT * FROM entrada_salida WHERE cantidad LIKE '%$input%' /*OR caja LIKE '%$input%'*/";

        $res = mysqli_query($conex, $query);

        $output .= "
        <div class='container d-flex justify-content-center' style='height: 100px; margin: 40px 400px 0 100px '>
            <table>
                <tr style='border: 10px; border-color: black; background-color: #0e026b'>
                    <th>signo</th>
                    <th>cantidad</th>
                    <th>fecha</th>
                    
                    
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
                    <td style='color:black;'>".$row['signo']."</td>
                    <td style='color: black;'>".$row['cantidad']."</td>
                    <td style='color:black;'>".$row['fecha']."</td>
                    
                    
                </tr>
                </div>
                ";
                
            }
        }
    }


}
?>

