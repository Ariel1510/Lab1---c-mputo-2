
<?php include("archivo.html"); ?>
<?php include("conexion.php"); ?> 
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <h1> Lista de empleados <h1>
   <a href="registrar.php"><button>Registrar Nuevo</button></a>
   <?php
      $resultado = $conexion->query("SELECT * FROM empleados");
      echo '    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Fecha de nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $resultado->fetch_assoc()){
         echo "
         <tr>
            <td>{$row['name']}</td>
            <td>{$row['code']}</td>
            <td>{$row['birthdate']}</td>
            <td><a href='eliminar.php?id={$row['id']}'>
               <button>Eliminar</button></a>
            
            <a href='actualizar.php?id={$row['id']}'>
               <button>Actualizar</button></a>
            </td>
         </tr>
         "; 
        }
        echo "</tbody>
                 </table>";
        
        
        ?>

      
 </body>
 </html>
