<?php
$user_db="root";
$pass_db="";
$db_name="DBPweb1";
$host_db="127.0.0.1:3308"; 
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion peto: ".$conexion->connect_error);
}

?>