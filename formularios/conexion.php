<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = 'socrates95';
$basededatos = 'formulario';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

