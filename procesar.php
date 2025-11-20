<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos del Formulario | Milena Store</title>

  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

  <div class="container py-5">

    <h2 class="text-center mb-4">Datos Enviados desde el Formulario</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $genero = $_POST["genero"];
        $talla = $_POST["talla"];
        $fecha = $_POST["fecha"];
        $producto_fav = $_POST["producto_fav"];
        $comentarios = $_POST["comentarios"];
        $suscripcion = isset($_POST["suscripcion"]) ? "Sí" : "No";

        echo '
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>Campo</th>
                <th>Dato</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Nombre</td><td>'.$nombre.'</td></tr>
              <tr><td>Correo electrónico</td><td>'.$correo.'</td></tr>
              <tr><td>Teléfono</td><td>'.$telefono.'</td></tr>
              <tr><td>Dirección</td><td>'.$direccion.'</td></tr>
              <tr><td>Género</td><td>'.$genero.'</td></tr>
              <tr><td>Talla preferida</td><td>'.$talla.'</td></tr>
              <tr><td>Fecha de nacimiento</td><td>'.$fecha.'</td></tr>
              <tr><td>Producto favorito</td><td>'.$producto_fav.'</td></tr>
              <tr><td>Comentarios</td><td>'.$comentarios.'</td></tr>
              <tr><td>Suscripción</td><td>'.$suscripcion.'</td></tr>
            </tbody>
          </table>
        </div>';
    } else {
        echo '<p class="text-center">No se han enviado datos.</p>';
    }
    ?>

    <div class="text-center mt-4">
      <a href="index.html" class="btn btn-dark px-4">Volver a la página principal</a>
    </div>

  </div>

  <footer class=" text-black
  
  
  
  
  
  
  
  
  
  text-center py-3 mt-5">
    &copy; 2025 Milena Store | Todos los derechos reservados
  </footer>

</body>

</html>
