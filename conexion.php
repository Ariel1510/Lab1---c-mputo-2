
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilosin.css">
</head>
<body>
    
</body>
</html>

<?php
    $conexion = mysqli_connect("localhost", "root", "", "kfc");

    
    if(mysqli_connect_errno()){
        echo "Error al conectar: ".mysqli_connect_error();

    }else{
        echo "<h1 class='text2h1'> Conexión exitosa </h1>";
    }
?>
