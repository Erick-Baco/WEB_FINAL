<?php
  include 'conexion.php';

  $clave_usuario = $_GET['clave_usuario'];

  $sql = "DELETE FROM usuarios WHERE clave_usuario = $clave_usuario";
  
  $conexion->query($sql);
  $conexion->close();
  header("Location: cuenta.php");

?>