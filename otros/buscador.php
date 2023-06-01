<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: rgb(224, 224, 224);">


  <?php
  
    include("con_db.php");
    
?>
 


  
<div class="container d-flex justify-content-center" style="height: 100px; margin: 40px 0 0 100px ">
<form action="" metthod="POST">
    <label for="campo">Buscar</label>
    <input type="text" name="campo" id="campo">
</form>

<br>
<table >
    <thead style="border: 10px; border-color: black; background-color: #0e026b">
        <th>Stiba</th>
        <th>Caja</th>
        <th>Rack</th>
        <th>Columna</th>
        <th>Sku</th>
        <th>Nivel</th>
        <th>Descripcion</th>
        <th>Total</th>
        <th>Fecha ingreso</th>
    </thead>


    <tbody id="content">

    </tbody>
</table>
</div>
<script>
    getData()

    document.getElementById("campo").addEventListener("keyup", getData)

    function getData(){
        let input = document.getElementById("campo").value;
        let content = document.getElementById("content");
        let url = "load.php";
        let formaData = new FormData()
        formaData.append('campo', input)
        
        fetch(url, {
            method: "POST",
            body: formaData
        }).then(response=>response.json())
        .then(data => {
            content.innerHTML = data
        }).catch(err => console.log(err))
    }
</script>
</body>
</html>