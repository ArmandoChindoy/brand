<?php
include ("Conexion.php");
$id=$_REQUEST['idCliente'];
$cedula=$_POST['cedula'];
$nombre=$_POST['name'];
$correo=$_POST['email'];
$sexo=$_POST['sexo'];
$phone = $_POST['phone'];

$query = "INSERT INTO clientes (cedula,nombre,correo,genero,telefono) VALUES('$cedula','$nombre', '$correo','$sexo','$phone')";
$resultado = $conexion->query($query);
if ($resultado) {
	header("Location: tabla.php");
}else{
	echo "Insercion no exitosa";
}
?>