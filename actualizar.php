<?php
include 'conexion.php';
  
$clave_usuario = $_POST['clave_usuario'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$pais = $_POST["pais"];
$email = $_POST["email"];
$champ_favorito = $_POST["champ_favorito"];
$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', pais='$pais', email='$email', champ_favorito='$champ_favorito' WHERE clave_usuario=$clave_usuario";
$result = $conexion->query($sql);
$conexion->close();

header("Location: cuenta.php");
?>