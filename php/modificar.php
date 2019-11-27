<?php
include ("Conexion.php");
$idReserva=$_REQUEST['idReserva'];
$idFactura=$_REQUEST['idFactura'];


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


$query = "UPDATE  reservas SET idHabitacion='$habitacion', idFactura='$idFactura', origen='$origen',destino='$destino',ida=STR_TO_DATE( '$ida', '%Y-%m-%d'),vuelta=STR_TO_DATE( '$vuelta', '%Y-%m-%d'),personas=$personas WHERE idReserva = '$idReserva'";
//$query = "UPDATE  reservas SET idHabitacion='1', idFactura='3', origen='$origen',destino='$destino',ida='2019-03-01',vuelta='2020-04-01',personas=5 WHERE idReserva = '$idReserva'";

$resultado = $db_connection->query($query);
if ($resultado) {
	header("Location: ../index.html");
}else{
	echo "Insercion no exitosa";
}
?>