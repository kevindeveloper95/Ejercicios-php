 <?php
 
	
/* 	// Conexión a la base de datos
	require_once 'conexion.php';

	// Recorger los valores del formulario de actulizacion
	$nombre = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellidos
	if(!empty($password) && !is_numeric($password) && !preg_match("/[0-9]/", $password)){
		$password_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válido";
	}
	
	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	$guardar_usuario = false;
	
	if(count($errores) == 0){
		$guardar_usuario = true;

		
		
		// COMPROBAR SI EL EMAIL YA EXISTE
		$sql = "SELECT id, email FROM formulario WHERE email = '$email'";
		$isset_email = mysqli_query($db, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);
		
		$insertar = "INSERT INTO formulario(nombre, email, password,) VALUES 
		('$nombre','$email','$password')";
 */
		
  
  //CONSULTA A BASE DE DATOS
require_once('conexion.php')

//TRAER INFORMACION DE LOS FORMULARIOS
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


// HACER LA CONSULTA A LA BASE DE DATOS
$insertar = "INSERT INTO formulario(null,nombre, email, password,) VALUES 
('$nombre','$email','$password')";


$resultado = mysqli_query($db,$insertar);
var_dump(mysqli_error($resultado))
die()


if ($resultado)){
 echo var_dump($resultado)
}else{
	echo var_dump($resultado)
}





