<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <table border="4" style="margin: 0 auto;">
        <tr>
            <td>id</td>
            <td>cedula</td>
            <td>nombre</td>
            <td>correo</td>
            <td>genero</td>
            <td>telefono</td>
        </tr>    
        <?php
        include("php/conexion2.php");
        $query = "SELECT * FROM clientes";
			$resultado = $db_connection->query($query);
			while($row=$resultado->fetch_assoc()){ 
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cedula']; ?></td>
            	<td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>