<?php
include('conexion.php');
$cedula=$_POST['cedula'];
$nombre=$_POST['name'];
$correo=$_POST['email'];
$genero=$_POST['genero'];
if (strcasecmp($genero, 'mujer') == 0) {
	$genero='m';
}else{
	$genero='h';
}
$telefono=$_POST['telefono'];

$query = "INSERT INTO clientes(cedula,nombre,correo,genero,telefono) VALUES('$cedula','$nombre','$correo', '$genero', '$telefono')";
$resultado = $db_connection->query($query);

$query = "SELECT MAX(id) as id FROM clientes";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();
$idCliente = $row['id'];

$habitaciones = array();

$query = "SELECT * FROM habitaciones";
$resultado = $db_connection->query($query);
$cont=0;
while($row=$resultado->fetch_assoc()){ 
	$habitacion = array($row['idHabitacion'],$row['nombre'],$row['precio']);
	$habitaciones[$cont]=$habitacion;
	$cont+=1;
}




$origen=$_POST['origen'];
$destino=$_POST['destino'];
$habitacion=$_POST['habitaciones'];
$personas=$_POST['personas'];
$ida =$_POST['ida'];
$vuelta =$_POST['vuelta'];

$precio = 0;

foreach ($habitaciones as $value) {
	if ($habitacion==$value[1]) {
		$habitacion = (int) $value[0];
		$precio = $value[2];
	}
}

$date1 = new DateTime($ida);
$date2 = new DateTime($vuelta);
$diff = $date1->diff($date2);


$precio = $precio * $diff->days;



$query = "INSERT INTO reservas(idCliente, idHabitacion, idFactura,origen,destino,ida,vuelta,personas) VALUES($idCliente,$habitacion,null ,'$origen', '$destino', STR_TO_DATE( '$ida', '%d-%m-%Y'),STR_TO_DATE( '$vuelta', '%d-%m-%Y'), $personas)";
$resultado = $db_connection->query($query);

$query = "SELECT MAX(idReserva) as id FROM reservas";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();
$idReserva = $row['id'];


$query = "INSERT INTO facturas(precio) VALUES($precio)";
$resultado = $db_connection->query($query);

$query = "SELECT MAX(idFactura) as id FROM facturas";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();
$idFactura = $row['id'];

$query = "UPDATE reservas SET idFactura = $idFactura  WHERE idReserva = $idReserva;";
$resultado = $db_connection->query($query);


if ($resultado) {
	header("Location: mostrarIdReserva.php");
}else{
	echo "Insercion no exitosa";
}
?>