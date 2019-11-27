<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META HTTP-EQUIV="REFRESH" CONTENT="10;URL=../numeroDeReserva.html">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="messageIdReserva">
        <?php
        include('conexion2.php');
            $query = "SELECT MAX(idReserva) as id FROM reservas";
            $resultado = $db_connection->query($query);
            $row=$resultado->fetch_assoc();
            $idReserva = $row['id'];
            ?>
            <div class="alert alert-success">Tu numero de Reserva es el<?php echo ' '.$idReserva ?> </div>
    </div>
</body>

</html>