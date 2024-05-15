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
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="number" name="email" value="'.$row['email'].'"></td>';
      echo '<td><input style="border: 2px solid #aaaa; border-radius: 10px; text-align: center;" type="text" name="champ_favorito" value="'.$row['champ_favorito'].'"></td>';
      echo "<td>" . $row['fecha_registro'] . "</td>";
      echo '<td><button style="border: 2px solid cornflowerblue; border-radius: 10px; background: cornflowerblue; padding: 3px; text-align: center; font-weight: bold; font-size: 0.9em;" type="submit"> Guardar </button></td>';
      echo '<td><button style="border: 2px solid orange; border-radius: 10px; background: orange; padding: 3px; text-align: center; font-weight: bold; font-size: 0.9em;" type="cancel"> Cancelar </button></td>';
      echo '<input type="hidden" name="clave_usuario" value="'.$row['clave_usuario'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['apellido'] . "</td>";
      echo "<td>" . $row['pais'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['champ_favorito'] . "</td>";
      echo "<td>" . $row['fecha_registro'] . "</td>";
      echo '<td><a href="cuenta.php?id=' . $row['clave_usuario'] . '" role="button" style="border: 2px solid mediumaquamarine; border-radius: 10px; background: mediumaquamarine; padding: 3px; text-align: center; text-decoration: none; color: black; font-weight: bold; font-size: 0.8em;">Actualizar</a></td>';
      echo '<td><a href="eliminar.php?id=' . $row['clave_usuario'] . '" role="button" style="border: 2px solid tomato; border-radius: 10px; background: tomato; padding: 3px; text-align: center; text-decoration: none; color: black; font-weight: bold; font-size: 0.8em;">Eliminar</a></td>';
    }
    echo "</tr>";
  }
  $conexion->close();
  
  
?>