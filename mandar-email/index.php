<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="text" name="asunto">
        <textarea placeholder ="mensaje" name="mensaje"></textarea>
        <input type="submit" name="enviar">
    </form>

     <?php
     include('email.php')
    ?> 
</body>
</html>