


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
    <form action="formulario.php" method="post" id="form">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="nombre" id="name" ><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra"></span>
                <label for="">Password</label>
            </div>
            <!-- <div class="grupo">
                <input type="checkbox" name="checkbox" id="checkbox" ><span class="barra"></span>
                <label for="">checkbox</label>
            </div> -->
            <button type="submit">Suscribirte</button>
            <p class="warnings" id="warnings"></p>
        </div>
    </form>

    <script src="app.js"></script>
</body>
</html>