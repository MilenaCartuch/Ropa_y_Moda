<!DOCTYPE html>  
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos del Formulario | Milena Store</title>

  <!-- TAILWIND CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white text-black min-h-screen flex flex-col">

  <!-- NAVBAR SIMPLE -->
  <nav class="bg-gray-800 p-4 shadow-md">
    <h1 class="text-xl font-bold text-white text-center">Milena Store</h1>
  </nav>

  <main class="flex-grow">
    <div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">

      <h2 class="text-2xl font-bold mb-6 text-center text-black">Datos Enviados desde el Formulario</h2>


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
          <table class="w-full border border-black rounded-lg overflow-hidden bg-white text-black">
            <tr class="bg-white border-b border-black">
              <th class="px-4 py-2 text-left text-black">Campo</th>
              <th class="px-4 py-2 text-left text-black">Datos</th>
            </tr>

            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Nombre</td><td class="px-4 py-2 text-black">'.$nombre.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Correo electrónico</td><td class="px-4 py-2 text-black">'.$correo.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Teléfono</td><td class="px-4 py-2 text-black">'.$telefono.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Dirección</td><td class="px-4 py-2 text-black">'.$direccion.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Género</td><td class="px-4 py-2 text-black">'.$genero.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Talla preferida</td><td class="px-4 py-2 text-black">'.$talla.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Fecha de nacimiento</td><td class="px-4 py-2 text-black">'.$fecha.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Producto favorito</td><td class="px-4 py-2 text-black">'.$producto_fav.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Comentarios</td><td class="px-4 py-2 text-black">'.$comentarios.'</td></tr>
            <tr class="border-t border-black"><td class="px-4 py-2 text-black">Suscripción</td><td class="px-4 py-2 text-black">'.$suscripcion.'</td></tr>
          </table>';
      } else {
          echo '<p class="text-center text-gray-300">No se han enviado datos.</p>';
      }
      ?>

      <div class="text-center mt-6">
        <a href="index.html"
          class="inline-block bg-black hover:bg-gray-900 px-6 py-2 rounded-md text-white font-semibold transition">
          Volver a la página principal
        </a>
      </div>


    </div>
  </main>

  <!-- FOOTER OSCURO -->
  <footer class="bg-black text-white text-center py-4 mt-10">
    &copy; 2025 Milena Store | Todos los derechos reservados
  </footer>

</body>
</html>
