<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
  if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else{
    $resultado = $conexion->query("SELECT * FROM partido ");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">#</a></li>
          </ul>
        </div>
      </nav>
      <table>
        <tr>
          <th>ID</th>
          <th>Local</th>
          <th>Visitante</th>
          <th>Resultado</th>
        </tr>
        <?php
          foreach ($resultado as $partido) {
            echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td><a href='equipo.php?idEquip=".$partido['local']."'>".$partido['local']."</a></td>";
            echo "<td><a href='equipo.php?idEquip=".$partido['visitante']."'>".$partido['visitante']."</a></td>";
            echo "<td>".$partido['resultado']."</td>";
            echo "</tr>";
          }

         ?>
      </table>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>