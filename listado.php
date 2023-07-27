<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="listado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224); ">

<?php
  
  include("nav.php");
  
?>
  <?php
  
    include("con_db.php");
    
?>
<?php
    $sql="SELECT SUM(cantidad) as 'cantidad' FROM datos";
    $resul=mysqli_query($conex,$sql);
    $data= mysqli_fetch_array($resul);
    $caja= $data['cantidad'];
    ?>
    <div class="d-flex felx-row justify-content-between">
    <div class="container d-flex justify-content-center align-items-center" style="width: 20%; height: 60px; font-size:25px ; margin: 20px 0 0 105px; background-color: rgba(123, 116, 254, 0.2); border-radius: 20px;" >Cantidad total: <?php echo $caja ?></div>
        <form action="exportar.php" method="post" style="margin: 30px 137px 0 0;">
            <input class="border-0" style="width: 100%; height: 60px; background-color: rgba(5, 17, 251, 0.3); border-radius: 20px;" type="submit" name="export"   value="exportar" >
        </form>
    </div>
<div class="container d-flex justify-content-center" style="height: 100px; margin: 20px 0 0 100px ">
  
<table style="border-radius: 20px;">
    <tr style="border: 10px; border-color: black; background-color: #0e026b">
        <th>Sku</th>
        <th>Estiba</th>
        <th>Caja</th>
        <th>Rack</th>
        <th>Columna</th>
        <th>Nivel</th>
        <th>Descripcion</th>
        <th>Total</th>
        <th>Fecha ingreso</th>
        <th><br></th>   
        <th>Entrada</th>
        <th >Cantidad</th>
        <th>Salida</th>
        <br><br>
        <th>Eliminar</th>
        <th>Editar</th>
    </tr>

    <?php
    $sql="SELECT * FROM datos";
    $resul=mysqli_query($conex,$sql);
    while($mostrar=mysqli_fetch_array($resul)){
    ?>

    <tr >
        <td style="color:black;text-transform:uppercase;"><?php echo $mostrar['sku']?></td>
        <td style="color: black;"><?php echo $mostrar['stiba']?></td>
        <td style="color:black;"><?php echo $mostrar['caja']?></td>
        <td style="color:black;text-transform:uppercase;"><?php echo $mostrar['rack']?></td>
        <td style="color:black;"><?php echo $mostrar['columna']?></td>
        <td style="color:black;"><?php echo $mostrar['nivel']?></td>
        <td style="color:black; text-transform:uppercase;" ><?php echo $mostrar['descripcion']?></td>
        <td style="color:black;"><?php echo $mostrar['cantidad']?></td>
        <td style="color:black; " ><?php echo$mostrar['fecha_ingreso']?></td>
        <td style="color:black;">
            <form method="post">
            <div class="botones" >
                <td><button class="btn"  type="submit" name="sumar"  style="background-color:  rgba(5, 17, 251, 0.3)"  >+</button></td>
                <td><input type="number" name="input" style="width:45px"></td>
                <input type="number" hidden name="id" style="width:45px" value="<?php echo $mostrar['id']?>">
                <td><button class="btn" type="submit" name="restar" style="background-color: rgba(5, 17, 251, 0.3)">-</button></td>
            </div> 
            </form>    
        </td> 
        <td >  
            
        
        <?php   echo "<a  href='eliminar.php?id=".$mostrar['id']."' > <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
            </svg></a> "
        ?>
        
       
        </td>
        <td>
        
        
         <?php  echo "<a href='mo.php?id=".$mostrar['id']."'>Editar<svg xmlns='http://www.w3.org/2000/svg' width=25' height='25' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
            </svg></a>"; 
        ?>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>

<div class="container">

 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <form action="editar.php" method="post">
            <?php

                $sql = "SELECT * FROM datos WHERE id =" . $_REQUEST['id'];
                $resultado = mysqli_query($conex,$sql);
                
                while($row = mysqli_fetch_array($resultado)){
                ?>
                 <div class="col" style="width:60%; margin: 15px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['stiba']; ?>" name="stiba" placeholder="Estiba" style="text-transform:uppercase;">
                </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px">
                    <input type="text" class="form-control" value="<?php echo $row['caja']; ?>" name="caja" placeholder=" Caja" style="text-transform:uppercase;" >
                </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['rack']; ?>" name="rack" placeholder="Rack" style="text-transform:uppercase;" >
                </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['columna']; ?>" name="columna" placeholder="Columan" style="text-transform:uppercase;">
                </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['nivel']; ?>"  name="nivel" placeholder="Nivel" style="text-transform:uppercase;">
                </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['sku']; ?>"  name="sku" placeholder="Sku" style="text-transform:uppercase;">
                </div>
                    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                <input type="text" class="form-control" value="<?php echo $row['descripcion']; ?>"  name="descripcion" placeholder="Descripcion" style="text-transform:uppercase;">
                    </div>
                <div class="col" style="width:60%; margin: 6px 0 0 120px" >
                    <input type="text" class="form-control" value="<?php echo $row['cantidad']; ?>" name="cantidad" placeholder=" cantidad" style="text-transform:uppercase;">
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo  $_REQUEST['id']; ?>">
                
                <div class="col" style="width:60%; margin: 6px 0 30px 120px" >
                    <input type="submit" class="form-control btn btn-info" name="editar"  value="guardar"  >
                
                </div>
                <?php

                }
           
            ?>
           


        </form>

        <?php

if( isset( $_POST['editar'])){


    $sql = "UPDATE datos  SET sku ='". $_POST['sku']. "', caja ='". $_POST['caja'] ."', stiba ='". $_POST['stiba'] ."',
    rack ='". $_POST['rack'] ."', columna='". $_POST['columna'] ."', nivel ='". $_POST['nivel'] ."', descripcion ='". $_POST['descripcion'] ."',
    cantidad ='". $_POST['cantidad'] ."' WHERE id =" . $_REQUEST['id'];

    $resultado = mysqli_query($conex, $sql);

    if($resultado){
        
        header("Location: listado.php");
    }else{
        echo "Error";
    }
    mysqli_close($conex);

}

?>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



</body>
</html>

