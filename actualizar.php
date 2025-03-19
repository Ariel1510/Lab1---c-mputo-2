<?php include("conexion.php");


    $id = $_GET['id'];
    $final=$conexion ->query("SELECT * FROM empleados WHERE id = $id");
    $empleado = $final->fetch_assoc();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<!--     [] es el nombre en la tabla -->
    <form class="form" action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id=""
        value="<?php echo $empleado['name'] ?>">
        <label for="">Carnet</label>
        <input type="text" name="code" id=""  
        value="<?php echo $empleado['code'] ?>">

        <label for="">Fecha de nacimiento</label>
        <input type="date" name="fecha" id="">
        
        <button type="submit">Actualizar registro</button>
        <a href="index.php"><button>Cancelar</button></a>

    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nom = $_POST['nombre'];
            $ct = $_POST['code'];
            $fec = $_POST['fecha'];

            $insercion = $conexion
            ->prepare(" UPDATE empleados SET `name`=? ,code=?, birthdate=? WHERE id = $id");
            $insercion->bind_param("sss",$nom,$ct,$fec);
            $insercion->execute();
            header("Location:index.php");
        }
        ?>
</body>
</html>
