<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php
include("nav.php");
?>
<body  >

<form method="post"    class="d-flex justify-content-center" style="margin: 40px;  "   >
  <div style=" background-color: #ededed; width:600px; border-radius: 15px; "  >
    <h1 style=" margin: 20px 0 0 230px; font" >Registro</h1>
    <div class="col" style="width:60%; margin: 15px 0 0 120px" >
      <input type="text" class="form-control" name="stiba" placeholder="Stiba" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px">
      <input type="text" class="form-control" name="caja" placeholder=" Caja" style="text-transform:uppercase;" >
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control" name="rack" placeholder="Rack" style="text-transform:uppercase;" >
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control" name="columna" placeholder="Columan" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control"  name="nivel" placeholder="Nivel" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control"  name="sku" placeholder="Sku" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control"  name="descripcion" placeholder="Descripcion" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 0 120px" >
      <input type="text" class="form-control" name="cantidad" placeholder=" cantidad" style="text-transform:uppercase;">
    </div>
    <div class="col" style="width:60%; margin: 6px 0 30px 120px" >
      <input type="submit" class="form-control btn btn-info" name="register"  >  <?php
    include("registro.php");
    
    ?>
    </div>
  </div>

  
</form>


    
    
   

</body>
</html>