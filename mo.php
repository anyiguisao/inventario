<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  
  include("con_db.php");
  
?>


<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

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
