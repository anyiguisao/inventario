<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
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
    </form>
    
    <?php
    include("registro.php");

    ?>

</body>
</html>