<?php
include ('conexion.php');

$usuarios = "SELECT * FROM formulario"


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    
<?php
    $resultado = mysqli_query($db,$usuarios);
    while($row = mysqli_fetch_assoc($resultado)) {?>
    <div><?php echo $row['nombre']; ?></div>
    <div><?php echo $row['email']; ?></div>
    <div><?php echo $row['password']; ?></div>
    <div><?php echo $row['checkbox']; ?></div>  
      
<?php  } mysqli_free_result($resultado); ?>
   
</body>
</html>