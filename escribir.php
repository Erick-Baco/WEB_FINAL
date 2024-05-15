<?php

include 'conexion.php';


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$pais = $_POST["pais"];
$email = $_POST["email"];
$champ_favorito = $_POST["champ_favorito"];

$insertarDatos = "INSERT INTO usuarios (nombre, apellido, pais, email, champ_favorito) VALUES ('$nombre','$apellido','$pais','$email','$champ_favorito')";
 
$conexion->query($insertarDatos);
$conexion->close();

echo "insertado";

/*include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM  usuario WHERE nombre ='$_POST[nombre]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
echo "Encontrado";
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='./index.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO usuario (
        nombre,apellido,pais,email,champ_favorito)
        VALUES(
            '$_POST[nombre]',
            '$_POST[apellido]',
            '$_POST[pais]',
            '$_POST[email]'
            '$_POST[champ_favorito]'

        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='./index.php'>Puedes generar un Nuevo registro</a>";
}*/


?>