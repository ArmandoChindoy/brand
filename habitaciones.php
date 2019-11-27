<!DOCTYPE html>
<html>
<head>
    <title>Habitaciones</title>
</head>
<body>
    <table border="4" style="margin: 0 auto;">
        <tr>
            <td>Id-Habitacion</td>
            <td>Tipo de habitacion</td>
            <td>Precio</td>
        </tr>    
        <?php
        include("php/conexion2.php");
        $query = "SELECT * FROM habitaciones";
			$resultado = $db_connection->query($query);
			while($row=$resultado->fetch_assoc()){ 
            ?>
            <tr>
                <td><?php echo $row['idHabitacion']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
            	<td><?php echo $row['precio']; ?></td>
                
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>