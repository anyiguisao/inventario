<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
    include ('con_db.php');
    

    $sql = "SELECT * datos";

    $resultado=mysqli_query($conex, $sql);

    while($row=$resultado->fetch_assoc()){
        $resul= $row['id'];
        $resul1= $row['sku'];
        $resul2= $row['stiba'];
        $resul3= $row['rack'];
        $resul4= $row['nivel'];
        $resul5= $row['descripcion'];
        $resul6= $row['total'];


        echo '

            <div class="modal fade" id="staticBackdrop'.$result'"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="modal_editar.php?id='.$resul.'" method="post" class="login">
                <h1 class="login-text">Registro</h1>
                <div class="mb-3">
                    <input type="text" value="'.$resul1.'" class="form-control" name="sku"  placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <input type="text" value="'.$resul2.'" class="form-control" name="stiba" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <input type="text" value="'.$resul3'" class="form-control" name="rack" placeholder="Confirmar Contraseña" >
                </div>
                <div class="mb-3">
                    <input type="text" value="'.$resul4'" class="form-control" name="nivel" placeholder="Confirmar Contraseña" >
                </div>
                <div class="mb-3">
                    <input type="text" value="'.$resul5'" class="form-control" name="descripcion" placeholder="Confirmar Contraseña" >
                </div>
                <div class="mb-3">
                    <input type="text" value="'.$resul6'" class="form-control" name="total" placeholder="Confirmar Contraseña" >
                </div>
           </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="guardar cambios" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Cerrar</button>
                </div>
                </div>
            </div>
            </div>
        ';
    }
    ?>
</body>
</html>