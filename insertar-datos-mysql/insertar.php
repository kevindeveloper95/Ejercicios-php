
<?php
//CONSULTA A BASE DE DATOS
require_once ('conexion.php');


//TRAER INFORMACION DE LOS FORMULARIOS
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$apellido = $_POST['apellido'];


// HACER LA CONSULTA A LA BASE DE DATOS
$sql = "INSERT INTO forms VALUES(null,'$nombre','$email', '$apellido');";
$guardar = mysqli_query($db, $sql);
/* var_dump(mysqli_error($db));
die(); */

if($guardar){
?> <h3>todo salio bien</h3>  <?php
}else{
	?> <h3>todo mal</h3> <?php
}









?>