<?php
include ("Conexion.php");
$idReserva=$_REQUEST['idReserva'];
$idFactura=$_REQUEST['idFactura'];

$query= "DELETE FROM reservas WHERE idReserva=$idReserva";
$resultado = $db_connection->query($query);
$query= "DELETE FROM facturas WHERE idFactura=$idFactura";
$resultado = $db_connection->query($query);
if ($resultado) {
	header("Location: deletComplete.php");
}else{
	echo "Insercion no exitosa";
}
?>