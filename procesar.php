<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos del Formulario | Milena Store</title>
</head>

<body>

  <h2>Datos Enviados desde el Formulario</h2>

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

      echo "<table>
              <tr><th>Campo</th><th>Dato</th></tr>
              <tr><td>Nombre</td><td>$nombre</td></tr>
              <tr><td>Correo electrónico</td><td>$correo</td></tr>
              <tr><td>Teléfono</td><td>$telefono</td></tr>
              <tr><td>Dirección</td><td>$direccion</td></tr>
              <tr><td>Género</td><td>$genero</td></tr>
              <tr><td>Talla preferida</td><td>$talla</td></tr>
              <tr><td>Fecha de nacimiento</td><td>$fecha</td></tr>
              <tr><td>Producto favorito</td><td>$producto_fav</td></tr>
              <tr><td>Comentarios</td><td>$comentarios</td></tr>
              <tr><td>Suscripción</td><td>$suscripcion</td></tr>
            </table>";
  } else {
      echo "<p>No se han enviado datos.</p>";
  }
  ?>

  <a href="index.html">Volver a la página principal</a>

  <footer>
    &copy; 2025 Milena Store | Todos los derechos reservados
  </footer>

</body>
</html>
