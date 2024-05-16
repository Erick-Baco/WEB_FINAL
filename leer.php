<?php
  include 'conexion.php';

  $sql = "SELECT * FROM usuarios";

  echo "<thead>";
  echo "<th>Nombre</th>";
  echo "<th>Apellido</th>";
  echo "<th>Pais</th>";
  echo "<th>Email</th>";
  echo "<th>Main</th>";
  echo "<th>Fecha de Registro</th>";
  echo "</thead>";
  echo "<tbody>";

 
  $result = $conexion->query($sql);
  while($row = $result->fetch_assoc()) {
    if (isset($_GET['clave_usuario']) && $row['clave_usuario'] == $_GET['clave_usuario']) {
      echo '<form action="actualizar.php" method="POST">';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="nombre" value="'.$row['nombre'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="apellido" value="'.$row['apellido'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="pais" value="'.$row['pais'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="email" value="'.$row['email'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="champ_favorito" value="'.$row['champ_favorito'].'"></td>';
      echo "<td>" . $row['fecha_registro'] . "</td>";
      echo '<td><button class="waves-effect waves-light btn-small green " type="submit"> Guardar </button></td>';
      echo '<td><button class="waves-effect waves-light btn-small indigo darken-3" type="submit"> Cancelar </button></td>';
      echo '<input type="hidden" name="clave_usuario" value="'.$row['clave_usuario'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['apellido'] . "</td>";
      echo "<td>" . $row['pais'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['champ_favorito'] . "</td>";
      echo "<td>" . $row['fecha_registro'] . "</td>";
      echo '<td><a href="cuenta.php?clave_usuario=' . $row['clave_usuario'] . '" class="waves-effect waves-light btn-small indigo darken-3">Actualizar</a></td>';
      echo '<td><a href="eliminar.php?clave_usuario=' . $row['clave_usuario'] . '" class="waves-effect waves-light btn-small red lighten-2" >Eliminar</a></td>';
    }
    echo "</tr>";
  }
  $conexion->close();
  
  
?>