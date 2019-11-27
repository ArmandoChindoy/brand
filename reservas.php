<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
</head>
<body>
    <table border="4" style="margin: 0 auto;">
        <tr>
            <td>Id-Reserva</td>
            <td>Id-Cliente</td>
            <td>Id-Habitacion</td>
            <td>Id-Factura</td>
            <td>Origen</td>
            <td>Destino</td>
            <td>Ida</td>
            <td>Vuelta</td>
            <td>Cantidad de Personas</td>
        </tr>    
        <?php
        include("php/conexion2.php");
        $query = "SELECT * FROM reservas";
			$resultado = $db_connection->query($query);
			while($row=$resultado->fetch_assoc()){ 
            ?>
            <tr>
                <td><?php echo $row['idReserva']; ?></td>
                <td><?php echo $row['idCliente']; ?></td>
            	<td><?php echo $row['idHabitacion']; ?></td>
                <td><?php echo $row['idFactura']; ?></td>
                <td><?php echo $row['origen']; ?></td>
                <td><?php echo $row['destino']; ?></td>
                <td><?php echo $row['ida']; ?></td>
                <td><?php echo $row['vuelta']; ?></td>
                <td><?php echo $row['personas']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>