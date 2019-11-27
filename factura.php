<!DOCTYPE html>
<html>
<head>
    <title>Factura</title>
</head>
<body>
    <div class="tablas">
    <table border="4" style="margin: 0 auto;">
        <tr>
            <td>Id-Factura</td>
            <td>Precio</td>
        </tr>    
        <?php
        include("php/conexion2.php");
        $query = "SELECT * FROM facturas";
			$resultado = $db_connection->query($query);
			while($row=$resultado->fetch_assoc()){ 
            ?>
            <tr>
                <td><?php echo $row['idFactura']; ?></td>
            	<td><?php echo $row['precio']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
    </div>
</body> 
</html>