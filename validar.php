<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conectar a la base de datos

$conexion= new mysqli("localhost", "root", "12345678", "usuarios");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

//validacion 

if ($conexion->connect_error) {
	die("conexion fallida:" .$conexion->connect_error);
}
$sql = "SELECT * FROM login WHERE usuario='$usuario' and contraseña='$contraseña'";
if ($conexion->query($sql) == TRUE) {
	header("location:bienvenidos.html");
	echo "se creo el usuario";
} 
else {
	echo "error: " .$sql . "<br>" . $conexion->error;
}

$conexion->close();


