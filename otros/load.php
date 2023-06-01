<?php
 
 include('con_db.php');

$colum = [	
    'stiba',
    'caja',
    'rack',	
    'columna',	
    'nivel',	
    'sku',	
    'descripcion',	
    'cantidad',		
    'fecha_ingreso'	
];
$table = "datos";

$campo = isset($_POST['campo']) ? $conex->real_escape_string($_POST['campo']) : null;

$where = '';

if($campo != null){
    $where = "WHERE (";

    $cont = count($colum);
    for($i = 0; $i < $cont; $i++) {
        $where .= $colum[$i] . "LIKE '%". $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
} 

$sql = "SELECT " . implode(", ", $colum) . "
FROM $table
$where ";



$resultado = $conex->query($sql);
$num_rows = $resultado-> num_rows;

$html= '';

if($num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$row['stiba'].'</td>';
        $html .= '<td>'.$row['caja'].'</td>';
        $html .= '<td>'.$row['rack'].'</td>';
        $html .= '<td>'.$row['columna'].'</td>';
        $html .= '<td>'.$row['nivel'].'</td>';
        $html .= '<td>'.$row['sku'].'</td>';
        $html .= '<td>'.$row['descripcion'].'</td>';
        $html .= '<td>'.$row['cantidad'].'</td>';
        $html .= '<td>'.$row['fecha_ingreso'].'</td>';
        $html .= '</tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="7">sin resultados</td>';
    $html .= '</tr>';
}
 echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>