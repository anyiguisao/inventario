<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    
    
    <form method="post" >
        <h1>!Invetario!</h1>
        <input type="text" name="stiba" placeholder="Stiba" >
        <input type="text" name="caja" placeholder=" Caja" >
        <input type="text" name="rack" placeholder="Rack" >
        <input type="text" name="columna" placeholder="Columan" >
        <input type="text" name="nivel" placeholder="Nivel" >
        <input type="text" name="sku" placeholder="Sku" >
        <input type="text" name="descripcion" placeholder="Descripcion" >
        <input type="text" name="cantidad" placeholder=" cantidad" >
        <input type="submit" name="register" >
        <a href="hola.php">holaaaaaaa</a>
        <a href="index2.php">holaaaaaaa</a>
    </form>
    
    <?php
    include("registro.php");
    
    ?>

</body>
</html>