<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idJugador"];
  $resultado = $conexion->query("SELECT * FROM jugador WHERE equipo=".$id);
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
            <li><a href="index.php">Volver</a></li>
          </ul>
        </div>
      </nav>
      <table>
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Posicion</td>
        <td>Id Capitan</td>
        <td>Fecha de Alta</td>
        <td>Salario</td>
        <td>Equipo</td>
        <td>Altura</td>
      </tr>
      <?php
     foreach ($resultado as $jugador) {
       echo "<tr>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<td>".$jugador['apellido']."</td>";
        
          if ($jugador['posicion'] == "Base") {
            echo "<td><b>".$jugador['posicion']."</b></td>";
          }
          else {
            echo "<td>".$jugador['posicion']."</td>";
          }
        echo "<td>".$jugador['id_capitan']."</td>";
        echo "<td>".$jugador['fecha_alta']."</td>";
        echo "<td>".$jugador['salario']."</td>";
        echo "<td>".$jugador['equipo']."</td>";
        echo "<td>".$jugador['altura']."</td>";
       echo "</tr>";
     }
   ?>
</table>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>