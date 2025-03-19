
<?php include("archivo.html"); ?>



<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilosin.css">
 </head>
 <body>
   <div class="contenedor2">
 
      <h1 class="texth1"> Lista de empleados </h1> 
      <?php include("conexion.php"); ?> 

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

      <a href="registrar.php"><button>Registrar Nuevo</button></a>

   </div>
 </body>
 </html>
