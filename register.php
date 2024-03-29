<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/animation.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/estilos_mobile.css">

  <title>Brand</title>
</head>
<body>
  <!-- Aquí empieza el navbar -->
  <nav class="fadeInDown">
    <div class="brand_image">
      <a href="index.html"><img src="images/logo2.png" alt=""></a>
    </div>
    <div class="nav_options">
      <ul>
        <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9KA9XMSALSZFY"><img src="images/online-store.png" alt="carrito.png"></a></li>
        <li><a href="calendar.html">Shedule</a></li>
      </ul>
    </div>
  </nav>

  <!-- Aquí acaba el navbar -->
  <div class="formulario_venta fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="modulo">
          <div class="modulo_image">
          <img src="images/miami.jpg" alt="miami.jpg" style="width: 100%">
          </div>
        <h3>
        Venta
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, quis. Totam explicabo quas doloribus autem, quaerat, itaque! Consectetur dolorem cupiditate voluptatem alias fuga illum, porro repudiandae modi, voluptate libero iste.</p>
        </div>
      </div>
      <div class="col-8">
        <div class="modulo">
          <form action="Operacion_guardar.php" method="POST">
            <label for="cedula">Cedula</label>
            <input type="text" placeholder="" name="cedula" class="data">
            <br>
            <br>
            <label for="name">Name</label>
            <input type="text" placeholder="" name="name" class="data">
            <br>
            <br>
            <label for="mail">e-mail</label>
            <br>
            <input type="text" name="email" class="data">
            <br>
            <br>
            <label for="Sexo">Sexo</label>
            <input type="text" name="sexo" class="data">
            <br>
            <br>
            <label for="phone">Phone</label>
            <br>
            <input type="text" name="phone" class="data"> 
            <input type="submit" class="main_button" name="submit" value="confirmar pago">
          </form>
        </div>
      </div>
     </div>
  </div>
  </div>
  <!-- footer comienza aqui -->
<footer class="fadeInDown">
      <div class="option">Terminos y condiciones</div>
      <div class="option">contacto@brand.com</div>
    </footer>
   <!-- El footer termina aqui -->

<script src="scripts/scrip.js"></script>
</body>
</html>
