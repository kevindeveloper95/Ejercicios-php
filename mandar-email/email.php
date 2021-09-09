<?php


/* if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) &&  !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: kemen95@hotmail.com" . "\r\n";
        $header .= "Reply-To: kemen95@hotmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $email = @mail($email, $asunto,$mensaje,$header);
        if ($email) {
           echo "<h4>el mensaje se envio correctamente  </h4>";
        }
    }
} */


$destinatario = 'kemen95@hotmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$header = "enviado desde la pagina de kevin";
$mensajecompleto = $mensaje . "\nAtentamente:" . $name;

mail($destinatario, $asunto,$mensajecompleto,$header);

echo "<script>alert('todo salio bien')</script>"; 
echo "<script>Timeout(\"location.href='index.php'\",1000)</script>";

