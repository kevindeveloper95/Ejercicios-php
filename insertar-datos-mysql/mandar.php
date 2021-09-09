

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
    <form action="insertar.php" method="POST" id="form">
                <input type="text" name="nombre" >
                <label for="">Nombre</label>
           
                <input type="email" name="email" >
                <label for="">Email</label>
    
                <input type="text" name="apellido" >
                <label for="">apellido</label>

                <button type="submit">Suscribirte</button>
          
    </form>

    <script src="app.js"></script>

</body>
</html>