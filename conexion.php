 <?php
    $conexion = mysqli_connect("localhost", "root", "", "kfc");


    if(mysqli_connect_errno()){
        echo "Error al conectar: ".mysqli_connect_error();

    }else{
        echo "Conexión exitosa";
    }
?>