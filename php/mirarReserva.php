<?php
include('conexion2.php');

$idReserva=$_POST['idReserva'];

$query = "SELECT * FROM reservas WHERE idReserva=$idReserva";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();

$idFactura = $row['idFactura'];




$reserva = array($row['origen'],$row['destino'], $row['ida'], $row['vuelta'],$row['idHabitacion'] ,$row['personas']);

$query = "SELECT * FROM habitaciones WHERE idHabitacion=$reserva[4]";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();

$reserva[4]=$row['nombre'];

$query = "SELECT * FROM facturas WHERE idFactura=$idFactura";
$resultado = $db_connection->query($query);
$row=$resultado->fetch_assoc();

$precioFactura=$row['precio'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/animation.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../images/hotel.png">
    <link rel="stylesheet" href="../css/estilos_mobile.css">
    <link rel="stylesheet" href="../Icons/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Aquí empieza el navbar -->
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <nav class="fadeInDown ">
        <div class="brand_image">
            <a href="../index.html"><img src="../images/logo2.png" alt=""></a>
        </div>
        <div class="nav_options menu">
            <ul>
                <li>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9KA9XMSALSZFY"><img src="../images/online-store.png" alt="carrito.png"></a>
                </li>
                <li>
                    <a href="../register.html">Registrarse</a>
                </li>
                <li>
                    <a href="../numeroDeReserva.html">Reservas</a>
                </li>
                <li>
                    <a href="../tablas.html">BD</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Aquí acaba el navbar -->
    <div class="main_section">
        <h1 class="fadeIn">
            Mira tu reserva
        </h1>
    </div>
    <!-- Aqui comienza el formulario del cliente -->
    <div class="formulario_venta fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="modulo">
                        <form action="modificar.php?idReserva=<?php echo $idReserva;?>&idFactura=<?php echo $idFactura; ?>" method="post">
                            <section class="search_section">
                                <div class="search_box">
                                    <div class="input_part">
                                        <label for="origin">origen</label>
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-target icon_location_destiny"></i>
                                            <input id="origen" class="input_origin" type="text" name="origen" placeholder="Ingresa tu cuidad" value="<?php echo $reserva[0]; ?>">
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <label for="destino">destino</label>
                                        <br>
                                        <div class="input_destiny">
                                            <input id="destino" class="input_destiny" type="text" name="destino" placeholder="Ingresa tu Destino" value="<?php echo $reserva[1]; ?>">
                                            <i class="icon-location icon_location_destiny"></i>
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <label for="fecha">fechas</label>
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-calendar-o icon_location_destiny"></i>
                                            <input id="fecha_ida" type="text" name="ida" placeholder="ida" value="<?php echo $reserva[2]; ?>">
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-calendar-o icon_location_destiny"></i>
                                            <input id="fecha_vuelta" type="text" name="vuelta" placeholder="vuelta" value="<?php echo $reserva[3]; ?>">
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <label for="habitaciones">habitaciones</label>
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-bed icon_location_destiny"></i>
                                            <select name="habitaciones" >
                                                <?php 
                                                if($reserva[4]=='sencilla'){
                                                ?>
                                                    <option value="sencilla" selected>Sencilla</option>
                                                    <option value="doble">Doble</option>
                                                    <option value="suit">Suit</option>
                                                    <option value="suit_precidencial">Suit precidencial</option>
                                                <?php 
                                                }elseif ($reserva[4]=='doble') {
                                                    ?>
                                                    <option value="sencilla">Sencilla</option>
                                                    <option value="doble" selected>Doble</option>
                                                    <option value="suit">Suit</option>
                                                    <option value="suit_precidencial">Suit precidencial</option>
                                                    <?php                                              
                                                }elseif ($reserva[4]=='suit') {
                                                    ?>
                                                    <option value="sencilla">Sencilla</option>
                                                    <option value="doble">Doble</option>
                                                    <option value="suit">Suit</option>
                                                    <option value="suit_precidencial">Suit precidencial</option>
                                                    <?php
                                                }elseif($reserva[4]=='suit_precidencial') {
                                                    ?>
                                                    <option value="sencilla" >Sencilla</option>
                                                    <option value="doble">Doble</option>
                                                    <option value="suit" >Suit</option>
                                                    <option value="suit_precidencial" selected>Suit precidencial</option>
                                                    <?php 
                                                }                                             
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <label for="guests">personas</label>
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-user icon_location_destiny"></i>
                                            <input id="personas" type="number" name="personas" min="1" value="<?php echo $reserva[5]; ?>">
                                        </div>
                                    </div>
                                    <div class="input_part">
                                        <label for="guests">Precio De la Reserva</label>
                                        <br>
                                        <div class="input_destiny">
                                            <i class="icon-user icon_location_destiny"></i>
                                            <input id="personas" readonly="readonly" type="text" name="personas" min="1" value="<?php echo $precioFactura; ?>">
                                        </div>
                                    </div>
                                    <input type="submit" class="main_button" name="submit" value="Guardar">
                                    <div class="deleteButton_container">
                                    <a  class="deleteButton" href="eliminar.php?idReserva=<?php echo $idReserva;?>&idFactura=<?php echo $idFactura; ?>">Eliminar</a>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Aqui termina el formulario del cliente -->
    <!-- Aqui termina la reserva -->
    <!-- footer comienza aqui -->
    <footer class="fadeInDown">
        <div class="option">Terminos y condiciones</div>
        <div class="option">contacto@brand.com</div>
    </footer>
    <!-- El footer termina aqui -->
    <script src="scripts/script.js"></script>
    <script src="scripts/script2.js"></script>
</body>
</body>

</html>