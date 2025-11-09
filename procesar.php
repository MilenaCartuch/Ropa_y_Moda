<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos Recibidos - Milena Store</title>
  <style>
    /* ======== ESTILOS GENERALES ======== */
    body {
      font-family: 'Times New Roman', serif;
      background-color:  #87b1d565;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    h2 {
      color: #000000ff;
      text-align: center;
      margin-bottom: 30px;
    }

    /* ======== ESTILOS DE LA TABLA ======== */
    table {
      border-collapse: collapse;
      width: 70%;
      max-width: 800px;
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    th, td {
      border: 1px solid #000000ff;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #000000ff;
      color: white;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    td {
      color: #555;
      background-color: #ffffffff;
    }

    tr:nth-child(even) td {
      background-color: #ffffffff;
    }

    tr:hover td {
      background-color:  #87b1d565;
      transition: background-color 0.3s ease;
    }

    /* ======== BOTÓN DE REGRESO ======== */
    a {
      display: inline-block;
      margin-top: 30px;
      text-decoration: none;
      background-color: #000000ff;
      color: white;
      padding: 10px 25px;
      border-radius: 25px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #000000ff;
    }

    footer {
      margin-top: 40px;
      color: #000000ff;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <h2>Datos Enviados desde el Formulario</h2>

  <!-- ======== TABLA DE DATOS ENVIADOS ======== -->
  <table>
    <tr>
      <th>Campo</th>
      <th>Valor</th>
    </tr>

    <?php
      // Verificar si se enviaron datos por POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $campo => $valor) {
          // Convertir el nombre del campo a una forma legible y segura
          $campo_limpio = ucfirst(htmlspecialchars(str_replace("_", " ", $campo)));
          $valor_limpio = htmlspecialchars($valor);

          echo "<tr><td>$campo_limpio</td><td>$valor_limpio</td></tr>";
        }
      } else {
        echo "<tr><td colspan='2' style='text-align:center;'>No se recibieron datos del formulario.</td></tr>";
      }
    ?>
  </table>

  <!-- ======== BOTÓN PARA VOLVER ======== -->
  <a href="formulario.html">Volver al Formulario</a>

  <footer>
    &copy; 2025 Milena Store | Todos los derechos reservados
  </footer>
</body>
</html>
